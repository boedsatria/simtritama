<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Placement extends CI_Controller
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
		$this->load->view('placement/dashboard_placement');
		$this->load->view('footer');
	}
	public function job_order()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('placement/job_order_placement');
		$this->load->view('footer');
	}
	public function pengajuan_dan_logproof()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('placement/hps_placement');
		$this->load->view('footer');
	}
	public function order_media()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('placement/order_media');
		$this->load->view('footer');
	}
	public function kirim_hasil_placement()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('placement/hasil_placement');
		$this->load->view('footer');
	}
	public function pembayaran_tagihan()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('placement/pembayaran_tagihan');
		$this->load->view('footer');
	}
	public function detail_order_placement()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('placement/detail_order_placement');
		$this->load->view('footer');
	}
}
