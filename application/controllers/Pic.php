<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pic extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		  $this->load->model('ProjectModel');
		  $this->load->model('ClientModel');
		  $this->load->model('PenyelenggaraModel');
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('pic/dashboard_pic');
		$this->load->view('footer');
	}
	public function dashboard_pic()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('pic/dashboard_pic');
		$this->load->view('footer');
	}
	public function tambah_data()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('pic/data_project');
		$this->load->view('footer');
	}
	public function media_order()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('pic/pic_media_order');
		$this->load->view('footer');
	}


	public function data_project()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('pic/data_project');
		$this->load->view('footer');
	}



	public function list_project()
	{
		$jenis = (isset($_GET['jenis']) ? $_GET['jenis'] : "3");
		$search = (isset($_GET['search']) ? $_GET['search'] : "");
		$default_size = 10;
		$size = (isset($_GET['size']) ? $_GET['size'] : $default_size);

		// print_r($kbli);die;

		//PAGINATION START//
		$limit = $size;
		$offset = ($this->uri->segment(3) ? $this->uri->segment(3) : 0);
		if($limit > $offset) $offset = 0;

		$config['base_url'] = base_url('pic/list_project/');
		$config['reuse_query_string'] = true;
		$config['total_rows'] = $this->ProjectModel->get($jenis, $search)->num_rows();
		$config['per_page'] = $limit;
		$config['full_tag_open'] = '<ul class="pagination mx-auto">';
		$config['first_tag_open'] = '<li>';
		$config['first_link'] = '<i class="w-4 h-4" data-feather="chevrons-left"></i>';
		$config['first_tag_close'] = '</li>';
		$config['prev_tag_open'] = '<li>';
		$config['prev_link'] = '<i class="w-4 h-4" data-feather="chevron-left"></i>';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li><a class="pagination__link pagination__link--active">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['next_tag_open'] = '<li>';
		$config['next_link'] = '<i class="w-4 h-4" data-feather="chevron-right"></i>';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_link'] = '<i class="w-4 h-4" data-feather="chevrons-right"></i>';
		$config['last_tag_close'] = '</li>';
		$config['full_tag_close'] = '</ul>';
		$config['anchor_class'] = 'pagination__link';
		$config['attributes'] = ['class' => 'pagination__link'];
		$this->pagination->initialize($config);
		//PAGINATION END//
		
		$data = array(
			'project'			=> $this->ProjectModel->get($jenis, $search, $limit, $offset)->result_array(),
			'page'				=> $this->pagination->create_links(),
			'total_row'			=> $config['total_rows']
		);
		// print_r($data['type']);die;

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('pic/list_project', $data);
		$this->load->view('footer');
	}

	public function tambah_project($id = false)
	{
		$query = ($id == false ? array('id_project' => 0, 'jenis_project' => "", 'nama_project' => "", 'desc_project' => "") : $this->ProjectModel->get_detail($id));
		$data = array(
			'v'			=> $query
		);
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('pic/tambah_project_header', $data);
		$this->load->view('pic/tambah_project', $data);
		$this->load->view('footer');
	}
	public function tambah_project_action()
	{
		$data = array(
			'jenis_project'	=> $_POST['jenis_project'],
			'nama_project'	=> $_POST['nama_project'],
			'desc_project'	=> $_POST['desc_project'],
		);
		if($_POST['id_project'] == 0):
			$id = $this->ProjectModel->insert($data);
		else:
			$id = $_POST['id_project'];
			$data['id_project'] = $id;
			$this->ProjectModel->update($data);
		endif;

		if($data['jenis_project'] == 1):
			$kode_draft = "PRO";
		elseif($data['jenis_project'] == 1):
			$kode_draft = "PLA";
		else:
			$kode_draft = "GLO";
		endif;

		$kode = $kode_draft . $id . date('d') . date('m') . date('Y');
		$update = array(
			'id_project'	=> 	$id,
			'no_project'	=>	$kode
		);
		$this->ProjectModel->update($update);

		redirect(base_url() . 'pic/tambah_project_2/' . $id);

	}

	public function tambah_project_2($id = false)
	{
		$query = ($id == false ? array('id_project' => 0, 'jenis_project' => "", 'nama_project' => "", 'desc_project' => "") : $this->ProjectModel->get_detail($id));
		$data = array(
			'v'			=> $query
		);

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('pic/tambah_project_header', $data);
		$this->load->view('pic/tambah_project_2', $data);
		$this->load->view('footer');
	}

	public function tambah_project_2_action()
	{
		$id = $_POST['id_project'];
		$nama = seo_title($_POST['nama_project']);
		$data = array();
		$data['id_project'] = $id;

		//MULAI PROJECT
		$date_range = explode("-", $_POST['mulai_selesai']);
		$mulai  = date('Y-m-d', strtotime($date_range[0]));
		$selesai  = date('Y-m-d', strtotime($date_range[1]));;

		$data['durasi_project'] 		= $_POST['durasi_project'];
		$data['mulai_project'] 			= $mulai;
		$data['selesai_project'] 		= $selesai;
		$data['nilai_project'] 			= str_replace('.', '', $_POST['nilai_project']);
		$data['sp2d_project'] 			= str_replace(',', '.', str_replace('.', '', $_POST['sp2d_project']));
		$data['tgl_pencairan_project'] 	= date('Y-m-d', strtotime($_POST['tgl_pencairan_project']));


		//SPK//
		$spk_tgl = strtotime($_POST['tgl_spk_project']);
		$spk_tgl = date('Y-m-d',$spk_tgl);

		$data['no_spk_project'] 	= $_POST['no_spk_project'];
		$data['tgl_spk_project']	= $spk_tgl;

		if ($_FILES['file_spk']['name'] != "") {
			$photo = upload_pdf($nama, 'file_spk');
			$data['file_spk_project'] = $photo;

			$file_spk = $this->ProjectModel->get_files($data['id_project'], 'file_spk_project');
			// print_r($file_spk);die;
			if (file_exists('./uploads/files/'.$file_spk) && $file_spk != "") {
				del_files($file_spk, 'files');
			}
		}

		//SPMK//
		$spmk_tgl = strtotime($_POST['tgl_spmk_project']);
		$spmk_tgl = date('Y-m-d',$spmk_tgl);

		$data['no_spmk_project'] 	= $_POST['no_spmk_project'];
		$data['tgl_spmk_project']	= $spmk_tgl;

		if ($_FILES['file_spmk']['name'] != "") {
			$photo = upload_pdf($nama, 'file_spmk');
			$data['file_spmk_project'] = $photo;

			$file_spmk = $this->ProjectModel->get_files($data['id_project'], 'file_spmk_project');
			// print_r($file_spk);die;
			if (file_exists('./uploads/files/'.$file_spmk) && $file_spmk != "") {
				del_files($file_spmk, 'files');
			}
		}

		//BAST//
		$bast_tgl = strtotime($_POST['tgl_bast_project']);
		$bast_tgl = date('Y-m-d',$bast_tgl);

		$data['no_bast_project'] 	= $_POST['no_bast_project'];
		$data['tgl_bast_project']	= $bast_tgl;

		if ($_FILES['file_bast']['name'] != "") {
			$photo = upload_pdf($nama, 'file_bast');
			$data['file_bast_project'] = $photo;

			$file_bast = $this->ProjectModel->get_files($data['id_project'], 'file_bast_project');
			// print_r($file_spk);die;
			if (file_exists('./uploads/files/'.$file_bast) && $file_bast != "") {
				del_files($file_bast, 'files');
			}
		}

		//BAP//
		$bap_tgl = strtotime($_POST['tgl_bap_project']);
		$sbap_tgl = date('Y-m-d',$bap_tgl);

		$data['no_bap_project'] 	= $_POST['no_bap_project'];
		$data['tgl_bap_project']	= $bap_tgl;

		if ($_FILES['file_bap']['name'] != "") {
			$photo = upload_pdf($nama, 'file_bap');
			$data['file_bap_project'] = $photo;

			$file_bap = $this->ProjectModel->get_files($data['id_project'], 'file_bap_project');
			// print_r($file_spk);die;
			if (file_exists('./uploads/files/'.$file_bap) && $file_bap != "") {
				del_files($file_bap, 'files');
			}
		}

		$this->ProjectModel->update($data);

		redirect(base_url() . 'pic/tambah_project_3/' . $id);

	}
	public function delete_surat($ref, $field, $id)
	{
		$file_spk = $this->ProjectModel->get_files($id, $field);
		// print_r($file_spk);die;
		if (file_exists('./uploads/files/'.$file_spk)) {
			del_files($file_spk, 'files');
		}

		$data['id_project'] = $id;
		$data[$field] = '';

		$this->ProjectModel->update($data);

		if($ref == 'input') :
			redirect(base_url() . 'pic/tambah_project_2/' . $id);
		else:
			redirect(base_url() . 'pic/tambah_project_2/' . $id);
		endif;

	}

	public function tambah_project_3($id = false)
	{
		$query = ($id == false ? array('id_project' => 0, 'jenis_project' => "", 'nama_project' => "", 'desc_project' => "") : $this->ProjectModel->get_detail($id));
		$data = array(
			'v'			=> $query,
			'client'	=> $this->ClientModel->get()->result_array()
		);

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('pic/tambah_project_header', $data);
		$this->load->view('pic/tambah_project_3', $data);
		$this->load->view('footer');
	}

	public function tambah_project_3_action()
	{
		$id = $_POST['id_project'];
		
		$data = array();
		$data['id_project'] = $id;

		$data['client_project'] 		= $_POST['client_project'];
		// print_r($_POST);die;

		$this->ProjectModel->update($data);

		redirect(base_url() . 'pic/tambah_project_4/' . $id);

	}
	public function tambah_project_4($id = false)
	{
		$query = ($id == false ? array('id_project' => 0, 'jenis_project' => "", 'nama_project' => "", 'desc_project' => "") : $this->ProjectModel->get_detail($id));
		$data = array(
			'v'			=> $query,
			'pelaksana'	=> $this->PenyelenggaraModel->get()->result_array()
		);

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('pic/tambah_project_header', $data);
		$this->load->view('pic/tambah_project_4', $data);
		$this->load->view('footer');
	}

	public function tambah_project_4_action()
	{
		$id = $_POST['id_project'];
		
		$data = array();
		$data['id_project'] = $id;

		$data['pelaksana_project'] 		= $_POST['pelaksana_project'];
		// print_r($_POST);die;

		$this->ProjectModel->update($data);

		redirect(base_url() . 'pic/tambah_project_5/' . $id);

	}
	public function tambah_project_5($id = false)
	{
		$query = ($id == false ? array('id_project' => 0, 'jenis_project' => "", 'nama_project' => "", 'desc_project' => "") : $this->ProjectModel->get_detail($id));
		$data = array(
			'v'			=> $query,
			'cat'		=> $this->ProjectModel->get_cat_pro()
		);

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('pic/tambah_project_header', $data);
		$this->load->view('pic/tambah_project_5', $data);
		$this->load->view('footer');
	}

	// public function tambah_project_5_action()
	// {
	// 	$id = $_POST['parent_pp'];
		
	// 	$data = array();
	// 	$data['parent_pp'] = $id;
	// 	$data['cost_pp'] = str_replace('.', '', $_POST['cost_pp']);
	// 	$data['desc_pp'] = $_POST['desc_pp'];

	// 	$data['judul_pp'] 		= $_POST['judul_pp'];
	// 	// print_r($_POST);die;

	// 	$this->ProjectModel->update_pro($data);

	// 	redirect(base_url() . 'pic/tambah_project_6/' . $id);

	// }
	public function tambah_project_produksi_action()
	{
		$id = $_POST['parent_pp'];
		
		$data = array();
		$data['parent_pp'] = $id;

		$deadline = strtotime($_POST['deadline_pp']);
		$deadline = date('Y-m-d',$deadline);
		
		$data['deadline_pp'] = $deadline;
		$data['desc_pp'] = $_POST['desc_pp'];
		$data['kategori_pp'] = $_POST['kategori_pp'];

		$data['judul_pp'] 		= $_POST['judul_pp'];
		// print_r($_POST);die;

		$this->ProjectModel->insert_pro($data);

		if($_POST['jenis_project'] == 1):
			redirect(base_url() . 'pic/list_project/');
		else:
			redirect(base_url() . 'pic/tambah_project_5/' . $id);
		endif;

	}

	public function edit_pp($id = false)
	{
		$query = ($id == false ? array('id_project' => 0, 'jenis_project' => "", 'nama_project' => "", 'desc_project' => "") : $this->ProjectModel->get_detail_pp($id));
		$data = array(
			'gp'			=> $query,
			'cat'		=> $this->ProjectModel->get_cat_pro()
		);

		$this->load->view('header');
		$this->load->view('sidebar');
		// $this->load->view('pic/tambah_project_header', $data);
		$this->load->view('pic/edit_pp', $data);
		$this->load->view('footer');
	}
	public function edit_pp_action()
	{
		$id = $_POST['parent_pp'];
		
		$data = array();
		$data['parent_pp'] = $id;
		$data['id_pp'] = $_POST['id_pp'];

		$deadline = strtotime($_POST['deadline_pp']);
		$deadline = date('Y-m-d',$deadline);
		
		$data['deadline_pp'] = $deadline;
		$data['desc_pp'] = $_POST['desc_pp'];
		$data['kategori_pp'] = $_POST['kategori_pp'];

		$data['judul_pp'] 		= $_POST['judul_pp'];
		// print_r($_POST);die;

		$this->ProjectModel->update_pro($data);

		redirect(base_url() . 'pic/tambah_project_5/' . $id);

	}


	public function delete_pp($id, $parent)
	{
		$this->ProjectModel->delete_pp($id);
		redirect(base_url() . 'pic/tambah_project_5/' . $parent);
	}




	public function tambah_project_6($id = false)
	{
		$query = ($id == false ? array('id_project' => 0, 'jenis_project' => "", 'nama_project' => "", 'desc_project' => "") : $this->ProjectModel->get_detail($id));
		$data = array(
			'v'			=> $query,
			'cat'		=> $this->ProjectModel->get_cat_pro()
		);

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('pic/tambah_project_header', $data);
		$this->load->view('pic/tambah_project_6', $data);
		$this->load->view('footer');
	}

	public function tambah_project_6_action()
	{
		$id = $_POST['parent_pp'];
		
		$data = array();
		$data['parent_pm'] = $id;
		$data['desc_pm'] = str_replace('.', '', $_POST['cost_pm']);
		$data['desc_pm'] = $_POST['desc_pm'];

		$data['judul_pm'] 		= $_POST['judul_pm'];
		// print_r($_POST);die;

		$this->ProjectModel->update_pla($data);

		redirect(base_url() . 'pic/list_project/');

	}



	public function e_faktur()
	{

		$jenis = (isset($_GET['jenis']) ? $_GET['jenis'] : "3");
		$search = (isset($_GET['search']) ? $_GET['search'] : "");
		$default_size = 10;
		$size = (isset($_GET['size']) ? $_GET['size'] : $default_size);

		// print_r($kbli);die;

		//PAGINATION START//
		$limit = $size;
		$offset = ($this->uri->segment(3) ? $this->uri->segment(3) : 0);
		if($limit > $offset) $offset = 0;

		$config['base_url'] = base_url('pic/e_faktur/');
		$config['reuse_query_string'] = true;
		$config['total_rows'] = $this->ProjectModel->get($jenis, $search)->num_rows();
		$config['per_page'] = $limit;
		$config['full_tag_open'] = '<ul class="pagination mx-auto">';
		$config['first_tag_open'] = '<li>';
		$config['first_link'] = '<i class="w-4 h-4" data-feather="chevrons-left"></i>';
		$config['first_tag_close'] = '</li>';
		$config['prev_tag_open'] = '<li>';
		$config['prev_link'] = '<i class="w-4 h-4" data-feather="chevron-left"></i>';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li><a class="pagination__link pagination__link--active">';
		$config['cur_tag_close'] = '</a></li>';
		$config['num_tag_open'] = '<li>';
		$config['num_tag_close'] = '</li>';
		$config['next_tag_open'] = '<li>';
		$config['next_link'] = '<i class="w-4 h-4" data-feather="chevron-right"></i>';
		$config['next_tag_close'] = '</li>';
		$config['last_tag_open'] = '<li>';
		$config['last_link'] = '<i class="w-4 h-4" data-feather="chevrons-right"></i>';
		$config['last_tag_close'] = '</li>';
		$config['full_tag_close'] = '</ul>';
		$config['anchor_class'] = 'pagination__link';
		$config['attributes'] = ['class' => 'pagination__link'];
		$this->pagination->initialize($config);
		//PAGINATION END//
		
		$data = array(
			'project'			=> $this->ProjectModel->get($jenis, $search, $limit, $offset)->result_array(),
			'page'				=> $this->pagination->create_links(),
			'total_row'			=> $config['total_rows']
		);
		// print_r($data['type']);die;

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('pic/list_efaktur', $data);
		$this->load->view('footer');

	}

	public function efaktur_project($id = false)
	{
		$query = ($id == false ? array('id_project' => 0, 'jenis_project' => "", 'nama_project' => "", 'desc_project' => "") : $this->ProjectModel->get_detail($id));
		$data = array(
			'v'			=> $query
		);
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('pic/e_faktur', $data);
		$this->load->view('footer');
	}




	public function file_upload()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('pic/file_upload');
		$this->load->view('footer');
	}

	public function validasi_laporan()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('pic/validasi_laporan');
		$this->load->view('footer');
	}
}
