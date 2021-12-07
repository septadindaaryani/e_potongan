<?php

class M_proses_gaji extends CI_Model
{
	public function index()
	{
		if ($this->session->userdata('level') == 'user') {
			$this->db->select('a.*, b.nm_pegawai');
			$this->db->from('tb_gaji_pegawai a');
			$this->db->join('tb_pegawai b', 'a.id_pegawai = b.id_pegawai');
			$this->db->where('a.id_pegawai=', $this->session->userdata('id_pegawai'));
			$this->db->order_by('a.bulan', 'a.tahun', 'desc');
			$query  = $this->db->get();
			return $query->result();
		} else {
			$this->db->select('a.*, b.nm_pegawai');
			$this->db->from('tb_gaji_pegawai a');
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
	public function potongan_pu()
	{
		$sql = ('select * from tb_potongan_pu');
		return $this->db->query($sql);
	}
	public function gaji_pegawai($bulan, $tahun)
	{
		$id_pegawai = $this->session->userdata('id_pegawai');
		if ($this->session->userdata('level') == 'user') {
			$sql = ("select a.*, a.bulan, a.tahun, b.* from tb_gaji_pegawai a join tb_pegawai b on a.id_pegawai=b.id_pegawai where a.bulan = '$bulan' and a.tahun = '$tahun' and a.id_pegawai = '$id_pegawai' ");
			return $this->db->query($sql);
		} else {
			if ($bulan == 0) {
				$sql = ("select a.*, a.bulan, a.tahun, b.* from tb_gaji_pegawai a join tb_pegawai b on a.id_pegawai=b.id_pegawai where a.tahun = '$tahun' ");
			} else {
				$sql = ("select a.*, a.bulan, a.tahun, b.* from tb_gaji_pegawai a join tb_pegawai b on a.id_pegawai=b.id_pegawai where a.bulan = '$bulan' and a.tahun = '$tahun' ");
			}
			return $this->db->query($sql);
		}
	}

	public function laporan_gaji_pegawai($bulan, $tahun, $id_pegawai)
	{
		$id_pegawai = $this->input->post('id_pegawai');
		if($bulan == 0){
 		if($id_pegawai == 0){
            $this->db->select('a.*, b.nm_pegawai');
			$this->db->from('tb_gaji_pegawai a');
			$this->db->join('tb_pegawai b', 'a.id_pegawai = b.id_pegawai');
			$this->db->where('a.tahun=', $tahun);
			$this->db->order_by('a.bulan', 'a.tahun', 'desc');
			$query  = $this->db->get();
			return $query->result();
		}else{
            $this->db->select('a.*, b.nm_pegawai');
			$this->db->from('tb_gaji_pegawai a');
			$this->db->join('tb_pegawai b', 'a.id_pegawai = b.id_pegawai');
			$this->db->where('a.tahun=', $tahun);
			$this->db->where('a.id_pegawai=', $id_pegawai);
			$this->db->order_by('a.bulan', 'a.tahun', 'desc');
			$query  = $this->db->get();
			return $query->result();
		}
		}else{
		if($id_pegawai == 0){
            $this->db->select('a.*, b.nm_pegawai');
			$this->db->from('tb_gaji_pegawai a');
			$this->db->join('tb_pegawai b', 'a.id_pegawai = b.id_pegawai');
			$this->db->where('a.bulan=', $bulan);
			$this->db->where('a.tahun=', $tahun);
			$this->db->order_by('a.bulan', 'a.tahun', 'desc');
			$query  = $this->db->get();
			return $query->result();
		}else{
            $this->db->select('a.*, b.nm_pegawai');
			$this->db->from('tb_gaji_pegawai a');
			$this->db->join('tb_pegawai b', 'a.id_pegawai = b.id_pegawai');
			$this->db->where('a.bulan=', $bulan);
			$this->db->where('a.tahun=', $tahun);
			$this->db->where('a.id_pegawai=', $id_pegawai);
			$this->db->order_by('a.bulan', 'a.tahun', 'desc');
			$query  = $this->db->get();
			return $query->result();
		}
		}
	}
	public function create($data, $table)
	{
		return $this->db->insert($table, $data);
	}
	public function proses_gaji($data, $table)
	{
		return $this->db->insert($table, $data);
	}

	public function edit($where)
	{
		$this->db->select('a.*, b.nm_pegawai');
		$this->db->from('tb_tunjangan_jabatan a');
		$this->db->join('tb_pegawai b', 'a.id_pegawai = b.id_pegawai');
		$this->db->where('a.id_tunj_jabatan', $where);
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
