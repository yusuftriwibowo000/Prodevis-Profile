<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Package extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('admin/m_package');
    }
    
    public function index(){
        $dataPackage = $this->m_package->getData();
        $data = array(
            'title' => 'List Package',
            'content' => 'admin/package',
            'dataPackage' => $dataPackage,
        );
        $this->load->view('admin/template' , $data);
    }
}