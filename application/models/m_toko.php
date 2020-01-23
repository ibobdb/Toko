<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_toko extends CI_Model
{
    public function Mdaftar()
    {
        $data = [
            'username' => $this->input->post('username'),
            'nama_admin' => $this->input->post('nama'),
            'pass_admin' => $this->input->post('password'),
            'email' => $this->input->post('email'),
            'no_hp' => $this->input->post('nohp'),
            'role' => "user",
            'img_profile' => "default.jpg"
        ];
        $this->db->insert('tb_admin', $data);
    }
    public function Mlist_produk()
    {
        return $this->db->query("SELECT * FROM tb_produk WHERE stok >=0")->result_array();
    }
    public function Mbeli($kd_p)
    {
        $this->db->select('*');
        $this->db->from('tb_produk');
        $this->db->where('kd_produk', $kd_p);
        return $this->db->get()->result_array();
    }
    public function Mcount()
    {
        $this->db->select('*');
        $this->db->from('tb_keranjang_tmp');
        $this->db->where('username', $this->session->userdata('username'));
        return $this->db->get();
    }
    public function Mkeranjang()
    {
        $data = [
            'username' => $this->session->userdata('username'),
            'kd_produk' => $this->input->post('kd_produk'),
            'qty_beli' => $this->input->post('qty'),
            'total_tmp' => $this->input->post('total_hrga')
        ];

        return $this->db->insert('tb_keranjang_tmp', $data);
    }

    public function listKeranjang()
    {
        $this->db->select('*');
        $this->db->from('tb_keranjang_tmp');
        $this->db->join('tb_produk', 'tb_produk.kd_produk=tb_keranjang_tmp.kd_produk');

        $this->db->where('username', $this->session->userdata('username'));
        return $this->db->get()->result_array();
    }
    public function Mtotalbayar()
    {
        $user = $this->session->userdata('username');
        $this->db->select_sum('total_tmp');
        $this->db->from('tb_keranjang_tmp');
        $this->db->where('username', $user);
        return $this->db->get();
    }
    public function kirim_konfirmasi()
    {
        $data = [
            'kd_transaksi' => $this->input->post('kd_transaksi'),
            'status_transaksi' => 1,
            'tgl_transaksi' => $this->input->post('tgl'),
            'username' => $this->session->userdata('username'),
            'kurir' => 0,
            'bank' => $this->session->userdata('bank'),
            'total_bayar' => $this->input->post('total_bayar'),
            'status_pesan' => 0,
            'bukti_tf' => $this->_bukti()
        ];
        return $this->db->insert('tb_transaksi', $data);
    }
    private function _bukti()
    {
        $data['upload_path']          = './assets/bukti';
        $data['allowed_types']        = 'gif|jpg|png';

        $data['overwrite']            = true;
        $data['max_size']             = 1024; // 1MB


        $this->load->library('upload', $data);

        if ($this->upload->do_upload('bukti')) {
            return $this->upload->data("file_name");
        }

        return "default.jpg";
    }
}
