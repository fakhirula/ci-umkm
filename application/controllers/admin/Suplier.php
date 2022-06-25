<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Suplier extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
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
        $data['suplier'] = $this->suplier_model->getAll();
        $this->load->view('admin/suplier/index', $data);
    }

    public function add()
    {
        $suplier = $this->suplier_model;
        $validation = $this->form_validation;
        $validation->set_rules($suplier->rules());

        if ($validation->run()) {
            $suplier->save();
            $this->session->set_flashdata('alert-success', 'Data berhasil ditambahkan');
        } else {
            $this->session->set_flashdata('alert-error', validation_errors('[invalid]: '));
        }

        redirect(site_url('admin/suplier'));
    }

    public function edit($id = null)
    {
        if (!isset($id)) redirect('admin/suplier');

        $suplier = $this->suplier_model;
        $validation = $this->form_validation;
        $validation->set_rules($suplier->rules());

        if ($validation->run()) {
            if ($suplier->update()) {
                $this->session->set_flashdata('alert-success', 'Data berhasil diedit');
                redirect(site_url('admin/suplier'), 'refresh');
            }
        } else {
            $this->session->set_flashdata('alert-error', validation_errors('[invalid]: '));
        }

        $data['current_user'] = $this->auth_model->current_user();
        $data["suplier"] = $suplier->getById($this->secure->decrypt_url($id));
        if (!$data["suplier"]) show_404();

        $this->load->view("admin/suplier/edit", $data);
    }

    public function delete($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->suplier_model->delete($this->secure->decrypt_url($id))) {
            $this->session->set_flashdata('alert-success', 'Data berhasil dihapus');
            redirect(site_url('admin/suplier'));
        }
    }
}
