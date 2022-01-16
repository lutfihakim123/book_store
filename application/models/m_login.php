<?php
class m_login extends CI_Model
{
    function cek_login($username, $password)
    {
        $query = $this->db->query("SELECT * FROM user WHERE username='$username' AND password=MD5('$password') LIMIT 1");
        return $query;
    }
}
