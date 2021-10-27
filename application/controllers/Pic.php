<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pic extends CI_Controller
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
		$this->load->view('pic/media_order');
		$this->load->view('footer');
	}

	public function tambah_user()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('pic/tambah_user');
		$this->load->view('footer');
	}
}
