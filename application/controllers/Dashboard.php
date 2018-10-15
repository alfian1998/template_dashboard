<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	function __construct() {
		parent::__construct();
		//
		// $this->config_model->validate_login();
		// $this->load->model('category_model');
	}

	public function index()
	{
		$this->load->view('template/header');
		$this->load->view('template/sidebar');
		$this->load->view('dashboard/index');
		$this->load->view('template/footer');
	}
}
