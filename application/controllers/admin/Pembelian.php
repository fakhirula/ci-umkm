<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pembelian extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/pembelian_model');

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
        $this->load->view('admin/pembelian/index', $data);
    }

    public function add()
    {
        $pembelian = $this->pembelian_model;
        $validation = $this->form_validation;
        $validation->set_rules($pembelian->rules());

        if ($validation->run()) {
            $pembelian->save();
            $this->session->set_flashdata('smart-alert', 'Data berhasil ditambahkan');
        } else {
            $this->session->set_flashdata('smart-alert-error', validation_errors('[invalid]: '));
        }

        redirect(site_url('admin/pembelian'));
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/pembelian');

        $pembelian = $this->pembelian_model;
        $validation = $this->form_validation;
        $validation->set_rules($pembelian->rules());

        if ($validation->run()) {
            $pembelian->update();
            $this->session->set_flashdata('smart-alert', 'Data berhasil diedit');
        } else {
            $this->session->set_flashdata('smart-alert-error', validation_errors('[invalid]: '));
        }

        $data['current_user'] = $this->auth_model->current_user();
        $data["pembelian"] = $pembelian->getById($id);
        if (!$data["pembelian"]) show_404();

        $this->load->view("admin/pembelian/edit", $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->pembelian_model->delete($id)) {
            $this->session->set_flashdata('smart-alert', 'Data berhasil dihapus');
            redirect(site_url('admin/pembelian'));
        }
    }
}
