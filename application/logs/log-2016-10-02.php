<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2016-10-02 16:30:14 --> You did not select a file to upload.
ERROR - 2016-10-02 16:30:17 --> Severity: Notice --> Undefined variable: nb_to_decremente D:\Developpement\Serveur Web\wamp\www\projet14club\application\controllers\Mailing.php 227
ERROR - 2016-10-02 16:30:17 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  erreur de syntaxe sur ou près de « FROM »
LINE 4:           FROM (
                  ^ D:\Developpement\Serveur Web\wamp\www\projet14club\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2016-10-02 16:30:17 --> Query error: ERREUR:  erreur de syntaxe sur ou près de « FROM »
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
			
ERROR - 2016-10-02 16:32:59 --> You did not select a file to upload.
ERROR - 2016-10-02 16:33:02 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  erreur de syntaxe sur ou près de « and »
LINE 8:                     and abonnement.&quot;NB_JOURNAUX&quot;&gt;0 
                            ^ D:\Developpement\Serveur Web\wamp\www\projet14club\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2016-10-02 16:33:02 --> Query error: ERREUR:  erreur de syntaxe sur ou près de « and »
LINE 8:                     and abonnement."NB_JOURNAUX">0 
                            ^ - Invalid query: 
								UPDATE abonnement AS a
										SET "NB_JOURNAUX" = "NB_JOURNAUX"-0
										FROM (
												select abonnement."ID_ABO" from abonnement join users 
																				on (users."ID_USER"=abonnement."ID_USER") 
																				where users."ID_USER"= 
																				and abonnement."NB_JOURNAUX">0 
																				order by abonnement."DATE_FIN" asc limit 1
											) AS b
								WHERE a."ID_ABO" = b."ID_ABO";
			
ERROR - 2016-10-02 18:06:51 --> 
ERROR - 2016-10-02 18:06:58 --> 
ERROR - 2016-10-02 18:17:05 --> You did not select a file to upload.
ERROR - 2016-10-02 18:17:07 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  erreur de syntaxe sur ou près de « and »
LINE 8:                     and abonnement.&quot;NB_JOURNAUX&quot;&gt;0 
                            ^ D:\Developpement\Serveur Web\wamp\www\projet14club\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2016-10-02 18:17:07 --> Query error: ERREUR:  erreur de syntaxe sur ou près de « and »
LINE 8:                     and abonnement."NB_JOURNAUX">0 
                            ^ - Invalid query: 
								UPDATE abonnement AS a
										SET "NB_JOURNAUX" = "NB_JOURNAUX"-0
										FROM (
												select abonnement."ID_ABO" from abonnement join users 
																				on (users."ID_USER"=abonnement."ID_USER") 
																				where users."ID_USER"= 
																				and abonnement."NB_JOURNAUX">0 
																				order by abonnement."DATE_FIN" asc limit 1
											) AS b
								WHERE a."ID_ABO" = b."ID_ABO";
			
ERROR - 2016-10-02 18:19:34 --> You did not select a file to upload.
ERROR - 2016-10-02 18:19:36 --> prout
ERROR - 2016-10-02 18:19:36 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  erreur de syntaxe sur ou près de « and »
LINE 8:                     and abonnement.&quot;NB_JOURNAUX&quot;&gt;0 
                            ^ D:\Developpement\Serveur Web\wamp\www\projet14club\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2016-10-02 18:19:36 --> Query error: ERREUR:  erreur de syntaxe sur ou près de « and »
LINE 8:                     and abonnement."NB_JOURNAUX">0 
                            ^ - Invalid query: 
								UPDATE abonnement AS a
										SET "NB_JOURNAUX" = "NB_JOURNAUX"-0
										FROM (
												select abonnement."ID_ABO" from abonnement join users 
																				on (users."ID_USER"=abonnement."ID_USER") 
																				where users."ID_USER"= 
																				and abonnement."NB_JOURNAUX">0 
																				order by abonnement."DATE_FIN" asc limit 1
											) AS b
								WHERE a."ID_ABO" = b."ID_ABO";
			
ERROR - 2016-10-02 18:20:53 --> You did not select a file to upload.
ERROR - 2016-10-02 18:23:46 --> 
ERROR - 2016-10-02 18:24:05 --> file upload success
ERROR - 2016-10-02 18:24:05 --> var : photo_57f134a5bdfb0.jpg 40015
ERROR - 2016-10-02 18:24:05 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  erreur de syntaxe sur ou près de « GROUP »
LINE 14:            GROUP BY  users.&quot;ID_USER&quot;, users.&quot;NUMERO_USER&quot;, u...
                    ^ D:\Developpement\Serveur Web\wamp\www\projet14club\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2016-10-02 18:24:06 --> Query error: ERREUR:  erreur de syntaxe sur ou près de « GROUP »
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
ERROR - 2016-10-02 18:26:44 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  erreur de syntaxe sur ou près de « ORDER »
LINE 16:     ORDER BY abonnement.&quot;ID_USER&quot; asc
             ^ D:\Developpement\Serveur Web\wamp\www\projet14club\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2016-10-02 18:26:44 --> Query error: ERREUR:  erreur de syntaxe sur ou près de « ORDER »
LINE 16:     ORDER BY abonnement."ID_USER" asc
             ^ - Invalid query: 
			
				SELECT  abonnement."ID_ABO",
						to_char(abonnement."DATE_DEBUT", 'DD/MM/YYYY') as "DATE_DEBUT",
						to_char(abonnement."DATE_DEBUT", 'YYYY-MM-DD') as "DATE_DEBUT_FOR_INPUT",
					   to_char(abonnement."DATE_FIN", 'DD/MM/YYYY') as "DATE_FIN",
					   to_char(abonnement."DATE_FIN", 'YYYY-MM-DD') as "DATE_FIN_FOR_INPUT",
					   abonnement."NB_JOURNAUX",
					   abonnement."PRIX",
					   abonnement."PAYER",
					   abonnement."MODE_PAIEMENT",
					   abonnement."ID_BANQUE",
					   abonnement."NOM_PAYEUR"
				FROM   abonnement
				WHERE  abonnement."ID_USER"=
				ORDER BY abonnement."ID_USER" asc
					   
									
ERROR - 2016-10-02 18:29:28 --> WHY : 
ERROR - 2016-10-02 18:29:28 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  erreur de syntaxe sur ou près de « GROUP »
LINE 14:            GROUP BY  users.&quot;ID_USER&quot;, users.&quot;NUMERO_USER&quot;, u...
                    ^ D:\Developpement\Serveur Web\wamp\www\projet14club\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2016-10-02 18:29:28 --> Query error: ERREUR:  erreur de syntaxe sur ou près de « GROUP »
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
ERROR - 2016-10-02 18:29:31 --> WHY : 
ERROR - 2016-10-02 18:29:31 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  erreur de syntaxe sur ou près de « GROUP »
LINE 14:            GROUP BY  users.&quot;ID_USER&quot;, users.&quot;NUMERO_USER&quot;, u...
                    ^ D:\Developpement\Serveur Web\wamp\www\projet14club\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2016-10-02 18:29:31 --> Query error: ERREUR:  erreur de syntaxe sur ou près de « GROUP »
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
ERROR - 2016-10-02 18:37:39 --> WHY : 40015
ERROR - 2016-10-02 18:37:47 --> 
ERROR - 2016-10-02 18:37:51 --> WHY : 40015
ERROR - 2016-10-02 18:37:54 --> 
ERROR - 2016-10-02 18:38:05 --> WHY : 40015
ERROR - 2016-10-02 18:38:35 --> file upload success
ERROR - 2016-10-02 18:38:35 --> var : photo_57f1380b44d18.jpg 40015
ERROR - 2016-10-02 18:38:35 --> WHY : 
ERROR - 2016-10-02 18:38:35 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  erreur de syntaxe sur ou près de « GROUP »
LINE 14:            GROUP BY  users.&quot;ID_USER&quot;, users.&quot;NUMERO_USER&quot;, u...
                    ^ D:\Developpement\Serveur Web\wamp\www\projet14club\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2016-10-02 18:38:35 --> Query error: ERREUR:  erreur de syntaxe sur ou près de « GROUP »
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
ERROR - 2016-10-02 18:38:41 --> WHY : 40015
ERROR - 2016-10-02 18:40:58 --> WHY : 40015
ERROR - 2016-10-02 18:41:18 --> file upload success
ERROR - 2016-10-02 18:41:18 --> var : photo_57f138ae0dc67.jpg 40015
ERROR - 2016-10-02 18:41:18 --> WHY : 
ERROR - 2016-10-02 18:41:18 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  erreur de syntaxe sur ou près de « GROUP »
LINE 14:            GROUP BY  users.&quot;ID_USER&quot;, users.&quot;NUMERO_USER&quot;, u...
                    ^ D:\Developpement\Serveur Web\wamp\www\projet14club\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2016-10-02 18:41:18 --> Query error: ERREUR:  erreur de syntaxe sur ou près de « GROUP »
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
ERROR - 2016-10-02 18:43:53 --> WHY : 40015
ERROR - 2016-10-02 18:44:05 --> file upload success
ERROR - 2016-10-02 18:44:05 --> var : photo_57f139552ce4a.jpg 40015
ERROR - 2016-10-02 18:44:05 --> WHY : 
ERROR - 2016-10-02 18:44:05 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  erreur de syntaxe sur ou près de « GROUP »
LINE 14:            GROUP BY  users.&quot;ID_USER&quot;, users.&quot;NUMERO_USER&quot;, u...
                    ^ D:\Developpement\Serveur Web\wamp\www\projet14club\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2016-10-02 18:44:05 --> Query error: ERREUR:  erreur de syntaxe sur ou près de « GROUP »
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
ERROR - 2016-10-02 18:44:43 --> WHY : 40015
ERROR - 2016-10-02 18:44:54 --> WHY : 40015
ERROR - 2016-10-02 18:44:54 --> AV redirect id_abonne : 40015
ERROR - 2016-10-02 18:44:54 --> AV redirect num_member : : 40053
ERROR - 2016-10-02 18:44:54 --> WHY : 40015
ERROR - 2016-10-02 18:49:58 --> file upload success
ERROR - 2016-10-02 18:49:58 --> WHY : 40015
ERROR - 2016-10-02 18:50:17 --> file upload success
ERROR - 2016-10-02 18:50:17 --> WHY : 40015
ERROR - 2016-10-02 18:59:17 --> file upload success
ERROR - 2016-10-02 18:59:17 --> WHY : 40015
ERROR - 2016-10-02 19:11:53 --> flash data INDEXAucun abonnement non-payé en cours
ERROR - 2016-10-02 19:12:10 --> 
ERROR - 2016-10-02 19:12:21 --> WHY : 40015
ERROR - 2016-10-02 19:12:52 --> WHY : 40015
ERROR - 2016-10-02 19:13:01 --> flash data INDEXAucun abonnement non-payé en cours
ERROR - 2016-10-02 19:13:13 --> Severity: Warning --> Missing argument 1 for Abonne::view_abonne() D:\Developpement\Serveur Web\wamp\www\projet14club\application\controllers\Abonne.php 220
ERROR - 2016-10-02 19:13:13 --> Severity: Notice --> Undefined variable: num_member D:\Developpement\Serveur Web\wamp\www\projet14club\application\controllers\Abonne.php 229
ERROR - 2016-10-02 19:13:13 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  erreur de syntaxe à la fin de l'entrée
LINE 7:          
                 ^ D:\Developpement\Serveur Web\wamp\www\projet14club\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2016-10-02 19:13:13 --> Query error: ERREUR:  erreur de syntaxe à la fin de l'entrée
LINE 7:          
                 ^ - Invalid query: 
			
				SELECT  users."ID_USER", users."NUMERO_USER"
				FROM   users
				WHERE  users."NUMERO_USER"=
					   
									
ERROR - 2016-10-02 19:13:16 --> WHY : 40015
ERROR - 2016-10-02 19:13:23 --> WHY : 40015
ERROR - 2016-10-02 19:13:31 --> flash data INDEXAucun abonnement non-payé en cours
ERROR - 2016-10-02 19:14:09 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  erreur de syntaxe sur ou près de « , »
LINE 4: ...   'yuyu','Chèque Traditionnels Français','false',1 ,,FALSE)
                                                                ^ D:\Developpement\Serveur Web\wamp\www\projet14club\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2016-10-02 19:14:09 --> Query error: ERREUR:  erreur de syntaxe sur ou près de « , »
