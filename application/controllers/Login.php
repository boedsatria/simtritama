<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('DashboardModel');
        date_default_timezone_set("Asia/Jakarta");
    }

    public function index()
    {
        if($this->session->userdata('userlogin')) redirect(base_url());
        $this->load->view('login');
    }

    public function action()
    {
        $nip = $this->input->post('email');
        $password = $this->input->post('password');

        $data = $this->DashboardModel->get_login($nip, $password);
        
        if($data == 'User Tidak Ditemukan' || $data == 'Password Salah'):
            $this->session->set_flashdata('error_login', $data);
            redirect(base_url('login'));
        else:
            $newdata = [
                'id_user'           => $data->id_user,
                'nama_user'         => $data->nama_user,
                'email_user'        => $data->email_user,
                'photo_user'	    => $data->photo_user,
                'role_user'	        => $data->role_user,
                'role_name'	        => $data->nama_role,
                'logged_in'         => TRUE
            ];
            $this->session->set_userdata('userlogin', $newdata);
            redirect(base_url());
        endif;
    }

    public function remove()
    {        
        $this->session->sess_destroy('access_token');
        // $this->session->sess_destroy('userlogin');
        redirect(base_url('login'));
    }

}
