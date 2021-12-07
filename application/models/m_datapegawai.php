<?php

class M_datapegawai extends CI_Model
{

	public function tampil_data()
	{
		if ($this->session->userdata('level') == 'admin' or $this->session->userdata('level') == 'superadmin') {
			$this->db->select('a.*, c.nm_golongan, e.nm_jabatan');
			// $this->db->select('a.*, f.nm_eselon');
			$this->db->from('tb_pegawai a');
			$this->db->join('tb_golongan c', 'c.id_golongan  = a.id_golongan');
			$this->db->join('tb_jabatan e', 'e.id_jabatan  = a.id_jabatan');
			// $this->db->join('tb_eselon f', 'f.id_eselon  = a.id_eselon', 'LEFT');
			$this->db->order_by('a.id_pegawai', 'desc');
			$query  = $this->db->get();
			return $query->result();

		} else {
			$this->db->select('a.*, c.nm_golongan, e.nm_jabatan');
			$this->db->from('tb_pegawai a');
			$this->db->join('tb_golongan c', 'c.id_golongan  = a.id_golongan');
			$this->db->join('tb_jabatan e', 'e.id_jabatan  = a.id_jabatan');
			$this->db->join('user f', 'a.id_pegawai  = f.id_pegawai');
			// $this->db->join('tb_eselon g', 'a.id_eselon  = g.id_eselon', 'left');
			$this->db->where('f.id_user =', $this->session->userdata('id_user'));
			$this->db->order_by('a.id_pegawai', 'desc');
			$query  = $this->db->get();
			return $query->result();
		}
	}
	function golongan()
	{
		$sql = ('select * from tb_golongan');
		return $this->db->query($sql);
	}
	function jabatan()
	{
		$sql = ('select * from tb_jabatan');
		return $this->db->query($sql);
	}
	function eselon()
	{
		$sql = ('select * from tb_eselon');
		return $this->db->query($sql);
	}

	public function input_data($data, $table)
	{
		return $this->db->insert($table, $data);
	}

	public function hapus_data($where, $table)
	{
		$this->db->where($where);
		$this->db->delete($table);
	}


	public function edit_data($where, $table)
	{
		return $this->db->get_where($table, $where);
	}

	public function update_data($where, $data, $table)
	{
		$this->db->where($where);
		$this->db->update($table, $data);
	}
}
