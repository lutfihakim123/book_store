<?php
class V_User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('m_buku');
    }
    public function index()
    {
        $data['title'] = "Daftar Buku";
        $query = $this->db->get("book");
        $data['records'] = $query->result();
        $this->load->view('viewer/header', $data);
        $this->load->view('viewer/v_data_buku', $data);
        $this->load->view('viewer/footer', $data);
    }
    public function cari_buku_user()
    {
        $keyword = $this->input->post('keyword');
        $data['records'] = $this->m_buku->get_keyword($keyword);
        $data['title'] = "Data  Buku";
        $this->load->view('viewer/header', $data);
        $this->load->view('viewer/v_data_buku', $data);
        $this->load->view('viewer/footer', $data);
    }
}
