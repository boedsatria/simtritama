<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Lokasi extends CI_Controller {
	public function __construct()
	{
	  parent::__construct();
	  $this->load->model('VaksinModel');
	}

	public function index()
	{
		$data['tanggal'] = $this->VaksinModel->get_tanggal()->result();
		$data['lokasi'] = $this->VaksinModel->get_lokasi()->result();
		
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('tanggal_vaksin_list', $data);
		$this->load->view('footer');
	}
	
	public function get_tanggal()
	{
		$lokasi_tv = $_POST['lokasi_tv'];
		$tgl = $this->VaksinModel->get_tanggal_by_lokasi($lokasi_tv)->result();
		echo '<option>Pilih Tanggal!</option>';
		foreach ($tgl as $t):
		echo '<option value="'.$t->id_tv.'">'.tgl_indo($t->tanggal_tv).'</option>';
		endforeach;
	}
	public function get_jam_by_tanggal()
	{
		$tanggal_jv = $_POST['tanggal_jv'];
		$jam = $this->VaksinModel->get_jam_by_tanggal($tanggal_jv);
		// print_r(count($jam));die;
		if(count($jam) > 0):
			foreach ($jam as $j):
				if($j['sisa_jv'] < 1):
					echo '<option data-kuota="'.$j['sisa_jv'].'">Kuota Sudah Habis!</option>';
				else:
					echo '<option data-kuota="'.$j['sisa_jv'].'" value="'.$j['id_jv'].'">'.$j['jam_jv'].'</option>';
				endif;
			endforeach;
		else:
			echo '<option data-kuota="0">Kuota Sudah Habis!</option>';
		endif;
	}
	public function get_jam_by_tanggal2()
	{
		$tanggal_jv = $_POST['tanggal_jv'];
		$jam = $this->VaksinModel->get_jam_by_tanggal($tanggal_jv);
		// print_r(count($jam));die;
		foreach ($jam as $j):
			echo '<option data-kuota="'.$j['sisa_jv'].'" value="'.$j['id_jv'].'">'.$j['jam_jv'].'</option>';
		endforeach;
	}



}
