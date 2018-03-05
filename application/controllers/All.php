<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class All extends CI_Controller {

	 public function __construct(){
		parent:: __construct();
		$this->load->model('Charts_Model');
        
	}

	// this function loads the home page
	public function public_finance()
	{    
		$sector="Public Finance";

		$title['title'] =$sector;

		$data['embed']=$this->Charts_Model->sector($sector);
		 //var_dump($data); die();
		$this->load->view('includes/header_view',$title);
		$this->load->view('includes/main_nav_view');
		$this->load->view('includes/all_charts',$data);
		$this->load->view('includes/footer_view');
	}

	// this function loads the home page
	public function Education()
	{    
		$sector="Education";
        $title['title'] =$sector;
		$data['embed']=$this->Charts_Model->sector($sector);
		 // var_dump($data); die();
		$this->load->view('includes/header_view',$title);
		$this->load->view('includes/main_nav_view');
		$this->load->view('includes/all_charts',$data);
		$this->load->view('includes/footer_view');
	}
	public function CPI()
	{    
		$sector="CPI";
        $title['title'] =$sector;
		$data['embed']=$this->Charts_Model->sector($sector);
		 // var_dump($data); die();
		$this->load->view('includes/header_view',$title);
		$this->load->view('includes/main_nav_view');
		$this->load->view('includes/all_charts',$data);
		$this->load->view('includes/footer_view');
	}
	public function Population()
	{    
		$sector="Population and Vital Statistics";
        $title['title'] =$sector;
		$data['embed']=$this->Charts_Model->sector($sector);
		 // var_dump($data); die();
		$this->load->view('includes/header_view',$title);
		$this->load->view('includes/main_nav_view');
		$this->load->view('includes/all_charts',$data);
		$this->load->view('includes/footer_view');
	}

	public function Agriculture()
	{    
		$sector="Agriculture";
        $title['title'] =$sector;
		$data['embed']=$this->Charts_Model->sector($sector);
		 // var_dump($data); die();
		$this->load->view('includes/header_view',$title);
		$this->load->view('includes/main_nav_view');
		$this->load->view('includes/all_charts',$data);
		$this->load->view('includes/footer_view');
	}

	public function Governance()
	{    
		$sector="Governance";
        $title['title'] =$sector;
		$data['embed']=$this->Charts_Model->sector($sector);
		 // var_dump($data); die();
		$this->load->view('includes/header_view',$title);
		$this->load->view('includes/main_nav_view');
		$this->load->view('includes/all_charts',$data);
		$this->load->view('includes/footer_view');
	}

	public function Health()
	{    
		$sector="Health";
        $title['title'] =$sector;
		$data['embed']=$this->Charts_Model->sector($sector);
		 // var_dump($data); die();
		$this->load->view('includes/header_view',$title);
		$this->load->view('includes/main_nav_view');
		$this->load->view('includes/all_charts',$data);
		$this->load->view('includes/footer_view');
	}

	public function labour()
	{    
		$sector="Labour";
        $title['title'] =$sector;
		$data['embed']=$this->Charts_Model->sector($sector);
		 // var_dump($data); die();
		$this->load->view('includes/header_view',$title);
		$this->load->view('includes/main_nav_view');
		$this->load->view('includes/all_charts',$data);
		$this->load->view('includes/footer_view');
	}

	public function Land()
	{    
		$sector="Land and Climate";
        $title['title'] =$sector;
		$data['embed']=$this->Charts_Model->sector($sector);
		 // var_dump($data); die();
		$this->load->view('includes/header_view',$title);
		$this->load->view('includes/main_nav_view');
		$this->load->view('includes/all_charts',$data);
		$this->load->view('includes/footer_view');
	}

	public function manufacturing()
	{    
		$sector="Manufacturing";
        $title['title'] =$sector;
		$data['embed']=$this->Charts_Model->sector($sector);
		 // var_dump($data); die();
		$this->load->view('includes/header_view',$title);
		$this->load->view('includes/main_nav_view');
		$this->load->view('includes/all_charts',$data);
		$this->load->view('includes/footer_view');
	}
}
