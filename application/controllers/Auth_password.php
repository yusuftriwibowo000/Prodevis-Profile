<?php

class Auth_password extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->library('form_validation');
    }
    function index() 
    {
        $data = array(
            'title' => 'Ganti Password',
            'content' => 'auth_password',
            'user'  => $this->db->get_where('tb_user', ['username' => $this->session->userdata('username')])->row_array(),
        );

        $this->form_validation->set_rules('password_lama', 'Password lama', 'required|trim', array('required' => 'Old Password has not been filled'));
        $this->form_validation->set_rules('password_baru1', 'Password baru', 'required|trim|min_length[6]|matches[password_baru2]', array('required' => 'New Password not yet filled', 'min_length' => 'At least 6 characters', 'matches' => 'The password you confirmed is incorrect'));
        $this->form_validation->set_rules('password_baru2', 'Konfirmasi password baru', 'required|trim|min_length[6]|matches[password_baru1]', array('required' => 'Confirm Password is empty', 'min_length' => 'At least 6 characters', 'matches' => 'Incorrect Password Confirmation'));

        if ($this->form_validation->run() == false) {
            $this->load->view("auth_password", $data);
        } else {
            $passwordLama = $this->input->post('password_lama');
            $passwordBaru = $this->input->post('password_baru1');
            if (!password_verify($passwordLama, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Wrong</div>');
                redirect('auth_password');
            } else {
                if ($passwordLama == $passwordBaru) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Passwords May Not Be the Same as Old Passwords</div>');
                    redirect("auth_password");
                } else {
                    $passwordHash = password_hash($passwordBaru, PASSWORD_DEFAULT);
                    $this->db->set('password', $passwordHash);
                    $this->db->where('username', $this->session->userdata('username'));
                    $this->db->update('tb_user');
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password Successfully Changed</div>');
                    redirect('auth_password');
                }
            }
        }
    }
}