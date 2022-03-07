<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Finance extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		  $this->load->model('FinanceModel');
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
	public function diagram_monitoring()
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
		$wilayah = (isset($_GET['wilayah_filter']) ? $_GET['wilayah_filter'] : "0");

		if(isset($_GET['tgl_filter'])){
			$date_range = explode("-", $_GET['tgl_filter']);
			$mulai  = date('Y-m-d', strtotime($date_range[0]));
			$selesai  = date('Y-m-d', strtotime($date_range[1]));
		}else{
			$mulai  = date('Y-m-d');
			$selesai  = date('Y-m-d');
		}
		
		// print_r($mulai . " - " . $selesai);die;

		$data = array(
			'area'		=> $this->FinanceModel->get_area_coa()->result_array(),
			'coa'		=> $this->FinanceModel->get_coa()->result_array(),
			'petty'		=> $this->FinanceModel->get($wilayah, $mulai, $selesai)->result_array(),
			'user'		=> $this->FinanceModel->get_user()->result_array(),
			// 'saldo'		=> saldo_akhir()
		);
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('finance/petty_cash', $data);
		$this->load->view('footer');
	}

	public function petty_cash_action()
	{
		if($_POST['jenis'] == 'masuk'):
			$masuk = str_replace('.', '', $_POST['transaksi']);
			$keluar = 0;
		else:
			$masuk = 0;
			$keluar = str_replace('.', '', $_POST['transaksi']);
		endif;
		
		$data = array(
			'nama_pc'			=> $_POST['nama'],
			'masuk_pc'			=> $masuk,
			'keluar_pc'			=> $keluar,
			'saldo_pc'			=> saldo_akhir($_POST['wilayah'])+$masuk-$keluar,
			'pa_pc'				=> $_POST['pa'],
			'wilayah_pc'		=> $_POST['wilayah'],
			'coa_pc'			=> $_POST['coa'],
			'creator_pc'		=> $this->session->userdata('userlogin')['id_user'],
			'tanggal_pc'		=> date('Y-m-d', strtotime($_POST['tgl_trans']))
		);

		if ($_FILES['file']['name'] != "") {
			$photo = upload_files('pettycash', 'pettycash');
			$data['file_pc'] = $photo;
		}

		$this->FinanceModel->insert($data);

		if($_POST['wilayah'] == "1101" && cek_area($_POST['coa']) == 1):
			$data2 = array(
				'nama_pc'			=> $_POST['nama'],
				'masuk_pc'			=> $keluar,
				'keluar_pc'			=> 0,
				'saldo_pc'			=> saldo_akhir($_POST['coa'])+$keluar,
				'pa_pc'				=> $_POST['pa'],
				'wilayah_pc'		=> $_POST['coa'],
				'coa_pc'			=> $_POST['coa'],
				'creator_pc'		=> $this->session->userdata('userlogin')['id_user'],
				'tanggal_pc'		=> date('Y-m-d', strtotime($_POST['tgl_trans']))
			);
			$this->FinanceModel->insert($data2);
		endif;
		// print_r($data2);die;
		redirect(base_url() . 'finance/petty_cash/');

	}






	public function aset_dan_penyusutan()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('finance/aset_dan_penyusutan');
		$this->load->view('footer');
	}
	public function detail_penyusutan()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('finance/detail_penyusutan');
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
	public function cetak_laporan_keuangan()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('finance/cetak_laporan_keuangan');
		$this->load->view('footer');
	}
	public function plafon_coa()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('finance/plafon_coa');
		$this->load->view('footer');
	}
}

