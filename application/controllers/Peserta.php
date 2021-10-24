<?php
defined('BASEPATH') OR exit('No direct script access allowed');

use PhpOffice\PhpSpreadsheet\Spreadsheet;
use PhpOffice\PhpSpreadsheet\Writer\Xlsx;

class Peserta extends CI_Controller {
	public function __construct()
	{
	  parent::__construct();
	  $this->load->model('VaksinModel');
	}

	public function index()
	{
		$jam = (!isset($_GET['jam_kedatangan2']) || $_GET['jam_kedatangan2']=="Pilih Semua" ? false : $_GET['jam_kedatangan2']);
		$tgl = (!isset($_GET['tgl_kedatangan2']) ? false : $_GET['tgl_kedatangan2']);
		$per = (!isset($_GET['per']) ? false : $_GET['per']);
		$data['peserta'] = $this->VaksinModel->get_peserta_all($tgl, $jam, $per)->result();
		$data['tgl'] = $this->VaksinModel->get_tanggal()->result();
		$data['jam'] = $this->VaksinModel->get_jam_by_tanggal($tgl);
		// print_r($tgl);die;
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('list_data_peserta', $data);
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
		if (isset($data['v']) && strpos($data['v']->nik, '*') !== false) {
			redirect(base_url().'peserta/edit/'.$data['v']->id_peserta, 'refresh');
		}
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
		$this->load->view('hasil_data_peserta', $data);
		$this->load->view('footer');
	}

