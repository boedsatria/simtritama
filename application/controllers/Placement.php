<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Placement extends CI_Controller
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
		$this->load->view('placement/dashboard_placement');
		$this->load->view('footer');
	}
	public function dashboard_placement()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('placement/dashboard_placement');
		$this->load->view('footer');
	}
	public function job_order()
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

		$config['base_url'] = base_url('placement/job_order/');
		$config['reuse_query_string'] = true;
		$config['total_rows'] = $this->ProjectModel->get_placement_data($jenis, $search)->num_rows();
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
			'project'			=> $this->ProjectModel->get_placement_data($jenis, $search, $limit, $offset)->result_array(),
			'page'				=> $this->pagination->create_links(),
			'total_row'			=> $config['total_rows']
		);
		// print_r($data['type']);die;
		
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('placement/job_order_placement', $data);
		$this->load->view('footer');
	}
	public function pengajuan_dan_logproof()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('placement/logprof');
		$this->load->view('footer');
	}
	public function detail_logproof()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('placement/detail_logproof');
		$this->load->view('footer');
	}
	public function order_media()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('placement/order_media');
		$this->load->view('footer');
	}
	public function mediaorder_placement()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('placement/media_order');
		$this->load->view('footer');
	}
	public function detail_mediaorder_placement()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('placement/detail_mediaorder_placement');
		$this->load->view('footer');
	}
	public function ratecard()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('placement/ratecard');
		$this->load->view('footer');
	}
	public function detail_order_placement($id = false)
	{
		$query = ($id == false ? array('id_project' => 0, 'jenis_project' => "", 'nama_project' => "", 'desc_project' => "") : $this->ProjectModel->get_detail($id));
		$data = array(
			'v'			=> $query
		);
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('placement/detail_hps_placement', $data);
		$this->load->view('footer');
	}
}
