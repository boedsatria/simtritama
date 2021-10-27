<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Masterdata extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		if(!$this->session->has_userdata('userlogin')) redirect(base_url('login'));
        $this->load->model('UserModel');
	}

	public function index()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('masterdata/dashboard_master_data');
		$this->load->view('footer');
	}
	public function data_client()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('masterdata/data_client');
		$this->load->view('footer');
	}
	public function data_media()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('masterdata/data_media');
		$this->load->view('footer');
	}
	public function data_mitra()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('masterdata/data_mitra');
		$this->load->view('footer');
	}

	public function data_user()
	{
		$data = array(
			'user'	=> $this->UserModel->get_user()->result_array()
		);

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('masterdata/data_user');
		$this->load->view('footer');
	}

	public function tambah_user()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('masterdata/tambah_user');
		$this->load->view('footer');
	}

	public function profile_user()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('masterdata/profile_user');
		$this->load->view('footer');
	}
}
