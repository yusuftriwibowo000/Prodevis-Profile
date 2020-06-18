<?php

class Auth extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        if ($this->form_validation->run() == false) {
            $this->load->view('admin/auth');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user = $this->db->get_where('tb_login', ['username' => $username])->row_array();
        //user ada
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'username' => $user['username'],
                ];
                $this->session->set_userdata($data);
                redirect('admin/Datauser');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Wrong Password</div>');
                redirect('admin/auth');
            }
        } else {
            $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Username Belum Terdaftar</div>');
            redirect('admin/auth');
        }
    }

    function register()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim', array('required' => 'Username Belum Diisi'));
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]|matches[password2]', array('required' => 'Password belum diisi', 'min_length' => 'Minimal 6 Karakter', 'matches' => 'Password yang anda konfirmasi salah'));
        $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'required|trim|min_length[6]|matches[password]', array('required' => 'Konfirmasi Password kosong', 'min_length' => 'Minimal 6 Karakter', 'matches' => 'Korfirmasi Password salah'));
        if ($this->form_validation->run() == false) {
            $data = array (
                'title' => 'Registrasi',
                'content' => 'admin/register' 
            );
            $this->load->view('admin/template', $data);
        } else {
            $username = $this->input->post('username');
            $password = $this->input->post('password');
            $passwordHash = password_hash($password , PASSWORD_DEFAULT);
            $datadb = array(
                'username'  => $username,
                'password'  => $passwordHash
            );
            $this->db->insert('tb_login',$datadb);
            $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Data Berhasil Ditambahkan</div>');
		    redirect('Admin/Auth/register');    
        }
    }
    function logout()
    {
        $this->session->unset_userdata('username');
        redirect('admin/auth');
    }
}
