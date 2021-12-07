<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Proses_gaji extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');
		$this->load->model('m_proses_gaji');
		if (empty($this->session->userdata('level'))) {
			$this->session->set_flashdata('a', ' ');
			redirect('auth');
		}
	}

	public function index()
	{
		$data['proses_gaji'] = $this->m_proses_gaji->index();
		$data['id_pegawai'] = $this->m_proses_gaji->pegawai();
		$title['title'] = 'Data Gaji Pegawai ';
		$this->load->view('template/v_header', $title);
		$this->load->view('template/v_sidebar');
		$this->load->view('proses_gaji/index', $data);
		$this->load->view('template/v_footer');
	}

	public function tambah()
	{
		$title['title'] = 'Data Gaji Pegawai';
		$this->load->view('template/v_header', $title);
		$this->load->view('template/v_sidebar');
		$this->load->view('proses_gaji/tambah');
		$this->load->view('template/v_footer');
	}


	public function create()
	{
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');
		$proses = $this->input->post('proses');

		$cek_bul = $this->db->query("select * from tb_gaji_pegawai where bulan ='$bulan' and tahun='$tahun' ");
		if ($cek_bul->num_rows() != null) {
			if ($proses == 'Y') {
				$this->session->set_flashdata('mes', 'Bulan yang di masukan sudah pernah di proses.');
				redirect('proses_gaji');
			} else {
				$where = array(
					'bulan' => $bulan,
					'tahun' => $tahun
				);
				$this->m_potongan_pu->delete($where, 'tb_gaji_pegawai');
				redirect('proses_gaji');
			}
		} else {
			if ($proses == 'Y') {
				$pegawai = $this->db->query("select a.*, b.nm_golongan, c.nm_jabatan  from  tb_pegawai a left join tb_golongan b on b.id_golongan  = a.id_golongan left join tb_jabatan c on a.id_jabatan = c.id_jabatan where a.id_pegawai != '1' ");
				foreach ($pegawai->result() as $row) {

					// 	Potongan pu
					$potongan_pu = $this->db->query("select * from tb_potongan_pu where id_pegawai = '" . $row->id_pegawai . "' and MONTH(date) =  '" . $bulan . "'  and YEAR(date) =  '" . $tahun . "' ");
					if ($potongan_pu->num_rows() != null) {
						foreach ($potongan_pu->result() as $row_2) {
							$total_pot_pu = ($row_2->korpri + $row_2->koprasi + $row_2->ap_koprasi + $row_2->bank_sumsel + $row_2->bank_sumsel_syariah + $row_2->bank_bri_cab + $row_2->bank_bri_kota + $row_2->dw + $row_2->kop_karya_mulya + $row_2->bpr + $row_2->bazda + $row_2->k_iuran_bpjs);
						}
					} else {
						$total_pot_pu = 0;
					}

					$total_potongan_pu		= $total_pot_pu;
					$total_gajih	 		= ($row->nominal_gaji - $total_potongan_pu);

					$data = array(
						'id_pegawai'			=> $row->id_pegawai,
						'date'					=> date('Y-m-d'),
						'bulan'					=> $bulan,
						'tahun'					=> $tahun,
						'gaji_pokok'			=> $row->nominal_gaji,
						'total_potongan_pu'		=> $total_potongan_pu,
						'gaji_bersih'			=> $total_gajih,
						'id_user'				=> $this->session->userdata('id_user')


					);
					$this->m_proses_gaji->proses_gaji($data, 'tb_gaji_pegawai');

					$gaji_bulan = $tahun . '-' . $bulan;
					$link  =  "https://tx.wablas.com/api/send-message";
					$data = [
						'phone' => $row->no_hp,
						'message' => "Informasi Gaji Anda
						Nama : ".$row->nm_pegawai."
						No Rekening	: ".$row->no_rekening."
						Tahun/Bulan	: ".$gaji_bulan."
						Gaji Kotor  : Rp. ". number_format($row->nominal_gaji)."
						Total Potongan PU: Rp. ".number_format($total_potongan_pu)."
						Gaji Bersih	: Rp. ".number_format($total_gajih),
					];



					$curl = curl_init();
					$token =  "ypNHFY5P5Z4skYGgstuOG05VnJufejqEDDCSfnhfygXBvYwdnCg1ProQ1tZeLLZR";

					curl_setopt(
						$curl,
						CURLOPT_HTTPHEADER,
						array(
							"Authorization: $token",
						)
					);
					curl_setopt($curl, CURLOPT_URL, $link);
					curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
					curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
					curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
					curl_setopt($curl, CURLOPT_SSL_VERIFYHOST, 0);
					curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, 0);
					$result = curl_exec($curl);
					curl_close($curl);
				}

				redirect('proses_gaji');
			} else {
				$where = array(
					'bulan' => $bulan,
					'tahun' => $tahun
				);
				$this->m_potongan_pu->delete($where, 'tb_gaji_pegawai');
				redirect('proses_gaji');
			}
		}
	}

	public function export()
	{
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');
		// panggil library yang kita buat sebelumnya yang bernama pdfgenerator
		$this->load->library('pdfgenerator');

		// title dari pdf
		$data['title_pdf'] = 'Laporan Gajih Pegawai';
		$data['gaji_pegawai'] = $this->m_proses_gaji->gaji_pegawai($bulan, $tahun);
		$date = date('d-m-Y');
		// // filename dari pdf ketika didownload
		$file_pdf = "$date._gaji";
		// // setting paper
		$paper = 'A4';
		// //orientasi paper potrait / landscape
		$orientation = "portrait";
		// var_dump($data);

		// $this->load->view('proses_gaji/export', $data);
		$html = $this->load->view('proses_gaji/export', $data, true);

		// run dompdf
		$this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
	}


	public function export_laporan()
	{
		$bulan = $this->input->post('bulan');
		$tahun = $this->input->post('tahun');
		$id_pegawai = $this->input->post('id_pegawai');
		// panggil library yang kita buat sebelumnya yang bernama pdfgenerator
		$this->load->library('pdfgenerator');

		// title dari pdf
		$data['title_pdf'] = 'Laporan Gajih Pegawai';
		$data['proses_gaji'] = $this->m_proses_gaji->laporan_gaji_pegawai($bulan, $tahun, $id_pegawai);
		$date = date('d-m-Y');

		// filename dari pdf ketika didownload
		$file_pdf = "$date._gaji";
		// setting paper
		$paper = 'A4';
		//orientasi paper potrait / landscape
		$orientation = "portrait";

		$html = $this->load->view('proses_gaji/export_laporan', $data, true);

		// run dompdf
		$this->pdfgenerator->generate($html, $file_pdf, $paper, $orientation);
	}
}
