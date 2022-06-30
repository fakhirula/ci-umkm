<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profile extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('admin/users_model', 'users');

        // Check login information
        $current_user = $this->auth_model->current_user();
        if ($current_user) {
            if ($current_user->role == 'administrator') {
                redirect(base_url('admin/profile'));
            }
        } else {
            redirect('auth/login');
        }
    }

    public function index()
    {
        $data['current_user'] = $this->auth_model->current_user();
        $data['users'] = $this->users->getAll();
        $this->load->view('public/profile', $data);
    }

    public function change_password()
    {
        $users = $this->users;

        $validation = $this->form_validation;
        $validation->set_rules('oldpassword', 'Old Password', 'required|max_length[255]');
        $validation->set_rules('newpassword', 'New Password', 'required|max_length[255]|matches[confirmPassword]');
        $validation->set_rules('confirmPassword', 'Confirm Password', 'required|max_length[255]|matches[newpassword]');

        $current_user = $this->auth_model->current_user();
        $oldpassword = $this->input->post('oldpassword');

        if (!password_verify($oldpassword, $current_user->password)) {
            $this->session->set_flashdata('alert-error', 'Password lama salah!');
        } else {
            if ($validation->run()) {
                $users->change_password();
                $this->session->set_flashdata('alert-success', 'Update password berhasil');
            } else {
                $this->session->set_flashdata('alert-error', validation_errors('[invalid]: '));
            }
        }

        redirect(base_url('public/profile'));
    }
}