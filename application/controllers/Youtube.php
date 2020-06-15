<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Youtube extends CI_Controller
{
    function __construct()
	{
		parent::__construct();
		$this->load->model('M_youtube');
		
    }
    public function index()
	{
		$data = array(
			'title' => 'Youtube',
			'isi'	=> 'youtube'
		);
		$this->load->view('youtube_giveaway', $data );

		
	}
}
