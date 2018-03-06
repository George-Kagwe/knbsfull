<?php
class Search_Model extends CI_Model {



public function __construct(){
   parent::__construct(); 

}	

public function search($search){

    $sql="SELECT * FROM health_sectors 
    where $search like 
    ";

       $result=$this->db->query($sql);
       return $result->result();


}
public function searching($name){

       $sql = "SELECT  *
             FROM health_sectors 
             

             WHERE sector_name like '%$name%'
              OR 
              report like '%$name%'
                 and embed_script !=''           
              ";

       $query=$this->db->query($sql);
         $companies = array();

        $i = 0;
        if($query->num_rows() > 0)
        {
            foreach ($query->result() as $row)
            {
                $companies[$i]['sector_name'] = $row->sector_name;
                $companies[$i]['report'] = $row->report;
                  $companies[$i]['sector_id'] = $row->sector_id;
               
                $i++;
            }


        }

            return $companies;
       //return $result->result();
}

}