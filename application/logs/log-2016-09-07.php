<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2016-09-07 00:13:21 --> 
ERROR - 2016-09-07 00:54:38 --> Severity: Notice --> Undefined property: Impression::$mail_model D:\Developpement\Serveur Web\wamp\www\projet14club\application\controllers\Impression.php 95
ERROR - 2016-09-07 00:54:38 --> Severity: Error --> Call to a member function update_abonnement_by_sending_news() on a non-object D:\Developpement\Serveur Web\wamp\www\projet14club\application\controllers\Impression.php 95
ERROR - 2016-09-07 00:56:19 --> Severity: Warning --> Missing argument 1 for Impression::etiquette_abonne() D:\Developpement\Serveur Web\wamp\www\projet14club\application\controllers\Impression.php 88
ERROR - 2016-09-07 00:56:19 --> Severity: Notice --> Undefined variable: id D:\Developpement\Serveur Web\wamp\www\projet14club\application\controllers\Impression.php 92
ERROR - 2016-09-07 00:56:19 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  syntaxe en entrée invalide pour l'entier : «  »
LINE 15:              where users.&quot;ID_USER&quot;='' 
                                            ^ D:\Developpement\Serveur Web\wamp\www\projet14club\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2016-09-07 00:56:19 --> Query error: ERREUR:  syntaxe en entrée invalide pour l'entier : «  »
LINE 15:              where users."ID_USER"='' 
                                            ^ - Invalid query: 
			
			SELECT "ID_USER", "NB_JOURNAUX_TOTAL", "NOM", "PRENOM", "SEXE", 
						"CP", "VILLE", "EMAIL", "ADRESSE1", "PAYS", "LIBELLE","USER_STATUS" 
				FROM (
						SELECT DISTINCT (users."ID_USER") as "ID_USER", SUM(abonnement."NB_JOURNAUX") as "NB_JOURNAUX_TOTAL", users."NOM", users."PRENOM", users."SEXE", 
														users."CP", users."VILLE", users."EMAIL", users."ADRESSE1", users."PAYS",
						 								type_abonnement."LIBELLE",
				 								       CASE WHEN MAX(abonnement."DATE_FIN")>now() THEN 'En Cours'
												            ELSE 'Clôturé'
												       END as "USER_STATUS"
			  								FROM 		users
			  								   			LEFT JOIN type_abonnement ON (type_abonnement."ID_TYPE_ABO"=users."ID_TYPE_ABO")
			  									 		LEFT JOIN abonnement ON (abonnement."ID_USER"=users."ID_USER") 
			  								where users."ID_USER"='' 
			  								GROUP BY users."ID_USER", users."NOM", users."PRENOM", users."SEXE", 
														users."CP", users."VILLE", users."EMAIL", users."ADRESSE1",users."PAYS",
						 								type_abonnement."LIBELLE"
						 ) t1
				  WHERE t1."NB_JOURNAUX_TOTAL">0
			 					
  								
ERROR - 2016-09-07 00:56:57 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  syntaxe en entrée invalide pour l'entier : «  »
LINE 15:              where users.&quot;ID_USER&quot;='' 
                                            ^ D:\Developpement\Serveur Web\wamp\www\projet14club\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2016-09-07 00:56:57 --> Query error: ERREUR:  syntaxe en entrée invalide pour l'entier : «  »
LINE 15:              where users."ID_USER"='' 
                                            ^ - Invalid query: 
			
			SELECT "ID_USER", "NB_JOURNAUX_TOTAL", "NOM", "PRENOM", "SEXE", 
						"CP", "VILLE", "EMAIL", "ADRESSE1", "PAYS", "LIBELLE","USER_STATUS" 
				FROM (
						SELECT DISTINCT (users."ID_USER") as "ID_USER", SUM(abonnement."NB_JOURNAUX") as "NB_JOURNAUX_TOTAL", users."NOM", users."PRENOM", users."SEXE", 
														users."CP", users."VILLE", users."EMAIL", users."ADRESSE1", users."PAYS",
						 								type_abonnement."LIBELLE",
				 								       CASE WHEN MAX(abonnement."DATE_FIN")>now() THEN 'En Cours'
												            ELSE 'Clôturé'
												       END as "USER_STATUS"
			  								FROM 		users
			  								   			LEFT JOIN type_abonnement ON (type_abonnement."ID_TYPE_ABO"=users."ID_TYPE_ABO")
			  									 		LEFT JOIN abonnement ON (abonnement."ID_USER"=users."ID_USER") 
			  								where users."ID_USER"='' 
			  								GROUP BY users."ID_USER", users."NOM", users."PRENOM", users."SEXE", 
														users."CP", users."VILLE", users."EMAIL", users."ADRESSE1",users."PAYS",
						 								type_abonnement."LIBELLE"
						 ) t1
				  WHERE t1."NB_JOURNAUX_TOTAL">0
			 					
  								
