<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Apps extends CI_Controller
{
    function __construct()
	{
		parent::__construct();
		$this->load->model('M_apps');
		
    }
    public function index()
	{
		$data = array(
			'title' => 'Apps',
			'isi'		 => 'apps'
		);
		$this->load->view('apps', $data );

		
	}
}
