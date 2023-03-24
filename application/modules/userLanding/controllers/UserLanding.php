<?php
defined('BASEPATH') or exit('No direct script access allowed');

class UserLanding extends CI_Controller
{
	public function __construct()
	{
		parent::__construct();
		$this->load->model('user_landing_models');
	}

	public function index()
	{
		$data['products'] = $this->user_landing_models->read_all_product();
		$this->load->view('userLanding/Index', $data);
	}
}
