<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Material extends CI_Controller {
	public function __construct()
	{
	  parent::__construct();
	  $this->load->model('LaporanModel');
      date_default_timezone_set("Asia/Jakarta");
	}

	public function index()
	{
        if(!$this->session->has_userdata('userlogin')) redirect(base_url('login'));

		$data['material'] = $this->LaporanModel->get_material()->result_array();
		
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('material_list', $data);
		$this->load->view('footer');
	}
	public function add()
	{
        if(!$this->session->has_userdata('userlogin')) redirect(base_url('login'));

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('material_add');
		$this->load->view('footer');
	}
	public function detail($id)
	{
        if(!$this->session->has_userdata('userlogin')) redirect(base_url('login'));

		$data['v'] = $this->LaporanModel->get_material_detail($id)->row_array();
		// print_r($data['laporan']);die;

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('material_detail', $data);
		$this->load->view('footer');
	}
	public function add_action()
	{
		$this->LaporanModel->insert_material($_POST);

		redirect(base_url('material'));
	}

	
	public function update_action()
	{
		$this->LaporanModel->update_material($_POST);

		redirect(base_url('material'));
	}
	public function hapus($id)
	{
		$this->LaporanModel->delete_material($id);

		redirect(base_url('material'));
	}
}
