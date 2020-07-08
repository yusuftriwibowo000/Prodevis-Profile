<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_transaction extends CI_Model
{
    private $_table = "tb_package";
    function getData(){
        $query = $this->db->query("SELECT * FROM tb_package");
        return $query->result();
    }

}