LINE 4: ...   'yuyu','Chèque Traditionnels Français','false',1 ,,FALSE)
                                                                ^ - Invalid query: 
				INSERT INTO abonnement ("ID_ABO","DATE_DEBUT","DATE_FIN","NB_JOURNAUX","PRIX","NOM_PAYEUR","MODE_PAIEMENT","PAYER","ID_BANQUE","ID_USER","GEN_BORDEREAU")
							 VALUES (nextval('seq_fiche_abonnement'),to_date('2016-10-02','yyyy-mm-dd'),to_date('2017-10-02','yyyy-mm-dd'),5,44,
							 			'yuyu','Chèque Traditionnels Français','false',1 ,,FALSE)
							 			
ERROR - 2016-10-02 19:16:36 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  erreur de syntaxe sur ou près de « , »
LINE 4: ...   'yuyu','Chèque Traditionnels Français','false',1 ,,FALSE)
                                                                ^ D:\Developpement\Serveur Web\wamp\www\projet14club\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2016-10-02 19:16:36 --> Query error: ERREUR:  erreur de syntaxe sur ou près de « , »
LINE 4: ...   'yuyu','Chèque Traditionnels Français','false',1 ,,FALSE)
                                                                ^ - Invalid query: 
				INSERT INTO abonnement ("ID_ABO","DATE_DEBUT","DATE_FIN","NB_JOURNAUX","PRIX","NOM_PAYEUR","MODE_PAIEMENT","PAYER","ID_BANQUE","ID_USER","GEN_BORDEREAU")
							 VALUES (nextval('seq_fiche_abonnement'),to_date('2016-10-02','yyyy-mm-dd'),to_date('2017-10-02','yyyy-mm-dd'),5,44,
							 			'yuyu','Chèque Traditionnels Français','false',1 ,,FALSE)
							 			
ERROR - 2016-10-02 19:16:39 --> WHY : 40015
ERROR - 2016-10-02 19:17:44 --> WHY : 40015
ERROR - 2016-10-02 19:18:18 --> WHY : 40015
ERROR - 2016-10-02 19:18:34 --> flash data INDEXAucun abonnement non-payé en cours
ERROR - 2016-10-02 19:20:03 --> WHY : 40015
ERROR - 2016-10-02 19:20:13 --> WHY : 40015
ERROR - 2016-10-02 19:20:41 --> WHY : 40015
ERROR - 2016-10-02 19:21:40 --> WHY : 40015
ERROR - 2016-10-02 19:22:04 --> WHY : 40015
ERROR - 2016-10-02 19:22:33 --> WHY : 40015
