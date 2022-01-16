<?php
class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->library('session');
    }
    public function index()
    {
        $this->load->view('login');
    }
    public function wrong_pass()
    {
        $this->load->view('errors/wrong_password');
    }
    public function login()
    {
        $this->load->model('m_login');
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $where = array('username' => $username, 'password' => md5($password));
        $cek = $this->m_login->cek_login($username, $password);
        if ($cek->num_rows() > 0) {
            $user = $cek->row_array();
            if ($user['user_type'] == 'admin') {
                $data['title'] = 'Admin Page';
                $data_session = array('username' => $username, 'level' => 'admin');
                $this->session->set_userdata($data_session);
                redirect(base_url('admin'), $data);
            } else {
                $data_session = array('username' => $username, 'level' => 'user');
                $this->session->set_userdata($data_session);
                redirect(base_url('w_user'));
            }
        } else {
            redirect(base_url('auth/wrong_pass'));
        }
    }
    function logout()
    {
        $this->session->sess_destroy();
        redirect(base_url());
    }
}
