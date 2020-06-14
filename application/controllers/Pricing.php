<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pricing extends CI_Controller
{
    function __construct()
	{
		parent::__construct();
		$this->load->model('M_pricing');
		
    }
    public function index()
	{
		
		
		$data = array(
			'title' => 'Pricing',
			'isi'	=> 'pricing'
		);
		$this->load->view('pricing', $data);

		
	}
}
