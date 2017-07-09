<?php
class Administration_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
		
 /*
  * 	DELETE STATEMENT
  */    		
		public function clean_current_list()
		{
			$this->db->query("DELETE FROM users_m_list_current");
		}

		public function clean_user_from_current_list($id)
		{
			$this->db->query("DELETE FROM users_m_list_current where \"ID_USER\"=$id");
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
		
		public function insert_archive_list()
		{
			$label="List_".date('YmdHs');
			
			// requete permettant de récupérer la séquence
			$query_sequence=$this->db->query("SELECT nextval('seq_archived_list')");
			$row = $query_sequence->row();
			// Récupération de la séquence
			$sequence=$row->nextval;
			
			// On récupère la liste des users présent dans la liste
			$tab_users=array();
			$query_users=$this->db->query("SELECT \"ID_USER\" from users_m_list_current");
			if($query_users->num_rows()>0)
			{
				foreach ($query_users->result() as $row)
				{
					array_push($tab_users,$row->ID_USER);
				}					
			}
			
			//log_message('error',var_dump($tab_users));
			
			// On itère sur la liste, pour insérer chaque utilisateur dans une liste archivé, avec une séquence spécifique
			if(count($tab_users)>0)
			{
				foreach($tab_users as $user)
				{
					$this->db->query("INSERT INTO users_m_list_archived(
									            \"ID_LIST\", \"ID_USER\", \"DATE_CREATION\", \"LABEL\")
									    VALUES ($sequence,$user,current_date,'$label')");
				}
			}
		}
		
		
		public function add_user_in_list($id_user)
		{
				$this->db->query("INSERT INTO users_m_list_current(
									            \"ID_USER\")
									    VALUES ($id_user)");			
		}

		public function delete_user_in_list($id_user)
		{
				$this->db->query("DELETE from users_m_list_current WHERE \"ID_USER\"=$id_user");			
		}
		
		public function hidding_banque($id_banque)
		{
			$this->db->query("UPDATE banque set \"ENABLE\"=FALSE WHERE \"ID_BANQUE\"=$id_banque");	
		}		
		
/*
 * 
 * 		SELECT STATEMENT
 * 
 */		
 
 		public function get_receiver_from_archived($id_list)
		{
			$data=array();
			$query=$this->db->query("SELECT users.\"EMAIL\", users.\"ID_USER\"
  								FROM users 
  								JOIN users_m_list_archived ON (users_m_list_archived.\"ID_USER\"=users.\"ID_USER\")
  								WHERE users_m_list_archived.\"ID_LIST\"=$id_list");
			
			if($query->num_rows()>0)
			{
				foreach ($query->result() as $row)
				{				
					array_push($data,array(
											"mail"=>$row->EMAIL,
											"id_user"=>$row->ID_USER
											));
				}							
			}
			
			return $data;		
		}
 
 		public function get_users_in_archived($list)
		{
			$data=array();

			$query=$this->db->query("SELECT users.\"ID_USER\", users.\"NUMERO_USER\", users.\"NOM\",users.\"PRENOM\",users.\"DATE_NAISSANCE\",users.\"VILLE\",users.\"CP\",users.\"ADRESSE1\",users.\"PAYS\"
  								FROM users LEFT JOIN users_m_list_archived ON (users.\"ID_USER\"=users_m_list_archived.\"ID_USER\")
  								WHERE users_m_list_archived.\"ID_LIST\"=$list");
			
			if($query->num_rows()>0)
			{
				foreach ($query->result() as $row)
				{				
					array_push($data,array(
											"id_user"=>$row->ID_USER,
											"num_user"=>$row->NUMERO_USER,
											"nom"=>$row->NOM,
											"prenom"=>$row->PRENOM,
											"date_naissance"=>$row->DATE_NAISSANCE,
											"ville"=>$row->VILLE,
											"adresse"=>$row->ADRESSE1,
											"pays"=>$row->PAYS,
											"cp"=>$row->CP
											));
				}							
			}
			
			return $data;		
		} 	
 
 		public function get_all_archived_list()
		{
			
			$data=array();

			$query=$this->db->query("SELECT DISTINCT(\"ID_LIST\")
  								FROM users_m_list_archived
  								ORDER BY \"ID_LIST\" DESC ");
			
			if($query->num_rows()>0)
			{
				foreach ($query->result() as $row)
				{				
					array_push($data,array(
											"id_list"=>$row->ID_LIST
											));
				}							
			}
			
			return $data;				
			
		}
 
		public function get_users_in_list()
		{
			$data=array();

			$query=$this->db->query("
							SELECT users.\"ID_USER\", users.\"NUMERO_USER\", users.\"NOM\",users.\"PRENOM\",users.\"DATE_NAISSANCE\",users.\"VILLE\",users.\"PAYS\",
							users.\"ADRESSE1\",users.\"CP\",
									type_abonnement.\"LIBELLE\"
  							FROM users LEFT JOIN users_m_list_current ON (users.\"ID_USER\"=users_m_list_current.\"ID_USER\")
  										LEFT JOIN type_abonnement ON (type_abonnement.\"ID_TYPE_ABO\"=users.\"ID_TYPE_ABO\")
  							WHERE users.\"ID_USER\"=users_m_list_current.\"ID_USER\"
  								");
			
			if($query->num_rows()>0)
			{
				foreach ($query->result() as $row)
				{				
					array_push($data,array(
											"id_user"=>$row->ID_USER,
											"num_user"=>$row->NUMERO_USER,
											"nom"=>$row->NOM,
											"prenom"=>$row->PRENOM,
											"date_naissance"=>$row->DATE_NAISSANCE,
											"ville"=>$row->VILLE,
											"pays"=>$row->PAYS,
											"adresse"=>$row->ADRESSE1,
											"cp"=>$row->CP,
											"formule"=>$row->LIBELLE
											));
				}							
			}
			
			return $data;		
		} 		
 
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