<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Datauser extends CI_Controller
{	
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('admin/m_datauser');
	}

	public function index()
	{	
		$dataUser = $this->m_datauser->getData();
		$data = array(
			'title' 	 => 'Data User',
			'content'     => 'admin/datauser',
			'dataUser'	=> $dataUser,
		);
		$this->load->view('admin/template', $data);
	}
	public function add()
	{
		$komentar = $this->M_komentar;
		$komentar->save();
		$this->session->set_flashdata('success', 'Berhasil disimpan');
		redirect(base_url('komentar'));
	}

	public function edit()
	{	
		$id_user = $this->input->post('id_user');
		$id_package = $this->input->post('id_package');
		$duration = $this->input->post('duration');
		$this->m_datauser->edit($id_user,$id_package,$duration);
		redirect('Admin/Datauser');
	}

	public function delete($id = null)
	{
		if (!isset($id)) show_404();
		if ($this->m_datauser->delete($id)) {
			$this->session->set_flashdata('success', 'Data berhasil dihapus');
			redirect('Admin/Datauser');
		}
	}
}
