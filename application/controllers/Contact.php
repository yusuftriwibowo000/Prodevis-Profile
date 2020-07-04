<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Contact extends CI_Controller
{
    function __construct()
	{
		parent::__construct();
		$this->load->model('M_contact');
		
    }
    public function index()
	{
		$data = array(
			'title' => 'Contact',
			'isi'	=> 'contact'
		);
		$this->load->view('contact', $data );

		
	}
	function add()
    {
		$this->form_validation->set_rules('name', 'Name', 'required|trim', array('required' => 'Name Belum Diisi'));
		$this->form_validation->set_rules('email', 'Email', 'required|trim', array('required' => 'Email Belum Diisi'));
        $this->form_validation->set_rules('subject', 'Subject', 'required|trim', array('required' => 'Subject Belum Diisi'));
        $this->form_validation->set_rules('message', 'Message', 'required|trim', array('required' => 'Message Belum Diisi'));
        if ($this->form_validation->run() == false) {
			$this->load->view('contact');
        } else {
			$name = $this->input->post('name');
            $email = $this->input->post('email');
			$subject = $this->input->post('subject');
			$message = $this->input->post('message');
            
            $datadb = array(
				'name' => $name,
				'email'  => $email,
				'subject' => $subject,
				'message'  => $message
               
            );
            $this->db->insert('tb_contact',$datadb);
            $this->session->set_flashdata('success', 'Send Success');
		    redirect('dashboard');    
        }
    }
}