	public function upload_peserta()
	{
		$files = $_FILES['files']['tmp_name'];
		if (file_exists($files)):
			$spreadsheet = \PhpOffice\PhpSpreadsheet\IOFactory::load($files);

			$files = $spreadsheet->getActiveSheet()->toArray(null,true,true,true);

			$data = array();
			$i = 1;
			//KALO BUKAN TEMPLATE SESUAI REDIRECT
			if($files[1]['B'] != "nik") redirect(base_url().'peserta');
			foreach ($files as $row) {
				// karena data yang di excel di mulai dari baris ke 2
				// maka jika $i lebih dari 1 data akan di masukan ke database
				if ($i > 1 && $row['B'] != '') {
					$birthDate = date("Y/m/d", strtotime($row['E']));
					$tl = explode("/", $birthDate);
					$tgl_lahir = $tl[2].'-'.$tl[1].'-'.$tl[0];
					//explode the date to get month, day and year
					$birthDate = explode("/", $birthDate);
					//get age from date or birthdate
					$age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
						? ((date("Y") - $birthDate[2]) - 1)
						: (date("Y") - $birthDate[2]));

					$tgl_datang = ($row['J'] == "" ? "" : $this->VaksinModel->cari_tgl(date("Y-m-d", strtotime($row['J'])))->id_tv);
					$jam_datang = ($row['J'] == "" ? "" : $this->VaksinModel->cari_jam($row['K'], $tgl_datang)->id_jv);
					$kode_kategori = ($row['F'] == "" ? NULL : $this->VaksinModel->cari_kategori($row['F'])->id_ku);

						
					array_push($data, array(          
						'nik'							=> $row['B'],
						'nama'							=> $row['C'],
						'jenis_kelamin'					=> $row['D'],
						'tanggal_lahir'					=> date("Y-m-d", strtotime($row['E'])),
						'referal'						=> 1,
						'umur'							=> $age,
						'instansi_pekerjaan'			=> $row['G'],
						'kode_kategori'					=> $kode_kategori,
						'no_hp'							=> $row['H'],
						'alamat_ktp'					=> $row['I'],
						'lokasi_vaksin'					=> 1,
						'tgl_kedatangan'				=> $tgl_datang,
						'jam_kedatangan'				=> $jam_datang,
						'periode_vaksin'				=> $row['L'],
						'status'						=> 1,
					));
				}
				$i++;
			}
			// print_r($data);die;
			$data = $this->VaksinModel->insert_batch_peserta($data);
			// print_r($data);die;
			if ($data > 0):
				$this->session->set_flashdata('swal', '
					Swal.fire({
						title: "Sukses",
						text: "Data berhasil ditambah!",
						icon: "success"
					});
				');
			else:
				$this->session->set_flashdata('swal', '
					Swal.fire({
						title: "Gagal",
						text: "Data gagal ditambah!",
						icon: "error"
					});
				');
			endif;
		
			redirect(base_url().'peserta?per=2', 'refresh');
		endif;
	}
	public function eksekusi($id, $status, $tgl)
	{
		$text = (isset($_POST['gagal']) ? $_POST['gagal'] : "");
		$get = (isset($_GET['tgl_kedatangan2']) ? "?tgl_kedatangan2=".$_GET['tgl_kedatangan2']."&jam_kedatangan2=".$_GET['jam_kedatangan2'] : "");
		$data = array(
			'id_peserta'	=> $id,
			$tgl			=> date('Y-m-d H:i:s'),
			'status'		=> $status,
			'keterangan'	=> $text
		);
		$data = $this->VaksinModel->update_peserta($data);
		if ($data > 0):
			$this->session->set_flashdata('swal', '
				Swal.fire({
					title: "Sukses",
					text: "Data berhasil di ubah!",
					icon: "success"
				});
			');
			redirect(base_url().'peserta'.$get);
		else:
			$this->session->set_flashdata('swal', '
				Swal.fire({
					title: "Gagal",
					text: "Data gagal di ubah!",
					icon: "error"
				});
			');
			redirect(base_url().'peserta'.$get);
		endif;
	}
	

	public function hapus($id)
	{
		$data = $this->VaksinModel->hapus_peserta($id);
		if ($data > 0):
			$this->session->set_flashdata('swal', '
				Swal.fire({
					title: "Sukses",
					text: "Data berhasil dihapus!",
					icon: "success"
				});
			');
			redirect(base_url('peserta'));
		else:
			$this->session->set_flashdata('swal', '
				Swal.fire({
					title: "Gagal",
					text: "Data gagal dihapus!",
					icon: "error"
				});
			');
			redirect(base_url('peserta'));
		endif;
	}

	public function edit($id)
	{
		$data['v'] = $this->VaksinModel->detail_peserta($id);
		$data['kat'] = $this->VaksinModel->get_kategori_user()->result();

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('edit_data_peserta', $data);
		$this->load->view('footer');
	}

	public function edit_action($id)
	{
		$birthDate = $_POST['tanggal_lahir'];
		$tl = explode("/", $_POST['tanggal_lahir']);
		$tgl_lahir = $tl[2].'-'.$tl[1].'-'.$tl[0];
		//explode the date to get month, day and year
		$birthDate = explode("/", $birthDate);
		//get age from date or birthdate
		$age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
			? ((date("Y") - $birthDate[2]) - 1)
			: (date("Y") - $birthDate[2]));


		$data = array(
			'id_peserta'		=> $id,
			'nik' 				=> $_POST['nik'],
    		// 'referal' 			=> $_POST['referal'],
    		'nama' 				=> $_POST['nama'],
    		'email_peserta' 	=> $_POST['email_peserta'],
    		'kode_kategori' 	=> $_POST['kode_kategori'],
    		'tanggal_lahir' 	=> $tgl_lahir,
    		'umur' 				=> $age,
    		'no_hp' 			=> $_POST['no_hp'],
    		'alamat_ktp' 		=> $_POST['alamat_ktp'],
    		// 'tgl_kedatangan' 	=> $_POST['tgl_kedatangan'],
			// 'jam_kedatangan' 	=> $_POST['jam_kedatangan'],

			// 'last_update'	=> date('Y-m-d H:i:s'),
		);
		// print_r($data);die;
		$data = $this->VaksinModel->update_peserta($data);
		if ($data > 0):
			$this->session->set_flashdata('swal', '
				Swal.fire({
					title: "Sukses",
					text: "Data berhasil di ubah!",
					icon: "success"
				});
			');
			redirect(base_url('peserta/detail/').$id);
		else:
			$this->session->set_flashdata('swal', '
				Swal.fire({
					title: "Gagal",
					text: "Data gagal di ubah!",
					icon: "error"
				});
			');
			redirect(base_url('peserta/detail/').$id);
		endif;
	}

	public function export()
	{
		$jam = (!isset($_GET['jam_kedatangan2']) || $_GET['jam_kedatangan2']=="Pilih Semua" ? false : $_GET['jam_kedatangan2']);
		$tgl = (!isset($_GET['tgl_kedatangan2']) ? false : $_GET['tgl_kedatangan2']);

		$semua_pengguna = $this->VaksinModel->get_peserta_all($tgl, $jam)->result();

		$spreadsheet = new Spreadsheet;

		$spreadsheet->setActiveSheetIndex(0)
					->setCellValue('A1', 'No')
					->setCellValue('B1', 'NIK')
					->setCellValue('C1', 'NAMA')
					->setCellValue('D1', 'JENIS KELAMIN')
					->setCellValue('E1', 'TANGGAL LAHIR')
					->setCellValue('F1', 'UMUR')
					->setCellValue('G1', 'NAMA PENDAFTAR')
					->setCellValue('H1', 'EMAIL')
					->setCellValue('I1', 'PN')
					->setCellValue('J1', 'UNIT KERJA')
					->setCellValue('K1', 'DIVISI/PERUSAHAAN')
					->setCellValue('L1', 'KATEGORI')
					->setCellValue('M1', 'NO HP')
					->setCellValue('N1', 'ALAMAT')
					->setCellValue('O1', 'LOKASI VAKSIN')
					->setCellValue('P1', 'TANGGAL')
					->setCellValue('Q1', 'JAM')
					->setCellValue('R1', 'TANGGAL VAKSIN')
					->setCellValue('S1', 'VAKSIN KE')
					->setCellValue('T1', 'STATUS');

		$kolom = 2;
		$nomor = 1;
		foreach($semua_pengguna as $pengguna) {

			$spreadsheet->setActiveSheetIndex(0)
						->setCellValue('A' . $kolom, $nomor)
						->setCellValue('B' . $kolom, "'".$pengguna->nik."")
						->setCellValue('C' . $kolom, $pengguna->nama)
						->setCellValue('D' . $kolom, $pengguna->jenis_kelamin)
						->setCellValue('E' . $kolom, $pengguna->tanggal_lahir)
						->setCellValue('F' . $kolom, $pengguna->umur)
						->setCellValue('G' . $kolom, $pengguna->nama_user)
						->setCellValue('H' . $kolom, $pengguna->email_user)
						->setCellValue('I' . $kolom, $pengguna->pn_user)
						->setCellValue('J' . $kolom, ($pengguna->nama_unit_kerja == "Satria" ? "" : $pengguna->nama_unit_kerja))
						->setCellValue('K' . $kolom, $pengguna->perusahaan_user)
						->setCellValue('L' . $kolom, $pengguna->nama_ku)
						->setCellValue('M' . $kolom, $pengguna->no_hp)
						->setCellValue('N' . $kolom, $pengguna->alamat_ktp)
						->setCellValue('O' . $kolom, $pengguna->nama_lv)
						->setCellValue('P' . $kolom, $pengguna->tanggal_tv)
						->setCellValue('Q' . $kolom, $pengguna->jam_jv)
						->setCellValue('R' . $kolom, ($pengguna->update_vaksin == NULL ? "" : date('Y-m-d', strtotime($pengguna->update_vaksin))))
						->setCellValue('S' . $kolom, $pengguna->periode_vaksin)
						->setCellValue('T' . $kolom, $pengguna->nama_status);

			$kolom++;
			$nomor++;

		}

		$writer = new Xlsx($spreadsheet);

		header('Content-Type: application/vnd.ms-excel');
		header('Content-Disposition: attachment;filename="daftar_peserta.xlsx"');
		header('Cache-Control: max-age=0');

		$writer->save('php://output');
	}
	
	public function add()
	{
		$data['kat'] = $this->VaksinModel->get_kategori_user()->result();
		$data['lokasi'] = $this->VaksinModel->get_lokasi()->result();

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('add_data_peserta', $data);
		$this->load->view('footer');
	}

	public function add_action()
	{
		$birthDate = $_POST['tanggal_lahir'];
		$tl = explode("/", $_POST['tanggal_lahir']);
		$tgl_lahir = $tl[2].'-'.$tl[1].'-'.$tl[0];
		//explode the date to get month, day and year
		$birthDate = explode("/", $birthDate);
		//get age from date or birthdate
		$age = (date("md", date("U", mktime(0, 0, 0, $birthDate[0], $birthDate[1], $birthDate[2]))) > date("md")
			? ((date("Y") - $birthDate[2]) - 1)
			: (date("Y") - $birthDate[2]));


		$data = array(
			'nik' 				=> $_POST['nik'],
    		'referal' 			=> $_POST['referal'],
    		'nama' 				=> $_POST['nama'],
    		'email_peserta' 	=> $_POST['email_peserta'],
    		'kode_kategori' 	=> $_POST['kode_kategori'],
    		'jenis_kelamin' 	=> $_POST['jenis_kelamin'],
    		'tanggal_lahir' 	=> $tgl_lahir,
    		'umur' 				=> $age,
    		'no_hp' 			=> $_POST['no_hp'],
    		'alamat_ktp' 		=> $_POST['alamat_ktp'],
    		'lokasi_vaksin' 	=> $_POST['lokasi_vaksin'],
			'tgl_kedatangan' 	=> $_POST['tgl_kedatangan'],
			'jam_kedatangan' 	=> $_POST['jam_kedatangan'],
			'periode_vaksin' 	=> 2,

			// 'last_update'	=> date('Y-m-d H:i:s'),
		);
		// print_r($data);die;
		$data = $this->VaksinModel->insert_peserta($data);
		if ($data > 0):
			$this->session->set_flashdata('swal', '
				Swal.fire({
					title: "Sukses",
					text: "Data berhasil ditambah!",
					icon: "success"
				});
			');
			redirect(base_url('peserta/detail/').$data);
		else:
			$this->session->set_flashdata('swal', '
				Swal.fire({
					title: "Gagal",
					text: "Data gagal ditambah!",
					icon: "error"
				});
			');
			redirect(base_url('peserta/detail/').$data);
		endif;
	}
}
