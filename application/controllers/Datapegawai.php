<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datapegawai extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->helper('form');
		$this->load->library('form_validation');
		if (empty($this->session->userdata('level'))) {
			$this->session->set_flashdata('a', ' ');
			redirect('auth');
		}
	}

	public function index()
	{

		$data['datapegawai'] = $this->m_datapegawai->tampil_data();

		$title['title'] = 'Data Pegawai ';
		$this->load->view('template/v_header', $title);
		$this->load->view('template/v_sidebar');
		$this->load->view('admin/input_datapegawai', $data);
		$this->load->view('template/v_footer');

		// var_dump($this->m_datapegawai->tampil_data());
	}

	public function add_datapegawai()
	{

		$data['datapegawai'] = $this->m_datapegawai->tampil_data();
		$data['data_golongan'] = $this->m_datapegawai->golongan();
		$data['data_jabatan'] = $this->m_datapegawai->jabatan();
		// $data['data_eselon'] = $this->m_datapegawai->eselon();
		$title['title'] = 'Data Pegawai ';
		$this->load->view('template/v_header', $title);
		$this->load->view('template/v_sidebar');
		$this->load->view('admin/add_datapegawai', $data);
		$this->load->view('template/v_footer');
	}


	public function tambah_aksi()
	{
		$this->form_validation->set_rules('nip', 'NIP', 'required|is_unique[tb_pegawai.nip]|max_length[18]');
		$this->form_validation->set_message('is_unique', '*nomor nip yang anda gunakan sudah terdaftar');

		$this->form_validation->set_rules('no_rekening', 'No Rekening', 'required|is_unique[tb_pegawai.no_rekening]|max_length[15]|min_length[15]');
		$this->form_validation->set_message('is_unique', '*Nomor Rekening wajib 15');

		$this->form_validation->set_rules('no_hp', 'Nomor HP', 'required|is_unique[tb_pegawai.no_hp]|max_length[12]');
		$this->form_validation->set_message('is_unique', 'Nomor hp yang anda gunakan sudah terdaftar');
		// $this->form_validation->set_rules('jl', 'Jenis Kelamin', 'required');
		// $this->form_validation->set_rules('thn_masuk', 'Tahun Masuk', 'required');
		// $this->form_validation->set_rules('golongan', 'Jenis Golongan', 'required');
		// $this->form_validation->set_rules('jabatan', 'Jabatan', 'required');
		// $this->form_validation->set_rules('rek', 'No Rekening', 'required');
		// $this->form_validation->set_rules('jiwa', 'Jumlah Jiwa', 'required');
		if ($this->form_validation->run() == FALSE) {
			$data['datapegawai'] = $this->m_datapegawai->tampil_data();
			$data['data_golongan'] = $this->m_datapegawai->golongan();
			$data['data_jabatan'] = $this->m_datapegawai->jabatan();
			// $data['data_eselon'] = $this->m_datapegawai->eselon();
			$title['title'] = 'Data Pegawai ';
			$this->load->view('template/v_header', $title);
			$this->load->view('template/v_sidebar');
			$this->load->view('admin/add_datapegawai', $data);
			$this->load->view('template/v_footer');
		} else {
			$nip					= $this->input->post('nip');
			$nm_pegawai				= $this->input->post('nm_pegawai');
			$jenis_kelamin			= $this->input->post('jenis_kelamin');
			$id_golongan			= $this->input->post('jenis_golongan');
			$id_jabatan				= $this->input->post('id_jabatan');
			$thn_masuk				= $this->input->post('thn_masuk');
			$masa_kerja				= $this->input->post('masa_kerja');
			$nominal_gaji			= $this->input->post('nominal_gaji');
			$no_hp					= $this->input->post('no_hp');
			$status					= $this->input->post('status');
			$jumlah_jiwa			= $this->input->post('jumlah_jiwa');
			$jumlah_anak			= $this->input->post('jumlah_anak');
			$no_rekening			= $this->input->post('no_rekening');




			$data = array(
				'nip'		 		=> $nip,
				'nm_pegawai'		=> $nm_pegawai,
				'jenis_kelamin'		=> $jenis_kelamin,
				'id_golongan'		=> $id_golongan,
				'id_jabatan'		=> $id_jabatan,
				'thn_masuk'			=> $thn_masuk,
				'masa_kerja'		=> $masa_kerja,
				'nominal_gaji'		=> $nominal_gaji,
				'no_hp'				=> $no_hp,
				'status'			=> $status,
				'jumlah_jiwa'		=> $jumlah_jiwa,
				'jumlah_anak'		=> $jumlah_anak,
				'no_rekening'		=> $no_rekening,


			);

			// var_dump($data);
			$this->m_datapegawai->input_data($data, 'tb_pegawai');
			$this->session->set_flashdata('add_pegawai', 'alert');
			redirect('Datapegawai');
		}
	}


	public function hapus($id_pegawai)
	{
		$where = array('id_pegawai' => $id_pegawai);
		$this->m_datapegawai->hapus_data($where, 'tb_pegawai');
		$this->session->set_flashdata('message', 'Data Berhasil di hapus.');
		redirect('Datapegawai');
	}

	public function edit($id_pegawai)
	{
		$where = array('id_pegawai' => $id_pegawai);
		$data['datapegawai'] 	= $this->m_datapegawai->edit_data($where, 'tb_pegawai')->result();
		$data['data_golongan'] 	= $this->m_datapegawai->golongan();
		$data['data_jabatan'] 	= $this->m_datapegawai->jabatan();
		$title['title'] 		= 'Data Pegawai ';
		$this->load->view('template/v_header', $title);
		$this->load->view('template/v_sidebar');
		$this->load->view('admin/edit_datapegawai', $data);
		$this->load->view('template/v_footer');
	}
	public function update()
	{
		$id_pegawai				= $this->input->post('id_pegawai');
		$nip					= $this->input->post('nip');
		$nm_pegawai				= $this->input->post('nm_pegawai');
		$jenis_kelamin			= $this->input->post('jenis_kelamin');
		$id_golongan			= $this->input->post('jenis_golongan');
		$id_jabatan				= $this->input->post('id_jabatan');
		$thn_masuk				= $this->input->post('thn_masuk');
		$masa_kerja				= $this->input->post('masa_kerja');
		$nominal_gaji			= $this->input->post('nominal_gaji');
		$no_hp					= $this->input->post('no_hp');
		$status					= $this->input->post('status');
		$jumlah_jiwa			= $this->input->post('jumlah_jiwa');
		$jumlah_anak			= $this->input->post('jumlah_anak');
		$no_rekening			= $this->input->post('no_rekening');
		$data = array(
			'nip'		 		=> $nip,
			'nm_pegawai'		=> $nm_pegawai,
			'jenis_kelamin'		=> $jenis_kelamin,
			'id_golongan'		=> $id_golongan,
			'id_jabatan'		=> $id_jabatan,
			'thn_masuk'			=> $thn_masuk,
			'masa_kerja'		=> $masa_kerja,
			'nominal_gaji'		=> $nominal_gaji,
			'no_hp'				=> $no_hp,
			'status'			=> $status,
			'jumlah_jiwa'		=> $jumlah_jiwa,
			'jumlah_anak'		=> $jumlah_anak,
			'no_rekening'		=> $no_rekening,



		);
		// var_dump($data);
		$where = array(
			'id_pegawai' => $id_pegawai

		);
		$this->m_datapegawai->update_data($where, $data, 'tb_pegawai');
		$this->session->set_flashdata('message', 'alert');
		redirect('Datapegawai');
	}


	function validasi_nip()
	{
		$this->form_validation->set_rules('nip', 'NIP', 'required|is_unique[tb_pegawai.nip]');
		$this->form_validation->set_message('is_unique', '*nomor nip yang anda gunakan sudah terdaftar');
		if ($this->form_validation->run() == FALSE) {
			//$ktp = $_POST['no_ktp'];
			//echo $ktp;
			echo form_error('nip');
		}
	}

	function validasi_data()
	{
		$post = $this->input->post('field');
		$this->form_validation->set_rules('field', 'Kolom', 'required');
		// // $this->form_validation->set_rules('jenis_kelamin', 'Jenis Kelamin', 'required');
		// // $this->form_validation->set_rules('thn_masuk', 'Tahun Masuk', 'required');
		// // $this->form_validation->set_rules('jenis_golongan', 'Jenis Golongan', 'required');
		// // $this->form_validation->set_rules('id_jabatan', 'Jabatan', 'required');
		// // $this->form_validation->set_rules('no_hp', 'No HP', 'required');
		// // $this->form_validation->set_rules('no_rekening', 'No Rekening', 'required');
		// // $this->form_validation->set_rules('jumlah_jiwa', 'Jumlah Jiwa', 'required');
		// // $this->form_validation->set_rules('jumlah_anak', 'Jumlah Anak', 'required');
		// // $this->form_validation->set_rules('status', 'status', 'required');
		// // $this->form_validation->set_rules('masa_kerja', 'Masa Kerja', 'required');
		// // $this->form_validation->set_rules('nominal_gaji', 'Nominal', 'required');
		$this->form_validation->set_message('required', '%s tidak boleh kosong.');
		if ($this->form_validation->run() == FALSE) {
			//$ktp = $_POST['no_ktp'];
			//echo $ktp;
			echo form_error("field");
		}
	}
}
