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

		// $list['list']=$this->Api_Model->api();
		//var_dump($data);die();
		// $count['count']=$this->Api_Model->count_sectors();

		$agriculture['agriculture']=$this->Api_Model->agriculture();
		$education['education']=$this->Api_Model->education();
		$governance['governance']=$this->Api_Model->governance();
		$energy['energy']=$this->Api_Model->energy();
		$labour['labour']=$this->Api_Model->labour();
		$land['land']=$this->Api_Model->land();
		$political['political']=$this->Api_Model->political();
        $public_finance['public_finance']=$this->Api_Model->public_finance();
        $public_health['public_health']=$this->Api_Model->public_health();
        $trade['trade']=$this->Api_Model->trade();
        $transport['transport']=$this->Api_Model->transport();
		$data =array_merge(
			$education,
			$agriculture,
			$governance,
			$energy,
			$labour,
			$land,
			$political,
			$public_finance,
			$public_health,
			$trade,
			$transport);
		  //var_dump($data);die();
		$this->load->view('includes/header_view');
		$this->load->view('includes/main_nav_view');
		$this->load->view('includes/api_list',$data);
		$this->load->view('includes/footer_view');
	}
}
