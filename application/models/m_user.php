<?php
class m_user extends CI_Model
{
    public function get_keyword($keyword)
    {
        $this->db->select('*');
        $this->db->from('user');
        $this->db->like('username', $keyword);
        $this->db->or_like('user_type', $keyword);
        return $this->db->get()->result();
    }
    public function add_user($data)
    {
        if ($this->db->insert("user", $data)) {
            return true;
        }
    }
    public function edit_user($data, $old_user_id)
    {
        $this->db->set($data);
        $this->db->where("user_id", $old_user_id);
        $this->db->update("user", $data);
    }
}
