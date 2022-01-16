<?php
class m_transaction extends CI_Model
{
    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->join('book', 'book.book_id=sale.book_id');
        $this->db->from('sale', 'sale.price as price_sale');
        $this->db->like('book_title', $keyword);
        $this->db->or_like('author', $keyword);
        $this->db->or_like('publisher', $keyword);
        $this->db->or_like('book_category', $keyword);
        $this->db->or_like('quantity', $keyword);
        $this->db->or_like('total_price', $keyword);
        $this->db->or_like('date', $keyword);
        return $this->db->get()->result();
    }
    public function add_transaction($data)
    {
        if ($this->db->insert("sale", $data)) {
            return true;
        }
    }
    public function edit_transaction($data, $old_transaction_id)
    {
        $this->db->set($data);
        $this->db->where("transaction_id", $old_transaction_id);
        $this->db->update("sale", $data);
    }
}
