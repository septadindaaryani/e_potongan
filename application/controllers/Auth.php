<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {

        parent::__construct();

        $this->load->model('m_login');
    }
    public function index()
    {
        $this->load->view('auth/login');
    }
    public function process()
    {
        $post = $this->input->post(null, TRUE);

        if (isset($post['login'])) {
            $query = $this->m_login->login($post);

            if ($query->num_rows() > 0) {
                $row = $query->row();
                if ($row->aktif == 'Y') {
                    $params = array(
                        'id_user'                       => $row->id_user,
                        'id_pegawai'                    => $row->id_pegawai,
                        'name'                          => $row->name,
                        'level'                         => $row->level,
                        'aktif'                         => $row->aktif,
                        'dashboard'                     => $row->dashboard,
                        'data_pegawai'                  => $row->data_pegawai,
                        'add_data_pegawai'              => $row->add_data_pegawai,
                        'edit_data_pegawai'             => $row->edit_data_pegawai,
                        'data_golongan'                 => $row->data_golongan,
                        'add_data_golongan'             => $row->add_data_golongan,
                        'edit_data_golongan'            => $row->edit_data_golongan,
                        'data_jabatan'                  => $row->data_jabatan,
                        'add_data_jabatan'              => $row->add_data_jabatan,
                        'edit_data_jabatan'             => $row->edit_data_jabatan,
                        'potongan'                      => $row->potongan,
                        'potongan_pu'                   => $row->potongan_pu,
                        'add_potongan_pu'               => $row->add_potongan_pu,
                        'edit_potongan_pu'              => $row->edit_potongan_pu,
                        'proses_gaji_pegawai'           => $row->proses_gaji_pegawai,
                        'add_proses_gaji_pegawai'       => $row->add_proses_gaji_pegawai,
                        'export_proses_gaji_pegawai'    => $row->export_proses_gaji_pegawai,
                        'user'                          => $row->user,
                        'add_user'                      => $row->add_user,
                        'edit_user'                     => $row->edit_user,
                        'reset_pass'                    => $row->reset_pass
                    );
                    $this->session->set_userdata($params);
                    redirect('dashboard');
                } else {
                    $this->session->set_flashdata('message', ' <div class="alert alert-danger" role="alert">   User yang di masukan belum aktif atau belum terdaftar  !!</div>');
                    redirect('auth');
                }
            } else {
                $this->session->set_flashdata('message', ' <div class="alert alert-danger" role="alert">   username atau password salah  !!</div>');
                redirect('auth');
            }
        }
    }



    public function logout()
    {
        $this->session->set_flashdata('message', ' <div class="alert alert-success" role="alert"> Account has been successfully logout !!</div>');
        $params = array('level');
        $this->session->unset_userdata($params);
        redirect('auth');
    }
}
