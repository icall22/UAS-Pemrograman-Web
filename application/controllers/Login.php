<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load library form validasi
        $this->load->library('form_validation');
        //load model admin
        $this->load->model('admin');
    }

    public function index()
    {

        if($this->admin->is_logged_in())
        {
            //jika memang session sudah terdaftar, maka redirect ke halaman dahsboard
            // var_dump('coba');
            //redirect berdasarkan level user
            if($this->session->userdata("role") == "admin"){
                redirect('admin/dashboard/');
            }elseif ($this->session->userdata("role") == "guru"){
                redirect('guru/dashboard/');
            }
            else{
                redirect('siswa/dashboard/');
            }

        }
        else{

                //jika session belum terdaftar

                //set form validation
            $this->form_validation->set_rules('username', 'Username', 'required');
            $this->form_validation->set_rules('password', 'Password', 'required');

                //set message form validation
            $this->form_validation->set_message('required', '<div class="alert alert-danger" style="margin-top: 3px">
                <div class="header"><b><i class="fa fa-exclamation-circle"></i> {field}</b> harus diisi</div></div>');

                //cek validasi
            if ($this->form_validation->run() == TRUE) {

                //get data dari FORM
                $username = $this->input->post("username", TRUE);
                $password = MD5($this->input->post('password', TRUE));

                //checking data via model
                $checking = $this->admin->check_login('tbl_akun', array('username' => $username), array('password' => $password));

                //jika ditemukan, maka create session
                if ($checking != FALSE) {
                    foreach ($checking as $apps) {

                        $session_data = array(
                            'user_id'   => $apps->id_akun,
                            'user_name' => $apps->username,
                            'user_pass' => $apps->password,
                            'user_nama' => $apps->nama,
                            'user_ket'  => $apps->ket,
                            'role'      => $apps->level
                        );
                        //set session userdata
                        $this->session->set_userdata($session_data);

                        //redirect berdasarkan level user
                        if($this->session->userdata("role") == "admin"){
                            redirect('admin/dashboard/');
                        }elseif ($this->session->userdata("role") == "guru"){
                            redirect('guru/dashboard/');
                        }
                        else{
                            redirect('siswa/dashboard/');
                        }

                    }
                }else{
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username / Password Anda Salah !</div>');
                    redirect('login');
                }

            }else{

                $this->load->view('login');
            }

        }

    }

}