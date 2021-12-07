<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('m_user');
		if (empty($this->session->userdata('level'))) {
			$this->session->set_flashdata('a', ' ');
			redirect('auth');
		}
	}

	public function index()
	{
		$data['role'] = $this->m_user->role_akses();
		$data['user'] = $this->m_user->index();
		$title['title'] = 'Data User';
		$this->load->view('template/v_header', $title);
		$this->load->view('template/v_sidebar');
		$this->load->view('user/index', $data);
		$this->load->view('template/v_footer');
	}

	public function tambah()
	{
		$data['data_pegawai'] = $this->m_user->pegawai();
		$data['data_role'] = $this->m_user->role();
		$title['title'] = ' Data User';
		$this->load->view('template/v_header', $title);
		$this->load->view('template/v_sidebar');
		$this->load->view('user/tambah', $data);
		$this->load->view('template/v_footer');
	}


	public function create()
	{

		$id_pegawai				= $this->input->post('id_pegawai');
		$id_role				= $this->input->post('id_role');
		$name					= $this->input->post('name');
		$username				= $this->input->post('username');
		$aktif					= $this->input->post('aktif');
		$pass					= md5('pass123');
		if ($id_role == 2) {
			$level = 'admin';
		} else {
			$level = 'user';
		}


		$data = array(
			'id_pegawai'		=> $id_pegawai,
			'id_role'			=> $id_role,
			'name'				=> $name,
			'username'			=> $username,
			'aktif'				=> $aktif,
			'level'				=> $level,
			'password'			=> $pass

		);
		$this->m_user->create($data, 'user');
		// $this->session->set_flashdata('message', 'alert');
		redirect('user');
	}



	public function edit($id_user)
	{
		$where = $id_user;
		$data['user'] = $this->m_user->edit($where);
		$data['data_role'] = $this->m_user->role();
		$title['title'] = 'Data User';
		$this->load->view('template/v_header', $title);
		$this->load->view('template/v_sidebar');
		$this->load->view('user/edit', $data);
		$this->load->view('template/v_footer');
	}
	public function update()
	{
		$id_user		= $this->input->post('id_user');
		$id_role		= $this->input->post('id_role');
		$name			= $this->input->post('name');
		$username		= $this->input->post('username');
		$aktif			= $this->input->post('aktif');
			if ($id_role == 2) {
				$level = 'admin';
			} else {
				$level = 'user';
			}

		$data = array(
			'id_role'	=> $id_role,
			'name'		=> $name,
			'username'	=> $username,
			'level'		=> $level,
			'aktif'		=> $aktif,



		);
		$where = array(
			'id_user' => $id_user

		);
		$this->m_user->update($where, $data, 'user');
		// $this->session->set_flashdata('message', 'alert');
		redirect('user');
	}

	public function delete($id_user)
	{
		$where = array('id_user' => $id_user);
		$this->m_user->delete($where, 'user');
		// $this->session->set_flashdata('message', 'alert');
		redirect('user');
	}

	public function role()
	{
		$where = $this->input->post('id_role');
		$data['role'] = $this->m_user->role_akses_where($where);
		$title['title'] = 'Data User';
		$this->load->view('template/v_header', $title);
		$this->load->view('template/v_sidebar');
		$this->load->view('user/role', $data);
		$this->load->view('template/v_footer');
	}

	public function role_proses()
	{
		$id_role		= $this->input->post('id_role');

		$data = array(
			'dashboard'                     => $this->input->post('dashboard'),
			'data_pegawai'                  => $this->input->post('data_pegawai'),
			'add_data_pegawai'              => $this->input->post('add_data_pegawai'),
			'edit_data_pegawai'             => $this->input->post('edit_data_pegawai'),
			'data_golongan'                 => $this->input->post('data_golongan'),
			'add_data_golongan'             => $this->input->post('add_data_golongan'),
			'edit_data_golongan'            => $this->input->post('edit_data_golongan'),
			'data_jabatan'                  => $this->input->post('data_jabatan'),
			'add_data_jabatan'              => $this->input->post('add_data_jabatan'),
			'edit_data_jabatan'             => $this->input->post('edit_data_jabatan'),
			'potongan'                      => $this->input->post('potongan'),
			'potongan_pu'                   => $this->input->post('potongan_pu'),
			'add_potongan_pu'               => $this->input->post('add_potongan_pu'),
			'edit_potongan_pu'              => $this->input->post('edit_potongan_pu'),
			'proses_gaji_pegawai'           => $this->input->post('proses_gaji_pegawai'),
			'add_proses_gaji_pegawai'       => $this->input->post('add_proses_gaji_pegawai'),
			'export_proses_gaji_pegawai'    => $this->input->post('export_proses_gaji_pegawai'),
			'user'                          => $this->input->post('user'),
			'add_user'                      => $this->input->post('add_user'),
			'edit_user'                     => $this->input->post('edit_user'),



		);
		$where = array(
			'id_role' => $id_role

		);
		$this->m_user->update($where, $data, 'tb_role');
		// $this->session->set_flashdata('message', 'alert');
		redirect('user');
	}
}
