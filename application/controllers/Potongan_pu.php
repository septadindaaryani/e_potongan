<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Potongan_pu extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('m_potongan_pu');
		if (empty($this->session->userdata('level'))) {
			$this->session->set_flashdata('a', ' ');
			redirect('auth');
		}
	}

	public function index()
	{
		$data['potongan_pu'] = $this->m_potongan_pu->index();
		$title['title'] = ' Potongan PU';
		$this->load->view('template/v_header', $title);
		$this->load->view('template/v_sidebar');
		$this->load->view('potongan_pu/index', $data);
		$this->load->view('template/v_footer');
	}

	public function tambah()
	{
		$data['data_pegawai'] = $this->m_potongan_pu->pegawai();
		$title['title'] = 'Potongan PU';
		$this->load->view('template/v_header', $title);
		$this->load->view('template/v_sidebar');
		$this->load->view('potongan_pu/tambah', $data);
		$this->load->view('template/v_footer');
	}


	public function create()
	{

		$id_user				= $this->session->userdata('id_user');

		$id_pegawai				= $this->input->post('id_pegawai');
		$date					= $this->input->post('date');
		$korpri					= $this->input->post('korpri');
		$koprasi				= $this->input->post('koprasi');
		$ap_koprasi				= $this->input->post('ap_koprasi');
		$bank_sumsel			= $this->input->post('bank_sumsel');
		$bank_sumsel_syariah	= $this->input->post('bank_sumsel_syariah');
		$bank_bri_cab			= $this->input->post('bank_bri_cab');
		$bank_bri_kota			= $this->input->post('bank_bri_kota');
		$dw						= $this->input->post('dw');
		$kop_karya_mulya		= $this->input->post('kop_karya_mulya');
		$bpr					= $this->input->post('bpr');
		$bazda					= $this->input->post('bazda');
		$k_iuran_bpjs			= $this->input->post('k_iuran_bpjs');


		$data = array(
			'id_pegawai'			=> $id_pegawai,
			'date'					=> $date,
			'korpri'				=> $korpri,
			'koprasi'				=> $koprasi,
			'ap_koprasi'			=> $ap_koprasi,
			'bank_sumsel'			=> $bank_sumsel,
			'bank_sumsel_syariah'	=> $bank_sumsel_syariah,
			'bank_bri_cab'			=> $bank_bri_cab,
			'bank_bri_kota'			=> $bank_bri_kota,
			'dw'					=> $dw,
			'kop_karya_mulya'		=> $kop_karya_mulya,
			'bpr'					=> $bpr,
			'bazda'					=> $bazda,
			'k_iuran_bpjs'			=> $k_iuran_bpjs,
			'id_user'				=> $id_user


		);
		$this->m_potongan_pu->create($data, 'tb_potongan_pu');
		$this->session->set_flashdata('message', 'alert');
		redirect('potongan_pu');
	}



	public function edit($id_potongan_pu)
	{
		$where = $id_potongan_pu;
		$data['potongan_pu'] = $this->m_potongan_pu->edit($where);
		$title['title'] = 'Potongan PU';
		$this->load->view('template/v_header', $title);
		$this->load->view('template/v_sidebar');
		$this->load->view('potongan_pu/edit', $data);
		$this->load->view('template/v_footer');
	}

	public function update()
	{
		$id_potongan_pu			= $this->input->post('id_potongan_pu');
		$date					= $this->input->post('date');
		$korpri					= $this->input->post('korpri');
		$koprasi				= $this->input->post('koprasi');
		$ap_koprasi				= $this->input->post('ap_koprasi');
		$bank_sumsel			= $this->input->post('bank_sumsel');
		$bank_sumsel_syariah	= $this->input->post('bank_sumsel_syariah');
		$bank_bri_cab			= $this->input->post('bank_bri_cab');
		$bank_bri_kota			= $this->input->post('bank_bri_kota');
		$dw						= $this->input->post('dw');
		$kop_karya_mulya		= $this->input->post('kop_karya_mulya');
		$bpr					= $this->input->post('bpr');
		$bazda					= $this->input->post('bazda');
		$k_iuran_bpjs			= $this->input->post('k_iuran_bpjs');



		$data = array(
			'date'					=> $date,
			'korpri'				=> $korpri,
			'koprasi'				=> $koprasi,
			'ap_koprasi'			=> $ap_koprasi,
			'bank_sumsel'			=> $bank_sumsel,
			'bank_sumsel_syariah'	=> $bank_sumsel_syariah,
			'bank_bri_cab'			=> $bank_bri_cab,
			'bank_bri_kota'			=> $bank_bri_kota,
			'dw'					=> $dw,
			'kop_karya_mulya'		=> $kop_karya_mulya,
			'bpr'					=> $bpr,
			'bazda'					=> $bazda,
			'k_iuran_bpjs'			=> $k_iuran_bpjs,



		);
		$where = array(
			'id_potongan_pu' => $id_potongan_pu

		);
		$this->m_potongan_pu->update($where, $data, 'tb_potongan_pu');
		$this->session->set_flashdata('message', 'alert');
		redirect('potongan_pu');
	}

	public function delete($id_potongan_pu)
	{
		$where = array('id_potongan_pu' => $id_potongan_pu);
		$this->m_potongan_pu->delete($where, 'tb_potongan_pu');
		$this->session->set_flashdata('message', 'alert');
		redirect('potongan_pu');
	}
}
