<?php
defined('BASEPATH') or exit('No direct script access allowed');

class M_contact extends CI_Model
{
    private $_table = "tb_contact";
    public $id_contact;
    public $name;
    public $email;
    public $subject;
    public $message;
}
