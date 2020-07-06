<?php
defined('BASEPATH') or exit('No direct script access allowed');

class App extends CI_Controller
{
    function __construct()
	{
		parent::__construct();
	
		
    }
    public function index()
	{
		$data = array(
			'title' => 'App',
			'isi'	=> 'app'
		);
		$this->load->view('app', $data );

		
	}
}
