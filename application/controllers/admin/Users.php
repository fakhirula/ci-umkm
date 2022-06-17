<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Users extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper(array('form', 'url'));
        $this->load->library('form_validation');
        $this->load->model('admin/users_model', 'users');
    }

    public function index()
    {
        $count = $this->db->get('users');
        $count->num_rows();
        $data['list_users'] = $this->users->getAll();
        $this->load->view('admin/users/index', $data);
    }
}