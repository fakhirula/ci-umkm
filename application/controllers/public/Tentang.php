<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Tentang extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/produk_model');
        $this->load->model('admin/jenisproduk_model');
        $this->load->model('auth/auth_model');
    }

    public function index()
    {
        $data['current_user'] = $this->auth_model->current_user();
        $data['produk'] = $this->produk_model->getAll();
        $data['jenis_produk'] = $this->jenisproduk_model->getAll();
        $this->load->view('public/tentang', $data);
    }
}
