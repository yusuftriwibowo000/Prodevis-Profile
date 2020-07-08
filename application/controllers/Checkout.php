<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Checkout extends CI_Controller
{
    function __construct()
	{
        parent::__construct();
        $this->load->model('M_checkout');
        
    }
    
    public function index(){
        $dataPackage = $this->M_checkout->getData();
        $data = array(
            'title' => 'Checkout',
            'content' => 'checkout',
            'dataPackage' => $dataPackage,
        );
        $this->load->view('checkout' , $data);
	}
	
    
}
