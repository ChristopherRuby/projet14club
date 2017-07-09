<?php
class Edition_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
 /*
  * 	INSERT STATEMENT
  */       
        public function insert_into_table($arg)
        {
            $this->db->query("INSERT INTO table_test(\"ID\", name) VALUES (nextval('seq_id'), 'test')");
        }
        
		public function insert_new_type_abo($arg)
		{
			$this->db->query("INSERT INTO type_abonnement (\"ID_TYPE_ABO\", \"LIBELLE\") VALUES (nextval('seq_abonnement'), '$arg')");
		}

		public function insert_new_banque($arg)
		{
			$this->db->query("INSERT INTO banque (\"ID_BANQUE\", \"LIBELLE\") VALUES (nextval('seq_banque'), '$arg')");
		}
/*
 * 
 * 		SELECT STATEMENT
 * 
 */		
		public function get_all_type_abonnement($with_condition=true)
		{
			$data=array();
			$condition="";
			if($with_condition==true)
			{
				$condition=" where \"ENABLE\"=true ";
			}
			$query=$this->db->query("SELECT \"ID_TYPE_ABO\", \"LIBELLE\"
  								FROM type_abonnement $condition");
			
			if($query->num_rows()>0)
			{
				foreach ($query->result() as $row)
				{				
					array_push($data,array(
											"id"=>$row->ID_TYPE_ABO,
											"libelle"=>$row->LIBELLE
											));
				}							
			}
			
			return $data;		
		}
		
		public function get_all_banque()
		{
			$data=array();
			$query=$this->db->query("SELECT \"ID_BANQUE\", \"LIBELLE\"
  								FROM banque where \"ENABLE\"=TRUE");
			
			if($query->num_rows()>0)
			{
				foreach ($query->result() as $row)
				{				
					array_push($data,array(
											"id"=>$row->ID_BANQUE,
											"banque"=>$row->LIBELLE
											));
				}							
			}
			
			return $data;		
		}		
		
}