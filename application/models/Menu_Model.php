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

public function count_sectors(){

	$sql ="select * from sectors;";



	$result=$this->db->query($sql);
       return $result->result();
}

public function Agriculture_county(){
   $sql ="
   Select 
   * from 
   health_sectors 
   where    sector_name ='Agriculture'
   and coverage ='county'
   and embed_script !=''";


	$result=$this->db->query($sql);
       return $result->result();
}
public function Agriculture_national(){
   $sql ="
   Select 
   * from 
   health_sectors 
   where api_url !='' 
   and  sector_name ='Agriculture'
   and coverage ='national'
   and embed_script !=''";


	$result=$this->db->query($sql);
       return $result->result();
}

public function Building_county(){
   $sql ="
  Select 
   * from 
   health_sectors 
   where embed_script!='' 
   and  sector_name ='Building and Construction'
   and coverage='county'";

   
	$result=$this->db->query($sql);
       return $result->result();
}
public function Building_national(){
   $sql ="
  Select 
   * from 
   health_sectors 
   where embed_script!='' 
   and  sector_name ='Building and Construction'
   and coverage='national'";

   
	$result=$this->db->query($sql);
       return $result->result();
}


public function Cpi_county(){
   $sql ="
   Select 
   * from 
   health_sectors 
   where embed_script!='' 
   and  sector_name ='CPI'
   and coverage='county'";

   
	$result=$this->db->query($sql);
       return $result->result();
}
public function Cpi_national(){
   $sql ="
   Select 
   * from 
   health_sectors 
   where embed_script!='' 
   and  sector_name ='CPI'
   and coverage='national'";

   
	$result=$this->db->query($sql);
       return $result->result();
}


public function Education_county(){
   $sql ="
   Select 
   * from 
   health_sectors 
   where embed_script!='' 
   and  sector_name ='Education'
   and coverage='county'
   ";

   
	$result=$this->db->query($sql);
       return $result->result();
}

public function Education_national(){
   $sql ="
   Select 
   * from 
   health_sectors 
   where embed_script!='' 
   and  sector_name ='Education'
   and coverage='national'";

   
	$result=$this->db->query($sql);
       return $result->result();
}
public function Energy_county(){
   $sql ="
   Select 
   * from 
   health_sectors 
   where embed_script!='' 
   and  sector_name ='Energy'
   and coverage='county'";

   
	$result=$this->db->query($sql);
       return $result->result();
}
public function Energy_national(){
   $sql ="
   Select 
   * from 
   health_sectors 
   where embed_script!='' 
   and  sector_name ='Energy'
   and coverage='national'";

   
	$result=$this->db->query($sql);
       return $result->result();
}
public function governance_county(){
   $sql ="
  Select 
   * from 
   health_sectors 
   where embed_script!='' 
   and  sector_name ='Governance'
   and coverage='county'";

   
	$result=$this->db->query($sql);
       return $result->result();
}
public function governance_national(){
   $sql ="
  Select 
   * from 
   health_sectors 
   where embed_script!='' 
   and  sector_name ='Governance'
   and coverage='national'
   limit 8";

   
	$result=$this->db->query($sql);
       return $result->result();
}
public function labour_county(){
   $sql ="
  Select 
   * from 
   health_sectors 
   where embed_script!='' 
   and  sector_name ='labour'
   and coverage='county'";

   
	$result=$this->db->query($sql);
       return $result->result();
}
public function labour_national(){
   $sql ="
  Select 
   * from 
   health_sectors 
   where embed_script!='' 
   and  sector_name ='labour'
   and coverage='national'";

   
	$result=$this->db->query($sql);
       return $result->result();
}
public function land_county(){
   $sql ="
  Select 
   * from 
   health_sectors 
   where embed_script!='' 
   and  sector_name ='Environment and Natural Resources'
   and coverage='county'";

   
	$result=$this->db->query($sql);
       return $result->result();
}
public function land_national(){
   $sql ="
  Select 
   * from 
   health_sectors 
   where embed_script!='' 
   and  sector_name ='Environment and Natural Resources'
   and coverage='national ' limit 8";

   
	$result=$this->db->query($sql);
       return $result->result();
}
public function manufacturing_county(){
   $sql ="
  Select 
   * from 
   health_sectors 
   where embed_script !='' 
   and coverage ='county'
   and sector_name
   ='manufacturing'
  ;";

   
	$result=$this->db->query($sql);
       return $result->result();
}
public function manufacturing_national(){
   $sql ="
  Select 
   * from 
   health_sectors 
   where embed_script !=''
    and coverage ='national' 
   and sector_name
   ='manufacturing'
  ;";

   
	$result=$this->db->query($sql);
       return $result->result();
}
public function population_national(){
   $sql ="
  Select 
   * from 
   health_sectors 
   where embed_script !='' 
   and coverage ='national'
   and sector_name
   ='Population and Vital Statistics'
  ;";

   
	$result=$this->db->query($sql);
       return $result->result();
}
public function population_county(){
   $sql ="
  Select 
   * from 
   health_sectors 
   where embed_script !=''
    and coverage ='county' 
   and sector_name
   ='Population and Vital Statistics'
  ;";

   
	$result=$this->db->query($sql);
       return $result->result();
}
public function political_national(){
   $sql ="
  Select 
   * from 
   health_sectors 
   where embed_script !='' 
   and coverage ='national'
   and sector_name
   ='Political and Administrative Units'
  ;";

   
	$result=$this->db->query($sql);
       return $result->result();
}
public function political_county(){
   $sql ="
  Select 
   * from 
   health_sectors 
   where embed_script !=''
    and coverage ='county' 
   and sector_name
   ='Political and Administrative Units'
  ;";

   
	$result=$this->db->query($sql);
       return $result->result();
}
public function public_finance_county(){
   $sql ="
  Select 
   * from 
   health_sectors 
   where sector_name  ='Public Finance'
   and embed_script !=''
   and coverage ='county'";

   
	$result=$this->db->query($sql);
       return $result->result();
}

