<?php
defined('BASEPATH') or exit('No direct script access allowed');
class User_landing_models extends CI_Model
{

	function read_all_product()
    {
        $sql = $this->db->get('barang');
        return $sql->result();
    }
}
