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
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('masterdata/dashboard_master_data');
		$this->load->view('footer');
	}
	public function data_client()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('masterdata/data_client');
		$this->load->view('footer');
	}
	public function detail_client()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('masterdata/detail_client');
		$this->load->view('footer');
	}
	public function data_media()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('masterdata/data_media');
		$this->load->view('footer');
	}
	public function detail_media()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('masterdata/detail_media');
		$this->load->view('footer');
	}
	public function data_mitra()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('masterdata/data_mitra');
		$this->load->view('footer');
	}
	public function data_penyelenggara()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('masterdata/data_penyelenggara');
		$this->load->view('footer');
	}
	public function detail_penyelenggara()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('masterdata/detail_penyelenggara');
		$this->load->view('footer');
	}
	public function detail_image()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('masterdata/detail_image');
		$this->load->view('footer');
	}

	public function data_user()
	{
		$div = (isset($_GET['divisi']) ? $_GET['divisi'] : "0");
		$search = (isset($_GET['search']) ? $_GET['search'] : "");

		//PAGINATION START//
		$limit = 6;
		$offset = ($this->uri->segment(3) ? $this->uri->segment(3) : 0);
		if($limit > $offset) $offset = 0;
// print_r($selesai);die;
		$config['base_url'] = base_url('masterdata/data_user/');
		$config['reuse_query_string'] = true;
		$config['total_rows'] = $this->UserModel->get_user($div, $search)->num_rows();
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



		// print_r($_GET);
		$data = array(
			'user'	=> $this->UserModel->get_user($div, $search, $limit, $offset)->result_array(),
			'role'	=> $this->UserModel->get_role()->result_array(),
			'page'	=> $this->pagination->create_links()
		);

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('user/data_user', $data);
		$this->load->view('footer');
	}

	
}
