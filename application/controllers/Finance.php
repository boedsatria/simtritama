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
		$data = array(
			'area'	=> $this->FinanceModel->get_area_coa()->result_array(),
			'v'		=> $this->FinanceModel->get()->result_array(),
			'user'	=> $this->FinanceModel->get_user()->result_array()
		);


		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('finance/petty_cash', $data);
		$this->load->view('footer');
	}

	public function petty_cash_action()
	{
		if($_POST['jenis'] == 'masuk'):
			$masuk = $_POST['transaksi'];
			$keluar = 0;
		else:
			$masuk = 0;
			$keluar = $_POST['transaksi'];
		endif;
		
		$data = array(
			'nama_pc'			=> $_POST['nama'],
			'masuk_pc'			=> $masuk,
			'keluar_pc'			=> $keluar,
			'pa_pc'				=> $_POST['pa'],
			'wilayah_pc'		=> $_POST['wilayah'],
			'creator_pc'		=> $this->session->userdata('userlogin')['nama_user'],
			'tanggal_pc'		=> date('Y-m-d', strtotime($_POST['tgl_trans']))
		);

		if ($_FILES['file']['name'] != "") {
			$photo = upload_files($nama, 'pettycash');
			$data['file_pc'] = $photo;
		}

		$this->FinanceModel->insert($data);

		redirect(base_url() . 'finance/petty_cash/');

	}





	public function aset_habis_pakai()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('finance/aset_habis_pakai');
		$this->load->view('footer');
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
}
