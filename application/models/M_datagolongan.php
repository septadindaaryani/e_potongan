<?php

class M_datagolongan extends CI_Model
{

	public function index()
	{

		$this->db->select('a.*');
		$this->db->from('tb_golongan a');
		$this->db->where_not_in('a.nm_golongan', ['-', 'I', 'II', 'III', 'IV']);
		$this->db->order_by('a.nm_golongan', 'ASC');
		$query  = $this->db->get();
		return $query->result();
	}

	public function create($data, $table)
	{
		return $this->db->insert($table, $data);
	}


	public function edit($where, $table)
	{
		return $this->db->get_where($table, $where);
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
