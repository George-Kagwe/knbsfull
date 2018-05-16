<?php
class Sectors_Model extends CI_Model {



public function __construct(){
   parent::__construct(); 

} 

public function api(){

    
       $sql = "SELECT * FROM datasets
 ;";

       $result=$this->db->query($sql);
       return $result->result();


}

public function count_sectors(){

  $sql ="select * from sectors;";



  $result=$this->db->query($sql);
       return $result->result();
}

public function Agriculture(){
   $sql ="
   Select 
   * from 
   health_sectors 
   where embed_script !='' 
   and  sector_name ='Agriculture' order by coverage asc";


  $result=$this->db->query($sql);
       return $result->result();
}

public function Buildng(){
   $sql ="
   Select 
   * from 
   health_sectors 
   where embed_script !='' 
   and  sector_name ='Agriculture'";

   
  $result=$this->db->query($sql);
       return $result->result();
}


public function CPI(){
   $sql ="
   Select 
   * from 
   health_sectors 
   where embed_script !='' 
   and  sector_name ='Agriculture'";

   
  $result=$this->db->query($sql);
       return $result->result();
}


public function Education(){
   $sql ="
   Select 
   * from 
   health_sectors 
   where embed_script !='' 
   and  sector_name ='Education' order by coverage Asc";

   
  $result=$this->db->query($sql);
       return $result->result();
}
public function Energy(){
   $sql ="
   Select 
   * from 
   health_sectors 
   where embed_script !='' 
   and  sector_name ='Energy'";

   
  $result=$this->db->query($sql);
       return $result->result();
}
public function governance(){
   $sql ="
  Select 
   * from 
   health_sectors 
   where embed_script !='' 
   and sector_name
   ='Governance' order by coverage asc
  ;";

   
  $result=$this->db->query($sql);
       return $result->result();
}
public function labour(){
   $sql ="
  Select 
   * from 
   health_sectors 
   where embed_script !='' 
   and sector_name
   ='Labor'
  ;";

   
  $result=$this->db->query($sql);
       return $result->result();
}
public function land(){
   $sql ="
  Select 
   * from 
   health_sectors 
   where embed_script !='' 
   and sector_name
   ='environment and natural resources' order by coverage asc
  ;";

   
  $result=$this->db->query($sql);
       return $result->result();
}
public function political(){
   $sql ="
  Select 
   * from 
   health_sectors 
   where embed_script !='' 
   and sector_name
   ='Political and Administrative Units'
  ;";

   
  $result=$this->db->query($sql);
       return $result->result();
}
public function public_finance(){
   $sql ="
  Select 
   * from 
   health_sectors 
   where embed_script !='' 
   and sector_name
   ='Public Finance'
  ;";

   
  $result=$this->db->query($sql);
       return $result->result();
}
public function public_health(){
   $sql ="
  Select 
   * from 
   health_sectors 
   where embed_script !='' 
   and sector_name
   ='Public Health'
  ;";

   
  $result=$this->db->query($sql);
       return $result->result();
}
public function Trade(){
   $sql ="
  Select 
   * from 
   health_sectors 
   where embed_script !='' 
   and sector_name
   ='Trade and Commerce'
  ;";

   
  $result=$this->db->query($sql);
       return $result->result();

}
public function transport(){
   $sql ="
  Select 
   * from 
   health_sectors 
   where embed_script !='' 
   and sector_name
   ='Transport and Communication'
  ;";

   
  $result=$this->db->query($sql);
       return $result->result();

}
}