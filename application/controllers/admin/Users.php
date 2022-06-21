<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/users_model', 'users');

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
        $data['users'] = $this->users->getAll();
        $this->load->view('admin/users/index', $data);
    }

    public function setActive($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->users->setActive($id)) {
            $this->session->set_flashdata('smart-alert', 'Data berhasil diaktifkan');
            redirect(site_url('admin/users'), 'refresh');
        }
    }

    public function setNonactive($id = null)
    {
        if (!isset($id)) show_404();

        if ($this->users->setNonactive($id)) {
            $this->session->set_flashdata('smart-alert', 'Data berhasil dinonaktifkan');
            redirect(site_url('admin/users'), 'refresh');
        }
    }
}