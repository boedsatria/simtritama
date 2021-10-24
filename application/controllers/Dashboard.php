<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {
	public function __construct()
	{
	  parent::__construct();
	  $this->load->model('LaporanModel');
	}

	public function index()
	{
        // if(!$this->session->has_userdata('userlogin')) redirect(base_url('login'));
		$limit = 5;

		$data['laporan'] = $this->LaporanModel->get_laporan_all($limit)->result_array();
		$data['kecamatan'] = $this->LaporanModel->get_kecamatan()->result_array();
		$data['jenis_laporan'] = $this->LaporanModel->get_jenis_laporan()->result_array();
		$data['data_laporan'] = $this->LaporanModel->get_jumlah_laporan()->row_array();
		$data['data_terbaru'] = $this->LaporanModel->get_jumlah_terbaru()->row_array();
		$data['data_selesai'] = $this->LaporanModel->get_jumlah_selesai()->row_array();
		$data['data_tim'] = $this->LaporanModel->get_jumlah_tim()->row_array();
		// print_r($data['data_laporan']);die;
		
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('dashboard', $data);
		$this->load->view('footer');
	}

	
	public function get_kelurahan()
	{
		$parent_kelurahan = $_POST['parent_kelurahan'];
		$kel = $this->LaporanModel->get_kelurahan_by_kecamatan($parent_kelurahan)->result();
		foreach ($kel as $k):
		echo '<option value="'.$k->id_kelurahan.'">'.$k->nama_kelurahan.'</option>';
		endforeach;
	}

}
