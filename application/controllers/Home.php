<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	// this function loads the home page
	public function index()
	{
		$this->load->view('includes/header_view');
		$this->load->view('includes/main_nav_view');
		$this->load->view('includes/landing_page');
		$this->load->view('includes/sectors_view');
		$this->load->view('includes/partners_view');
		$this->load->view('includes/footer_view');
	}
}
