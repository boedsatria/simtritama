<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produksi extends CI_Controller
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
		$this->load->view('produksi/dashboard_produksi');
		$this->load->view('footer');
	}
	public function job_order()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('produksi/job_order_produksi');
		$this->load->view('footer');
	}
	public function detail_job_order()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('produksi/detail_job_order');
		$this->load->view('footer');
	}
	public function pengajuan()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('produksi/pengajuan_produksi');
		$this->load->view('footer');
	}
	public function pembayaran_tagihan()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('produksi/pembayaran_tagihan');
		$this->load->view('footer');
	}
	public function kirim_hasil_produksi()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('produksi/hasil_produksi');
		$this->load->view('footer');
	}
}
