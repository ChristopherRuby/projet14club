<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2016-12-23 11:49:03 --> WHY : 2
ERROR - 2016-12-23 11:50:05 --> Array
(
    [nom] => 
    [prenom] => 
    [ville] => 
    [cp] => 
    [pays] => 
    [dep] => 92
    [type_abo] => 1
    [status_abo] => En cours
    [b_day] => 
    [b_month] => 
    [b_year] => 
    [s_day] => 
    [s_month] => 
    [s_year] => 
    [a_day] => 
    [a_month] => 
    [a_year] => 
    [form_activation] => 1
    [next_step] => 1
)

ERROR - 2016-12-23 11:50:33 --> WHY : 40017
ERROR - 2016-12-23 11:50:58 --> WHY : 40015
ERROR - 2016-12-23 11:52:40 --> 0
ERROR - 2016-12-23 11:52:40 --> 1
ERROR - 2016-12-23 11:52:40 --> 2
ERROR - 2016-12-23 11:52:40 --> 3
ERROR - 2016-12-23 11:52:40 --> 4
ERROR - 2016-12-23 11:52:40 --> 5
ERROR - 2016-12-23 11:52:40 --> 6
ERROR - 2016-12-23 11:52:40 --> 7
ERROR - 2016-12-23 11:52:40 --> 8
ERROR - 2016-12-23 11:52:40 --> 9
ERROR - 2016-12-23 11:52:40 --> 10
ERROR - 2016-12-23 11:52:40 --> 11
ERROR - 2016-12-23 11:52:40 --> 12
ERROR - 2016-12-23 11:52:41 --> 13
ERROR - 2016-12-23 11:52:41 --> 14
ERROR - 2016-12-23 11:52:41 --> 15
ERROR - 2016-12-23 11:52:41 --> 16
ERROR - 2016-12-23 11:52:41 --> 17
ERROR - 2016-12-23 11:52:41 --> 18
ERROR - 2016-12-23 11:52:41 --> 19
ERROR - 2016-12-23 11:52:41 --> 20
ERROR - 2016-12-23 11:52:41 --> 21
ERROR - 2016-12-23 11:52:41 --> 22
ERROR - 2016-12-23 11:52:41 --> 23
ERROR - 2016-12-23 11:52:41 --> 24
ERROR - 2016-12-23 11:52:41 --> 25
ERROR - 2016-12-23 11:52:41 --> 26
ERROR - 2016-12-23 11:52:41 --> 27
ERROR - 2016-12-23 11:52:41 --> 28
ERROR - 2016-12-23 11:52:41 --> 29
ERROR - 2016-12-23 11:52:41 --> 30
ERROR - 2016-12-23 11:52:41 --> 31
ERROR - 2016-12-23 11:52:41 --> 32
ERROR - 2016-12-23 11:52:41 --> 33
ERROR - 2016-12-23 11:52:41 --> 34
ERROR - 2016-12-23 11:52:41 --> 35
ERROR - 2016-12-23 11:52:41 --> 36
ERROR - 2016-12-23 11:52:41 --> 37
ERROR - 2016-12-23 11:52:41 --> 38
ERROR - 2016-12-23 11:52:41 --> 39
ERROR - 2016-12-23 11:52:41 --> 40
ERROR - 2016-12-23 11:52:41 --> 41
ERROR - 2016-12-23 11:52:41 --> 42
ERROR - 2016-12-23 11:52:41 --> 43
ERROR - 2016-12-23 11:52:41 --> 44
ERROR - 2016-12-23 11:52:41 --> 45
ERROR - 2016-12-23 11:52:41 --> 46
ERROR - 2016-12-23 11:52:41 --> 47
ERROR - 2016-12-23 11:52:41 --> 48
ERROR - 2016-12-23 11:52:41 --> 49
ERROR - 2016-12-23 11:52:41 --> 50
ERROR - 2016-12-23 11:52:41 --> 51
ERROR - 2016-12-23 11:52:41 --> 52
ERROR - 2016-12-23 11:52:41 --> 53
ERROR - 2016-12-23 11:52:41 --> 54
ERROR - 2016-12-23 11:52:41 --> 55
ERROR - 2016-12-23 11:52:41 --> 56
ERROR - 2016-12-23 11:52:41 --> 57
ERROR - 2016-12-23 11:52:41 --> 58
ERROR - 2016-12-23 11:52:41 --> 59
ERROR - 2016-12-23 11:52:41 --> 60
ERROR - 2016-12-23 11:52:41 --> 61
ERROR - 2016-12-23 11:52:41 --> 62
ERROR - 2016-12-23 11:52:41 --> 63
ERROR - 2016-12-23 11:52:41 --> 64
ERROR - 2016-12-23 11:52:41 --> 65
ERROR - 2016-12-23 11:52:41 --> 66
ERROR - 2016-12-23 11:52:41 --> 67
ERROR - 2016-12-23 11:52:41 --> 68
ERROR - 2016-12-23 11:52:41 --> 69
ERROR - 2016-12-23 11:52:41 --> 70
ERROR - 2016-12-23 11:52:41 --> 71
ERROR - 2016-12-23 11:54:22 --> WHY : 3
ERROR - 2016-12-23 11:54:31 --> WHY : 
ERROR - 2016-12-23 11:54:32 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  erreur de syntaxe sur ou près de « GROUP »
LINE 14:            GROUP BY  users.&quot;ID_USER&quot;, users.&quot;NUMERO_USER&quot;, u...
                    ^ D:\Developpement\Serveur Web\wamp\www\projet14club\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2016-12-23 11:54:32 --> Query error: ERREUR:  erreur de syntaxe sur ou près de « GROUP »
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
ERROR - 2016-12-23 11:54:36 --> WHY : 3
ERROR - 2016-12-23 11:54:47 --> WHY : 40015
ERROR - 2016-12-23 11:55:08 --> 0
ERROR - 2016-12-23 11:55:20 --> WHY : 40015
