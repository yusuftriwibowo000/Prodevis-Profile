<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Wheel_decide extends CI_Controller
{
    function __construct()
	{
		parent::__construct();
		
		
    }
    public function index()
	{
		$data = array(
			'title' => 'Wheel Decide',
			'isi'	=> 'wheel_decide'
		);
		$this->load->view('wheel_decide', $data );

		
	}
}
