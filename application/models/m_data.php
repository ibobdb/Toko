<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_data extends CI_Model
{
    public function new_supp()
    {

        // queery
        $data = [
            'nama_supplier' => $this->input->post('nama_supp'),
            'alamat_supplier' => $this->input->post('alamat_supp'),
            'telp_supplier' => $this->input->post('telp_supp')
        ];
        // Insert
        $this->db->insert('tb_supplier', $data);
    }
    public function new_ktgr()
    {
        // queery
        $data = [
            'nama_kategori' => $this->input->post('nama_kategori')
        ];
        // Insert
        $this->db->insert('tb_kategori', $data);
    }
    public function new_prdk()
    {
        // queery
        $data = [
            'nama_produk' => $this->input->post('nm_produk'),
            'kd_kategori' => $this->input->post('nm_kategori'),
            'kd_supplier' => $this->input->post('nm_supplier'),
            'harga_produk' => $this->input->post('hrg_produk'),
            'foto_produk' => $this->_upload_gambar(),
            'stok' => 0
        ];
        // Insert
        $this->db->insert('tb_produk', $data);
    }
    // List produk
    public function list_produk_all()
    {
        $data = "SELECT `tb_produk`.*,`tb_kategori`.`nama_kategori`,`tb_supplier`.`nama_supplier` 
        FROM `tb_produk`
        JOIN `tb_kategori`ON `tb_produk`.`kd_kategori`=`tb_kategori`.`kd_kategori`
        JOIN `tb_supplier`ON `tb_produk`.`kd_supplier`=`tb_supplier`.`kd_supplier`";
        return $this->db->query($data)->result_array();
    }
    // Detail Produk
    public function detailProduk($kd_p)
    {
        $this->db->select('*');
        $this->db->from('tb_produk');
        $this->db->join('tb_kategori', 'tb_produk.kd_kategori=tb_kategori.kd_kategori');
        $this->db->join('tb_supplier', 'tb_produk.kd_supplier=tb_supplier.kd_supplier');
        $this->db->where('kd_produk', $kd_p);
        return $this->db->get()->result_array();
    }
    // Hapus Produk
    public function hapusData_produk($kd_p)
    {
        $this->db->where('kd_produk', $kd_p);
        $this->db->delete('tb_produk');
    }
    // Hapus Kategori
    public function hapusData_kategori($kd_p)
    {
        $this->db->where('kd_kategori', $kd_p);
        $this->db->delete('tb_kategori');
    }
    // Hapus Supplier
    public function hapusData_supplier($kd_p)
    {
        $this->db->where('kd_supplier', $kd_p);
        $this->db->delete('tb_supplier');
    }
    // Private 
    private function _upload_gambar()
    {
        $data['upload_path']          = './assets/upload_img/';
        $data['allowed_types']        = 'gif|jpg|png';

        $data['overwrite']            = true;
        $data['max_size']             = 1024; // 1MB


        $this->load->library('upload', $data);

        if ($this->upload->do_upload('image')) {
            return $this->upload->data("file_name");
        }

        return "default.jpg";
    }
    // //////////////////
    // STOK
    public function tambahStok()
    {
        $data = [
            'tanggal_masuk' => $this->input->post('tgl_masuk'),
            'kd_produk' => $this->input->post('kode_produk'),
            'kd_supplier' => $this->input->post('nm_supplier'),
            'stok_masuk' => $this->input->post('total_masuk')

        ];
        return $this->db->insert('tb_stok_masuk', $data);
    }
    public function list_stok_masuk()
    {
        $data = "SELECT * FROM `tb_stok_masuk`
        JOIN  `tb_produk` ON `tb_produk`.`kd_produk`=`tb_stok_masuk`.`kd_produk`
        JOIN  `tb_supplier` ON `tb_supplier`.`kd_supplier`=`tb_stok_masuk`.`kd_supplier`
        ";
        return $this->db->query($data)->result_array();
    }
    public function cari()
    {
        $keyword = $this->input->post('search');
        $this->db->select('*');
        $this->db->from('tb_produk');
        $this->db->like('nama_produk', $keyword);
        return $this->db->get()->result_array();
    }
    public function pendingReq()
    {
        $this->db->select('*');
        $this->db->from('tb_transaksi');
        $this->db->where('status_pesan = 0');
        return $this->db->get();
    }
}
