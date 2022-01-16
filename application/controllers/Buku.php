<?php
class Buku extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('m_buku');
    }
    public function index()
    {
        $data['title'] = "Data Buku";
        $query = $this->db->get("book");
        $data['title'] = "Data Buku";
        $data['records'] = $query->result();
        $this->load->view('admin/header', $data);
        $this->load->view('buku/v_data_buku', $data);
        $this->load->view('admin/footer', $data);
    }
    public function cari_buku()
    {
        $keyword = $this->input->post('keyword');
        $data['records'] = $this->m_buku->get_keyword($keyword);
        $data['title'] = "Data Buku";
        $this->load->view('admin/header', $data);
        $this->load->view('buku/v_data_buku', $data);
        $this->load->view('admin/footer', $data);
    }
    public function delete_buku()
    {
        $book_id = $this->uri->segment('3');
        $this->db->delete('book', 'book_id =' . $book_id);
        redirect(base_url('buku'));
    }
    public function v_add_buku()
    {
        $data['title'] = "Tambah Buku";
        $this->load->view('admin/header', $data);
        $this->load->view('buku/v_add_buku', $data);
        $this->load->view('admin/footer', $data);
    }
    public function add_buku()
    {
        $data = array(
            'book_title' => $this->input->post('book_title'),
            'author' => $this->input->post('author'),
            'publisher' => $this->input->post('publisher'),
            'book_category' => $this->input->post('book_category'),
            'price' => $this->input->post('price')
        );
        $this->m_buku->add_buku($data);
        redirect(base_url('buku'));
    }
    public function v_edit_buku()
    {
        $book_id = $this->uri->segment('3');
        $data['title'] = "Edit Buku";
        $query = $this->db->get_where("book", array("book_id" => $book_id));
        $data['records'] = $query->result();
        $data['old_book_id'] = $book_id;
        $this->load->view('admin/header', $data);
        $this->load->view('buku/v_edit_buku', $data);
        $this->load->view('admin/footer', $data);
    }
    public function edit_buku()
    {
        $data = array(
            'book_title' => $this->input->post('book_title'),
            'author' => $this->input->post('author'),
            'publisher' => $this->input->post('publisher'),
            'book_category' => $this->input->post('book_category'),
            'price' => $this->input->post('price')
        );
        $old_book_id = $this->input->post('book_id');
        $this->m_buku->edit_buku($data, $old_book_id);
        redirect(base_url('buku'));
    }
}
