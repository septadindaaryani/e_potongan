<?php

class M_dashborad extends CI_Model
{

	public function index()
	{

		$id = $this->session->userdata('id_user');

		if ($id > 1) {

			$this->db->select('a.*');
			$this->db->from('tb_golongan a');
			$this->db->where('b.id_user', $id);
			$this->db->order_by('a.nm_golongan', 'desc');
			$query  = $this->db->get();
			return $query->result();
		} else {
			$this->db->select('a.*');
			$this->db->from('tb_golongan a');
			$this->db->order_by('a.nm_golongan', 'desc');
			$query  = $this->db->get();
			return $query->result();
		}


		// return $this->db->get('tb_pegawai')->result();


	}

	public function data_pegawai()
	{
		$query = $this->db->get('tb_pegawai');
		if ($query->num_rows() > 0) {
			return $query->num_rows();
		} else {
			return 0;
		}
	}

	public function data_user()
	{
		$query = $this->db->get('user');
		if ($query->num_rows() > 0) {
			return $query->num_rows();
		} else {
			return 0;
		}
	}
}
