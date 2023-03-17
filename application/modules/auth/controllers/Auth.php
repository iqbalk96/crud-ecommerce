<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('auth_models');
	}

	public function index()
	{
		$this->load->view('auth/Auth');
	}

	function doLogin()
	{
		if ($this->input->post()) {
			$loginuser = $this->auth_models->getLogin();
			if ($loginuser != '') {
				$data_session = array(
					'isLogin' => TRUE,
					'username' => $loginuser->username,
					'password' => $loginuser->password,
					'fullname' => $loginuser->fullname,
					'level' => $loginuser->level,
				);
				$this->session->set_userdata($data_session);
				redirect('dashboard');
			} else {
				$this->session->set_flashdata('message', 'Sorry, wrong username or password.');
				redirect('auth');
			}
		}
	}

	function logout()
	{
		$this->session->sess_destroy();
		redirect('auth');
	}


}
