<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_kasir extends CI_Model
{
    public function keranjang()
    {

        $total = "SELECT (qty_beli*harga_produk) AS total_tmp FROM tb_keranjang_tmp,tb_produk";

        $data = [
            'kd_transaksi' => $this->session->userdata('nota'),
            'username' => $this->session->userdata('username'),
            'kd_produk' => $this->input->post('kode_produk'),
            'qty_beli' => $this->input->post('qty'),
            'total_tmp' => $this->input->post('total'),

        ];


        return $this->db->insert('tb_keranjang_tmp', $data);
    }
    public function transaksi_tmp()
    {
        $this->db->select('*');
        $this->db->from('tb_keranjang_tmp');
        $this->db->join('tb_produk', 'tb_keranjang_tmp.kd_produk=tb_produk.kd_produk');
        return $this->db->get()->result_array();
    }
    public function total_bayar()
    {
        $admin = $this->session->userdata('username');
        $this->db->select_sum('total_tmp');
        $this->db->from('tb_keranjang_tmp');
        $this->db->where('username', $admin);
        return $this->db->get();
    }
    public function transaksi()
    {
        $data = [
            'kd_transaksi' => $this->input->post('nota'),
            'tgl_transaksi' => $this->input->post('tgl'),
            'status_transaksi' => 0,
            'username' => $this->session->userdata('username'),
            'kurir' => 0,
            'bank' => 0,
            'total_bayar' => $this->input->post('total'),
            'status_pesan' => 1,
            'bukti_tf' => "-"
        ];
        return $this->db->insert('tb_transaksi', $data);
    }
}
