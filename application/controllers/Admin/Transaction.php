<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Transaction extends CI_Controller {
    function __construct(){
        parent::__construct();
        $this->load->model('admin/m_transaction');
    }
    
    public function index(){
        $dataTransaction = $this->m_transaction->getData();
        $data = array(
            'title' => 'Transaction',
            'content' => 'admin/transaction',
            'dataTransaction' => $dataTransaction,
        );
        $this->load->view('admin/template' , $data);
    }
}