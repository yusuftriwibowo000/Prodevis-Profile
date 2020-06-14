<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Instagram extends CI_Controller
{
    function __construct()
	{
		parent::__construct();
		$this->load->model('M_instagram');
		
    }
    public function index()
	{
		$data = array(
			'title' => 'Instagram',
			'isi'		 => 'instagram'
		);
		$this->load->view('instagram', $data );

		
	}
}
