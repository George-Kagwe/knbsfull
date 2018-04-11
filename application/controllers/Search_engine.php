<?php
/* @ Author Githiri Kagwe

 This class is for the administrator,
   


*/

defined('BASEPATH') OR exit('No direct script access allowed');

class Search_engine extends CI_Controller {
public function __construct(){
		parent:: __construct();
	  $this->load->model('Search_Model');
    $this->load->model('Charts_Model');
    $this->load->model('Api_Model');
    $this->load->model('Menu_Model');
    $this->load->model('Api_Model');
    $this->load->model('Menu_Model');

	


}
public function result(){
    
  
       $sector_id=$this->uri->segment(3);
              
       $sql = "SELECT *
             FROM health_sectors 
             
             where sector_id ='$sector_id'
             ";

                 $result=$this->db->query($sql);
              $data['embed']=$result->result();
          //var_dump($data);die();
           
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
 $title['title'] ="KNBS | HOME";

    $this->load->view('includes/header_view',$title);
   $this->load->view('includes/menu',$dataa);
    $this->load->view('includes/search_result',$data);
    $this->load->view('includes/footer_view');
}


public function autocomplete($a='p')
{
  $i = 0;
    $companyList = $this->Search_Model->searching($a);

    //var_dump($companyList);die();
 

  if(count($companyList) > 0){
    echo "<ul>";
    foreach($companyList as $comp):
 // $url =base_url() . "Yosoqo/shops/".$companyList[$i]['PRODUCT_NAME'] ;

      $level ="Search_engine/result";
    
    $url =base_url() . $level."/" .$companyList[$i]['sector_id'];
       
     echo "<li id='".$companyList[$i]['sector_name']."'><a href='$url'>".$companyList[$i]['report']." in ".$companyList[$i]['sector_name']."</a></li>";
     //   echo "<li>
     // <a href='$url'>"." View all in ".$companyList[$i]['sector_name']."</a></li>";
      $i++;
      
    endforeach;

    echo "</ul>";
  }
  else{
  
  	echo "Sorry nothing found";
  }
} 




}
