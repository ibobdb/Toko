<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('m_data', 'm_data');
    }
    // INDEX
    public function index()
    {

        // view
        $data['tittle'] = "Selamat datang di TOKO AYANG COLLECTION";
        $data['sub_tittle'] = "Dashboard";

        // Pending request

        $data['req'] = $this->m_data->pendingReq();

        $this->load->view('dashboard/root/header.php', $data);
        $this->load->view('dashboard/index', $data);
        $this->load->view('dashboard/root/footer', $data);
    }
    // SUPPLIER
    public function supplier()
    {
        $data['tittle'] = "Menu SUPPLIER";
        $data['sub_tittle'] = "Supplier";
        $this->load->view('dashboard/root/header', $data);
        $this->load->view('dashboard/menu/supplier');
        $this->load->view('dashboard/root/footer');
    }
    public function tambah_supplier()
    {
        $data['list_supplier'] = $this->db->get('tb_supplier')->result_array();

        // Load ViEW
        $data['tittle'] = "Menu SUPPLIER";
        $data['sub_tittle'] = "Supplier";
        $this->load->view('dashboard/root/header', $data);
        $this->load->view('dashboard/menu/tambah_supplier', $data);
        $this->load->view('dashboard/root/footer');
    }
    public function new_supp()
    {
        // tambah data baru
        $data['simpan'] = $this->m_data->new_supp();
        $this->session->set_flashdata('message', ' <div class="alert alert-success" role="alert">Data disimpan 
        </div>');
        redirect('dashboard/tambah_supplier');
    }




    //////////////////////////////////////////
    /////////////////////////////////////////


    // PRODUK
    public function produk()
    {

        // Tabel Produk
        $data['tabel_produk'] = $this->m_data->list_produk_all();

        //  Views
        $data['tittle'] = "Menuk Produk";
        $data['sub_tittle'] = "Produk";
        $data['table_heading'] = "Produk";

        $this->load->view('dashboard/root/header.php', $data);
        $this->load->view('dashboard/menu/produk', $data);
        $this->load->view('dashboard/root/footer', $data);
        $this->load->view('dashboard/modal', $data);
    }
    public function kategori_produk()
    {
        // List supplier
        $data['list_supplier'] = $this->db->get('tb_supplier')->result_array();
        // List Kategori
        $data['list_kategori'] = $this->db->get('tb_kategori')->result_array();


        // Views
        $data['tittle'] = "Menuk Produk";
        $data['sub_tittle'] = "Categori";
        $this->load->view('dashboard/root/header.php', $data);
        $this->load->view('dashboard/menu/tambah_kategori');
        $this->load->view('dashboard/root/footer');
    }
    public function detail_produk($kd_p)
    { // Detail produk
        $data['d_produk'] = $this->m_data->detailProduk($kd_p);
        $data['tittle'] = "Detail";
        $data['sub_tittle'] = "Detail Produk";
        $this->load->view('dashboard/root/header.php', $data);
        $this->load->view('dashboard/menu/detail_produk', $data);
        $this->load->view('dashboard/root/footer');
    }
    public function tambah_produk()
    {
        // List supplier
        $data['list_supplier'] = $this->db->get('tb_supplier')->result_array();
        // List Kategori
        $data['list_kategori'] = $this->db->get('tb_kategori')->result_array();



        // View
        $data['tittle'] = "Menuk Produk";
        $data['sub_tittle'] = "Merk";
        $this->load->view('dashboard/root/header.php', $data);
        $this->load->view('dashboard/menu/tambah_produk', $data);
        $this->load->view('dashboard/root/footer');
    }

    // add kategori
    public function new_kategori()
    {
        // tambah data baru
        $data['simpan'] = $this->m_data->new_ktgr();
        $this->session->set_flashdata('message', ' <div class="alert alert-success" role="alert">Data disimpan 
        </div>');
        redirect('dashboard/kategori_produk');
    }
    public function new_produk()
    {
        $data['simpan'] = $this->m_data->new_prdk();
        $this->session->set_flashdata('message', ' <div class="alert alert-success" role="alert">Data disimpan 
        </div>');
        redirect('dashboard/tambah_produk');
    }
    public function hapus_produk($kd_p)
    {
        if ($this->m_data->hapusData_produk($kd_p) == 0) {
            $this->session->set_flashdata('message', ' <div class="alert alert-success" role="alert">
            Data berhasil di hapus!
            </div>');
            redirect('dashboard/produk');
        } else {
            $this->session->set_flashdata('message', ' <div class="alert alert-danger" role="alert">
            Data gagal di hapus
            </div>');
            redirect('dashboard/produk');
        }
    }
    public function hapus_kategori($kd_p)
    {
        if ($this->m_data->hapusData_kategori($kd_p) == 0) {
            $this->session->set_flashdata('message', ' <div class="alert alert-success" role="alert">
            Data berhasil di hapus!
            </div>');
            redirect('dashboard/kategori_produk');
        } else {
            $this->session->set_flashdata('message', ' <div class="alert alert-danger" role="alert">
            Data gagal di hapus
            </div>');
            redirect('dashboard/tambah_kategori');
        }
    }
    public function hapus_supplier($kd_p)
    {
        if ($this->m_data->hapusData_supplier($kd_p) == 0) {
            $this->session->set_flashdata('message', ' <div class="alert alert-success" role="alert">
            Data berhasil di hapus!
            </div>');
            redirect('dashboard/tambah_supplier');
        } else {
            $this->session->set_flashdata('message', ' <div class="alert alert-danger" role="alert">
            Data gagal di hapus
            </div>');
            redirect('dashboard/tambah_supplier');
        }
    }
    // /////////////////////////
    // STOK
    // Stok Masuk
    public function stok_masuk()
    {
        $data['stok_masuk'] = $this->m_data->list_stok_masuk();
        // view
        $data['tittle'] = "Stok barang";
        $data['sub_tittle'] = "Manajemen Stok";
        $this->load->view('dashboard/root/header.php', $data);
        $this->load->view('dashboard/stok/stok_masuk', $data);
        $this->load->view('dashboard/root/footer', $data);
    }
    public function tambah_stok()
    {
        $data['tabel_produk'] = $this->m_data->list_produk_all();
        $data['list_supplier'] = $this->db->get('tb_supplier')->result_array();
        $data['pencarian'] = $this->m_data->cari();
        // view
        $data['tittle'] = "Stok barang";
        $data['sub_tittle'] = "Manajemen Stok";
        $this->load->view('dashboard/root/header.php', $data);
        $this->load->view('dashboard/stok/tambah_stok', $data);
        $this->load->view('dashboard/root/footer', $data);
        $this->load->view('dashboard/modal', $data);
    }
    public function addStok()
    {
        if ($this->m_data->tambahStok()) {
            $this->session->set_flashdata('message', ' <div class="alert alert-success" role="alert">
            Data berhasil di simpan!
            </div>');
            redirect('dashboard/tambah_stok');
        } else {
            $this->session->set_flashdata('message', ' <div class="alert alert-danger" role="alert">
            Data gagal disimpan
            </div>');
            redirect('dashboard/tambah_stok');
        }
    }
    public function pencarian()
    {
        $data['tabel_produk'] = $this->m_data->cari();
        $data['tabel_produk'] = $this->m_data->list_produk_all();
        $this->load->view('dashboard/root/footer', $data);
        $this->load->view('dashboard/modal', $data);
    }

    // Pemberitahuan

    public function pendingReq()
    {

        $data['tittle'] = "Selamat datang di TOKO AYANG COLLECTION";
        $data['sub_tittle'] = "Dashboard";
        $data['req'] = $this->m_data->pendingReq()->result_array();
        $this->load->view('dashboard/root/header', $data);
        $this->load->view('dashboard/pemberitahuan/pendingReq', $data);
        $this->load->view('dashboard/root/footer', $data);
    }
}
