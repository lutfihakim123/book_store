<?php
class m_buku extends CI_Model
{
    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('book');
        $this->db->like('book_title', $keyword);
        $this->db->or_like('author', $keyword);
        $this->db->or_like('publisher', $keyword);
        $this->db->or_like('book_category', $keyword);
        $this->db->or_like('price', $keyword);
        return $this->db->get()->result();
    }
    public function add_buku($data)
    {
        if ($this->db->insert("book", $data)) {
            return true;
        }
    }
    public function edit_buku($data, $old_book_id)
    {
        $this->db->set($data);
        $this->db->where("book_id", $old_book_id);
        $this->db->update("book", $data);
    }
}
