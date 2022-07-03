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

        if ($produk->getById($this->secure->decrypt_url($id))->stok < 1) redirect('produk');

        $data['current_user'] = $this->auth_model->current_user();
        $data['produk'] = $produk->getById($this->secure->decrypt_url($id));
        $data['getRandomLimit'] = $this->produk_model->getRandomLimit(4);
        if (!$data["produk"] || !$data['getRandomLimit']) show_404();

        $this->load->view("public/detail_produk", $data);
    }

    public function checkout($id = null)
    {
        $pesanan = $this->pesanan_model;
        $produk = $this->produk_model;
        $validation = $this->form_validation;
        $validation->set_rules($pesanan->rules());

        $stokProduk = $produk->getById($this->secure->decrypt_url($id))->stok;
        $getJumlah = $this->secure->encrypt_url($this->input->get('jumlah'));
        $decrypt_jumlah = intval($this->secure->decrypt_url($getJumlah));

        if ($validation->run()) {
            $pesanan->save($decrypt_jumlah) && $produk->kurangiStok($stokProduk, $decrypt_jumlah);
            $this->session->set_flashdata('alert-success', 'Pembelian berhasil');
            redirect(site_url('public/produk'), 'refresh');
        } else {
            $this->session->set_flashdata('alert-error', validation_errors('[invalid]: '));
        }

        // Check login information
        $current_user = $this->auth_model->current_user();
        if (!$current_user) {
            redirect('auth/login');
        }

        $data['current_user'] = $this->auth_model->current_user();
        $data['produk'] = $produk->getById($this->secure->decrypt_url($id));
        $data['jumlah'] = $getJumlah;
        if (!isset($id) || !$getJumlah || $decrypt_jumlah < 1 || $decrypt_jumlah > $stokProduk) redirect('produk');
        if (!$data["produk"]) show_404();

        $this->load->view("public/checkout", $data);
    }
}