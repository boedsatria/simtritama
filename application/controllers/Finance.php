<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Finance extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		  $this->load->model('FinanceModel');
		  $this->load->model('ClientModel');
		  $this->load->model('ProjectModel');
		  $this->load->model('MediaModel');
		  $this->load->model('UserModel');
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
			'non_area'	=> $this->FinanceModel->get_non_area_coa()->result_array(),
			'coa'		=> $this->FinanceModel->get_coa()->result_array(),
			'bb'		=> $this->FinanceModel->get_bb($wilayah, $mulai, $selesai)->result_array(),
			'user'		=> $this->FinanceModel->get_user()->result_array(),
			// 'saldo'		=> saldo_akhir()
		);

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('finance/buku_besar', $data);
		$this->load->view('footer');
	}
	public function buku_besar_action()
	{
		if($_POST['jenis'] == 'masuk'):
			$masuk = str_replace('.', '', $_POST['transaksi']);
			$keluar = 0;
		else:
			$masuk = 0;
			$keluar = str_replace('.', '', $_POST['transaksi']);
		endif;

		$kode_hutang = $_POST['coa'][0];
		
		$data = array(
			'nama_bb'			=> $_POST['nama'],
			'masuk_bb'			=> $masuk,
			'keluar_bb'			=> $keluar,
			// 'saldo_pc'			=> ($kode_hutang == 2 ? saldo_akhir($_POST['wilayah']) : saldo_akhir($_POST['wilayah'])+$masuk-$keluar),
			'saldo_bb'			=> 0,
			'pa_bb'				=> $_POST['pa'],
			'referensi_bb'		=> $_POST['referensi_bb'],
			'coa_bb'			=> $_POST['coa'],
			'creator_bb'		=> $this->session->userdata('userlogin')['id_user'],
			'tanggal_bb'		=> date('Y-m-d', strtotime($_POST['tgl_trans']))
		);

		if ($_FILES['file']['name'] != "") {
			$photo = upload_files('bukubesar', 'bukubesar');
			$data['file_bb'] = $photo;
		}

		// print_r($data);die;

		$parent = $this->FinanceModel->insert_bb($data);

		redirect(base_url() . 'finance/buku_besar/');

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

		$kode_hutang = $_POST['coa'][0];
		
		$data = array(
			'nama_pc'			=> $_POST['nama'],
			'masuk_pc'			=> $masuk,
			'keluar_pc'			=> $keluar,
			// 'saldo_pc'			=> ($kode_hutang == 2 ? saldo_akhir($_POST['wilayah']) : saldo_akhir($_POST['wilayah'])+$masuk-$keluar),
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

		// print_r($data);die;

		$parent = $this->FinanceModel->insert_pc($data);


		// //JIKA KODE BEBAN MASUK HUTANG
		// if($kode_hutang == 2){
		// 	$data_hutang = array(
		// 		// 'project_hutang'	=> $id,
		// 		'tipe_hutang'		=> 2103,
		// 		'parent_hutang'		=> $parent,
		// 		'nominal_hutang'	=> $data['keluar_pc']
		// 	);
		// 	$this->FinanceModel->insert_hutang($data_hutang);
		// }

		// //JIKA KODE BEBAN MASUK HUTANG
		// if($_POST['coa'] == '6102' || $_POST['coa'] == '6102'){
		// 	$data_hutang = array(
		// 		// 'project_hutang'	=> $id,
		// 		'tipe_hutang'		=> 2103,
		// 		'parent_hutang'		=> $parent,
		// 		'nominal_hutang'	=> $data['keluar_pc']
		// 	);
		// 	$this->FinanceModel->insert_hutang($data_hutang);
		// }
		

		// if($_POST['wilayah'] == "1101" && cek_area($_POST['coa']) == 1):
		// 	$data2 = array(
		// 		'nama_pc'			=> $_POST['nama'],
		// 		'masuk_pc'			=> $keluar,
		// 		'keluar_pc'			=> 0,
		// 		'saldo_pc'			=> saldo_akhir($_POST['coa'])+$keluar,
		// 		'pa_pc'				=> $_POST['pa'],
		// 		'wilayah_pc'		=> $_POST['coa'],
		// 		'coa_pc'			=> $_POST['coa'],
		// 		'creator_pc'		=> $this->session->userdata('userlogin')['id_user'],
		// 		'tanggal_pc'		=> date('Y-m-d', strtotime($_POST['tgl_trans']))
		// 	);
		// 	$this->FinanceModel->insert_pc($data2);
		// endif;
		// print_r($data2);die;
		redirect(base_url() . 'finance/petty_cash/');

	}







	public function hutang_dan_piutang()
	{
		$hp = (isset($_GET['hp']) ? $_GET['hp'] : "0");
		$client = (isset($_GET['client']) ? $_GET['client'] : "0");
		$media = (isset($_GET['media']) ? $_GET['media'] : "0");
		$vendor = (isset($_GET['vendor']) ? $_GET['vendor'] : "0");

		if(isset($_GET['tgl_filter'])){
			$date_range = explode("-", $_GET['tgl_filter']);
			$mulai  = date('Y-m-d', strtotime($date_range[0]));
			$selesai  = date('Y-m-d', strtotime($date_range[1]));
		}else{
			$mulai  = date('Y-m-01');
			$selesai  = date('Y-m-d');
		}
		
		// print_r($mulai . " - " . $selesai);die;

		$data = array(
			'client'		=> $this->ClientModel->get()->result_array(),
			'media'			=> $this->MediaModel->get()->result_array(),
			'vendor'		=> $this->ProjectModel->get_vendor_pro(),
			'hp'			=> $this->FinanceModel->get_hp($hp, $client, $media, $vendor, $mulai, $selesai),
			// 'saldo'		=> saldo_akhir()
		);
		// print_r($data['hp']);die;
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('finance/hutang_dan_piutang', $data);
		$this->load->view('footer');
	}


























	public function aset_dan_penyusutan()
	{
		$cat = (isset($_GET['cat']) ? $_GET['cat'] : "0");

		$data = array(
			'cat'			=> $this->FinanceModel->get_cat_assets()->result_array(),
			'assets'		=> $this->FinanceModel->get_assets($cat)->result_array(),
			'stock'			=> $this->FinanceModel->get_stock()->result_array(),
			// 'saldo'		=> saldo_akhir()
		);
// print_r($data['stock']);die;
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('finance/aset_dan_penyusutan', $data);
		$this->load->view('footer');
	}
	public function aset_action()
	{

		$_POST['harga_beli_as'] = str_replace('.', '', $_POST['harga_beli_as']);
		$_POST['tanggal_beli_as'] = date('Y-m-d', strtotime($_POST['tanggal_beli_as']));

		$parent = $this->FinanceModel->insert_aset($_POST);

		redirect(base_url() . 'finance/aset_dan_penyusutan/');

	}
	public function stok_action()
	{

		$this->FinanceModel->insert_stock($_POST);

		redirect(base_url() . 'finance/aset_dan_penyusutan/');

	}

	public function detail_penyusutan($id)
	{
		$data = array(
			'v'			=> $this->FinanceModel->get_assets($cat = false, $id)->row_array(),
		);
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('finance/detail_penyusutan', $data);
		$this->load->view('footer');
	}


	public function detail_stock($id)
	{
		$data = array(
			'data'				=> $this->FinanceModel->get_stock($id)->row_array(),
			'detail'			=> $this->FinanceModel->get_stock_detail($id)->result_array(),
			'user'				=> $this->UserModel->get()->result_array(),
		);
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('finance/detail_stock', $data);
		$this->load->view('footer');
	}
	public function tambah_stock_action($id)
	{
		$_POST['date_ds'] = date('Y-m-d', strtotime($_POST['date_ds']));
		$this->FinanceModel->insert_stock($_POST);

		redirect(base_url() . 'finance/detail_stock/'.$id);

	}






	public function general_ledger()
	{
		$cat = (isset($_GET['cat']) ? $_GET['cat'] : "1000");
		$akun = (isset($_GET['akun']) ? $_GET['akun'] : "0000");

		if(isset($_GET['tgl_filter'])){
			$date_range = explode("-", $_GET['tgl_filter']);
			$mulai  = date('Y-m-d', strtotime($date_range[0]));
			$selesai  = date('Y-m-d', strtotime($date_range[1]));
		}else{
			$mulai  = date('Y-m-d');
			$selesai  = date('Y-m-d');
		}

		$data = array(
			'cat_coa'	=> $this->FinanceModel->get_cat_coa()->result_array(),
			'gl'		=> $this->FinanceModel->get_gl($akun, $mulai, $selesai)->result_array()
		);

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('finance/general_ledger', $data);
		$this->load->view('footer');
	}

	public function get_coa($id)
	{
		$data = $this->FinanceModel->get_coa($id)->result_array();
		if(count($data) > 1):
			echo '<option value="'.$id.'">'.$id.' - Pilih Semua</option>';
			foreach($data as $v):
				echo '<option value="'.$v['no_coa'].'">'.$v['no_coa'].' - '.$v['nama_coa'].'</option>';
			endforeach;
		else:
			echo '<option>No Data</option>';
		endif;
		
		
	}
	






	
	public function neraca_keuangan()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('finance/neraca_keuangan');
		$this->load->view('footer');
	}









	public function detail_hutang_dan_piutang()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('finance/detail_hutang_dan_piutang');
		$this->load->view('footer');
	}
	public function akun_transaksi()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('finance/akun_transaksi');
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

