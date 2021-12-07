<?php

class M_user extends CI_Model
{

	public function index()
	{
		$this->db->select('a.*, b.nm_pegawai');
		$this->db->from('user a');
		$this->db->join('tb_pegawai b', 'a.id_pegawai = b.id_pegawai');
		$this->db->where('a.level=', 'admin');
		$this->db->or_where('a.level=', 'user');
		$this->db->order_by('b.nm_pegawai', 'desc');
		$query  = $this->db->get();
		return $query->result();
	}

	public function pegawai()
	{
		$sql = ('select * from tb_pegawai');
		return $this->db->query($sql);
	}
	public function role()
	{
		$sql = ("select * from tb_role where jenis_user  NOT IN('super_admin')");
		return $this->db->query($sql);
	}

	public function create($data, $table)
	{
		return $this->db->insert($table, $data);
	}


	public function edit($where)
	{
		$this->db->select('a.*, b.nm_pegawai');
		$this->db->from('user a');
		$this->db->join('tb_pegawai b', 'a.id_pegawai = b.id_pegawai');
		$this->db->join('tb_role c', 'a.id_role = c.id_role');
		$this->db->where('a.id_user', $where);
		$this->db->order_by('b.nm_pegawai', 'desc');
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


	public function role_akses()
	{
		$sql = ("select * from tb_role where jenis_user NOT IN ('super_admin')");
		return $this->db->query($sql);
	}

	public function role_akses_where($where)
	{
		$this->db->select('a.*');
		$this->db->from('tb_role a');
		$this->db->where('a.id_role', $where);
		$this->db->order_by('a.id_role', 'desc');
		$query  = $this->db->get();
		return $query->result();
	}
}
