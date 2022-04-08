<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends MY_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('Login_model', 'lm', true);
    }

    public function check_login()
    {
        if ($this->auth->logged_in()) {
            $this->auth->is_logged_in();
        } else {
            $data_login = array(
                'username' => $this->input->post('username'),
                'password' => $this->input->post('password')
            );

            if (is_numeric($data_login['username']) == true) {
                $get_user = $this->lm->check_login_simpeg($data_login);
                if ($get_user) {
                    $is_have_satker = $this->lm->check_satker($get_user->id);
                    if ($is_have_satker == 0) {
                       $jabatan = $this->lm->get_jabatans();
                        $session_data = array(
                            'id' => $get_user->id,
                            'username' => $get_user->nip,
                            'nama_lengkap' => $get_user->nama_lengkap,
                            'parent_kode' => $get_user->parent_kode,
                            'roles_id' => 3,
                            'satker_id' => $get_user->id_satker,
                            'satker_nama' => $get_user->satuan_kerja,
                            'gelar_depan' => $get_user->gelar_depan,
                            'gelar_belakang' => $get_user->gelar_belakang,
                            'opds' => '',
                            'satker' => $is_have_satker,
                            'jabatan' => $jabatan,
                            'is_superadmin' => 0
                        );
                    } else {
                        $session_data = array(
                            'id' => $get_user->id,
                            'username' => $get_user->nip,
                            'nama_lengkap' => $get_user->nama_lengkap,
                            'roles_id' => 3,
                            'satker_id' => $get_user->id_satker,
                            'satker_nama' => $get_user->satuan_kerja,
                            'gelar_depan' => $get_user->gelar_depan,
                            'gelar_belakang' => $get_user->gelar_belakang,
                            'opds' => '',
                            'satker' => $is_have_satker,
                            'is_superadmin' => 0
                        );
                    }

                    $this->session->set_userdata($session_data);


                    // var_dump($_SESSION['satker']);
                    // die;

                    redirect('dashboard');
                } else {
                    danger('Gagal Login');
                    redirect('/');
                }
            } else {
                $get_user = $this->lm->check_login($data_login);
                if ($get_user) {
                    if ($get_user->is_active == 1) {
                        $session_data = array(
                            'id' => $get_user->id,
                            'username' => $get_user->username,
                            'nama_lengkap' => $get_user->nama_lengkap,
                            'roles_id' => $get_user->roles_id,
                            'satker_id' => 0,
                            'satker_nama' => '',
                            'gelar_depan' => '',
                            'gelar_belakang' => '',
                            'opds' => $get_user->opd,
                            'is_superadmin' => $get_user->is_superadmin
                        );
                        $this->session->set_userdata($session_data);
                        redirect('dashboard');
                    } else {
                        danger('Akun Tidak Aktif. Hubungi Administrator!');
                        redirect('/');
                    }
                } else {
                    danger('Gagal Login');
                    redirect('/');
                }
            }
        }
    }

    public function satker($parent_kode)
    {
        $atasan = $this->lm->get_atasan($parent_kode);
        echo json_encode($atasan);
    }

    public function add_data()
    {
        $id_pegawai = $this->input->post('id_pegawai');
        $jabatan = $this->input->post('jabatan');
        $atasan = $this->input->post('atasan');
        $data = array(
            'id_pegawai' => $id_pegawai,
            'jabatan' => $jabatan,
            'atasan' => $atasan
        );

        $insert = $this->lm->insert('satker', $data);
        if ($insert != 0) {
            $this->session->set_flashdata('status', ['status' => 'success', 'msg' => 'Berhasil Tambah Data']);
        } else {
            $this->session->set_flashdata('status', ['status' => 'error', 'msg' => 'Gagal Tambah Data']);
        }

        redirect('dashboard');
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('/');
    }
}
