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
            $this->load->view('Dashboard');
        } else {
            $this->_login();
        }
    }

    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');
        $user = $this->db->get_where('tb_user', ['username' => $username])->row_array();
        //user ada
        if ($user) {
            if (password_verify($password, $user['password'])) {
                $data = [
                    'username' => $user['username'],
                ];
                $this->session->set_userdata($data);
                $this->session->set_flashdata('success', 'Login Success') ;
                redirect('Dashboard');
            } else {
                $this->session->set_flashdata('alert', 'Password Incorrect') ;
                redirect('Dashboard');
            }   
        } else {
            $this->session->set_flashdata('alert' , 'Username Not Registered');
            redirect('Dashboard');
        }
    }

    function register()
    {
		$this->form_validation->set_rules('username', 'Username', 'required|trim', array('required' => 'Username Belum Diisi'));
		$this->form_validation->set_rules('email', 'Email', 'required|trim', array('required' => 'Email Belum Diisi'));
        $this->form_validation->set_rules('password', 'Password', 'required|trim|min_length[6]|matches[password2]', array('required' => 'Password belum diisi', 'min_length' => 'Minimal 6 Karakter', 'matches' => 'Password yang anda konfirmasi salah'));
        $this->form_validation->set_rules('password2', 'Konfirmasi Password', 'required|trim|min_length[6]|matches[password]', array('required' => 'Konfirmasi Password kosong', 'min_length' => 'Minimal 6 Karakter', 'matches' => 'Korfirmasi Password salah'));
        if ($this->form_validation->run() == false) {
			$this->load->view('register');
        } else {
			$username = $this->input->post('username');
            $email = $this->input->post('email');
            $password = $this->input->post('password');
            $passwordHash = password_hash($password , PASSWORD_DEFAULT);
            $datadb = array(
				'username' => $username,
				'email'  => $email,
                'password'  => $passwordHash
            );
            $this->db->insert('tb_user',$datadb);
            $this->session->set_flashdata('success', 'Register  Success');
		    redirect('Dashboard');    
        }
    }
    public function logout(){
        $this->session->unset_userdata('username');
        redirect('Auth');
    }
}
