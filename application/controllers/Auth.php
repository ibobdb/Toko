<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }

    public function index()
    {

        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');
        if ($this->form_validation->run() == FALSE) {
            $data['tittle'] = "TOKO AYANG COLLECTION";
            $this->load->view('auth/index', $data);
        } else {
            $this->_login();
        }
    }
    private function _login()
    {
        $usernm = $this->input->post('username');
        $pass = $this->input->post('password');
        // Cek username
        $db_user = $this->db->get_where('tb_admin', ['username' => $usernm])->row_array();
        if ($db_user['username'] == $usernm) {
            // Cek password
            if ($db_user['pass_admin'] == $pass) {
                $dt_session = ['username' => $db_user['username']];
                $this->session->set_userdata($dt_session);
                redirect('dashboard');
            } else {
                $this->session->set_flashdata('message', ' <div class="alert alert-danger" role="alert">Password salah!! 
                </div>');
                redirect('auth');
            }
        } else {
            $this->session->set_flashdata('message', ' <div class="alert alert-danger" role="alert">Username tidak terdaftar 
                </div>');
            redirect('auth');
        }
    }
}
