<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesanan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/pesanan_model');
        $this->load->model('admin/produk_model');

        // Check login information
        $current_user = $this->auth_model->current_user();
        if ($current_user) {
            if ($current_user->role != 'administrator') {
                redirect(base_url());
            }
        } else {
            redirect('auth/login');
        }
    }

    public function index()
    {
        $data['current_user'] = $this->auth_model->current_user();
        $data['pesanan'] = $this->pesanan_model->getAll();
        $data['produk'] = $this->produk_model->getAll();
        $this->load->view('admin/pesanan/index', $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->pesanan_model->delete($this->secure->decrypt_url($id))) {
            $this->session->set_flashdata('alert-success', 'Data berhasil dihapus');
            redirect(site_url('admin/pesanan'));
        }
    }
}
