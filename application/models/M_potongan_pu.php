<?php

class M_potongan_pu extends CI_Model
{

	public function index()
	{
		if ($this->session->userdata('level') == 'user') {
			$this->db->select('a.*, b.nm_pegawai');
			$this->db->from('tb_potongan_pu a');
			$this->db->join('tb_pegawai b', 'a.id_pegawai = b.id_pegawai');
			$this->db->where('a.id_pegawai', $this->session->userdata('id_pegawai'));
			$this->db->order_by('b.nm_pegawai', 'desc');
			$query  = $this->db->get();
			return $query->result();
		} else {
			$this->db->select('a.*, b.nm_pegawai');
			$this->db->from('tb_potongan_pu a');
			$this->db->join('tb_pegawai b', 'a.id_pegawai = b.id_pegawai');
			$this->db->order_by('b.nm_pegawai', 'desc');
			$query  = $this->db->get();
			return $query->result();
		}
	}

	public function pegawai()
	{
		$sql = ('select * from tb_pegawai');
		return $this->db->query($sql);
	}
	public function create($data, $table)
	{
		return $this->db->insert($table, $data);
	}


	public function edit($where)
	{
		$this->db->select('a.*, b.nm_pegawai');
		$this->db->from('tb_potongan_pu a');
		$this->db->join('tb_pegawai b', 'a.id_pegawai = b.id_pegawai');
		$this->db->where('a.id_potongan_pu', $where);
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
}
