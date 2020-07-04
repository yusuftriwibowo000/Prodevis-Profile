<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Message extends CI_Controller
{	
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('admin/m_message');
	}

	public function index()
	{	
		$dataMessage = $this->m_message->getData();
		$data = array(
			'title' 	 => 'Message',
			'content'     => 'admin/message',
			'dataMessage'	=> $dataMessage,
		);
		$this->load->view('admin/template', $data);
	}

	public function delete($id = null)
	{
		if (!isset($id)) show_404();
		if ($this->m_message->delete($id)) {
			$this->session->set_flashdata('success', 'Data berhasil dihapus');
			redirect('Admin/Message');
		}
	}
}
