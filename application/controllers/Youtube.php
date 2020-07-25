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
			'isi'	=> 'youtube_giveaway'
		);
		$this->load->view('youtube_giveaway', $data );
		
	}
	function youtube_giveaway()
	{
		$data = array(
			'title' => 'Youtube Giveaway',
			'isi'	=> 'youtube_comment'
		);
		// redirect('Youtube');
		$this->load->view('youtube_comment',$data);
	}
}
