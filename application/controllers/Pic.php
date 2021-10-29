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

	public function e_faktur()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('pic/e_faktur');
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
