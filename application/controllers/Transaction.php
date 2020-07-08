<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaction extends CI_Controller
{
    function __construct()
	{
        parent::__construct();
        $this->load->model('M_transaction');
        
    }
    
    public function index(){
        $dataPackage = $this->M_transaction->getData();
        $data = array(
            'title' => 'Transaction',
            'content' => 'transaction',
            'dataPackage' => $dataPackage,
        );
        $this->load->view('transaction' , $data);
	}
	
    
}
