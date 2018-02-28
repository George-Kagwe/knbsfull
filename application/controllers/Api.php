<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Api extends CI_Controller {

	 public function __construct(){
		parent:: __construct();
		$this->load->model('Api_Model');
        
	}

	// this function loads the home page
	public function index()
	{

		$data['list']=$this->Api_Model->api();
		// var_dump($data); die();
		$this->load->view('includes/main_header_view');
		$this->load->view('includes/main_nav_view');
		$this->load->view('includes/api_list',$data);
		$this->load->view('includes/footer_view');
	}
}
