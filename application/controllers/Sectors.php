<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sectors extends CI_Controller {

	 public function __construct(){
		parent:: __construct();
		$this->load->model('Sectors_Model');
        $this->load->model('Charts_Model');
		$this->load->model('Sectors_Model');
		$this->load->model('Menu_Model');
		$this->load->model('Sectors_Model');
		$this->load->model('Menu_Model');
	}

	// this function loads the home page
	public function index()
	{

		// $list['list']=$this->Sectors_Model->api();
		//var_dump($data);die();
		// $count['count']=$this->Sectors_Model->count_sectors();

		$agriculture['agriculture']=$this->Sectors_Model->agriculture();
		$education['education']=$this->Sectors_Model->education();
		$governance['governance']=$this->Sectors_Model->governance();
		$energy['energy']=$this->Sectors_Model->energy();
		$labour['labour']=$this->Sectors_Model->labour();
		$land['land']=$this->Sectors_Model->land();
		$political['political']=$this->Sectors_Model->political();
        $public_finance['public_finance']=$this->Sectors_Model->public_finance();
        $public_health['public_health']=$this->Sectors_Model->public_health();
        $trade['trade']=$this->Sectors_Model->trade();
        $transport['transport']=$this->Sectors_Model->transport();
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
		  // var_dump($data);die();

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

		$dataa =array_merge(
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

		$title['title'] ="KNBS | API LIST";
		$this->load->view('includes/header_view',$title);
		$this->load->view('includes/menu',$dataa);
		$this->load->view('includes/Sectors_List_Cards',$data);
		$this->load->view('includes/footer_view');
	}

	public function data_list()
	{

		// $list['list']=$this->Sectors_Model->api();
		//var_dump($data);die();
		// $count['count']=$this->Sectors_Model->count_sectors();

		$agriculture['agriculture']=$this->Sectors_Model->agriculture();
		$education['education']=$this->Sectors_Model->education();
		$governance['governance']=$this->Sectors_Model->governance();
		$energy['energy']=$this->Sectors_Model->energy();
		$labour['labour']=$this->Sectors_Model->labour();
		$land['land']=$this->Sectors_Model->land();
		$political['political']=$this->Sectors_Model->political();
        $public_finance['public_finance']=$this->Sectors_Model->public_finance();
        $public_health['public_health']=$this->Sectors_Model->public_health();
        $trade['trade']=$this->Sectors_Model->trade();
        $transport['transport']=$this->Sectors_Model->transport();
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
		  // var_dump($data);die();

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

		$dataa =array_merge(
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

		$title['title'] ="KNBS | API LIST";
		$this->load->view('includes/header_view',$title);
		$this->load->view('includes/menu',$dataa);
		$this->load->view('includes/Sectors_Left_Taabs',$data);
		$this->load->view('includes/footer_view');
	}
}
