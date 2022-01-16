<?php
class Admin extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }
    public function index()
    {
        $data['title'] = 'Admin Page';
        $this->load->view('admin/header', $data);
        $this->load->view('admin/welcome');
        $this->load->view('admin/footer');
    }
}
