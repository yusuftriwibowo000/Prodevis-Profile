<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Help extends CI_Controller
{
    function __construct()
	{
		parent::__construct();
		$this->load->model('M_help');
		
    }
    public function index()
	{
		$data = array(
			'title' => 'Help',
			'isi'	=> 'help'
		);
		$this->load->view('help', $data);

		
	}
}
