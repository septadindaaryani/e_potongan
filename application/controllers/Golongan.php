<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Golongan extends CI_Controller
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

		$data['datagolongan'] = $this->m_datagolongan->index();
		// var_dump($data);
		$title['title'] = 'Data Golongan ';
		$this->load->view('template/v_header', $title);
		$this->load->view('template/v_sidebar');
		$this->load->view('golongan/index', $data);
		$this->load->view('template/v_footer');
	}

	public function tambah()
	{

		$title['title'] = 'Data Golongan ';
		$this->load->view('template/v_header', $title);
		$this->load->view('template/v_sidebar');
		$this->load->view('golongan/tambah');
		$this->load->view('template/v_footer');
	}


	public function create()
	{
		$this->form_validation->set_rules('nm_golongan', 'nm golongan', 'required');
		if ($this->form_validation->run() == FALSE) {
			$title['title'] = 'Data Golongan ';
			$this->load->view('template/v_header', $title);
			$this->load->view('template/v_sidebar');
			$this->load->view('golongan/tambah');
			$this->load->view('template/v_footer');
		} else {

			$id_user				= $this->session->userdata('id_user');

			$nm_golongan			= $this->input->post('nm_golongan');

			$data = array(
				'nm_golongan'		=> $nm_golongan,
				'id_user'			=> $id_user


			);

			// var_dump($data);
			$this->m_datagolongan->create($data, 'tb_golongan');
			redirect('Golongan');
		}
	}




	public function edit($id_golongan)
	{
		$where = array('id_golongan' => $id_golongan);
		$data['datagolongan'] = $this->m_datagolongan->edit($where, 'tb_golongan')->result();
		$title['title'] = 'Data Golongan ';
		$this->load->view('template/v_header', $title);
		$this->load->view('template/v_sidebar');
		$this->load->view('golongan/edit', $data);
		$this->load->view('template/v_footer');
	}
	public function update()
	{
		$id_golongan					= $this->input->post('id_golongan');
		$nm_golongan					= $this->input->post('nm_golongan');

		$data = array(
			'nm_golongan'	 		=> $nm_golongan,
		);
		// var_dump($data);
		$where = array(
			'id_golongan' => $id_golongan

		);
		$this->m_datagolongan->update($where, $data, 'tb_golongan');
		$this->session->set_flashdata('message', 'alert');
		redirect('golongan');
	}


	public function delete($id_golongan)
	{
		$where = array('id_golongan' => $id_golongan);
		$this->m_datagolongan->delete($where, 'tb_golongan');
		$this->session->set_flashdata('message', 'Data Berhasil di hapus.');
		redirect('Golongan');
	}


	function validasi_golongan()
	{
		$this->form_validation->set_rules('nm_golongan', 'Nm Golongan', 'required');
		if ($this->form_validation->run() == FALSE) {
			//$ktp = $_POST['no_ktp'];
			//echo $ktp;
			echo form_error('nm_golongan');
		}

		// echo ($this->form_validation->run() == FALSE);
	}
}
