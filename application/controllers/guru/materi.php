<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Materi extends CI_Controller {


	public function __construct()
	{
		parent::__construct();
        //load model admin
		$this->load->model('admin');
        //cek session dan level user
		if($this->admin->is_role() != "guru"){
			redirect("login");
		}
	}

	public function index()
	{
		$data = $this->Akun_Model->Get('materi');
		$data = array('data' => $data);

		$this->load->view('guru/materi', $data);
	}

	public function download()
	{

	}
}
