<?php
class Impression_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
		
 /*
  * 	SELECT STATEMENT
  */ 
  
  
		public function get_all_abonne_by_($data_form)
		{
			$data=array();
			$clause="where 1=1 ";
			$type_abo=$data_form['type_abo'];
			$last_time_modified=$data_form['last_time_modified'];
			if($type_abo!='all')
			{
				$clause.="and type_abonnement.\"ID_TYPE_ABO\"='$type_abo'";
			}
			if($last_time_modified!=null)
			{
				$clause.="and users.\"LAST_TIME_MODIFIED\" >= current_date-$last_time_modified";
			}			
			$query=$this->db->query("
			
			SELECT \"ID_USER\", \"NB_JOURNAUX_TOTAL\", \"NOM\", \"PRENOM\", \"SEXE\", 
						\"CP\", \"VILLE\", \"EMAIL\", \"ADRESSE1\", \"PAYS\", \"LIBELLE\",\"USER_STATUS\" 
				FROM (
						SELECT DISTINCT (users.\"ID_USER\") as \"ID_USER\", SUM(abonnement.\"NB_JOURNAUX\") as \"NB_JOURNAUX_TOTAL\", users.\"NOM\", users.\"PRENOM\", users.\"SEXE\", 
														users.\"CP\", users.\"VILLE\", users.\"EMAIL\", users.\"ADRESSE1\", users.\"PAYS\",
						 								type_abonnement.\"LIBELLE\",
				 								       CASE WHEN MAX(abonnement.\"DATE_FIN\")>now() THEN 'En Cours'
												            ELSE 'Clôturé'
												       END as \"USER_STATUS\"
			  								FROM 		users
			  								   			LEFT JOIN type_abonnement ON (type_abonnement.\"ID_TYPE_ABO\"=users.\"ID_TYPE_ABO\")
			  									 		LEFT JOIN abonnement ON (abonnement.\"ID_USER\"=users.\"ID_USER\") 
			  								$clause 
			  								GROUP BY users.\"ID_USER\", users.\"NOM\", users.\"PRENOM\", users.\"SEXE\", 
														users.\"CP\", users.\"VILLE\", users.\"EMAIL\",users.\"ADRESSE1\", users.\"PAYS\",
						 								type_abonnement.\"LIBELLE\"
						 ) t1
				  WHERE t1.\"NB_JOURNAUX_TOTAL\">0
			 					
  								");
			
			if($query->num_rows()>0)
			{
				//log_message('error','num : '.$query->num_rows());
				foreach ($query->result() as $row)
				{				
					array_push($data,array(
											"id"=>$row->ID_USER,
											"nom"=>$row->NOM,
											"prenom"=>$row->PRENOM,
											"adresse"=>$row->ADRESSE1,
											"pays"=>$row->PAYS,
											"email"=>$row->EMAIL,
											"sexe"=>$row->SEXE,
											"cp"=>$row->CP,
											"ville"=>$row->VILLE,
											"formule"=>$row->LIBELLE,
											"user_status"=>$row->USER_STATUS																						
											));
				}							
			}
			
			return $data;		
		}  

		public function get_all_abonne_by_id($id)
		{
			$data=array();
			if(is_array($id))
			{
				$clause="where users.\"ID_USER\" in ( ";
				for($i=0;$i<count($id);$i++)
				{
					if($i==count($id)-1)
					{
						$clause.="'$id[$i]')";
					}
					else {
						$clause.="'$id[$i]',";
					}
				}
				//log_message('error','clause'.$clause);
			}
			else 
			{
				$clause="where users.\"ID_USER\"='$id'";
			}
			$query=$this->db->query("
			
			SELECT \"ID_USER\", \"NUMERO_USER\", \"NB_JOURNAUX_TOTAL\", \"NOM\", \"PRENOM\", \"SEXE\", 
						\"CP\", \"VILLE\", \"EMAIL\", \"ADRESSE1\", \"PAYS\", \"LIBELLE\",\"USER_STATUS\" 
				FROM (
						SELECT DISTINCT (users.\"ID_USER\") as \"ID_USER\", \"NUMERO_USER\", SUM(abonnement.\"NB_JOURNAUX\") as \"NB_JOURNAUX_TOTAL\", users.\"NOM\", users.\"PRENOM\", users.\"SEXE\", 
														users.\"CP\", users.\"VILLE\", users.\"EMAIL\", users.\"ADRESSE1\", users.\"PAYS\",
						 								type_abonnement.\"LIBELLE\",
				 								       CASE WHEN MAX(abonnement.\"DATE_FIN\")>now() THEN 'En Cours'
												            ELSE 'Clôturé'
												       END as \"USER_STATUS\"
			  								FROM 		users
			  								   			LEFT JOIN type_abonnement ON (type_abonnement.\"ID_TYPE_ABO\"=users.\"ID_TYPE_ABO\")
			  									 		LEFT JOIN abonnement ON (abonnement.\"ID_USER\"=users.\"ID_USER\") 
			  								$clause 
			  								GROUP BY users.\"ID_USER\", users.\"NOM\", users.\"PRENOM\", users.\"SEXE\", \"NUMERO_USER\",
														users.\"CP\", users.\"VILLE\", users.\"EMAIL\", users.\"ADRESSE1\",users.\"PAYS\",
						 								type_abonnement.\"LIBELLE\"
						 ) t1
				  -- COMMENTAIRE ************ WHERE t1.\"NB_JOURNAUX_TOTAL\">0
			 					
  								");
			
			if($query->num_rows()>0)
			{
				//log_message('error','num : '.$query->num_rows());
				foreach ($query->result() as $row)
				{				
					array_push($data,array(
											"id"=>$row->ID_USER,
											"num_user"=>$row->NUMERO_USER,
											"nom"=>$row->NOM,
											"prenom"=>$row->PRENOM,
											"adresse"=>$row->ADRESSE1,
											"pays"=>$row->PAYS,
											"email"=>$row->EMAIL,
											"sexe"=>$row->SEXE,
											"cp"=>$row->CP,
											"ville"=>$row->VILLE,
											"formule"=>$row->LIBELLE,
											"user_status"=>$row->USER_STATUS																						
											));
				}							
			}
			
			return $data;		
		}  


		public function update_abonnement_by_decrem($id_user,$nb_to_decremente)
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

  		
		public function get_abonnements_not_payed($mode_paiement)
		{

			$data=array();
			$query=$this->db->query("SELECT users.\"ID_USER\",
											users.\"NOM\",
											 users.\"PRENOM\",
										   banque.\"LIBELLE\" as \"LIBELLE_BANQUE\",
										   abonnement.\"NOM_PAYEUR\" as \"NOM_PAYEUR\",
										   abonnement.\"PRIX\" as \"PRIX\",
										   abonnement.\"ID_ABO\"
	  								FROM users, abonnement, banque
	  								 where abonnement.\"PAYER\"=FALSE
	  								 and users.\"ID_USER\"=abonnement.\"ID_USER\"
	  								 and abonnement.\"MODE_PAIEMENT\"=".$this->db->escape($mode_paiement)."
	  								 and abonnement.\"ID_BANQUE\"=banque.\"ID_BANQUE\" LIMIT 25 ");
				
			if($query->num_rows()>0)
			{
				foreach ($query->result() as $row)
				{				
					array_push($data,array(
								"id_user"=>$row->ID_USER,
								"nom"=>$row->NOM,
								"prenom"=>$row->PRENOM,
								"lib_banque"=>$row->LIBELLE_BANQUE,
								"nom_tireur"=>$row->NOM_PAYEUR,
								"prix"=>$row->PRIX,
								"id_abo"=>$row->ID_ABO																				
								));
				}							
			}
			else
			{
				$data['error']='Aucun abonnement non-payé en cours';
			}
			
			return $data;
			
		}

		public function get_abonnements_bordereau_not_gen($mode_paiement)
		{

			$data=array();
			$query=$this->db->query("SELECT users.\"ID_USER\",
											users.\"NUMERO_USER\",
											users.\"NOM\",
											 users.\"PRENOM\",
										   banque.\"LIBELLE\" as \"LIBELLE_BANQUE\",
										   abonnement.\"NOM_PAYEUR\" as \"NOM_PAYEUR\",
										   abonnement.\"PRIX\" as \"PRIX\",
										   abonnement.\"ID_ABO\"
	  								FROM users, abonnement, banque
	  								 where users.\"ID_USER\"=abonnement.\"ID_USER\"
	  								 and abonnement.\"MODE_PAIEMENT\"=".$this->db->escape($mode_paiement)."
	  								 and abonnement.\"ID_BANQUE\"=banque.\"ID_BANQUE\"
	  								 and abonnement.\"GEN_BORDEREAU\"=FALSE LIMIT 25 ");
				
			if($query->num_rows()>0)
			{
				foreach ($query->result() as $row)
				{				
					array_push($data,array(
								"id_user"=>$row->ID_USER,
								"num_member"=>$row->NUMERO_USER,
								"nom"=>$row->NOM,
								"prenom"=>$row->PRENOM,
								"lib_banque"=>$row->LIBELLE_BANQUE,
								"nom_tireur"=>$row->NOM_PAYEUR,
								"prix"=>$row->PRIX,
								"id_abo"=>$row->ID_ABO																				
								));
				}							
			}
			else
			{
				$data['error']='Aucun abonnement non-payé en cours';
			}
			
			return $data;
			
		}

		public function get_list_bordereau_generated()
		{
			$data=array();
			$query=$this->db->query("SELECT distinct \"BORDEREAU_NAME\"
	  								FROM bordereau");
				
			if($query->num_rows()>0)
			{
				foreach ($query->result() as $row)
				{				
					array_push($data,array(
								"bordereau_name"=>$row->BORDEREAU_NAME																				
								));
				}							
			}
			
			return $data;
			
					
		}


 /*
  * 	INSERT STATEMENT
  */ 
	
		public function insert_bordereau_informations($list_info,$name_bordereau)
		{
			
			$data=array();
			foreach($list_info as $row)
			{
				$this->db->query(" INSERT INTO bordereau (\"ID_BORDEREAU\", \"ID_USER\", \"BANQUE_LIBELLE\", \"NOM_TIREUR\", \"PRIX\",
				 \"PRENOM\", \"NOM\", \"ID_ABO\", \"BORDEREAU_NAME\") 
									VALUES (nextval('seq_bordereau'),".$row['id_user'].",".$this->db->escape($row['lib_banque']).",".$this->db->escape($row['nom_tireur']).",
												".$row['prix'].",".$this->db->escape($row['prenom']).",".$this->db->escape($row['nom']).",
												".$this->db->escape($row['id_abo']).",".$this->db->escape($name_bordereau).")");				
			};
			
			
		}
		
		public function update_abonnement_by_gen_bordereau($list_info,$nb_to_decremente)
		{
			
			$data=array();
			if($nb_to_decremente<0)
			{
				$nb_to_decremente=0;
			}
			foreach($list_info as $row)
			{
				
				$this->db->query("
									UPDATE abonnement SET \"GEN_BORDEREAU\"=TRUE, \"NB_JOURNAUX\"=\"NB_JOURNAUX\"-$nb_to_decremente
														WHERE \"ID_ABO\"=".$row['id_abo']."
				");
				
			}
			
			
		}
		
		
}

?>