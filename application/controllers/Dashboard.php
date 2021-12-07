<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

	public function index()
	{
		if (empty($this->session->userdata('level'))) {
			$this->session->set_flashdata('a', ' ');
			redirect('auth');
		}

		
		if($this->session->userdata('dashboard') == 'Y'){
			$data['data_pegawai'] = $this->m_dashborad->data_pegawai();
			$data['data_user'] = $this->m_dashborad->data_user();
			$title['title'] = 'Dashboard';
			$this->load->view('template/v_header', $title);
			$this->load->view('template/v_sidebar');
			$this->load->view('admin/dashboard', $data);
			$this->load->view('template/v_footer');
		}elseif($this->session->userdata('data_pegawai') == 'Y'){
			$data['datapegawai'] = $this->m_datapegawai->tampil_data();
			$title['title'] = 'Data Pegawai ';
			$this->load->view('template/v_header', $title);
			$this->load->view('template/v_sidebar');
			$this->load->view('admin/input_datapegawai', $data);
			$this->load->view('template/v_footer');
		}else{
			$title['title'] = '';
			$this->load->view('template/v_header', $title);
			$this->load->view('template/v_sidebar');
			$this->load->view('template/v_footer');

		}
	}

	public function statistik()
	{
	}
}
