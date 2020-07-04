<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Roll_dice extends CI_Controller
{
    function __construct()
	{
		parent::__construct();
		
		
    }
    public function index()
	{
		$data = array(
			'title' => 'Roll Dice',
			'isi'	=> 'roll_dice'
		);
		$this->load->view('roll_dice', $data );

		
	}
}
