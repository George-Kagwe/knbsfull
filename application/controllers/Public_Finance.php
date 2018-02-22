<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Public_Finance extends CI_Controller {

	// this function loads the home page
	public function index()
	{
		
		$this->load->view('public_finance/allcharts');
	}
	
	
	public function money_banking(){
		$this->load->view('includes/header_view');
		$this->load->view('includes/main_nav_view');
		$this->load->view('public_finance/money_banking');
		
	}
	public function cdf_allocations(){
		$this->load->view('includes/header_view');
		$this->load->view('includes/main_nav_view');
		$this->load->view('public_finance/cdf_allocations');
		
	}
	public function county_budget_allocations(){
		$this->load->view('includes/header_view');
		$this->load->view('includes/main_nav_view');
		$this->load->view('public_finance/county_budget_allocations');
		
	}
	public function county_government_revenue(){
		$this->load->view('includes/header_view');
		$this->load->view('includes/main_nav_view');
		$this->load->view('public_finance/county_government_revenue');
		
	}
	public function county_government_expenditure(){
		$this->load->view('includes/header_view');
		$this->load->view('includes/main_nav_view');
		$this->load->view('public_finance/county_government_expenditure');
		
	}
	public function excise_revenenue_by_commodity(){
		$this->load->view('includes/header_view');
		$this->load->view('includes/main_nav_view');
		$this->load->view('public_finance/excise_revenue_by_commodity');
		
	}
	public function expenditure_classification(){
		$this->load->view('includes/header_view');
		$this->load->view('includes/main_nav_view');
		$this->load->view('public_finance/classification_of_gov_expenditure');
		
	}
	public function revenue_classification(){
		$this->load->view('includes/header_view');
		$this->load->view('includes/main_nav_view');
		$this->load->view('public_finance/classifcation_of_govt_revenue');
		
	}
	public function expenditure_by_purpose(){
		$this->load->view('includes/header_view');
		$this->load->view('includes/main_nav_view');
		$this->load->view('public_finance/governement_expenses_by_purpose');
		
	}
	public function outstanding_debt_by_country(){
		$this->load->view('includes/header_view');
		$this->load->view('includes/main_nav_view');
		$this->load->view('public_finance/outstanding_debt_by_Country');
		
	}
	public function outstanding_debt_by_multilateral_lenders(){
	
		$this->load->view('includes/header_view');
		$this->load->view('includes/main_nav_view');
		$this->load->view('public_finance/outstandng_debt_by_multilateral_lenders');
		
	}



    
}
