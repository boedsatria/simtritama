<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Laporan extends CI_Controller {
	public function __construct()
	{
	  parent::__construct();
	  $this->load->model('LaporanModel');
      date_default_timezone_set("Asia/Jakarta");
	}

	public function index()
	{
		if(!isset($_GET['limit'])): 
			$limit = 5;
		else:
			if($_GET['limit'] == "All"):
				$limit = false;
			else:
				$limit = $_GET['limit'];
			endif;
		endif;
		
		$bln = (!isset($_GET['bln']) || $_GET['bln'] == 0 ? false : $_GET['bln']);
		$thn = (!isset($_GET['thn']) ? false : $_GET['thn']);
		$dibuat = (!isset($_GET['dibuat']) ? false : $_GET['dibuat']);
		$selesai = (!isset($_GET['selesai']) ? false : $_GET['selesai']);
		$revisi = (!isset($_GET['revisi']) ? false : $_GET['revisi']);

		$perpage = $limit;
		$offset = ($this->uri->segment(3) ? $this->uri->segment(3) : 0);
		if($perpage > $offset) $offset = 0;

		$config['base_url'] = base_url('laporan/index/');
		$config['reuse_query_string'] = true;
		$config['total_rows'] = $this->LaporanModel->get_laporan_filtered($thn, $bln, $dibuat, $selesai, $revisi)->num_rows();
		$config['per_page'] = $perpage;
		$config['full_tag_open'] = '<ul class="pagination justify-content-center">';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_link'] = '<span aria-hidden="true" class="fa fa-angle-double-left"></span>';
		$config['first_tag_close'] = '</li>';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_link'] = '<span aria-hidden="true" class="fa fa-angle-left"></span>';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_link'] = '<span aria-hidden="true" class="fa fa-angle-right"></span>';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_link'] = '<span aria-hidden="true" class="fa fa-angle-double-right"></span>';
		$config['last_tag_close'] = '</li>';
		$config['full_tag_close'] = '</ul>';
		$config['anchor_class'] = 'page-link';
		$this->pagination->initialize($config);

		$data['page'] = $this->pagination->create_links();

		
// print_r($config['total_rows']);

		$data['laporan'] = $this->LaporanModel->get_laporan_all($limit, $offset, $thn, $bln, $dibuat, $selesai, $revisi)->result_array();
		$data['status'] = $this->LaporanModel->get_status()->result_array();
		// $data['keluarga'] = $this->VaksinModel->get_peserta_keluarga()->result();

		// print_r($this->VaksinModel->get_data_dibawah_50()->umur);die;
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('laporan_list', $data);
		$this->load->view('footer');
	}

	public function detail($id)
	{
        // if(!$this->session->has_userdata('userlogin')) redirect(base_url('login'));

		$data['v'] = $this->LaporanModel->get_laporan_detail($id)->row_array();
		$data['teknis'] = $this->LaporanModel->get_tim_not_in_list($id)->result_array();
		$data['kordinator'] = $this->LaporanModel->get_kordinator_not_in_list($id)->result_array();
		$data['keterangan'] = $this->LaporanModel->get_keterangan()->result_array();
		$data['material'] = $this->LaporanModel->get_material()->result_array();
		// print_r($data['laporan']);die;

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('laporan_detail', $data);
		$this->load->view('footer');
	}

	public function my_report($id)
	{
		if(!isset($_GET['limit'])): 
			$limit = 5;
		else:
			if($_GET['limit'] == "All"):
				$limit = false;
			else:
				$limit = $_GET['limit'];
			endif;
		endif;
		
		$bln = (!isset($_GET['bln']) || $_GET['bln'] == 0 ? false : $_GET['bln']);
		$thn = (!isset($_GET['thn']) ? false : $_GET['thn']);
		$dibuat = (!isset($_GET['dibuat']) ? false : $_GET['dibuat']);
		$selesai = (!isset($_GET['selesai']) ? false : $_GET['selesai']);
		$revisi = (!isset($_GET['revisi']) ? false : $_GET['revisi']);

		$perpage = $limit;
		$offset = ($this->uri->segment(4) ? $this->uri->segment(4) : 0);
		if($perpage > $offset) $offset = 0;

		$config['base_url'] = base_url('laporan/my_report/'.$id.'/');
		$config['reuse_query_string'] = true;
		$config['total_rows'] = $this->LaporanModel->get_laporan_filtered($thn, $bln, $dibuat, $selesai, $revisi, $id)->num_rows();
		$config['per_page'] = $perpage;
		$config['full_tag_open'] = '<ul class="pagination justify-content-center">';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_link'] = '<span aria-hidden="true" class="fa fa-angle-double-left"></span>';
		$config['first_tag_close'] = '</li>';
		$config['prev_tag_open'] = '<li class="page-item">';
		$config['prev_link'] = '<span aria-hidden="true" class="fa fa-angle-left"></span>';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_link'] = '<span aria-hidden="true" class="fa fa-angle-right"></span>';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_link'] = '<span aria-hidden="true" class="fa fa-angle-double-right"></span>';
		$config['last_tag_close'] = '</li>';
		$config['full_tag_close'] = '</ul>';
		$config['anchor_class'] = 'page-link';
		$this->pagination->initialize($config);

		$data['page'] = $this->pagination->create_links();

		
