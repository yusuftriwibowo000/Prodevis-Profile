<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    function __construct()
	{
		
		parent::__construct();
		$this->load->model('user/M_dashboard');
		cekloginuser();
    }
    
	public function index()
    {
		$user = $this->db->get_where('tb_user', ['id_user' => $id_user])->row_array();
        $data = array(
            'isi' => 'user/dashboard',
            'user'  => $this->db->get_where('tb_user', ['id_user' => $this->session->userdata('id_user')])->row_array(),
			'title' => 'user/dashboard'
			
		);
		
        $this->load->view('user/dashboard', $data);
    }
}	
