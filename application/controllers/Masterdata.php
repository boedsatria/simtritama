<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Masterdata extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set("Asia/Jakarta");
		if (!$this->session->has_userdata('userlogin')) redirect(base_url('login'));
		$this->load->model('ClientModel');
		$this->load->model('UserModel');
		$this->load->model('MediaModel');
		$this->load->model('PenyelenggaraModel');
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('masterdata/dashboard_master_data');
		$this->load->view('footer');
	}
	
	public function data_mitra()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('masterdata/data_mitra');
		$this->load->view('footer');
	}
	public function detail_image()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('masterdata/detail_image');
		$this->load->view('footer');
	}
	public function detail_c()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('masterdata/detail_client');
		$this->load->view('footer');
	}




	//--------PENYELENGGARA MENU START--------//

	public function list_penyelenggara()
	{
		$kbli = (isset($_GET['kbli']) ? $_GET['kbli'] : "0");
		$search = (isset($_GET['search']) ? $_GET['search'] : "");
		$default_size = 10;
		$size = (isset($_GET['size']) ? $_GET['size'] : $default_size);

		// print_r($kbli);die;

		//PAGINATION START//
		$limit = $size;
		$offset = ($this->uri->segment(3) ? $this->uri->segment(3) : 0);
		if($limit > $offset) $offset = 0;

		$config['base_url'] = base_url('masterdata/list_penyelenggara/');
		$config['reuse_query_string'] = true;
		$config['total_rows'] = $this->PenyelenggaraModel->get($kbli, $search)->num_rows();
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
			'penyelenggara'		=> $this->PenyelenggaraModel->get($kbli, $search, $limit, $offset)->result_array(),
			'kbli'				=> $this->PenyelenggaraModel->get_kbli()->result_array(),
			'page'				=> $this->pagination->create_links(),
			'total_row'			=> $config['total_rows']
		);
		// print_r($data['type']);die;

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('penyelenggara/list_penyelenggara', $data);
		$this->load->view('footer');
	}
	public function tambah_penyelenggara_action()
	{
		$kbli = (count($_POST['kbli_penyelenggara']) > 0 ? array_values($_POST['kbli_penyelenggara']) : "");
		$path = 'penyelenggara';

		$data = array(
			'nama_penyelenggara'		=>	$_POST['nama_penyelenggara'],
			'email_penyelenggara'		=>	$_POST['email_penyelenggara'],
			'telepon_penyelenggara'		=>	$_POST['telepon_penyelenggara'],
			'alamat_penyelenggara'		=>	$_POST['alamat_penyelenggara'],
			'kbli_penyelenggara'		=>	implode(", ", $kbli)
		);


		$nama = seo_title($data['nama_penyelenggara']);

		if ($_FILES['file']['name'] != "") {
			$photo = upload_files($path, $nama);
			$data['photo_penyelenggara'] = $photo;
		}

		$id = $this->PenyelenggaraModel->insert($data);
		redirect(base_url() . 'masterdata/detail_penyelenggara/' . $id);
	}

	public function detail_penyelenggara($id = false)
	{
		if ($id == false) redirect(base_url() . 'masterdata/list_penyelenggara');
		$data = array(
			'p'		=> $this->PenyelenggaraModel->get_detail($id),
			'kbli'	=> $this->PenyelenggaraModel->get_kbli()->result_array()
		);

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('penyelenggara/detail_penyelenggara', $data);
		$this->load->view('footer');
	}

	public function tambah_kbli_action()
	{
		$this->PenyelenggaraModel->insert_kbli($_POST);
		redirect(base_url() . 'masterdata/list_penyelenggara');
	}

	public function edit_penyelenggara_action()
	{
		$kbli = (count($_POST['kbli_penyelenggara']) > 0 ? array_values($_POST['kbli_penyelenggara']) : "");
		$path = 'penyelenggara';

		$data = array(
			'id_penyelenggara'			=>	$_POST['id_penyelenggara'],
			'nama_penyelenggara'		=>	$_POST['nama_penyelenggara'],
			'email_penyelenggara'		=>	$_POST['email_penyelenggara'],
			'telepon_penyelenggara'		=>	$_POST['telepon_penyelenggara'],
			'alamat_penyelenggara'		=>	$_POST['alamat_penyelenggara'],
			'kbli_penyelenggara'		=>	implode(", ", $kbli)
		);

		$nama = seo_title($data['nama_penyelenggara']);
// print_r($data);die;
		if ($_FILES['file']['name'] != "") {
			$photo = upload_files($path, $nama);
			$data['photo_penyelenggara'] = $photo;

			$images = $this->PenyelenggaraModel->get_files($data['id_penyelenggara']);
			
			if (file_exists('./uploads/'.$path.'/'.$images)) {
				del_files($images, $path);
			}
		}
		$this->PenyelenggaraModel->update($data);
		redirect(base_url() . 'masterdata/detail_penyelenggara/' . $data['id_penyelenggara']);
	}

	//--------PENYELENGGARA MENU END--------//





	
	//--------MEDIA MENU START--------//
	public function list_media($cat = false)
	{
		$cat = ($cat != false ? get_cat_id($cat) : "0");
		$type = (isset($_GET['type']) ? $_GET['type'] : "0");
		$wil = (isset($_GET['wil']) ? $_GET['wil'] : "0");
		$search = (isset($_GET['search']) ? $_GET['search'] : "");
		$default_size = 10;
		$size = (isset($_GET['size']) ? $_GET['size'] : $default_size);

		//PAGINATION START//
		$limit = $size;
		$offset = ($this->uri->segment(3) ? $this->uri->segment(3) : 0);
		if($limit > $offset) $offset = 0;

		$config['base_url'] = base_url('masterdata/list_media/');
		$config['reuse_query_string'] = true;
		$config['total_rows'] = $this->MediaModel->get($cat, $type, $wil, $search)->num_rows();
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
			'media'		=> $this->MediaModel->get($cat, $type, $wil, $search, $limit, $offset)->result_array(),
			'all'		=> $this->MediaModel->get()->result_array(),
			'cat'		=> $this->MediaModel->get_cat()->result_array(),
			'type'		=> $this->MediaModel->get_type_media($cat)->result_array(),
			'type_all'	=> $this->MediaModel->get_type()->result_array(),
			'wil'		=> $this->MediaModel->get_wil()->result_array(),
			'page'		=> $this->pagination->create_links(),
			'total_row'	=> $config['total_rows']
		);
		// print_r($data['type']);die;

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('media/list_media', $data);
		$this->load->view('footer');
	}

	public function tambah_media_action()
	{
		$data = $_POST;
		$nama = seo_title($data['nama_media']);

		if ($_FILES['file']['name'] != "") {
			$photo = upload_files('media', $nama);
			$data['photo_media'] = $photo;
		}

		$id = $this->MediaModel->insert($data);
		redirect(base_url() . 'masterdata/detail_media/' . $id);
	}

	public function detail_media($id = false)
	{
		if ($id == false) redirect(base_url() . 'masterdata/list_media');
		$data = array(
			'm'			=> $this->MediaModel->get_detail($id),
			'media'		=> $this->MediaModel->get()->result_array(),
			'cat'		=> $this->MediaModel->get_cat()->result_array(),
			'type'		=> $this->MediaModel->get_type()->result_array(),
			'wil'		=> $this->MediaModel->get_wil()->result_array(),
		);
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('media/detail_media', $data);
		$this->load->view('footer');
	}

	public function tambah_type_action()
	{
		$this->MediaModel->insert_type($_POST);
		redirect(base_url() . 'masterdata/list_media/'.get_menu_slug($_POST['parent_media_type']));
	}
	public function delete_media($id)
	{
		$images = $this->MediaModel->get_files($id);
		$path = 'media';

		$this->MediaModel->delete($id);
		if (file_exists('./uploads/'.$path.'/'.$images)) {
			del_files($images, $path);
		}
		redirect(base_url() . 'masterdata/list_media');
	}

	//--------MEDIA MENU END--------//







	//--------CLIENT MENU START--------//
	public function list_client()
	{
		$cat = (isset($_GET['cat']) ? $_GET['cat'] : "0");
		$wil = (isset($_GET['wil']) ? $_GET['wil'] : "0");
		$search = (isset($_GET['search']) ? $_GET['search'] : "");
		$default_size = 10;
		$size = (isset($_GET['size']) ? $_GET['size'] : $default_size);

		//PAGINATION START//
		$limit = $size;
		$offset = ($this->uri->segment(3) ? $this->uri->segment(3) : 0);
		if($limit > $offset) $offset = 0;

		$config['base_url'] = base_url('masterdata/list_client/');
		$config['reuse_query_string'] = true;
		$config['total_rows'] = $this->ClientModel->get($cat, $wil, $search)->num_rows();
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
			'client'	=> $this->ClientModel->get($cat, $wil, $search, $limit, $offset)->result_array(),
			'all'		=> $this->ClientModel->get()->result_array(),
			'cat'		=> $this->ClientModel->get_cat()->result_array(),
			'wil'		=> $this->ClientModel->get_wil()->result_array(),
			'page'		=> $this->pagination->create_links(),
			'total_row'	=> $config['total_rows']
		);

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('client/list_client', $data);
		$this->load->view('footer');
	}

	public function detail_client($id = false)
	{
		if ($id == false) redirect(base_url() . 'masterdata/list_client');
		$data = array(
			'c'			=> $this->ClientModel->get_detail($id),
			'client'	=> $this->ClientModel->get()->result_array(),
			'cat'		=> $this->ClientModel->get_cat()->result_array(),
			'wil'		=> $this->ClientModel->get_wil()->result_array(),
		);
		// print_r($data['c']);die;
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('client/detail_client', $data);
		$this->load->view('footer');
	}

	public function tambah_client_action()
	{
		$data = $_POST;
		$nama = seo_title($data['nama_client']);

		if ($_FILES['file']['name'] != "") {
			$photo = upload_files('client', $nama);
			$data['photo_client'] = $photo;
		}

		$id = $this->ClientModel->insert($data);
		redirect(base_url() . 'masterdata/detail_client/' . $id);
	}
	public function tambah_cat_action()
	{
		$this->ClientModel->insert_cat($_POST);
		redirect(base_url() . 'masterdata/list_client');
	}
	public function tambah_wil_action($parent = false)
	{
		$this->ClientModel->insert_wil($_POST);
		redirect(base_url() . 'masterdata/'.$parent);
	}
	public function edit_client_action()
	{
		$data = $_POST;
		$nama = seo_title($data['nama_client']);
		$path = 'client';

		if ($_FILES['file']['name'] != "") {
			$photo = upload_files($path, $nama);
			$data['photo_client'] = $photo;

			$images = $this->ClientModel->get_files($data['id_client']);
			
			if (file_exists('./uploads/'.$path.'/'.$images)) {
				del_files($images, $path);
			}
		}
		$this->ClientModel->update($data);
		redirect(base_url() . 'masterdata/detail_client/' . $data['id_client']);
	}
	public function delete_client($id)
	{
		$images = $this->ClientModel->get_files($id);
		$path = 'client';

		$this->ClientModel->delete($id);
		if (file_exists('./uploads/'.$path.'/'.$images)) {
			del_files($images, $path);
		}
		redirect(base_url() . 'masterdata/list_client');
	}
	//--------CLIENT MENU END--------//






	//--------USER MENU START--------//
	public function list_user()
	{
		$div = (isset($_GET['divisi']) ? $_GET['divisi'] : "0");
		$search = (isset($_GET['search']) ? $_GET['search'] : "");
		$default_size = 10;
		$size = (isset($_GET['size']) ? $_GET['size'] : $default_size);

		//PAGINATION START//
		$limit = $size;
		$offset = ($this->uri->segment(3) ? $this->uri->segment(3) : 0);
		if($limit > $offset) $offset = 0;
		
		$config['base_url'] = base_url('masterdata/list_user/');
		$config['reuse_query_string'] = true;
		$config['total_rows'] = $this->UserModel->get($div, $search)->num_rows();
		$config['per_page'] = $limit;
		$config['full_tag_open'] = '<ul class="pagination mx-auto">';
		$config['first_tag_open'] = '<li>';
		$config['first_link'] = '<i class="w-4 h-4" data-feather="chevrons-left"></i>';
		$config['first_tag_close'] = '</li>';
		$config['prev_tag_open'] = '<li>';
		$config['prev_link'] = '<i class="w-4 h-4" data-feather="chevron-left"></i>';
		$config['prev_tag_close'] = '</li>';
		$config['cur_tag_open'] = '<li><a class="pagination__link pagination__link--active" href="#">';
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
			'user'		=> $this->UserModel->get($div, $search, $limit, $offset)->result_array(),
			'role'		=> $this->UserModel->get_role()->result_array(),
			'page'		=> $this->pagination->create_links(),
			'total_row'	=> $config['total_rows']
		);

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('user/list_user', $data);
		$this->load->view('footer');
	}

	public function detail_user($id = false)
	{
		if ($id == false) redirect(base_url() . 'masterdata/list_user');
		$data = array(
			'u'		=> $this->UserModel->get_detail($id),
			'role'	=> $this->UserModel->get_role()->result_array()
		);
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('user/detail_user', $data);
		$this->load->view('footer');
	}
	public function tambah_user_action()
	{
		$data = $_POST;
		$data['password_user'] = password_hash($_POST['password_user'], PASSWORD_DEFAULT);
		$nama = seo_title($data['nama_user']);

		if ($_FILES['file']['name'] != "") {
			$photo = upload_files('user', $nama);
			$data['photo_user'] = $photo;
		}

		$id = $this->UserModel->insert($data);
		$nip = get_kode_divisi($data['role_user']) . $id . date('m') . date('Y');
		$update = array(
			'id_user'	=> 	$id,
			'nip_user'	=>	$nip
		);
		$this->UserModel->update($update);
		redirect(base_url() . 'masterdata/detail_user/' . $id);
	}
	public function edit_user_action()
	{
		$data['id_user'] = $_POST['id_user'];
		$data['role_user'] = $_POST['role_user'];
		$data['nama_user'] = $_POST['nama_user'];
		$data['nip_user'] = $_POST['nip_user'];
		$data['email_user'] = $_POST['email_user'];
		$data['telepon_user'] = $_POST['telepon_user'];

		if($data['password_user'] != ""):
			$data['password_user'] = password_hash($_POST['password_user'], PASSWORD_DEFAULT);
		endif;

		$nama = seo_title($data['nama_user']);
		$path = 'user';

		if ($_FILES['file']['name'] != "") {
			$photo = upload_files($path, $nama);
			$data['photo_user'] = $photo;

			$images = $this->UserModel->get_files($data['id_user']);
			
			if (file_exists('./uploads/'.$path.'/'.$images)) {
				del_files($images, $path);
			}
		}

		$this->UserModel->update($data);
		redirect(base_url() . 'masterdata/detail_user/' . $data['id_user']);
	}


	public function delete_user($id)
	{
		$images = $this->UserModel->get_files($id);
		$path = 'user';

		$this->UserModel->delete($id);
		if (file_exists('./uploads/'.$path.'/'.$images)) {
			del_files($images, $path);
		}
		redirect(base_url() . 'masterdata/list_user');
	}
	//--------USER MENU END--------//


	
}
