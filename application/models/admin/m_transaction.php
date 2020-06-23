<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_transaction extends CI_Model
{
    function getData(){
        $query = $this->db->query("SELECT * FROM tb_transaction JOIN tb_user USING(id_user) JOIN tb_package USING(id_package)");
        return $query->result();
    }
}