// print_r($config['total_rows']);

		$data['laporan'] = $this->LaporanModel->get_laporan_all($limit, $offset, $thn, $bln, $dibuat, $selesai, $revisi, $id)->result_array();
		$data['status'] = $this->LaporanModel->get_status()->result_array();
		// $data['keluarga'] = $this->VaksinModel->get_peserta_keluarga()->result();

		// print_r($this->VaksinModel->get_data_dibawah_50()->umur);die;
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('laporan_list', $data);
		$this->load->view('footer');
	}

	public function laporan_action()
	{
		// print_r($_POST);die;
		$data = array(
            'wilayah_laporan'     	=> $_POST['kelurahan'],
            'jalan_laporan'     	=> $_POST['jalan'],
            'jenis_laporan'    		=> 1,
            'deskripsi_laporan' 	=> $_POST['keterangan'],
            'status_laporan'		=> 1,
            'user_laporan'    		=> $_POST['user']
        );
		$id = $this->LaporanModel->insert_laporan($data);

		redirect(base_url('laporan/detail/'.$id));
	}

	function upload_images($id, $user)
    {
		$config['upload_path']          = './uploads/tmp/';
		$config['allowed_types']        = 'gif|jpg|png|jpeg';
		$config['max_size']             = 500000;
		$config['max_width']            = 6000;
		$config['max_height']           = 6000;
		$config['overwrite'] = TRUE;
		$config['remove_spaces'] = TRUE;
		$config['encrypt_name'] = TRUE;
		$this->upload->initialize($config);
		if (!$this->upload->do_upload('file')) {
			echo "Gagal";
		} else {
			// proses foto
			$images = $this->upload->data();
			$config1['image_library'] = 'gd2';
			$config1['source_image'] = $images['full_path'];
			$config1['new_image'] = './uploads/laporan/';
			$config1['create_thumb'] = TRUE;
			$config1['thumb_marker']  = '';
			$config1['maintain_ratio'] = TRUE;
			$config1['width']         = 700;
			$config1['height']       = 700;
			
			$this->image_lib->initialize($config1);
			
			$this->image_lib->resize();  
			$this->image_lib->clear();
			if (!$this->image_lib->resize()) {
			$this->handle_error($this->image_lib->display_errors());
			}
			else {
				ob_end_clean();
			}
			
			unlink('./uploads/tmp/'.$images['file_name']);

			$new_name = $images['file_name'];
			
			$data['source_laporan_photo']	=  $new_name;
			$data['id_laporan_photo']		=  $id;
			$data['user_laporan_photo']		=  $user;

			$this->LaporanModel->insert_laporan_photo($data);
			echo "Sukses";
		}
        
    }

	public function update()
	{
		// print_r($_POST);die;
		if($_POST['status_laporan'] == 1) {
			$tindak_lanjut = "";
		} elseif($_POST['status_laporan'] == 2) {
			$tindak_lanjut = "Selesai URC";
		} else {
			$tindak_lanjut = $_POST['tindak_lanjut'];
		}
		
		$data = array(
            'id_laporan'			=> $_POST['id_laporan'],
            'status_laporan'		=> $_POST['status_laporan'],
            'keterangan_laporan'	=> $_POST['keterangan'],
            'tindak_lanjut_laporan'	=> $tindak_lanjut,
            'selesai_laporan'    	=> date('Y-m-d H:i:s')
        );
		$respon = $this->LaporanModel->update_laporan($data);
		// echo $respon;
		redirect(base_url('laporan/detail/'.$_POST['id_laporan']));
	}

	public function add_tim_action($id)
	{
		if(!isset($_POST['tim']) && !isset($_POST['kor'])) redirect(base_url('laporan/detail/'.$id));

		if(isset($_POST['tim'])) {
			foreach($_POST['tim'] as $k => $v):
				$data[$k] = array(
					'id_laporan_tim'	=> $id,
					'user_laporan_tim'	=> $v['user_laporan_tim']
				);
			endforeach;
		}
		if(isset($_POST['kor'])) {
			foreach($_POST['kor'] as $k => $v):
				$data[$k+10] = array(
					'id_laporan_tim'	=> $id,
					'user_laporan_tim'	=> $v['user_laporan_tim']
				);
			endforeach;
		}
		
		$this->LaporanModel->insert_tim_laporan($data);

		redirect(base_url('laporan/detail/'.$id));
	}
	public function del_tim_action($data, $id)
	{
		$this->LaporanModel->delete_tim_laporan($data);

		redirect(base_url('laporan/detail/'.$id));
	}
	
	public function add_laporan_jenis()
	{
		$this->LaporanModel->insert_laporan_jenis($_POST);
		redirect(base_url());
	}

	public function export()
	{
		$limit = false;
		$offset = 0;

		$bln = (!isset($_GET['bln']) || $_GET['bln'] == 0 ? false : $_GET['bln']);
		$thn = (!isset($_GET['thn']) ? false : $_GET['thn']);
		$dibuat = (!isset($_GET['dibuat']) ? false : $_GET['dibuat']);
		$selesai = (!isset($_GET['selesai']) ? false : $_GET['selesai']);
		$revisi = (!isset($_GET['revisi']) ? false : $_GET['revisi']);

		$data['laporan'] = $this->LaporanModel->get_laporan_all($limit, $offset, $thn, $bln, $dibuat, $selesai, $revisi)->result_array();
		
// print_r($data['laporan']);die;
		$mpdf = new \Mpdf\Mpdf([
			'mode' => 'utf-8',
			'format' => 'Folio-P'
		]);
		
		$title = "sitambel".$bln.$thn;

		$mpdf->SetTitle($title);

		$mpdf->AddPage('L','','','','',10,10,10,10,0,0);
		$html = $this->load->view('print_laporan/header', '', true);
		

		$html .= $this->load->view('print_laporan/laporan', $data, true);
		// $html .= $this->load->view('print_fisik/02_jadwal_kegiatan', $data, true);
		// $html .= $this->load->view('print_fisik/03_cover', $data, true);
		// $html .= $this->load->view('print_fisik/04_data_kegiatan', $data, true);
		$mpdf->WriteHTML($html);


		// $mpdf->AddPage('','','','','',20,10,0,5,0,0);
		// $bamcn = $this->load->view('print_fisik/header', '', true);
		// $bamcn .= $this->load->view('print_fisik/05_bamcn', $data, true);
		// $mpdf->WriteHTML($bamcn);


		// $dhpb = $this->load->view('print_fisik/header', '', true);
		// $dhpb .= $this->load->view('print_fisik/06_dhpb', $data, true);  // LANDSCAPE
		// $mpdf->WriteHTML($dhpb);
		
		$mpdf->Output($title, 'I');
	}

	public function add_material_action($id)
	{
		$this->LaporanModel->insert_material_laporan($_POST);

		redirect(base_url('laporan/detail/'.$id));
	}
	public function del_material_action($data, $id)
	{
		$this->LaporanModel->delete_material_laporan($data, $id);

		redirect(base_url('laporan/detail/'.$id));
	}
	public function update_foto($id)
	{
		$data = array(
			'id_photo_ai'			=> $_POST['id_photo_ai'],
			'status_laporan_photo'	=> $_POST['status_laporan_photo']
		);
		$this->LaporanModel->update_laporan_photo($data);

		redirect(base_url('laporan/detail/'.$id));
	}
	public function delete_foto($data, $id)
	{
		$this->LaporanModel->delete_photo_laporan($data);

		redirect(base_url('laporan/detail/'.$id));
	}

}
