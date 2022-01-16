<?php
class User extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
        $this->load->model('m_user');
    }
    public function index()
    {
        $data['title'] = "Data User";
        $query = $this->db->get("user");
        $data['records'] = $query->result();
        $this->load->view('admin/header', $data);
        $this->load->view('user/v_data_user', $data);
        $this->load->view('admin/footer', $data);
    }
    public function cari_user()
    {
        $keyword = $this->input->post('keyword');
        $data['records'] = $this->m_user->get_keyword($keyword);
        $data['title'] = "Data User";
        $this->load->view('admin/header', $data);
        $this->load->view('user/v_data_user', $data);
        $this->load->view('admin/footer', $data);
    }
    public function delete_user()
    {
        $user_id = $this->uri->segment('3');
        $this->db->delete('user', 'user_id =' . $user_id);
        redirect(base_url('user'));
    }
    public function v_add_user()
    {
        $data['title'] = "Tambah User";
        $this->load->view('admin/header', $data);
        $this->load->view('user/v_add_user', $data);
        $this->load->view('admin/footer', $data);
    }
    public function add_user()
    {
        $password = $this->input->post('password');
        $pwd = md5(htmlentities($this->input->post('password', TRUE)));
        $data = array(
            'username' => $this->input->post('username'),
            'password' => $pwd,
            'user_type' => $this->input->post('user_type')
        );
        $this->m_user->add_user($data);
        redirect(base_url('user'));
    }
    public function v_edit_user()
    {
        $user_id = $this->uri->segment('3');
        $data['title'] = "Edit user";
        $query = $this->db->get_where("user", array("user_id" => $user_id));
        $data['records'] = $query->result();
        $data['old_user_id'] = $user_id;
        $this->load->view('admin/header', $data);
        $this->load->view('user/v_edit_user', $data);
        $this->load->view('admin/footer', $data);
    }
    public function edit_user()
    {
        $password = $this->input->post('password');
        $pwd = md5(htmlentities($this->input->post('password', TRUE)));
        $data = array(
            'username' => $this->input->post('username'),
            'password' => $pwd,
            'user_type' => $this->input->post('user_type'),
        );
        $old_user_id = $this->input->post('user_id');
        $this->m_user->edit_user($data, $old_user_id);
        redirect(base_url('user'));
    }
}
