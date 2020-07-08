<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Pricing extends CI_Controller
{
    function __construct()
	{
	    parent::__construct();
        $this->load->model('M_pricing');
    }
    
    public function index(){
        $dataPackage = $this->M_pricing->getData();
        $data = array(
            'title' => 'Pricing',
            'content' => 'pricing',
            'dataPackage' => $dataPackage,
        );
        $this->load->view('pricing' , $data);
	}
	
    
}
