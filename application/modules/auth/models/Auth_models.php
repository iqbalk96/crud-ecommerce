<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Auth_models extends CI_Model
{

	function getLogin()
	{
		$this->db->where('username', $this->input->post('username'));
		$this->db->where('password', md5($this->input->post('password')));
		$query = $this->db->get('users');
		if ($query->num_rows() == 1)
			return $query->row();
		else
			return '';
	}
}
