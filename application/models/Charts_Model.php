<?php
class Charts_Model extends CI_Model {



public function __construct(){
   parent::__construct(); 

}	

public function sector($sector){

    // $sql="SELECT * FROM sectors s inner join  datasets ds  on s.id = ds.foreign_key where s.name ='$sector' 
    //     and ds.embed_code !=''";

    $sql = "SELECT * FROM  health_sectors 
    where sector_name='$sector'
    and embed_script !=''";

       $result=$this->db->query($sql);
       return $result->result();


}
public function chart($id){

    // $sql="SELECT * FROM sectors s inner join  datasets ds  on s.id = ds.foreign_key where s.name ='$sector' 
    //     and ds.embed_code !=''";

    $sql = "SELECT * FROM  health_sectors 
    where sector_id='$id'
    limit 1";

       $result=$this->db->query($sql);
       return $result->result();


}

public function data_request($data){
     $this->db->insert('data_requests',$data);
    return $this->db->insert_id();
}

}