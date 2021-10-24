<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Tim extends CI_Controller {
	public function __construct()
	{
	  parent::__construct();
	  $this->load->model('LaporanModel');
      date_default_timezone_set("Asia/Jakarta");
	}

	public function index()
	{
        if(!$this->session->has_userdata('userlogin')) redirect(base_url('login'));

		if($this->session->userdata('userlogin')['role_user'] < 3){
			$data['user'] = $this->LaporanModel->get_user_all()->result_array();
		} else {
			$data['user'] = $this->LaporanModel->get_tim_all()->result_array();
		}
		
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('user_list', $data);
		$this->load->view('footer');
	}

	public function add()
	{
        if(!$this->session->has_userdata('userlogin')) redirect(base_url('login'));

		$data['role'] = $this->LaporanModel->get_role_all()->result_array();
		// print_r($data['laporan']);die;

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('user_add', $data);
		$this->load->view('footer');
	}
	public function detail($id)
	{
        if(!$this->session->has_userdata('userlogin')) redirect(base_url('login'));

		$data['v'] = $this->LaporanModel->get_tim_detail($id)->row_array();
		$data['role'] = $this->LaporanModel->get_role_all()->result_array();
		// print_r($data['laporan']);die;

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('user_detail', $data);
		$this->load->view('footer');
	}
	public function ganti_password($id)
	{
        // if(!$this->session->has_userdata('userlogin')) redirect(base_url('login'));

		$data['v'] = $this->LaporanModel->get_tim_detail($id)->row_array();
		$data['role'] = $this->LaporanModel->get_role_all()->result_array();
		// print_r($data['laporan']);die;

		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('ganti_password', $data);
		$this->load->view('footer');
	}

	
	public function add_action()
	{
		$data = $_POST;

		if(isset($_POST['password_user'])){
			$data['password_user'] = password_hash($_POST['password_user'], PASSWORD_DEFAULT);
		} 

		$this->LaporanModel->insert_user($data);

		redirect(base_url('tim'));
	}
	public function update_action()
	{
		$data = $_POST;

		if(isset($_POST['password_user'])){
			$data['password_user'] = password_hash($_POST['password_user'], PASSWORD_DEFAULT);
		} 

		$this->LaporanModel->update_user($data, $_POST['email_user']);

		redirect(base_url('tim'));
	}
	public function hapus($id)
	{
		$this->LaporanModel->delete_user($id);

		redirect(base_url('tim'));
	}

}
