<?php
class Abonne_model extends CI_Model {

        public function __construct()
        {
                $this->load->database();
        }
 /*
  * 	INSERT STATEMENT
  */       

		public function insert_new_user($num_user,$nom,$prenom,$adresse1,$adresse2,$cp,$ville,$date_naissance,$date_inscription,$email,$sexe,$formule,$photo_name,$tel,$tel_p,$pays,$remarque)
		{
			$this->db->query(" INSERT INTO users (\"ID_USER\", \"NUMERO_USER\", \"NOM\", \"PRENOM\", \"ADRESSE1\", \"ADRESSE2\", \"CP\",
			 \"VILLE\", \"DATE_NAISSANCE\", \"DATE_INSCRIPTION\", \"EMAIL\", \"SEXE\", \"ID_TYPE_ABO\",\"PHOTO_NAME\",\"TEL_FIXE\",\"TEL_PORTABLE\",\"PAYS\",\"REMARQUE\",\"LAST_TIME_MODIFIED\") 
								VALUES (nextval('seq_users'),$num_user,".$this->db->escape($nom).",".$this->db->escape($prenom).",".$this->db->escape($adresse1).",".$this->db->escape($adresse2).",'$cp',
								".$this->db->escape($ville).",to_date('$date_naissance','yyyy-mm-dd'),to_date('$date_inscription','yyyy-mm-dd'),".$this->db->escape($email).",
									'$sexe','$formule','$photo_name','$tel','$tel_p',".$this->db->escape($pays).",".$this->db->escape($remarque).",current_date)");
			// On selectionne le numéro d'adhérent qui vient d'être créer						
			$query_id=$this->db->query("SELECT currval('seq_users')");		
			$row = $query_id->row();
			// On renvoie le numéro de l'adhérent qui vient d'être créer
			return $row->currval;						
		}  
  
  
  
  		public function insert_new_abonnement($form_data,$id_abonne)
		{

			$date_debut=$form_data['date_debut'];
			$date_fin=$form_data['date_fin'];
			$nb_journaux=$form_data['nb_journaux'];
			$prix=$form_data['prix'];
			$nom_tireur=$form_data['nom_tireur'];
			$mode_paiement=$form_data['mode_paiement'];
			$payer=$form_data['payer'];
			$id_banque=$form_data['banque'];
			$this->db->query("
				INSERT INTO abonnement (\"ID_ABO\",\"DATE_DEBUT\",\"DATE_FIN\",\"NB_JOURNAUX\",\"PRIX\",\"NOM_PAYEUR\",\"MODE_PAIEMENT\",\"PAYER\",\"ID_BANQUE\",\"ID_USER\",\"GEN_BORDEREAU\")
							 VALUES (nextval('seq_fiche_abonnement'),to_date('$date_debut','yyyy-mm-dd'),to_date('$date_fin','yyyy-mm-dd'),$nb_journaux,$prix,
							 			'$nom_tireur','$mode_paiement','$payer',$id_banque,$id_abonne,FALSE)
							 			");
										
			$this->db->query(" UPDATE users SET \"LAST_TIME_MODIFIED\"=current_date
								WHERE  \"ID_USER\"='$id_abonne' ");										
			
			
		}  

 /*
  * 	DELETE STATEMENT
  */      
  
  		public function delete_abonnement($id_abonne)
		{

			$this->db->query("
				DELETE FROM abonnement WHERE \"ID_ABO\"=$id_abonne
							 			");							
			
		}    
  
  		public function delete_user($id_user)
		{

			$this->db->query("
				DELETE FROM users WHERE \"ID_USER\"=$id_user
							 			");							
			
		}    
  
  //

   /*
  * 	UPDATE STATEMENT
  */       

		public function update_user($nom,$prenom,$adresse1,$adresse2,$cp,$ville,$date_naissance,$date_inscription,$email,$sexe,$id_user,$tel,$tel_p,$pays,$remarque,$formule,$num_user)
		{
			$this->db->query(" UPDATE users SET \"NOM\"=".$this->db->escape($nom).",
												  \"PRENOM\"=".$this->db->escape($prenom).",
												   \"ADRESSE1\"=".$this->db->escape($adresse1).",
												   \"ADRESSE2\"=".$this->db->escape($adresse2).",
												    \"CP\"=".$this->db->escape($cp).",
												    \"VILLE\"=".$this->db->escape($ville).",
												    \"DATE_NAISSANCE\"=to_date('$date_naissance','yyyy-mm-dd'),
												     \"DATE_INSCRIPTION\"=to_date('$date_inscription','yyyy-mm-dd'),
												      \"EMAIL\"='$email',
												       \"SEXE\"='$sexe',
												         \"TEL_FIXE\"=".$this->db->escape($tel).",
												         \"TEL_PORTABLE\"=".$this->db->escape($tel_p).",
												        \"PAYS\"=".$this->db->escape($pays).",
												        \"REMARQUE\"=".$this->db->escape($remarque).",
												        \"ID_TYPE_ABO\"='$formule',
												        \"LAST_TIME_MODIFIED\"=current_date,
												         \"NUMERO_USER\"=$num_user
									WHERE \"ID_USER\"='$id_user' ");
		}  
  
  		public function assign_photo_to_user($file_name,$num_member,$id_abonne)
  		{

  			//log_message('error','var : '.$file_name.' '.$id_abonne);
  			$this->db->query(" UPDATE users SET \"PHOTO_NAME\"='$file_name'				
									WHERE \"ID_USER\"='$id_abonne' ");
									
			return $id_abonne;			
  		}
  
  		public function update_abonnement($form_data,$id)
		{
			
			$date_debut=$form_data['date_debut'];
			$date_fin=$form_data['date_fin'];
			$this->db->query(" UPDATE abonnement SET  \"NB_JOURNAUX\"=".$this->db->escape($form_data['nb_journaux']).",
												    \"PRIX\"=".$this->db->escape($form_data['prix']).",
												    \"DATE_DEBUT\"=to_date('$date_debut','yyyy-mm-dd'),
												     \"DATE_FIN\"=to_date('$date_fin','yyyy-mm-dd'),
												         \"PAYER\"=".$this->db->escape($form_data['payer']).",
												         \"ID_BANQUE\"=".$this->db->escape($form_data['banque']).",
												        \"MODE_PAIEMENT\"=".$this->db->escape($form_data['mode_paiement']).",
												        \"NOM_PAYEUR\"=".$this->db->escape($form_data['nom_tireur'])."
									WHERE \"ID_ABO\"='$id' ");							
			
		}
  
  //
    
/*
 * 
 * 		SELECT STATEMENT
 * 
 */		
 
/*
 * Request that can retrieve all informations needed
 *  
SELECT *
 from
	(
	SELECT DISTINCT (users."ID_USER") as "ID_USER",
		       CASE WHEN MAX(abonnement."DATE_FIN")>now() THEN 'En cours'
			    ELSE 'Clôturé'
		       END as "USER_STATUS"
	FROM 		users
				LEFT JOIN type_abonnement ON (type_abonnement."ID_TYPE_ABO"=users."ID_TYPE_ABO")
				LEFT JOIN abonnement ON (abonnement."ID_USER"=users."ID_USER")

	GROUP BY users."ID_USER"
	) as t1  
 */
 
 		public function get_id_by_num_member($num)
		{
			$id="";
			$query=$this->db->query("
			
				SELECT  users.\"ID_USER\", users.\"NUMERO_USER\"
				FROM   users
				WHERE  users.\"NUMERO_USER\"=$num
					   
									");
			
			if($query->num_rows()>0)
			{
				//log_message('error','num : '.$query->num_rows());
				foreach ($query->result() as $row)
				{				
					$id=$row->ID_USER;
				}							
			}
			return $id;			
		}
 
 		public function check_if_num_member_exist($num)
		{
			
			
			$query=$this->db->query("
			
				SELECT  users.\"ID_USER\", users.\"NUMERO_USER\"
				FROM   users
				WHERE  users.\"NUMERO_USER\"=$num
					   
									");
			
			if($query->num_rows()>0)
			{
				return true;	
			}
			else {
				return false;
			}
			
		}
 
 		public function get_abonne_stats($dataArray="")
		{
			$data=array();
			$clause="";
			$cols="";
			//$string_for_data="\"count\"=>$row->COUNT";
			if(isset($dataArray['id_type_abo']) && $dataArray['id_type_abo']!="")
			{
				$clause.=" AND \"ID_TYPE_ABO\"=".$dataArray['id_type_abo'];
				$cols.=", \"ID_TYPE_ABO\" ";
				//$string_for_data.=", \"id_type_abo\"=>$row->ID_TYPE_ABO";
			}
			if(isset($dataArray['user_status']) && $dataArray['user_status']!="")
			{
				$clause.=" AND \"USER_STATUS\"='".$dataArray['user_status']."'";
				$cols.=", \"USER_STATUS\" ";
				//$string_for_data.=", \"user_status\"=>$row->USER_STATUS";
			}
			if(isset($dataArray['nb_abo']) && $dataArray['nb_abo']!="")
			{
				$clause.=" AND \"NB_ABO\" ".$dataArray['nb_abo']." 1";
				//$cols.=", \"NB_ABO\" ";
			}										
			
			$query=$this->db->query("
								SELECT count(*) as \"COUNT\" $cols
								 from
									(
									SELECT DISTINCT (users.\"ID_USER\") as \"ID_USER\", type_abonnement.\"ID_TYPE_ABO\",
										       CASE WHEN MAX(abonnement.\"DATE_FIN\")>now() THEN 'En cours'
											    ELSE 'Clôturé'
										       END as \"USER_STATUS\",
										       count(type_abonnement.\"ID_TYPE_ABO\") as \"NB_ABO\"
									FROM 		users
												LEFT JOIN type_abonnement ON (type_abonnement.\"ID_TYPE_ABO\"=users.\"ID_TYPE_ABO\")
												LEFT JOIN abonnement ON (abonnement.\"ID_USER\"=users.\"ID_USER\")
									GROUP BY users.\"ID_USER\", type_abonnement.\"ID_TYPE_ABO\"
									) as t1
								WHERE 1=1
								$clause
								GROUP BY 1=1 $cols
								");		
															
			if($query->num_rows()>0)
			{
				//log_message('error','num : '.$query->num_rows());
				foreach ($query->result() as $row)
				{
					//$string_for_data="\"count\"=>$row->COUNT";
					$arrayReturn['count']=$row->COUNT;
					if(isset($dataArray['id_type_abo']) && $dataArray['id_type_abo']!="")
					{
						//$string_for_data.=", \"id_type_abo\"=>$row->ID_TYPE_ABO";
						$arrayReturn['id_type_abo']=$row->ID_TYPE_ABO;
					}
					if(isset($dataArray['user_status']) && $dataArray['user_status']!="")
					{
						//$string_for_data.=", \"user_status\"=>$row->USER_STATUS";
						$arrayReturn['user_status']=$row->USER_STATUS;
					}						
					if(isset($dataArray['nb_abo']) && $dataArray['nb_abo']!="")
					{
						//$string_for_data.=", \"user_status\"=>$row->USER_STATUS";
						//$arrayReturn['nb_abo']=$row->NB_ABO;
					}									
					//$arrayReturn=array($string_for_data);
					//array_push($data,$arrayReturn);
				}							
			}
			elseif($query->num_rows()==0)
			{
				$arrayReturn['count']=0;
			}						
			
			return $arrayReturn;
			
		}
 
		public function get_all_abonne($data_filtered="",$json=FALSE)
		{
			$data=array();
			$clause="";
			$clause2="";
			//log_message('error',print_r($data_filtered,TRUE));
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
				$clause.=" and users.\"CP\"='".$data_filtered['cp']."' ";
			}
			// attention variable clause2
			if(isset($data_filtered['dep']) && $data_filtered['dep']!="")
			{
				$clause2.=" and \"DEP\"='".$data_filtered['dep']."' ";
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
				// attention varaiable $clause2
				$clause2.=" and t1.\"USER_STATUS\"=".$this->db->escape($data_filtered['status_abo'])." ";
			}
			if(isset($data_filtered['sexe']) && $data_filtered['sexe']!="")
			{
				$clause=" and upper(users.\"SEXE\")=upper(".$this->db->escape($data_filtered['sexe']).") ";
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
			
			// attention varaiable $clause2
			if(isset($data_filtered['a_month']) && $data_filtered['a_month']!="")
			{
				$clause2.=" and date_part('month', \"DATE_FIN\")='".$data_filtered['a_month']."' ";
			}
			if(isset($data_filtered['a_day']) && $data_filtered['a_day']!="")
			{
				$clause2.=" and date_part('day', \"DATE_FIN\")='".$data_filtered['a_day']."' ";
			}									
			if(isset($data_filtered['a_year']) && $data_filtered['a_year']!="")
			{
				$clause2.=" and date_part('year', \"DATE_FIN\")='".$data_filtered['a_year']."' ";
			}			
			
			if(isset($data_filtered['last_abo']) && $data_filtered['last_abo']!="")
			{
				$clause.=" and abonnement.\"DATE_FIN\">'".$data_filtered['last_abo']."' ";
			}			
			if(isset($data_filtered['num_user']) && $data_filtered['num_user']!="")
			{
				$clause.=" and users.\"NUMERO_USER\" = '".$data_filtered['num_user']."' ";
			}
			if(isset($data_filtered['nb_journaux_exact']) && $data_filtered['nb_journaux_exact']!="")
			{
				$clause2.=" and t1.\"NB_JOURNAUX\"='".$data_filtered['nb_journaux_exact']."' ";
			}
			if(isset($data_filtered['nb_journaux_sup']) && $data_filtered['nb_journaux_sup']!="")
			{
				$clause2.=" and t1.\"NB_JOURNAUX\">='".$data_filtered['nb_journaux_sup']."' ";
			}																									
			$query=$this->db->query("
						SELECT \"ID_USER\", \"DATE_FIN\", \"NOM\", \"PRENOM\", \"SEXE\", \"PAYS\", \"CP\", \"DEP\", \"VILLE\", \"ADRESSE1\", \"EMAIL\", \"LIBELLE\",
									 \"USER_STATUS\", to_char(\"DATE_NAISSANCE\",'DD/MM/YYYY') as \"DATE_NAISSANCE\", \"B_MONTH\", \"B_YEAR\", \"NUMERO_USER\",
								       date_part('month', \"DATE_FIN\") as \"A_MONTH\",
								       date_part('year', \"DATE_FIN\") as \"A_YEAR\",
								       date_part('day', \"DATE_FIN\") as \"A_DAY\",
								       \"NB_JOURNAUX\"	
							 from
								(
								SELECT DISTINCT (users.\"ID_USER\") as \"ID_USER\", users.\"NOM\", users.\"PRENOM\", users.\"SEXE\", 
											users.\"CP\", substring(users.\"CP\" from '^..' ) as \"DEP\", users.\"VILLE\", users.\"ADRESSE1\", users.\"EMAIL\", users.\"PAYS\",  users.\"NUMERO_USER\",
			 								type_abonnement.\"LIBELLE\",
			 								MAX(abonnement.\"DATE_FIN\") as \"DATE_FIN\",
	 								       CASE WHEN MAX(abonnement.\"DATE_FIN\")>now() THEN 'En cours'
									            ELSE 'Clôturé'
									       END as \"USER_STATUS\",
									       SUM(abonnement.\"NB_JOURNAUX\") as \"NB_JOURNAUX\",
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

  								GROUP BY users.\"ID_USER\", users.\"NUMERO_USER\", users.\"NOM\", users.\"PRENOM\", users.\"SEXE\", 
											users.\"CP\", users.\"VILLE\", users.\"EMAIL\", users.\"PAYS\", users.\"ADRESSE1\",
											users.\"DATE_NAISSANCE\",users.\"DATE_INSCRIPTION\",
			 								type_abonnement.\"LIBELLE\"
			 					) as t1 
			 					where 1=1 
			 					$clause2
  								");
			
			log_message('error',$clause2);
			
			if($query->num_rows()>0)
			{
				//log_message('error','num : '.$query->num_rows());
				foreach ($query->result() as $row)
				{				
					array_push($data,array(
											"id"=>$row->ID_USER,
											"nom"=>$row->NOM,
											"prenom"=>$row->PRENOM,
											"birthday"=>$row->DATE_NAISSANCE,
											"email"=>$row->EMAIL,
											"sexe"=>$row->SEXE,
											"adresse"=>$row->ADRESSE1,
											"pays"=>$row->PAYS,
											"cp"=>$row->CP,
											"dep"=>$row->DEP,
											"ville"=>$row->VILLE,
											"formule"=>$row->LIBELLE,
											"user_status"=>$row->USER_STATUS,
											"num_user"=>$row->NUMERO_USER,
											"nb_journaux"=>$row->NB_JOURNAUX														
											));
				}							
			}
			
			if($json==TRUE)
			{
				$data=json_encode($data);
			}
			
			return $data;		
		}

		public function get_one_abonne($id)
		{
			$data=array();
			$query=$this->db->query("SELECT users.\"ID_USER\",users.\"NOM\", users.\"PRENOM\", users.\"SEXE\", users.\"EMAIL\", users.\"REMARQUE\", 
										users.\"ADRESSE1\",  users.\"ADRESSE2\", users.\"CP\", users.\"VILLE\", users.\"PAYS\",
										 users.\"ID_TYPE_ABO\", to_char(users.\"DATE_NAISSANCE\", 'YYYY-MM-DD') as \"DATE_NAISSANCE\",  users.\"NUMERO_USER\",
										  to_char(users.\"DATE_INSCRIPTION\", 'YYYY-MM-DD') as \"DATE_INSCRIPTION\" ,
										  users.\"PHOTO_NAME\", users.\"TEL_FIXE\", users.\"TEL_PORTABLE\",
										   type_abonnement.\"LIBELLE\" as \"LIBELLE_TYPE_ABO\",
	 								       CASE WHEN MAX(abonnement.\"DATE_FIN\")>now() THEN 'En Cours'
									            ELSE 'Clôturé'
									       END as \"USER_STATUS\"										   
  								FROM users
  								LEFT JOIN type_abonnement ON (type_abonnement.\"ID_TYPE_ABO\"=users.\"ID_TYPE_ABO\")
  								LEFT JOIN abonnement ON (abonnement.\"ID_USER\"=users.\"ID_USER\")  								
  								 WHERE users.\"ID_USER\"=$id
  								 GROUP BY  users.\"ID_USER\", users.\"NUMERO_USER\", users.\"NOM\", users.\"PRENOM\", users.\"SEXE\", users.\"EMAIL\", 
										users.\"ADRESSE1\", users.\"ADRESSE2\", users.\"CP\", users.\"VILLE\",
										 users.\"ID_TYPE_ABO\", \"DATE_NAISSANCE\",
										  \"DATE_INSCRIPTION\" ,
										  users.\"PHOTO_NAME\", users.\"TEL_FIXE\", users.\"TEL_PORTABLE\", users.\"REMARQUE\", users.\"PAYS\", 
										   \"LIBELLE_TYPE_ABO\" ");
			
			if($query->num_rows()>0)
			{
				foreach ($query->result() as $row)
				{				
					$data=array(
								"id_user"=>$row->ID_USER,
								"nom"=>$row->NOM,
								"prenom"=>$row->PRENOM,
								"sexe"=>$row->SEXE,
								"remarque"=>$row->REMARQUE,
								"email"=>$row->EMAIL,
								"adresse1"=>$row->ADRESSE1,
								"adresse2"=>$row->ADRESSE2,
								"cp"=>$row->CP,
								"ville"=>$row->VILLE,
								"pays"=>$row->PAYS,
								"id_formule"=>$row->ID_TYPE_ABO,
								"formule"=>$row->LIBELLE_TYPE_ABO,
								"date_naissance"=>$row->DATE_NAISSANCE,
								"date_inscription"=>$row->DATE_INSCRIPTION,
								"file_name"=>$row->PHOTO_NAME,
								"tel"=>$row->TEL_FIXE,
								"tel_p"=>$row->TEL_PORTABLE,
								"user_status"=>$row->USER_STATUS,
								"num_user"=>$row->NUMERO_USER																							
								);
				}
				//log_message('error','row : '.$data['user_status']);							
			}
			
			return $data;		
		}

		public function get_one_abonne_by_num_member($id)
		{
			$data=array();
			$query=$this->db->query("SELECT users.\"ID_USER\",users.\"NOM\", users.\"PRENOM\", users.\"SEXE\", users.\"EMAIL\", users.\"REMARQUE\", 
										users.\"ADRESSE1\", users.\"ADRESSE1\", users.\"ADRESSE2\", users.\"CP\", users.\"VILLE\", users.\"PAYS\",
										 users.\"ID_TYPE_ABO\", to_char(users.\"DATE_NAISSANCE\", 'YYYY-MM-DD') as \"DATE_NAISSANCE\",  users.\"NUMERO_USER\",
										  to_char(users.\"DATE_INSCRIPTION\", 'YYYY-MM-DD') as \"DATE_INSCRIPTION\" ,
										  users.\"PHOTO_NAME\", users.\"TEL_FIXE\", users.\"TEL_PORTABLE\",
										   type_abonnement.\"LIBELLE\" as \"LIBELLE_TYPE_ABO\",
	 								       CASE WHEN MAX(abonnement.\"DATE_FIN\")>now() THEN 'En Cours'
									            ELSE 'Clôturé'
									       END as \"USER_STATUS\"										   
  								FROM users
  								LEFT JOIN type_abonnement ON (type_abonnement.\"ID_TYPE_ABO\"=users.\"ID_TYPE_ABO\")
  								LEFT JOIN abonnement ON (abonnement.\"ID_USER\"=users.\"ID_USER\")  								
  								 WHERE users.\"NUMERO_USER\"=$id
  								 GROUP BY  users.\"ID_USER\", users.\"NUMERO_USER\", users.\"NOM\", users.\"PRENOM\", users.\"SEXE\", users.\"EMAIL\", 
										users.\"ADRESSE1\", users.\"ADRESSE2\", users.\"CP\", users.\"VILLE\",
										 users.\"ID_TYPE_ABO\", \"DATE_NAISSANCE\",
										  \"DATE_INSCRIPTION\" ,
										  users.\"PHOTO_NAME\", users.\"TEL_FIXE\", users.\"TEL_PORTABLE\", users.\"REMARQUE\", users.\"PAYS\", 
										   \"LIBELLE_TYPE_ABO\" ");
			
			if($query->num_rows()>0)
			{
				foreach ($query->result() as $row)
				{				
					$data=array(
								"id_user"=>$row->ID_USER,
								"nom"=>$row->NOM,
								"prenom"=>$row->PRENOM,
								"sexe"=>$row->SEXE,
								"remarque"=>$row->REMARQUE,
								"email"=>$row->EMAIL,
								"adresse1"=>$row->ADRESSE1,
								"adresse2"=>$row->ADRESSE2,
								"cp"=>$row->CP,
								"ville"=>$row->VILLE,
								"pays"=>$row->PAYS,
								"id_formule"=>$row->ID_TYPE_ABO,
								"formule"=>$row->LIBELLE_TYPE_ABO,
								"date_naissance"=>$row->DATE_NAISSANCE,
								"date_inscription"=>$row->DATE_INSCRIPTION,
								"file_name"=>$row->PHOTO_NAME,
								"tel"=>$row->TEL_FIXE,
								"tel_p"=>$row->TEL_PORTABLE,
								"user_status"=>$row->USER_STATUS,
								"num_user"=>$row->NUMERO_USER																							
								);
				}
				//log_message('error','row : '.$data['user_status']);							
			}
			
			return $data;		
		}
	
		public function get_user_abonnements($id)
		{
			$data=array();		
			$query=$this->db->query("
			
				SELECT  abonnement.\"ID_ABO\",
						to_char(abonnement.\"DATE_DEBUT\", 'DD/MM/YYYY') as \"DATE_DEBUT\",
						to_char(abonnement.\"DATE_DEBUT\", 'YYYY-MM-DD') as \"DATE_DEBUT_FOR_INPUT\",
					   to_char(abonnement.\"DATE_FIN\", 'DD/MM/YYYY') as \"DATE_FIN\",
					   to_char(abonnement.\"DATE_FIN\", 'YYYY-MM-DD') as \"DATE_FIN_FOR_INPUT\",
					   abonnement.\"NB_JOURNAUX\",
					   abonnement.\"PRIX\",
					   abonnement.\"PAYER\",
					   abonnement.\"MODE_PAIEMENT\",
					   abonnement.\"ID_BANQUE\",
					   abonnement.\"NOM_PAYEUR\",
				       CASE WHEN abonnement.\"DATE_FIN\">now() THEN 'En Cours'
				            ELSE 'Clôturé'
				       END as \"ABO_STATUS\"					   
				FROM   abonnement
				WHERE  abonnement.\"ID_USER\"=$id
				ORDER BY abonnement.\"ID_USER\" asc
					   
									");
			
			if($query->num_rows()>0)
			{
				foreach ($query->result() as $row)
				{				
					array_push($data,array(
								"id_abo"=>$row->ID_ABO,
								"date_debut"=>$row->DATE_DEBUT,
								"date_debut_for_input"=>$row->DATE_DEBUT_FOR_INPUT,
								"date_fin"=>$row->DATE_FIN,
								"date_fin_for_input"=>$row->DATE_FIN_FOR_INPUT,
								"nb_journaux"=>$row->NB_JOURNAUX,
								"prix"=>$row->PRIX,
								"payer"=>$row->PAYER,
								"mode_paiement"=>$row->MODE_PAIEMENT,
								"id_banque"=>$row->ID_BANQUE,
								"nom_payeur"=>$row->NOM_PAYEUR,
								"abo_status"=>$row->ABO_STATUS																	
								));
				}							
			}
			
			return $data;		
		}	

		public function get_user_abonnements_by_num_member($id)
		{
			$data=array();		
			$query=$this->db->query("
			
				SELECT  abonnement.\"ID_ABO\",
						to_char(abonnement.\"DATE_DEBUT\", 'DD/MM/YYYY') as \"DATE_DEBUT\",
						to_char(abonnement.\"DATE_DEBUT\", 'YYYY-MM-DD') as \"DATE_DEBUT_FOR_INPUT\",
					   to_char(abonnement.\"DATE_FIN\", 'DD/MM/YYYY') as \"DATE_FIN\",
					   to_char(abonnement.\"DATE_FIN\", 'YYYY-MM-DD') as \"DATE_FIN_FOR_INPUT\",
					   abonnement.\"NB_JOURNAUX\",
					   abonnement.\"PRIX\",
					   abonnement.\"PAYER\",
					   abonnement.\"MODE_PAIEMENT\",
					   abonnement.\"ID_BANQUE\",
					   abonnement.\"NOM_PAYEUR\"
				FROM   abonnement
				WHERE  abonnement.\"NUMERO_USER\"=$id
				ORDER BY abonnement.\"NUMERO_USER\" asc
					   
									");
			
			if($query->num_rows()>0)
			{
				foreach ($query->result() as $row)
				{				
					array_push($data,array(
								"id_abo"=>$row->ID_ABO,
								"date_debut"=>$row->DATE_DEBUT,
								"date_debut_for_input"=>$row->DATE_DEBUT_FOR_INPUT,
								"date_fin"=>$row->DATE_FIN,
								"date_fin_for_input"=>$row->DATE_FIN_FOR_INPUT,
								"nb_journaux"=>$row->NB_JOURNAUX,
								"prix"=>$row->PRIX,
								"payer"=>$row->PAYER,
								"mode_paiement"=>$row->MODE_PAIEMENT,
								"id_banque"=>$row->ID_BANQUE,
								"nom_payeur"=>$row->NOM_PAYEUR																					
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
				
		public function get_all_status_abonnement($with_condition=true)
		{
			$data=array();
			$condition="";
			if($with_condition==true)
			{
				$condition=" where \"ENABLE\"=true ";
			}
			$query=$this->db->query("SELECT \"ID_STATUS_ABO\", \"LIBELLE\"
  								FROM status_abonnement $condition");
			
			if($query->num_rows()>0)
			{
				foreach ($query->result() as $row)
				{				
					array_push($data,array(
											"id"=>$row->ID_STATUS_ABO,
											"libelle"=>$row->LIBELLE
											));
				}							
			}
			
			return $data;		
		}
				
}