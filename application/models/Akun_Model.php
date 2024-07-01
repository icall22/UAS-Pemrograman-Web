<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Akun_Model extends CI_Model {

	public $table = 'tbl_akun';
	public $id = 'id_akun';

	public function Get($table)
	{
		$res = $this->db->get($table);
		return $res->result_array();
	}

	function ambil_data_id($id)
	{
		$this->db->where($this->id,$id);
		// $this->db->where('id_akun',$id);
		return $this->db->get($this->table)->row();
	}

	public function tambah($table, $data)
	{
		$tambah = $this->db->insert($table, $data);
		return $tambah;
	}

	public function hapus_akun($table, $id)
	{
		$this->db->where('id_akun',$id);
		$hapus=$this->db->delete($table);
		return $hapus;
	}

	function edit_data($id, $data)
	{
		$this->db->where($this->id, $id);
		$this->db->update($this->table,$data);
	}
	
}
?>