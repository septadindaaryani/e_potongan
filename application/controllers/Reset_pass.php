<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Reset_pass extends CI_Controller
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
		$title['title'] = 'Reset Password';
		$this->load->view('template/v_header', $title);
		$this->load->view('template/v_sidebar');
		$this->load->view('reset_pass/tambah');
		$this->load->view('template/v_footer');
	}

	function update()
	{
		$this->form_validation->set_rules('cpassword', 'Password Confirmation', 'required|macthes[password]');

		$password 	= $this->input->post('password');
		$cpassword 	= $this->input->post('cpassword');
		$id_user	= $this->session->userdata('id_user');


		if ($password <> $cpassword) {
			$data['status'] = 'tambah_borrower';
			$data['validasi_password'] = "*password tidak sama";
			$this->load->view('template/v_header');
			$this->load->view('template/v_sidebar');
			$this->load->view('reset_pass/tambah', $data);
			$this->load->view('template/v_footer');
		} else {
			$data = array(
				'password'		=> md5($password),
			);
			$where = array(
				'id_user' => $id_user
			);
			$this->m_user->update($where, $data, 'user');
			$this->session->set_flashdata('message', 'alert');

			redirect('datapegawai');
		}
	}
}
