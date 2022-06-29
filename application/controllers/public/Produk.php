<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/produk_model');
        $this->load->model('admin/pesanan_model');
        $this->load->model('auth/auth_model');
    }

    public function index()
    {
        $data['current_user'] = $this->auth_model->current_user();
        $data['produk'] = $this->produk_model->getAll();
        $this->load->view('public/produk', $data);
    }

    public function detail_produk($id = null)
    {
        if (!isset($id)) redirect('produk');

        $produk = $this->produk_model;

        $data['current_user'] = $this->auth_model->current_user();
        $data['produk'] = $produk->getById($this->secure->decrypt_url($id));
        $data['getAllProduk'] = $this->produk_model->getAll();
        if (!$data["produk"] || !$data['getAllProduk']) show_404();

        $this->load->view("public/detail_produk", $data);
    }

    public function checkout($id = null, $kuantitas = null)
    {
        $kuantitas = $this->input->get_post('kuantitas');
        if (!isset($id) || !$kuantitas) redirect('produk');

        $pesanan = $this->pesanan_model;
        $validation = $this->form_validation;
        $validation->set_rules($pesanan->rules());

        // Check login information
        $current_user = $this->auth_model->current_user();
        if (!$current_user) {
            redirect('auth/login');
        }

        $produk = $this->produk_model;
        $validation = $this->form_validation;
        $validation->set_rules($produk->rules());

        $data['current_user'] = $this->auth_model->current_user();
        $data['produk'] = $produk->getById($this->secure->decrypt_url($id));
        $data['kuantitas'] = $kuantitas;
        if (!$data["produk"]) show_404();

        $this->load->view("public/checkout", $data);
    }
}