<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Search extends CI_Controller {
 public function __construct(){
		parent:: __construct();
		$this->load->model('Api_Model');
        
	}
	public function index()
	{

		   // $this->load->view('includes/overlay');
		$this->load->view('includes/main_header_view');
		$this->load->view('includes/main_nav_view');
		$this->load->view('includes/landing_page');
		$this->load->view('includes/sectors_view');
		$this->load->view('includes/partners_view');
		$this->load->view('includes/chart_of_the_day');
		$this->load->view('includes/modals');
		$this->load->view('includes/footer_view');
	}
}