ERROR - 2016-09-07 00:57:49 --> Severity: Notice --> Undefined property: Impression::$mail_model D:\Developpement\Serveur Web\wamp\www\projet14club\application\controllers\Impression.php 98
ERROR - 2016-09-07 00:57:49 --> Severity: Error --> Call to a member function update_abonnement_by_sending_news() on a non-object D:\Developpement\Serveur Web\wamp\www\projet14club\application\controllers\Impression.php 98
ERROR - 2016-09-07 00:58:20 --> Severity: Notice --> Undefined variable: id_user D:\Developpement\Serveur Web\wamp\www\projet14club\application\controllers\Impression.php 99
ERROR - 2016-09-07 00:58:21 --> Severity: Notice --> Undefined variable: nb_to_decremente D:\Developpement\Serveur Web\wamp\www\projet14club\application\controllers\Impression.php 99
ERROR - 2016-09-07 00:58:21 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  erreur de syntaxe sur ou près de « FROM »
LINE 4:           FROM (
                  ^ D:\Developpement\Serveur Web\wamp\www\projet14club\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2016-09-07 00:58:21 --> Query error: ERREUR:  erreur de syntaxe sur ou près de « FROM »
LINE 4:           FROM (
                  ^ - Invalid query: 
								UPDATE abonnement AS a
										SET "NB_JOURNAUX" = "NB_JOURNAUX"-
										FROM (
												select abonnement."ID_ABO" from abonnement join users 
																				on (users."ID_USER"=abonnement."ID_USER") 
																				where users."ID_USER"= 
																				and abonnement."NB_JOURNAUX">0 
																				order by abonnement."DATE_FIN" asc limit 1
											) AS b
								WHERE a."ID_ABO" = b."ID_ABO";
			
ERROR - 2016-09-07 00:58:30 --> Severity: Notice --> Undefined variable: id_user D:\Developpement\Serveur Web\wamp\www\projet14club\application\controllers\Impression.php 99
ERROR - 2016-09-07 00:58:30 --> Severity: Notice --> Undefined variable: nb_to_decremente D:\Developpement\Serveur Web\wamp\www\projet14club\application\controllers\Impression.php 99
ERROR - 2016-09-07 00:58:30 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  erreur de syntaxe sur ou près de « FROM »
LINE 4:           FROM (
                  ^ D:\Developpement\Serveur Web\wamp\www\projet14club\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2016-09-07 00:58:30 --> Query error: ERREUR:  erreur de syntaxe sur ou près de « FROM »
LINE 4:           FROM (
                  ^ - Invalid query: 
								UPDATE abonnement AS a
										SET "NB_JOURNAUX" = "NB_JOURNAUX"-
										FROM (
												select abonnement."ID_ABO" from abonnement join users 
																				on (users."ID_USER"=abonnement."ID_USER") 
																				where users."ID_USER"= 
																				and abonnement."NB_JOURNAUX">0 
																				order by abonnement."DATE_FIN" asc limit 1
											) AS b
								WHERE a."ID_ABO" = b."ID_ABO";
			
ERROR - 2016-09-07 00:59:25 --> Severity: Notice --> Undefined variable: id D:\Developpement\Serveur Web\wamp\www\projet14club\application\controllers\Impression.php 96
ERROR - 2016-09-07 00:59:25 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  syntaxe en entrée invalide pour l'entier : «  »
LINE 15:              where users.&quot;ID_USER&quot;='' 
                                            ^ D:\Developpement\Serveur Web\wamp\www\projet14club\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2016-09-07 00:59:25 --> Query error: ERREUR:  syntaxe en entrée invalide pour l'entier : «  »
LINE 15:              where users."ID_USER"='' 
                                            ^ - Invalid query: 
			
			SELECT "ID_USER", "NB_JOURNAUX_TOTAL", "NOM", "PRENOM", "SEXE", 
						"CP", "VILLE", "EMAIL", "ADRESSE1", "PAYS", "LIBELLE","USER_STATUS" 
				FROM (
						SELECT DISTINCT (users."ID_USER") as "ID_USER", SUM(abonnement."NB_JOURNAUX") as "NB_JOURNAUX_TOTAL", users."NOM", users."PRENOM", users."SEXE", 
														users."CP", users."VILLE", users."EMAIL", users."ADRESSE1", users."PAYS",
						 								type_abonnement."LIBELLE",
				 								       CASE WHEN MAX(abonnement."DATE_FIN")>now() THEN 'En Cours'
												            ELSE 'Clôturé'
												       END as "USER_STATUS"
			  								FROM 		users
			  								   			LEFT JOIN type_abonnement ON (type_abonnement."ID_TYPE_ABO"=users."ID_TYPE_ABO")
			  									 		LEFT JOIN abonnement ON (abonnement."ID_USER"=users."ID_USER") 
			  								where users."ID_USER"='' 
			  								GROUP BY users."ID_USER", users."NOM", users."PRENOM", users."SEXE", 
														users."CP", users."VILLE", users."EMAIL", users."ADRESSE1",users."PAYS",
						 								type_abonnement."LIBELLE"
						 ) t1
				  WHERE t1."NB_JOURNAUX_TOTAL">0
			 					
  								
ERROR - 2016-09-07 00:59:51 --> 0
ERROR - 2016-09-07 01:00:06 --> 0
ERROR - 2016-09-07 01:00:33 --> 
ERROR - 2016-09-07 01:00:53 --> I came here
ERROR - 2016-09-07 01:00:53 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  erreur de syntaxe sur ou près de « GROUP »
LINE 14:            GROUP BY  users.&quot;ID_USER&quot;, users.&quot;NUMERO_USER&quot;, u...
                    ^ D:\Developpement\Serveur Web\wamp\www\projet14club\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2016-09-07 01:00:53 --> Query error: ERREUR:  erreur de syntaxe sur ou près de « GROUP »
LINE 14:            GROUP BY  users."ID_USER", users."NUMERO_USER", u...
                    ^ - Invalid query: SELECT users."ID_USER",users."NOM", users."PRENOM", users."SEXE", users."EMAIL", users."REMARQUE", 
										users."ADRESSE1",  users."ADRESSE2", users."CP", users."VILLE", users."PAYS",
										 users."ID_TYPE_ABO", to_char(users."DATE_NAISSANCE", 'YYYY-MM-DD') as "DATE_NAISSANCE",  users."NUMERO_USER",
										  to_char(users."DATE_INSCRIPTION", 'YYYY-MM-DD') as "DATE_INSCRIPTION" ,
										  users."PHOTO_NAME", users."TEL_FIXE", users."TEL_PORTABLE",
										   type_abonnement."LIBELLE" as "LIBELLE_TYPE_ABO",
	 								       CASE WHEN MAX(abonnement."DATE_FIN")>now() THEN 'En Cours'
									            ELSE 'Clôturé'
									       END as "USER_STATUS"										   
  								FROM users
  								LEFT JOIN type_abonnement ON (type_abonnement."ID_TYPE_ABO"=users."ID_TYPE_ABO")
  								LEFT JOIN abonnement ON (abonnement."ID_USER"=users."ID_USER")  								
  								 WHERE users."ID_USER"=
  								 GROUP BY  users."ID_USER", users."NUMERO_USER", users."NOM", users."PRENOM", users."SEXE", users."EMAIL", 
										users."ADRESSE1", users."ADRESSE2", users."CP", users."VILLE",
										 users."ID_TYPE_ABO", "DATE_NAISSANCE",
										  "DATE_INSCRIPTION" ,
										  users."PHOTO_NAME", users."TEL_FIXE", users."TEL_PORTABLE", users."REMARQUE", users."PAYS", 
										   "LIBELLE_TYPE_ABO" 
ERROR - 2016-09-07 01:07:23 --> 
ERROR - 2016-09-07 01:07:37 --> Severity: Notice --> Undefined property: Administration::$session D:\Developpement\Serveur Web\wamp\www\projet14club\application\controllers\Administration.php 158
ERROR - 2016-09-07 01:07:38 --> Severity: Error --> Call to a member function flashdata() on a non-object D:\Developpement\Serveur Web\wamp\www\projet14club\application\controllers\Administration.php 158
ERROR - 2016-09-07 01:15:48 --> 
ERROR - 2016-09-07 01:16:02 --> 0
ERROR - 2016-09-07 01:16:02 --> Severity: Notice --> Undefined index: num_user D:\Developpement\Serveur Web\wamp\www\projet14club\application\views\impression\v_impression_etiquettes_generated.php 29
ERROR - 2016-09-07 01:21:27 --> 0
ERROR - 2016-09-07 01:21:40 --> 0
ERROR - 2016-09-07 01:22:02 --> 0
ERROR - 2016-09-07 01:22:02 --> 1
ERROR - 2016-09-07 01:31:48 --> Severity: Notice --> Undefined variable: abonne D:\Developpement\Serveur Web\wamp\www\projet14club\application\views\administration\v_administration_gestion_archived.php 164
ERROR - 2016-09-07 01:47:19 --> 
ERROR - 2016-09-07 01:48:07 --> 
ERROR - 2016-09-07 01:48:33 --> Severity: Warning --> Missing argument 1 for Administration::etiquettes_archived() D:\Developpement\Serveur Web\wamp\www\projet14club\application\controllers\Administration.php 252
ERROR - 2016-09-07 01:48:33 --> 0
ERROR - 2016-09-07 01:48:33 --> 1
ERROR - 2016-09-07 01:48:48 --> 0
ERROR - 2016-09-07 01:48:48 --> 1
ERROR - 2016-09-07 01:49:03 --> 
ERROR - 2016-09-07 01:49:47 --> 0
ERROR - 2016-09-07 01:49:47 --> 1
ERROR - 2016-09-07 01:49:55 --> 
ERROR - 2016-09-07 01:50:36 --> 0
ERROR - 2016-09-07 01:50:36 --> 1
ERROR - 2016-09-07 01:50:47 --> 
ERROR - 2016-09-07 12:36:56 --> 
ERROR - 2016-09-07 12:37:24 --> You did not select a file to upload.
ERROR - 2016-09-07 12:38:20 --> 
ERROR - 2016-09-07 12:38:40 --> You did not select a file to upload.
