<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Masterdata extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		date_default_timezone_set("Asia/Jakarta");
		if (!$this->session->has_userdata('userlogin')) redirect(base_url('login'));
		$this->load->model('ClientModel');
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
	public function detail_client()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('masterdata/detail_client');
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
	public function data_penyelenggara()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('masterdata/data_penyelenggara');
		$this->load->view('footer');
	}
	public function detail_penyelenggara()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('masterdata/detail_penyelenggara');
		$this->load->view('footer');
	}
	public function detail_image()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('masterdata/detail_image');
		$this->load->view('footer');
	}

	public function data_user()
	{
		$data = array(
			'user'	=> $this->UserModel->get_user()->result_array()
		);

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('user/data_user', $data);
		$this->load->view('footer');
	}

	public function tambah_user()
	{
		$data = array(
			'role'	=> $this->UserModel->get_role()->result_array()
		);
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('masterdata/tambah_user', $data);
		$this->load->view('footer');
	}
	public function delete_user($id)
	{
		$this->UserModel->delete($id);
		redirect(base_url() . 'masterdata/data_user');
	}

	public function profile_user()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('masterdata/profile_user');
		$this->load->view('footer');
	}
}
