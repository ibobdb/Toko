<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Kasir extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_data', 'm_data');
        $this->load->model('m_kasir', 'm_kasir');
    }
    public function index()
    {
        $data['tabel_produk'] = $this->m_data->list_produk_all();
        $data['tmp'] = $this->m_kasir->transaksi_tmp();

        // Load Views
        $data['tittle'] = "Selamat datang di TOKO AYANG COLLECTION";
        $data['sub_tittle'] = "Kasir";
        // membuat nomor transaksi
        $angka = range(0, 9);
        shuffle($angka);
        $lnota = array_rand($angka, 8);
        $string = implode("", $lnota);
        // Session
        $data['user'] = $this->db->get_where('tb_admin', ['username' => $this->session->userdata('username')])->row_array();
        $data['nota'] = $string;
        $data['ss_nota'] = $this->session->set_userdata('nota', $this->input->post('nota'));

        $data['total'] = $this->m_kasir->total_bayar()->result_array();

        $this->load->view('dashboard/root/header', $data);
        $this->load->view('kasir/index', $data);
        $this->load->view('dashboard/root/footer', $data);
        $this->load->view('dashboard/modal', $data);
    }
    public function tmp()
    {
        // Cek stok
        $permintaaStok = $this->input->post('qty');
        $stokBrg = $this->db->get_where('tb_produk', ['kd_produk' => $this->input->post('kode_produk')])->row_array();
        if ($stokBrg['stok'] - $permintaaStok < 0) {
            $this->session->set_flashdata('message', ' <div class="alert alert-danger" role="alert">Stok tidak mencukupi permintaan 
            </div>');
            redirect('kasir/index');
        } else {
            $data['add_tmp'] = $this->m_kasir->keranjang();
            $this->session->set_flashdata('message', ' <div class="alert alert-success" role="alert">Data ditambahkan 
            </div>');
            redirect('kasir/index');
        }
    }
    public function bayar()
    {
        $admin = $this->session->userdata('username');
        $this->m_kasir->transaksi();
        $this->db->query("DELETE FROM tb_keranjang_tmp WHERE username='$admin'");
        redirect('kasir/index');
    }
}
