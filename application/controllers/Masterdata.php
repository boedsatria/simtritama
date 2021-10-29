<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Masterdata extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
        date_default_timezone_set("Asia/Jakarta");
		if (!$this->session->has_userdata('userlogin')) redirect(base_url('login'));
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
		$this->load->view('masterdata/data_user', $data);
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
	public function tambah_user_action()
	{
		$data = $_POST;
		$data['password_user'] = password_hash($_POST['password_user'], PASSWORD_DEFAULT);
		$unspace = str_replace(" ", "", $data['password_user']);
		$nama = preg_replace("/[^a-zA-Z0-9]+/", "", strtolower($unspace));
		$data['nama_user'] = $nama;

		if($_FILES){
			$photo = upload_files('user', $nama);
			$data['photo_user'] = $photo;
		}

		$id = $this->UserModel->insert_user($data);
		$nip = get_kode_divisi($data['role_user']).$id.date('m').date('m');
		$update = array(
			'id_user'	=> 	$id,
			'nip_user'	=>	$nip
		);
		$this->UserModel->update_user($update);
		redirect(base_url().'user/'.$id);
	}

	public function profile_user()
	{
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('masterdata/profile_user');
		$this->load->view('footer');
	}
}
