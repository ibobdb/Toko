<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Toko extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_toko');
    }

    public function index()
    {
        $data['count_tmp'] = $this->m_toko->Mcount();

        $data['user'] = $this->db->get_where('tb_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['list'] = $this->m_toko->Mlist_produk();

        $this->load->view('toko/root/header', $data);
        $this->load->view('toko/content/landPage', $data);
        $this->load->view('toko/root/footer', $data);
    }
    public function daftar()
    {
        $data['user'] = $this->db->get_where('tb_admin', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('toko/root/header', $data);
        $this->load->view('toko/content/daftar', $data);
        $this->load->view('toko/root/footer', $data);

        // Query


    }
    public function Qdaftar()
    {
        $data['daftar'] = $this->m_toko->Mdaftar();
        $this->session->set_flashdata('message', ' <div class="alert alert-success" role="alert">Anda berhasil terdaftar,Silahkan login untuk melanjutkan belanja
        </div>');
        redirect('toko/login');
    }
    public function login()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == FALSE) {
            $data['user'] = $this->db->get_where('tb_admin', ['username' => $this->session->userdata('username')])->row_array();
            $this->load->view('toko/root/header', $data);
            $this->load->view('toko/content/login', $data);
            $this->load->view('toko/root/footer');
        } else {
            $this->_login();
        }
    }
    private function _login()
    {
        $db_user = $this->db->get_where('tb_admin', ['username' => $this->input->post('username')])->row_array();
        if ($db_user['username'] == $this->input->post('username')) {
            if ($db_user['pass_admin'] == $this->input->post('password')) {
                $d_session = [
                    'username' => $db_user['username'],
                    'img_profile' => $db_user['img_profile'],
                    'role' => $db_user['role']
                ];
                $this->session->set_userdata($d_session);
                if ($db_user['role'] == 'admin') {
                    redirect('dashboard/index');
                } else if ($db_user['role'] == 'kasir') {
                    redirect('kasir/index');
                } else {
                    redirect('toko/index');
                }
            } else {
                $this->session->set_flashdata('message', ' <div class="alert alert-danger" role="alert">Password salah
                </div>');
                redirect('toko/login');
            }
        } else {
            $this->session->set_flashdata('message', ' <div class="alert alert-danger" role="alert">Username tidak terdaftar
            </div>');
            redirect('toko/login');
        }
    }
    public function keluar()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('img_profile');
        redirect('toko/index');
    }
    public function produk()
    {
        $data['list'] = $this->m_toko->Mlist_produk()->result_array();
    }
    public function beli($kd_p)
    {
        if (!$this->session->userdata('username')) {
            $this->session->set_flashdata('message', ' <div class="alert alert-warning" role="alert">Anda harus login untuk melanjutkan pembelian
            </div>');
            redirect('toko/login');
        }
        $data['count_tmp'] = $this->m_toko->Mcount();
        $data['user'] = $this->db->get_where('tb_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['beli'] = $this->m_toko->Mbeli($kd_p);

        $this->load->view('toko/root/header', $data);
        $this->load->view('toko/content/beli', $data);
        $this->load->view('toko/root/footer', $data);
    }
    public function addKeranjang()
    {
        $data['count_tmp'] = $this->m_toko->Mcount();
        $data['user'] = $this->db->get_where('tb_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['addKeranjang'] = $this->m_toko->Mkeranjang();
        $data['keranjang'] = $this->m_toko->listKeranjang();
        redirect('toko/keranjang');
    }
    public function keranjang()
    {
        $data['count_tmp'] = $this->m_toko->Mcount();
        $data['user'] = $this->db->get_where('tb_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['keranjang'] = $this->m_toko->listKeranjang();
        $data['total'] = $this->m_toko->Mtotalbayar()->result_array();
        $this->load->view('toko/root/header', $data);
        $this->load->view('toko/content/keranjang', $data);
        $this->load->view('toko/root/footer', $data);
    }
    public function reset()
    {
        $un = $this->session->userdata('username');
        $data['reset_tmp'] = $this->db->query("DELETE FROM tb_keranjang_tmp WHERE username = '$un'");
        redirect('toko/Keranjang');
    }
    public function pembayaran()
    {
        $data['bank'] = $this->db->query('SELECT * FROM tb_bank')->result_array();
        $data['total'] = $this->m_toko->Mtotalbayar()->result_array();
        $data['count_tmp'] = $this->m_toko->Mcount();
        $data['user'] = $this->db->get_where('tb_admin', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('toko/root/header', $data);
        $this->load->view('toko/content/pembayaran', $data);
        $this->load->view('toko/root/footer', $data);
    }
    public function lanjut()
    {
        $this->session->set_userdata('bank', $this->input->post('bank'));
        redirect('toko/konfirmasi');
    }

    public function konfirmasi()
    {
        $kd_bank = $this->session->userdata('bank');
        $rek = ['kd_bank' => $kd_bank];
        $data['bank'] = $this->db->get_where('tb_bank', $rek)->result_array();
        $data['count_tmp'] = $this->m_toko->Mcount();
        $data['user'] = $this->db->get_where('tb_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['total'] = $this->m_toko->Mtotalbayar()->result_array();
        // membuat nomor transaksi
        $angka = range(0, 9);
        shuffle($angka);
        $lnota = array_rand($angka, 8);
        $string = implode("", $lnota);
        $data['nota'] = $string;
        $this->load->view('toko/root/header', $data);
        $this->load->view('toko/content/konfirmasi', $data);
        $this->load->view('toko/root/footer', $data);
    }
    public function transaksi()
    {
        $kd_bank = $this->session->userdata('bank');
        $user = $this->session->userdata('username');
        $rek = ['kd_bank' => $kd_bank];
        $data['bank'] = $this->db->get_where('tb_bank', $rek)->result_array();
        $data['count_tmp'] = $this->m_toko->Mcount();
        $data['user'] = $this->db->get_where('tb_admin', ['username' => $this->session->userdata('username')])->row_array();

        $data['total'] = $this->m_toko->Mtotalbayar()->result_array();
        $data['konfirmasi'] = $this->m_toko->kirim_konfirmasi();
        $data['reset_tmp'] = $this->db->query("DELETE FROM tb_keranjang_tmp WHERE username='$user'");
        redirect('toko/index');
    }
}
