<?php
/* @ Author Githiri Kagwe

 This class is for the administrator,
   


*/

defined('BASEPATH') OR exit('No direct script access allowed');

class Search_engine extends CI_Controller {
public function __construct(){
		parent:: __construct();
	  $this->load->model('Search_Model');
    
    

        $data["message_display"]=null;
    $data["error_message"]=null;
    $data["logout_message"]=null;

	


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
           


    $this->load->view('includes/header_view');
    $this->load->view('includes/main_nav_view');
    $this->load->view('includes/search_result',$data);
    $this->load->view('includes/footer_view');
}

public function search(){



     $name = $this->input->post('search');




     if ($name !=null){

		     $data['hair']=$this->products_model->get_product($name);
		     $this->load->view('includes/header_view');
		     $this->load->view('includes/top_nav');
		    // $this->load->view('templates/search_view');
		     $this->load->view('templates/home_view',$data);
		     $this->load->view('includes/footer_view');
		}

     elseif ($name =null) {

	     	//$data['empty_search'] = "Nothing Found! Try searching nex exact names for example Sumsung phone";
	     	# code...
     	    $data['hair']=$this->products_model->loan();
	     	$this->load->view('includes/header_view');
	        $this->load->view('includes/top_nav');
	        $this->load->view('templates/search_view');
	        $this->load->view('templates/home_view',$data);
	        $this->load->view('includes/footer_view');
     }

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
      // echo "<li id='".$companyList[$i]['sector_name']."'><a href='$url'>".$companyList[$i]['report']." in ".$companyList[$i]['sector_name']." in ".$companyList[$i]['report']."</a></li>";
      /* echo "<li id='".$companyList[$i]['PRODUCT_NAME']."'>".$companyList[$i]['PRODUCT_CATEGORY_ID']."  ".$companyList[$i]['SUB_CATEGORY']."</li>"; " by".$companyList[$i]['NAME'].*/
      $i++;
    endforeach;
    echo "</ul>";
  }
  else{
  
  	echo "Sorry nothing found";
  }
} 




}
