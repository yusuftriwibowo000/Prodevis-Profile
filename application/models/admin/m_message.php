<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_message extends CI_Model
{   
    private $_table = "tb_contact";
    
    function getData(){
        $query = $this->db->query("SELECT * FROM tb_contact");
        return $query->result();
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_contact" => $id));
    }
}
