<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Faq extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('auth/auth_model');
    }

    public function index()
    {
        $data['current_user'] = $this->auth_model->current_user();
        $this->load->view('public/faq', $data);
    }
}
