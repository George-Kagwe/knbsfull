<?php
class Charts_Model extends CI_Model {



public function __construct(){
   parent::__construct(); 

}	

public function sector($sector){

    $sql="SELECT * FROM sectors s inner join  datasets ds  on s.id = ds.foreign_key where s.name ='$sector' 
        and ds.embed_code !=''";

       $result=$this->db->query($sql);
       return $result->result();


}

}