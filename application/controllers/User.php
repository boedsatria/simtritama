<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
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
	public function detail($id)
	{
		$data = array(
			'u'		=> $this->UserModel->get_user($id)->row_array()
		);
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('user/profile_user', $data);
		$this->load->view('footer');
	}
	public function themes_user($t, $id)
	{
		if($t == "light%20dark"){
			$themes = 2;
		}else{
			$themes = 1;
		}
		// print_r($data);die;
		$update = array(
			'id_user'		=> 	$id,
			'status_user'	=>	$themes
		);
		$this->UserModel->update_user($update);
	}
}
