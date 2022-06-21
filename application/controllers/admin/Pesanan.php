<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pesanan extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/pesanan_model');

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
        $this->load->view('admin/pesanan/index', $data);
    }

    public function add()
    {
        $pesanan = $this->pesanan_model;
        $validation = $this->form_validation;
        $validation->set_rules($pesanan->rules());

        if ($validation->run()) {
            $pesanan->save();
            $this->session->set_flashdata('smart-alert', 'Data berhasil ditambahkan');
        } else {
            $this->session->set_flashdata('smart-alert-error', validation_errors('[invalid]: '));
        }

        redirect(site_url('admin/pesanan'));
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/pesanan');

        $pesanan = $this->pesanan_model;
        $validation = $this->form_validation;
        $validation->set_rules($pesanan->rules());

        if ($validation->run()) {
            $pesanan->update();
            $this->session->set_flashdata('smart-alert', 'Data berhasil diedit');
        } else {
            $this->session->set_flashdata('smart-alert-error', validation_errors('[invalid]: '));
        }

        $data['current_user'] = $this->auth_model->current_user();
        $data["pesanan"] = $pesanan->getById($id);
        if (!$data["pesanan"]) show_404();

        $this->load->view("admin/pesanan/edit", $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->pesanan_model->delete($id)) {
            $this->session->set_flashdata('smart-alert', 'Data berhasil dihapus');
            redirect(site_url('admin/pesanan'));
        }
    }
}
