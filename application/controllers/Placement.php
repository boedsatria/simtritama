<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Placement extends CI_Controller {
	public function __construct()
	{
	  parent::__construct();
	//   $this->load->model('LaporanModel');
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('placement/dashboard_placement');
		$this->load->view('footer');
	}
	public function job_order_placement()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('placement/job_order_placement');
		$this->load->view('footer');
	}
	public function kirim_hps_placement()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('placement/hps_placement');
		$this->load->view('footer');
	}
	public function kirim_hasil_placement()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('placement/hasil_placement');
		$this->load->view('footer');
	}
	public function keuangan_placement()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('placement/keuangan_placement');
		$this->load->view('footer');
	}

}