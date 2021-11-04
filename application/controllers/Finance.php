<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Finance extends CI_Controller
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
		$this->load->view('finance/dashboard_finance');
		$this->load->view('footer');
	}
	public function dashboard_finance()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('finance/dashboard_finance');
		$this->load->view('footer');
	}
	public function buku_besar()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('finance/buku_besar');
		$this->load->view('footer');
	}
	public function petty_cash()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('finance/petty_cash');
		$this->load->view('footer');
	}
	public function asset_penyusutan()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('finance/asset_penyusutan');
		$this->load->view('footer');
	}
	public function general_ledger()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('finance/general_ledger');
		$this->load->view('footer');
	}
	public function akun_transaksi()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('finance/akun_transaksi');
		$this->load->view('footer');
	}
	public function laporan_keuangan()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('finance/laporan_keuangan');
		$this->load->view('footer');
	}
}
