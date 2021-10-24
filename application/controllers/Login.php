<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function __construct()
	{
	  parent::__construct();
	  $this->load->model('LaporanModel');
      date_default_timezone_set("Asia/Jakarta");
	}
    
    
    public function index()
    {
       
        $google_client = new Google_Client();
        $google_client->setAuthConfigFile('client_secret_132942688146-098pdec38flpvd0vr8k9groht8l2u89u.apps.googleusercontent.com.json'); //rename file ini supaya lebih aman nanti
        $google_client->setRedirectUri("http://localhost/sitambel/login/");
        $google_client->addScope("email");
        $google_client->addScope("profile");
        if(isset($_GET["code"]))
        {
            $token = $google_client->fetchAccessTokenWithAuthCode($_GET["code"]);

            if(!isset($token["error"]))
            {
                // $google_client->setAccessToken($token['access_token']);

                $this->session->set_userdata('access_token', $token['access_token']);

                $google_service = new Google_Service_Oauth2($google_client);

                $data = $google_service->userinfo->get();

                $current_datetime = date('Y-m-d H:i:s');

                if($this->LaporanModel->check_register($data['email']))
                {
                    //update data
                    $user_data = array(
                        'id_user'       => get_field('app_user', 'email_user', $data['email'], 'id_user'),
                        'nama_user'     => $data['given_name']." ".$data['family_name'],
                        'email_user'    => $data['email'],
                        'photo_user'    => $data['picture'],
                        'role_user'	    => $this->LaporanModel->get_role($data['email']),
                    );

                    $this->LaporanModel->update_user($user_data, $data['email']);
                }
                else
                {
                    //insert data
                    $user_data = array(
                        'nama_user'     => $data['given_name']." ".$data['family_name'],
                        'email_user'    => $data['email'],
                        'photo_user'    => $data['picture'],
                        'role_user'	    => 4,
                        'created_user'  => $current_datetime
                    );

                    $id = $this->LaporanModel->insert_user($user_data);
                    $user_data['id_user'] = $id;
                }
                // print_r($user_data);die;,
                $user_data['logged_in'] = TRUE;
                $this->session->set_userdata('userlogin', $user_data);
            }
        }
        $login_button = '';
        if(!$this->session->userdata('access_token'))
        { 
            $login_button = $google_client->createAuthUrl();
            $data['login_button'] = $login_button;
            $this->load->view('header');
            $this->load->view('login', $data);
            $this->load->view('footer');
        }
        else
        {
            redirect(base_url('dashboard'));
        }
        
    }

    public function action()
    {
        $nip = $this->input->post('nip');
        $password = $this->input->post('password');

        $data = $this->LaporanModel->get_login($nip, $password);
        
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
                'logged_in'         => TRUE
            ];
            $this->session->set_userdata('userlogin', $newdata);
            redirect(base_url());
        endif;
    }

    public function remove()
    {        
        $this->session->sess_destroy('access_token');
        $this->session->sess_destroy('userlogin');
        redirect(base_url('login'));
    }

    public function forgot()
    {
        print_r($_POST);die;
        
    }
    public function add_action()
    {
        // print_r($_POST);die; 
        $user = array(
            'nama_user'     => $_POST['nama_user'],
            'email_user'    => $_POST['email_user'],
            'password_user' => password_hash($_POST['password_user'], PASSWORD_DEFAULT),
            'role_user'	    => 4,
            'photo_user'    => "",
            'telepon_user'  => $_POST['telepon_user']
        );

        if($this->LaporanModel->check_register($user['email_user']))
        {
            $this->session->set_flashdata('swal', '
				Swal.fire({
					title: "Gagal",
					text: "Email sudah terdaftar!",
					icon: "error"
				});
			');
            redirect(base_url('login'));
        } else {
            $data = $this->LaporanModel->insert_user($user);
            if ($data > 0):
                $this->session->set_flashdata('swal', '
                    Swal.fire({
                        title: "Sukses",
                        text: "Anda berhasil mendaftar!",
                        icon: "success"
                    });
                ');
                $user['id_user'] = $data;
                $user['logged_in'] = TRUE;
                $this->session->set_userdata('userlogin', $user);
                redirect(base_url('dashboard'));
            else:
                $this->session->set_flashdata('swal', '
                    Swal.fire({
                        title: "Gagal",
                        text: "Data gagal ditambah!",
                        icon: "error"
                    });
                ');
                redirect(base_url('login'));
            endif;
        }
        
    }
}