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
			'isi'		 => 'contact'
		);
		$this->load->view('contact', $data );

		
	}
}
