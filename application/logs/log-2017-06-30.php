<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2017-06-30 12:36:00 --> id before form run : 2
ERROR - 2017-06-30 12:36:20 --> id before form run : 2
ERROR - 2017-06-30 12:46:29 --> Severity: Notice --> Undefined variable: date D:\Developpement\Serveur Web\wamp\www\projet14club\application\views\impression\v_impression_apercu.php 77
ERROR - 2017-06-30 12:47:49 --> id before form run : 2
ERROR - 2017-06-30 12:49:41 --> callback check
ERROR - 2017-06-30 12:49:41 --> You did not select a file to upload.
ERROR - 2017-06-30 12:49:42 --> id before form run : 40001
ERROR - 2017-06-30 12:50:12 --> id before form run : 40001
ERROR - 2017-06-30 12:50:16 --> id before form run : 40001
ERROR - 2017-06-30 12:50:21 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  erreur de syntaxe sur ou près de « GROUP »
LINE 14:            GROUP BY  users.&quot;ID_USER&quot;, users.&quot;NUMERO_USER&quot;, u...
                    ^ D:\Developpement\Serveur Web\wamp\www\projet14club\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2017-06-30 12:50:21 --> Query error: ERREUR:  erreur de syntaxe sur ou près de « GROUP »
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
ERROR - 2017-06-30 12:50:25 --> id before form run : 40001
ERROR - 2017-06-30 12:50:34 --> id before form run : 2
ERROR - 2017-06-30 12:51:13 --> Array
(
    [nom] => 
    [prenom] => christopher
    [ville] => 
    [cp] => 
    [pays] => 
    [sexe] => 
    [dep] => 
    [type_abo] => 
    [status_abo] => 
    [b_day] => 
    [b_month] => 
    [b_year] => 
    [s_day] => 
    [s_month] => 
    [s_year] => 
    [a_day] => 
    [a_month] => 
    [a_year] => 
    [nb_journaux_exact] => 
    [nb_journaux_sup] => 
    [form_activation] => 1
    [next_step] => 1
)

ERROR - 2017-06-30 12:51:23 --> You did not select a file to upload.
ERROR - 2017-06-30 12:52:08 --> You did not select a file to upload.
ERROR - 2017-06-30 12:53:17 --> You did not select a file to upload.
ERROR - 2017-06-30 12:54:27 --> id before form run : 3
ERROR - 2017-06-30 12:54:31 --> id before form run : 40001
ERROR - 2017-06-30 12:57:56 --> id before form run : 40001
ERROR - 2017-06-30 12:59:37 --> id before form run : 40001
ERROR - 2017-06-30 12:59:37 --> Severity: Parsing Error --> syntax error, unexpected end of file D:\Developpement\Serveur Web\wamp\www\projet14club\application\views\abonne\v_abonne_view2.php 656
ERROR - 2017-06-30 12:59:46 --> id before form run : 40001
ERROR - 2017-06-30 13:00:26 --> id before form run : 40001
ERROR - 2017-06-30 13:00:43 --> id before form run : 40001
ERROR - 2017-06-30 13:01:11 --> id before form run : 40001
ERROR - 2017-06-30 13:01:21 --> id before form run : 40001
ERROR - 2017-06-30 14:23:32 --> id before form run : 40001
