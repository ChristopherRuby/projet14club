<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2016-12-07 00:11:22 --> Array
(
    [nom] => dupond
    [prenom] => 
    [ville] => 
    [cp] => 
    [pays] => 
    [dep] => 
    [type_abo] => 
    [status_abo] => 
    [b_day] => 
    [b_month] => 
    [b_year] => 
    [s_day] => 
    [s_month] => 
    [s_year] => 
    [last_abo] => 
    [form_activation] => 1
    [next_step] => 1
)

ERROR - 2016-12-07 00:34:07 --> Array
(
    [nom] => dupond
    [prenom] => 
    [ville] => 
    [cp] => 
    [pays] => 
    [dep] => 
    [type_abo] => 
    [status_abo] => 
    [b_day] => 
    [b_month] => 
    [b_year] => 
    [s_day] => 
    [s_month] => 
    [s_year] => 
    [last_abo] => 
    [form_activation] => 1
    [next_step] => 1
)

ERROR - 2016-12-07 00:42:21 --> Severity: Parsing Error --> syntax error, unexpected '$this' (T_VARIABLE), expecting function (T_FUNCTION) D:\Developpement\Serveur Web\wamp\www\projet14club\application\controllers\Mailing.php 184
ERROR - 2016-12-07 00:43:10 --> Severity: Notice --> Undefined variable: receiver D:\Developpement\Serveur Web\wamp\www\projet14club\application\controllers\Mailing.php 150
ERROR - 2016-12-07 00:43:10 --> Severity: Warning --> Invalid argument supplied for foreach() D:\Developpement\Serveur Web\wamp\www\projet14club\application\controllers\Mailing.php 150
ERROR - 2016-12-07 00:43:29 --> Array
(
    [nom] => dupond
    [prenom] => 
    [ville] => 
    [cp] => 
    [pays] => 
    [dep] => 
    [type_abo] => 
    [status_abo] => 
    [b_day] => 
    [b_month] => 
    [b_year] => 
    [s_day] => 
    [s_month] => 
    [s_year] => 
    [last_abo] => 
    [form_activation] => 1
    [next_step] => 1
)

ERROR - 2016-12-07 00:43:30 --> Severity: Notice --> Undefined variable: receiver D:\Developpement\Serveur Web\wamp\www\projet14club\application\controllers\Mailing.php 150
ERROR - 2016-12-07 00:43:30 --> Severity: Warning --> Invalid argument supplied for foreach() D:\Developpement\Serveur Web\wamp\www\projet14club\application\controllers\Mailing.php 150
ERROR - 2016-12-07 00:50:56 --> You did not select a file to upload.
ERROR - 2016-12-07 00:50:59 --> oki
ERROR - 2016-12-07 01:00:25 --> WHY : 
ERROR - 2016-12-07 01:00:25 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  erreur de syntaxe sur ou près de « GROUP »
LINE 14:            GROUP BY  users.&quot;ID_USER&quot;, users.&quot;NUMERO_USER&quot;, u...
                    ^ D:\Developpement\Serveur Web\wamp\www\projet14club\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2016-12-07 01:00:25 --> Query error: ERREUR:  erreur de syntaxe sur ou près de « GROUP »
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
ERROR - 2016-12-07 01:03:19 --> WHY : 40015
ERROR - 2016-12-07 01:10:21 --> Array
(
    [nom] => 
    [prenom] => 
    [ville] => 
    [cp] => 
    [pays] => 
    [dep] => 
    [type_abo] => 
    [status_abo] => 
    [b_day] => 
    [b_month] => 
    [b_year] => 
    [s_day] => 
    [s_month] => 
    [s_year] => 
    [a_day] => 6
    [a_month] => 9
    [a_year] => 
    [form_activation] => 1
    [next_step] => 1
)

ERROR - 2016-12-07 01:10:42 --> You did not select a file to upload.
ERROR - 2016-12-07 01:11:15 --> WHY : 40015
ERROR - 2016-12-07 01:11:23 --> WHY : 40015
ERROR - 2016-12-07 01:14:49 --> 0
ERROR - 2016-12-07 01:15:03 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  erreur de syntaxe sur ou près de « GROUP »
LINE 16:              GROUP BY users.&quot;ID_USER&quot;, users.&quot;NOM&quot;, users.&quot;P...
                      ^ D:\Developpement\Serveur Web\wamp\www\projet14club\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2016-12-07 01:15:03 --> Query error: ERREUR:  erreur de syntaxe sur ou près de « GROUP »
