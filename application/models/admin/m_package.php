<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_package extends CI_Model
{   
    private $_table = "tb_package";
    function getData(){
        $query = $this->db->query("SELECT * FROM tb_package");
        return $query->result();
    }

    public function save()
    {
        $post = $this->input->post();
        $this->name_package = $post["name_package"];
        $this->description = $post["description"];
        $this->price = $post["price"];
        $this->db->insert($this->_table, $this);
    }

    public function edit($id_package,$name_package,$description,$price){
        $query = $this->db->query("UPDATE tb_package SET id_package = '$id_package' , name_package
         = '$name_package' , description = '$description' , price = '$price' where id_package = $id_package");
    }

    public function delete($id)
    {
        return $this->db->delete($this->_table, array("id_package" => $id));
    }
}
