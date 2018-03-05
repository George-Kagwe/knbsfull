<?php
class Menu_Model extends CI_Model {



public function __construct(){
   parent::__construct(); 

}	

public function get_menu(){

    
       $sql = "SELECT distinct * FROM health_sectors
 where   embed_script !=''
 order by sector_name Asc;
 ;";

       $result=$this->db->query($sql);
       return $result->result();


}

}