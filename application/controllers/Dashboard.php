<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
	{
	  parent::__construct();
	  if(!$this->session->has_userdata('userlogin')) redirect(base_url('login'));
	//   $this->load->model('LaporanModel');
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('dashboard');
		$this->load->view('footer');
	}

}