public function public_finance_national(){
   $sql ="
  Select 
   * from 
   health_sectors 
   where sector_name  ='Public Finance'
   and embed_script !=''
   and coverage ='national'";

   
	$result=$this->db->query($sql);
       return $result->result();
}



public function public_health_national(){
   $sql ="
   Select 
   * from 
   health_sectors 
   where embed_script!='' 
   and  sector_name ='Public Health'
   and coverage='national'";

   
	$result=$this->db->query($sql);
       return $result->result();
}
public function public_health_county(){
   $sql ="
   Select 
   * from 
   health_sectors 
   where embed_script!='' 
   and  sector_name ='Public Health'
   and coverage='county'";

   
	$result=$this->db->query($sql);
       return $result->result();
}
public function tourism_national(){
   $sql ="
  Select 
   * from 
   health_sectors 
   where embed_script !=''
   and coverage='national' 
   and sector_name
   ='Tourism'
  ;";

   
	$result=$this->db->query($sql);
       return $result->result();

}
public function tourism_county(){
   $sql ="
  Select 
   * from 
   health_sectors 
   where api_url !='' 
   and coverage='county'
   and sector_name
   ='Tourism'
  ;";

   
	$result=$this->db->query($sql);
       return $result->result();

}
public function trade_national(){
   $sql ="
  Select 
   * from 
   health_sectors 
   where embed_script !=''
   and coverage='national' 
   and sector_name
   ='Trade and Commerce'
  ;";

   
	$result=$this->db->query($sql);
       return $result->result();

}
public function trade_county(){
   $sql ="
  Select 
   * from 
   health_sectors 
   where api_url !='' 
   and coverage='county'
   and sector_name
   ='Trade and Commerce'
  ;";

   
	$result=$this->db->query($sql);
       return $result->result();

}
public function transport_county(){
   $sql ="
  Select 
   * from 
   health_sectors 
   where embed_script !=''
   and coverage='county' 
   and sector_name
   ='Transport and Communication'
  ;";

   
	$result=$this->db->query($sql);
       return $result->result();

}
public function transport_national(){
   $sql ="
  Select 
   * from 
   health_sectors 
   where embed_script !=''
   and coverage='national' 
   and sector_name
   ='Transport and Communication'
  ;";

   
	$result=$this->db->query($sql);
       return $result->result();

}

public function money_county(){
   $sql ="
  Select 
   * from 
   health_sectors 
   where embed_script !=''
   and coverage='county' 
   and sector_name
   ='Money and Banking'
  ;";

   
	$result=$this->db->query($sql);
       return $result->result();

}
public function money_national(){
   $sql ="
  Select 
   * from 
   health_sectors 
   where embed_script !=''
   and coverage='national' 
   and sector_name
   ='Money and Banking'
  ;";

   
	$result=$this->db->query($sql);
       return $result->result();

}

}