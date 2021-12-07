<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jabatan extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		if (empty($this->session->userdata('level'))) {
			$this->session->set_flashdata('a', ' ');
			redirect('auth');
		}
	}

	public function index()
	{

		$data['datajabatan'] = $this->m_datajabatan->index();
		// var_dump($data);
		$title['title'] = 'Data Jabatan ';
		$this->load->view('template/v_header', $title);
		$this->load->view('template/v_sidebar');
		$this->load->view('Jabatan/index', $data);
		$this->load->view('template/v_footer');
	}

	public function tambah()
	{
		$data['data_golongan'] = $this->m_tunjangan_jabatan->golongan();

		$title['title'] = 'Data Jabatan ';
		$this->load->view('template/v_header', $title);
		$this->load->view('template/v_sidebar');
		$this->load->view('jabatan/tambah', $data);
		$this->load->view('template/v_footer');
	}


	public function create()
	{
		$id_user				= $this->session->userdata('id_user');

		$nm_jabatan				= $this->input->post('nm_jabatan');

		$data = array(
			'nm_jabatan'		=> $nm_jabatan,
			'id_user'			=> $id_user
		);

		// var_dump($data);
		$this->m_datajabatan->create($data, 'tb_jabatan');
		redirect('Jabatan');
	}




	public function edit($id_jabatan)
	{
		$where = $id_jabatan;
		$data['datajabatan'] = $this->m_datajabatan->edit($where);
		$title['title'] = 'Data Jabatan ';
		$this->load->view('template/v_header', $title);
		$this->load->view('template/v_sidebar');
		$this->load->view('jabatan/edit', $data);
		$this->load->view('template/v_footer');
	}
	public function update()
	{
		$id_jabatan				= $this->input->post('id_jabatan');
		$nm_jabatan				= $this->input->post('nm_jabatan');

		$data = array(
			'nm_jabatan'		=> $nm_jabatan,
		);
		// var_dump($data);
		$where = array(
			'id_jabatan' => $id_jabatan

		);
		$this->m_datajabatan->update($where, $data, 'tb_jabatan');
		$this->session->set_flashdata('message', 'alert');
		redirect('Jabatan');
	}


	public function delete($id_jabatan)
	{
		$where = array('id_jabatan' => $id_jabatan);
		$this->m_datajabatan->delete($where, 'tb_jabatan');
		$this->session->set_flashdata('message', 'Data Berhasil di hapus.');
		redirect('Jabatan');
	}
}
