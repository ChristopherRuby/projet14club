<?php
class Mail_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
		
  		public function clean_table()
  		{
  			
  			$this->db->query(" DELETE FROM mail_users_list");
		
  		}		
		


 
		public function insert_abonne_selected($data_filtered="")
		{
			$data=array();
			$clause="";
			$clause2="";
			log_message('error',print_r($data_filtered,TRUE));
			if(isset($data_filtered['nom']) && $data_filtered['nom']!="")
			{
				$clause.=" and upper(users.\"NOM\")=upper(".$this->db->escape($data_filtered['nom']).") ";
			}
			if(isset($data_filtered['prenom']) && $data_filtered['prenom']!="")
			{
				$clause.=" and upper(users.\"PRENOM\")=upper(".$this->db->escape($data_filtered['prenom']).") ";
			}
			if(isset($data_filtered['cp']) && $data_filtered['cp']!="")
			{
				$clause.=" and users.\"CP\"='".$data_filtered['cp']."'";
			}
			if(isset($data_filtered['ville']) && $data_filtered['ville']!="")
			{
				$clause.=" and upper(users.\"VILLE\")=upper(".$this->db->escape($data_filtered['ville']).") ";
			}
			if(isset($data_filtered['pays']) && $data_filtered['pays']!="")
			{
				$clause.=" and upper(users.\"PAYS\")=upper(".$this->db->escape($data_filtered['pays']).") ";
			}
			if(isset($data_filtered['type_abo']) && $data_filtered['type_abo']!="")
			{
				$clause.=" and type_abonnement.\"ID_TYPE_ABO\"=".$this->db->escape($data_filtered['type_abo'])." ";
			}		
			if(isset($data_filtered['status_abo']) && $data_filtered['status_abo']!="")
			{
				$clause2=" and t1.\"USER_STATUS\"=".$this->db->escape($data_filtered['status_abo'])." ";
			}
			
			if(isset($data_filtered['b_month']) && $data_filtered['b_month']!="")
			{
				$clause.=" and date_part('month', users.\"DATE_NAISSANCE\")='".$data_filtered['b_month']."' ";
			}
			if(isset($data_filtered['b_day']) && $data_filtered['b_day']!="")
			{
				$clause.=" and date_part('day', users.\"DATE_NAISSANCE\")='".$data_filtered['b_day']."' ";
			}									
			if(isset($data_filtered['b_year']) && $data_filtered['b_year']!="")
			{
				$clause.=" and date_part('year', users.\"DATE_NAISSANCE\")='".$data_filtered['b_year']."' ";
			}
			
			if(isset($data_filtered['s_month']) && $data_filtered['s_month']!="")
			{
				$clause.=" and date_part('month', users.\"DATE_INSCRIPTION\")='".$data_filtered['s_month']."' ";
			}
			if(isset($data_filtered['s_day']) && $data_filtered['s_day']!="")
			{
				$clause.=" and date_part('day', users.\"DATE_INSCRIPTION\")='".$data_filtered['s_day']."' ";
			}									
			if(isset($data_filtered['s_year']) && $data_filtered['s_year']!="")
			{
				$clause.=" and date_part('year', users.\"DATE_INSCRIPTION\")='".$data_filtered['s_year']."' ";
			}
			
			
			if(isset($data_filtered['last_abo']) && $data_filtered['last_abo']!="")
			{
				$clause.=" and abonnement.\"DATE_FIN\">'".$data_filtered['last_abo']."' ";
			}			
																						
			$query=$this->db->query("
			
			INSERT INTO mail_users_list SELECT \"ID_USER\" FROM
						(
						SELECT \"ID_USER\", \"DATE_FIN\", \"NOM\", \"PRENOM\", \"SEXE\", \"PAYS\", \"CP\", \"VILLE\", \"EMAIL\", \"LIBELLE\", \"USER_STATUS\",
						 to_char(\"DATE_NAISSANCE\",'DD/MM/YYYY') as \"DATE_NAISSANCE\", \"B_MONTH\", \"B_YEAR\" from
								(
								SELECT DISTINCT (users.\"ID_USER\") as \"ID_USER\", users.\"NOM\", users.\"PRENOM\", users.\"SEXE\", 
											users.\"CP\", users.\"VILLE\", users.\"EMAIL\", \"PAYS\",
			 								type_abonnement.\"LIBELLE\",
			 								MAX(abonnement.\"DATE_FIN\") as \"DATE_FIN\",
	 								       CASE WHEN MAX(abonnement.\"DATE_FIN\")>now() THEN 'En cours'
									            ELSE 'Clôturé'
									       END as \"USER_STATUS\",
									       date_part('month', users.\"DATE_NAISSANCE\") as \"B_MONTH\",
									       date_part('year', users.\"DATE_NAISSANCE\") as \"B_YEAR\",
									       date_part('day', users.\"DATE_NAISSANCE\") as \"B_DAY\",
									       users.\"DATE_NAISSANCE\",
									       users.\"DATE_INSCRIPTION\"
  								FROM 		users
  								   			LEFT JOIN type_abonnement ON (type_abonnement.\"ID_TYPE_ABO\"=users.\"ID_TYPE_ABO\")
  									 		LEFT JOIN abonnement ON (abonnement.\"ID_USER\"=users.\"ID_USER\")
  									 		
  								WHERE 1=1 
  								$clause 

  								GROUP BY users.\"ID_USER\", users.\"NOM\", users.\"PRENOM\", users.\"SEXE\", 
											users.\"CP\", users.\"VILLE\", users.\"EMAIL\", \"PAYS\", \"DATE_NAISSANCE\", \"B_MONTH\", \"B_YEAR\",\"DATE_INSCRIPTION\",
			 								type_abonnement.\"LIBELLE\"
			 					) as t1 
			 					where 1=1 
			 					$clause2
			 					) as t2
  								");
		
		}

		public function get_receiver_list()
		{
			$data=array();
			$query=$this->db->query("SELECT users.\"EMAIL\", users.\"ID_USER\"
  								FROM users 
  								JOIN mail_users_list ON (mail_users_list.\"ID_USER\"=users.\"ID_USER\")");
			
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
		
		public function update_abonnement_by_sending_news($id_user,$nb_to_decremente)
		{
			
			$data=array();
			if($nb_to_decremente<0)
			{
				$nb_to_decremente=0;
			}

			$this->db->query("
								UPDATE abonnement AS a
										SET \"NB_JOURNAUX\" = \"NB_JOURNAUX\"-$nb_to_decremente
										FROM (
												select abonnement.\"ID_ABO\" from abonnement join users 
																				on (users.\"ID_USER\"=abonnement.\"ID_USER\") 
																				where users.\"ID_USER\"=$id_user 
																				and abonnement.\"NB_JOURNAUX\">0 
																				order by abonnement.\"DATE_FIN\" asc limit 1
											) AS b
								WHERE a.\"ID_ABO\" = b.\"ID_ABO\";
			");
			
		}		
				
}