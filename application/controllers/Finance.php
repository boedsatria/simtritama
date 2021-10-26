<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Finance extends CI_Controller {
	public function __construct()
	{
	  parent::__construct();
	//   $this->load->model('LaporanModel');
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('finance/dashboard_finance');
		$this->load->view('footer');
	}
	public function data()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('finance/dashboard_finance');
		$this->load->view('footer');
	}

}
