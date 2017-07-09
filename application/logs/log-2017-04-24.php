<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-04-24 00:03:37 --> Severity: Warning --> Missing argument 1 for Abonne::view_abonne() D:\Developpement\Serveur Web\wamp\www\projet14club\application\controllers\Abonne.php 235
ERROR - 2017-04-24 00:03:37 --> Severity: Notice --> Undefined variable: num_member D:\Developpement\Serveur Web\wamp\www\projet14club\application\controllers\Abonne.php 244
ERROR - 2017-04-24 00:03:38 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  erreur de syntaxe à la fin de l'entrée
LINE 7:          
                 ^ D:\Developpement\Serveur Web\wamp\www\projet14club\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2017-04-24 00:03:38 --> Query error: ERREUR:  erreur de syntaxe à la fin de l'entrée
LINE 7:          
                 ^ - Invalid query: 
			
				SELECT  users."ID_USER", users."NUMERO_USER"
				FROM   users
				WHERE  users."NUMERO_USER"=
					   
									
ERROR - 2017-04-24 00:03:49 --> WHY : 196
ERROR - 2017-04-24 00:04:12 --> WHY : 40015
ERROR - 2017-04-24 00:04:21 --> WHY : 40015
ERROR - 2017-04-24 00:05:25 --> WHY : 40015
ERROR - 2017-04-24 00:09:23 --> WHY : 40015
ERROR - 2017-04-24 00:09:59 --> WHY : 40015
ERROR - 2017-04-24 00:11:08 --> WHY : 40015
ERROR - 2017-04-24 00:40:56 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  erreur de syntaxe sur ou près de « from »
LINE 11:            users.&quot;CP&quot;, substr(users.&quot;CP&quot; from '^..' ) as &quot;DE...
                                                  ^ D:\Developpement\Serveur Web\wamp\www\projet14club\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2017-04-24 00:40:56 --> Query error: ERREUR:  erreur de syntaxe sur ou près de « from »
LINE 11:            users."CP", substr(users."CP" from '^..' ) as "DE...
                                                  ^ - Invalid query: 
						SELECT "ID_USER", "DATE_FIN", "NOM", "PRENOM", "SEXE", "PAYS", "CP", "DEP", "VILLE", "ADRESSE1", "EMAIL", "LIBELLE",
									 "USER_STATUS", to_char("DATE_NAISSANCE",'DD/MM/YYYY') as "DATE_NAISSANCE", "B_MONTH", "B_YEAR", "NUMERO_USER",
								       date_part('month', "DATE_FIN") as "A_MONTH",
								       date_part('year', "DATE_FIN") as "A_YEAR",
								       date_part('day', "DATE_FIN") as "A_DAY",
								       "NB_JOURNAUX"	
							 from
								(
								SELECT DISTINCT (users."ID_USER") as "ID_USER", users."NOM", users."PRENOM", users."SEXE", 
											users."CP", substr(users."CP" from '^..' ) as "DEP", users."VILLE", users."ADRESSE1", users."EMAIL", users."PAYS",  users."NUMERO_USER",
			 								type_abonnement."LIBELLE",
			 								MAX(abonnement."DATE_FIN") as "DATE_FIN",
	 								       CASE WHEN MAX(abonnement."DATE_FIN")>now() THEN 'En cours'
									            ELSE 'Clôturé'
									       END as "USER_STATUS",
									       SUM(abonnement."NB_JOURNAUX") as "NB_JOURNAUX",
									       date_part('month', users."DATE_NAISSANCE") as "B_MONTH",
									       date_part('year', users."DATE_NAISSANCE") as "B_YEAR",
									       date_part('day', users."DATE_NAISSANCE") as "B_DAY",							       
									       users."DATE_NAISSANCE",
									       users."DATE_INSCRIPTION"
  								FROM 		users
  								   			LEFT JOIN type_abonnement ON (type_abonnement."ID_TYPE_ABO"=users."ID_TYPE_ABO")
  									 		LEFT JOIN abonnement ON (abonnement."ID_USER"=users."ID_USER")
  									 		
  								WHERE 1=1 
  								 and users."CP" like '77%'  

  								GROUP BY users."ID_USER", users."NUMERO_USER", users."NOM", users."PRENOM", users."SEXE", 
											users."CP", users."VILLE", users."EMAIL", users."PAYS", users."ADRESSE1",
											users."DATE_NAISSANCE",users."DATE_INSCRIPTION",
			 								type_abonnement."LIBELLE"
			 					) as t1 
			 					where 1=1 
			 					
  								
ERROR - 2017-04-24 00:42:34 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  la colonne users.DEP n'existe pas
LINE 28:            and users.&quot;DEP&quot; = '77'  
                        ^ D:\Developpement\Serveur Web\wamp\www\projet14club\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2017-04-24 00:42:34 --> Query error: ERREUR:  la colonne users.DEP n'existe pas
