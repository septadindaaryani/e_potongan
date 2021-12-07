<?php

class M_datajabatan extends CI_Model
{

	public function index()
	{

		$this->db->select('a.*');
		$this->db->from('tb_jabatan a');
		$this->db->where_not_in('a.nm_jabatan', '-');
		$this->db->order_by('a.id_jabatan', 'asc');
		$query  = $this->db->get();
		return $query->result();

		// return $this->db->get('tb_pegawai')->result();


	}

	public function create($data, $table)
	{
		return $this->db->insert($table, $data);
	}


	public function edit($where)
	{
		$this->db->select('a.*');
		$this->db->from('tb_jabatan a');
		$this->db->where('a.id_jabatan', $where);
		$this->db->order_by('a.id_jabatan', 'asc');
		$query  = $this->db->get();
		return $query->result();
	}

	public function update($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}

	public function delete($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}
}
