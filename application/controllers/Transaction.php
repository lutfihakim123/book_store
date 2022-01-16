<?php
class Transaction extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('m_transaction');
    }
    public function index()
    {
        $data['title'] = "Data Transaction";
        $query = $this->db->join('book', 'book.book_id=sale.book_id');
        $data['records'] = $this->db->get('sale')->result();
        $this->load->view('admin/header', $data);
        $this->load->view('transaction/v_data_transaction', $data);
        $this->load->view('admin/footer', $data);
    }
    public function cari_transaction()
    {
        $keyword = $this->input->post('keyword');
        $data['records'] = $this->m_transaction->get_keyword($keyword);
        $data['title'] = "Data Transaction";
        $this->load->view('admin/header', $data);
        $this->load->view('transaction/v_data_transaction', $data);
        $this->load->view('admin/footer', $data);
    }
    public function delete_transaction()
    {
        $transaction_id = $this->uri->segment('3');
        $this->db->delete('sale', 'transaction_id =' . $transaction_id);
        redirect(base_url('transaction'));
    }
    public function v_edit_transaction()
    {
        $transaction_id = $this->uri->segment('3');
        $data['title'] = "Edit transaction";
        $data['data_buku'] = $this->db->get('book')->result();
        $query = $this->db->get_where("sale", array("transaction_id" => $transaction_id));
        $data['records'] = $query->result();
        $data['old_transaction_id'] = $transaction_id;
        $this->load->view('admin/header', $data);
        $this->load->view('transaction/v_edit_transaction', $data);
        $this->load->view('admin/footer', $data);
    }
    public function v_add_transaction()
    {
        $data['title'] = "Tambah User";
        $this->load->view('admin/header', $data);
        $data['data_buku'] = $this->db->get('book')->result();
        $this->load->view('transaction/v_add_transaction', $data);
        $this->load->view('admin/footer', $data);
    }
    public function add_transaction()
    {
        $price = $this->input->post('price');
        $quantity = $this->input->post('quantity');
        $total_price = $price * $quantity;
        $data = array(
            'date' => $this->input->post('date'),
            'book_id' => $this->input->post('book_id'),
            'Total_price' => $total_price,
            'quantity' => $this->input->post('quantity'),
            'price' => $this->input->post('price'),

        );
        $this->m_transaction->add_transaction($data);
        redirect(base_url('transaction'));
    }
    public function edit_transaction()
    {
        $price = $this->input->post('price');
        $quantity = $this->input->post('quantity');
        $total_price = $price * $quantity;
        $data = array(
            'date' => $this->input->post('date'),
            'book_id' => $this->input->post('book_id'),
            'quantity' => $this->input->post('quantity'),
            'price' => $this->input->post('price'),
            'Total_price' => $total_price
        );
        $old_transaction_id = $this->input->post('transaction_id');
        $this->m_transaction->edit_transaction($data, $old_transaction_id);
        redirect(base_url('transaction'));
    }
}
