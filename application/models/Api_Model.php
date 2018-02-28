<?php
class Api_Model extends CI_Model {



public function __construct(){
   parent::__construct(); 

}	

public function api(){

    
       $sql = "SELECT * FROM health_sectors
 where api_url !=''
 order by sector_name Asc;
 ;";

       $result=$this->db->query($sql);
       return $result->result();


}

}