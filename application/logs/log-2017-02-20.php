<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-02-20 22:59:41 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  erreur de syntaxe sur ou près de « from »
LINE 8:         from
                ^ D:\Developpement\Serveur Web\wamp\www\projet14club\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2017-02-20 22:59:41 --> Query error: ERREUR:  erreur de syntaxe sur ou près de « from »
LINE 8:         from
                ^ - Invalid query: 
						SELECT "ID_USER", "DATE_FIN", "NOM", "PRENOM", "SEXE", "PAYS", "CP", "VILLE", "ADRESSE1", "EMAIL", "LIBELLE",
									 "USER_STATUS", to_char("DATE_NAISSANCE",'DD/MM/YYYY') as "DATE_NAISSANCE", "B_MONTH", "B_YEAR", "NUMERO_USER",
								       date_part('month', "DATE_FIN") as "A_MONTH",
								       date_part('year', "DATE_FIN") as "A_YEAR",
								       date_part('day', "DATE_FIN") as "A_DAY",
								       "NB_JOURNAUX",		
							 from
								(
								SELECT DISTINCT (users."ID_USER") as "ID_USER", users."NOM", users."PRENOM", users."SEXE", 
											users."CP", users."VILLE", users."ADRESSE1", users."EMAIL", users."PAYS",  users."NUMERO_USER",
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
  								 

  								GROUP BY users."ID_USER", users."NUMERO_USER", users."NOM", users."PRENOM", users."SEXE", 
											users."CP", users."VILLE", users."EMAIL", users."PAYS", users."ADRESSE1",
											users."DATE_NAISSANCE",users."DATE_INSCRIPTION",
			 								type_abonnement."LIBELLE"
			 					) as t1 
			 					where 1=1 
			 					
  								
ERROR - 2017-02-20 23:16:51 --> WHY : 2
