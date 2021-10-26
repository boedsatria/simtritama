<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admin extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		//   $this->load->model('LaporanModel');
	}

	public function index() 
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('admin/dashboard_admin');
		$this->load->view('footer');
	}
	public function tambah_data()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('admin/data_project');
		$this->load->view('footer');
	}
	public function media_order()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('admin/media_order');
		$this->load->view('footer');
	}

	public function tambah_user()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('admin/tambah_user');
		$this->load->view('footer');
	}
}
