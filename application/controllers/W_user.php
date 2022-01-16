<?php
class w_user extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('m_buku');
    }
    public function index()
    {
        $data['title'] = "User Page";
        $this->load->view('viewer/header', $data);
        $this->load->view('viewer/welcome', $data);
        $this->load->view('viewer/footer', $data);
    }
}
