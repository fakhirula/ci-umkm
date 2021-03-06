<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Jenis_produk extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/jenisproduk_model');

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
        $data['jenis_produk'] = $this->jenisproduk_model->getAll();
        $this->load->view('admin/jenis_produk/index', $data);
    }

    public function add()
    {
        $jproduk = $this->jenisproduk_model;
        $validation = $this->form_validation;
        $validation->set_rules($jproduk->rules());

        if ($validation->run()) {
            $jproduk->save();
            $this->session->set_flashdata('alert-success', 'Data berhasil ditambahkan');
        } else {
            $this->session->set_flashdata('alert-error', validation_errors('[invalid]: '));
        }

        redirect(site_url('admin/jenis_produk'));
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/jenis_produk');

        $jproduk = $this->jenisproduk_model;
        $validation = $this->form_validation;
        $validation->set_rules($jproduk->rules());

        if ($validation->run()) {
            if ($jproduk->update()) {
                $this->session->set_flashdata('alert-success', 'Data berhasil diedit');
                redirect(site_url('admin/jenis_produk'), 'refresh');
            }
        } else {
            $this->session->set_flashdata('alert-error', validation_errors('[invalid]: '));
        }

        $data['current_user'] = $this->auth_model->current_user();
        $data["jenis_produk"] = $jproduk->getById($this->secure->decrypt_url($id));
        if (!$data["jenis_produk"]) show_404();

        $this->load->view("admin/jenis_produk/edit", $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->jenisproduk_model->delete($this->secure->decrypt_url($id))) {
            $this->session->set_flashdata('alert-success', 'Data berhasil dihapus');
            redirect(site_url('admin/jenis_produk'));
        }
    }
}
