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

    public function add()
	{
		$package = $this->m_package;
		$package->save();
		$this->session->set_flashdata('success', 'Berhasil disimpan');
		redirect('Admin/Package');
	}

	public function edit()
	{	
		$id_package = $this->input->post('id_package');
		$name_package = $this->input->post('name_package');
        $description = $this->input->post('description');
        $price = $this->input->post('price');
        $this->m_package->edit($id_package,$name_package,$description,$price);
        $this->session->set_flashdata('success', 'Data Berhasil Di Update');
		redirect('Admin/Package');
	}

	public function delete($id = null)
	{
		if (!isset($id)) show_404();
		if ($this->m_package->delete($id)) {
			$this->session->set_flashdata('success', 'Data berhasil dihapus');
			redirect('Admin/Package');
		}
	}
}