LINE 16:              GROUP BY users."ID_USER", users."NOM", users."P...
                      ^ - Invalid query: 
			
			SELECT "ID_USER", "NUMERO_USER", "NB_JOURNAUX_TOTAL", "NOM", "PRENOM", "SEXE", 
						"CP", "VILLE", "EMAIL", "ADRESSE1", "PAYS", "LIBELLE","USER_STATUS" 
				FROM (
						SELECT DISTINCT (users."ID_USER") as "ID_USER", "NUMERO_USER", SUM(abonnement."NB_JOURNAUX") as "NB_JOURNAUX_TOTAL", users."NOM", users."PRENOM", users."SEXE", 
														users."CP", users."VILLE", users."EMAIL", users."ADRESSE1", users."PAYS",
						 								type_abonnement."LIBELLE",
				 								       CASE WHEN MAX(abonnement."DATE_FIN")>now() THEN 'En Cours'
												            ELSE 'Clôturé'
												       END as "USER_STATUS"
			  								FROM 		users
			  								   			LEFT JOIN type_abonnement ON (type_abonnement."ID_TYPE_ABO"=users."ID_TYPE_ABO")
			  									 		LEFT JOIN abonnement ON (abonnement."ID_USER"=users."ID_USER") 
			  								where users."ID_USER" in (  
			  								GROUP BY users."ID_USER", users."NOM", users."PRENOM", users."SEXE", "NUMERO_USER",
														users."CP", users."VILLE", users."EMAIL", users."ADRESSE1",users."PAYS",
						 								type_abonnement."LIBELLE"
						 ) t1
				  -- COMMENTAIRE ************ WHERE t1."NB_JOURNAUX_TOTAL">0
			 					
  								
ERROR - 2016-12-07 01:18:11 --> 0
ERROR - 2016-12-07 01:18:18 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  erreur de syntaxe sur ou près de « GROUP »
LINE 16:              GROUP BY users.&quot;ID_USER&quot;, users.&quot;NOM&quot;, users.&quot;P...
                      ^ D:\Developpement\Serveur Web\wamp\www\projet14club\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2016-12-07 01:18:18 --> Query error: ERREUR:  erreur de syntaxe sur ou près de « GROUP »
LINE 16:              GROUP BY users."ID_USER", users."NOM", users."P...
                      ^ - Invalid query: 
			
			SELECT "ID_USER", "NUMERO_USER", "NB_JOURNAUX_TOTAL", "NOM", "PRENOM", "SEXE", 
						"CP", "VILLE", "EMAIL", "ADRESSE1", "PAYS", "LIBELLE","USER_STATUS" 
				FROM (
						SELECT DISTINCT (users."ID_USER") as "ID_USER", "NUMERO_USER", SUM(abonnement."NB_JOURNAUX") as "NB_JOURNAUX_TOTAL", users."NOM", users."PRENOM", users."SEXE", 
														users."CP", users."VILLE", users."EMAIL", users."ADRESSE1", users."PAYS",
						 								type_abonnement."LIBELLE",
				 								       CASE WHEN MAX(abonnement."DATE_FIN")>now() THEN 'En Cours'
												            ELSE 'Clôturé'
												       END as "USER_STATUS"
			  								FROM 		users
			  								   			LEFT JOIN type_abonnement ON (type_abonnement."ID_TYPE_ABO"=users."ID_TYPE_ABO")
			  									 		LEFT JOIN abonnement ON (abonnement."ID_USER"=users."ID_USER") 
			  								where users."ID_USER" in (  
			  								GROUP BY users."ID_USER", users."NOM", users."PRENOM", users."SEXE", "NUMERO_USER",
														users."CP", users."VILLE", users."EMAIL", users."ADRESSE1",users."PAYS",
						 								type_abonnement."LIBELLE"
						 ) t1
				  -- COMMENTAIRE ************ WHERE t1."NB_JOURNAUX_TOTAL">0
			 					
  								
ERROR - 2016-12-07 01:19:19 --> Severity: Notice --> Undefined index: nb_decrem D:\Developpement\Serveur Web\wamp\www\projet14club\application\controllers\Administration.php 131
ERROR - 2016-12-07 01:22:27 --> 0
ERROR - 2016-12-07 01:22:39 --> 0
ERROR - 2016-12-07 17:44:33 --> WHY : 40015
ERROR - 2016-12-07 17:45:17 --> WHY : 40015
