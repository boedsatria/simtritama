<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
	{
	  parent::__construct();
	//   $this->load->model('LaporanModel');
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('produksi');
		$this->load->view('footer');
	}
	public function tambah_data()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('produksi');
		$this->load->view('footer');
	}

}
