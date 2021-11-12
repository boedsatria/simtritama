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
			'u'		=> $this->UserModel->get_user_detail($id),
			'role'	=> $this->UserModel->get_role()->result_array()
		);
		$this->load->view('header');
		$this->load->view('sidebar');
		$this->load->view('user/profile_user', $data);
		$this->load->view('footer');
	}
	public function tambah_action()
	{
		$data = $_POST;
		$data['password_user'] = password_hash($_POST['password_user'], PASSWORD_DEFAULT);
		$nama = seo_title($data['nama_user']);

		if ($_FILES['file']['name'] != "") {
			$photo = upload_files('user', $nama);
			$data['photo_user'] = $photo;
		}

		$id = $this->UserModel->insert($data);
		$nip = get_kode_divisi($data['role_user']) . $id . date('m') . date('Y');
		$update = array(
			'id_user'	=> 	$id,
			'nip_user'	=>	$nip
		);
		$this->UserModel->update($update);
		redirect(base_url() . 'user/detail/' . $id);
	}
	public function edit_action()
	{
		$data['id_user'] = $_POST['id_user'];
		$data['role_user'] = $_POST['role_user'];
		$data['nama_user'] = $_POST['nama_user'];
		$data['nip_user'] = $_POST['nip_user'];
		$data['email_user'] = $_POST['email_user'];
		$data['telepon_user'] = $_POST['telepon_user'];

		if($data['password_user'] != ""):
			$data['password_user'] = password_hash($_POST['password_user'], PASSWORD_DEFAULT);
		endif;

		$nama = seo_title($data['nama_user']);

		if ($_FILES['file']['name'] != "") {
			$photo = upload_files('user', $nama);
			$data['photo_user'] = $photo;

			$images = $this->UserModel->get_files($data['id_user']);
			$path = 'user';
			
			if (file_exists('./uploads/'.$path.'/'.$images)) {
				del_files($images, $path);
			}
		}

		$this->UserModel->update($data);
		redirect(base_url() . 'user/detail/' . $data['id_user']);
	}


	public function delete($id)
	{
		$images = $this->UserModel->get_files($id);
		$path = 'user';

		$this->UserModel->delete($id);
		if (file_exists('./uploads/'.$path.'/'.$images)) {
			del_files($images, $path);
		}
		redirect(base_url() . 'masterdata/data_user');
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
