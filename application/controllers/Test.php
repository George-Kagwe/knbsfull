<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Test extends CI_Controller {

	 public function __construct(){
		parent:: __construct();
		$this->load->model('Api_Model');
		$this->load->model('Menu_Model');
        
	}

	// this function loads the home page
	public function index()
	{

		// $list['list']=$this->Menu_Model->api();
		//var_dump($data);die();
		// $count['count']=$this->Menu_Model->count_sectors();

		$agriculture_county['agriculture_county']=
		$this->Menu_Model->agriculture_county();

		$agriculture_national['agriculture_national']=
		$this->Menu_Model->agriculture_national();


		$education_county['education_county']=$this->Menu_Model->education_county();
		$education_national['education_national']=$this->Menu_Model->education_national();

		$governance_county['governance_county']=
		$this->Menu_Model->governance_county();
		$governance_national['governance_national']=
		$this->Menu_Model->governance_national();

		$energy_county['energy_county']=$this->Menu_Model->energy_county();
		$energy_national['energy_national']=$this->Menu_Model->energy_national();

		$labour_national['labour_national']=$this->Menu_Model->labour_national();
		$labour_county['labour_county']=$this->Menu_Model->labour_county();

		$land_county['land_county']=$this->Menu_Model->land_county();
		$land_national['land_national']=$this->Menu_Model->land_national();

		$political_county['political_county']=
		$this->Menu_Model->political_county();
		$political_national['political_national']=
		$this->Menu_Model->political_national();

        $public_finance_county['public_finance_county']=
        $this->Menu_Model->public_finance_county();
         $public_finance_national['public_finance_national']=$this->Menu_Model->public_finance_national();

        $health_county['health_county']=
        $this->Menu_Model->public_health_county();

         $health_national['health_national']=
        $this->Menu_Model->public_health_national();

        $trade_county['trade_county']=$this->Menu_Model->trade_county();
        $trade_national['trade_national']=$this->Menu_Model->trade_national();
        $transport_county['transport_county']=$this->Menu_Model->transport_county();
         $transport_national['transport_national']=$this->Menu_Model->transport_national();
         $building_county['building_county']=$this->Menu_Model->building_county();
         $building_national['building_national']=$this->Menu_Model->building_national();
          $population_county['population_county']=$this->Menu_Model->population_county();
         $population_national['population_national']=$this->Menu_Model->population_national();

         $manufacturing_county['manufacturing_county']=$this->Menu_Model->manufacturing_county();
         $manufacturing_national['manufacturing_national']=$this->Menu_Model->manufacturing_national();

         $cpi_county['cpi_county']=$this->Menu_Model->cpi_county();
         $cpi_national['cpi_national']=$this->Menu_Model->cpi_national();
         
         $tourism_county['tourism_county']=$this->Menu_Model->tourism_county();
         $tourism_national['tourism_national']=$this->Menu_Model->tourism_national();
          $money_national['money_national']=$this->Menu_Model->money_national();
          $money_county['money_county']=$this->Menu_Model->money_county();

		$data =array_merge(
			$education_county,$education_national,			
			$agriculture_county,$agriculture_national,
			$governance_county,$governance_national,
			$energy_county,$energy_national,
			$labour_county,$labour_national,
			$land_county,$land_national,
			$political_county,$political_national,
			$public_finance_national,$public_finance_county,
			$health_county,$health_national,
			$trade_county,$trade_national,
			$transport_county,$transport_national,
			$building_county,$building_national,
			$population_county,$population_national,
			$manufacturing_county,$manufacturing_national,
			$cpi_county,$cpi_national,
		    $tourism_county,$tourism_national,
		    $money_county,$money_national

			);
		  //var_dump($data);die();
		$this->load->view('includes/header_view');
		$this->load->view('includes/menu',$data);
		$this->load->view('includes/landing_page');
		$this->load->view('includes/sectors_view');
		$this->load->view('includes/partners_view');
		$this->load->view('includes/chart_of_the_day');
		$this->load->view('includes/modals');
		$this->load->view('includes/footer_view');
	}
}
