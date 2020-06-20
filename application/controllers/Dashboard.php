<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Dashboard extends CI_Controller
{
    function __construct()
	{
		parent::__construct();
		$this->load->model('M_dashboard');
		
    }
    public function index()
	{	
		$this->load->view('dashboard');
		
	}
	
}	
