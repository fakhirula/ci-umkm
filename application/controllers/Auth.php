<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        redirect('page404');
    }

    public function login()
    {
        $rules = $this->auth_model->rules();
        $this->form_validation->set_rules($rules);

        // Start login
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $current_user = $this->auth_model->current_user();
        if ($current_user) {
            if ($current_user->role == 'administrator') {
                redirect('admin');
            }
            redirect(base_url());
        } else {
            if ($this->form_validation->run() == FALSE) {
                return $this->load->view('auth/login');
            }

            if ($this->auth_model->login($username, $password)) {
                redirect('admin');
                // if ($current_user->role != 'administrator') {
                //     // redirect(base_url());
                //     echo $current_user->role;
                // } else {
                //     // redirect('admin');
                //     echo $current_user->role;
                // }
            } else {
                $this->session->set_flashdata('message_login_error', 'Login Gagal, pastikan username, password benar dan akun aktif!');
                $this->load->view('auth/login');
            }
        }
    }

    public function logout()
    {
        $this->auth_model->logout();
        redirect(base_url());
    }
}