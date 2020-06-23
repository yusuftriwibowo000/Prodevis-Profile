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
            'content' => 'admin/auth_password',
            'user'  => $this->db->get_where('tb_login', ['username' => $this->session->userdata('username')])->row_array(),
        );

        $this->form_validation->set_rules('password_lama', 'Password lama', 'required|trim', array('required' => 'Password Lama belum diisi'));
        $this->form_validation->set_rules('password_baru1', 'Password baru', 'required|trim|min_length[6]|matches[password_baru2]', array('required' => 'Password Baru belum diisi', 'min_length' => 'Minimal 6 Karakter', 'matches' => 'Password yang anda konfirmasi salah'));
        $this->form_validation->set_rules('password_baru2', 'Konfirmasi password baru', 'required|trim|min_length[6]|matches[password_baru1]', array('required' => 'Konfirmasi Password kosong', 'min_length' => 'Minimal 6 Karakter', 'matches' => 'Korfirmasi Password salah'));

        if ($this->form_validation->run() == false) {
            $this->load->view("admin/template", $data);
        } else {
            $passwordLama = $this->input->post('password_lama');
            $passwordBaru = $this->input->post('password_baru1');
            if (!password_verify($passwordLama, $data['user']['password'])) {
                $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Salah</div>');
                redirect('Admin/Auth_password');
            } else {
                if ($passwordLama == $passwordBaru) {
                    $this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password Tidak Boleh Sama Dengan Password Lama</div>');
                    redirect("Admin/Auth_password");
                } else {
                    $passwordHash = password_hash($passwordBaru, PASSWORD_DEFAULT);
                    $this->db->set('password', $passwordHash);
                    $this->db->where('username', $this->session->userdata('username'));
                    $this->db->update('tb_login');
                    $this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Password Berhasil Diubah</div>');
                    redirect('Admin/Auth_password');
                }
            }
        }
    }
}