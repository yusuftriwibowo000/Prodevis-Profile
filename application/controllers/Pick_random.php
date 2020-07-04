<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pick_random extends CI_Controller
{
    function __construct()
	{
		parent::__construct();
		
		
    }
    public function index()
	{
		$data = array(
			'title' => 'Pick Random Name',
			'isi'	=> 'pick_random_name'
		);
		$this->load->view('pick_random_name', $data );

		
	}
}
