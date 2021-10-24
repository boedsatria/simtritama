<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Pegawai extends CI_Controller {
	public function __construct()
	{
	  parent::__construct();
	  $this->load->model('VaksinModel');
	}

	public function index()
	{
		$data['pegawai'] = $this->VaksinModel->get_pegawai_all()->result();
		
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('list_pegawai', $data);
		$this->load->view('footer');
	}

	public function cari()
	{
		$data['peserta'] = $this->VaksinModel->get_peserta_all()->result();
		
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('cari_data_peserta', $data);
		$this->load->view('footer');
	}

	public function action()
	{
		$data['v'] = $this->VaksinModel->cari_peserta();

    //    print_r($data['v']);die;
		if($data['v']) :
			$params['data'] = base_url().'peserta/detail/'.$data['v']->id_peserta;
			$params['level'] = 'L';
			$params['size'] = 10;
			$params['savename'] = FCPATH.'qr/'.$data['v']->id_peserta.'.png';
			$this->ciqrcode->generate($params);
		endif;

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('hasil_data_peserta', $data);
		$this->load->view('footer');
	}

	public function detail($id)
	{
		$data['v'] = $this->VaksinModel->detail_peserta($id);

    //    print_r($data['v']);die;
		if($data['v']) :
			$params['data'] = base_url().'peserta/detail/'.$data['v']->id_peserta;
			$params['level'] = 'L';
			$params['size'] = 10;
			$params['savename'] = FCPATH.'qr/'.$data['v']->id_peserta.'.png';
			$this->ciqrcode->generate($params);
		endif;


		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('detail_pegawai', $data);
		$this->load->view('footer');
	}

	public function upload_pegawai()
	{
		$files = $_FILES['files']['tmp_name'];
		if (file_exists($files)):
			$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($files);

			$files = $spreadsheet->getActiveSheet()->toArray(null,true,true,true);

			$data = array();
			$i = 1;
			//KALO BUKAN TEMPLATE SESUAI REDIRECT
			if($files[1]['C'] != "PN") redirect(base_url().'pegawai');
			foreach ($files as $row) {
				// karena data yang di excel di mulai dari baris ke 2
				// maka jika $i lebih dari 1 data akan di masukan ke database
				if ($i > 1 && $row['B'] != '') {
					array_push($data, array(          
						'nama_user'						=> $row['B'],
						'pn_user'						=> $row['C'],
						'password_user'					=> password_hash($row['D'], PASSWORD_DEFAULT),
						'photo_user'					=> $row['E'],
						'unit_kerja'					=> $row['F'],
						'role_user'						=> 2
					));
				}
				$i++;
			}
			
			$this->VaksinModel->insert_batch_pegawai($data);

			redirect(base_url().'pegawai', 'refresh');
		endif;
	}

	public function input_keluarga()
	{
		$alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
		$password = array(); 
		$alpha_length = strlen($alphabet) - 1; 
		for ($i = 0; $i < 8; $i++) 
		{
			$n = rand(0, $alpha_length);
			$password[] = $alphabet[$n];
		}
		$pass = implode($password);


		$data_pegawai = array(
			'nama_user' 		=> $_POST['nama'],
			'email_user' 		=> $_POST['email'],
			'pn_user'			=> $_POST['pn'],
			'password_user'		=> password_hash($pass, PASSWORD_DEFAULT),
			'unit_kerja'		=> $_POST['uker'],
			'perusahaan_user'	=> $_POST['perusahaan'],
			'role_user'			=> 2,
			'kategori_user'		=> $_POST['kategori_user']
		);
		//harus cek sudah terdaftar belum PN nya
		$cek = $this->VaksinModel->cek_pegawai($data_pegawai);

		if($cek > 0):
			$this->update_keluarga($cek);
		else:
			//insert pegawai dulu
			$pegawai = $this->VaksinModel->insert_pegawai($data_pegawai);
			$this->insert_keluarga($data_pegawai, $pegawai);
		endif;
	}
	public function insert_keluarga($data_pegawai, $pegawai)
	{
		//jika sudah ada load data

		//jika belum masuk database
		//cek nik peserta, jika sudah ada minta konfirm hapus dan input ulang
		foreach ($_POST['dp'] as $dx => $dp):
			$birthDate = $dp['tanggal_lahir'];
			$tl = explode("/", $dp['tanggal_lahir']);
			$tgl_lahir = $tl[2].'-'.$tl[1].'-'.$tl[0];
			//explode the date to get month, day and year
			$birthDate = explode("/", $birthDate);
			//get age from date or birthdate
			$age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
				? ((date("Y") - $birthDate[2]) - 1)
				: (date("Y") - $birthDate[2]));
				
			$data_peserta[$dx] = array(
				'nik'				=> $dp['nik'],
				'nama'				=> $dp['nama'],
				'jenis_kelamin'		=> $dp['jenis_kelamin'],
				'tanggal_lahir'		=> $tgl_lahir,
				'referal'			=> $pegawai,
				'umur'				=> $age,
				'no_hp'				=> $dp['no_hp'],
				'alamat_ktp'		=> $dp['alamat'],
				'lokasi_vaksin'		=> $_POST['lokasi_vaksin'],
				'tgl_kedatangan'	=> $_POST['tgl_kedatangan'],
				'jam_kedatangan'	=> $_POST['jam_kedatangan']
			);
		endforeach;

		// print_r($data_peserta);die;
		$peserta = $this->VaksinModel->insert_batch_peserta($data_peserta);

		if ($peserta > 0):
			$message = '<html><body>
				<p>Anda terdaftar sebagai penerima vaksinasi COVID-19 Pada Sentra Vaksinasi BANK BRI </p>

				<table>
					<tr>
						<td>Nama User</td>
						<td>:</td>
						<td>'.$data_pegawai['nama_user'].'</td>
					</tr>
					<tr>
						<td>Email sebagai Login</td>
						<td>:</td>
						<td>'.$data_pegawai['email_user'].'</td>
					</tr>
					<tr>
						<td>Password Login</td>
						<td>:</td>
						<td>'.$data_pegawai['password_user'].'</td>
					</tr>
				</table>
				<strong>Gunakan email ini sebagai login ke aplikasi Pendaftaran Vaksin BRI <a href="http://bit.ly/vaksin_bri">http://bit.ly/vaksin_bri</a></strong>
				<br>

				<table>';

			foreach($data_peserta as $p):
			$message .='
					<tr>
						<td>NIK</td>
						<td>:</td>
						<td>'.$p['nik'].'</td>
					</tr>
					<tr>
						<td>Nama Peserta Vaksin</td>
						<td>:</td>
						<td>'.$p['nama'].'</td>
					</tr>
					<tr>
						<td>Usia</td>
						<td>:</td>
						<td>'.$p['umur'].'</td>
					</tr>
					<tr>
						<td>Jadwal Vaksin</td>
						<td>:</td>
						<td> Tanggal : '.get_field('tanggal_vaksin', 'id_tv', $p['tgl_kedatangan'], 'tanggal_tv').' | Jam : '.get_field('jam_vaksin', 'id_jv', $p['jam_kedatangan'], 'jam_jv').'</td>
					</tr>
			';
			endforeach;

			$message .= '</table></body></html>';

			$this->session->set_flashdata('swal', '
				Swal.fire({
					title: "SUKSES",
					text: "PENDAFTARAN BERHASIL, SILAHKAN HADIR SESUAI JADWAL YANG TELAH DIPILIH!",
					icon: "success"
				});
			');
			send_email($data_pegawai['email_user'], 'Pendaftaran Vaksin BRI '.$data_pegawai['nama_user'], $message);
			$this->action_login($data_pegawai['nama_user'], $data_pegawai['email_user']);
			redirect(base_url());
		else:
			$this->session->set_flashdata('swal', '
				Swal.fire({
					title: "Gagal",
					text: "Inputan Error!",
					icon: "error"
				});
			');
			redirect(base_url());
		endif;
	}


	public function update_keluarga($id)
	{
		$data_pegawai = get_data_user($id);
		// print_r($data_pegawai);die;
		$this->VaksinModel->delete_peserta_by_referal($id);

		foreach ($_POST['dp'] as $dx => $dp):
			$birthDate = $dp['tanggal_lahir'];
			$tl = explode("/", $dp['tanggal_lahir']);
			$tgl_lahir = $tl[2].'-'.$tl[1].'-'.$tl[0];
			//explode the date to get month, day and year
			$birthDate = explode("/", $birthDate);
			//get age from date or birthdate
			$age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
				? ((date("Y") - $birthDate[2]) - 1)
				: (date("Y") - $birthDate[2]));
				
			$data_peserta[$dx] = array(
				'nik'				=> $dp['nik'],
				'nama'				=> $dp['nama'],
				'jenis_kelamin'		=> $dp['jenis_kelamin'],
				'tanggal_lahir'		=> $tgl_lahir,
				'referal'			=> $id,
				'umur'				=> $age,
				'no_hp'				=> $dp['no_hp'],
				'alamat_ktp'		=> $dp['alamat'],
				'lokasi_vaksin'		=> $_POST['lokasi_vaksin'],
				'tgl_kedatangan'	=> $_POST['tgl_kedatangan'],
				'jam_kedatangan'	=> $_POST['jam_kedatangan']
			);
		endforeach;

		// print_r($data_peserta);die;
		$peserta = $this->VaksinModel->insert_batch_peserta($data_peserta);

		if ($peserta > 0):
			$message = '<html><body>
				<p>Anda terdaftar sebagai penerima vaksinasi COVID-19 Pada Sentra Vaksinasi BANK BRI </p>

				<table>';

			foreach($data_peserta as $p):
			$message .='
					<tr>
						<td>NIK</td>
						<td>:</td>
						<td>'.$p['nik'].'</td>
					</tr>
					<tr>
						<td>Nama Peserta Vaksin</td>
						<td>:</td>
						<td>'.$p['nama'].'</td>
					</tr>
					<tr>
						<td>Usia</td>
						<td>:</td>
						<td>'.$p['umur'].'</td>
					</tr>
					<tr>
						<td>Jadwal Vaksin</td>
						<td>:</td>
						<td> Tanggal : '.get_field('tanggal_vaksin', 'id_tv', $p['tgl_kedatangan'], 'tanggal_tv').' | Jam : '.get_field('jam_vaksin', 'id_jv', $p['jam_kedatangan'], 'jam_jv').'</td>
					</tr>
			';
			endforeach;

			$message .= '</table></body></html>';

			$this->session->set_flashdata('swal', '
				Swal.fire({
					title: "Sukses",
					text: "Anda berhasil mendaftarkan anggota keluarga!",
					icon: "success"
				});
			');
			send_email($data_pegawai['email_user'], 'Pendaftaran Vaksin BRI '.$data_pegawai['nama_user'], $message);
			$this->action_login($data_pegawai['nama_user'], $data_pegawai['email_user']);
			redirect(base_url());
		else:
			$this->session->set_flashdata('swal', '
				Swal.fire({
					title: "Gagal",
					text: "Inputan Error!",
					icon: "error"
				});
			');
			redirect(base_url());
		endif;
	}



	public function cek_vgr()
	{
		$nik = $this->VaksinModel->cek_nik_vgr($_POST['nik']);
		// print_r(count($jam));die;
		echo $nik;
	}

	public function action_login($nama, $email)
    {
        $data = $this->VaksinModel->get_login_nama($nama, $email);
        
        if($data == 0):
            $this->session->set_flashdata('error_login', $data);
            redirect(base_url());
        else:
            $newdata = [
                'id_user'           => $data->id_user,
                'pn_user'           => $data->pn_user,
                'nama_user'         => $data->nama_user,
                'photo_user'	    => $data->photo_user,
                'role_user'	        => $data->role_user,
                'logged_in'         => TRUE
            ];
            $this->session->set_userdata('userlogin', $newdata);
            redirect(base_url());
        endif;
    }


}
