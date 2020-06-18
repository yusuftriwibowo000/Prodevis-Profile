<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_datauser extends CI_Model
{   
    private $_table = "tb_user";
    
    function getData(){
        $query = $this->db->query("SELECT * FROM tb_user LEFT JOIN tb_transaction USING(id_user) LEFT JOIN tb_package USING(id_package)");
        return $query->result();
    }

    public function edit($id_user,$id_package,$duration){
        $query = $this->db->query("UPDATE tb_datauser SET id_package = $id_package , duration
         = $duration where id_user = $id_user");
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_user" => $id));
    }
}