LINE 28:            and users."DEP" = '77'  
                        ^ - Invalid query: 
						SELECT "ID_USER", "DATE_FIN", "NOM", "PRENOM", "SEXE", "PAYS", "CP", "DEP", "VILLE", "ADRESSE1", "EMAIL", "LIBELLE",
									 "USER_STATUS", to_char("DATE_NAISSANCE",'DD/MM/YYYY') as "DATE_NAISSANCE", "B_MONTH", "B_YEAR", "NUMERO_USER",
								       date_part('month', "DATE_FIN") as "A_MONTH",
								       date_part('year', "DATE_FIN") as "A_YEAR",
								       date_part('day', "DATE_FIN") as "A_DAY",
								       "NB_JOURNAUX"	
							 from
								(
								SELECT DISTINCT (users."ID_USER") as "ID_USER", users."NOM", users."PRENOM", users."SEXE", 
											users."CP", substring(users."CP" from '^..' ) as "DEP", users."VILLE", users."ADRESSE1", users."EMAIL", users."PAYS",  users."NUMERO_USER",
			 								type_abonnement."LIBELLE",
			 								MAX(abonnement."DATE_FIN") as "DATE_FIN",
	 								       CASE WHEN MAX(abonnement."DATE_FIN")>now() THEN 'En cours'
									            ELSE 'Clôturé'
									       END as "USER_STATUS",
									       SUM(abonnement."NB_JOURNAUX") as "NB_JOURNAUX",
									       date_part('month', users."DATE_NAISSANCE") as "B_MONTH",
									       date_part('year', users."DATE_NAISSANCE") as "B_YEAR",
									       date_part('day', users."DATE_NAISSANCE") as "B_DAY",							       
									       users."DATE_NAISSANCE",
									       users."DATE_INSCRIPTION"
  								FROM 		users
  								   			LEFT JOIN type_abonnement ON (type_abonnement."ID_TYPE_ABO"=users."ID_TYPE_ABO")
  									 		LEFT JOIN abonnement ON (abonnement."ID_USER"=users."ID_USER")
  									 		
  								WHERE 1=1 
  								 and users."DEP" = '77'  

  								GROUP BY users."ID_USER", users."NUMERO_USER", users."NOM", users."PRENOM", users."SEXE", 
											users."CP", users."VILLE", users."EMAIL", users."PAYS", users."ADRESSE1",
											users."DATE_NAISSANCE",users."DATE_INSCRIPTION",
			 								type_abonnement."LIBELLE"
			 					) as t1 
			 					where 1=1 
			 					
  								
ERROR - 2017-04-24 00:44:59 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  la colonne « DEP » n'existe pas
LINE 28:            and &quot;DEP&quot; = '77'  
                        ^ D:\Developpement\Serveur Web\wamp\www\projet14club\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2017-04-24 00:44:59 --> Query error: ERREUR:  la colonne « DEP » n'existe pas
LINE 28:            and "DEP" = '77'  
                        ^ - Invalid query: 
						SELECT "ID_USER", "DATE_FIN", "NOM", "PRENOM", "SEXE", "PAYS", "CP", "DEP", "VILLE", "ADRESSE1", "EMAIL", "LIBELLE",
									 "USER_STATUS", to_char("DATE_NAISSANCE",'DD/MM/YYYY') as "DATE_NAISSANCE", "B_MONTH", "B_YEAR", "NUMERO_USER",
								       date_part('month', "DATE_FIN") as "A_MONTH",
								       date_part('year', "DATE_FIN") as "A_YEAR",
								       date_part('day', "DATE_FIN") as "A_DAY",
								       "NB_JOURNAUX"	
							 from
								(
								SELECT DISTINCT (users."ID_USER") as "ID_USER", users."NOM", users."PRENOM", users."SEXE", 
											users."CP", substring(users."CP" from '^..' ) as "DEP", users."VILLE", users."ADRESSE1", users."EMAIL", users."PAYS",  users."NUMERO_USER",
			 								type_abonnement."LIBELLE",
			 								MAX(abonnement."DATE_FIN") as "DATE_FIN",
	 								       CASE WHEN MAX(abonnement."DATE_FIN")>now() THEN 'En cours'
									            ELSE 'Clôturé'
									       END as "USER_STATUS",
									       SUM(abonnement."NB_JOURNAUX") as "NB_JOURNAUX",
									       date_part('month', users."DATE_NAISSANCE") as "B_MONTH",
									       date_part('year', users."DATE_NAISSANCE") as "B_YEAR",
									       date_part('day', users."DATE_NAISSANCE") as "B_DAY",							       
									       users."DATE_NAISSANCE",
									       users."DATE_INSCRIPTION"
  								FROM 		users
  								   			LEFT JOIN type_abonnement ON (type_abonnement."ID_TYPE_ABO"=users."ID_TYPE_ABO")
  									 		LEFT JOIN abonnement ON (abonnement."ID_USER"=users."ID_USER")
  									 		
  								WHERE 1=1 
  								 and "DEP" = '77'  

  								GROUP BY users."ID_USER", users."NUMERO_USER", users."NOM", users."PRENOM", users."SEXE", 
											users."CP", users."VILLE", users."EMAIL", users."PAYS", users."ADRESSE1",
											users."DATE_NAISSANCE",users."DATE_INSCRIPTION",
			 								type_abonnement."LIBELLE"
			 					) as t1 
			 					where 1=1 
			 					
  								
