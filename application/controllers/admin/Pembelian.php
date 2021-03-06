<?php

use LDAP\Result;

defined('BASEPATH') or exit('No direct script access allowed');

class Pembelian extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/pembelian_model');
        $this->load->model('admin/produk_model');
        $this->load->model('admin/suplier_model');

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
        $data['pembelian'] = $this->pembelian_model->getAll();
        $data['produk'] = $this->produk_model->getAll();
        $data['suplier'] = $this->suplier_model->getAll();
        $this->load->view('admin/pembelian/index', $data);
    }

    public function add()
    {
        $pembelian = $this->pembelian_model;
        $produk = $this->produk_model;
        $validation = $this->form_validation;
        $validation->set_rules($pembelian->rules());

        $decrypt_id = $this->produk_model->getById($this->input->post('produk_id'));
        $getStok = $decrypt_id->stok;
        $getHargaBeli = $decrypt_id->harga_beli;

        if ($validation->run()) {
            $pembelian->save($getHargaBeli) && $produk->tambahStok($getStok);
            $this->session->set_flashdata('alert-success', 'Data berhasil ditambahkan');
        } else {
            $this->session->set_flashdata('alert-error', validation_errors('[invalid]: '));
        }

        redirect(site_url('admin/pembelian'));
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->pembelian_model->delete($this->secure->decrypt_url($id))) {
            $this->session->set_flashdata('alert-success', 'Data berhasil dihapus');
            redirect(site_url('admin/pembelian'));
        }
    }
}
