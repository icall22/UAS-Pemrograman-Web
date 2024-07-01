<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengisi_Model extends CI_Model {

	public $tabel = 'pengisi';
	// public $table1 = 'tbl_soal';
	public $id = 'id_pengisi';
	// public $username = 'username';

	public function getTest1($table)
	{
		// $res = $this->db->get($table);
		// return $res->result_array();
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where('kategori','KAT1');

		$res = $this->db->get();
		return $res->result_array();
	}

	public function getTest2($table)
	{
		// $res = $this->db->get($table);
		// return $res->result_array();
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where('kategori','KAT2');

		$res = $this->db->get();
		return $res->result_array();
	}

	public function getTest3($table)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where('kategori','KAT3');

		$res = $this->db->get();
		return $res->result_array();
	}

	public function getTest4($table)
	{
		$this->db->select('*');
		$this->db->from($table);
		$this->db->where('kategori','KAT4');

		$res = $this->db->get();
		return $res->result_array();
	}

	public function tambah($table, $data)
	{
		$tambah = $this->db->insert($table, $data);
		return $tambah;
	}

	function ambil_data_id($id, $table)
	{
		$this->db->where($this->id,$id);
		// $this->db->where('id_akun',$id);
		return $this->db->get($this->$table)->row();
	}
	
	function edit_data($id, $data)
	{
		$this->db->where($this->id, $id);
		$this->db->update($this->table,$data);
	}

	public function Get()
	{
		$this->db->select('pengisi.*,tbl_akun.*');
		$this->db->from('pengisi');
		$this->db->join('tbl_akun', 'pengisi.username = tbl_akun.username');
		// $this->db->order_by('nama', 'asc');
		$this->db->order_by('nama asc, id_kategori asc');
		$query = $this->db->get();
		return $query->result_array();
	}

	function getKategori($kategori, $username)
	{
		$query = $this->db->query("SELECT * FROM pengisi WHERE id_kategori = $kategori AND username = $username");
		return $query;
		// $this->db->select('*')
		// ->from('pengisi')
		// ->where('id_kategori', $id_kategori);
		// return $this->db->get();
	}

	function getUsername($username)
	{
		$this->db->select('*')
		->from('pengisi')
		->where('username', $username);
		return $this->db->get();
	}



	// function ifMulai($id, $table)
	// {
	// 	$this->db->select('*');
	// 	$this->db->from($table);
	// 	$this->db->where('kategori','KAT2');
	// 	$this->db->where('username','$this->session->userdata("user_name")');

	// 	$res = $this->db->get();
	// 	return $res->result_array();
	// }

}
?>