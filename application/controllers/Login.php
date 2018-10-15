<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	function __construct() {
		parent::__construct();
		//
		// $this->config_model->validate_login();
		// $this->load->model('category_model');
	}

	public function index()
	{
		$this->load->view('template/header-login');
		$this->load->view('login/index');
		$this->load->view('template/footer-login');
	}
}
