<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Hasil extends CI_Controller {

    public function __construct()
    {
        parent::__construct();
        //load model admin
        $this->load->model('admin');
        $this->load->model('Pengisi_Model');
        //cek session dan level user
        if($this->admin->is_role() != "siswa"){
            redirect("login/");
        }
    }

    public function index()
    {
        $username = $this->session->userdata('user_name');
        $data['username']=$this->Pengisi_Model->getUsername($username)->result();
        
        // $data['pre1'] = $this->Pengisi_Model->getKategori('1', $username)->num_rows();
        $data['pre1'] = $this->Pengisi_Model->getKategori('1', $username)->result();
        $data['pre2'] = $this->Pengisi_Model->getKategori('2', $username)->result();
        $data['pre3'] = $this->Pengisi_Model->getKategori('3', $username)->result();
        $data['pre4'] = $this->Pengisi_Model->getKategori('4', $username)->result();
        $data['post1'] = $this->Pengisi_Model->getKategori('5', $username)->result();
        $data['post2'] = $this->Pengisi_Model->getKategori('6', $username)->result();
        $data['post3'] = $this->Pengisi_Model->getKategori('7', $username)->result();
        $data['post4'] = $this->Pengisi_Model->getKategori('8', $username)->result();

        $this->load->view('siswa/hasil', $data);
    }

}