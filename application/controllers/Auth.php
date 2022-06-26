<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/users_model');
    }

    public function index()
    {
        redirect('page404');
    }

    public function login()
    {
        $auth = $this->auth_model;
        $validation = $this->form_validation;
        $validation->set_rules($auth->rules());

        // Start login
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $current_user = $auth->current_user();
        if ($current_user) {
            if ($current_user->role == 'administrator') {
                redirect('admin');
            }
            redirect(base_url());
        } else {
            if ($validation->run() == FALSE) {
                return $this->load->view('auth/login');
            }

            if ($auth->login($username, $password)) {
                redirect('admin');
            } else {
                $this->session->set_flashdata('alert-error', 'Login Gagal, pastikan username, password benar dan akun aktif!');
                $this->load->view('auth/login');
            }
        }
    }

    public function registration()
    {
        $users = $this->users_model;
        $auth = $this->auth_model;
        $validation = $this->form_validation;
        $validation->set_rules($users->rules());
        $validation->set_rules('confirmPassword', 'Confirm Password', 'required|max_length[255]|matches[password]');

        $current_user = $auth->current_user();
        if ($current_user) {
            if ($current_user->role == 'administrator') {
                redirect('admin');
            }
            redirect(base_url());
        }

        if ($validation->run()) {
            $auth->createAccount();
            $this->session->set_flashdata('alert-success', 'Pendaftaran berhasil');
            redirect('auth/login');
        } else {
            $this->session->set_flashdata('alert-error', validation_errors('[invalid]: '));
        }

        $this->load->view('auth/registration');
    }

    public function forgot_password()
    {
        $this->load->view('auth/forgotpassword');
    }

    public function logout()
    {
        $this->auth_model->logout();
        redirect(base_url());
    }
}