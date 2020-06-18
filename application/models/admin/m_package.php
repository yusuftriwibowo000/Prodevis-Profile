<?php
defined('BASEPATH') or exit('No direct script access allowed');

class m_package extends CI_Model
{
    function getData(){
        $query = $this->db->query("SELECT * FROM tb_package");
        return $query->result();
    }
}
