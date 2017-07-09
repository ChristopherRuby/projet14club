<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2016-12-06 11:20:38 --> Severity: Notice --> Undefined variable: row D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Abonne_model.php 203
ERROR - 2016-12-06 11:20:38 --> Severity: Notice --> Trying to get property of non-object D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Abonne_model.php 203
ERROR - 2016-12-06 11:20:38 --> Severity: Notice --> Undefined variable: clause D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Abonne_model.php 212
ERROR - 2016-12-06 11:20:38 --> Severity: Notice --> Undefined variable: cols D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Abonne_model.php 213
ERROR - 2016-12-06 11:20:38 --> Severity: Notice --> Undefined variable: row D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Abonne_model.php 214
ERROR - 2016-12-06 11:20:38 --> Severity: Notice --> Trying to get property of non-object D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Abonne_model.php 214
ERROR - 2016-12-06 11:20:38 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  erreur de syntaxe sur ou près de « , »
LINE 16:         GROUP BY , &quot;USER_STATUS&quot; 
                          ^ D:\Developpement\Serveur Web\wamp\www\projet14club\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2016-12-06 11:20:38 --> Query error: ERREUR:  erreur de syntaxe sur ou près de « , »
LINE 16:         GROUP BY , "USER_STATUS" 
                          ^ - Invalid query: 
								SELECT count(*) as count , "USER_STATUS" 
								 from
									(
									SELECT DISTINCT (users."ID_USER") as "ID_USER", type_abonnement."ID_TYPE_ABO",
										       CASE WHEN MAX(abonnement."DATE_FIN")>now() THEN 'En cours'
											    ELSE 'Clôturé'
										       END as "USER_STATUS"
									FROM 		users
												LEFT JOIN type_abonnement ON (type_abonnement."ID_TYPE_ABO"=users."ID_TYPE_ABO")
												LEFT JOIN abonnement ON (abonnement."ID_USER"=users."ID_USER")
									GROUP BY users."ID_USER", type_abonnement."ID_TYPE_ABO"
									) as t1
								WHERE 1=1
								 AND "USER_STATUS"='En cours'
								GROUP BY , "USER_STATUS" 
								
								
ERROR - 2016-12-06 11:20:38 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\Developpement\Serveur Web\wamp\www\projet14club\system\core\Exceptions.php:272) D:\Developpement\Serveur Web\wamp\www\projet14club\system\core\Common.php 569
ERROR - 2016-12-06 11:21:10 --> Severity: Notice --> Undefined variable: row D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Abonne_model.php 203
ERROR - 2016-12-06 11:21:10 --> Severity: Notice --> Trying to get property of non-object D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Abonne_model.php 203
ERROR - 2016-12-06 11:21:10 --> Severity: Notice --> Undefined variable: row D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Abonne_model.php 214
ERROR - 2016-12-06 11:21:10 --> Severity: Notice --> Trying to get property of non-object D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Abonne_model.php 214
ERROR - 2016-12-06 11:21:10 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  erreur de syntaxe sur ou près de « , »
LINE 16:         GROUP BY , &quot;USER_STATUS&quot; 
                          ^ D:\Developpement\Serveur Web\wamp\www\projet14club\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2016-12-06 11:21:10 --> Query error: ERREUR:  erreur de syntaxe sur ou près de « , »
LINE 16:         GROUP BY , "USER_STATUS" 
                          ^ - Invalid query: 
								SELECT count(*) as count , "USER_STATUS" 
								 from
									(
									SELECT DISTINCT (users."ID_USER") as "ID_USER", type_abonnement."ID_TYPE_ABO",
										       CASE WHEN MAX(abonnement."DATE_FIN")>now() THEN 'En cours'
											    ELSE 'Clôturé'
										       END as "USER_STATUS"
									FROM 		users
												LEFT JOIN type_abonnement ON (type_abonnement."ID_TYPE_ABO"=users."ID_TYPE_ABO")
												LEFT JOIN abonnement ON (abonnement."ID_USER"=users."ID_USER")
									GROUP BY users."ID_USER", type_abonnement."ID_TYPE_ABO"
									) as t1
								WHERE 1=1
								 AND "USER_STATUS"='En cours'
								GROUP BY , "USER_STATUS" 
								
								
ERROR - 2016-12-06 11:21:10 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\Developpement\Serveur Web\wamp\www\projet14club\system\core\Exceptions.php:272) D:\Developpement\Serveur Web\wamp\www\projet14club\system\core\Common.php 569
ERROR - 2016-12-06 11:21:53 --> Severity: Notice --> Undefined variable: row D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Abonne_model.php 203
ERROR - 2016-12-06 11:21:53 --> Severity: Notice --> Trying to get property of non-object D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Abonne_model.php 203
ERROR - 2016-12-06 11:21:53 --> Severity: Notice --> Undefined variable: row D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Abonne_model.php 214
ERROR - 2016-12-06 11:21:53 --> Severity: Notice --> Trying to get property of non-object D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Abonne_model.php 214
ERROR - 2016-12-06 11:21:53 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  erreur de syntaxe sur ou près de « , »
LINE 16:         GROUP BY , &quot;USER_STATUS&quot; 
                          ^ D:\Developpement\Serveur Web\wamp\www\projet14club\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2016-12-06 11:21:53 --> Query error: ERREUR:  erreur de syntaxe sur ou près de « , »
LINE 16:         GROUP BY , "USER_STATUS" 
                          ^ - Invalid query: 
								SELECT count(*) as count , "USER_STATUS" 
								 from
									(
									SELECT DISTINCT (users."ID_USER") as "ID_USER", type_abonnement."ID_TYPE_ABO",
										       CASE WHEN MAX(abonnement."DATE_FIN")>now() THEN 'En cours'
											    ELSE 'Clôturé'
										       END as "USER_STATUS"
									FROM 		users
												LEFT JOIN type_abonnement ON (type_abonnement."ID_TYPE_ABO"=users."ID_TYPE_ABO")
												LEFT JOIN abonnement ON (abonnement."ID_USER"=users."ID_USER")
									GROUP BY users."ID_USER", type_abonnement."ID_TYPE_ABO"
									) as t1
								WHERE 1=1
								 AND "USER_STATUS"='En cours'
								GROUP BY , "USER_STATUS" 
								
								
ERROR - 2016-12-06 11:21:53 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\Developpement\Serveur Web\wamp\www\projet14club\system\core\Exceptions.php:272) D:\Developpement\Serveur Web\wamp\www\projet14club\system\core\Common.php 569
ERROR - 2016-12-06 11:23:09 --> Severity: Notice --> Undefined variable: row D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Abonne_model.php 203
ERROR - 2016-12-06 11:23:09 --> Severity: Notice --> Trying to get property of non-object D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Abonne_model.php 203
ERROR - 2016-12-06 11:23:09 --> Severity: Notice --> Undefined variable: row D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Abonne_model.php 214
ERROR - 2016-12-06 11:23:09 --> Severity: Notice --> Trying to get property of non-object D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Abonne_model.php 214
ERROR - 2016-12-06 11:23:09 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  erreur de syntaxe sur ou près de « , »
LINE 16:         GROUP BY , &quot;USER_STATUS&quot; 
                          ^ D:\Developpement\Serveur Web\wamp\www\projet14club\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2016-12-06 11:23:09 --> Query error: ERREUR:  erreur de syntaxe sur ou près de « , »
LINE 16:         GROUP BY , "USER_STATUS" 
                          ^ - Invalid query: 
								SELECT count(*) as count , "USER_STATUS" 
								 from
									(
									SELECT DISTINCT (users."ID_USER") as "ID_USER", type_abonnement."ID_TYPE_ABO",
										       CASE WHEN MAX(abonnement."DATE_FIN")>now() THEN 'En cours'
											    ELSE 'Clôturé'
										       END as "USER_STATUS"
									FROM 		users
												LEFT JOIN type_abonnement ON (type_abonnement."ID_TYPE_ABO"=users."ID_TYPE_ABO")
												LEFT JOIN abonnement ON (abonnement."ID_USER"=users."ID_USER")
									GROUP BY users."ID_USER", type_abonnement."ID_TYPE_ABO"
									) as t1
								WHERE 1=1
								 AND "USER_STATUS"='En cours'
								GROUP BY , "USER_STATUS" 
								
								
ERROR - 2016-12-06 11:23:09 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at D:\Developpement\Serveur Web\wamp\www\projet14club\system\core\Exceptions.php:272) D:\Developpement\Serveur Web\wamp\www\projet14club\system\core\Common.php 569
ERROR - 2016-12-06 11:23:42 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  erreur de syntaxe sur ou près de « , »
LINE 16:         GROUP BY , &quot;USER_STATUS&quot; 
                          ^ D:\Developpement\Serveur Web\wamp\www\projet14club\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2016-12-06 11:23:42 --> Query error: ERREUR:  erreur de syntaxe sur ou près de « , »
LINE 16:         GROUP BY , "USER_STATUS" 
                          ^ - Invalid query: 
								SELECT count(*) as count , "USER_STATUS" 
								 from
									(
									SELECT DISTINCT (users."ID_USER") as "ID_USER", type_abonnement."ID_TYPE_ABO",
										       CASE WHEN MAX(abonnement."DATE_FIN")>now() THEN 'En cours'
											    ELSE 'Clôturé'
										       END as "USER_STATUS"
									FROM 		users
												LEFT JOIN type_abonnement ON (type_abonnement."ID_TYPE_ABO"=users."ID_TYPE_ABO")
												LEFT JOIN abonnement ON (abonnement."ID_USER"=users."ID_USER")
									GROUP BY users."ID_USER", type_abonnement."ID_TYPE_ABO"
									) as t1
								WHERE 1=1
								 AND "USER_STATUS"='En cours'
								GROUP BY , "USER_STATUS" 
								
								
ERROR - 2016-12-06 11:24:24 --> Severity: Notice --> Undefined property: stdClass::$COUNT D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Abonne_model.php 241
ERROR - 2016-12-06 11:24:24 --> 
ERROR - 2016-12-06 11:26:13 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  la sous-requête du FROM doit avoir un alias
LINE 2:      Select count , &quot;USER_STATUS&quot;  FROM (
                                                ^
HINT:  Par exemple, FROM (SELECT...) [AS] quelquechose. D:\Developpement\Serveur Web\wamp\www\projet14club\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2016-12-06 11:26:13 --> Query error: ERREUR:  la sous-requête du FROM doit avoir un alias
LINE 2:      Select count , "USER_STATUS"  FROM (
                                                ^
HINT:  Par exemple, FROM (SELECT...) [AS] quelquechose. - Invalid query: 
					Select count , "USER_STATUS"  FROM (
								SELECT count(*) as count , "USER_STATUS" 
								 from
									(
									SELECT DISTINCT (users."ID_USER") as "ID_USER", type_abonnement."ID_TYPE_ABO",
										       CASE WHEN MAX(abonnement."DATE_FIN")>now() THEN 'En cours'
											    ELSE 'Clôturé'
										       END as "USER_STATUS"
									FROM 		users
												LEFT JOIN type_abonnement ON (type_abonnement."ID_TYPE_ABO"=users."ID_TYPE_ABO")
												LEFT JOIN abonnement ON (abonnement."ID_USER"=users."ID_USER")
									GROUP BY users."ID_USER", type_abonnement."ID_TYPE_ABO"
									) as t1
								WHERE 1=1
								 AND "USER_STATUS"='En cours'
								GROUP BY 1=1 , "USER_STATUS" 
								)
								
ERROR - 2016-12-06 11:26:43 --> Severity: Notice --> Undefined property: stdClass::$COUNT D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Abonne_model.php 242
ERROR - 2016-12-06 11:26:44 --> 
ERROR - 2016-12-06 11:27:13 --> Severity: Notice --> Undefined property: stdClass::$COUNT D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Abonne_model.php 242
ERROR - 2016-12-06 11:27:13 --> 
ERROR - 2016-12-06 11:27:38 --> 
ERROR - 2016-12-06 11:28:28 -->  Baboulinet 
ERROR - 2016-12-06 11:30:27 -->  Baboulinet 
ERROR - 2016-12-06 11:31:35 -->  Baboulinet Array
(
    [0] => Array
        (
            [0] => "count"=>620, "user_status"=>En cours
        )

)

ERROR - 2016-12-06 11:37:47 --> Severity: Warning --> Missing argument 1 for Abonne_model::get_abonne_stats(), called in D:\Developpement\Serveur Web\wamp\www\projet14club\application\controllers\Abonne.php on line 31 and defined D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Abonne_model.php 198
ERROR - 2016-12-06 11:37:47 -->  Baboulinet Array
(
    [0] => "count"=>620, "user_status"=>En cours
)

ERROR - 2016-12-06 11:38:20 -->  Baboulinet Array
(
    [0] => "count"=>620, "user_status"=>En cours
)

ERROR - 2016-12-06 11:38:37 -->  Baboulinet Array
(
    [0] => "count"=>620, "user_status"=>En cours
)

ERROR - 2016-12-06 11:38:37 --> Severity: Notice --> Array to string conversion D:\Developpement\Serveur Web\wamp\www\projet14club\application\views\abonne\v_abonne_overview.php 42
ERROR - 2016-12-06 11:39:04 -->  Baboulinet Array
(
    [0] => "count"=>620, "user_status"=>En cours
)

ERROR - 2016-12-06 11:39:04 --> Severity: Notice --> Undefined index: count D:\Developpement\Serveur Web\wamp\www\projet14club\application\views\abonne\v_abonne_overview.php 42
ERROR - 2016-12-06 11:40:19 -->  Baboulinet Array
(
    [0] => "count"=>6878
)

ERROR - 2016-12-06 11:40:19 --> Severity: Notice --> Undefined index: count D:\Developpement\Serveur Web\wamp\www\projet14club\application\views\abonne\v_abonne_overview.php 42
ERROR - 2016-12-06 11:52:41 -->  Baboulinet "count"=>6878
ERROR - 2016-12-06 11:52:42 --> Severity: Warning --> Illegal string offset 'count' D:\Developpement\Serveur Web\wamp\www\projet14club\application\views\abonne\v_abonne_overview.php 42
ERROR - 2016-12-06 11:54:05 -->  Baboulinet "count"=>6878
ERROR - 2016-12-06 11:59:15 -->  Baboulinet Array
(
    [count] => 6878
)

ERROR - 2016-12-06 11:59:16 --> Severity: Notice --> Array to string conversion D:\Developpement\Serveur Web\wamp\www\projet14club\application\views\abonne\v_abonne_overview.php 42
ERROR - 2016-12-06 11:59:31 -->  Baboulinet Array
(
    [count] => 6878
)

ERROR - 2016-12-06 12:03:50 --> Severity: Notice --> Undefined index: abonne_internet_en_cours D:\Developpement\Serveur Web\wamp\www\projet14club\application\views\abonne\v_abonne_overview.php 32
ERROR - 2016-12-06 12:03:50 --> Severity: Notice --> Undefined index: abonne_trad_en_cours D:\Developpement\Serveur Web\wamp\www\projet14club\application\views\abonne\v_abonne_overview.php 33
ERROR - 2016-12-06 12:49:36 --> Severity: Parsing Error --> syntax error, unexpected ''nb_abo'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' D:\Developpement\Serveur Web\wamp\www\projet14club\application\controllers\Abonne.php 44
ERROR - 2016-12-06 12:58:03 --> Severity: Notice --> Undefined property: stdClass::$NB_ABO D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Abonne_model.php 261
ERROR - 2016-12-06 12:58:04 --> Severity: Notice --> Undefined property: stdClass::$NB_ABO D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Abonne_model.php 261
ERROR - 2016-12-06 12:58:04 --> Severity: Notice --> Undefined property: stdClass::$NB_ABO D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Abonne_model.php 261
ERROR - 2016-12-06 12:58:04 --> Severity: Notice --> Undefined property: stdClass::$NB_ABO D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Abonne_model.php 261
ERROR - 2016-12-06 12:58:04 --> Severity: Notice --> Undefined property: stdClass::$NB_ABO D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Abonne_model.php 261
ERROR - 2016-12-06 12:58:04 --> Severity: Notice --> Undefined property: stdClass::$NB_ABO D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Abonne_model.php 261
ERROR - 2016-12-06 16:21:55 --> WHY : 40015
ERROR - 2016-12-06 16:22:03 --> WHY : 40015
ERROR - 2016-12-06 16:36:09 --> Severity: Notice --> Undefined index: formule D:\Developpement\Serveur Web\wamp\www\projet14club\application\views\administration\v_administration_gestion_list.php 80
ERROR - 2016-12-06 16:36:09 --> Severity: Notice --> Undefined index: formule D:\Developpement\Serveur Web\wamp\www\projet14club\application\views\administration\v_administration_gestion_list.php 80
ERROR - 2016-12-06 16:36:09 --> Severity: Notice --> Undefined index: formule D:\Developpement\Serveur Web\wamp\www\projet14club\application\views\administration\v_administration_gestion_list.php 80
ERROR - 2016-12-06 16:36:26 --> Severity: Notice --> Undefined index: formule D:\Developpement\Serveur Web\wamp\www\projet14club\application\views\administration\v_administration_gestion_list.php 80
ERROR - 2016-12-06 16:36:26 --> Severity: Notice --> Undefined index: formule D:\Developpement\Serveur Web\wamp\www\projet14club\application\views\administration\v_administration_gestion_list.php 80
ERROR - 2016-12-06 16:36:26 --> Severity: Notice --> Undefined index: formule D:\Developpement\Serveur Web\wamp\www\projet14club\application\views\administration\v_administration_gestion_list.php 80
ERROR - 2016-12-06 16:43:14 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  erreur de syntaxe sur ou près de « WHERE »
LINE 4:          WHERE users.&quot;ID_USER&quot;=users_m_list_current.&quot;ID_USER...
                 ^ D:\Developpement\Serveur Web\wamp\www\projet14club\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2016-12-06 16:43:14 --> Query error: ERREUR:  erreur de syntaxe sur ou près de « WHERE »
LINE 4:          WHERE users."ID_USER"=users_m_list_current."ID_USER...
                 ^ - Invalid query: 
							SELECT users."ID_USER", users."NUMERO_USER", users."NOM",users."PRENOM",users."DATE_NAISSANCE",users."VILLE"
  							FROM users LEFT JOIN users_m_list_current ON (users."ID_USER"=users_m_list_current."ID_USER"),
  							WHERE users."ID_USER"=users_m_list_current."ID_USER"
  								
ERROR - 2016-12-06 16:44:45 --> Severity: Notice --> Undefined property: stdClass::$PAYS D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Administration_model.php 189
ERROR - 2016-12-06 16:44:46 --> Severity: Notice --> Undefined property: stdClass::$LIBELLE D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Administration_model.php 190
ERROR - 2016-12-06 16:44:46 --> Severity: Notice --> Undefined property: stdClass::$PAYS D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Administration_model.php 189
ERROR - 2016-12-06 16:44:46 --> Severity: Notice --> Undefined property: stdClass::$LIBELLE D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Administration_model.php 190
ERROR - 2016-12-06 16:44:46 --> Severity: Notice --> Undefined property: stdClass::$PAYS D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Administration_model.php 189
ERROR - 2016-12-06 16:44:46 --> Severity: Notice --> Undefined property: stdClass::$LIBELLE D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Administration_model.php 190
ERROR - 2016-12-06 16:44:46 --> Severity: Notice --> Undefined index: formule D:\Developpement\Serveur Web\wamp\www\projet14club\application\views\administration\v_administration_gestion_list.php 80
ERROR - 2016-12-06 16:44:46 --> Severity: Notice --> Undefined index: formule D:\Developpement\Serveur Web\wamp\www\projet14club\application\views\administration\v_administration_gestion_list.php 80
ERROR - 2016-12-06 16:44:46 --> Severity: Notice --> Undefined index: formule D:\Developpement\Serveur Web\wamp\www\projet14club\application\views\administration\v_administration_gestion_list.php 80
ERROR - 2016-12-06 16:44:58 --> Severity: Notice --> Undefined property: stdClass::$LIBELLE D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Administration_model.php 190
ERROR - 2016-12-06 16:44:58 --> Severity: Notice --> Undefined property: stdClass::$LIBELLE D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Administration_model.php 190
ERROR - 2016-12-06 16:44:58 --> Severity: Notice --> Undefined property: stdClass::$LIBELLE D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Administration_model.php 190
ERROR - 2016-12-06 16:44:58 --> Severity: Notice --> Undefined index: formule D:\Developpement\Serveur Web\wamp\www\projet14club\application\views\administration\v_administration_gestion_list.php 80
ERROR - 2016-12-06 16:44:58 --> Severity: Notice --> Undefined index: formule D:\Developpement\Serveur Web\wamp\www\projet14club\application\views\administration\v_administration_gestion_list.php 80
ERROR - 2016-12-06 16:44:58 --> Severity: Notice --> Undefined index: formule D:\Developpement\Serveur Web\wamp\www\projet14club\application\views\administration\v_administration_gestion_list.php 80
ERROR - 2016-12-06 16:45:22 --> Severity: Notice --> Undefined index: formule D:\Developpement\Serveur Web\wamp\www\projet14club\application\views\administration\v_administration_gestion_list.php 80
ERROR - 2016-12-06 16:45:22 --> Severity: Notice --> Undefined index: formule D:\Developpement\Serveur Web\wamp\www\projet14club\application\views\administration\v_administration_gestion_list.php 80
ERROR - 2016-12-06 16:45:22 --> Severity: Notice --> Undefined index: formule D:\Developpement\Serveur Web\wamp\www\projet14club\application\views\administration\v_administration_gestion_list.php 80
ERROR - 2016-12-06 17:27:44 --> WHY : 40015
ERROR - 2016-12-06 17:27:48 --> WHY : 40015
ERROR - 2016-12-06 17:28:18 --> WHY : 40015
ERROR - 2016-12-06 17:28:29 --> WHY : 40015
ERROR - 2016-12-06 17:28:51 --> WHY : 40015
ERROR - 2016-12-06 17:31:03 --> Severity: Notice --> Undefined variable: line D:\Developpement\Serveur Web\wamp\www\projet14club\application\views\administration\v_administration_gestion_list.php 149
ERROR - 2016-12-06 17:31:10 --> WHY : 40015
ERROR - 2016-12-06 17:31:29 --> WHY : 26898
ERROR - 2016-12-06 18:01:39 --> WHY : 55
ERROR - 2016-12-06 18:01:46 --> WHY : 55
ERROR - 2016-12-06 18:01:54 --> WHY : 40015
ERROR - 2016-12-06 18:02:00 --> 0
ERROR - 2016-12-06 18:02:07 --> WHY : 40015
ERROR - 2016-12-06 18:02:17 --> 0
ERROR - 2016-12-06 18:02:50 --> 0
ERROR - 2016-12-06 18:02:50 --> 1
ERROR - 2016-12-06 18:02:50 --> 2
ERROR - 2016-12-06 18:02:50 --> 3
ERROR - 2016-12-06 18:02:50 --> 4
ERROR - 2016-12-06 18:02:50 --> 5
ERROR - 2016-12-06 18:02:50 --> 6
ERROR - 2016-12-06 18:11:22 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  erreur de syntaxe à la fin de l'entrée
LINE 3:           WHERE users_m_list_archived.&quot;ID_LIST&quot;=
                                                        ^ D:\Developpement\Serveur Web\wamp\www\projet14club\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2016-12-06 18:11:22 --> Query error: ERREUR:  erreur de syntaxe à la fin de l'entrée
LINE 3:           WHERE users_m_list_archived."ID_LIST"=
                                                        ^ - Invalid query: SELECT users."ID_USER", users."NUMERO_USER", users."NOM",users."PRENOM",users."DATE_NAISSANCE",users."VILLE",users."CP",users."ADRESSE1",users."PAYS"
  								FROM users LEFT JOIN users_m_list_archived ON (users."ID_USER"=users_m_list_archived."ID_USER")
  								WHERE users_m_list_archived."ID_LIST"=
ERROR - 2016-12-06 18:12:31 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  erreur de syntaxe à la fin de l'entrée
LINE 3:           WHERE users_m_list_archived.&quot;ID_LIST&quot;=
                                                        ^ D:\Developpement\Serveur Web\wamp\www\projet14club\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2016-12-06 18:12:31 --> Query error: ERREUR:  erreur de syntaxe à la fin de l'entrée
LINE 3:           WHERE users_m_list_archived."ID_LIST"=
                                                        ^ - Invalid query: SELECT users."ID_USER", users."NUMERO_USER", users."NOM",users."PRENOM",users."DATE_NAISSANCE",users."VILLE",users."CP",users."ADRESSE1",users."PAYS"
  								FROM users LEFT JOIN users_m_list_archived ON (users."ID_USER"=users_m_list_archived."ID_USER")
  								WHERE users_m_list_archived."ID_LIST"=
ERROR - 2016-12-06 18:12:45 --> Severity: Notice --> Array to string conversion D:\Developpement\Serveur Web\wamp\www\projet14club\application\controllers\Administration.php 134
ERROR - 2016-12-06 18:12:45 --> test Array
ERROR - 2016-12-06 18:13:05 --> test Array
(
    [nb_decrem] => 0
)

ERROR - 2016-12-06 18:14:51 --> test Array
(
    [nb_decrem] => 0
)

ERROR - 2016-12-06 18:15:19 --> test Array
(
    [nb_decrem] => 0
)

ERROR - 2016-12-06 18:15:40 --> test Array
(
    [nb_decrem] => 0
    [checkboxIdPopupEtiquette_40015] => 40015
    [checkboxIdPopupEtiquette_26898] => 26898
)

ERROR - 2016-12-06 18:19:12 --> test 
ERROR - 2016-12-06 18:24:19 --> Severity: Notice --> Undefined variable: list_user D:\Developpement\Serveur Web\wamp\www\projet14club\application\controllers\Administration.php 142
ERROR - 2016-12-06 18:24:19 --> test 
ERROR - 2016-12-06 18:24:28 --> test Array
(
    [0] => 40015
    [1] => 26898
)

ERROR - 2016-12-06 18:29:40 --> 0
ERROR - 2016-12-06 18:29:40 --> 1
ERROR - 2016-12-06 18:29:40 --> 2
ERROR - 2016-12-06 18:29:40 --> 3
ERROR - 2016-12-06 18:29:40 --> 4
ERROR - 2016-12-06 18:29:40 --> 5
ERROR - 2016-12-06 18:29:40 --> 6
ERROR - 2016-12-06 18:29:40 --> 7
ERROR - 2016-12-06 18:29:40 --> 8
ERROR - 2016-12-06 18:29:40 --> 9
ERROR - 2016-12-06 18:29:40 --> 10
ERROR - 2016-12-06 18:29:40 --> 11
ERROR - 2016-12-06 18:29:40 --> 12
ERROR - 2016-12-06 18:40:41 --> test Array
(
    [0] => 40015
    [1] => 26898
)

ERROR - 2016-12-06 18:40:41 --> Severity: Notice --> Array to string conversion D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:40:41 --> Severity: Notice --> Array to string conversion D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 86
ERROR - 2016-12-06 18:40:41 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  syntaxe en entrée invalide pour l'entier : « Array »
LINE 15:              where users.&quot;ID_USER&quot; in ( 'Array','Array') 
                                                 ^ D:\Developpement\Serveur Web\wamp\www\projet14club\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2016-12-06 18:40:41 --> Query error: ERREUR:  syntaxe en entrée invalide pour l'entier : « Array »
LINE 15:              where users."ID_USER" in ( 'Array','Array') 
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
			  								where users."ID_USER" in ( 'Array','Array') 
			  								GROUP BY users."ID_USER", users."NOM", users."PRENOM", users."SEXE", "NUMERO_USER",
														users."CP", users."VILLE", users."EMAIL", users."ADRESSE1",users."PAYS",
						 								type_abonnement."LIBELLE"
						 ) t1
				  WHERE t1."NB_JOURNAUX_TOTAL">0
			 					
  								
ERROR - 2016-12-06 18:41:35 --> test Array
(
    [0] => 40015
    [1] => 26898
)

ERROR - 2016-12-06 18:41:35 --> return Array
(
    [0] => Array
        (
            [id] => 40015
            [num_user] => 40053
            [nom] => DupondR
            [prenom] => Martin
            [adresse] => adresse beta
            [pays] => France
            [email] => chris.geass@gmail.com
            [sexe] => Masculin
            [cp] => 98765
            [ville] => Trueville
            [formule] => Traditionnel
            [user_status] => En Cours
        )

)

ERROR - 2016-12-06 18:42:23 --> test Array
(
    [0] => 40015
    [1] => 26898
)

ERROR - 2016-12-06 18:42:23 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:23 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:23 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:23 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:23 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:23 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:23 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:23 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:23 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:23 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:23 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:23 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:23 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:23 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:23 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:23 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:23 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:23 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:23 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:24 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:24 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:24 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:24 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:24 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:24 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:24 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:24 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:24 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:24 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:24 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:24 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:24 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:24 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:24 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:24 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:24 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:24 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:24 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:24 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:24 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:24 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:24 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:24 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:24 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:24 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:24 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:24 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:24 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:24 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:24 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:24 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:24 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:24 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:24 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:24 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:24 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:24 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:24 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:24 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:25 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:25 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:25 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:25 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:25 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:25 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:25 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:25 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:25 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:25 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:25 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:25 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:25 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:25 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:25 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:25 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:25 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:25 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:25 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:25 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:25 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:25 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:25 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:25 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:25 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:25 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:25 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:25 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:25 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:25 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:25 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:25 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:25 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:25 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:25 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:26 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:26 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:26 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:26 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:26 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:26 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:26 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:26 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:26 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:26 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:26 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:26 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:26 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:26 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:26 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:26 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\models\Impression_model.php 83
ERROR - 2016-12-06 18:42:47 --> test Array
(
    [0] => 40015
    [1] => 26898
)

ERROR - 2016-12-06 18:42:47 --> return Array
(
    [0] => Array
        (
            [id] => 40015
            [num_user] => 40053
            [nom] => DupondR
            [prenom] => Martin
            [adresse] => adresse beta
            [pays] => France
            [email] => chris.geass@gmail.com
            [sexe] => Masculin
            [cp] => 98765
            [ville] => Trueville
            [formule] => Traditionnel
            [user_status] => En Cours
        )

)

ERROR - 2016-12-06 18:44:29 --> test Array
(
    [0] => 40015
    [1] => 26898
)

ERROR - 2016-12-06 18:44:29 --> clausewhere users."ID_USER" in ( '40015','26898')
ERROR - 2016-12-06 18:44:29 --> return Array
(
    [0] => Array
        (
            [id] => 40015
            [num_user] => 40053
            [nom] => DupondR
            [prenom] => Martin
            [adresse] => adresse beta
            [pays] => France
            [email] => chris.geass@gmail.com
            [sexe] => Masculin
            [cp] => 98765
            [ville] => Trueville
            [formule] => Traditionnel
            [user_status] => En Cours
        )

)

ERROR - 2016-12-06 18:45:45 --> test Array
(
    [0] => 40015
    [1] => 26898
)

ERROR - 2016-12-06 18:45:45 --> return Array
(
    [0] => Array
        (
            [id] => 40015
            [num_user] => 40053
            [nom] => DupondR
            [prenom] => Martin
            [adresse] => adresse beta
            [pays] => France
            [email] => chris.geass@gmail.com
            [sexe] => Masculin
            [cp] => 98765
            [ville] => Trueville
            [formule] => Traditionnel
            [user_status] => En Cours
        )

    [1] => Array
        (
            [id] => 26898
            [num_user] => 26898
            [nom] => LAJOUS
            [prenom] => Nathalie
            [adresse] => 88 RUE DE PARIS
            [pays] => France
            [email] => nlajous@netcourrier.com
            [sexe] => FÃ©minin
            [cp] => 78470
            [ville] => ST REMY LES CHEVREUSE
            [formule] => Traditionnel
            [user_status] => En Cours
        )

)

ERROR - 2016-12-06 18:48:03 --> 0
ERROR - 2016-12-06 18:48:03 --> 1
ERROR - 2016-12-06 18:49:05 --> 0
ERROR - 2016-12-06 18:49:05 --> 1
ERROR - 2016-12-06 18:51:44 --> 0
ERROR - 2016-12-06 18:51:44 --> 1
ERROR - 2016-12-06 18:52:08 --> 0
ERROR - 2016-12-06 18:52:08 --> 1
ERROR - 2016-12-06 19:00:47 --> WHY : 26898
ERROR - 2016-12-06 19:01:01 --> WHY : 26898
ERROR - 2016-12-06 19:01:14 --> WHY : 26898
ERROR - 2016-12-06 19:01:23 --> WHY : 26898
ERROR - 2016-12-06 19:01:46 --> WHY : 40015
ERROR - 2016-12-06 19:02:03 --> 0
ERROR - 2016-12-06 19:02:03 --> 1
ERROR - 2016-12-06 19:02:11 --> WHY : 40015
ERROR - 2016-12-06 19:02:24 --> 0
ERROR - 2016-12-06 19:02:24 --> 1
ERROR - 2016-12-06 19:02:28 --> WHY : 40015
ERROR - 2016-12-06 19:02:32 --> WHY : 26898
ERROR - 2016-12-06 19:02:40 --> WHY : 26898
ERROR - 2016-12-06 19:02:49 --> 0
ERROR - 2016-12-06 19:02:49 --> 1
ERROR - 2016-12-06 19:02:53 --> WHY : 40015
ERROR - 2016-12-06 19:02:56 --> WHY : 26898
ERROR - 2016-12-06 19:07:56 --> 0
ERROR - 2016-12-06 19:07:58 --> WHY : 26898
ERROR - 2016-12-06 19:30:46 --> Severity: Compile Error --> Cannot use isset() on the result of a function call (you can use "null !== func()" instead) D:\Developpement\Serveur Web\wamp\www\projet14club\application\controllers\Mailing.php 176
ERROR - 2016-12-06 19:31:41 -->  users Array
(
    [checkboxIdMail_40015] => 40015
    [checkboxIdMail_26898] => 26898
)

ERROR - 2016-12-06 19:42:34 --> 404 Page Not Found: Mailing/send_mail_to_users_selected
ERROR - 2016-12-06 19:43:03 --> 404 Page Not Found: Mailing/send_mail_to_users_selected
ERROR - 2016-12-06 19:43:13 --> 404 Page Not Found: Mailing/send_mail_to_users_selected
ERROR - 2016-12-06 19:45:46 -->  log 1
ERROR - 2016-12-06 20:06:05 --> Severity: Notice --> Undefined variable: value D:\Developpement\Serveur Web\wamp\www\projet14club\application\controllers\Administration.php 179
ERROR - 2016-12-06 20:07:37 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\controllers\Administration.php 180
ERROR - 2016-12-06 20:07:45 --> Severity: Notice --> Undefined offset: 2 D:\Developpement\Serveur Web\wamp\www\projet14club\application\controllers\Administration.php 180
ERROR - 2016-12-06 20:08:14 --> Severity: Notice --> Undefined offset: 0 D:\Developpement\Serveur Web\wamp\www\projet14club\application\controllers\Administration.php 183
ERROR - 2016-12-06 20:08:14 --> Severity: Notice --> Undefined offset: 1 D:\Developpement\Serveur Web\wamp\www\projet14club\application\controllers\Administration.php 183
ERROR - 2016-12-06 20:09:30 --> tab : Array
(
    [checkboxIdMail_40015] => 40015
    [checkboxIdMail_26898] => 26898
)

ERROR - 2016-12-06 20:09:30 --> Severity: Notice --> Undefined offset: 0 D:\Developpement\Serveur Web\wamp\www\projet14club\application\controllers\Administration.php 184
ERROR - 2016-12-06 20:09:31 --> Severity: Notice --> Undefined offset: 1 D:\Developpement\Serveur Web\wamp\www\projet14club\application\controllers\Administration.php 184
ERROR - 2016-12-06 20:13:06 --> Severity: Notice --> Use of undefined constant ùlist_users_from_admin - assumed 'ùlist_users_from_admin' D:\Developpement\Serveur Web\wamp\www\projet14club\application\views\administration\v_administration_news_create.php 55
ERROR - 2016-12-06 20:23:22 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  erreur de syntaxe sur ou près de « GROUP »
LINE 16:              GROUP BY users.&quot;ID_USER&quot;, users.&quot;NOM&quot;, users.&quot;P...
                      ^ D:\Developpement\Serveur Web\wamp\www\projet14club\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2016-12-06 20:23:22 --> Query error: ERREUR:  erreur de syntaxe sur ou près de « GROUP »
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
			  								where users."ID_USER" in ( '40015', 
			  								GROUP BY users."ID_USER", users."NOM", users."PRENOM", users."SEXE", "NUMERO_USER",
														users."CP", users."VILLE", users."EMAIL", users."ADRESSE1",users."PAYS",
						 								type_abonnement."LIBELLE"
						 ) t1
				  -- COMMENTAIRE ************ WHERE t1."NB_JOURNAUX_TOTAL">0
			 					
  								
ERROR - 2016-12-06 20:25:12 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  erreur de syntaxe sur ou près de « GROUP »
LINE 16:              GROUP BY users.&quot;ID_USER&quot;, users.&quot;NOM&quot;, users.&quot;P...
                      ^ D:\Developpement\Serveur Web\wamp\www\projet14club\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2016-12-06 20:25:12 --> Query error: ERREUR:  erreur de syntaxe sur ou près de « GROUP »
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
			  								where users."ID_USER" in ( '40015', 
			  								GROUP BY users."ID_USER", users."NOM", users."PRENOM", users."SEXE", "NUMERO_USER",
														users."CP", users."VILLE", users."EMAIL", users."ADRESSE1",users."PAYS",
						 								type_abonnement."LIBELLE"
						 ) t1
				  -- COMMENTAIRE ************ WHERE t1."NB_JOURNAUX_TOTAL">0
			 					
  								
ERROR - 2016-12-06 20:25:46 --> Severity: Notice --> Undefined index: id_user D:\Developpement\Serveur Web\wamp\www\projet14club\application\controllers\Administration.php 236
ERROR - 2016-12-06 20:25:46 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  erreur de syntaxe sur ou près de « and »
LINE 8:                     and abonnement.&quot;NB_JOURNAUX&quot;&gt;0 
                            ^ D:\Developpement\Serveur Web\wamp\www\projet14club\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2016-12-06 20:25:46 --> Query error: ERREUR:  erreur de syntaxe sur ou près de « and »
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
			
ERROR - 2016-12-06 20:27:58 --> You did not select a file to upload.
ERROR - 2016-12-06 20:28:21 --> WHY : 40015
ERROR - 2016-12-06 20:28:35 --> You did not select a file to upload.
ERROR - 2016-12-06 20:28:42 --> WHY : 40015
ERROR - 2016-12-06 20:37:05 --> 0
ERROR - 2016-12-06 20:37:05 --> 1
ERROR - 2016-12-06 20:37:05 --> 2
ERROR - 2016-12-06 20:37:05 --> 3
ERROR - 2016-12-06 20:37:05 --> 4
ERROR - 2016-12-06 20:37:05 --> 5
ERROR - 2016-12-06 20:37:05 --> 6
ERROR - 2016-12-06 20:37:05 --> 7
ERROR - 2016-12-06 20:37:05 --> 8
ERROR - 2016-12-06 20:37:05 --> 9
ERROR - 2016-12-06 20:37:05 --> 10
ERROR - 2016-12-06 20:37:05 --> 11
ERROR - 2016-12-06 20:37:05 --> 12
ERROR - 2016-12-06 20:37:05 --> 13
ERROR - 2016-12-06 20:37:05 --> 14
ERROR - 2016-12-06 20:37:05 --> 15
ERROR - 2016-12-06 20:37:05 --> 16
ERROR - 2016-12-06 20:37:05 --> 17
ERROR - 2016-12-06 20:37:05 --> 18
ERROR - 2016-12-06 20:37:05 --> 19
ERROR - 2016-12-06 20:37:05 --> 20
ERROR - 2016-12-06 20:37:05 --> 21
ERROR - 2016-12-06 20:37:05 --> 22
ERROR - 2016-12-06 20:37:05 --> 23
ERROR - 2016-12-06 20:37:05 --> 24
ERROR - 2016-12-06 20:37:05 --> 25
ERROR - 2016-12-06 20:37:05 --> 26
ERROR - 2016-12-06 20:37:05 --> 27
ERROR - 2016-12-06 20:37:05 --> 28
ERROR - 2016-12-06 20:37:05 --> 29
ERROR - 2016-12-06 20:37:05 --> 30
ERROR - 2016-12-06 20:37:05 --> 31
ERROR - 2016-12-06 20:37:05 --> 32
ERROR - 2016-12-06 20:37:05 --> 33
ERROR - 2016-12-06 20:37:05 --> 34
ERROR - 2016-12-06 20:37:05 --> 35
ERROR - 2016-12-06 20:37:05 --> 36
ERROR - 2016-12-06 20:37:05 --> 37
ERROR - 2016-12-06 20:37:05 --> 38
ERROR - 2016-12-06 20:37:05 --> 39
ERROR - 2016-12-06 20:37:06 --> 40
ERROR - 2016-12-06 20:37:06 --> 41
ERROR - 2016-12-06 20:37:06 --> 42
ERROR - 2016-12-06 20:37:06 --> 43
ERROR - 2016-12-06 20:37:06 --> 44
ERROR - 2016-12-06 20:37:06 --> 45
ERROR - 2016-12-06 20:37:06 --> 46
ERROR - 2016-12-06 20:37:06 --> 47
ERROR - 2016-12-06 20:37:06 --> 48
ERROR - 2016-12-06 20:37:06 --> 49
ERROR - 2016-12-06 20:37:06 --> 50
ERROR - 2016-12-06 20:37:06 --> 51
ERROR - 2016-12-06 20:37:06 --> 52
ERROR - 2016-12-06 20:37:06 --> 53
ERROR - 2016-12-06 20:37:06 --> 54
ERROR - 2016-12-06 20:37:06 --> 55
ERROR - 2016-12-06 20:37:06 --> 56
ERROR - 2016-12-06 20:37:06 --> 57
ERROR - 2016-12-06 20:37:06 --> 58
ERROR - 2016-12-06 20:37:06 --> 59
ERROR - 2016-12-06 20:37:06 --> 60
ERROR - 2016-12-06 20:37:06 --> 61
ERROR - 2016-12-06 20:37:06 --> 62
ERROR - 2016-12-06 20:37:06 --> 63
ERROR - 2016-12-06 20:37:06 --> 64
ERROR - 2016-12-06 20:37:06 --> 65
ERROR - 2016-12-06 20:37:06 --> 66
ERROR - 2016-12-06 20:37:06 --> 67
ERROR - 2016-12-06 20:37:06 --> 68
ERROR - 2016-12-06 20:37:06 --> 69
ERROR - 2016-12-06 20:37:06 --> 70
ERROR - 2016-12-06 20:37:06 --> 71
ERROR - 2016-12-06 20:37:06 --> 72
ERROR - 2016-12-06 20:37:06 --> 73
ERROR - 2016-12-06 20:37:06 --> 74
ERROR - 2016-12-06 20:37:06 --> 75
ERROR - 2016-12-06 20:37:06 --> 76
ERROR - 2016-12-06 20:37:06 --> 77
ERROR - 2016-12-06 20:37:06 --> 78
ERROR - 2016-12-06 20:37:06 --> 79
ERROR - 2016-12-06 20:37:06 --> 80
ERROR - 2016-12-06 20:37:06 --> 81
ERROR - 2016-12-06 20:37:06 --> 82
ERROR - 2016-12-06 20:37:06 --> 83
ERROR - 2016-12-06 20:37:06 --> 84
ERROR - 2016-12-06 20:37:06 --> 85
ERROR - 2016-12-06 20:37:06 --> 86
ERROR - 2016-12-06 20:37:06 --> 87
ERROR - 2016-12-06 20:37:07 --> 88
ERROR - 2016-12-06 20:37:07 --> 89
ERROR - 2016-12-06 20:37:07 --> 90
ERROR - 2016-12-06 20:37:07 --> 91
ERROR - 2016-12-06 20:37:07 --> 92
ERROR - 2016-12-06 20:37:07 --> 93
ERROR - 2016-12-06 20:37:07 --> 94
ERROR - 2016-12-06 20:37:07 --> 95
ERROR - 2016-12-06 20:37:07 --> 96
ERROR - 2016-12-06 20:37:07 --> 97
ERROR - 2016-12-06 20:37:07 --> 98
ERROR - 2016-12-06 20:37:07 --> 99
ERROR - 2016-12-06 20:37:07 --> 100
ERROR - 2016-12-06 20:37:07 --> 101
ERROR - 2016-12-06 20:37:07 --> 102
ERROR - 2016-12-06 20:37:07 --> 103
ERROR - 2016-12-06 20:37:07 --> 104
ERROR - 2016-12-06 20:37:07 --> 105
ERROR - 2016-12-06 20:37:07 --> 106
ERROR - 2016-12-06 20:37:07 --> 107
ERROR - 2016-12-06 20:37:07 --> 108
ERROR - 2016-12-06 20:37:07 --> 109
ERROR - 2016-12-06 20:37:07 --> 110
ERROR - 2016-12-06 20:37:07 --> 111
ERROR - 2016-12-06 20:37:07 --> 112
ERROR - 2016-12-06 20:37:07 --> 113
ERROR - 2016-12-06 20:37:07 --> 114
ERROR - 2016-12-06 20:37:07 --> 115
ERROR - 2016-12-06 20:37:07 --> 116
ERROR - 2016-12-06 20:37:07 --> 117
ERROR - 2016-12-06 20:37:07 --> 118
ERROR - 2016-12-06 20:37:07 --> 119
ERROR - 2016-12-06 20:37:07 --> 120
ERROR - 2016-12-06 20:37:07 --> 121
ERROR - 2016-12-06 20:37:07 --> 122
ERROR - 2016-12-06 20:37:07 --> 123
ERROR - 2016-12-06 20:37:07 --> 124
ERROR - 2016-12-06 20:37:07 --> 125
ERROR - 2016-12-06 20:37:07 --> 126
ERROR - 2016-12-06 20:37:07 --> 127
ERROR - 2016-12-06 20:37:07 --> 128
ERROR - 2016-12-06 20:37:07 --> 129
ERROR - 2016-12-06 20:37:07 --> 130
ERROR - 2016-12-06 20:37:07 --> 131
ERROR - 2016-12-06 20:37:07 --> 132
ERROR - 2016-12-06 20:37:07 --> 133
ERROR - 2016-12-06 20:37:07 --> 134
ERROR - 2016-12-06 20:37:07 --> 135
ERROR - 2016-12-06 20:37:07 --> 136
ERROR - 2016-12-06 20:37:07 --> 137
ERROR - 2016-12-06 20:37:07 --> 138
ERROR - 2016-12-06 20:37:07 --> 139
ERROR - 2016-12-06 20:37:07 --> 140
ERROR - 2016-12-06 20:37:07 --> 141
ERROR - 2016-12-06 20:37:08 --> 142
ERROR - 2016-12-06 20:37:08 --> 143
ERROR - 2016-12-06 20:37:08 --> 144
ERROR - 2016-12-06 20:37:08 --> 145
ERROR - 2016-12-06 20:37:08 --> 146
ERROR - 2016-12-06 20:37:08 --> 147
ERROR - 2016-12-06 20:37:08 --> 148
ERROR - 2016-12-06 20:37:08 --> 149
ERROR - 2016-12-06 20:37:08 --> 150
ERROR - 2016-12-06 20:37:08 --> 151
ERROR - 2016-12-06 20:37:08 --> 152
ERROR - 2016-12-06 20:37:08 --> 153
ERROR - 2016-12-06 20:37:08 --> 154
ERROR - 2016-12-06 20:37:08 --> 155
ERROR - 2016-12-06 20:37:08 --> 156
ERROR - 2016-12-06 20:37:08 --> 157
ERROR - 2016-12-06 20:37:08 --> 158
ERROR - 2016-12-06 20:37:08 --> 159
ERROR - 2016-12-06 20:37:08 --> 160
ERROR - 2016-12-06 20:37:08 --> 161
ERROR - 2016-12-06 20:37:08 --> 162
ERROR - 2016-12-06 20:37:08 --> 163
ERROR - 2016-12-06 20:37:08 --> 164
ERROR - 2016-12-06 20:37:08 --> 165
ERROR - 2016-12-06 20:37:08 --> 166
ERROR - 2016-12-06 20:37:08 --> 167
ERROR - 2016-12-06 20:37:08 --> 168
ERROR - 2016-12-06 20:37:08 --> 169
ERROR - 2016-12-06 20:37:08 --> 170
ERROR - 2016-12-06 20:37:08 --> 171
ERROR - 2016-12-06 20:37:08 --> 172
ERROR - 2016-12-06 20:37:08 --> 173
ERROR - 2016-12-06 20:37:08 --> 174
ERROR - 2016-12-06 20:37:08 --> 175
ERROR - 2016-12-06 20:37:08 --> 176
ERROR - 2016-12-06 20:37:08 --> 177
ERROR - 2016-12-06 20:37:08 --> 178
ERROR - 2016-12-06 20:37:08 --> 179
ERROR - 2016-12-06 20:37:08 --> 180
ERROR - 2016-12-06 20:37:08 --> 181
ERROR - 2016-12-06 20:37:08 --> 182
ERROR - 2016-12-06 20:37:08 --> 183
ERROR - 2016-12-06 20:37:08 --> 184
ERROR - 2016-12-06 20:37:08 --> 185
ERROR - 2016-12-06 20:37:08 --> 186
ERROR - 2016-12-06 20:37:08 --> 187
ERROR - 2016-12-06 20:37:08 --> 188
ERROR - 2016-12-06 20:37:08 --> 189
ERROR - 2016-12-06 20:37:08 --> 190
ERROR - 2016-12-06 20:37:09 --> 191
ERROR - 2016-12-06 20:37:09 --> 192
ERROR - 2016-12-06 20:37:09 --> 193
ERROR - 2016-12-06 20:37:09 --> 194
ERROR - 2016-12-06 20:37:09 --> 195
ERROR - 2016-12-06 20:37:09 --> 196
ERROR - 2016-12-06 20:37:09 --> 197
ERROR - 2016-12-06 20:37:09 --> 198
ERROR - 2016-12-06 20:37:09 --> 199
ERROR - 2016-12-06 20:37:09 --> 200
ERROR - 2016-12-06 20:37:09 --> 201
ERROR - 2016-12-06 20:37:09 --> 202
ERROR - 2016-12-06 20:37:09 --> 203
ERROR - 2016-12-06 20:37:09 --> 204
ERROR - 2016-12-06 20:37:09 --> 205
ERROR - 2016-12-06 20:37:09 --> 206
ERROR - 2016-12-06 20:37:09 --> 207
ERROR - 2016-12-06 20:37:09 --> 208
ERROR - 2016-12-06 20:37:09 --> 209
ERROR - 2016-12-06 20:37:09 --> 210
ERROR - 2016-12-06 20:37:09 --> 211
ERROR - 2016-12-06 20:37:09 --> 212
ERROR - 2016-12-06 20:37:09 --> 213
ERROR - 2016-12-06 20:37:09 --> 214
ERROR - 2016-12-06 20:37:09 --> 215
ERROR - 2016-12-06 20:37:09 --> 216
ERROR - 2016-12-06 20:37:09 --> 217
ERROR - 2016-12-06 20:37:09 --> 218
ERROR - 2016-12-06 20:37:09 --> 219
ERROR - 2016-12-06 20:37:09 --> 220
ERROR - 2016-12-06 20:37:09 --> 221
ERROR - 2016-12-06 20:37:09 --> 222
ERROR - 2016-12-06 20:37:09 --> 223
ERROR - 2016-12-06 20:37:09 --> 224
ERROR - 2016-12-06 20:37:09 --> 225
ERROR - 2016-12-06 20:37:09 --> 226
ERROR - 2016-12-06 20:37:09 --> 227
ERROR - 2016-12-06 20:37:09 --> 228
ERROR - 2016-12-06 20:37:09 --> 229
ERROR - 2016-12-06 20:37:09 --> 230
ERROR - 2016-12-06 20:37:09 --> 231
ERROR - 2016-12-06 20:37:09 --> 232
ERROR - 2016-12-06 20:37:09 --> 233
ERROR - 2016-12-06 20:37:09 --> 234
ERROR - 2016-12-06 20:37:09 --> 235
ERROR - 2016-12-06 20:37:09 --> 236
ERROR - 2016-12-06 20:37:09 --> 237
ERROR - 2016-12-06 20:37:09 --> 238
ERROR - 2016-12-06 20:37:09 --> 239
ERROR - 2016-12-06 20:37:09 --> 240
ERROR - 2016-12-06 20:37:09 --> 241
ERROR - 2016-12-06 20:37:09 --> 242
ERROR - 2016-12-06 20:37:09 --> 243
ERROR - 2016-12-06 20:37:10 --> 244
ERROR - 2016-12-06 20:37:10 --> 245
ERROR - 2016-12-06 20:37:10 --> 246
ERROR - 2016-12-06 20:37:10 --> 247
ERROR - 2016-12-06 20:37:10 --> 248
ERROR - 2016-12-06 20:37:10 --> 249
ERROR - 2016-12-06 20:37:10 --> 250
ERROR - 2016-12-06 20:37:10 --> 251
ERROR - 2016-12-06 20:37:10 --> 252
ERROR - 2016-12-06 20:37:10 --> 253
ERROR - 2016-12-06 20:37:10 --> 254
ERROR - 2016-12-06 20:37:10 --> 255
ERROR - 2016-12-06 20:37:10 --> 256
ERROR - 2016-12-06 20:37:10 --> 257
ERROR - 2016-12-06 20:37:10 --> 258
ERROR - 2016-12-06 20:37:10 --> 259
ERROR - 2016-12-06 20:37:10 --> 260
ERROR - 2016-12-06 20:37:10 --> 261
ERROR - 2016-12-06 20:37:10 --> 262
ERROR - 2016-12-06 20:37:10 --> 263
ERROR - 2016-12-06 20:37:10 --> 264
ERROR - 2016-12-06 20:37:10 --> 265
ERROR - 2016-12-06 20:37:10 --> 266
ERROR - 2016-12-06 20:37:10 --> 267
ERROR - 2016-12-06 20:37:10 --> 268
ERROR - 2016-12-06 20:37:10 --> 269
ERROR - 2016-12-06 20:37:10 --> 270
ERROR - 2016-12-06 20:37:10 --> 271
ERROR - 2016-12-06 20:37:10 --> 272
ERROR - 2016-12-06 20:37:22 --> 0
ERROR - 2016-12-06 20:37:22 --> 1
ERROR - 2016-12-06 20:37:22 --> 2
ERROR - 2016-12-06 20:37:22 --> 3
ERROR - 2016-12-06 20:37:22 --> 4
ERROR - 2016-12-06 20:37:22 --> 5
ERROR - 2016-12-06 20:37:22 --> 6
ERROR - 2016-12-06 20:37:22 --> 7
ERROR - 2016-12-06 20:37:23 --> 8
ERROR - 2016-12-06 20:37:23 --> 9
ERROR - 2016-12-06 20:37:23 --> 10
ERROR - 2016-12-06 20:37:23 --> 11
ERROR - 2016-12-06 20:37:23 --> 12
ERROR - 2016-12-06 20:37:23 --> 13
ERROR - 2016-12-06 20:37:23 --> 14
ERROR - 2016-12-06 20:37:23 --> 15
ERROR - 2016-12-06 20:37:23 --> 16
ERROR - 2016-12-06 20:37:23 --> 17
ERROR - 2016-12-06 20:37:23 --> 18
ERROR - 2016-12-06 20:37:23 --> 19
ERROR - 2016-12-06 20:37:23 --> 20
ERROR - 2016-12-06 20:37:23 --> 21
ERROR - 2016-12-06 20:37:23 --> 22
ERROR - 2016-12-06 20:37:23 --> 23
ERROR - 2016-12-06 20:37:23 --> 24
ERROR - 2016-12-06 20:37:23 --> 25
ERROR - 2016-12-06 20:37:23 --> 26
ERROR - 2016-12-06 20:37:23 --> 27
ERROR - 2016-12-06 20:37:23 --> 28
ERROR - 2016-12-06 20:37:23 --> 29
ERROR - 2016-12-06 20:37:23 --> 30
ERROR - 2016-12-06 20:37:23 --> 31
ERROR - 2016-12-06 20:37:23 --> 32
ERROR - 2016-12-06 20:37:23 --> 33
ERROR - 2016-12-06 20:37:23 --> 34
ERROR - 2016-12-06 20:37:23 --> 35
ERROR - 2016-12-06 20:37:23 --> 36
ERROR - 2016-12-06 20:37:23 --> 37
ERROR - 2016-12-06 20:37:23 --> 38
ERROR - 2016-12-06 20:37:23 --> 39
ERROR - 2016-12-06 20:37:23 --> 40
ERROR - 2016-12-06 20:37:23 --> 41
ERROR - 2016-12-06 20:37:23 --> 42
ERROR - 2016-12-06 20:37:23 --> 43
ERROR - 2016-12-06 20:37:23 --> 44
ERROR - 2016-12-06 20:37:23 --> 45
ERROR - 2016-12-06 20:37:23 --> 46
ERROR - 2016-12-06 20:37:23 --> 47
ERROR - 2016-12-06 20:37:23 --> 48
ERROR - 2016-12-06 20:37:23 --> 49
ERROR - 2016-12-06 20:37:23 --> 50
ERROR - 2016-12-06 20:37:23 --> 51
ERROR - 2016-12-06 20:37:23 --> 52
ERROR - 2016-12-06 20:37:23 --> 53
ERROR - 2016-12-06 20:37:23 --> 54
ERROR - 2016-12-06 20:37:23 --> 55
ERROR - 2016-12-06 20:37:23 --> 56
ERROR - 2016-12-06 20:37:23 --> 57
ERROR - 2016-12-06 20:37:23 --> 58
ERROR - 2016-12-06 20:37:23 --> 59
ERROR - 2016-12-06 20:37:23 --> 60
ERROR - 2016-12-06 20:37:24 --> 61
ERROR - 2016-12-06 20:37:24 --> 62
ERROR - 2016-12-06 20:37:24 --> 63
ERROR - 2016-12-06 20:37:24 --> 64
ERROR - 2016-12-06 20:37:24 --> 65
ERROR - 2016-12-06 20:37:24 --> 66
ERROR - 2016-12-06 20:37:24 --> 67
ERROR - 2016-12-06 20:37:24 --> 68
ERROR - 2016-12-06 20:37:24 --> 69
ERROR - 2016-12-06 20:37:24 --> 70
ERROR - 2016-12-06 20:37:24 --> 71
ERROR - 2016-12-06 20:37:24 --> 72
ERROR - 2016-12-06 20:37:24 --> 73
ERROR - 2016-12-06 20:37:24 --> 74
ERROR - 2016-12-06 20:37:24 --> 75
ERROR - 2016-12-06 20:37:24 --> 76
ERROR - 2016-12-06 20:37:24 --> 77
ERROR - 2016-12-06 20:37:24 --> 78
ERROR - 2016-12-06 20:37:24 --> 79
ERROR - 2016-12-06 20:37:24 --> 80
ERROR - 2016-12-06 20:37:24 --> 81
ERROR - 2016-12-06 20:37:24 --> 82
ERROR - 2016-12-06 20:37:24 --> 83
ERROR - 2016-12-06 20:37:24 --> 84
ERROR - 2016-12-06 20:37:24 --> 85
ERROR - 2016-12-06 20:37:24 --> 86
ERROR - 2016-12-06 20:37:24 --> 87
ERROR - 2016-12-06 20:37:24 --> 88
ERROR - 2016-12-06 20:37:24 --> 89
ERROR - 2016-12-06 20:37:24 --> 90
ERROR - 2016-12-06 20:37:24 --> 91
ERROR - 2016-12-06 20:37:24 --> 92
ERROR - 2016-12-06 20:37:24 --> 93
ERROR - 2016-12-06 20:37:24 --> 94
ERROR - 2016-12-06 20:37:24 --> 95
ERROR - 2016-12-06 20:37:24 --> 96
ERROR - 2016-12-06 20:37:24 --> 97
ERROR - 2016-12-06 20:37:24 --> 98
ERROR - 2016-12-06 20:37:24 --> 99
ERROR - 2016-12-06 20:37:24 --> 100
ERROR - 2016-12-06 20:37:24 --> 101
ERROR - 2016-12-06 20:37:24 --> 102
ERROR - 2016-12-06 20:37:24 --> 103
ERROR - 2016-12-06 20:37:24 --> 104
ERROR - 2016-12-06 20:37:24 --> 105
ERROR - 2016-12-06 20:37:24 --> 106
ERROR - 2016-12-06 20:37:24 --> 107
ERROR - 2016-12-06 20:37:24 --> 108
ERROR - 2016-12-06 20:37:24 --> 109
ERROR - 2016-12-06 20:37:25 --> 110
ERROR - 2016-12-06 20:37:25 --> 111
ERROR - 2016-12-06 20:37:25 --> 112
ERROR - 2016-12-06 20:37:25 --> 113
ERROR - 2016-12-06 20:37:25 --> 114
ERROR - 2016-12-06 20:37:25 --> 115
ERROR - 2016-12-06 20:37:25 --> 116
ERROR - 2016-12-06 20:37:25 --> 117
ERROR - 2016-12-06 20:37:25 --> 118
ERROR - 2016-12-06 20:37:25 --> 119
ERROR - 2016-12-06 20:37:25 --> 120
ERROR - 2016-12-06 20:37:25 --> 121
ERROR - 2016-12-06 20:37:25 --> 122
ERROR - 2016-12-06 20:37:25 --> 123
ERROR - 2016-12-06 20:37:25 --> 124
ERROR - 2016-12-06 20:37:25 --> 125
ERROR - 2016-12-06 20:37:25 --> 126
ERROR - 2016-12-06 20:37:25 --> 127
ERROR - 2016-12-06 20:37:25 --> 128
ERROR - 2016-12-06 20:37:25 --> 129
ERROR - 2016-12-06 20:37:25 --> 130
ERROR - 2016-12-06 20:37:25 --> 131
ERROR - 2016-12-06 20:37:25 --> 132
ERROR - 2016-12-06 20:37:25 --> 133
ERROR - 2016-12-06 20:37:25 --> 134
ERROR - 2016-12-06 20:37:25 --> 135
ERROR - 2016-12-06 20:37:25 --> 136
ERROR - 2016-12-06 20:37:25 --> 137
ERROR - 2016-12-06 20:37:25 --> 138
ERROR - 2016-12-06 20:37:25 --> 139
ERROR - 2016-12-06 20:37:25 --> 140
ERROR - 2016-12-06 20:37:25 --> 141
ERROR - 2016-12-06 20:37:25 --> 142
ERROR - 2016-12-06 20:37:25 --> 143
ERROR - 2016-12-06 20:37:25 --> 144
ERROR - 2016-12-06 20:37:25 --> 145
ERROR - 2016-12-06 20:37:25 --> 146
ERROR - 2016-12-06 20:37:25 --> 147
ERROR - 2016-12-06 20:37:25 --> 148
ERROR - 2016-12-06 20:37:25 --> 149
ERROR - 2016-12-06 20:37:25 --> 150
ERROR - 2016-12-06 20:37:25 --> 151
ERROR - 2016-12-06 20:37:25 --> 152
ERROR - 2016-12-06 20:37:25 --> 153
ERROR - 2016-12-06 20:37:25 --> 154
ERROR - 2016-12-06 20:37:25 --> 155
ERROR - 2016-12-06 20:37:25 --> 156
ERROR - 2016-12-06 20:37:25 --> 157
ERROR - 2016-12-06 20:37:25 --> 158
ERROR - 2016-12-06 20:37:25 --> 159
ERROR - 2016-12-06 20:37:25 --> 160
ERROR - 2016-12-06 20:37:25 --> 161
ERROR - 2016-12-06 20:37:25 --> 162
ERROR - 2016-12-06 20:37:26 --> 163
ERROR - 2016-12-06 20:37:26 --> 164
ERROR - 2016-12-06 20:37:26 --> 165
ERROR - 2016-12-06 20:37:26 --> 166
ERROR - 2016-12-06 20:37:26 --> 167
ERROR - 2016-12-06 20:37:26 --> 168
ERROR - 2016-12-06 20:37:26 --> 169
ERROR - 2016-12-06 20:37:26 --> 170
ERROR - 2016-12-06 20:37:26 --> 171
ERROR - 2016-12-06 20:37:26 --> 172
ERROR - 2016-12-06 20:37:26 --> 173
ERROR - 2016-12-06 20:37:26 --> 174
ERROR - 2016-12-06 20:37:26 --> 175
ERROR - 2016-12-06 20:37:26 --> 176
ERROR - 2016-12-06 20:37:26 --> 177
ERROR - 2016-12-06 20:37:26 --> 178
ERROR - 2016-12-06 20:37:26 --> 179
ERROR - 2016-12-06 20:37:26 --> 180
ERROR - 2016-12-06 20:37:26 --> 181
ERROR - 2016-12-06 20:37:26 --> 182
ERROR - 2016-12-06 20:37:26 --> 183
ERROR - 2016-12-06 20:37:26 --> 184
ERROR - 2016-12-06 20:37:26 --> 185
ERROR - 2016-12-06 20:37:26 --> 186
ERROR - 2016-12-06 20:37:26 --> 187
ERROR - 2016-12-06 20:37:26 --> 188
ERROR - 2016-12-06 20:37:26 --> 189
ERROR - 2016-12-06 20:37:26 --> 190
ERROR - 2016-12-06 20:37:26 --> 191
ERROR - 2016-12-06 20:37:26 --> 192
ERROR - 2016-12-06 20:37:26 --> 193
ERROR - 2016-12-06 20:37:26 --> 194
ERROR - 2016-12-06 20:37:26 --> 195
ERROR - 2016-12-06 20:37:26 --> 196
ERROR - 2016-12-06 20:37:26 --> 197
ERROR - 2016-12-06 20:37:26 --> 198
ERROR - 2016-12-06 20:37:26 --> 199
ERROR - 2016-12-06 20:37:26 --> 200
ERROR - 2016-12-06 20:37:26 --> 201
ERROR - 2016-12-06 20:37:26 --> 202
ERROR - 2016-12-06 20:37:26 --> 203
ERROR - 2016-12-06 20:37:26 --> 204
ERROR - 2016-12-06 20:37:26 --> 205
ERROR - 2016-12-06 20:37:26 --> 206
ERROR - 2016-12-06 20:37:26 --> 207
ERROR - 2016-12-06 20:37:26 --> 208
ERROR - 2016-12-06 20:37:26 --> 209
ERROR - 2016-12-06 20:37:27 --> 210
ERROR - 2016-12-06 20:37:27 --> 211
ERROR - 2016-12-06 20:37:27 --> 212
ERROR - 2016-12-06 20:37:27 --> 213
ERROR - 2016-12-06 20:37:27 --> 214
ERROR - 2016-12-06 20:37:27 --> 215
ERROR - 2016-12-06 20:37:27 --> 216
ERROR - 2016-12-06 20:37:27 --> 217
ERROR - 2016-12-06 20:37:27 --> 218
ERROR - 2016-12-06 20:37:27 --> 219
ERROR - 2016-12-06 20:37:27 --> 220
ERROR - 2016-12-06 20:37:27 --> 221
ERROR - 2016-12-06 20:37:27 --> 222
ERROR - 2016-12-06 20:37:27 --> 223
ERROR - 2016-12-06 20:37:27 --> 224
ERROR - 2016-12-06 20:37:27 --> 225
ERROR - 2016-12-06 20:37:27 --> 226
ERROR - 2016-12-06 20:37:27 --> 227
ERROR - 2016-12-06 20:37:27 --> 228
ERROR - 2016-12-06 20:37:27 --> 229
ERROR - 2016-12-06 20:37:27 --> 230
ERROR - 2016-12-06 20:37:27 --> 231
ERROR - 2016-12-06 20:37:27 --> 232
ERROR - 2016-12-06 20:37:27 --> 233
ERROR - 2016-12-06 20:37:27 --> 234
ERROR - 2016-12-06 20:37:27 --> 235
ERROR - 2016-12-06 20:37:27 --> 236
ERROR - 2016-12-06 20:37:27 --> 237
ERROR - 2016-12-06 20:37:27 --> 238
ERROR - 2016-12-06 20:37:27 --> 239
ERROR - 2016-12-06 20:37:27 --> 240
ERROR - 2016-12-06 20:37:27 --> 241
ERROR - 2016-12-06 20:37:27 --> 242
ERROR - 2016-12-06 20:37:27 --> 243
ERROR - 2016-12-06 20:37:27 --> 244
ERROR - 2016-12-06 20:37:27 --> 245
ERROR - 2016-12-06 20:37:27 --> 246
ERROR - 2016-12-06 20:37:27 --> 247
ERROR - 2016-12-06 20:37:27 --> 248
ERROR - 2016-12-06 20:37:27 --> 249
ERROR - 2016-12-06 20:37:27 --> 250
ERROR - 2016-12-06 20:37:27 --> 251
ERROR - 2016-12-06 20:37:27 --> 252
ERROR - 2016-12-06 20:37:27 --> 253
ERROR - 2016-12-06 20:37:27 --> 254
ERROR - 2016-12-06 20:37:27 --> 255
ERROR - 2016-12-06 20:37:27 --> 256
ERROR - 2016-12-06 20:37:27 --> 257
ERROR - 2016-12-06 20:37:27 --> 258
ERROR - 2016-12-06 20:37:27 --> 259
ERROR - 2016-12-06 20:37:27 --> 260
ERROR - 2016-12-06 20:37:27 --> 261
ERROR - 2016-12-06 20:37:27 --> 262
ERROR - 2016-12-06 20:37:27 --> 263
ERROR - 2016-12-06 20:37:28 --> 264
ERROR - 2016-12-06 20:37:28 --> 265
ERROR - 2016-12-06 20:37:28 --> 266
ERROR - 2016-12-06 20:37:28 --> 267
ERROR - 2016-12-06 20:37:28 --> 268
ERROR - 2016-12-06 20:37:28 --> 269
ERROR - 2016-12-06 20:37:28 --> 270
ERROR - 2016-12-06 20:37:28 --> 271
ERROR - 2016-12-06 20:37:28 --> 272
ERROR - 2016-12-06 20:37:28 --> 273
ERROR - 2016-12-06 20:37:28 --> 274
ERROR - 2016-12-06 20:37:28 --> 275
ERROR - 2016-12-06 20:37:28 --> 276
ERROR - 2016-12-06 20:37:28 --> 277
ERROR - 2016-12-06 20:37:28 --> 278
ERROR - 2016-12-06 20:37:28 --> 279
ERROR - 2016-12-06 20:37:28 --> 280
ERROR - 2016-12-06 20:37:28 --> 281
ERROR - 2016-12-06 20:37:28 --> 282
ERROR - 2016-12-06 20:37:28 --> 283
ERROR - 2016-12-06 20:37:28 --> 284
ERROR - 2016-12-06 20:37:28 --> 285
ERROR - 2016-12-06 20:37:28 --> 286
ERROR - 2016-12-06 20:37:28 --> 287
ERROR - 2016-12-06 20:37:28 --> 288
ERROR - 2016-12-06 20:37:28 --> 289
ERROR - 2016-12-06 20:37:28 --> 290
ERROR - 2016-12-06 20:37:28 --> 291
ERROR - 2016-12-06 20:37:28 --> 292
ERROR - 2016-12-06 20:37:28 --> 293
ERROR - 2016-12-06 20:37:28 --> 294
ERROR - 2016-12-06 20:37:28 --> 295
ERROR - 2016-12-06 20:37:28 --> 296
ERROR - 2016-12-06 20:37:28 --> 297
ERROR - 2016-12-06 20:37:28 --> 298
ERROR - 2016-12-06 20:37:28 --> 299
ERROR - 2016-12-06 20:37:28 --> 300
ERROR - 2016-12-06 20:37:28 --> 301
ERROR - 2016-12-06 20:37:28 --> 302
ERROR - 2016-12-06 20:37:28 --> 303
ERROR - 2016-12-06 20:37:28 --> 304
ERROR - 2016-12-06 20:37:28 --> 305
ERROR - 2016-12-06 20:37:28 --> 306
ERROR - 2016-12-06 20:37:28 --> 307
ERROR - 2016-12-06 20:37:28 --> 308
ERROR - 2016-12-06 20:37:28 --> 309
ERROR - 2016-12-06 20:37:28 --> 310
ERROR - 2016-12-06 20:37:29 --> 311
ERROR - 2016-12-06 20:37:29 --> 312
ERROR - 2016-12-06 20:37:29 --> 313
ERROR - 2016-12-06 20:37:29 --> 314
ERROR - 2016-12-06 20:37:29 --> 315
ERROR - 2016-12-06 20:37:29 --> 316
ERROR - 2016-12-06 20:37:29 --> 317
ERROR - 2016-12-06 20:37:29 --> 318
ERROR - 2016-12-06 20:37:29 --> 319
ERROR - 2016-12-06 20:37:29 --> 320
ERROR - 2016-12-06 20:37:29 --> 321
ERROR - 2016-12-06 20:37:29 --> 322
ERROR - 2016-12-06 20:37:29 --> 323
ERROR - 2016-12-06 20:37:29 --> 324
ERROR - 2016-12-06 20:37:29 --> 325
ERROR - 2016-12-06 20:37:29 --> 326
ERROR - 2016-12-06 20:37:29 --> 327
ERROR - 2016-12-06 20:37:29 --> 328
ERROR - 2016-12-06 20:37:29 --> 329
ERROR - 2016-12-06 20:37:29 --> 330
ERROR - 2016-12-06 20:37:29 --> 331
ERROR - 2016-12-06 20:37:29 --> 332
ERROR - 2016-12-06 20:37:29 --> 333
ERROR - 2016-12-06 20:37:29 --> 334
ERROR - 2016-12-06 20:37:29 --> 335
ERROR - 2016-12-06 20:37:29 --> 336
ERROR - 2016-12-06 20:37:29 --> 337
ERROR - 2016-12-06 20:37:29 --> 338
ERROR - 2016-12-06 20:37:29 --> 339
ERROR - 2016-12-06 20:37:29 --> 340
ERROR - 2016-12-06 20:37:29 --> 341
ERROR - 2016-12-06 20:37:29 --> 342
ERROR - 2016-12-06 20:37:29 --> 343
ERROR - 2016-12-06 20:37:29 --> 344
ERROR - 2016-12-06 20:37:29 --> 345
ERROR - 2016-12-06 20:37:29 --> 346
ERROR - 2016-12-06 20:37:29 --> 347
ERROR - 2016-12-06 20:37:29 --> 348
ERROR - 2016-12-06 20:37:29 --> 349
ERROR - 2016-12-06 20:37:29 --> 350
ERROR - 2016-12-06 20:37:29 --> 351
ERROR - 2016-12-06 20:37:29 --> 352
ERROR - 2016-12-06 20:37:29 --> 353
ERROR - 2016-12-06 20:37:29 --> 354
ERROR - 2016-12-06 20:37:30 --> 355
ERROR - 2016-12-06 20:37:30 --> 356
ERROR - 2016-12-06 20:37:30 --> 357
ERROR - 2016-12-06 20:37:30 --> 358
ERROR - 2016-12-06 20:37:30 --> 359
ERROR - 2016-12-06 20:37:30 --> 360
ERROR - 2016-12-06 20:37:30 --> 361
ERROR - 2016-12-06 20:37:30 --> 362
ERROR - 2016-12-06 20:37:30 --> 363
ERROR - 2016-12-06 20:37:30 --> 364
ERROR - 2016-12-06 20:37:30 --> 365
ERROR - 2016-12-06 20:37:30 --> 366
ERROR - 2016-12-06 20:37:30 --> 367
ERROR - 2016-12-06 20:37:30 --> 368
ERROR - 2016-12-06 20:37:30 --> 369
ERROR - 2016-12-06 20:37:30 --> 370
ERROR - 2016-12-06 20:37:30 --> 371
ERROR - 2016-12-06 20:37:30 --> 372
ERROR - 2016-12-06 20:37:30 --> 373
ERROR - 2016-12-06 20:37:30 --> 374
ERROR - 2016-12-06 20:37:30 --> 375
ERROR - 2016-12-06 20:37:30 --> 376
ERROR - 2016-12-06 20:37:30 --> 377
ERROR - 2016-12-06 20:37:30 --> 378
ERROR - 2016-12-06 20:37:30 --> 379
ERROR - 2016-12-06 20:37:30 --> 380
ERROR - 2016-12-06 20:37:30 --> 381
ERROR - 2016-12-06 20:37:30 --> 382
ERROR - 2016-12-06 20:37:30 --> 383
ERROR - 2016-12-06 20:37:30 --> 384
ERROR - 2016-12-06 20:37:30 --> 385
ERROR - 2016-12-06 20:37:30 --> 386
ERROR - 2016-12-06 20:37:30 --> 387
ERROR - 2016-12-06 20:37:30 --> 388
ERROR - 2016-12-06 20:37:30 --> 389
ERROR - 2016-12-06 20:37:30 --> 390
ERROR - 2016-12-06 20:37:30 --> 391
ERROR - 2016-12-06 20:37:30 --> 392
ERROR - 2016-12-06 20:37:30 --> 393
ERROR - 2016-12-06 20:37:30 --> 394
ERROR - 2016-12-06 20:37:30 --> 395
ERROR - 2016-12-06 20:37:30 --> 396
ERROR - 2016-12-06 20:37:30 --> 397
ERROR - 2016-12-06 20:37:30 --> 398
ERROR - 2016-12-06 20:37:30 --> 399
ERROR - 2016-12-06 20:37:30 --> 400
ERROR - 2016-12-06 20:37:30 --> 401
ERROR - 2016-12-06 20:37:30 --> 402
ERROR - 2016-12-06 20:37:30 --> 403
ERROR - 2016-12-06 20:37:30 --> 404
ERROR - 2016-12-06 20:37:30 --> 405
ERROR - 2016-12-06 20:37:31 --> 406
ERROR - 2016-12-06 20:37:31 --> 407
ERROR - 2016-12-06 20:37:31 --> 408
ERROR - 2016-12-06 20:37:31 --> 409
ERROR - 2016-12-06 20:37:31 --> 410
ERROR - 2016-12-06 20:37:31 --> 411
ERROR - 2016-12-06 20:37:31 --> 412
ERROR - 2016-12-06 20:37:31 --> 413
ERROR - 2016-12-06 20:37:31 --> 414
ERROR - 2016-12-06 20:37:31 --> 415
ERROR - 2016-12-06 20:37:31 --> 416
ERROR - 2016-12-06 20:37:31 --> 417
ERROR - 2016-12-06 20:37:31 --> 418
ERROR - 2016-12-06 20:37:31 --> 419
ERROR - 2016-12-06 20:37:31 --> 420
ERROR - 2016-12-06 20:37:31 --> 421
ERROR - 2016-12-06 20:37:31 --> 422
ERROR - 2016-12-06 20:37:31 --> 423
ERROR - 2016-12-06 20:37:31 --> 424
ERROR - 2016-12-06 20:37:31 --> 425
ERROR - 2016-12-06 20:37:31 --> 426
ERROR - 2016-12-06 20:37:31 --> 427
ERROR - 2016-12-06 20:37:31 --> 428
ERROR - 2016-12-06 20:37:31 --> 429
ERROR - 2016-12-06 20:37:31 --> 430
ERROR - 2016-12-06 20:37:31 --> 431
ERROR - 2016-12-06 20:37:31 --> 432
ERROR - 2016-12-06 20:37:31 --> 433
ERROR - 2016-12-06 20:37:31 --> 434
ERROR - 2016-12-06 20:37:31 --> 435
ERROR - 2016-12-06 20:37:31 --> 436
ERROR - 2016-12-06 20:37:31 --> 437
ERROR - 2016-12-06 20:37:31 --> 438
ERROR - 2016-12-06 20:37:31 --> 439
ERROR - 2016-12-06 20:37:31 --> 440
ERROR - 2016-12-06 20:37:31 --> 441
ERROR - 2016-12-06 20:37:31 --> 442
ERROR - 2016-12-06 20:37:31 --> 443
ERROR - 2016-12-06 20:37:31 --> 444
ERROR - 2016-12-06 20:37:31 --> 445
ERROR - 2016-12-06 20:37:31 --> 446
ERROR - 2016-12-06 20:37:31 --> 447
ERROR - 2016-12-06 20:37:31 --> 448
ERROR - 2016-12-06 20:37:31 --> 449
ERROR - 2016-12-06 20:37:31 --> 450
ERROR - 2016-12-06 20:37:31 --> 451
ERROR - 2016-12-06 20:37:31 --> 452
ERROR - 2016-12-06 20:37:31 --> 453
ERROR - 2016-12-06 20:37:31 --> 454
ERROR - 2016-12-06 20:37:31 --> 455
ERROR - 2016-12-06 20:37:31 --> 456
ERROR - 2016-12-06 20:37:31 --> 457
ERROR - 2016-12-06 20:37:31 --> 458
ERROR - 2016-12-06 20:37:31 --> 459
ERROR - 2016-12-06 20:37:31 --> 460
ERROR - 2016-12-06 20:37:31 --> 461
ERROR - 2016-12-06 20:37:31 --> 462
ERROR - 2016-12-06 20:37:31 --> 463
ERROR - 2016-12-06 20:37:31 --> 464
ERROR - 2016-12-06 20:37:31 --> 465
ERROR - 2016-12-06 20:37:31 --> 466
ERROR - 2016-12-06 20:37:32 --> 467
ERROR - 2016-12-06 20:37:32 --> 468
ERROR - 2016-12-06 20:37:32 --> 469
ERROR - 2016-12-06 20:37:32 --> 470
ERROR - 2016-12-06 20:37:32 --> 471
ERROR - 2016-12-06 20:37:32 --> 472
ERROR - 2016-12-06 20:37:32 --> 473
ERROR - 2016-12-06 20:37:32 --> 474
ERROR - 2016-12-06 20:37:32 --> 475
ERROR - 2016-12-06 20:37:32 --> 476
ERROR - 2016-12-06 20:37:32 --> 477
ERROR - 2016-12-06 20:37:32 --> 478
ERROR - 2016-12-06 20:37:32 --> 479
ERROR - 2016-12-06 20:37:32 --> 480
ERROR - 2016-12-06 20:37:32 --> 481
ERROR - 2016-12-06 20:37:32 --> 482
ERROR - 2016-12-06 20:37:32 --> 483
ERROR - 2016-12-06 20:37:32 --> 484
ERROR - 2016-12-06 20:37:32 --> 485
ERROR - 2016-12-06 20:37:32 --> 486
ERROR - 2016-12-06 20:37:32 --> 487
ERROR - 2016-12-06 20:37:32 --> 488
ERROR - 2016-12-06 20:37:32 --> 489
ERROR - 2016-12-06 20:37:32 --> 490
ERROR - 2016-12-06 20:37:32 --> 491
ERROR - 2016-12-06 20:37:32 --> 492
ERROR - 2016-12-06 20:37:32 --> 493
ERROR - 2016-12-06 20:37:32 --> 494
ERROR - 2016-12-06 20:37:32 --> 495
ERROR - 2016-12-06 20:37:32 --> 496
ERROR - 2016-12-06 20:37:32 --> 497
ERROR - 2016-12-06 20:37:32 --> 498
ERROR - 2016-12-06 20:37:32 --> 499
ERROR - 2016-12-06 20:37:32 --> 500
ERROR - 2016-12-06 20:37:32 --> 501
ERROR - 2016-12-06 20:37:32 --> 502
ERROR - 2016-12-06 20:37:32 --> 503
ERROR - 2016-12-06 20:37:32 --> 504
ERROR - 2016-12-06 20:37:32 --> 505
ERROR - 2016-12-06 20:37:32 --> 506
ERROR - 2016-12-06 20:37:32 --> 507
ERROR - 2016-12-06 20:37:32 --> 508
ERROR - 2016-12-06 20:37:32 --> 509
ERROR - 2016-12-06 20:37:32 --> 510
ERROR - 2016-12-06 20:37:32 --> 511
ERROR - 2016-12-06 20:37:32 --> 512
ERROR - 2016-12-06 20:37:32 --> 513
ERROR - 2016-12-06 20:37:32 --> 514
ERROR - 2016-12-06 20:37:32 --> 515
ERROR - 2016-12-06 20:37:33 --> 516
ERROR - 2016-12-06 20:37:33 --> 517
ERROR - 2016-12-06 20:37:33 --> 518
ERROR - 2016-12-06 20:37:33 --> 519
ERROR - 2016-12-06 20:37:33 --> 520
ERROR - 2016-12-06 20:37:33 --> 521
ERROR - 2016-12-06 20:37:33 --> 522
ERROR - 2016-12-06 20:37:33 --> 523
ERROR - 2016-12-06 20:37:33 --> 524
ERROR - 2016-12-06 20:37:33 --> 525
ERROR - 2016-12-06 20:37:33 --> 526
ERROR - 2016-12-06 20:37:33 --> 527
ERROR - 2016-12-06 20:37:33 --> 528
ERROR - 2016-12-06 20:37:33 --> 529
ERROR - 2016-12-06 20:37:33 --> 530
ERROR - 2016-12-06 20:37:33 --> 531
ERROR - 2016-12-06 20:37:33 --> 532
ERROR - 2016-12-06 20:37:33 --> 533
ERROR - 2016-12-06 20:37:33 --> 534
ERROR - 2016-12-06 20:37:33 --> 535
ERROR - 2016-12-06 20:37:33 --> 536
ERROR - 2016-12-06 20:37:33 --> 537
ERROR - 2016-12-06 20:37:33 --> 538
ERROR - 2016-12-06 20:37:33 --> 539
ERROR - 2016-12-06 20:37:33 --> 540
ERROR - 2016-12-06 20:37:33 --> 541
ERROR - 2016-12-06 20:37:33 --> 542
ERROR - 2016-12-06 20:37:33 --> 543
ERROR - 2016-12-06 20:37:33 --> 544
ERROR - 2016-12-06 20:37:33 --> 545
ERROR - 2016-12-06 20:37:33 --> 546
ERROR - 2016-12-06 20:37:33 --> 547
ERROR - 2016-12-06 20:37:33 --> 548
ERROR - 2016-12-06 20:37:33 --> 549
ERROR - 2016-12-06 20:37:33 --> 550
ERROR - 2016-12-06 20:37:33 --> 551
ERROR - 2016-12-06 20:37:33 --> 552
ERROR - 2016-12-06 20:37:33 --> 553
ERROR - 2016-12-06 20:37:33 --> 554
ERROR - 2016-12-06 20:37:33 --> 555
ERROR - 2016-12-06 20:37:33 --> 556
ERROR - 2016-12-06 20:37:33 --> 557
ERROR - 2016-12-06 20:37:33 --> 558
ERROR - 2016-12-06 20:37:34 --> 559
ERROR - 2016-12-06 20:37:34 --> 560
ERROR - 2016-12-06 20:37:34 --> 561
ERROR - 2016-12-06 20:37:34 --> 562
ERROR - 2016-12-06 20:37:34 --> 563
ERROR - 2016-12-06 20:37:34 --> 564
ERROR - 2016-12-06 20:37:34 --> 565
ERROR - 2016-12-06 20:37:34 --> 566
ERROR - 2016-12-06 20:37:34 --> 567
ERROR - 2016-12-06 20:37:34 --> 568
ERROR - 2016-12-06 20:37:34 --> 569
ERROR - 2016-12-06 20:37:34 --> 570
ERROR - 2016-12-06 20:37:34 --> 571
ERROR - 2016-12-06 20:37:34 --> 572
ERROR - 2016-12-06 20:37:34 --> 573
ERROR - 2016-12-06 20:37:34 --> 574
ERROR - 2016-12-06 20:37:34 --> 575
ERROR - 2016-12-06 20:37:34 --> 576
ERROR - 2016-12-06 20:37:34 --> 577
ERROR - 2016-12-06 20:37:34 --> 578
ERROR - 2016-12-06 20:37:34 --> 579
ERROR - 2016-12-06 20:37:34 --> 580
ERROR - 2016-12-06 20:37:34 --> 581
ERROR - 2016-12-06 20:37:34 --> 582
ERROR - 2016-12-06 20:37:34 --> 583
ERROR - 2016-12-06 20:37:34 --> 584
ERROR - 2016-12-06 20:37:34 --> 585
ERROR - 2016-12-06 20:37:34 --> 586
ERROR - 2016-12-06 20:37:34 --> 587
ERROR - 2016-12-06 20:37:34 --> 588
ERROR - 2016-12-06 20:37:34 --> 589
ERROR - 2016-12-06 20:37:34 --> 590
ERROR - 2016-12-06 20:37:34 --> 591
ERROR - 2016-12-06 20:37:34 --> 592
ERROR - 2016-12-06 20:37:34 --> 593
ERROR - 2016-12-06 20:37:34 --> 594
ERROR - 2016-12-06 20:37:34 --> 595
ERROR - 2016-12-06 20:37:34 --> 596
ERROR - 2016-12-06 20:37:34 --> 597
ERROR - 2016-12-06 20:37:34 --> 598
ERROR - 2016-12-06 20:37:34 --> 599
ERROR - 2016-12-06 20:37:34 --> 600
ERROR - 2016-12-06 20:37:34 --> 601
ERROR - 2016-12-06 20:37:34 --> 602
ERROR - 2016-12-06 20:37:34 --> 603
ERROR - 2016-12-06 20:37:34 --> 604
ERROR - 2016-12-06 20:37:34 --> 605
ERROR - 2016-12-06 20:37:34 --> 606
ERROR - 2016-12-06 20:37:34 --> 607
ERROR - 2016-12-06 20:37:34 --> 608
ERROR - 2016-12-06 20:37:35 --> 609
ERROR - 2016-12-06 20:37:35 --> 610
ERROR - 2016-12-06 20:37:35 --> 611
ERROR - 2016-12-06 20:37:35 --> 612
ERROR - 2016-12-06 20:37:35 --> 613
ERROR - 2016-12-06 20:37:35 --> 614
ERROR - 2016-12-06 20:37:35 --> 615
ERROR - 2016-12-06 20:37:35 --> 616
ERROR - 2016-12-06 20:37:35 --> 617
ERROR - 2016-12-06 20:37:35 --> 618
ERROR - 2016-12-06 20:37:35 --> 619
ERROR - 2016-12-06 20:37:35 --> 620
ERROR - 2016-12-06 20:37:35 --> 621
ERROR - 2016-12-06 20:37:35 --> 622
ERROR - 2016-12-06 20:37:35 --> 623
ERROR - 2016-12-06 20:37:35 --> 624
ERROR - 2016-12-06 20:37:35 --> 625
ERROR - 2016-12-06 20:37:35 --> 626
ERROR - 2016-12-06 20:37:35 --> 627
ERROR - 2016-12-06 20:37:35 --> 628
ERROR - 2016-12-06 20:37:35 --> 629
ERROR - 2016-12-06 20:37:35 --> 630
ERROR - 2016-12-06 20:37:35 --> 631
ERROR - 2016-12-06 20:37:35 --> 632
ERROR - 2016-12-06 20:37:35 --> 633
ERROR - 2016-12-06 20:37:35 --> 634
ERROR - 2016-12-06 20:37:35 --> 635
ERROR - 2016-12-06 20:37:35 --> 636
ERROR - 2016-12-06 20:37:35 --> 637
ERROR - 2016-12-06 20:37:35 --> 638
ERROR - 2016-12-06 20:37:35 --> 639
ERROR - 2016-12-06 20:37:35 --> 640
ERROR - 2016-12-06 20:37:35 --> 641
ERROR - 2016-12-06 20:37:35 --> 642
ERROR - 2016-12-06 20:37:35 --> 643
ERROR - 2016-12-06 20:37:35 --> 644
ERROR - 2016-12-06 20:37:35 --> 645
ERROR - 2016-12-06 20:37:35 --> 646
ERROR - 2016-12-06 20:37:35 --> 647
ERROR - 2016-12-06 20:37:35 --> 648
ERROR - 2016-12-06 20:37:35 --> 649
ERROR - 2016-12-06 20:37:35 --> 650
ERROR - 2016-12-06 20:37:35 --> 651
ERROR - 2016-12-06 20:37:35 --> 652
ERROR - 2016-12-06 20:37:35 --> 653
ERROR - 2016-12-06 20:37:35 --> 654
ERROR - 2016-12-06 20:37:35 --> 655
ERROR - 2016-12-06 20:37:36 --> 656
ERROR - 2016-12-06 20:37:36 --> 657
ERROR - 2016-12-06 20:37:36 --> 658
ERROR - 2016-12-06 20:37:36 --> 659
ERROR - 2016-12-06 20:37:36 --> 660
ERROR - 2016-12-06 20:37:36 --> 661
ERROR - 2016-12-06 20:37:36 --> 662
ERROR - 2016-12-06 20:37:36 --> 663
ERROR - 2016-12-06 20:37:36 --> 664
ERROR - 2016-12-06 20:37:36 --> 665
ERROR - 2016-12-06 20:37:36 --> 666
ERROR - 2016-12-06 20:37:36 --> 667
ERROR - 2016-12-06 20:37:36 --> 668
ERROR - 2016-12-06 20:37:36 --> 669
ERROR - 2016-12-06 20:37:36 --> 670
ERROR - 2016-12-06 20:37:36 --> 671
ERROR - 2016-12-06 20:37:36 --> 672
ERROR - 2016-12-06 20:37:36 --> 673
ERROR - 2016-12-06 20:37:36 --> 674
ERROR - 2016-12-06 20:37:36 --> 675
ERROR - 2016-12-06 20:37:36 --> 676
ERROR - 2016-12-06 20:37:36 --> 677
ERROR - 2016-12-06 20:37:36 --> 678
ERROR - 2016-12-06 20:37:36 --> 679
ERROR - 2016-12-06 20:37:36 --> 680
ERROR - 2016-12-06 20:37:36 --> 681
ERROR - 2016-12-06 20:37:36 --> 682
ERROR - 2016-12-06 20:37:36 --> 683
ERROR - 2016-12-06 20:37:36 --> 684
ERROR - 2016-12-06 20:37:36 --> 685
ERROR - 2016-12-06 20:37:36 --> 686
ERROR - 2016-12-06 20:37:36 --> 687
ERROR - 2016-12-06 20:37:36 --> 688
ERROR - 2016-12-06 20:37:36 --> 689
ERROR - 2016-12-06 20:37:36 --> 690
ERROR - 2016-12-06 20:37:36 --> 691
ERROR - 2016-12-06 20:37:36 --> 692
ERROR - 2016-12-06 20:37:36 --> 693
ERROR - 2016-12-06 20:37:36 --> 694
ERROR - 2016-12-06 20:37:36 --> 695
ERROR - 2016-12-06 20:37:36 --> 696
ERROR - 2016-12-06 20:37:36 --> 697
ERROR - 2016-12-06 20:37:36 --> 698
ERROR - 2016-12-06 20:37:36 --> 699
ERROR - 2016-12-06 20:37:36 --> 700
ERROR - 2016-12-06 20:37:36 --> 701
ERROR - 2016-12-06 20:37:36 --> 702
ERROR - 2016-12-06 20:37:36 --> 703
ERROR - 2016-12-06 20:37:36 --> 704
ERROR - 2016-12-06 20:37:36 --> 705
ERROR - 2016-12-06 20:37:36 --> 706
ERROR - 2016-12-06 20:37:36 --> 707
ERROR - 2016-12-06 20:37:36 --> 708
ERROR - 2016-12-06 20:37:36 --> 709
ERROR - 2016-12-06 20:37:36 --> 710
ERROR - 2016-12-06 20:37:36 --> 711
ERROR - 2016-12-06 20:37:36 --> 712
ERROR - 2016-12-06 20:37:37 --> 713
ERROR - 2016-12-06 20:37:37 --> 714
ERROR - 2016-12-06 20:37:37 --> 715
ERROR - 2016-12-06 20:37:37 --> 716
ERROR - 2016-12-06 20:37:37 --> 717
ERROR - 2016-12-06 20:37:37 --> 718
ERROR - 2016-12-06 20:37:37 --> 719
ERROR - 2016-12-06 20:37:37 --> 720
ERROR - 2016-12-06 20:37:37 --> 721
ERROR - 2016-12-06 20:37:37 --> 722
ERROR - 2016-12-06 20:37:37 --> 723
ERROR - 2016-12-06 20:37:37 --> 724
ERROR - 2016-12-06 20:37:37 --> 725
ERROR - 2016-12-06 20:37:37 --> 726
ERROR - 2016-12-06 20:37:37 --> 727
ERROR - 2016-12-06 20:37:37 --> 728
ERROR - 2016-12-06 20:37:37 --> 729
ERROR - 2016-12-06 20:37:37 --> 730
ERROR - 2016-12-06 20:37:37 --> 731
ERROR - 2016-12-06 20:37:37 --> 732
ERROR - 2016-12-06 20:37:37 --> 733
ERROR - 2016-12-06 20:37:37 --> 734
ERROR - 2016-12-06 20:37:37 --> 735
ERROR - 2016-12-06 20:37:37 --> 736
ERROR - 2016-12-06 20:37:37 --> 737
ERROR - 2016-12-06 20:37:37 --> 738
ERROR - 2016-12-06 20:37:37 --> 739
ERROR - 2016-12-06 20:37:37 --> 740
ERROR - 2016-12-06 20:37:37 --> 741
ERROR - 2016-12-06 20:37:37 --> 742
ERROR - 2016-12-06 20:37:37 --> 743
ERROR - 2016-12-06 20:37:37 --> 744
ERROR - 2016-12-06 20:37:37 --> 745
ERROR - 2016-12-06 20:37:37 --> 746
ERROR - 2016-12-06 20:37:37 --> 747
ERROR - 2016-12-06 20:37:37 --> 748
ERROR - 2016-12-06 20:37:37 --> 749
ERROR - 2016-12-06 20:37:37 --> 750
ERROR - 2016-12-06 20:37:37 --> 751
ERROR - 2016-12-06 20:37:37 --> 752
ERROR - 2016-12-06 20:37:37 --> 753
ERROR - 2016-12-06 20:37:37 --> 754
ERROR - 2016-12-06 20:37:37 --> 755
ERROR - 2016-12-06 20:37:37 --> 756
ERROR - 2016-12-06 20:37:37 --> 757
ERROR - 2016-12-06 20:37:37 --> 758
ERROR - 2016-12-06 20:37:37 --> 759
ERROR - 2016-12-06 20:37:37 --> 760
ERROR - 2016-12-06 20:37:37 --> 761
ERROR - 2016-12-06 20:37:38 --> 762
ERROR - 2016-12-06 20:37:38 --> 763
ERROR - 2016-12-06 20:37:38 --> 764
ERROR - 2016-12-06 20:37:38 --> 765
ERROR - 2016-12-06 20:37:38 --> 766
ERROR - 2016-12-06 20:37:38 --> 767
ERROR - 2016-12-06 20:37:38 --> 768
ERROR - 2016-12-06 20:37:38 --> 769
ERROR - 2016-12-06 20:37:38 --> 770
ERROR - 2016-12-06 20:37:38 --> 771
ERROR - 2016-12-06 20:37:38 --> 772
ERROR - 2016-12-06 20:37:38 --> 773
ERROR - 2016-12-06 20:37:38 --> 774
ERROR - 2016-12-06 20:37:38 --> 775
ERROR - 2016-12-06 20:37:38 --> 776
ERROR - 2016-12-06 20:37:38 --> 777
ERROR - 2016-12-06 20:37:38 --> 778
ERROR - 2016-12-06 20:37:38 --> 779
ERROR - 2016-12-06 20:37:38 --> 780
ERROR - 2016-12-06 20:37:38 --> 781
ERROR - 2016-12-06 20:37:38 --> 782
ERROR - 2016-12-06 20:37:38 --> 783
ERROR - 2016-12-06 20:37:38 --> 784
ERROR - 2016-12-06 20:37:38 --> 785
ERROR - 2016-12-06 20:37:38 --> 786
ERROR - 2016-12-06 20:37:38 --> 787
ERROR - 2016-12-06 20:37:38 --> 788
ERROR - 2016-12-06 20:37:38 --> 789
ERROR - 2016-12-06 20:37:38 --> 790
ERROR - 2016-12-06 20:37:38 --> 791
ERROR - 2016-12-06 20:37:38 --> 792
ERROR - 2016-12-06 20:37:38 --> 793
ERROR - 2016-12-06 20:37:38 --> 794
ERROR - 2016-12-06 20:37:38 --> 795
ERROR - 2016-12-06 20:37:38 --> 796
ERROR - 2016-12-06 20:37:38 --> 797
ERROR - 2016-12-06 20:37:38 --> 798
ERROR - 2016-12-06 20:37:38 --> 799
ERROR - 2016-12-06 20:37:38 --> 800
ERROR - 2016-12-06 20:37:38 --> 801
ERROR - 2016-12-06 20:37:38 --> 802
ERROR - 2016-12-06 20:37:38 --> 803
ERROR - 2016-12-06 20:37:38 --> 804
ERROR - 2016-12-06 20:37:39 --> 805
ERROR - 2016-12-06 20:37:39 --> 806
ERROR - 2016-12-06 20:37:39 --> 807
ERROR - 2016-12-06 20:37:39 --> 808
ERROR - 2016-12-06 20:37:39 --> 809
ERROR - 2016-12-06 20:37:39 --> 810
ERROR - 2016-12-06 20:37:39 --> 811
ERROR - 2016-12-06 20:37:39 --> 812
ERROR - 2016-12-06 20:37:39 --> 813
ERROR - 2016-12-06 20:37:39 --> 814
ERROR - 2016-12-06 20:37:39 --> 815
ERROR - 2016-12-06 20:37:39 --> 816
ERROR - 2016-12-06 20:37:39 --> 817
ERROR - 2016-12-06 20:37:39 --> 818
ERROR - 2016-12-06 20:37:39 --> 819
ERROR - 2016-12-06 20:37:39 --> 820
ERROR - 2016-12-06 20:37:39 --> 821
ERROR - 2016-12-06 20:37:39 --> 822
ERROR - 2016-12-06 20:37:39 --> 823
ERROR - 2016-12-06 20:37:39 --> 824
ERROR - 2016-12-06 20:37:39 --> 825
ERROR - 2016-12-06 20:37:39 --> 826
ERROR - 2016-12-06 20:37:39 --> 827
ERROR - 2016-12-06 20:37:39 --> 828
ERROR - 2016-12-06 20:37:39 --> 829
ERROR - 2016-12-06 20:37:39 --> 830
ERROR - 2016-12-06 20:37:39 --> 831
ERROR - 2016-12-06 20:37:39 --> 832
ERROR - 2016-12-06 20:37:39 --> 833
ERROR - 2016-12-06 20:37:39 --> 834
ERROR - 2016-12-06 20:37:39 --> 835
ERROR - 2016-12-06 20:37:39 --> 836
ERROR - 2016-12-06 20:37:39 --> 837
ERROR - 2016-12-06 20:37:39 --> 838
ERROR - 2016-12-06 20:37:39 --> 839
ERROR - 2016-12-06 20:37:39 --> 840
ERROR - 2016-12-06 20:37:39 --> 841
ERROR - 2016-12-06 20:37:39 --> 842
ERROR - 2016-12-06 20:37:39 --> 843
ERROR - 2016-12-06 20:37:39 --> 844
ERROR - 2016-12-06 20:37:39 --> 845
ERROR - 2016-12-06 20:37:39 --> 846
ERROR - 2016-12-06 20:37:39 --> 847
ERROR - 2016-12-06 20:37:39 --> 848
ERROR - 2016-12-06 20:37:39 --> 849
ERROR - 2016-12-06 20:37:39 --> 850
ERROR - 2016-12-06 20:37:39 --> 851
ERROR - 2016-12-06 20:37:39 --> 852
ERROR - 2016-12-06 20:37:39 --> 853
ERROR - 2016-12-06 20:37:39 --> 854
ERROR - 2016-12-06 20:37:39 --> 855
ERROR - 2016-12-06 20:37:39 --> 856
ERROR - 2016-12-06 20:37:40 --> 857
ERROR - 2016-12-06 20:37:40 --> 858
ERROR - 2016-12-06 20:37:40 --> 859
ERROR - 2016-12-06 20:37:40 --> 860
ERROR - 2016-12-06 20:37:40 --> 861
ERROR - 2016-12-06 20:37:40 --> 862
ERROR - 2016-12-06 20:37:40 --> 863
ERROR - 2016-12-06 20:37:40 --> 864
ERROR - 2016-12-06 20:37:40 --> 865
ERROR - 2016-12-06 20:37:40 --> 866
ERROR - 2016-12-06 20:37:40 --> 867
ERROR - 2016-12-06 20:37:40 --> 868
ERROR - 2016-12-06 20:37:40 --> 869
ERROR - 2016-12-06 20:37:40 --> 870
ERROR - 2016-12-06 20:37:40 --> 871
ERROR - 2016-12-06 20:37:40 --> 872
ERROR - 2016-12-06 20:37:40 --> 873
ERROR - 2016-12-06 20:37:40 --> 874
ERROR - 2016-12-06 20:37:40 --> 875
ERROR - 2016-12-06 20:37:40 --> 876
ERROR - 2016-12-06 20:37:40 --> 877
ERROR - 2016-12-06 20:37:40 --> 878
ERROR - 2016-12-06 20:37:40 --> 879
ERROR - 2016-12-06 20:37:40 --> 880
ERROR - 2016-12-06 20:37:40 --> 881
ERROR - 2016-12-06 20:37:40 --> 882
ERROR - 2016-12-06 20:37:40 --> 883
ERROR - 2016-12-06 20:37:40 --> 884
ERROR - 2016-12-06 20:37:40 --> 885
ERROR - 2016-12-06 20:37:40 --> 886
ERROR - 2016-12-06 20:37:40 --> 887
ERROR - 2016-12-06 20:37:40 --> 888
ERROR - 2016-12-06 20:37:40 --> 889
ERROR - 2016-12-06 20:37:40 --> 890
ERROR - 2016-12-06 20:37:40 --> 891
ERROR - 2016-12-06 20:37:40 --> 892
ERROR - 2016-12-06 20:37:40 --> 893
ERROR - 2016-12-06 20:37:40 --> 894
ERROR - 2016-12-06 20:37:40 --> 895
ERROR - 2016-12-06 20:37:40 --> 896
ERROR - 2016-12-06 20:37:40 --> 897
ERROR - 2016-12-06 20:37:40 --> 898
ERROR - 2016-12-06 20:37:40 --> 899
ERROR - 2016-12-06 20:37:40 --> 900
ERROR - 2016-12-06 20:37:40 --> 901
ERROR - 2016-12-06 20:37:40 --> 902
ERROR - 2016-12-06 20:37:41 --> 903
ERROR - 2016-12-06 20:37:41 --> 904
ERROR - 2016-12-06 20:37:41 --> 905
ERROR - 2016-12-06 20:37:41 --> 906
ERROR - 2016-12-06 20:37:41 --> 907
ERROR - 2016-12-06 20:37:41 --> 908
ERROR - 2016-12-06 20:37:41 --> 909
ERROR - 2016-12-06 20:37:41 --> 910
ERROR - 2016-12-06 20:37:41 --> 911
ERROR - 2016-12-06 20:37:41 --> 912
ERROR - 2016-12-06 20:37:41 --> 913
ERROR - 2016-12-06 20:37:41 --> 914
ERROR - 2016-12-06 20:37:41 --> 915
ERROR - 2016-12-06 20:37:41 --> 916
ERROR - 2016-12-06 20:37:41 --> 917
ERROR - 2016-12-06 20:37:41 --> 918
ERROR - 2016-12-06 20:37:41 --> 919
ERROR - 2016-12-06 20:37:41 --> 920
ERROR - 2016-12-06 20:37:41 --> 921
ERROR - 2016-12-06 20:37:41 --> 922
ERROR - 2016-12-06 20:37:41 --> 923
ERROR - 2016-12-06 20:37:41 --> 924
ERROR - 2016-12-06 20:37:41 --> 925
ERROR - 2016-12-06 20:37:41 --> 926
ERROR - 2016-12-06 20:37:41 --> 927
ERROR - 2016-12-06 20:37:41 --> 928
ERROR - 2016-12-06 20:37:41 --> 929
ERROR - 2016-12-06 20:37:41 --> 930
ERROR - 2016-12-06 20:37:41 --> 931
ERROR - 2016-12-06 20:37:41 --> 932
ERROR - 2016-12-06 20:37:41 --> 933
ERROR - 2016-12-06 20:37:41 --> 934
ERROR - 2016-12-06 20:37:41 --> 935
ERROR - 2016-12-06 20:37:41 --> 936
ERROR - 2016-12-06 20:37:41 --> 937
ERROR - 2016-12-06 20:37:41 --> 938
ERROR - 2016-12-06 20:37:41 --> 939
ERROR - 2016-12-06 20:37:41 --> 940
ERROR - 2016-12-06 20:37:41 --> 941
ERROR - 2016-12-06 20:37:41 --> 942
ERROR - 2016-12-06 20:37:41 --> 943
ERROR - 2016-12-06 20:37:41 --> 944
ERROR - 2016-12-06 20:37:41 --> 945
ERROR - 2016-12-06 20:37:41 --> 946
ERROR - 2016-12-06 20:37:42 --> 947
ERROR - 2016-12-06 20:37:42 --> 948
ERROR - 2016-12-06 20:37:42 --> 949
ERROR - 2016-12-06 20:37:42 --> 950
ERROR - 2016-12-06 20:37:42 --> 951
ERROR - 2016-12-06 20:37:42 --> 952
ERROR - 2016-12-06 20:37:42 --> 953
ERROR - 2016-12-06 20:37:42 --> 954
ERROR - 2016-12-06 20:37:42 --> 955
ERROR - 2016-12-06 20:37:42 --> 956
ERROR - 2016-12-06 20:37:42 --> 957
ERROR - 2016-12-06 20:37:42 --> 958
ERROR - 2016-12-06 20:37:42 --> 959
ERROR - 2016-12-06 20:37:42 --> 960
ERROR - 2016-12-06 20:37:42 --> 961
ERROR - 2016-12-06 20:37:42 --> 962
ERROR - 2016-12-06 20:37:42 --> 963
ERROR - 2016-12-06 20:37:42 --> 964
ERROR - 2016-12-06 20:37:42 --> 965
ERROR - 2016-12-06 20:37:42 --> 966
ERROR - 2016-12-06 20:37:42 --> 967
ERROR - 2016-12-06 20:37:42 --> 968
ERROR - 2016-12-06 20:37:42 --> 969
ERROR - 2016-12-06 20:37:42 --> 970
ERROR - 2016-12-06 20:37:42 --> 971
ERROR - 2016-12-06 20:37:42 --> 972
ERROR - 2016-12-06 20:37:42 --> 973
ERROR - 2016-12-06 20:37:42 --> 974
ERROR - 2016-12-06 20:37:42 --> 975
ERROR - 2016-12-06 20:37:42 --> 976
ERROR - 2016-12-06 20:37:42 --> 977
ERROR - 2016-12-06 20:37:42 --> 978
ERROR - 2016-12-06 20:37:42 --> 979
ERROR - 2016-12-06 20:37:42 --> 980
ERROR - 2016-12-06 20:37:42 --> 981
ERROR - 2016-12-06 20:37:42 --> 982
ERROR - 2016-12-06 20:37:42 --> 983
ERROR - 2016-12-06 20:37:42 --> 984
ERROR - 2016-12-06 20:37:42 --> 985
ERROR - 2016-12-06 20:37:42 --> 986
ERROR - 2016-12-06 20:37:42 --> 987
ERROR - 2016-12-06 20:37:42 --> 988
ERROR - 2016-12-06 20:37:42 --> 989
ERROR - 2016-12-06 20:37:42 --> 990
ERROR - 2016-12-06 20:37:43 --> 991
ERROR - 2016-12-06 20:37:43 --> 992
ERROR - 2016-12-06 20:37:43 --> 993
ERROR - 2016-12-06 20:37:43 --> 994
ERROR - 2016-12-06 20:37:43 --> 995
ERROR - 2016-12-06 20:37:43 --> 996
ERROR - 2016-12-06 20:37:43 --> 997
ERROR - 2016-12-06 20:37:43 --> 998
ERROR - 2016-12-06 20:37:43 --> 999
ERROR - 2016-12-06 20:37:43 --> 1000
ERROR - 2016-12-06 20:37:43 --> 1001
ERROR - 2016-12-06 20:37:43 --> 1002
ERROR - 2016-12-06 20:37:43 --> 1003
ERROR - 2016-12-06 20:37:43 --> 1004
ERROR - 2016-12-06 20:37:43 --> 1005
ERROR - 2016-12-06 20:37:43 --> 1006
ERROR - 2016-12-06 20:37:43 --> 1007
ERROR - 2016-12-06 20:37:43 --> 1008
ERROR - 2016-12-06 20:37:43 --> 1009
ERROR - 2016-12-06 20:37:43 --> 1010
ERROR - 2016-12-06 20:37:43 --> 1011
ERROR - 2016-12-06 20:37:43 --> 1012
ERROR - 2016-12-06 20:37:43 --> 1013
ERROR - 2016-12-06 20:37:43 --> 1014
ERROR - 2016-12-06 20:37:43 --> 1015
ERROR - 2016-12-06 20:37:43 --> 1016
ERROR - 2016-12-06 20:37:43 --> 1017
ERROR - 2016-12-06 20:37:43 --> 1018
ERROR - 2016-12-06 20:37:43 --> 1019
ERROR - 2016-12-06 20:37:43 --> 1020
ERROR - 2016-12-06 20:37:43 --> 1021
ERROR - 2016-12-06 20:37:43 --> 1022
ERROR - 2016-12-06 20:37:43 --> 1023
ERROR - 2016-12-06 20:37:43 --> 1024
ERROR - 2016-12-06 20:37:43 --> 1025
ERROR - 2016-12-06 20:37:43 --> 1026
ERROR - 2016-12-06 20:37:43 --> 1027
ERROR - 2016-12-06 20:37:43 --> 1028
ERROR - 2016-12-06 20:37:43 --> 1029
ERROR - 2016-12-06 20:37:43 --> 1030
ERROR - 2016-12-06 20:37:43 --> 1031
ERROR - 2016-12-06 20:37:43 --> 1032
ERROR - 2016-12-06 20:37:43 --> 1033
ERROR - 2016-12-06 20:37:43 --> 1034
ERROR - 2016-12-06 20:37:43 --> 1035
ERROR - 2016-12-06 20:37:43 --> 1036
ERROR - 2016-12-06 20:37:43 --> 1037
ERROR - 2016-12-06 20:37:43 --> 1038
ERROR - 2016-12-06 20:37:44 --> 1039
ERROR - 2016-12-06 20:37:44 --> 1040
ERROR - 2016-12-06 20:37:44 --> 1041
ERROR - 2016-12-06 20:37:44 --> 1042
ERROR - 2016-12-06 20:37:44 --> 1043
ERROR - 2016-12-06 20:37:44 --> 1044
ERROR - 2016-12-06 20:37:44 --> 1045
ERROR - 2016-12-06 20:37:44 --> 1046
ERROR - 2016-12-06 20:37:44 --> 1047
ERROR - 2016-12-06 20:37:44 --> 1048
ERROR - 2016-12-06 20:37:44 --> 1049
ERROR - 2016-12-06 20:37:44 --> 1050
ERROR - 2016-12-06 20:37:44 --> 1051
ERROR - 2016-12-06 20:37:44 --> 1052
ERROR - 2016-12-06 20:37:44 --> 1053
ERROR - 2016-12-06 20:37:44 --> 1054
ERROR - 2016-12-06 20:37:44 --> 1055
ERROR - 2016-12-06 20:37:44 --> 1056
ERROR - 2016-12-06 20:37:44 --> 1057
ERROR - 2016-12-06 20:37:44 --> 1058
ERROR - 2016-12-06 20:37:44 --> 1059
ERROR - 2016-12-06 20:37:44 --> 1060
ERROR - 2016-12-06 20:37:44 --> 1061
ERROR - 2016-12-06 20:37:44 --> 1062
ERROR - 2016-12-06 20:37:44 --> 1063
ERROR - 2016-12-06 20:37:44 --> 1064
ERROR - 2016-12-06 20:37:44 --> 1065
ERROR - 2016-12-06 20:37:44 --> 1066
ERROR - 2016-12-06 20:37:44 --> 1067
ERROR - 2016-12-06 20:37:44 --> 1068
ERROR - 2016-12-06 20:37:44 --> 1069
ERROR - 2016-12-06 20:37:44 --> 1070
ERROR - 2016-12-06 20:37:44 --> 1071
ERROR - 2016-12-06 20:37:44 --> 1072
ERROR - 2016-12-06 20:37:44 --> 1073
ERROR - 2016-12-06 20:37:44 --> 1074
ERROR - 2016-12-06 20:37:44 --> 1075
ERROR - 2016-12-06 20:37:44 --> 1076
ERROR - 2016-12-06 20:37:44 --> 1077
ERROR - 2016-12-06 20:37:44 --> 1078
ERROR - 2016-12-06 20:37:44 --> 1079
ERROR - 2016-12-06 20:37:44 --> 1080
ERROR - 2016-12-06 20:37:44 --> 1081
ERROR - 2016-12-06 20:37:44 --> 1082
ERROR - 2016-12-06 20:37:44 --> 1083
ERROR - 2016-12-06 20:37:45 --> 1084
ERROR - 2016-12-06 20:37:45 --> 1085
ERROR - 2016-12-06 20:37:45 --> 1086
ERROR - 2016-12-06 20:37:45 --> 1087
ERROR - 2016-12-06 20:37:45 --> 1088
ERROR - 2016-12-06 20:37:45 --> 1089
ERROR - 2016-12-06 20:37:45 --> 1090
ERROR - 2016-12-06 20:37:45 --> 1091
ERROR - 2016-12-06 20:37:45 --> 1092
ERROR - 2016-12-06 20:37:45 --> 1093
ERROR - 2016-12-06 20:37:45 --> 1094
ERROR - 2016-12-06 20:37:45 --> 1095
ERROR - 2016-12-06 20:37:45 --> 1096
ERROR - 2016-12-06 20:37:45 --> 1097
ERROR - 2016-12-06 20:37:45 --> 1098
ERROR - 2016-12-06 20:37:45 --> 1099
ERROR - 2016-12-06 20:37:45 --> 1100
ERROR - 2016-12-06 20:37:45 --> 1101
ERROR - 2016-12-06 20:37:45 --> 1102
ERROR - 2016-12-06 20:37:45 --> 1103
ERROR - 2016-12-06 20:37:45 --> 1104
ERROR - 2016-12-06 20:37:45 --> 1105
ERROR - 2016-12-06 20:37:45 --> 1106
ERROR - 2016-12-06 20:37:45 --> 1107
ERROR - 2016-12-06 20:37:45 --> 1108
ERROR - 2016-12-06 20:37:45 --> 1109
ERROR - 2016-12-06 20:37:45 --> 1110
ERROR - 2016-12-06 20:37:45 --> 1111
ERROR - 2016-12-06 20:37:45 --> 1112
ERROR - 2016-12-06 20:37:45 --> 1113
ERROR - 2016-12-06 20:37:45 --> 1114
ERROR - 2016-12-06 20:37:45 --> 1115
ERROR - 2016-12-06 20:37:45 --> 1116
ERROR - 2016-12-06 20:37:45 --> 1117
ERROR - 2016-12-06 20:37:45 --> 1118
ERROR - 2016-12-06 20:37:45 --> 1119
ERROR - 2016-12-06 20:37:45 --> 1120
ERROR - 2016-12-06 20:37:45 --> 1121
ERROR - 2016-12-06 20:37:45 --> 1122
ERROR - 2016-12-06 20:37:45 --> 1123
ERROR - 2016-12-06 20:37:45 --> 1124
ERROR - 2016-12-06 20:37:45 --> 1125
ERROR - 2016-12-06 20:37:45 --> 1126
ERROR - 2016-12-06 20:37:45 --> 1127
ERROR - 2016-12-06 20:37:45 --> 1128
ERROR - 2016-12-06 20:37:45 --> 1129
ERROR - 2016-12-06 20:37:45 --> 1130
ERROR - 2016-12-06 20:37:46 --> 1131
ERROR - 2016-12-06 20:37:46 --> 1132
ERROR - 2016-12-06 20:37:46 --> 1133
ERROR - 2016-12-06 20:37:46 --> 1134
ERROR - 2016-12-06 20:37:46 --> 1135
ERROR - 2016-12-06 20:37:46 --> 1136
ERROR - 2016-12-06 20:37:46 --> 1137
ERROR - 2016-12-06 20:37:46 --> 1138
ERROR - 2016-12-06 20:37:46 --> 1139
ERROR - 2016-12-06 20:37:46 --> 1140
ERROR - 2016-12-06 20:37:46 --> 1141
ERROR - 2016-12-06 20:37:46 --> 1142
ERROR - 2016-12-06 20:37:46 --> 1143
ERROR - 2016-12-06 20:37:46 --> 1144
ERROR - 2016-12-06 20:37:46 --> 1145
ERROR - 2016-12-06 20:37:46 --> 1146
ERROR - 2016-12-06 20:37:46 --> 1147
ERROR - 2016-12-06 20:37:46 --> 1148
ERROR - 2016-12-06 20:37:46 --> 1149
ERROR - 2016-12-06 20:37:46 --> 1150
ERROR - 2016-12-06 20:37:46 --> 1151
ERROR - 2016-12-06 20:37:46 --> 1152
ERROR - 2016-12-06 20:37:46 --> 1153
ERROR - 2016-12-06 20:37:46 --> 1154
ERROR - 2016-12-06 20:37:46 --> 1155
ERROR - 2016-12-06 20:37:46 --> 1156
ERROR - 2016-12-06 20:37:46 --> 1157
ERROR - 2016-12-06 20:37:46 --> 1158
ERROR - 2016-12-06 20:37:46 --> 1159
ERROR - 2016-12-06 20:37:46 --> 1160
ERROR - 2016-12-06 20:37:46 --> 1161
ERROR - 2016-12-06 20:37:46 --> 1162
ERROR - 2016-12-06 20:37:46 --> 1163
ERROR - 2016-12-06 20:37:46 --> 1164
ERROR - 2016-12-06 20:37:46 --> 1165
ERROR - 2016-12-06 20:37:46 --> 1166
ERROR - 2016-12-06 20:37:46 --> 1167
ERROR - 2016-12-06 20:37:46 --> 1168
ERROR - 2016-12-06 20:37:46 --> 1169
ERROR - 2016-12-06 20:37:46 --> 1170
ERROR - 2016-12-06 20:37:46 --> 1171
ERROR - 2016-12-06 20:37:46 --> 1172
ERROR - 2016-12-06 20:37:46 --> 1173
ERROR - 2016-12-06 20:37:46 --> 1174
ERROR - 2016-12-06 20:37:46 --> 1175
ERROR - 2016-12-06 20:37:46 --> 1176
ERROR - 2016-12-06 20:37:46 --> 1177
ERROR - 2016-12-06 20:37:47 --> 1178
ERROR - 2016-12-06 20:37:47 --> 1179
ERROR - 2016-12-06 20:37:47 --> 1180
ERROR - 2016-12-06 20:37:47 --> 1181
ERROR - 2016-12-06 20:37:47 --> 1182
ERROR - 2016-12-06 20:37:47 --> 1183
ERROR - 2016-12-06 20:37:47 --> 1184
ERROR - 2016-12-06 20:37:47 --> 1185
ERROR - 2016-12-06 20:37:47 --> 1186
ERROR - 2016-12-06 20:37:47 --> 1187
ERROR - 2016-12-06 20:37:47 --> 1188
ERROR - 2016-12-06 20:37:47 --> 1189
ERROR - 2016-12-06 20:37:47 --> 1190
ERROR - 2016-12-06 20:37:47 --> 1191
ERROR - 2016-12-06 20:37:47 --> 1192
ERROR - 2016-12-06 20:37:47 --> 1193
ERROR - 2016-12-06 20:37:47 --> 1194
ERROR - 2016-12-06 20:37:47 --> 1195
ERROR - 2016-12-06 20:37:47 --> 1196
ERROR - 2016-12-06 20:37:47 --> 1197
ERROR - 2016-12-06 20:37:47 --> 1198
ERROR - 2016-12-06 20:37:47 --> 1199
ERROR - 2016-12-06 20:37:47 --> 1200
ERROR - 2016-12-06 20:37:47 --> 1201
ERROR - 2016-12-06 20:37:47 --> 1202
ERROR - 2016-12-06 20:37:47 --> 1203
ERROR - 2016-12-06 20:37:47 --> 1204
ERROR - 2016-12-06 20:37:47 --> 1205
ERROR - 2016-12-06 20:37:47 --> 1206
ERROR - 2016-12-06 20:37:47 --> 1207
ERROR - 2016-12-06 20:37:47 --> 1208
ERROR - 2016-12-06 20:37:47 --> 1209
ERROR - 2016-12-06 20:37:47 --> 1210
ERROR - 2016-12-06 20:37:47 --> 1211
ERROR - 2016-12-06 20:37:47 --> 1212
ERROR - 2016-12-06 20:37:47 --> 1213
ERROR - 2016-12-06 20:37:47 --> 1214
ERROR - 2016-12-06 20:37:47 --> 1215
ERROR - 2016-12-06 20:37:47 --> 1216
ERROR - 2016-12-06 20:37:47 --> 1217
ERROR - 2016-12-06 20:37:47 --> 1218
ERROR - 2016-12-06 20:37:47 --> 1219
ERROR - 2016-12-06 20:37:47 --> 1220
ERROR - 2016-12-06 20:37:48 --> 1221
ERROR - 2016-12-06 20:37:48 --> 1222
ERROR - 2016-12-06 20:37:48 --> 1223
ERROR - 2016-12-06 20:37:48 --> 1224
ERROR - 2016-12-06 20:37:48 --> 1225
ERROR - 2016-12-06 20:37:48 --> 1226
ERROR - 2016-12-06 20:37:48 --> 1227
ERROR - 2016-12-06 20:37:48 --> 1228
ERROR - 2016-12-06 20:37:48 --> 1229
ERROR - 2016-12-06 20:37:48 --> 1230
ERROR - 2016-12-06 20:37:48 --> 1231
ERROR - 2016-12-06 20:37:48 --> 1232
ERROR - 2016-12-06 20:37:48 --> 1233
ERROR - 2016-12-06 20:37:48 --> 1234
ERROR - 2016-12-06 20:37:48 --> 1235
ERROR - 2016-12-06 20:37:48 --> 1236
ERROR - 2016-12-06 20:37:48 --> 1237
ERROR - 2016-12-06 20:37:48 --> 1238
ERROR - 2016-12-06 20:37:48 --> 1239
ERROR - 2016-12-06 20:37:48 --> 1240
ERROR - 2016-12-06 20:37:48 --> 1241
ERROR - 2016-12-06 20:37:48 --> 1242
ERROR - 2016-12-06 20:37:48 --> 1243
ERROR - 2016-12-06 20:37:48 --> 1244
ERROR - 2016-12-06 20:37:48 --> 1245
ERROR - 2016-12-06 20:37:48 --> 1246
ERROR - 2016-12-06 20:37:48 --> 1247
ERROR - 2016-12-06 20:37:48 --> 1248
ERROR - 2016-12-06 20:37:48 --> 1249
ERROR - 2016-12-06 20:37:48 --> 1250
ERROR - 2016-12-06 20:37:48 --> 1251
ERROR - 2016-12-06 20:37:48 --> 1252
ERROR - 2016-12-06 20:37:48 --> 1253
ERROR - 2016-12-06 20:37:48 --> 1254
ERROR - 2016-12-06 20:37:48 --> 1255
ERROR - 2016-12-06 20:37:48 --> 1256
ERROR - 2016-12-06 20:37:48 --> 1257
ERROR - 2016-12-06 20:37:48 --> 1258
ERROR - 2016-12-06 20:37:48 --> 1259
ERROR - 2016-12-06 20:37:48 --> 1260
ERROR - 2016-12-06 20:37:48 --> 1261
ERROR - 2016-12-06 20:37:48 --> 1262
ERROR - 2016-12-06 20:37:48 --> 1263
ERROR - 2016-12-06 20:37:48 --> 1264
ERROR - 2016-12-06 20:37:48 --> 1265
ERROR - 2016-12-06 20:37:48 --> 1266
ERROR - 2016-12-06 20:37:48 --> 1267
ERROR - 2016-12-06 20:37:49 --> 1268
ERROR - 2016-12-06 20:37:49 --> 1269
ERROR - 2016-12-06 20:37:49 --> 1270
ERROR - 2016-12-06 20:37:49 --> 1271
ERROR - 2016-12-06 20:37:49 --> 1272
ERROR - 2016-12-06 20:37:49 --> 1273
ERROR - 2016-12-06 20:37:49 --> 1274
ERROR - 2016-12-06 20:37:49 --> 1275
ERROR - 2016-12-06 20:37:49 --> 1276
ERROR - 2016-12-06 20:37:49 --> 1277
ERROR - 2016-12-06 20:37:49 --> 1278
ERROR - 2016-12-06 20:37:49 --> 1279
ERROR - 2016-12-06 20:37:49 --> 1280
ERROR - 2016-12-06 20:37:49 --> 1281
ERROR - 2016-12-06 20:37:49 --> 1282
ERROR - 2016-12-06 20:37:49 --> 1283
ERROR - 2016-12-06 20:37:49 --> 1284
ERROR - 2016-12-06 20:37:49 --> 1285
ERROR - 2016-12-06 20:37:49 --> 1286
ERROR - 2016-12-06 20:37:49 --> 1287
ERROR - 2016-12-06 20:37:49 --> 1288
ERROR - 2016-12-06 20:37:49 --> 1289
ERROR - 2016-12-06 20:37:49 --> 1290
ERROR - 2016-12-06 20:37:49 --> 1291
ERROR - 2016-12-06 20:37:49 --> 1292
ERROR - 2016-12-06 20:37:49 --> 1293
ERROR - 2016-12-06 20:37:49 --> 1294
ERROR - 2016-12-06 20:37:49 --> 1295
ERROR - 2016-12-06 20:37:49 --> 1296
ERROR - 2016-12-06 20:37:49 --> 1297
ERROR - 2016-12-06 20:37:49 --> 1298
ERROR - 2016-12-06 20:37:49 --> 1299
ERROR - 2016-12-06 20:37:49 --> 1300
ERROR - 2016-12-06 20:37:49 --> 1301
ERROR - 2016-12-06 20:37:49 --> 1302
ERROR - 2016-12-06 20:37:49 --> 1303
ERROR - 2016-12-06 20:37:49 --> 1304
ERROR - 2016-12-06 20:37:49 --> 1305
ERROR - 2016-12-06 20:37:49 --> 1306
ERROR - 2016-12-06 20:37:49 --> 1307
ERROR - 2016-12-06 20:37:49 --> 1308
ERROR - 2016-12-06 20:37:49 --> 1309
ERROR - 2016-12-06 20:37:49 --> 1310
ERROR - 2016-12-06 20:37:49 --> 1311
ERROR - 2016-12-06 20:37:49 --> 1312
ERROR - 2016-12-06 20:37:49 --> 1313
ERROR - 2016-12-06 20:37:49 --> 1314
ERROR - 2016-12-06 20:37:49 --> 1315
ERROR - 2016-12-06 20:37:50 --> 1316
ERROR - 2016-12-06 20:37:50 --> 1317
ERROR - 2016-12-06 20:37:50 --> 1318
ERROR - 2016-12-06 20:37:50 --> 1319
ERROR - 2016-12-06 20:37:50 --> 1320
ERROR - 2016-12-06 20:37:50 --> 1321
ERROR - 2016-12-06 20:37:50 --> 1322
ERROR - 2016-12-06 20:37:50 --> 1323
ERROR - 2016-12-06 20:37:50 --> 1324
ERROR - 2016-12-06 20:37:50 --> 1325
ERROR - 2016-12-06 20:37:50 --> 1326
ERROR - 2016-12-06 20:37:50 --> 1327
ERROR - 2016-12-06 20:37:50 --> 1328
ERROR - 2016-12-06 20:37:50 --> 1329
ERROR - 2016-12-06 20:37:50 --> 1330
ERROR - 2016-12-06 20:37:50 --> 1331
ERROR - 2016-12-06 20:37:50 --> 1332
ERROR - 2016-12-06 20:37:50 --> 1333
ERROR - 2016-12-06 20:37:50 --> 1334
ERROR - 2016-12-06 20:37:50 --> 1335
ERROR - 2016-12-06 20:37:50 --> 1336
ERROR - 2016-12-06 20:37:50 --> 1337
ERROR - 2016-12-06 20:37:50 --> 1338
ERROR - 2016-12-06 20:37:50 --> 1339
ERROR - 2016-12-06 20:37:50 --> 1340
ERROR - 2016-12-06 20:37:50 --> 1341
ERROR - 2016-12-06 20:37:50 --> 1342
ERROR - 2016-12-06 20:37:50 --> 1343
ERROR - 2016-12-06 20:37:50 --> 1344
ERROR - 2016-12-06 20:37:50 --> 1345
ERROR - 2016-12-06 20:37:50 --> 1346
ERROR - 2016-12-06 20:37:50 --> 1347
ERROR - 2016-12-06 20:37:50 --> 1348
ERROR - 2016-12-06 20:37:50 --> 1349
ERROR - 2016-12-06 20:37:50 --> 1350
ERROR - 2016-12-06 20:37:50 --> 1351
ERROR - 2016-12-06 20:37:50 --> 1352
ERROR - 2016-12-06 20:37:50 --> 1353
ERROR - 2016-12-06 20:37:50 --> 1354
ERROR - 2016-12-06 20:37:50 --> 1355
ERROR - 2016-12-06 20:37:50 --> 1356
ERROR - 2016-12-06 20:37:50 --> 1357
ERROR - 2016-12-06 20:37:50 --> 1358
ERROR - 2016-12-06 20:37:50 --> 1359
ERROR - 2016-12-06 20:37:51 --> 1360
ERROR - 2016-12-06 20:37:51 --> 1361
ERROR - 2016-12-06 20:37:51 --> 1362
ERROR - 2016-12-06 20:37:51 --> 1363
ERROR - 2016-12-06 20:37:51 --> 1364
ERROR - 2016-12-06 20:37:51 --> 1365
ERROR - 2016-12-06 20:37:51 --> 1366
ERROR - 2016-12-06 20:37:51 --> 1367
ERROR - 2016-12-06 20:37:51 --> 1368
ERROR - 2016-12-06 20:37:51 --> 1369
ERROR - 2016-12-06 20:37:51 --> 1370
ERROR - 2016-12-06 20:37:51 --> 1371
ERROR - 2016-12-06 20:37:51 --> 1372
ERROR - 2016-12-06 20:37:51 --> 1373
ERROR - 2016-12-06 20:37:51 --> 1374
ERROR - 2016-12-06 20:37:51 --> 1375
ERROR - 2016-12-06 20:37:51 --> 1376
ERROR - 2016-12-06 20:37:51 --> 1377
ERROR - 2016-12-06 20:37:51 --> 1378
ERROR - 2016-12-06 20:37:51 --> 1379
ERROR - 2016-12-06 20:37:51 --> 1380
ERROR - 2016-12-06 20:37:51 --> 1381
ERROR - 2016-12-06 20:37:51 --> 1382
ERROR - 2016-12-06 20:37:51 --> 1383
ERROR - 2016-12-06 20:37:51 --> 1384
ERROR - 2016-12-06 20:37:51 --> 1385
ERROR - 2016-12-06 20:37:51 --> 1386
ERROR - 2016-12-06 20:37:51 --> 1387
ERROR - 2016-12-06 20:37:51 --> 1388
ERROR - 2016-12-06 20:37:51 --> 1389
ERROR - 2016-12-06 20:37:51 --> 1390
ERROR - 2016-12-06 20:37:51 --> 1391
ERROR - 2016-12-06 20:37:51 --> 1392
ERROR - 2016-12-06 20:37:51 --> 1393
ERROR - 2016-12-06 20:37:51 --> 1394
ERROR - 2016-12-06 20:37:51 --> 1395
ERROR - 2016-12-06 20:37:51 --> 1396
ERROR - 2016-12-06 20:37:51 --> 1397
ERROR - 2016-12-06 20:37:51 --> 1398
ERROR - 2016-12-06 20:37:51 --> 1399
ERROR - 2016-12-06 20:37:51 --> 1400
ERROR - 2016-12-06 20:37:51 --> 1401
ERROR - 2016-12-06 20:37:51 --> 1402
ERROR - 2016-12-06 20:37:52 --> 1403
ERROR - 2016-12-06 20:37:52 --> 1404
ERROR - 2016-12-06 20:37:52 --> 1405
ERROR - 2016-12-06 20:37:52 --> 1406
ERROR - 2016-12-06 20:37:52 --> 1407
ERROR - 2016-12-06 20:37:52 --> 1408
ERROR - 2016-12-06 20:37:52 --> 1409
ERROR - 2016-12-06 20:37:52 --> 1410
ERROR - 2016-12-06 20:37:52 --> 1411
ERROR - 2016-12-06 20:37:52 --> 1412
ERROR - 2016-12-06 20:37:52 --> 1413
ERROR - 2016-12-06 20:37:52 --> 1414
ERROR - 2016-12-06 20:37:52 --> 1415
ERROR - 2016-12-06 20:37:52 --> 1416
ERROR - 2016-12-06 20:37:52 --> 1417
ERROR - 2016-12-06 20:37:52 --> 1418
ERROR - 2016-12-06 20:37:52 --> 1419
ERROR - 2016-12-06 20:37:52 --> 1420
ERROR - 2016-12-06 20:37:52 --> 1421
ERROR - 2016-12-06 20:37:52 --> 1422
ERROR - 2016-12-06 20:37:52 --> 1423
ERROR - 2016-12-06 20:37:52 --> 1424
ERROR - 2016-12-06 20:37:52 --> 1425
ERROR - 2016-12-06 20:37:52 --> 1426
ERROR - 2016-12-06 20:37:52 --> 1427
ERROR - 2016-12-06 20:37:52 --> 1428
ERROR - 2016-12-06 20:37:52 --> 1429
ERROR - 2016-12-06 20:37:52 --> 1430
ERROR - 2016-12-06 20:37:52 --> 1431
ERROR - 2016-12-06 20:37:52 --> 1432
ERROR - 2016-12-06 20:37:52 --> 1433
ERROR - 2016-12-06 20:37:52 --> 1434
ERROR - 2016-12-06 20:37:52 --> 1435
ERROR - 2016-12-06 20:37:52 --> 1436
ERROR - 2016-12-06 20:37:52 --> 1437
ERROR - 2016-12-06 20:37:52 --> 1438
ERROR - 2016-12-06 20:37:52 --> 1439
ERROR - 2016-12-06 20:37:52 --> 1440
ERROR - 2016-12-06 20:37:52 --> 1441
ERROR - 2016-12-06 20:37:52 --> 1442
ERROR - 2016-12-06 20:37:52 --> 1443
ERROR - 2016-12-06 20:37:52 --> 1444
ERROR - 2016-12-06 20:37:52 --> 1445
ERROR - 2016-12-06 20:37:52 --> 1446
ERROR - 2016-12-06 20:37:52 --> 1447
ERROR - 2016-12-06 20:37:52 --> 1448
ERROR - 2016-12-06 20:37:52 --> 1449
ERROR - 2016-12-06 20:37:53 --> 1450
ERROR - 2016-12-06 20:37:53 --> 1451
ERROR - 2016-12-06 20:37:53 --> 1452
ERROR - 2016-12-06 20:37:53 --> 1453
ERROR - 2016-12-06 20:37:53 --> 1454
ERROR - 2016-12-06 20:37:53 --> 1455
ERROR - 2016-12-06 20:37:53 --> 1456
ERROR - 2016-12-06 20:37:53 --> 1457
ERROR - 2016-12-06 20:37:53 --> 1458
ERROR - 2016-12-06 20:37:53 --> 1459
ERROR - 2016-12-06 20:37:53 --> 1460
ERROR - 2016-12-06 20:37:53 --> 1461
ERROR - 2016-12-06 20:37:53 --> 1462
ERROR - 2016-12-06 20:37:53 --> 1463
ERROR - 2016-12-06 20:37:53 --> 1464
ERROR - 2016-12-06 20:37:53 --> 1465
ERROR - 2016-12-06 20:37:53 --> 1466
ERROR - 2016-12-06 20:37:53 --> 1467
ERROR - 2016-12-06 20:37:53 --> 1468
ERROR - 2016-12-06 20:37:53 --> 1469
ERROR - 2016-12-06 20:37:53 --> 1470
ERROR - 2016-12-06 20:37:53 --> 1471
ERROR - 2016-12-06 20:37:53 --> 1472
ERROR - 2016-12-06 20:37:53 --> 1473
ERROR - 2016-12-06 20:37:53 --> 1474
ERROR - 2016-12-06 20:37:53 --> 1475
ERROR - 2016-12-06 20:37:53 --> 1476
ERROR - 2016-12-06 20:37:53 --> 1477
ERROR - 2016-12-06 20:37:53 --> 1478
ERROR - 2016-12-06 20:37:53 --> 1479
ERROR - 2016-12-06 20:37:53 --> 1480
ERROR - 2016-12-06 20:37:53 --> 1481
ERROR - 2016-12-06 20:37:53 --> 1482
ERROR - 2016-12-06 20:37:53 --> 1483
ERROR - 2016-12-06 20:37:53 --> 1484
ERROR - 2016-12-06 20:37:53 --> 1485
ERROR - 2016-12-06 20:37:53 --> 1486
ERROR - 2016-12-06 20:37:53 --> 1487
ERROR - 2016-12-06 20:37:53 --> 1488
ERROR - 2016-12-06 20:37:53 --> 1489
ERROR - 2016-12-06 20:37:53 --> 1490
ERROR - 2016-12-06 20:37:53 --> 1491
ERROR - 2016-12-06 20:37:54 --> 1492
ERROR - 2016-12-06 20:37:54 --> 1493
ERROR - 2016-12-06 20:37:54 --> 1494
ERROR - 2016-12-06 20:37:54 --> 1495
ERROR - 2016-12-06 20:37:54 --> 1496
ERROR - 2016-12-06 20:37:54 --> 1497
ERROR - 2016-12-06 20:37:54 --> 1498
ERROR - 2016-12-06 20:37:54 --> 1499
ERROR - 2016-12-06 20:37:54 --> 1500
ERROR - 2016-12-06 20:37:54 --> 1501
ERROR - 2016-12-06 20:37:54 --> 1502
ERROR - 2016-12-06 20:37:54 --> 1503
ERROR - 2016-12-06 20:37:54 --> 1504
ERROR - 2016-12-06 20:37:54 --> 1505
ERROR - 2016-12-06 20:37:54 --> 1506
ERROR - 2016-12-06 20:37:54 --> 1507
ERROR - 2016-12-06 20:37:54 --> 1508
ERROR - 2016-12-06 20:37:54 --> 1509
ERROR - 2016-12-06 20:37:54 --> 1510
ERROR - 2016-12-06 20:37:54 --> 1511
ERROR - 2016-12-06 20:37:54 --> 1512
ERROR - 2016-12-06 20:37:54 --> 1513
ERROR - 2016-12-06 20:37:54 --> 1514
ERROR - 2016-12-06 20:37:54 --> 1515
ERROR - 2016-12-06 20:37:54 --> 1516
ERROR - 2016-12-06 20:37:54 --> 1517
ERROR - 2016-12-06 20:37:54 --> 1518
ERROR - 2016-12-06 20:37:54 --> 1519
ERROR - 2016-12-06 20:37:54 --> 1520
ERROR - 2016-12-06 20:37:54 --> 1521
ERROR - 2016-12-06 20:37:54 --> 1522
ERROR - 2016-12-06 20:37:54 --> 1523
ERROR - 2016-12-06 20:37:54 --> 1524
ERROR - 2016-12-06 20:37:54 --> 1525
ERROR - 2016-12-06 20:37:54 --> 1526
ERROR - 2016-12-06 20:37:54 --> 1527
ERROR - 2016-12-06 20:37:54 --> 1528
ERROR - 2016-12-06 20:37:54 --> 1529
ERROR - 2016-12-06 20:37:54 --> 1530
ERROR - 2016-12-06 20:37:54 --> 1531
ERROR - 2016-12-06 20:37:54 --> 1532
ERROR - 2016-12-06 20:37:54 --> 1533
ERROR - 2016-12-06 20:37:54 --> 1534
ERROR - 2016-12-06 20:37:54 --> 1535
ERROR - 2016-12-06 20:37:54 --> 1536
ERROR - 2016-12-06 20:37:54 --> 1537
ERROR - 2016-12-06 20:37:54 --> 1538
ERROR - 2016-12-06 20:37:55 --> 1539
ERROR - 2016-12-06 20:37:55 --> 1540
ERROR - 2016-12-06 20:37:55 --> 1541
ERROR - 2016-12-06 20:37:55 --> 1542
ERROR - 2016-12-06 20:37:55 --> 1543
ERROR - 2016-12-06 20:37:55 --> 1544
ERROR - 2016-12-06 20:37:55 --> 1545
ERROR - 2016-12-06 20:37:55 --> 1546
ERROR - 2016-12-06 20:37:55 --> 1547
ERROR - 2016-12-06 20:37:55 --> 1548
ERROR - 2016-12-06 20:37:55 --> 1549
ERROR - 2016-12-06 20:37:55 --> 1550
ERROR - 2016-12-06 20:37:55 --> 1551
ERROR - 2016-12-06 20:37:55 --> 1552
ERROR - 2016-12-06 20:37:55 --> 1553
ERROR - 2016-12-06 20:37:55 --> 1554
ERROR - 2016-12-06 20:37:55 --> 1555
ERROR - 2016-12-06 20:37:55 --> 1556
ERROR - 2016-12-06 20:37:55 --> 1557
ERROR - 2016-12-06 20:37:55 --> 1558
ERROR - 2016-12-06 20:37:55 --> 1559
ERROR - 2016-12-06 20:37:55 --> 1560
ERROR - 2016-12-06 20:37:55 --> 1561
ERROR - 2016-12-06 20:37:55 --> 1562
ERROR - 2016-12-06 20:37:55 --> 1563
ERROR - 2016-12-06 20:37:55 --> 1564
ERROR - 2016-12-06 20:37:55 --> 1565
ERROR - 2016-12-06 20:37:55 --> 1566
ERROR - 2016-12-06 20:37:55 --> 1567
ERROR - 2016-12-06 20:37:55 --> 1568
ERROR - 2016-12-06 20:37:55 --> 1569
ERROR - 2016-12-06 20:37:55 --> 1570
ERROR - 2016-12-06 20:37:55 --> 1571
ERROR - 2016-12-06 20:37:55 --> 1572
ERROR - 2016-12-06 20:37:55 --> 1573
ERROR - 2016-12-06 20:37:55 --> 1574
ERROR - 2016-12-06 20:37:55 --> 1575
ERROR - 2016-12-06 20:37:55 --> 1576
ERROR - 2016-12-06 20:37:55 --> 1577
ERROR - 2016-12-06 20:37:55 --> 1578
ERROR - 2016-12-06 20:37:55 --> 1579
ERROR - 2016-12-06 20:37:55 --> 1580
ERROR - 2016-12-06 20:37:55 --> 1581
ERROR - 2016-12-06 20:37:56 --> 1582
ERROR - 2016-12-06 20:37:56 --> 1583
ERROR - 2016-12-06 20:37:56 --> 1584
ERROR - 2016-12-06 20:37:56 --> 1585
ERROR - 2016-12-06 20:37:56 --> 1586
ERROR - 2016-12-06 20:37:56 --> 1587
ERROR - 2016-12-06 20:37:56 --> 1588
ERROR - 2016-12-06 20:37:56 --> 1589
ERROR - 2016-12-06 20:37:56 --> 1590
ERROR - 2016-12-06 20:37:56 --> 1591
ERROR - 2016-12-06 20:37:56 --> 1592
ERROR - 2016-12-06 20:37:56 --> 1593
ERROR - 2016-12-06 20:37:56 --> 1594
ERROR - 2016-12-06 20:37:56 --> 1595
ERROR - 2016-12-06 20:37:56 --> 1596
ERROR - 2016-12-06 20:37:56 --> 1597
ERROR - 2016-12-06 20:37:56 --> 1598
ERROR - 2016-12-06 20:37:56 --> 1599
ERROR - 2016-12-06 20:37:56 --> 1600
ERROR - 2016-12-06 20:37:56 --> 1601
ERROR - 2016-12-06 20:37:56 --> 1602
ERROR - 2016-12-06 20:37:56 --> 1603
ERROR - 2016-12-06 20:37:56 --> 1604
ERROR - 2016-12-06 20:37:56 --> 1605
ERROR - 2016-12-06 20:37:56 --> 1606
ERROR - 2016-12-06 20:37:56 --> 1607
ERROR - 2016-12-06 20:37:56 --> 1608
ERROR - 2016-12-06 20:37:56 --> 1609
ERROR - 2016-12-06 20:37:56 --> 1610
ERROR - 2016-12-06 20:37:56 --> 1611
ERROR - 2016-12-06 20:37:56 --> 1612
ERROR - 2016-12-06 20:37:56 --> 1613
ERROR - 2016-12-06 20:37:56 --> 1614
ERROR - 2016-12-06 20:37:56 --> 1615
ERROR - 2016-12-06 20:37:56 --> 1616
ERROR - 2016-12-06 20:37:56 --> 1617
ERROR - 2016-12-06 20:37:56 --> 1618
ERROR - 2016-12-06 20:37:56 --> 1619
ERROR - 2016-12-06 20:37:56 --> 1620
ERROR - 2016-12-06 20:37:56 --> 1621
ERROR - 2016-12-06 20:37:56 --> 1622
ERROR - 2016-12-06 20:37:56 --> 1623
ERROR - 2016-12-06 20:37:56 --> 1624
ERROR - 2016-12-06 20:37:56 --> 1625
ERROR - 2016-12-06 20:37:56 --> 1626
ERROR - 2016-12-06 20:37:56 --> 1627
ERROR - 2016-12-06 20:37:57 --> 1628
ERROR - 2016-12-06 20:37:57 --> 1629
ERROR - 2016-12-06 20:37:57 --> 1630
ERROR - 2016-12-06 20:37:57 --> 1631
ERROR - 2016-12-06 20:37:57 --> 1632
ERROR - 2016-12-06 20:37:57 --> 1633
ERROR - 2016-12-06 20:37:57 --> 1634
ERROR - 2016-12-06 20:37:57 --> 1635
ERROR - 2016-12-06 20:37:57 --> 1636
ERROR - 2016-12-06 20:37:57 --> 1637
ERROR - 2016-12-06 20:37:57 --> 1638
ERROR - 2016-12-06 20:37:57 --> 1639
ERROR - 2016-12-06 20:37:57 --> 1640
ERROR - 2016-12-06 20:37:57 --> 1641
ERROR - 2016-12-06 20:37:57 --> 1642
ERROR - 2016-12-06 20:37:57 --> 1643
ERROR - 2016-12-06 20:37:57 --> 1644
ERROR - 2016-12-06 20:37:57 --> 1645
ERROR - 2016-12-06 20:37:57 --> 1646
ERROR - 2016-12-06 20:37:57 --> 1647
ERROR - 2016-12-06 20:37:57 --> 1648
ERROR - 2016-12-06 20:37:57 --> 1649
ERROR - 2016-12-06 20:37:57 --> 1650
ERROR - 2016-12-06 20:37:57 --> 1651
ERROR - 2016-12-06 20:37:57 --> 1652
ERROR - 2016-12-06 20:37:57 --> 1653
ERROR - 2016-12-06 20:37:57 --> 1654
ERROR - 2016-12-06 20:37:57 --> 1655
ERROR - 2016-12-06 20:37:57 --> 1656
ERROR - 2016-12-06 20:37:57 --> 1657
ERROR - 2016-12-06 20:37:57 --> 1658
ERROR - 2016-12-06 20:37:57 --> 1659
ERROR - 2016-12-06 20:37:57 --> 1660
ERROR - 2016-12-06 20:37:57 --> 1661
ERROR - 2016-12-06 20:37:57 --> 1662
ERROR - 2016-12-06 20:37:57 --> 1663
ERROR - 2016-12-06 20:37:57 --> 1664
ERROR - 2016-12-06 20:37:57 --> 1665
ERROR - 2016-12-06 20:37:57 --> 1666
ERROR - 2016-12-06 20:37:57 --> 1667
ERROR - 2016-12-06 20:37:57 --> 1668
ERROR - 2016-12-06 20:37:57 --> 1669
ERROR - 2016-12-06 20:37:57 --> 1670
ERROR - 2016-12-06 20:37:57 --> 1671
ERROR - 2016-12-06 20:37:58 --> 1672
ERROR - 2016-12-06 20:37:58 --> 1673
ERROR - 2016-12-06 20:37:58 --> 1674
ERROR - 2016-12-06 20:37:58 --> 1675
ERROR - 2016-12-06 20:37:58 --> 1676
ERROR - 2016-12-06 20:37:58 --> 1677
ERROR - 2016-12-06 20:37:58 --> 1678
ERROR - 2016-12-06 20:37:58 --> 1679
ERROR - 2016-12-06 20:37:58 --> 1680
ERROR - 2016-12-06 20:37:58 --> 1681
ERROR - 2016-12-06 20:37:58 --> 1682
ERROR - 2016-12-06 20:37:58 --> 1683
ERROR - 2016-12-06 20:37:58 --> 1684
ERROR - 2016-12-06 20:37:58 --> 1685
ERROR - 2016-12-06 20:37:58 --> 1686
ERROR - 2016-12-06 20:37:58 --> 1687
ERROR - 2016-12-06 20:37:58 --> 1688
ERROR - 2016-12-06 20:37:58 --> 1689
ERROR - 2016-12-06 20:37:58 --> 1690
ERROR - 2016-12-06 20:37:58 --> 1691
ERROR - 2016-12-06 20:37:58 --> 1692
ERROR - 2016-12-06 20:37:58 --> 1693
ERROR - 2016-12-06 20:37:58 --> 1694
ERROR - 2016-12-06 20:37:58 --> 1695
ERROR - 2016-12-06 20:37:58 --> 1696
ERROR - 2016-12-06 20:37:58 --> 1697
ERROR - 2016-12-06 20:37:58 --> 1698
ERROR - 2016-12-06 20:37:58 --> 1699
ERROR - 2016-12-06 20:37:58 --> 1700
ERROR - 2016-12-06 20:37:58 --> 1701
ERROR - 2016-12-06 20:37:58 --> 1702
ERROR - 2016-12-06 20:37:58 --> 1703
ERROR - 2016-12-06 20:37:58 --> 1704
ERROR - 2016-12-06 20:37:58 --> 1705
ERROR - 2016-12-06 20:37:58 --> 1706
ERROR - 2016-12-06 20:37:58 --> 1707
ERROR - 2016-12-06 20:37:58 --> 1708
ERROR - 2016-12-06 20:37:58 --> 1709
ERROR - 2016-12-06 20:37:58 --> 1710
ERROR - 2016-12-06 20:37:58 --> 1711
ERROR - 2016-12-06 20:37:58 --> 1712
ERROR - 2016-12-06 20:37:58 --> 1713
ERROR - 2016-12-06 20:37:58 --> 1714
ERROR - 2016-12-06 20:37:58 --> 1715
ERROR - 2016-12-06 20:37:58 --> 1716
ERROR - 2016-12-06 20:37:58 --> 1717
ERROR - 2016-12-06 20:37:58 --> 1718
ERROR - 2016-12-06 20:37:59 --> 1719
ERROR - 2016-12-06 20:37:59 --> 1720
ERROR - 2016-12-06 20:37:59 --> 1721
ERROR - 2016-12-06 20:37:59 --> 1722
ERROR - 2016-12-06 20:37:59 --> 1723
ERROR - 2016-12-06 20:37:59 --> 1724
ERROR - 2016-12-06 20:37:59 --> 1725
ERROR - 2016-12-06 20:37:59 --> 1726
ERROR - 2016-12-06 20:37:59 --> 1727
ERROR - 2016-12-06 20:37:59 --> 1728
ERROR - 2016-12-06 20:37:59 --> 1729
ERROR - 2016-12-06 20:37:59 --> 1730
ERROR - 2016-12-06 20:37:59 --> 1731
ERROR - 2016-12-06 20:37:59 --> 1732
ERROR - 2016-12-06 20:37:59 --> 1733
ERROR - 2016-12-06 20:37:59 --> 1734
ERROR - 2016-12-06 20:37:59 --> 1735
ERROR - 2016-12-06 20:37:59 --> 1736
ERROR - 2016-12-06 20:37:59 --> 1737
ERROR - 2016-12-06 20:37:59 --> 1738
ERROR - 2016-12-06 20:37:59 --> 1739
ERROR - 2016-12-06 20:37:59 --> 1740
ERROR - 2016-12-06 20:37:59 --> 1741
ERROR - 2016-12-06 20:37:59 --> 1742
ERROR - 2016-12-06 20:37:59 --> 1743
ERROR - 2016-12-06 20:37:59 --> 1744
ERROR - 2016-12-06 20:37:59 --> 1745
ERROR - 2016-12-06 20:37:59 --> 1746
ERROR - 2016-12-06 20:37:59 --> 1747
ERROR - 2016-12-06 20:37:59 --> 1748
ERROR - 2016-12-06 20:37:59 --> 1749
ERROR - 2016-12-06 20:37:59 --> 1750
ERROR - 2016-12-06 20:37:59 --> 1751
ERROR - 2016-12-06 20:37:59 --> 1752
ERROR - 2016-12-06 20:37:59 --> 1753
ERROR - 2016-12-06 20:37:59 --> 1754
ERROR - 2016-12-06 20:37:59 --> 1755
ERROR - 2016-12-06 20:37:59 --> 1756
ERROR - 2016-12-06 20:37:59 --> 1757
ERROR - 2016-12-06 20:37:59 --> 1758
ERROR - 2016-12-06 20:37:59 --> 1759
ERROR - 2016-12-06 20:37:59 --> 1760
ERROR - 2016-12-06 20:37:59 --> 1761
ERROR - 2016-12-06 20:37:59 --> 1762
ERROR - 2016-12-06 20:38:00 --> 1763
ERROR - 2016-12-06 20:38:00 --> 1764
ERROR - 2016-12-06 20:38:00 --> 1765
ERROR - 2016-12-06 20:38:00 --> 1766
ERROR - 2016-12-06 20:38:00 --> 1767
ERROR - 2016-12-06 20:38:00 --> 1768
ERROR - 2016-12-06 20:38:00 --> 1769
ERROR - 2016-12-06 20:38:00 --> 1770
ERROR - 2016-12-06 20:38:00 --> 1771
ERROR - 2016-12-06 20:38:00 --> 1772
ERROR - 2016-12-06 20:38:00 --> 1773
ERROR - 2016-12-06 20:38:00 --> 1774
ERROR - 2016-12-06 20:38:00 --> 1775
ERROR - 2016-12-06 20:38:00 --> 1776
ERROR - 2016-12-06 20:38:00 --> 1777
ERROR - 2016-12-06 20:38:00 --> 1778
ERROR - 2016-12-06 20:38:00 --> 1779
ERROR - 2016-12-06 20:38:00 --> 1780
ERROR - 2016-12-06 20:38:00 --> 1781
ERROR - 2016-12-06 20:38:00 --> 1782
ERROR - 2016-12-06 20:38:00 --> 1783
ERROR - 2016-12-06 20:38:00 --> 1784
ERROR - 2016-12-06 20:38:00 --> 1785
ERROR - 2016-12-06 20:38:00 --> 1786
ERROR - 2016-12-06 20:38:00 --> 1787
ERROR - 2016-12-06 20:38:00 --> 1788
ERROR - 2016-12-06 20:38:00 --> 1789
ERROR - 2016-12-06 20:38:00 --> 1790
ERROR - 2016-12-06 20:38:00 --> 1791
ERROR - 2016-12-06 20:38:00 --> 1792
ERROR - 2016-12-06 20:38:00 --> 1793
ERROR - 2016-12-06 20:38:00 --> 1794
ERROR - 2016-12-06 20:38:00 --> 1795
ERROR - 2016-12-06 20:38:00 --> 1796
ERROR - 2016-12-06 20:38:00 --> 1797
ERROR - 2016-12-06 20:38:00 --> 1798
ERROR - 2016-12-06 20:38:00 --> 1799
ERROR - 2016-12-06 20:38:00 --> 1800
ERROR - 2016-12-06 20:38:00 --> 1801
ERROR - 2016-12-06 20:38:00 --> 1802
ERROR - 2016-12-06 20:38:00 --> 1803
ERROR - 2016-12-06 20:38:00 --> 1804
ERROR - 2016-12-06 20:38:00 --> 1805
ERROR - 2016-12-06 20:38:00 --> 1806
ERROR - 2016-12-06 20:38:01 --> 1807
ERROR - 2016-12-06 20:38:01 --> 1808
ERROR - 2016-12-06 20:38:01 --> 1809
ERROR - 2016-12-06 20:38:01 --> 1810
ERROR - 2016-12-06 20:38:01 --> 1811
ERROR - 2016-12-06 20:38:01 --> 1812
ERROR - 2016-12-06 20:38:01 --> 1813
ERROR - 2016-12-06 20:38:01 --> 1814
ERROR - 2016-12-06 20:38:01 --> 1815
ERROR - 2016-12-06 20:38:01 --> 1816
ERROR - 2016-12-06 20:38:01 --> 1817
ERROR - 2016-12-06 20:38:01 --> 1818
ERROR - 2016-12-06 20:38:01 --> 1819
ERROR - 2016-12-06 20:38:01 --> 1820
ERROR - 2016-12-06 20:38:01 --> 1821
ERROR - 2016-12-06 20:38:01 --> 1822
ERROR - 2016-12-06 20:38:01 --> 1823
ERROR - 2016-12-06 20:38:01 --> 1824
ERROR - 2016-12-06 20:38:01 --> 1825
ERROR - 2016-12-06 20:38:01 --> 1826
ERROR - 2016-12-06 20:38:01 --> 1827
ERROR - 2016-12-06 20:38:01 --> 1828
ERROR - 2016-12-06 20:38:01 --> 1829
ERROR - 2016-12-06 20:38:01 --> 1830
ERROR - 2016-12-06 20:38:01 --> 1831
ERROR - 2016-12-06 20:38:01 --> 1832
ERROR - 2016-12-06 20:38:01 --> 1833
ERROR - 2016-12-06 20:38:01 --> 1834
ERROR - 2016-12-06 20:38:01 --> 1835
ERROR - 2016-12-06 20:38:01 --> 1836
ERROR - 2016-12-06 20:38:01 --> 1837
ERROR - 2016-12-06 20:38:01 --> 1838
ERROR - 2016-12-06 20:38:01 --> 1839
ERROR - 2016-12-06 20:38:01 --> 1840
ERROR - 2016-12-06 20:38:01 --> 1841
ERROR - 2016-12-06 20:38:01 --> 1842
ERROR - 2016-12-06 20:38:01 --> 1843
ERROR - 2016-12-06 20:38:01 --> 1844
ERROR - 2016-12-06 20:38:01 --> 1845
ERROR - 2016-12-06 20:38:01 --> 1846
ERROR - 2016-12-06 20:38:01 --> 1847
ERROR - 2016-12-06 20:38:01 --> 1848
ERROR - 2016-12-06 20:38:01 --> 1849
ERROR - 2016-12-06 20:38:01 --> 1850
ERROR - 2016-12-06 20:38:02 --> 1851
ERROR - 2016-12-06 20:38:02 --> 1852
ERROR - 2016-12-06 20:38:02 --> 1853
ERROR - 2016-12-06 20:38:02 --> 1854
ERROR - 2016-12-06 20:38:02 --> 1855
ERROR - 2016-12-06 20:38:02 --> 1856
ERROR - 2016-12-06 20:38:02 --> 1857
ERROR - 2016-12-06 20:38:02 --> 1858
ERROR - 2016-12-06 20:38:02 --> 1859
ERROR - 2016-12-06 20:38:02 --> 1860
ERROR - 2016-12-06 20:38:02 --> 1861
ERROR - 2016-12-06 20:38:02 --> 1862
ERROR - 2016-12-06 20:38:02 --> 1863
ERROR - 2016-12-06 20:38:02 --> 1864
ERROR - 2016-12-06 20:38:02 --> 1865
ERROR - 2016-12-06 20:38:02 --> 1866
ERROR - 2016-12-06 20:38:02 --> 1867
ERROR - 2016-12-06 20:38:02 --> 1868
ERROR - 2016-12-06 20:38:02 --> 1869
ERROR - 2016-12-06 20:38:02 --> 1870
ERROR - 2016-12-06 20:38:02 --> 1871
ERROR - 2016-12-06 20:38:02 --> 1872
ERROR - 2016-12-06 20:38:02 --> 1873
ERROR - 2016-12-06 20:38:02 --> 1874
ERROR - 2016-12-06 20:38:02 --> 1875
ERROR - 2016-12-06 20:38:02 --> 1876
ERROR - 2016-12-06 20:38:02 --> 1877
ERROR - 2016-12-06 20:38:02 --> 1878
ERROR - 2016-12-06 20:38:02 --> 1879
ERROR - 2016-12-06 20:38:02 --> 1880
ERROR - 2016-12-06 20:38:02 --> 1881
ERROR - 2016-12-06 20:38:02 --> 1882
ERROR - 2016-12-06 20:38:02 --> 1883
ERROR - 2016-12-06 20:38:02 --> 1884
ERROR - 2016-12-06 20:38:02 --> 1885
ERROR - 2016-12-06 20:38:02 --> 1886
ERROR - 2016-12-06 20:38:02 --> 1887
ERROR - 2016-12-06 20:38:02 --> 1888
ERROR - 2016-12-06 20:38:02 --> 1889
ERROR - 2016-12-06 20:38:02 --> 1890
ERROR - 2016-12-06 20:38:02 --> 1891
ERROR - 2016-12-06 20:38:02 --> 1892
ERROR - 2016-12-06 20:38:02 --> 1893
ERROR - 2016-12-06 20:38:03 --> 1894
ERROR - 2016-12-06 20:38:03 --> 1895
ERROR - 2016-12-06 20:38:03 --> 1896
ERROR - 2016-12-06 20:38:03 --> 1897
ERROR - 2016-12-06 20:38:03 --> 1898
ERROR - 2016-12-06 20:38:03 --> 1899
ERROR - 2016-12-06 20:38:03 --> 1900
ERROR - 2016-12-06 20:38:03 --> 1901
ERROR - 2016-12-06 20:38:03 --> 1902
ERROR - 2016-12-06 20:38:03 --> 1903
ERROR - 2016-12-06 20:38:03 --> 1904
ERROR - 2016-12-06 20:38:03 --> 1905
ERROR - 2016-12-06 20:38:03 --> 1906
ERROR - 2016-12-06 20:38:03 --> 1907
ERROR - 2016-12-06 20:38:03 --> 1908
ERROR - 2016-12-06 20:38:03 --> 1909
ERROR - 2016-12-06 20:38:03 --> 1910
ERROR - 2016-12-06 20:38:03 --> 1911
ERROR - 2016-12-06 20:38:03 --> 1912
ERROR - 2016-12-06 20:38:03 --> 1913
ERROR - 2016-12-06 20:38:03 --> 1914
ERROR - 2016-12-06 20:38:03 --> 1915
ERROR - 2016-12-06 20:38:03 --> 1916
ERROR - 2016-12-06 20:38:03 --> 1917
ERROR - 2016-12-06 20:38:03 --> 1918
ERROR - 2016-12-06 20:38:03 --> 1919
ERROR - 2016-12-06 20:38:03 --> 1920
ERROR - 2016-12-06 20:38:03 --> 1921
ERROR - 2016-12-06 20:38:03 --> 1922
ERROR - 2016-12-06 20:38:03 --> 1923
ERROR - 2016-12-06 20:38:03 --> 1924
ERROR - 2016-12-06 20:38:03 --> 1925
ERROR - 2016-12-06 20:38:03 --> 1926
ERROR - 2016-12-06 20:38:03 --> 1927
ERROR - 2016-12-06 20:38:03 --> 1928
ERROR - 2016-12-06 20:38:03 --> 1929
ERROR - 2016-12-06 20:38:03 --> 1930
ERROR - 2016-12-06 20:38:03 --> 1931
ERROR - 2016-12-06 20:38:03 --> 1932
ERROR - 2016-12-06 20:38:03 --> 1933
ERROR - 2016-12-06 20:38:03 --> 1934
ERROR - 2016-12-06 20:38:04 --> 1935
ERROR - 2016-12-06 20:38:04 --> 1936
ERROR - 2016-12-06 20:38:04 --> 1937
ERROR - 2016-12-06 20:38:04 --> 1938
ERROR - 2016-12-06 20:38:04 --> 1939
ERROR - 2016-12-06 20:38:04 --> 1940
ERROR - 2016-12-06 20:38:04 --> 1941
ERROR - 2016-12-06 20:38:04 --> 1942
ERROR - 2016-12-06 20:38:04 --> 1943
ERROR - 2016-12-06 20:38:04 --> 1944
ERROR - 2016-12-06 20:38:04 --> 1945
ERROR - 2016-12-06 20:38:04 --> 1946
ERROR - 2016-12-06 20:38:04 --> 1947
ERROR - 2016-12-06 20:38:04 --> 1948
ERROR - 2016-12-06 20:38:04 --> 1949
ERROR - 2016-12-06 20:38:04 --> 1950
ERROR - 2016-12-06 20:38:04 --> 1951
ERROR - 2016-12-06 20:38:04 --> 1952
ERROR - 2016-12-06 20:38:04 --> 1953
ERROR - 2016-12-06 20:38:04 --> 1954
ERROR - 2016-12-06 20:38:04 --> 1955
ERROR - 2016-12-06 20:38:04 --> 1956
ERROR - 2016-12-06 20:38:04 --> 1957
ERROR - 2016-12-06 20:38:04 --> 1958
ERROR - 2016-12-06 20:38:04 --> 1959
ERROR - 2016-12-06 20:38:04 --> 1960
ERROR - 2016-12-06 20:38:04 --> 1961
ERROR - 2016-12-06 20:38:04 --> 1962
ERROR - 2016-12-06 20:38:04 --> 1963
ERROR - 2016-12-06 20:38:04 --> 1964
ERROR - 2016-12-06 20:38:04 --> 1965
ERROR - 2016-12-06 20:38:04 --> 1966
ERROR - 2016-12-06 20:38:04 --> 1967
ERROR - 2016-12-06 20:38:04 --> 1968
ERROR - 2016-12-06 20:38:04 --> 1969
ERROR - 2016-12-06 20:38:04 --> 1970
ERROR - 2016-12-06 20:38:04 --> 1971
ERROR - 2016-12-06 20:38:04 --> 1972
ERROR - 2016-12-06 20:38:04 --> 1973
ERROR - 2016-12-06 20:38:04 --> 1974
ERROR - 2016-12-06 20:38:04 --> 1975
ERROR - 2016-12-06 20:38:05 --> 1976
ERROR - 2016-12-06 20:38:05 --> 1977
ERROR - 2016-12-06 20:38:05 --> 1978
ERROR - 2016-12-06 20:38:05 --> 1979
ERROR - 2016-12-06 20:38:05 --> 1980
ERROR - 2016-12-06 20:38:05 --> 1981
ERROR - 2016-12-06 20:38:05 --> 1982
ERROR - 2016-12-06 20:38:05 --> 1983
ERROR - 2016-12-06 20:38:05 --> 1984
ERROR - 2016-12-06 20:38:05 --> 1985
ERROR - 2016-12-06 20:38:05 --> 1986
ERROR - 2016-12-06 20:38:05 --> 1987
ERROR - 2016-12-06 20:38:05 --> 1988
ERROR - 2016-12-06 20:38:05 --> 1989
ERROR - 2016-12-06 20:38:05 --> 1990
ERROR - 2016-12-06 20:38:05 --> 1991
ERROR - 2016-12-06 20:38:05 --> 1992
ERROR - 2016-12-06 20:38:05 --> 1993
ERROR - 2016-12-06 20:38:05 --> 1994
ERROR - 2016-12-06 20:38:05 --> 1995
ERROR - 2016-12-06 20:38:05 --> 1996
ERROR - 2016-12-06 20:38:05 --> 1997
ERROR - 2016-12-06 20:38:05 --> 1998
ERROR - 2016-12-06 20:38:05 --> 1999
ERROR - 2016-12-06 20:38:05 --> 2000
ERROR - 2016-12-06 20:38:05 --> 2001
ERROR - 2016-12-06 20:38:05 --> 2002
ERROR - 2016-12-06 20:38:05 --> 2003
ERROR - 2016-12-06 20:38:05 --> 2004
ERROR - 2016-12-06 20:38:05 --> 2005
ERROR - 2016-12-06 20:38:05 --> 2006
ERROR - 2016-12-06 20:38:05 --> 2007
ERROR - 2016-12-06 20:38:05 --> 2008
ERROR - 2016-12-06 20:38:05 --> 2009
ERROR - 2016-12-06 20:38:05 --> 2010
ERROR - 2016-12-06 20:38:05 --> 2011
ERROR - 2016-12-06 20:38:05 --> 2012
ERROR - 2016-12-06 20:38:05 --> 2013
ERROR - 2016-12-06 20:38:05 --> 2014
ERROR - 2016-12-06 20:38:05 --> 2015
ERROR - 2016-12-06 20:38:05 --> 2016
ERROR - 2016-12-06 20:38:05 --> 2017
ERROR - 2016-12-06 20:38:05 --> 2018
ERROR - 2016-12-06 20:38:05 --> 2019
ERROR - 2016-12-06 20:38:05 --> 2020
ERROR - 2016-12-06 20:38:05 --> 2021
ERROR - 2016-12-06 20:38:05 --> 2022
ERROR - 2016-12-06 20:38:05 --> 2023
ERROR - 2016-12-06 20:38:05 --> 2024
ERROR - 2016-12-06 20:38:05 --> 2025
ERROR - 2016-12-06 20:38:06 --> 2026
ERROR - 2016-12-06 20:38:06 --> 2027
ERROR - 2016-12-06 20:38:06 --> 2028
ERROR - 2016-12-06 20:38:06 --> 2029
ERROR - 2016-12-06 20:38:06 --> 2030
ERROR - 2016-12-06 20:38:06 --> 2031
ERROR - 2016-12-06 20:38:06 --> 2032
ERROR - 2016-12-06 20:38:06 --> 2033
ERROR - 2016-12-06 20:38:06 --> 2034
ERROR - 2016-12-06 20:38:06 --> 2035
ERROR - 2016-12-06 20:38:06 --> 2036
ERROR - 2016-12-06 20:38:06 --> 2037
ERROR - 2016-12-06 20:38:06 --> 2038
ERROR - 2016-12-06 20:38:06 --> 2039
ERROR - 2016-12-06 20:38:06 --> 2040
ERROR - 2016-12-06 20:38:06 --> 2041
ERROR - 2016-12-06 20:38:06 --> 2042
ERROR - 2016-12-06 20:38:06 --> 2043
ERROR - 2016-12-06 20:38:06 --> 2044
ERROR - 2016-12-06 20:38:06 --> 2045
ERROR - 2016-12-06 20:38:06 --> 2046
ERROR - 2016-12-06 20:38:06 --> 2047
ERROR - 2016-12-06 20:38:06 --> 2048
ERROR - 2016-12-06 20:38:06 --> 2049
ERROR - 2016-12-06 20:38:06 --> 2050
ERROR - 2016-12-06 20:38:06 --> 2051
ERROR - 2016-12-06 20:38:06 --> 2052
ERROR - 2016-12-06 20:38:06 --> 2053
ERROR - 2016-12-06 20:38:06 --> 2054
ERROR - 2016-12-06 20:38:06 --> 2055
ERROR - 2016-12-06 20:38:06 --> 2056
ERROR - 2016-12-06 20:38:06 --> 2057
ERROR - 2016-12-06 20:38:06 --> 2058
ERROR - 2016-12-06 20:38:06 --> 2059
ERROR - 2016-12-06 20:38:06 --> 2060
ERROR - 2016-12-06 20:38:06 --> 2061
ERROR - 2016-12-06 20:38:06 --> 2062
ERROR - 2016-12-06 20:38:06 --> 2063
ERROR - 2016-12-06 20:38:06 --> 2064
ERROR - 2016-12-06 20:38:06 --> 2065
ERROR - 2016-12-06 20:38:07 --> 2066
ERROR - 2016-12-06 20:38:07 --> 2067
ERROR - 2016-12-06 20:38:07 --> 2068
ERROR - 2016-12-06 20:38:07 --> 2069
ERROR - 2016-12-06 20:38:07 --> 2070
ERROR - 2016-12-06 20:38:07 --> 2071
ERROR - 2016-12-06 20:38:07 --> 2072
ERROR - 2016-12-06 20:38:07 --> 2073
ERROR - 2016-12-06 20:38:07 --> 2074
ERROR - 2016-12-06 20:38:07 --> 2075
ERROR - 2016-12-06 20:38:07 --> 2076
ERROR - 2016-12-06 20:38:07 --> 2077
ERROR - 2016-12-06 20:38:07 --> 2078
ERROR - 2016-12-06 20:38:07 --> 2079
ERROR - 2016-12-06 20:38:07 --> 2080
ERROR - 2016-12-06 20:38:07 --> 2081
ERROR - 2016-12-06 20:38:07 --> 2082
ERROR - 2016-12-06 20:38:07 --> 2083
ERROR - 2016-12-06 20:38:07 --> 2084
ERROR - 2016-12-06 20:38:07 --> 2085
ERROR - 2016-12-06 20:38:07 --> 2086
ERROR - 2016-12-06 20:38:07 --> 2087
ERROR - 2016-12-06 20:38:07 --> 2088
ERROR - 2016-12-06 20:38:07 --> 2089
ERROR - 2016-12-06 20:38:07 --> 2090
ERROR - 2016-12-06 20:38:07 --> 2091
ERROR - 2016-12-06 20:38:07 --> 2092
ERROR - 2016-12-06 20:38:07 --> 2093
ERROR - 2016-12-06 20:38:07 --> 2094
ERROR - 2016-12-06 20:38:07 --> 2095
ERROR - 2016-12-06 20:38:07 --> 2096
ERROR - 2016-12-06 20:38:07 --> 2097
ERROR - 2016-12-06 20:38:07 --> 2098
ERROR - 2016-12-06 20:38:07 --> 2099
ERROR - 2016-12-06 20:38:07 --> 2100
ERROR - 2016-12-06 20:38:07 --> 2101
ERROR - 2016-12-06 20:38:07 --> 2102
ERROR - 2016-12-06 20:38:07 --> 2103
ERROR - 2016-12-06 20:38:07 --> 2104
ERROR - 2016-12-06 20:38:07 --> 2105
ERROR - 2016-12-06 20:38:07 --> 2106
ERROR - 2016-12-06 20:38:07 --> 2107
ERROR - 2016-12-06 20:38:07 --> 2108
ERROR - 2016-12-06 20:38:08 --> 2109
ERROR - 2016-12-06 20:38:08 --> 2110
ERROR - 2016-12-06 20:38:08 --> 2111
ERROR - 2016-12-06 20:38:08 --> 2112
ERROR - 2016-12-06 20:38:08 --> 2113
ERROR - 2016-12-06 20:38:08 --> 2114
ERROR - 2016-12-06 20:38:08 --> 2115
ERROR - 2016-12-06 20:38:08 --> 2116
ERROR - 2016-12-06 20:38:08 --> 2117
ERROR - 2016-12-06 20:38:08 --> 2118
ERROR - 2016-12-06 20:38:08 --> 2119
ERROR - 2016-12-06 20:38:08 --> 2120
ERROR - 2016-12-06 20:38:08 --> 2121
ERROR - 2016-12-06 20:38:08 --> 2122
ERROR - 2016-12-06 20:38:08 --> 2123
ERROR - 2016-12-06 20:38:08 --> 2124
ERROR - 2016-12-06 20:38:08 --> 2125
ERROR - 2016-12-06 20:38:08 --> 2126
ERROR - 2016-12-06 20:38:08 --> 2127
ERROR - 2016-12-06 20:38:08 --> 2128
ERROR - 2016-12-06 20:38:08 --> 2129
ERROR - 2016-12-06 20:38:08 --> 2130
ERROR - 2016-12-06 20:38:08 --> 2131
ERROR - 2016-12-06 20:38:08 --> 2132
ERROR - 2016-12-06 20:38:08 --> 2133
ERROR - 2016-12-06 20:38:08 --> 2134
ERROR - 2016-12-06 20:38:08 --> 2135
ERROR - 2016-12-06 20:38:08 --> 2136
ERROR - 2016-12-06 20:38:08 --> 2137
ERROR - 2016-12-06 20:38:08 --> 2138
ERROR - 2016-12-06 20:38:08 --> 2139
ERROR - 2016-12-06 20:38:08 --> 2140
ERROR - 2016-12-06 20:38:08 --> 2141
ERROR - 2016-12-06 20:38:08 --> 2142
ERROR - 2016-12-06 20:38:08 --> 2143
ERROR - 2016-12-06 20:38:08 --> 2144
ERROR - 2016-12-06 20:38:08 --> 2145
ERROR - 2016-12-06 20:38:08 --> 2146
ERROR - 2016-12-06 20:38:08 --> 2147
ERROR - 2016-12-06 20:38:08 --> 2148
ERROR - 2016-12-06 20:38:08 --> 2149
ERROR - 2016-12-06 20:38:08 --> 2150
ERROR - 2016-12-06 20:38:08 --> 2151
ERROR - 2016-12-06 20:38:08 --> 2152
ERROR - 2016-12-06 20:38:08 --> 2153
ERROR - 2016-12-06 20:38:08 --> 2154
ERROR - 2016-12-06 20:38:08 --> 2155
ERROR - 2016-12-06 20:38:08 --> 2156
ERROR - 2016-12-06 20:38:08 --> 2157
ERROR - 2016-12-06 20:38:08 --> 2158
ERROR - 2016-12-06 20:38:08 --> 2159
ERROR - 2016-12-06 20:38:08 --> 2160
ERROR - 2016-12-06 20:38:08 --> 2161
ERROR - 2016-12-06 20:38:08 --> 2162
ERROR - 2016-12-06 20:38:08 --> 2163
ERROR - 2016-12-06 20:38:09 --> 2164
ERROR - 2016-12-06 20:38:09 --> 2165
ERROR - 2016-12-06 20:38:09 --> 2166
ERROR - 2016-12-06 20:38:09 --> 2167
ERROR - 2016-12-06 20:38:09 --> 2168
ERROR - 2016-12-06 20:38:09 --> 2169
ERROR - 2016-12-06 20:38:09 --> 2170
ERROR - 2016-12-06 20:38:09 --> 2171
ERROR - 2016-12-06 20:38:09 --> 2172
ERROR - 2016-12-06 20:38:09 --> 2173
ERROR - 2016-12-06 20:38:09 --> 2174
ERROR - 2016-12-06 20:38:09 --> 2175
ERROR - 2016-12-06 20:38:09 --> 2176
ERROR - 2016-12-06 20:38:09 --> 2177
ERROR - 2016-12-06 20:38:09 --> 2178
ERROR - 2016-12-06 20:38:09 --> 2179
ERROR - 2016-12-06 20:38:09 --> 2180
ERROR - 2016-12-06 20:38:09 --> 2181
ERROR - 2016-12-06 20:38:09 --> 2182
ERROR - 2016-12-06 20:38:09 --> 2183
ERROR - 2016-12-06 20:38:09 --> 2184
ERROR - 2016-12-06 20:38:09 --> 2185
ERROR - 2016-12-06 20:38:09 --> 2186
ERROR - 2016-12-06 20:38:09 --> 2187
ERROR - 2016-12-06 20:38:09 --> 2188
ERROR - 2016-12-06 20:38:09 --> 2189
ERROR - 2016-12-06 20:38:09 --> 2190
ERROR - 2016-12-06 20:38:09 --> 2191
ERROR - 2016-12-06 20:38:09 --> 2192
ERROR - 2016-12-06 20:38:09 --> 2193
ERROR - 2016-12-06 20:38:09 --> 2194
ERROR - 2016-12-06 20:38:09 --> 2195
ERROR - 2016-12-06 20:38:09 --> 2196
ERROR - 2016-12-06 20:38:09 --> 2197
ERROR - 2016-12-06 20:38:09 --> 2198
ERROR - 2016-12-06 20:38:09 --> 2199
ERROR - 2016-12-06 20:38:09 --> 2200
ERROR - 2016-12-06 20:38:09 --> 2201
ERROR - 2016-12-06 20:38:09 --> 2202
ERROR - 2016-12-06 20:38:09 --> 2203
ERROR - 2016-12-06 20:38:09 --> 2204
ERROR - 2016-12-06 20:38:09 --> 2205
ERROR - 2016-12-06 20:38:09 --> 2206
ERROR - 2016-12-06 20:38:09 --> 2207
ERROR - 2016-12-06 20:38:09 --> 2208
ERROR - 2016-12-06 20:38:09 --> 2209
ERROR - 2016-12-06 20:38:09 --> 2210
ERROR - 2016-12-06 20:38:09 --> 2211
ERROR - 2016-12-06 20:38:09 --> 2212
ERROR - 2016-12-06 20:38:10 --> 2213
ERROR - 2016-12-06 20:38:10 --> 2214
ERROR - 2016-12-06 20:38:10 --> 2215
ERROR - 2016-12-06 20:38:10 --> 2216
ERROR - 2016-12-06 20:38:10 --> 2217
ERROR - 2016-12-06 20:38:10 --> 2218
ERROR - 2016-12-06 20:38:10 --> 2219
ERROR - 2016-12-06 20:38:10 --> 2220
ERROR - 2016-12-06 20:38:10 --> 2221
ERROR - 2016-12-06 20:38:10 --> 2222
ERROR - 2016-12-06 20:38:10 --> 2223
ERROR - 2016-12-06 20:38:10 --> 2224
ERROR - 2016-12-06 20:38:10 --> 2225
ERROR - 2016-12-06 20:38:10 --> 2226
ERROR - 2016-12-06 20:38:10 --> 2227
ERROR - 2016-12-06 20:38:10 --> 2228
ERROR - 2016-12-06 20:38:10 --> 2229
ERROR - 2016-12-06 20:38:10 --> 2230
ERROR - 2016-12-06 20:38:10 --> 2231
ERROR - 2016-12-06 20:38:10 --> 2232
ERROR - 2016-12-06 20:38:10 --> 2233
ERROR - 2016-12-06 20:38:10 --> 2234
ERROR - 2016-12-06 20:38:10 --> 2235
ERROR - 2016-12-06 20:38:10 --> 2236
ERROR - 2016-12-06 20:38:10 --> 2237
ERROR - 2016-12-06 20:38:10 --> 2238
ERROR - 2016-12-06 20:38:10 --> 2239
ERROR - 2016-12-06 20:38:10 --> 2240
ERROR - 2016-12-06 20:38:10 --> 2241
ERROR - 2016-12-06 20:38:10 --> 2242
ERROR - 2016-12-06 20:38:10 --> 2243
ERROR - 2016-12-06 20:38:10 --> 2244
ERROR - 2016-12-06 20:38:10 --> 2245
ERROR - 2016-12-06 20:38:10 --> 2246
ERROR - 2016-12-06 20:38:10 --> 2247
ERROR - 2016-12-06 20:38:10 --> 2248
ERROR - 2016-12-06 20:38:10 --> 2249
ERROR - 2016-12-06 20:38:10 --> 2250
ERROR - 2016-12-06 20:38:10 --> 2251
ERROR - 2016-12-06 20:38:10 --> 2252
ERROR - 2016-12-06 20:38:10 --> 2253
ERROR - 2016-12-06 20:38:10 --> 2254
ERROR - 2016-12-06 20:38:10 --> 2255
ERROR - 2016-12-06 20:38:10 --> 2256
ERROR - 2016-12-06 20:38:10 --> 2257
ERROR - 2016-12-06 20:38:10 --> 2258
ERROR - 2016-12-06 20:38:10 --> 2259
ERROR - 2016-12-06 20:38:11 --> 2260
ERROR - 2016-12-06 20:38:11 --> 2261
ERROR - 2016-12-06 20:38:11 --> 2262
ERROR - 2016-12-06 20:38:11 --> 2263
ERROR - 2016-12-06 20:38:11 --> 2264
ERROR - 2016-12-06 20:38:11 --> 2265
ERROR - 2016-12-06 20:38:11 --> 2266
ERROR - 2016-12-06 20:38:11 --> 2267
ERROR - 2016-12-06 20:38:11 --> 2268
ERROR - 2016-12-06 20:38:11 --> 2269
ERROR - 2016-12-06 20:38:11 --> 2270
ERROR - 2016-12-06 20:38:11 --> 2271
ERROR - 2016-12-06 20:38:11 --> 2272
ERROR - 2016-12-06 20:38:11 --> 2273
ERROR - 2016-12-06 20:38:11 --> 2274
ERROR - 2016-12-06 20:38:11 --> 2275
ERROR - 2016-12-06 20:38:11 --> 2276
ERROR - 2016-12-06 20:38:11 --> 2277
ERROR - 2016-12-06 20:38:11 --> 2278
ERROR - 2016-12-06 20:38:11 --> 2279
ERROR - 2016-12-06 20:38:11 --> 2280
ERROR - 2016-12-06 20:38:11 --> 2281
ERROR - 2016-12-06 20:38:11 --> 2282
ERROR - 2016-12-06 20:38:11 --> 2283
ERROR - 2016-12-06 20:38:11 --> 2284
ERROR - 2016-12-06 20:38:11 --> 2285
ERROR - 2016-12-06 20:38:11 --> 2286
ERROR - 2016-12-06 20:38:11 --> 2287
ERROR - 2016-12-06 20:38:11 --> 2288
ERROR - 2016-12-06 20:38:11 --> 2289
ERROR - 2016-12-06 20:38:11 --> 2290
ERROR - 2016-12-06 20:38:11 --> 2291
ERROR - 2016-12-06 20:38:11 --> 2292
ERROR - 2016-12-06 20:38:11 --> 2293
ERROR - 2016-12-06 20:38:11 --> 2294
ERROR - 2016-12-06 20:38:11 --> 2295
ERROR - 2016-12-06 20:38:11 --> 2296
ERROR - 2016-12-06 20:38:11 --> 2297
ERROR - 2016-12-06 20:38:11 --> 2298
ERROR - 2016-12-06 20:38:11 --> 2299
ERROR - 2016-12-06 20:38:11 --> 2300
ERROR - 2016-12-06 20:38:11 --> 2301
ERROR - 2016-12-06 20:38:11 --> 2302
ERROR - 2016-12-06 20:38:11 --> 2303
ERROR - 2016-12-06 20:38:12 --> 2304
ERROR - 2016-12-06 20:38:12 --> 2305
ERROR - 2016-12-06 20:38:12 --> 2306
ERROR - 2016-12-06 20:38:12 --> 2307
ERROR - 2016-12-06 20:38:12 --> 2308
ERROR - 2016-12-06 20:38:12 --> 2309
ERROR - 2016-12-06 20:38:12 --> 2310
ERROR - 2016-12-06 20:38:12 --> 2311
ERROR - 2016-12-06 20:38:12 --> 2312
ERROR - 2016-12-06 20:38:12 --> 2313
ERROR - 2016-12-06 20:38:12 --> 2314
ERROR - 2016-12-06 20:38:12 --> 2315
ERROR - 2016-12-06 20:38:12 --> 2316
ERROR - 2016-12-06 20:38:12 --> 2317
ERROR - 2016-12-06 20:38:12 --> 2318
ERROR - 2016-12-06 20:38:12 --> 2319
ERROR - 2016-12-06 20:38:12 --> 2320
ERROR - 2016-12-06 20:38:12 --> 2321
ERROR - 2016-12-06 20:38:12 --> 2322
ERROR - 2016-12-06 20:38:12 --> 2323
ERROR - 2016-12-06 20:38:12 --> 2324
ERROR - 2016-12-06 20:38:12 --> 2325
ERROR - 2016-12-06 20:38:12 --> 2326
ERROR - 2016-12-06 20:38:12 --> 2327
ERROR - 2016-12-06 20:38:12 --> 2328
ERROR - 2016-12-06 20:38:12 --> 2329
ERROR - 2016-12-06 20:38:12 --> 2330
ERROR - 2016-12-06 20:38:12 --> 2331
ERROR - 2016-12-06 20:38:12 --> 2332
ERROR - 2016-12-06 20:38:12 --> 2333
ERROR - 2016-12-06 20:38:12 --> 2334
ERROR - 2016-12-06 20:38:12 --> 2335
ERROR - 2016-12-06 20:38:12 --> 2336
ERROR - 2016-12-06 20:38:12 --> 2337
ERROR - 2016-12-06 20:38:12 --> 2338
ERROR - 2016-12-06 20:38:12 --> 2339
ERROR - 2016-12-06 20:38:12 --> 2340
ERROR - 2016-12-06 20:38:12 --> 2341
ERROR - 2016-12-06 20:38:12 --> 2342
ERROR - 2016-12-06 20:38:12 --> 2343
ERROR - 2016-12-06 20:38:12 --> 2344
ERROR - 2016-12-06 20:38:12 --> 2345
ERROR - 2016-12-06 20:38:13 --> 2346
ERROR - 2016-12-06 20:38:13 --> 2347
ERROR - 2016-12-06 20:38:13 --> 2348
ERROR - 2016-12-06 20:38:13 --> 2349
ERROR - 2016-12-06 20:38:13 --> 2350
ERROR - 2016-12-06 20:38:13 --> 2351
ERROR - 2016-12-06 20:38:13 --> 2352
ERROR - 2016-12-06 20:38:13 --> 2353
ERROR - 2016-12-06 20:38:13 --> 2354
ERROR - 2016-12-06 20:38:13 --> 2355
ERROR - 2016-12-06 20:38:13 --> 2356
ERROR - 2016-12-06 20:38:13 --> 2357
ERROR - 2016-12-06 20:38:13 --> 2358
ERROR - 2016-12-06 20:38:13 --> 2359
ERROR - 2016-12-06 20:38:13 --> 2360
ERROR - 2016-12-06 20:38:13 --> 2361
ERROR - 2016-12-06 20:38:13 --> 2362
ERROR - 2016-12-06 20:38:13 --> 2363
ERROR - 2016-12-06 20:38:13 --> 2364
ERROR - 2016-12-06 20:38:13 --> 2365
ERROR - 2016-12-06 20:38:13 --> 2366
ERROR - 2016-12-06 20:38:13 --> 2367
ERROR - 2016-12-06 20:38:13 --> 2368
ERROR - 2016-12-06 20:38:13 --> 2369
ERROR - 2016-12-06 20:38:13 --> 2370
ERROR - 2016-12-06 20:38:13 --> 2371
ERROR - 2016-12-06 20:38:13 --> 2372
ERROR - 2016-12-06 20:38:13 --> 2373
ERROR - 2016-12-06 20:38:13 --> 2374
ERROR - 2016-12-06 20:38:13 --> 2375
ERROR - 2016-12-06 20:38:13 --> 2376
ERROR - 2016-12-06 20:38:13 --> 2377
ERROR - 2016-12-06 20:38:13 --> 2378
ERROR - 2016-12-06 20:38:13 --> 2379
ERROR - 2016-12-06 20:38:13 --> 2380
ERROR - 2016-12-06 20:38:13 --> 2381
ERROR - 2016-12-06 20:38:13 --> 2382
ERROR - 2016-12-06 20:38:13 --> 2383
ERROR - 2016-12-06 20:38:13 --> 2384
ERROR - 2016-12-06 20:38:13 --> 2385
ERROR - 2016-12-06 20:38:13 --> 2386
ERROR - 2016-12-06 20:38:13 --> 2387
ERROR - 2016-12-06 20:38:13 --> 2388
ERROR - 2016-12-06 20:38:14 --> 2389
ERROR - 2016-12-06 20:38:14 --> 2390
ERROR - 2016-12-06 20:38:14 --> 2391
ERROR - 2016-12-06 20:38:14 --> 2392
ERROR - 2016-12-06 20:38:14 --> 2393
ERROR - 2016-12-06 20:38:14 --> 2394
ERROR - 2016-12-06 20:38:14 --> 2395
ERROR - 2016-12-06 20:38:14 --> 2396
ERROR - 2016-12-06 20:38:14 --> 2397
ERROR - 2016-12-06 20:38:14 --> 2398
ERROR - 2016-12-06 20:38:14 --> 2399
ERROR - 2016-12-06 20:38:14 --> 2400
ERROR - 2016-12-06 20:38:14 --> 2401
ERROR - 2016-12-06 20:38:14 --> 2402
ERROR - 2016-12-06 20:38:14 --> 2403
ERROR - 2016-12-06 20:38:14 --> 2404
ERROR - 2016-12-06 20:38:14 --> 2405
ERROR - 2016-12-06 20:38:14 --> 2406
ERROR - 2016-12-06 20:38:14 --> 2407
ERROR - 2016-12-06 20:38:14 --> 2408
ERROR - 2016-12-06 20:38:14 --> 2409
ERROR - 2016-12-06 20:38:14 --> 2410
ERROR - 2016-12-06 20:38:14 --> 2411
ERROR - 2016-12-06 20:38:14 --> 2412
ERROR - 2016-12-06 20:38:14 --> 2413
ERROR - 2016-12-06 20:38:14 --> 2414
ERROR - 2016-12-06 20:38:14 --> 2415
ERROR - 2016-12-06 20:38:14 --> 2416
ERROR - 2016-12-06 20:38:14 --> 2417
ERROR - 2016-12-06 20:38:14 --> 2418
ERROR - 2016-12-06 20:38:14 --> 2419
ERROR - 2016-12-06 20:38:14 --> 2420
ERROR - 2016-12-06 20:38:14 --> 2421
ERROR - 2016-12-06 20:38:14 --> 2422
ERROR - 2016-12-06 20:38:14 --> 2423
ERROR - 2016-12-06 20:38:14 --> 2424
ERROR - 2016-12-06 20:38:14 --> 2425
ERROR - 2016-12-06 20:38:14 --> 2426
ERROR - 2016-12-06 20:38:14 --> 2427
ERROR - 2016-12-06 20:38:14 --> 2428
ERROR - 2016-12-06 20:38:14 --> 2429
ERROR - 2016-12-06 20:38:14 --> 2430
ERROR - 2016-12-06 20:38:14 --> 2431
ERROR - 2016-12-06 20:38:14 --> 2432
ERROR - 2016-12-06 20:38:15 --> 2433
ERROR - 2016-12-06 20:38:15 --> 2434
ERROR - 2016-12-06 20:38:15 --> 2435
ERROR - 2016-12-06 20:38:15 --> 2436
ERROR - 2016-12-06 20:38:15 --> 2437
ERROR - 2016-12-06 20:38:15 --> 2438
ERROR - 2016-12-06 20:38:15 --> 2439
ERROR - 2016-12-06 20:38:15 --> 2440
ERROR - 2016-12-06 20:38:15 --> 2441
ERROR - 2016-12-06 20:38:15 --> 2442
ERROR - 2016-12-06 20:38:15 --> 2443
ERROR - 2016-12-06 20:38:15 --> 2444
ERROR - 2016-12-06 20:38:15 --> 2445
ERROR - 2016-12-06 20:38:15 --> 2446
ERROR - 2016-12-06 20:38:15 --> 2447
ERROR - 2016-12-06 20:38:15 --> 2448
ERROR - 2016-12-06 20:38:15 --> 2449
ERROR - 2016-12-06 20:38:15 --> 2450
ERROR - 2016-12-06 20:38:15 --> 2451
ERROR - 2016-12-06 20:38:15 --> 2452
ERROR - 2016-12-06 20:38:15 --> 2453
ERROR - 2016-12-06 20:38:15 --> 2454
ERROR - 2016-12-06 20:38:15 --> 2455
ERROR - 2016-12-06 20:38:15 --> 2456
ERROR - 2016-12-06 20:38:15 --> 2457
ERROR - 2016-12-06 20:38:15 --> 2458
ERROR - 2016-12-06 20:38:15 --> 2459
ERROR - 2016-12-06 20:38:15 --> 2460
ERROR - 2016-12-06 20:38:15 --> 2461
ERROR - 2016-12-06 20:38:15 --> 2462
ERROR - 2016-12-06 20:38:15 --> 2463
ERROR - 2016-12-06 20:38:15 --> 2464
ERROR - 2016-12-06 20:38:15 --> 2465
ERROR - 2016-12-06 20:38:15 --> 2466
ERROR - 2016-12-06 20:38:15 --> 2467
ERROR - 2016-12-06 20:38:15 --> 2468
ERROR - 2016-12-06 20:38:15 --> 2469
ERROR - 2016-12-06 20:38:15 --> 2470
ERROR - 2016-12-06 20:38:15 --> 2471
ERROR - 2016-12-06 20:38:15 --> 2472
ERROR - 2016-12-06 20:38:15 --> 2473
ERROR - 2016-12-06 20:38:15 --> 2474
ERROR - 2016-12-06 20:38:15 --> 2475
ERROR - 2016-12-06 20:38:15 --> 2476
ERROR - 2016-12-06 20:38:15 --> 2477
ERROR - 2016-12-06 20:38:15 --> 2478
ERROR - 2016-12-06 20:38:15 --> 2479
ERROR - 2016-12-06 20:38:16 --> 2480
ERROR - 2016-12-06 20:38:16 --> 2481
ERROR - 2016-12-06 20:38:16 --> 2482
ERROR - 2016-12-06 20:38:16 --> 2483
ERROR - 2016-12-06 20:38:16 --> 2484
ERROR - 2016-12-06 20:38:16 --> 2485
ERROR - 2016-12-06 20:38:16 --> 2486
ERROR - 2016-12-06 20:38:16 --> 2487
ERROR - 2016-12-06 20:38:16 --> 2488
ERROR - 2016-12-06 20:38:16 --> 2489
ERROR - 2016-12-06 20:38:16 --> 2490
ERROR - 2016-12-06 20:38:16 --> 2491
ERROR - 2016-12-06 20:38:16 --> 2492
ERROR - 2016-12-06 20:38:16 --> 2493
ERROR - 2016-12-06 20:38:16 --> 2494
ERROR - 2016-12-06 20:38:16 --> 2495
ERROR - 2016-12-06 20:38:16 --> 2496
ERROR - 2016-12-06 20:38:16 --> 2497
ERROR - 2016-12-06 20:38:16 --> 2498
ERROR - 2016-12-06 20:38:16 --> 2499
ERROR - 2016-12-06 20:38:16 --> 2500
ERROR - 2016-12-06 20:38:16 --> 2501
ERROR - 2016-12-06 20:38:16 --> 2502
ERROR - 2016-12-06 20:38:16 --> 2503
ERROR - 2016-12-06 20:38:16 --> 2504
ERROR - 2016-12-06 20:38:16 --> 2505
ERROR - 2016-12-06 20:38:16 --> 2506
ERROR - 2016-12-06 20:38:16 --> 2507
ERROR - 2016-12-06 20:38:16 --> 2508
ERROR - 2016-12-06 20:38:16 --> 2509
ERROR - 2016-12-06 20:38:16 --> 2510
ERROR - 2016-12-06 20:38:16 --> 2511
ERROR - 2016-12-06 20:38:16 --> 2512
ERROR - 2016-12-06 20:38:16 --> 2513
ERROR - 2016-12-06 20:38:16 --> 2514
ERROR - 2016-12-06 20:38:16 --> 2515
ERROR - 2016-12-06 20:38:16 --> 2516
ERROR - 2016-12-06 20:38:16 --> 2517
ERROR - 2016-12-06 20:38:16 --> 2518
ERROR - 2016-12-06 20:38:16 --> 2519
ERROR - 2016-12-06 20:38:16 --> 2520
ERROR - 2016-12-06 20:38:16 --> 2521
ERROR - 2016-12-06 20:38:16 --> 2522
ERROR - 2016-12-06 20:38:16 --> 2523
ERROR - 2016-12-06 20:38:16 --> 2524
ERROR - 2016-12-06 20:38:16 --> 2525
ERROR - 2016-12-06 20:38:16 --> 2526
ERROR - 2016-12-06 20:38:17 --> 2527
ERROR - 2016-12-06 20:38:17 --> 2528
ERROR - 2016-12-06 20:38:17 --> 2529
ERROR - 2016-12-06 20:38:17 --> 2530
ERROR - 2016-12-06 20:38:17 --> 2531
ERROR - 2016-12-06 20:38:17 --> 2532
ERROR - 2016-12-06 20:38:17 --> 2533
ERROR - 2016-12-06 20:38:17 --> 2534
ERROR - 2016-12-06 20:38:17 --> 2535
ERROR - 2016-12-06 20:38:17 --> 2536
ERROR - 2016-12-06 20:38:17 --> 2537
ERROR - 2016-12-06 20:38:17 --> 2538
ERROR - 2016-12-06 20:38:17 --> 2539
ERROR - 2016-12-06 20:38:17 --> 2540
ERROR - 2016-12-06 20:38:17 --> 2541
ERROR - 2016-12-06 20:38:17 --> 2542
ERROR - 2016-12-06 20:38:17 --> 2543
ERROR - 2016-12-06 20:38:17 --> 2544
ERROR - 2016-12-06 20:38:17 --> 2545
ERROR - 2016-12-06 20:38:17 --> 2546
ERROR - 2016-12-06 20:38:17 --> 2547
ERROR - 2016-12-06 20:38:17 --> 2548
ERROR - 2016-12-06 20:38:17 --> 2549
ERROR - 2016-12-06 20:38:17 --> 2550
ERROR - 2016-12-06 20:38:17 --> 2551
ERROR - 2016-12-06 20:38:17 --> 2552
ERROR - 2016-12-06 20:38:17 --> 2553
ERROR - 2016-12-06 20:38:17 --> 2554
ERROR - 2016-12-06 20:38:17 --> 2555
ERROR - 2016-12-06 20:38:17 --> 2556
ERROR - 2016-12-06 20:38:17 --> 2557
ERROR - 2016-12-06 20:38:17 --> 2558
ERROR - 2016-12-06 20:38:17 --> 2559
ERROR - 2016-12-06 20:38:17 --> 2560
ERROR - 2016-12-06 20:38:17 --> 2561
ERROR - 2016-12-06 20:38:17 --> 2562
ERROR - 2016-12-06 20:38:17 --> 2563
ERROR - 2016-12-06 20:38:17 --> 2564
ERROR - 2016-12-06 20:38:17 --> 2565
ERROR - 2016-12-06 20:38:18 --> 2566
ERROR - 2016-12-06 20:38:18 --> 2567
ERROR - 2016-12-06 20:38:18 --> 2568
ERROR - 2016-12-06 20:38:18 --> 2569
ERROR - 2016-12-06 20:38:18 --> 2570
ERROR - 2016-12-06 20:38:18 --> 2571
ERROR - 2016-12-06 20:38:18 --> 2572
ERROR - 2016-12-06 20:38:18 --> 2573
ERROR - 2016-12-06 20:38:18 --> 2574
ERROR - 2016-12-06 20:38:18 --> 2575
ERROR - 2016-12-06 20:38:18 --> 2576
ERROR - 2016-12-06 20:38:18 --> 2577
ERROR - 2016-12-06 20:38:18 --> 2578
ERROR - 2016-12-06 20:38:18 --> 2579
ERROR - 2016-12-06 20:38:18 --> 2580
ERROR - 2016-12-06 20:38:18 --> 2581
ERROR - 2016-12-06 20:38:18 --> 2582
ERROR - 2016-12-06 20:38:18 --> 2583
ERROR - 2016-12-06 20:38:18 --> 2584
ERROR - 2016-12-06 20:38:18 --> 2585
ERROR - 2016-12-06 20:38:18 --> 2586
ERROR - 2016-12-06 20:38:18 --> 2587
ERROR - 2016-12-06 20:38:18 --> 2588
ERROR - 2016-12-06 20:38:18 --> 2589
ERROR - 2016-12-06 20:38:18 --> 2590
ERROR - 2016-12-06 20:38:18 --> 2591
ERROR - 2016-12-06 20:38:18 --> 2592
ERROR - 2016-12-06 20:38:18 --> 2593
ERROR - 2016-12-06 20:38:18 --> 2594
ERROR - 2016-12-06 20:38:18 --> 2595
ERROR - 2016-12-06 20:38:18 --> 2596
ERROR - 2016-12-06 20:38:18 --> 2597
ERROR - 2016-12-06 20:38:18 --> 2598
ERROR - 2016-12-06 20:38:18 --> 2599
ERROR - 2016-12-06 20:38:18 --> 2600
ERROR - 2016-12-06 20:38:18 --> 2601
ERROR - 2016-12-06 20:38:18 --> 2602
ERROR - 2016-12-06 20:38:18 --> 2603
ERROR - 2016-12-06 20:38:18 --> 2604
ERROR - 2016-12-06 20:38:18 --> 2605
ERROR - 2016-12-06 20:38:18 --> 2606
ERROR - 2016-12-06 20:38:18 --> 2607
ERROR - 2016-12-06 20:38:18 --> 2608
ERROR - 2016-12-06 20:38:18 --> 2609
ERROR - 2016-12-06 20:38:18 --> 2610
ERROR - 2016-12-06 20:38:18 --> 2611
ERROR - 2016-12-06 20:38:19 --> 2612
ERROR - 2016-12-06 20:38:19 --> 2613
ERROR - 2016-12-06 20:38:19 --> 2614
ERROR - 2016-12-06 20:38:19 --> 2615
ERROR - 2016-12-06 20:38:19 --> 2616
ERROR - 2016-12-06 20:38:19 --> 2617
ERROR - 2016-12-06 20:38:19 --> 2618
ERROR - 2016-12-06 20:38:19 --> 2619
ERROR - 2016-12-06 20:38:19 --> 2620
ERROR - 2016-12-06 20:38:19 --> 2621
ERROR - 2016-12-06 20:38:19 --> 2622
ERROR - 2016-12-06 20:38:19 --> 2623
ERROR - 2016-12-06 20:38:19 --> 2624
ERROR - 2016-12-06 20:38:19 --> 2625
ERROR - 2016-12-06 20:38:19 --> 2626
ERROR - 2016-12-06 20:38:19 --> 2627
ERROR - 2016-12-06 20:38:19 --> 2628
ERROR - 2016-12-06 20:38:19 --> 2629
ERROR - 2016-12-06 20:38:19 --> 2630
ERROR - 2016-12-06 20:38:19 --> 2631
ERROR - 2016-12-06 20:38:19 --> 2632
ERROR - 2016-12-06 20:38:19 --> 2633
ERROR - 2016-12-06 20:38:19 --> 2634
ERROR - 2016-12-06 20:38:19 --> 2635
ERROR - 2016-12-06 20:38:19 --> 2636
ERROR - 2016-12-06 20:38:19 --> 2637
ERROR - 2016-12-06 20:38:19 --> 2638
ERROR - 2016-12-06 20:38:19 --> 2639
ERROR - 2016-12-06 20:38:19 --> 2640
ERROR - 2016-12-06 20:38:19 --> 2641
ERROR - 2016-12-06 20:38:19 --> 2642
ERROR - 2016-12-06 20:38:19 --> 2643
ERROR - 2016-12-06 20:38:19 --> 2644
ERROR - 2016-12-06 20:38:19 --> 2645
ERROR - 2016-12-06 20:38:19 --> 2646
ERROR - 2016-12-06 20:38:19 --> 2647
ERROR - 2016-12-06 20:38:19 --> 2648
ERROR - 2016-12-06 20:38:19 --> 2649
ERROR - 2016-12-06 20:38:19 --> 2650
ERROR - 2016-12-06 20:38:19 --> 2651
ERROR - 2016-12-06 20:38:19 --> 2652
ERROR - 2016-12-06 20:38:19 --> 2653
ERROR - 2016-12-06 20:38:19 --> 2654
ERROR - 2016-12-06 20:38:19 --> 2655
ERROR - 2016-12-06 20:38:19 --> 2656
ERROR - 2016-12-06 20:38:19 --> 2657
ERROR - 2016-12-06 20:38:19 --> 2658
ERROR - 2016-12-06 20:38:20 --> 2659
ERROR - 2016-12-06 20:38:20 --> 2660
ERROR - 2016-12-06 20:38:20 --> 2661
ERROR - 2016-12-06 20:38:20 --> 2662
ERROR - 2016-12-06 20:38:20 --> 2663
ERROR - 2016-12-06 20:38:20 --> 2664
ERROR - 2016-12-06 20:38:20 --> 2665
ERROR - 2016-12-06 20:38:20 --> 2666
ERROR - 2016-12-06 20:38:20 --> 2667
ERROR - 2016-12-06 20:38:20 --> 2668
ERROR - 2016-12-06 20:38:20 --> 2669
ERROR - 2016-12-06 20:38:20 --> 2670
ERROR - 2016-12-06 20:38:20 --> 2671
ERROR - 2016-12-06 20:38:20 --> 2672
ERROR - 2016-12-06 20:38:20 --> 2673
ERROR - 2016-12-06 20:38:20 --> 2674
ERROR - 2016-12-06 20:38:20 --> 2675
ERROR - 2016-12-06 20:38:20 --> 2676
ERROR - 2016-12-06 20:38:20 --> 2677
ERROR - 2016-12-06 20:38:20 --> 2678
ERROR - 2016-12-06 20:38:20 --> 2679
ERROR - 2016-12-06 20:38:20 --> 2680
ERROR - 2016-12-06 20:38:20 --> 2681
ERROR - 2016-12-06 20:38:20 --> 2682
ERROR - 2016-12-06 20:38:20 --> 2683
ERROR - 2016-12-06 20:38:20 --> 2684
ERROR - 2016-12-06 20:38:20 --> 2685
ERROR - 2016-12-06 20:38:20 --> 2686
ERROR - 2016-12-06 20:38:20 --> 2687
ERROR - 2016-12-06 20:38:20 --> 2688
ERROR - 2016-12-06 20:38:20 --> 2689
ERROR - 2016-12-06 20:38:20 --> 2690
ERROR - 2016-12-06 20:38:20 --> 2691
ERROR - 2016-12-06 20:38:20 --> 2692
ERROR - 2016-12-06 20:38:20 --> 2693
ERROR - 2016-12-06 20:38:20 --> 2694
ERROR - 2016-12-06 20:38:20 --> 2695
ERROR - 2016-12-06 20:38:20 --> 2696
ERROR - 2016-12-06 20:38:20 --> 2697
ERROR - 2016-12-06 20:38:20 --> 2698
ERROR - 2016-12-06 20:38:20 --> 2699
ERROR - 2016-12-06 20:38:20 --> 2700
ERROR - 2016-12-06 20:38:21 --> 2701
ERROR - 2016-12-06 20:38:21 --> 2702
ERROR - 2016-12-06 20:38:21 --> 2703
ERROR - 2016-12-06 20:38:21 --> 2704
ERROR - 2016-12-06 20:38:21 --> 2705
ERROR - 2016-12-06 20:38:21 --> 2706
ERROR - 2016-12-06 20:38:21 --> 2707
ERROR - 2016-12-06 20:38:21 --> 2708
ERROR - 2016-12-06 20:38:21 --> 2709
ERROR - 2016-12-06 20:38:21 --> 2710
ERROR - 2016-12-06 20:38:21 --> 2711
ERROR - 2016-12-06 20:38:21 --> 2712
ERROR - 2016-12-06 20:38:21 --> 2713
ERROR - 2016-12-06 20:38:21 --> 2714
ERROR - 2016-12-06 20:38:21 --> 2715
ERROR - 2016-12-06 20:38:21 --> 2716
ERROR - 2016-12-06 20:38:21 --> 2717
ERROR - 2016-12-06 20:38:21 --> 2718
ERROR - 2016-12-06 20:38:21 --> 2719
ERROR - 2016-12-06 20:38:21 --> 2720
ERROR - 2016-12-06 20:38:21 --> 2721
ERROR - 2016-12-06 20:38:21 --> 2722
ERROR - 2016-12-06 20:38:21 --> 2723
ERROR - 2016-12-06 20:38:21 --> 2724
ERROR - 2016-12-06 20:38:21 --> 2725
ERROR - 2016-12-06 20:38:21 --> 2726
ERROR - 2016-12-06 20:38:21 --> 2727
ERROR - 2016-12-06 20:38:21 --> 2728
ERROR - 2016-12-06 20:38:21 --> 2729
ERROR - 2016-12-06 20:38:21 --> 2730
ERROR - 2016-12-06 20:38:21 --> 2731
ERROR - 2016-12-06 20:38:21 --> 2732
ERROR - 2016-12-06 20:38:21 --> 2733
ERROR - 2016-12-06 20:38:21 --> 2734
ERROR - 2016-12-06 20:38:21 --> 2735
ERROR - 2016-12-06 20:38:21 --> 2736
ERROR - 2016-12-06 20:38:21 --> 2737
ERROR - 2016-12-06 20:38:21 --> 2738
ERROR - 2016-12-06 20:38:21 --> 2739
ERROR - 2016-12-06 20:38:21 --> 2740
ERROR - 2016-12-06 20:38:21 --> 2741
ERROR - 2016-12-06 20:38:21 --> 2742
ERROR - 2016-12-06 20:38:22 --> 2743
ERROR - 2016-12-06 20:38:22 --> 2744
ERROR - 2016-12-06 20:38:22 --> 2745
ERROR - 2016-12-06 20:38:22 --> 2746
ERROR - 2016-12-06 20:38:22 --> 2747
ERROR - 2016-12-06 20:38:22 --> 2748
ERROR - 2016-12-06 20:38:22 --> 2749
ERROR - 2016-12-06 20:38:22 --> 2750
ERROR - 2016-12-06 20:38:22 --> 2751
ERROR - 2016-12-06 20:38:22 --> 2752
ERROR - 2016-12-06 20:38:22 --> 2753
ERROR - 2016-12-06 20:38:22 --> 2754
ERROR - 2016-12-06 20:38:22 --> 2755
ERROR - 2016-12-06 20:38:22 --> 2756
ERROR - 2016-12-06 20:38:22 --> 2757
ERROR - 2016-12-06 20:38:22 --> 2758
ERROR - 2016-12-06 20:38:22 --> 2759
ERROR - 2016-12-06 20:38:22 --> 2760
ERROR - 2016-12-06 20:38:22 --> 2761
ERROR - 2016-12-06 20:38:22 --> 2762
ERROR - 2016-12-06 20:38:22 --> 2763
ERROR - 2016-12-06 20:38:22 --> 2764
ERROR - 2016-12-06 20:38:22 --> 2765
ERROR - 2016-12-06 20:38:22 --> 2766
ERROR - 2016-12-06 20:38:22 --> 2767
ERROR - 2016-12-06 20:38:22 --> 2768
ERROR - 2016-12-06 20:38:22 --> 2769
ERROR - 2016-12-06 20:38:22 --> 2770
ERROR - 2016-12-06 20:38:22 --> 2771
ERROR - 2016-12-06 20:38:22 --> 2772
ERROR - 2016-12-06 20:38:22 --> 2773
ERROR - 2016-12-06 20:38:22 --> 2774
ERROR - 2016-12-06 20:38:22 --> 2775
ERROR - 2016-12-06 20:38:22 --> 2776
ERROR - 2016-12-06 20:38:22 --> 2777
ERROR - 2016-12-06 20:38:22 --> 2778
ERROR - 2016-12-06 20:38:23 --> 2779
ERROR - 2016-12-06 20:38:23 --> 2780
ERROR - 2016-12-06 20:38:23 --> 2781
ERROR - 2016-12-06 20:38:23 --> 2782
ERROR - 2016-12-06 20:38:23 --> 2783
ERROR - 2016-12-06 20:38:23 --> 2784
ERROR - 2016-12-06 20:38:23 --> 2785
ERROR - 2016-12-06 20:38:23 --> 2786
ERROR - 2016-12-06 20:38:23 --> 2787
ERROR - 2016-12-06 20:38:23 --> 2788
ERROR - 2016-12-06 20:38:23 --> 2789
ERROR - 2016-12-06 20:38:23 --> 2790
ERROR - 2016-12-06 20:38:23 --> 2791
ERROR - 2016-12-06 20:38:23 --> 2792
ERROR - 2016-12-06 20:38:23 --> 2793
ERROR - 2016-12-06 20:38:23 --> 2794
ERROR - 2016-12-06 20:38:23 --> 2795
ERROR - 2016-12-06 20:38:23 --> 2796
ERROR - 2016-12-06 20:38:23 --> 2797
ERROR - 2016-12-06 20:38:23 --> 2798
ERROR - 2016-12-06 20:38:23 --> 2799
ERROR - 2016-12-06 20:38:23 --> 2800
ERROR - 2016-12-06 20:38:23 --> 2801
ERROR - 2016-12-06 20:38:23 --> 2802
ERROR - 2016-12-06 20:38:23 --> 2803
ERROR - 2016-12-06 20:38:23 --> 2804
ERROR - 2016-12-06 20:38:23 --> 2805
ERROR - 2016-12-06 20:38:23 --> 2806
ERROR - 2016-12-06 20:38:23 --> 2807
ERROR - 2016-12-06 20:38:23 --> 2808
ERROR - 2016-12-06 20:38:23 --> 2809
ERROR - 2016-12-06 20:38:23 --> 2810
ERROR - 2016-12-06 20:38:23 --> 2811
ERROR - 2016-12-06 20:38:23 --> 2812
ERROR - 2016-12-06 20:38:23 --> 2813
ERROR - 2016-12-06 20:38:23 --> 2814
ERROR - 2016-12-06 20:38:23 --> 2815
ERROR - 2016-12-06 20:38:23 --> 2816
ERROR - 2016-12-06 20:38:23 --> 2817
ERROR - 2016-12-06 20:38:23 --> 2818
ERROR - 2016-12-06 20:38:23 --> 2819
ERROR - 2016-12-06 20:38:23 --> 2820
ERROR - 2016-12-06 20:38:23 --> 2821
ERROR - 2016-12-06 20:38:23 --> 2822
ERROR - 2016-12-06 20:38:23 --> 2823
ERROR - 2016-12-06 20:38:23 --> 2824
ERROR - 2016-12-06 20:38:24 --> 2825
ERROR - 2016-12-06 20:38:24 --> 2826
ERROR - 2016-12-06 20:38:24 --> 2827
ERROR - 2016-12-06 20:38:24 --> 2828
ERROR - 2016-12-06 20:38:24 --> 2829
ERROR - 2016-12-06 20:38:24 --> 2830
ERROR - 2016-12-06 20:38:24 --> 2831
ERROR - 2016-12-06 20:38:24 --> 2832
ERROR - 2016-12-06 20:38:24 --> 2833
ERROR - 2016-12-06 20:38:24 --> 2834
ERROR - 2016-12-06 20:38:24 --> 2835
ERROR - 2016-12-06 20:38:24 --> 2836
ERROR - 2016-12-06 20:38:24 --> 2837
ERROR - 2016-12-06 20:38:24 --> 2838
ERROR - 2016-12-06 20:38:24 --> 2839
ERROR - 2016-12-06 20:38:24 --> 2840
ERROR - 2016-12-06 20:38:24 --> 2841
ERROR - 2016-12-06 20:38:24 --> 2842
ERROR - 2016-12-06 20:38:24 --> 2843
ERROR - 2016-12-06 20:38:24 --> 2844
ERROR - 2016-12-06 20:38:24 --> 2845
ERROR - 2016-12-06 20:38:24 --> 2846
ERROR - 2016-12-06 20:38:24 --> 2847
ERROR - 2016-12-06 20:38:24 --> 2848
ERROR - 2016-12-06 20:38:24 --> 2849
ERROR - 2016-12-06 20:38:24 --> 2850
ERROR - 2016-12-06 20:38:24 --> 2851
ERROR - 2016-12-06 20:38:24 --> 2852
ERROR - 2016-12-06 20:38:24 --> 2853
ERROR - 2016-12-06 20:38:24 --> 2854
ERROR - 2016-12-06 20:38:24 --> 2855
ERROR - 2016-12-06 20:38:24 --> 2856
ERROR - 2016-12-06 20:38:24 --> 2857
ERROR - 2016-12-06 20:38:24 --> 2858
ERROR - 2016-12-06 20:38:24 --> 2859
ERROR - 2016-12-06 20:38:24 --> 2860
ERROR - 2016-12-06 20:38:24 --> 2861
ERROR - 2016-12-06 20:38:25 --> 2862
ERROR - 2016-12-06 20:38:25 --> 2863
ERROR - 2016-12-06 20:38:25 --> 2864
ERROR - 2016-12-06 20:38:25 --> 2865
ERROR - 2016-12-06 20:38:25 --> 2866
ERROR - 2016-12-06 20:38:25 --> 2867
ERROR - 2016-12-06 20:38:25 --> 2868
ERROR - 2016-12-06 20:38:25 --> 2869
ERROR - 2016-12-06 20:38:25 --> 2870
ERROR - 2016-12-06 20:38:25 --> 2871
ERROR - 2016-12-06 20:38:25 --> 2872
ERROR - 2016-12-06 20:38:25 --> 2873
ERROR - 2016-12-06 20:38:25 --> 2874
ERROR - 2016-12-06 20:38:25 --> 2875
ERROR - 2016-12-06 20:38:25 --> 2876
ERROR - 2016-12-06 20:38:25 --> 2877
ERROR - 2016-12-06 20:38:25 --> 2878
ERROR - 2016-12-06 20:38:25 --> 2879
ERROR - 2016-12-06 20:38:25 --> 2880
ERROR - 2016-12-06 20:38:25 --> 2881
ERROR - 2016-12-06 20:38:25 --> 2882
ERROR - 2016-12-06 20:38:25 --> 2883
ERROR - 2016-12-06 20:38:25 --> 2884
ERROR - 2016-12-06 20:38:25 --> 2885
ERROR - 2016-12-06 20:38:25 --> 2886
ERROR - 2016-12-06 20:38:25 --> 2887
ERROR - 2016-12-06 20:38:25 --> 2888
ERROR - 2016-12-06 20:38:25 --> 2889
ERROR - 2016-12-06 20:38:25 --> 2890
ERROR - 2016-12-06 20:38:25 --> 2891
ERROR - 2016-12-06 20:38:25 --> 2892
ERROR - 2016-12-06 20:38:25 --> 2893
ERROR - 2016-12-06 20:38:25 --> 2894
ERROR - 2016-12-06 20:38:25 --> 2895
ERROR - 2016-12-06 20:38:25 --> 2896
ERROR - 2016-12-06 20:38:25 --> 2897
ERROR - 2016-12-06 20:38:25 --> 2898
ERROR - 2016-12-06 20:38:25 --> 2899
ERROR - 2016-12-06 20:38:25 --> 2900
ERROR - 2016-12-06 20:38:25 --> 2901
ERROR - 2016-12-06 20:38:26 --> 2902
ERROR - 2016-12-06 20:38:26 --> 2903
ERROR - 2016-12-06 20:38:26 --> 2904
ERROR - 2016-12-06 20:38:26 --> 2905
ERROR - 2016-12-06 20:38:26 --> 2906
ERROR - 2016-12-06 20:38:26 --> 2907
ERROR - 2016-12-06 20:38:26 --> 2908
ERROR - 2016-12-06 20:38:26 --> 2909
ERROR - 2016-12-06 20:38:26 --> 2910
ERROR - 2016-12-06 20:38:26 --> 2911
ERROR - 2016-12-06 20:38:26 --> 2912
ERROR - 2016-12-06 20:38:26 --> 2913
ERROR - 2016-12-06 20:38:26 --> 2914
ERROR - 2016-12-06 20:38:26 --> 2915
ERROR - 2016-12-06 20:38:26 --> 2916
ERROR - 2016-12-06 20:38:26 --> 2917
ERROR - 2016-12-06 20:38:26 --> 2918
ERROR - 2016-12-06 20:38:26 --> 2919
ERROR - 2016-12-06 20:38:26 --> 2920
ERROR - 2016-12-06 20:38:26 --> 2921
ERROR - 2016-12-06 20:38:26 --> 2922
ERROR - 2016-12-06 20:38:26 --> 2923
ERROR - 2016-12-06 20:38:26 --> 2924
ERROR - 2016-12-06 20:38:26 --> 2925
ERROR - 2016-12-06 20:38:26 --> 2926
ERROR - 2016-12-06 20:38:26 --> 2927
ERROR - 2016-12-06 20:38:26 --> 2928
ERROR - 2016-12-06 20:38:26 --> 2929
ERROR - 2016-12-06 20:38:26 --> 2930
ERROR - 2016-12-06 20:38:26 --> 2931
ERROR - 2016-12-06 20:38:26 --> 2932
ERROR - 2016-12-06 20:38:26 --> 2933
ERROR - 2016-12-06 20:38:26 --> 2934
ERROR - 2016-12-06 20:38:26 --> 2935
ERROR - 2016-12-06 20:38:26 --> 2936
ERROR - 2016-12-06 20:38:26 --> 2937
ERROR - 2016-12-06 20:38:26 --> 2938
ERROR - 2016-12-06 20:38:26 --> 2939
ERROR - 2016-12-06 20:38:26 --> 2940
ERROR - 2016-12-06 20:38:26 --> 2941
ERROR - 2016-12-06 20:38:26 --> 2942
ERROR - 2016-12-06 20:38:27 --> 2943
ERROR - 2016-12-06 20:38:27 --> 2944
ERROR - 2016-12-06 20:38:27 --> 2945
ERROR - 2016-12-06 20:38:27 --> 2946
ERROR - 2016-12-06 20:38:27 --> 2947
ERROR - 2016-12-06 20:38:27 --> 2948
ERROR - 2016-12-06 20:38:27 --> 2949
ERROR - 2016-12-06 20:38:27 --> 2950
ERROR - 2016-12-06 20:38:27 --> 2951
ERROR - 2016-12-06 20:38:27 --> 2952
ERROR - 2016-12-06 20:38:27 --> 2953
ERROR - 2016-12-06 20:38:27 --> 2954
ERROR - 2016-12-06 20:38:27 --> 2955
ERROR - 2016-12-06 20:38:27 --> 2956
ERROR - 2016-12-06 20:38:27 --> 2957
ERROR - 2016-12-06 20:38:27 --> 2958
ERROR - 2016-12-06 20:38:27 --> 2959
ERROR - 2016-12-06 20:38:27 --> 2960
ERROR - 2016-12-06 20:38:27 --> 2961
ERROR - 2016-12-06 20:38:27 --> 2962
ERROR - 2016-12-06 20:38:27 --> 2963
ERROR - 2016-12-06 20:38:27 --> 2964
ERROR - 2016-12-06 20:38:27 --> 2965
ERROR - 2016-12-06 20:38:27 --> 2966
ERROR - 2016-12-06 20:38:27 --> 2967
ERROR - 2016-12-06 20:38:27 --> 2968
ERROR - 2016-12-06 20:38:27 --> 2969
ERROR - 2016-12-06 20:38:27 --> 2970
ERROR - 2016-12-06 20:38:27 --> 2971
ERROR - 2016-12-06 20:38:27 --> 2972
ERROR - 2016-12-06 20:38:27 --> 2973
ERROR - 2016-12-06 20:38:27 --> 2974
ERROR - 2016-12-06 20:38:27 --> 2975
ERROR - 2016-12-06 20:38:27 --> 2976
ERROR - 2016-12-06 20:38:27 --> 2977
ERROR - 2016-12-06 20:38:27 --> 2978
ERROR - 2016-12-06 20:38:27 --> 2979
ERROR - 2016-12-06 20:38:28 --> 2980
ERROR - 2016-12-06 20:38:28 --> 2981
ERROR - 2016-12-06 20:38:28 --> 2982
ERROR - 2016-12-06 20:38:28 --> 2983
ERROR - 2016-12-06 20:38:28 --> 2984
ERROR - 2016-12-06 20:38:28 --> 2985
ERROR - 2016-12-06 20:38:28 --> 2986
ERROR - 2016-12-06 20:38:28 --> 2987
ERROR - 2016-12-06 20:38:28 --> 2988
ERROR - 2016-12-06 20:38:28 --> 2989
ERROR - 2016-12-06 20:38:28 --> 2990
ERROR - 2016-12-06 20:38:28 --> 2991
ERROR - 2016-12-06 20:38:28 --> 2992
ERROR - 2016-12-06 20:38:28 --> 2993
ERROR - 2016-12-06 20:38:28 --> 2994
ERROR - 2016-12-06 20:38:28 --> 2995
ERROR - 2016-12-06 20:38:28 --> 2996
ERROR - 2016-12-06 20:38:28 --> 2997
ERROR - 2016-12-06 20:38:28 --> 2998
ERROR - 2016-12-06 20:38:28 --> 2999
ERROR - 2016-12-06 20:38:28 --> 3000
ERROR - 2016-12-06 20:38:28 --> 3001
ERROR - 2016-12-06 20:38:28 --> 3002
ERROR - 2016-12-06 20:38:28 --> 3003
ERROR - 2016-12-06 20:38:28 --> 3004
ERROR - 2016-12-06 20:38:28 --> 3005
ERROR - 2016-12-06 20:38:28 --> 3006
ERROR - 2016-12-06 20:38:28 --> 3007
ERROR - 2016-12-06 20:38:28 --> 3008
ERROR - 2016-12-06 20:38:28 --> 3009
ERROR - 2016-12-06 20:38:28 --> 3010
ERROR - 2016-12-06 20:38:28 --> 3011
ERROR - 2016-12-06 20:38:28 --> 3012
ERROR - 2016-12-06 20:38:28 --> 3013
ERROR - 2016-12-06 20:38:28 --> 3014
ERROR - 2016-12-06 20:38:28 --> 3015
ERROR - 2016-12-06 20:38:29 --> 3016
ERROR - 2016-12-06 20:38:29 --> 3017
ERROR - 2016-12-06 20:38:29 --> 3018
ERROR - 2016-12-06 20:38:29 --> 3019
ERROR - 2016-12-06 20:38:29 --> 3020
ERROR - 2016-12-06 20:38:29 --> 3021
ERROR - 2016-12-06 20:38:29 --> 3022
ERROR - 2016-12-06 20:38:29 --> 3023
ERROR - 2016-12-06 20:38:29 --> 3024
ERROR - 2016-12-06 20:38:29 --> 3025
ERROR - 2016-12-06 20:38:29 --> 3026
ERROR - 2016-12-06 20:38:29 --> 3027
ERROR - 2016-12-06 20:38:29 --> 3028
ERROR - 2016-12-06 20:38:29 --> 3029
ERROR - 2016-12-06 20:38:29 --> 3030
ERROR - 2016-12-06 20:38:29 --> 3031
ERROR - 2016-12-06 20:38:29 --> 3032
ERROR - 2016-12-06 20:38:29 --> 3033
ERROR - 2016-12-06 20:38:29 --> 3034
ERROR - 2016-12-06 20:38:29 --> 3035
ERROR - 2016-12-06 20:38:29 --> 3036
ERROR - 2016-12-06 20:38:29 --> 3037
ERROR - 2016-12-06 20:38:29 --> 3038
ERROR - 2016-12-06 20:38:29 --> 3039
ERROR - 2016-12-06 20:38:29 --> 3040
ERROR - 2016-12-06 20:38:29 --> 3041
ERROR - 2016-12-06 20:38:29 --> 3042
ERROR - 2016-12-06 20:38:29 --> 3043
ERROR - 2016-12-06 20:38:29 --> 3044
ERROR - 2016-12-06 20:38:29 --> 3045
ERROR - 2016-12-06 20:38:29 --> 3046
ERROR - 2016-12-06 20:38:29 --> 3047
ERROR - 2016-12-06 20:38:29 --> 3048
ERROR - 2016-12-06 20:38:29 --> 3049
ERROR - 2016-12-06 20:38:29 --> 3050
ERROR - 2016-12-06 20:38:29 --> 3051
ERROR - 2016-12-06 20:38:29 --> 3052
ERROR - 2016-12-06 20:38:29 --> 3053
ERROR - 2016-12-06 20:38:29 --> 3054
ERROR - 2016-12-06 20:38:29 --> 3055
ERROR - 2016-12-06 20:38:30 --> 3056
ERROR - 2016-12-06 20:38:30 --> 3057
ERROR - 2016-12-06 20:38:30 --> 3058
ERROR - 2016-12-06 20:38:30 --> 3059
ERROR - 2016-12-06 20:38:30 --> 3060
ERROR - 2016-12-06 20:38:30 --> 3061
ERROR - 2016-12-06 20:38:30 --> 3062
ERROR - 2016-12-06 20:38:30 --> 3063
ERROR - 2016-12-06 20:38:30 --> 3064
ERROR - 2016-12-06 20:38:30 --> 3065
ERROR - 2016-12-06 20:38:30 --> 3066
ERROR - 2016-12-06 20:38:30 --> 3067
ERROR - 2016-12-06 20:38:30 --> 3068
ERROR - 2016-12-06 20:38:30 --> 3069
ERROR - 2016-12-06 20:38:30 --> 3070
ERROR - 2016-12-06 20:38:30 --> 3071
ERROR - 2016-12-06 20:38:30 --> 3072
ERROR - 2016-12-06 20:38:30 --> 3073
ERROR - 2016-12-06 20:38:30 --> 3074
ERROR - 2016-12-06 20:38:30 --> 3075
ERROR - 2016-12-06 20:38:30 --> 3076
ERROR - 2016-12-06 20:38:30 --> 3077
ERROR - 2016-12-06 20:38:30 --> 3078
ERROR - 2016-12-06 20:38:30 --> 3079
ERROR - 2016-12-06 20:38:30 --> 3080
ERROR - 2016-12-06 20:38:30 --> 3081
ERROR - 2016-12-06 20:38:30 --> 3082
ERROR - 2016-12-06 20:38:30 --> 3083
ERROR - 2016-12-06 20:38:30 --> 3084
ERROR - 2016-12-06 20:38:30 --> 3085
ERROR - 2016-12-06 20:38:30 --> 3086
ERROR - 2016-12-06 20:38:30 --> 3087
ERROR - 2016-12-06 20:38:30 --> 3088
ERROR - 2016-12-06 20:38:30 --> 3089
ERROR - 2016-12-06 20:38:30 --> 3090
ERROR - 2016-12-06 20:38:30 --> 3091
ERROR - 2016-12-06 20:38:30 --> 3092
ERROR - 2016-12-06 20:38:30 --> 3093
ERROR - 2016-12-06 20:38:31 --> 3094
ERROR - 2016-12-06 20:38:31 --> 3095
ERROR - 2016-12-06 20:38:31 --> 3096
ERROR - 2016-12-06 20:38:31 --> 3097
ERROR - 2016-12-06 20:38:31 --> 3098
ERROR - 2016-12-06 20:38:31 --> 3099
ERROR - 2016-12-06 20:38:31 --> 3100
ERROR - 2016-12-06 20:38:31 --> 3101
ERROR - 2016-12-06 20:38:31 --> 3102
ERROR - 2016-12-06 20:38:31 --> 3103
ERROR - 2016-12-06 20:38:31 --> 3104
ERROR - 2016-12-06 20:38:31 --> 3105
ERROR - 2016-12-06 20:38:31 --> 3106
ERROR - 2016-12-06 20:38:31 --> 3107
ERROR - 2016-12-06 20:38:31 --> 3108
ERROR - 2016-12-06 20:38:31 --> 3109
ERROR - 2016-12-06 20:38:31 --> 3110
ERROR - 2016-12-06 20:38:31 --> 3111
ERROR - 2016-12-06 20:38:31 --> 3112
ERROR - 2016-12-06 20:38:31 --> 3113
ERROR - 2016-12-06 20:38:31 --> 3114
ERROR - 2016-12-06 20:38:31 --> 3115
ERROR - 2016-12-06 20:38:31 --> 3116
ERROR - 2016-12-06 20:38:31 --> 3117
ERROR - 2016-12-06 20:38:31 --> 3118
ERROR - 2016-12-06 20:38:31 --> 3119
ERROR - 2016-12-06 20:38:31 --> 3120
ERROR - 2016-12-06 20:38:31 --> 3121
ERROR - 2016-12-06 20:38:31 --> 3122
ERROR - 2016-12-06 20:38:31 --> 3123
ERROR - 2016-12-06 20:38:31 --> 3124
ERROR - 2016-12-06 20:38:31 --> 3125
ERROR - 2016-12-06 20:38:31 --> 3126
ERROR - 2016-12-06 20:38:31 --> 3127
ERROR - 2016-12-06 20:38:31 --> 3128
ERROR - 2016-12-06 20:38:31 --> 3129
ERROR - 2016-12-06 20:38:31 --> 3130
ERROR - 2016-12-06 20:38:32 --> 3131
ERROR - 2016-12-06 20:38:32 --> 3132
ERROR - 2016-12-06 20:38:32 --> 3133
ERROR - 2016-12-06 20:38:32 --> 3134
ERROR - 2016-12-06 20:38:32 --> 3135
ERROR - 2016-12-06 20:38:32 --> 3136
ERROR - 2016-12-06 20:38:32 --> 3137
ERROR - 2016-12-06 20:38:32 --> 3138
ERROR - 2016-12-06 20:38:32 --> 3139
ERROR - 2016-12-06 20:38:32 --> 3140
ERROR - 2016-12-06 20:38:32 --> 3141
ERROR - 2016-12-06 20:38:32 --> 3142
ERROR - 2016-12-06 20:38:32 --> 3143
ERROR - 2016-12-06 20:38:32 --> 3144
ERROR - 2016-12-06 20:38:32 --> 3145
ERROR - 2016-12-06 20:38:32 --> 3146
ERROR - 2016-12-06 20:38:32 --> 3147
ERROR - 2016-12-06 20:38:32 --> 3148
ERROR - 2016-12-06 20:38:32 --> 3149
ERROR - 2016-12-06 20:38:32 --> 3150
ERROR - 2016-12-06 20:38:32 --> 3151
ERROR - 2016-12-06 20:38:32 --> 3152
ERROR - 2016-12-06 20:38:32 --> 3153
ERROR - 2016-12-06 20:38:32 --> 3154
ERROR - 2016-12-06 20:38:32 --> 3155
ERROR - 2016-12-06 20:38:32 --> 3156
ERROR - 2016-12-06 20:38:32 --> 3157
ERROR - 2016-12-06 20:38:32 --> 3158
ERROR - 2016-12-06 20:38:32 --> 3159
ERROR - 2016-12-06 20:38:32 --> 3160
ERROR - 2016-12-06 20:38:32 --> 3161
ERROR - 2016-12-06 20:38:32 --> 3162
ERROR - 2016-12-06 20:38:32 --> 3163
ERROR - 2016-12-06 20:38:32 --> 3164
ERROR - 2016-12-06 20:38:32 --> 3165
ERROR - 2016-12-06 20:38:32 --> 3166
ERROR - 2016-12-06 20:38:32 --> 3167
ERROR - 2016-12-06 20:38:32 --> 3168
ERROR - 2016-12-06 20:38:32 --> 3169
ERROR - 2016-12-06 20:38:33 --> 3170
ERROR - 2016-12-06 20:38:33 --> 3171
ERROR - 2016-12-06 20:38:33 --> 3172
ERROR - 2016-12-06 20:38:33 --> 3173
ERROR - 2016-12-06 20:38:33 --> 3174
ERROR - 2016-12-06 20:38:33 --> 3175
ERROR - 2016-12-06 20:38:33 --> 3176
ERROR - 2016-12-06 20:38:33 --> 3177
ERROR - 2016-12-06 20:38:33 --> 3178
ERROR - 2016-12-06 20:38:33 --> 3179
ERROR - 2016-12-06 20:38:33 --> 3180
ERROR - 2016-12-06 20:38:33 --> 3181
ERROR - 2016-12-06 20:38:33 --> 3182
ERROR - 2016-12-06 20:38:33 --> 3183
ERROR - 2016-12-06 20:38:33 --> 3184
ERROR - 2016-12-06 20:38:33 --> 3185
ERROR - 2016-12-06 20:38:33 --> 3186
ERROR - 2016-12-06 20:38:33 --> 3187
ERROR - 2016-12-06 20:38:33 --> 3188
ERROR - 2016-12-06 20:38:33 --> 3189
ERROR - 2016-12-06 20:38:33 --> 3190
ERROR - 2016-12-06 20:38:33 --> 3191
ERROR - 2016-12-06 20:38:33 --> 3192
ERROR - 2016-12-06 20:38:33 --> 3193
ERROR - 2016-12-06 20:38:33 --> 3194
ERROR - 2016-12-06 20:38:33 --> 3195
ERROR - 2016-12-06 20:38:33 --> 3196
ERROR - 2016-12-06 20:38:33 --> 3197
ERROR - 2016-12-06 20:38:33 --> 3198
ERROR - 2016-12-06 20:38:33 --> 3199
ERROR - 2016-12-06 20:38:33 --> 3200
ERROR - 2016-12-06 20:38:33 --> 3201
ERROR - 2016-12-06 20:38:33 --> 3202
ERROR - 2016-12-06 20:38:33 --> 3203
ERROR - 2016-12-06 20:38:33 --> 3204
ERROR - 2016-12-06 20:38:33 --> 3205
ERROR - 2016-12-06 20:38:33 --> 3206
ERROR - 2016-12-06 20:38:33 --> 3207
ERROR - 2016-12-06 20:38:33 --> 3208
ERROR - 2016-12-06 20:38:33 --> 3209
ERROR - 2016-12-06 20:38:33 --> 3210
ERROR - 2016-12-06 20:38:33 --> 3211
ERROR - 2016-12-06 20:38:34 --> 3212
ERROR - 2016-12-06 20:38:34 --> 3213
ERROR - 2016-12-06 20:38:34 --> 3214
ERROR - 2016-12-06 20:38:34 --> 3215
ERROR - 2016-12-06 20:38:34 --> 3216
ERROR - 2016-12-06 20:38:34 --> 3217
ERROR - 2016-12-06 20:38:34 --> 3218
ERROR - 2016-12-06 20:38:34 --> 3219
ERROR - 2016-12-06 20:38:34 --> 3220
ERROR - 2016-12-06 20:38:34 --> 3221
ERROR - 2016-12-06 20:38:34 --> 3222
ERROR - 2016-12-06 20:38:34 --> 3223
ERROR - 2016-12-06 20:38:34 --> 3224
ERROR - 2016-12-06 20:38:34 --> 3225
ERROR - 2016-12-06 20:38:34 --> 3226
ERROR - 2016-12-06 20:38:34 --> 3227
ERROR - 2016-12-06 20:38:34 --> 3228
ERROR - 2016-12-06 20:38:34 --> 3229
ERROR - 2016-12-06 20:38:34 --> 3230
ERROR - 2016-12-06 20:38:34 --> 3231
ERROR - 2016-12-06 20:38:34 --> 3232
ERROR - 2016-12-06 20:38:34 --> 3233
ERROR - 2016-12-06 20:38:34 --> 3234
ERROR - 2016-12-06 20:38:34 --> 3235
ERROR - 2016-12-06 20:38:34 --> 3236
ERROR - 2016-12-06 20:38:34 --> 3237
ERROR - 2016-12-06 20:38:34 --> 3238
ERROR - 2016-12-06 20:38:34 --> 3239
ERROR - 2016-12-06 20:38:34 --> 3240
ERROR - 2016-12-06 20:38:34 --> 3241
ERROR - 2016-12-06 20:38:34 --> 3242
ERROR - 2016-12-06 20:38:34 --> 3243
ERROR - 2016-12-06 20:38:34 --> 3244
ERROR - 2016-12-06 20:38:34 --> 3245
ERROR - 2016-12-06 20:38:34 --> 3246
ERROR - 2016-12-06 20:38:34 --> 3247
ERROR - 2016-12-06 20:38:34 --> 3248
ERROR - 2016-12-06 20:38:34 --> 3249
ERROR - 2016-12-06 20:38:34 --> 3250
ERROR - 2016-12-06 20:38:35 --> 3251
ERROR - 2016-12-06 20:38:35 --> 3252
ERROR - 2016-12-06 20:38:35 --> 3253
ERROR - 2016-12-06 20:38:35 --> 3254
ERROR - 2016-12-06 20:38:35 --> 3255
ERROR - 2016-12-06 20:38:35 --> 3256
ERROR - 2016-12-06 20:38:35 --> 3257
ERROR - 2016-12-06 20:38:35 --> 3258
ERROR - 2016-12-06 20:38:35 --> 3259
ERROR - 2016-12-06 20:38:35 --> 3260
ERROR - 2016-12-06 20:38:35 --> 3261
ERROR - 2016-12-06 20:38:35 --> 3262
ERROR - 2016-12-06 20:38:35 --> 3263
ERROR - 2016-12-06 20:38:35 --> 3264
ERROR - 2016-12-06 20:38:35 --> 3265
ERROR - 2016-12-06 20:38:35 --> 3266
ERROR - 2016-12-06 20:38:35 --> 3267
ERROR - 2016-12-06 20:38:35 --> 3268
ERROR - 2016-12-06 20:38:35 --> 3269
ERROR - 2016-12-06 20:38:35 --> 3270
ERROR - 2016-12-06 20:38:35 --> 3271
ERROR - 2016-12-06 20:38:35 --> 3272
ERROR - 2016-12-06 20:38:35 --> 3273
ERROR - 2016-12-06 20:38:35 --> 3274
ERROR - 2016-12-06 20:38:35 --> 3275
ERROR - 2016-12-06 20:38:35 --> 3276
ERROR - 2016-12-06 20:38:35 --> 3277
ERROR - 2016-12-06 20:38:35 --> 3278
ERROR - 2016-12-06 20:38:35 --> 3279
ERROR - 2016-12-06 20:38:35 --> 3280
ERROR - 2016-12-06 20:38:35 --> 3281
ERROR - 2016-12-06 20:38:35 --> 3282
ERROR - 2016-12-06 20:38:35 --> 3283
ERROR - 2016-12-06 20:38:35 --> 3284
ERROR - 2016-12-06 20:38:35 --> 3285
ERROR - 2016-12-06 20:38:35 --> 3286
ERROR - 2016-12-06 20:38:35 --> 3287
ERROR - 2016-12-06 20:38:35 --> 3288
ERROR - 2016-12-06 20:38:35 --> 3289
ERROR - 2016-12-06 20:38:35 --> 3290
ERROR - 2016-12-06 20:38:36 --> 3291
ERROR - 2016-12-06 20:38:36 --> 3292
ERROR - 2016-12-06 20:38:36 --> 3293
ERROR - 2016-12-06 20:38:36 --> 3294
ERROR - 2016-12-06 20:38:36 --> 3295
ERROR - 2016-12-06 20:38:36 --> 3296
ERROR - 2016-12-06 20:38:36 --> 3297
ERROR - 2016-12-06 20:38:36 --> 3298
ERROR - 2016-12-06 20:38:36 --> 3299
ERROR - 2016-12-06 20:38:36 --> 3300
ERROR - 2016-12-06 20:38:36 --> 3301
ERROR - 2016-12-06 20:38:36 --> 3302
ERROR - 2016-12-06 20:38:36 --> 3303
ERROR - 2016-12-06 20:38:36 --> 3304
ERROR - 2016-12-06 20:38:36 --> 3305
ERROR - 2016-12-06 20:38:36 --> 3306
ERROR - 2016-12-06 20:38:36 --> 3307
ERROR - 2016-12-06 20:38:36 --> 3308
ERROR - 2016-12-06 20:38:36 --> 3309
ERROR - 2016-12-06 20:38:36 --> 3310
ERROR - 2016-12-06 20:38:36 --> 3311
ERROR - 2016-12-06 20:38:36 --> 3312
ERROR - 2016-12-06 20:38:36 --> 3313
ERROR - 2016-12-06 20:38:36 --> 3314
ERROR - 2016-12-06 20:38:36 --> 3315
ERROR - 2016-12-06 20:38:36 --> 3316
ERROR - 2016-12-06 20:38:36 --> 3317
ERROR - 2016-12-06 20:38:36 --> 3318
ERROR - 2016-12-06 20:38:36 --> 3319
ERROR - 2016-12-06 20:38:36 --> 3320
ERROR - 2016-12-06 20:38:36 --> 3321
ERROR - 2016-12-06 20:38:36 --> 3322
ERROR - 2016-12-06 20:38:36 --> 3323
ERROR - 2016-12-06 20:38:36 --> 3324
ERROR - 2016-12-06 20:38:36 --> 3325
ERROR - 2016-12-06 20:38:36 --> 3326
ERROR - 2016-12-06 20:38:36 --> 3327
ERROR - 2016-12-06 20:38:36 --> 3328
ERROR - 2016-12-06 20:38:37 --> 3329
ERROR - 2016-12-06 20:38:37 --> 3330
ERROR - 2016-12-06 20:38:37 --> 3331
ERROR - 2016-12-06 20:38:37 --> 3332
ERROR - 2016-12-06 20:38:37 --> 3333
ERROR - 2016-12-06 20:38:37 --> 3334
ERROR - 2016-12-06 20:38:37 --> 3335
ERROR - 2016-12-06 20:38:37 --> 3336
ERROR - 2016-12-06 20:38:37 --> 3337
ERROR - 2016-12-06 20:38:37 --> 3338
ERROR - 2016-12-06 20:38:37 --> 3339
ERROR - 2016-12-06 20:38:37 --> 3340
ERROR - 2016-12-06 20:38:37 --> 3341
ERROR - 2016-12-06 20:38:37 --> 3342
ERROR - 2016-12-06 20:38:37 --> 3343
ERROR - 2016-12-06 20:38:37 --> 3344
ERROR - 2016-12-06 20:38:37 --> 3345
ERROR - 2016-12-06 20:38:37 --> 3346
ERROR - 2016-12-06 20:38:37 --> 3347
ERROR - 2016-12-06 20:38:37 --> 3348
ERROR - 2016-12-06 20:38:37 --> 3349
ERROR - 2016-12-06 20:38:37 --> 3350
ERROR - 2016-12-06 20:38:37 --> 3351
ERROR - 2016-12-06 20:38:37 --> 3352
ERROR - 2016-12-06 20:38:37 --> 3353
ERROR - 2016-12-06 20:38:37 --> 3354
ERROR - 2016-12-06 20:38:37 --> 3355
ERROR - 2016-12-06 20:38:37 --> 3356
ERROR - 2016-12-06 20:38:37 --> 3357
ERROR - 2016-12-06 20:38:37 --> 3358
ERROR - 2016-12-06 20:38:37 --> 3359
ERROR - 2016-12-06 20:38:37 --> 3360
ERROR - 2016-12-06 20:38:37 --> 3361
ERROR - 2016-12-06 20:38:38 --> 3362
ERROR - 2016-12-06 20:38:38 --> 3363
ERROR - 2016-12-06 20:38:38 --> 3364
ERROR - 2016-12-06 20:38:38 --> 3365
ERROR - 2016-12-06 20:38:38 --> 3366
ERROR - 2016-12-06 20:38:38 --> 3367
ERROR - 2016-12-06 20:38:38 --> 3368
ERROR - 2016-12-06 20:38:38 --> 3369
ERROR - 2016-12-06 20:38:38 --> 3370
ERROR - 2016-12-06 20:38:38 --> 3371
ERROR - 2016-12-06 20:38:38 --> 3372
ERROR - 2016-12-06 20:38:38 --> 3373
ERROR - 2016-12-06 20:38:38 --> 3374
ERROR - 2016-12-06 20:38:38 --> 3375
ERROR - 2016-12-06 20:38:38 --> 3376
ERROR - 2016-12-06 20:38:38 --> 3377
ERROR - 2016-12-06 20:38:38 --> 3378
ERROR - 2016-12-06 20:38:38 --> 3379
ERROR - 2016-12-06 20:38:38 --> 3380
ERROR - 2016-12-06 20:38:38 --> 3381
ERROR - 2016-12-06 20:38:38 --> 3382
ERROR - 2016-12-06 20:38:38 --> 3383
ERROR - 2016-12-06 20:38:38 --> 3384
ERROR - 2016-12-06 20:38:38 --> 3385
ERROR - 2016-12-06 20:38:38 --> 3386
ERROR - 2016-12-06 20:38:38 --> 3387
ERROR - 2016-12-06 20:38:38 --> 3388
ERROR - 2016-12-06 20:38:38 --> 3389
ERROR - 2016-12-06 20:38:38 --> 3390
ERROR - 2016-12-06 20:38:38 --> 3391
ERROR - 2016-12-06 20:38:38 --> 3392
ERROR - 2016-12-06 20:38:38 --> 3393
ERROR - 2016-12-06 20:38:38 --> 3394
ERROR - 2016-12-06 20:38:38 --> 3395
ERROR - 2016-12-06 20:38:38 --> 3396
ERROR - 2016-12-06 20:38:38 --> 3397
ERROR - 2016-12-06 20:38:38 --> 3398
ERROR - 2016-12-06 20:38:39 --> 3399
ERROR - 2016-12-06 20:38:39 --> 3400
ERROR - 2016-12-06 20:38:39 --> 3401
ERROR - 2016-12-06 20:38:39 --> 3402
ERROR - 2016-12-06 20:38:39 --> 3403
ERROR - 2016-12-06 20:38:39 --> 3404
ERROR - 2016-12-06 20:38:39 --> 3405
ERROR - 2016-12-06 20:38:39 --> 3406
ERROR - 2016-12-06 20:38:39 --> 3407
ERROR - 2016-12-06 20:38:39 --> 3408
ERROR - 2016-12-06 20:38:39 --> 3409
ERROR - 2016-12-06 20:38:39 --> 3410
ERROR - 2016-12-06 20:38:39 --> 3411
ERROR - 2016-12-06 20:38:39 --> 3412
ERROR - 2016-12-06 20:38:39 --> 3413
ERROR - 2016-12-06 20:38:39 --> 3414
ERROR - 2016-12-06 20:38:39 --> 3415
ERROR - 2016-12-06 20:38:39 --> 3416
ERROR - 2016-12-06 20:38:39 --> 3417
ERROR - 2016-12-06 20:38:39 --> 3418
ERROR - 2016-12-06 20:38:39 --> 3419
ERROR - 2016-12-06 20:38:39 --> 3420
ERROR - 2016-12-06 20:38:39 --> 3421
ERROR - 2016-12-06 20:38:39 --> 3422
ERROR - 2016-12-06 20:38:39 --> 3423
ERROR - 2016-12-06 20:38:39 --> 3424
ERROR - 2016-12-06 20:38:39 --> 3425
ERROR - 2016-12-06 20:38:39 --> 3426
ERROR - 2016-12-06 20:38:39 --> 3427
ERROR - 2016-12-06 20:38:39 --> 3428
ERROR - 2016-12-06 20:38:39 --> 3429
ERROR - 2016-12-06 20:38:39 --> 3430
ERROR - 2016-12-06 20:38:39 --> 3431
ERROR - 2016-12-06 20:38:39 --> 3432
ERROR - 2016-12-06 20:38:39 --> 3433
ERROR - 2016-12-06 20:38:39 --> 3434
ERROR - 2016-12-06 20:38:39 --> 3435
ERROR - 2016-12-06 20:38:39 --> 3436
ERROR - 2016-12-06 20:38:39 --> 3437
ERROR - 2016-12-06 20:38:40 --> 3438
ERROR - 2016-12-06 20:38:40 --> 3439
ERROR - 2016-12-06 20:38:40 --> 3440
ERROR - 2016-12-06 20:38:40 --> 3441
ERROR - 2016-12-06 20:38:40 --> 3442
ERROR - 2016-12-06 20:38:40 --> 3443
ERROR - 2016-12-06 20:38:40 --> 3444
ERROR - 2016-12-06 20:38:40 --> 3445
ERROR - 2016-12-06 20:38:40 --> 3446
ERROR - 2016-12-06 20:38:40 --> 3447
ERROR - 2016-12-06 20:38:40 --> 3448
ERROR - 2016-12-06 20:38:40 --> 3449
ERROR - 2016-12-06 20:38:40 --> 3450
ERROR - 2016-12-06 20:38:40 --> 3451
ERROR - 2016-12-06 20:38:40 --> 3452
ERROR - 2016-12-06 20:38:40 --> 3453
ERROR - 2016-12-06 20:38:40 --> 3454
ERROR - 2016-12-06 20:38:40 --> 3455
ERROR - 2016-12-06 20:38:40 --> 3456
ERROR - 2016-12-06 20:38:40 --> 3457
ERROR - 2016-12-06 20:38:40 --> 3458
ERROR - 2016-12-06 20:38:40 --> 3459
ERROR - 2016-12-06 20:38:40 --> 3460
ERROR - 2016-12-06 20:38:40 --> 3461
ERROR - 2016-12-06 20:38:40 --> 3462
ERROR - 2016-12-06 20:38:40 --> 3463
ERROR - 2016-12-06 20:38:40 --> 3464
ERROR - 2016-12-06 20:38:40 --> 3465
ERROR - 2016-12-06 20:38:40 --> 3466
ERROR - 2016-12-06 20:38:40 --> 3467
ERROR - 2016-12-06 20:38:40 --> 3468
ERROR - 2016-12-06 20:38:40 --> 3469
ERROR - 2016-12-06 20:38:40 --> 3470
ERROR - 2016-12-06 20:38:40 --> 3471
ERROR - 2016-12-06 20:38:40 --> 3472
ERROR - 2016-12-06 20:38:40 --> 3473
ERROR - 2016-12-06 20:38:41 --> 3474
ERROR - 2016-12-06 20:38:41 --> 3475
ERROR - 2016-12-06 20:38:41 --> 3476
ERROR - 2016-12-06 20:38:41 --> 3477
ERROR - 2016-12-06 20:38:41 --> 3478
ERROR - 2016-12-06 20:38:41 --> 3479
ERROR - 2016-12-06 20:38:41 --> 3480
ERROR - 2016-12-06 20:38:41 --> 3481
ERROR - 2016-12-06 20:38:41 --> 3482
ERROR - 2016-12-06 20:38:41 --> 3483
ERROR - 2016-12-06 20:38:41 --> 3484
ERROR - 2016-12-06 20:38:41 --> 3485
ERROR - 2016-12-06 20:38:41 --> 3486
ERROR - 2016-12-06 20:38:41 --> 3487
ERROR - 2016-12-06 20:38:41 --> 3488
ERROR - 2016-12-06 20:38:41 --> 3489
ERROR - 2016-12-06 20:38:41 --> 3490
ERROR - 2016-12-06 20:38:41 --> 3491
ERROR - 2016-12-06 20:38:41 --> 3492
ERROR - 2016-12-06 20:38:41 --> 3493
ERROR - 2016-12-06 20:38:41 --> 3494
ERROR - 2016-12-06 20:38:41 --> 3495
ERROR - 2016-12-06 20:38:41 --> 3496
ERROR - 2016-12-06 20:38:41 --> 3497
ERROR - 2016-12-06 20:38:41 --> 3498
ERROR - 2016-12-06 20:38:41 --> 3499
ERROR - 2016-12-06 20:38:41 --> 3500
ERROR - 2016-12-06 20:38:41 --> 3501
ERROR - 2016-12-06 20:38:41 --> 3502
ERROR - 2016-12-06 20:38:41 --> 3503
ERROR - 2016-12-06 20:38:41 --> 3504
ERROR - 2016-12-06 20:38:41 --> 3505
ERROR - 2016-12-06 20:38:41 --> 3506
ERROR - 2016-12-06 20:38:41 --> 3507
ERROR - 2016-12-06 20:38:41 --> 3508
ERROR - 2016-12-06 20:38:42 --> 3509
ERROR - 2016-12-06 20:38:42 --> 3510
ERROR - 2016-12-06 20:38:42 --> 3511
ERROR - 2016-12-06 20:38:42 --> 3512
ERROR - 2016-12-06 20:38:42 --> 3513
ERROR - 2016-12-06 20:38:42 --> 3514
ERROR - 2016-12-06 20:38:42 --> 3515
ERROR - 2016-12-06 20:38:42 --> 3516
ERROR - 2016-12-06 20:38:42 --> 3517
ERROR - 2016-12-06 20:38:42 --> 3518
ERROR - 2016-12-06 20:38:42 --> 3519
ERROR - 2016-12-06 20:38:42 --> 3520
ERROR - 2016-12-06 20:38:42 --> 3521
ERROR - 2016-12-06 20:38:42 --> 3522
ERROR - 2016-12-06 20:38:42 --> 3523
ERROR - 2016-12-06 20:38:42 --> 3524
ERROR - 2016-12-06 20:38:42 --> 3525
ERROR - 2016-12-06 20:38:42 --> 3526
ERROR - 2016-12-06 20:38:42 --> 3527
ERROR - 2016-12-06 20:38:42 --> 3528
ERROR - 2016-12-06 20:38:42 --> 3529
ERROR - 2016-12-06 20:38:42 --> 3530
ERROR - 2016-12-06 20:38:42 --> 3531
ERROR - 2016-12-06 20:38:42 --> 3532
ERROR - 2016-12-06 20:38:42 --> 3533
ERROR - 2016-12-06 20:38:42 --> 3534
ERROR - 2016-12-06 20:38:42 --> 3535
ERROR - 2016-12-06 20:38:42 --> 3536
ERROR - 2016-12-06 20:38:42 --> 3537
ERROR - 2016-12-06 20:38:42 --> 3538
ERROR - 2016-12-06 20:38:42 --> 3539
ERROR - 2016-12-06 20:38:42 --> 3540
ERROR - 2016-12-06 20:38:42 --> 3541
ERROR - 2016-12-06 20:38:42 --> 3542
ERROR - 2016-12-06 20:38:42 --> 3543
ERROR - 2016-12-06 20:38:42 --> 3544
ERROR - 2016-12-06 20:38:42 --> 3545
ERROR - 2016-12-06 20:38:42 --> 3546
ERROR - 2016-12-06 20:38:42 --> 3547
ERROR - 2016-12-06 20:38:42 --> 3548
ERROR - 2016-12-06 20:38:42 --> 3549
ERROR - 2016-12-06 20:38:43 --> 3550
ERROR - 2016-12-06 20:38:43 --> 3551
ERROR - 2016-12-06 20:38:43 --> 3552
ERROR - 2016-12-06 20:38:43 --> 3553
ERROR - 2016-12-06 20:38:43 --> 3554
ERROR - 2016-12-06 20:38:43 --> 3555
ERROR - 2016-12-06 20:38:43 --> 3556
ERROR - 2016-12-06 20:38:43 --> 3557
ERROR - 2016-12-06 20:38:43 --> 3558
ERROR - 2016-12-06 20:38:43 --> 3559
ERROR - 2016-12-06 20:38:43 --> 3560
ERROR - 2016-12-06 20:38:43 --> 3561
ERROR - 2016-12-06 20:38:43 --> 3562
ERROR - 2016-12-06 20:38:43 --> 3563
ERROR - 2016-12-06 20:38:43 --> 3564
ERROR - 2016-12-06 20:38:43 --> 3565
ERROR - 2016-12-06 20:38:43 --> 3566
ERROR - 2016-12-06 20:38:43 --> 3567
ERROR - 2016-12-06 20:38:43 --> 3568
ERROR - 2016-12-06 20:38:43 --> 3569
ERROR - 2016-12-06 20:38:43 --> 3570
ERROR - 2016-12-06 20:38:43 --> 3571
ERROR - 2016-12-06 20:38:43 --> 3572
ERROR - 2016-12-06 20:38:43 --> 3573
ERROR - 2016-12-06 20:38:43 --> 3574
ERROR - 2016-12-06 20:38:43 --> 3575
ERROR - 2016-12-06 20:38:43 --> 3576
ERROR - 2016-12-06 20:38:43 --> 3577
ERROR - 2016-12-06 20:38:43 --> 3578
ERROR - 2016-12-06 20:38:43 --> 3579
ERROR - 2016-12-06 20:38:43 --> 3580
ERROR - 2016-12-06 20:38:43 --> 3581
ERROR - 2016-12-06 20:38:43 --> 3582
ERROR - 2016-12-06 20:38:43 --> 3583
ERROR - 2016-12-06 20:38:43 --> 3584
ERROR - 2016-12-06 20:38:44 --> 3585
ERROR - 2016-12-06 20:38:44 --> 3586
ERROR - 2016-12-06 20:38:44 --> 3587
ERROR - 2016-12-06 20:38:44 --> 3588
ERROR - 2016-12-06 20:38:44 --> 3589
ERROR - 2016-12-06 20:38:44 --> 3590
ERROR - 2016-12-06 20:38:44 --> 3591
ERROR - 2016-12-06 20:38:44 --> 3592
ERROR - 2016-12-06 20:38:44 --> 3593
ERROR - 2016-12-06 20:38:44 --> 3594
ERROR - 2016-12-06 20:38:44 --> 3595
ERROR - 2016-12-06 20:38:44 --> 3596
ERROR - 2016-12-06 20:38:44 --> 3597
ERROR - 2016-12-06 20:38:44 --> 3598
ERROR - 2016-12-06 20:38:44 --> 3599
ERROR - 2016-12-06 20:38:44 --> 3600
ERROR - 2016-12-06 20:38:44 --> 3601
ERROR - 2016-12-06 20:38:44 --> 3602
ERROR - 2016-12-06 20:38:44 --> 3603
ERROR - 2016-12-06 20:38:44 --> 3604
ERROR - 2016-12-06 20:38:44 --> 3605
ERROR - 2016-12-06 20:38:44 --> 3606
ERROR - 2016-12-06 20:38:44 --> 3607
ERROR - 2016-12-06 20:38:44 --> 3608
ERROR - 2016-12-06 20:38:44 --> 3609
ERROR - 2016-12-06 20:38:44 --> 3610
ERROR - 2016-12-06 20:38:44 --> 3611
ERROR - 2016-12-06 20:38:44 --> 3612
ERROR - 2016-12-06 20:38:44 --> 3613
ERROR - 2016-12-06 20:38:44 --> 3614
ERROR - 2016-12-06 20:38:44 --> 3615
ERROR - 2016-12-06 20:38:44 --> 3616
ERROR - 2016-12-06 20:38:44 --> 3617
ERROR - 2016-12-06 20:38:44 --> 3618
ERROR - 2016-12-06 20:38:44 --> 3619
ERROR - 2016-12-06 20:38:44 --> 3620
ERROR - 2016-12-06 20:38:44 --> 3621
ERROR - 2016-12-06 20:38:44 --> 3622
ERROR - 2016-12-06 20:38:45 --> 3623
ERROR - 2016-12-06 20:38:45 --> 3624
ERROR - 2016-12-06 20:38:45 --> 3625
ERROR - 2016-12-06 20:38:45 --> 3626
ERROR - 2016-12-06 20:38:45 --> 3627
ERROR - 2016-12-06 20:38:45 --> 3628
ERROR - 2016-12-06 20:38:45 --> 3629
ERROR - 2016-12-06 20:38:45 --> 3630
ERROR - 2016-12-06 20:38:45 --> 3631
ERROR - 2016-12-06 20:38:45 --> 3632
ERROR - 2016-12-06 20:38:45 --> 3633
ERROR - 2016-12-06 20:38:45 --> 3634
ERROR - 2016-12-06 20:38:45 --> 3635
ERROR - 2016-12-06 20:38:45 --> 3636
ERROR - 2016-12-06 20:38:45 --> 3637
ERROR - 2016-12-06 20:38:45 --> 3638
ERROR - 2016-12-06 20:38:45 --> 3639
ERROR - 2016-12-06 20:38:45 --> 3640
ERROR - 2016-12-06 20:38:45 --> 3641
ERROR - 2016-12-06 20:38:45 --> 3642
ERROR - 2016-12-06 20:38:45 --> 3643
ERROR - 2016-12-06 20:38:45 --> 3644
ERROR - 2016-12-06 20:38:45 --> 3645
ERROR - 2016-12-06 20:38:45 --> 3646
ERROR - 2016-12-06 20:38:45 --> 3647
ERROR - 2016-12-06 20:38:45 --> 3648
ERROR - 2016-12-06 20:38:45 --> 3649
ERROR - 2016-12-06 20:38:45 --> 3650
ERROR - 2016-12-06 20:38:45 --> 3651
ERROR - 2016-12-06 20:38:45 --> 3652
ERROR - 2016-12-06 20:38:45 --> 3653
ERROR - 2016-12-06 20:38:45 --> 3654
ERROR - 2016-12-06 20:38:45 --> 3655
ERROR - 2016-12-06 20:38:45 --> 3656
ERROR - 2016-12-06 20:38:45 --> 3657
ERROR - 2016-12-06 20:38:45 --> 3658
ERROR - 2016-12-06 20:38:46 --> 3659
ERROR - 2016-12-06 20:38:46 --> 3660
ERROR - 2016-12-06 20:38:46 --> 3661
ERROR - 2016-12-06 20:38:46 --> 3662
ERROR - 2016-12-06 20:38:46 --> 3663
ERROR - 2016-12-06 20:38:46 --> 3664
ERROR - 2016-12-06 20:38:46 --> 3665
ERROR - 2016-12-06 20:38:46 --> 3666
ERROR - 2016-12-06 20:38:46 --> 3667
ERROR - 2016-12-06 20:38:46 --> 3668
ERROR - 2016-12-06 20:38:46 --> 3669
ERROR - 2016-12-06 20:38:46 --> 3670
ERROR - 2016-12-06 20:38:46 --> 3671
ERROR - 2016-12-06 20:38:46 --> 3672
ERROR - 2016-12-06 20:38:46 --> 3673
ERROR - 2016-12-06 20:38:46 --> 3674
ERROR - 2016-12-06 20:38:46 --> 3675
ERROR - 2016-12-06 20:38:46 --> 3676
ERROR - 2016-12-06 20:38:46 --> 3677
ERROR - 2016-12-06 20:38:46 --> 3678
ERROR - 2016-12-06 20:38:46 --> 3679
ERROR - 2016-12-06 20:38:46 --> 3680
ERROR - 2016-12-06 20:38:46 --> 3681
ERROR - 2016-12-06 20:38:46 --> 3682
ERROR - 2016-12-06 20:38:46 --> 3683
ERROR - 2016-12-06 20:38:46 --> 3684
ERROR - 2016-12-06 20:38:46 --> 3685
ERROR - 2016-12-06 20:38:46 --> 3686
ERROR - 2016-12-06 20:38:46 --> 3687
ERROR - 2016-12-06 20:38:46 --> 3688
ERROR - 2016-12-06 20:38:46 --> 3689
ERROR - 2016-12-06 20:38:46 --> 3690
ERROR - 2016-12-06 20:38:46 --> 3691
ERROR - 2016-12-06 20:38:46 --> 3692
ERROR - 2016-12-06 20:38:46 --> 3693
ERROR - 2016-12-06 20:38:46 --> 3694
ERROR - 2016-12-06 20:38:46 --> 3695
ERROR - 2016-12-06 20:38:46 --> 3696
ERROR - 2016-12-06 20:38:46 --> 3697
ERROR - 2016-12-06 20:38:47 --> 3698
ERROR - 2016-12-06 20:38:47 --> 3699
ERROR - 2016-12-06 20:38:47 --> 3700
ERROR - 2016-12-06 20:38:47 --> 3701
ERROR - 2016-12-06 20:38:47 --> 3702
ERROR - 2016-12-06 20:38:47 --> 3703
ERROR - 2016-12-06 20:38:47 --> 3704
ERROR - 2016-12-06 20:38:47 --> 3705
ERROR - 2016-12-06 20:38:47 --> 3706
ERROR - 2016-12-06 20:38:47 --> 3707
ERROR - 2016-12-06 20:38:47 --> 3708
ERROR - 2016-12-06 20:38:47 --> 3709
ERROR - 2016-12-06 20:38:47 --> 3710
ERROR - 2016-12-06 20:38:47 --> 3711
ERROR - 2016-12-06 20:38:47 --> 3712
ERROR - 2016-12-06 20:38:47 --> 3713
ERROR - 2016-12-06 20:38:47 --> 3714
ERROR - 2016-12-06 20:38:47 --> 3715
ERROR - 2016-12-06 20:38:47 --> 3716
ERROR - 2016-12-06 20:38:47 --> 3717
ERROR - 2016-12-06 20:38:47 --> 3718
ERROR - 2016-12-06 20:38:47 --> 3719
ERROR - 2016-12-06 20:38:47 --> 3720
ERROR - 2016-12-06 20:38:47 --> 3721
ERROR - 2016-12-06 20:38:47 --> 3722
ERROR - 2016-12-06 20:38:47 --> 3723
ERROR - 2016-12-06 20:38:47 --> 3724
ERROR - 2016-12-06 20:38:47 --> 3725
ERROR - 2016-12-06 20:38:47 --> 3726
ERROR - 2016-12-06 20:38:47 --> 3727
ERROR - 2016-12-06 20:38:47 --> 3728
ERROR - 2016-12-06 20:38:47 --> 3729
ERROR - 2016-12-06 20:38:47 --> 3730
ERROR - 2016-12-06 20:38:47 --> 3731
ERROR - 2016-12-06 20:38:47 --> 3732
ERROR - 2016-12-06 20:38:48 --> 3733
ERROR - 2016-12-06 20:38:48 --> 3734
ERROR - 2016-12-06 20:38:48 --> 3735
ERROR - 2016-12-06 20:38:48 --> 3736
ERROR - 2016-12-06 20:38:48 --> 3737
ERROR - 2016-12-06 20:38:48 --> 3738
ERROR - 2016-12-06 20:38:48 --> 3739
ERROR - 2016-12-06 20:38:48 --> 3740
ERROR - 2016-12-06 20:38:48 --> 3741
ERROR - 2016-12-06 20:38:48 --> 3742
ERROR - 2016-12-06 20:38:48 --> 3743
ERROR - 2016-12-06 20:38:48 --> 3744
ERROR - 2016-12-06 20:38:48 --> 3745
ERROR - 2016-12-06 20:38:48 --> 3746
ERROR - 2016-12-06 20:38:48 --> 3747
ERROR - 2016-12-06 20:38:48 --> 3748
ERROR - 2016-12-06 20:38:48 --> 3749
ERROR - 2016-12-06 20:38:48 --> 3750
ERROR - 2016-12-06 20:38:48 --> 3751
ERROR - 2016-12-06 20:38:48 --> 3752
ERROR - 2016-12-06 20:38:48 --> 3753
ERROR - 2016-12-06 20:38:48 --> 3754
ERROR - 2016-12-06 20:38:48 --> 3755
ERROR - 2016-12-06 20:38:48 --> 3756
ERROR - 2016-12-06 20:38:48 --> 3757
ERROR - 2016-12-06 20:38:48 --> 3758
ERROR - 2016-12-06 20:38:48 --> 3759
ERROR - 2016-12-06 20:38:48 --> 3760
ERROR - 2016-12-06 20:38:48 --> 3761
ERROR - 2016-12-06 20:38:48 --> 3762
ERROR - 2016-12-06 20:38:48 --> 3763
ERROR - 2016-12-06 20:38:48 --> 3764
ERROR - 2016-12-06 20:38:48 --> 3765
ERROR - 2016-12-06 20:38:48 --> 3766
ERROR - 2016-12-06 20:38:48 --> 3767
ERROR - 2016-12-06 20:38:48 --> 3768
ERROR - 2016-12-06 20:38:48 --> 3769
ERROR - 2016-12-06 20:38:49 --> 3770
ERROR - 2016-12-06 20:38:49 --> 3771
ERROR - 2016-12-06 20:38:49 --> 3772
ERROR - 2016-12-06 20:38:49 --> 3773
ERROR - 2016-12-06 20:38:49 --> 3774
ERROR - 2016-12-06 20:38:49 --> 3775
ERROR - 2016-12-06 20:38:49 --> 3776
ERROR - 2016-12-06 20:38:49 --> 3777
ERROR - 2016-12-06 20:38:49 --> 3778
ERROR - 2016-12-06 20:38:49 --> 3779
ERROR - 2016-12-06 20:38:49 --> 3780
ERROR - 2016-12-06 20:38:49 --> 3781
ERROR - 2016-12-06 20:38:49 --> 3782
ERROR - 2016-12-06 20:38:49 --> 3783
ERROR - 2016-12-06 20:38:49 --> 3784
ERROR - 2016-12-06 20:38:49 --> 3785
ERROR - 2016-12-06 20:38:49 --> 3786
ERROR - 2016-12-06 20:38:49 --> 3787
ERROR - 2016-12-06 20:38:49 --> 3788
ERROR - 2016-12-06 20:38:49 --> 3789
ERROR - 2016-12-06 20:38:49 --> 3790
ERROR - 2016-12-06 20:38:49 --> 3791
ERROR - 2016-12-06 20:38:49 --> 3792
ERROR - 2016-12-06 20:38:49 --> 3793
ERROR - 2016-12-06 20:38:49 --> 3794
ERROR - 2016-12-06 20:38:49 --> 3795
ERROR - 2016-12-06 20:38:49 --> 3796
ERROR - 2016-12-06 20:38:49 --> 3797
ERROR - 2016-12-06 20:38:49 --> 3798
ERROR - 2016-12-06 20:38:49 --> 3799
ERROR - 2016-12-06 20:38:49 --> 3800
ERROR - 2016-12-06 20:38:49 --> 3801
ERROR - 2016-12-06 20:38:49 --> 3802
ERROR - 2016-12-06 20:38:49 --> 3803
ERROR - 2016-12-06 20:38:50 --> 3804
ERROR - 2016-12-06 20:38:50 --> 3805
ERROR - 2016-12-06 20:38:50 --> 3806
ERROR - 2016-12-06 20:38:50 --> 3807
ERROR - 2016-12-06 20:38:50 --> 3808
ERROR - 2016-12-06 20:38:50 --> 3809
ERROR - 2016-12-06 20:38:50 --> 3810
ERROR - 2016-12-06 20:38:50 --> 3811
ERROR - 2016-12-06 20:38:50 --> 3812
ERROR - 2016-12-06 20:38:50 --> 3813
ERROR - 2016-12-06 20:38:50 --> 3814
ERROR - 2016-12-06 20:38:50 --> 3815
ERROR - 2016-12-06 20:38:50 --> 3816
ERROR - 2016-12-06 20:38:50 --> 3817
ERROR - 2016-12-06 20:38:50 --> 3818
ERROR - 2016-12-06 20:38:50 --> 3819
ERROR - 2016-12-06 20:38:50 --> 3820
ERROR - 2016-12-06 20:38:50 --> 3821
ERROR - 2016-12-06 20:38:50 --> 3822
ERROR - 2016-12-06 20:38:50 --> 3823
ERROR - 2016-12-06 20:38:50 --> 3824
ERROR - 2016-12-06 20:38:50 --> 3825
ERROR - 2016-12-06 20:38:50 --> 3826
ERROR - 2016-12-06 20:38:50 --> 3827
ERROR - 2016-12-06 20:38:50 --> 3828
ERROR - 2016-12-06 20:38:50 --> 3829
ERROR - 2016-12-06 20:38:50 --> 3830
ERROR - 2016-12-06 20:38:50 --> 3831
ERROR - 2016-12-06 20:38:50 --> 3832
ERROR - 2016-12-06 20:38:50 --> 3833
ERROR - 2016-12-06 20:38:50 --> 3834
ERROR - 2016-12-06 20:38:50 --> 3835
ERROR - 2016-12-06 20:38:50 --> 3836
ERROR - 2016-12-06 20:38:50 --> 3837
ERROR - 2016-12-06 20:38:50 --> 3838
ERROR - 2016-12-06 20:38:51 --> 3839
ERROR - 2016-12-06 20:38:51 --> 3840
ERROR - 2016-12-06 20:38:51 --> 3841
ERROR - 2016-12-06 20:38:51 --> 3842
ERROR - 2016-12-06 20:38:51 --> 3843
ERROR - 2016-12-06 20:38:51 --> 3844
ERROR - 2016-12-06 20:38:51 --> 3845
ERROR - 2016-12-06 20:38:51 --> 3846
ERROR - 2016-12-06 20:38:51 --> 3847
ERROR - 2016-12-06 20:38:51 --> 3848
ERROR - 2016-12-06 20:38:51 --> 3849
ERROR - 2016-12-06 20:38:51 --> 3850
ERROR - 2016-12-06 20:38:51 --> 3851
ERROR - 2016-12-06 20:38:51 --> 3852
ERROR - 2016-12-06 20:38:51 --> 3853
ERROR - 2016-12-06 20:38:51 --> 3854
ERROR - 2016-12-06 20:38:51 --> 3855
ERROR - 2016-12-06 20:38:51 --> 3856
ERROR - 2016-12-06 20:38:51 --> 3857
ERROR - 2016-12-06 20:38:51 --> 3858
ERROR - 2016-12-06 20:38:51 --> 3859
ERROR - 2016-12-06 20:38:51 --> 3860
ERROR - 2016-12-06 20:38:51 --> 3861
ERROR - 2016-12-06 20:38:51 --> 3862
ERROR - 2016-12-06 20:38:51 --> 3863
ERROR - 2016-12-06 20:38:51 --> 3864
ERROR - 2016-12-06 20:38:51 --> 3865
ERROR - 2016-12-06 20:38:51 --> 3866
ERROR - 2016-12-06 20:38:51 --> 3867
ERROR - 2016-12-06 20:38:51 --> 3868
ERROR - 2016-12-06 20:38:51 --> 3869
ERROR - 2016-12-06 20:38:51 --> 3870
ERROR - 2016-12-06 20:38:51 --> 3871
ERROR - 2016-12-06 20:38:51 --> 3872
ERROR - 2016-12-06 20:38:51 --> 3873
ERROR - 2016-12-06 20:38:51 --> 3874
ERROR - 2016-12-06 20:38:52 --> 3875
ERROR - 2016-12-06 20:38:52 --> 3876
ERROR - 2016-12-06 20:38:52 --> 3877
ERROR - 2016-12-06 20:38:52 --> 3878
ERROR - 2016-12-06 20:38:52 --> 3879
ERROR - 2016-12-06 20:38:52 --> 3880
ERROR - 2016-12-06 20:38:52 --> 3881
ERROR - 2016-12-06 20:38:52 --> 3882
ERROR - 2016-12-06 20:38:52 --> 3883
ERROR - 2016-12-06 20:38:52 --> 3884
ERROR - 2016-12-06 20:38:52 --> 3885
ERROR - 2016-12-06 20:38:52 --> 3886
ERROR - 2016-12-06 20:38:52 --> 3887
ERROR - 2016-12-06 20:38:52 --> 3888
ERROR - 2016-12-06 20:38:52 --> 3889
ERROR - 2016-12-06 20:38:52 --> 3890
ERROR - 2016-12-06 20:38:52 --> 3891
ERROR - 2016-12-06 20:38:52 --> 3892
ERROR - 2016-12-06 20:38:52 --> 3893
ERROR - 2016-12-06 20:38:52 --> 3894
ERROR - 2016-12-06 20:38:52 --> 3895
ERROR - 2016-12-06 20:38:52 --> 3896
ERROR - 2016-12-06 20:38:52 --> 3897
ERROR - 2016-12-06 20:38:52 --> 3898
ERROR - 2016-12-06 20:38:52 --> 3899
ERROR - 2016-12-06 20:38:52 --> 3900
ERROR - 2016-12-06 20:38:52 --> 3901
ERROR - 2016-12-06 20:38:52 --> 3902
ERROR - 2016-12-06 20:38:52 --> 3903
ERROR - 2016-12-06 20:38:52 --> 3904
ERROR - 2016-12-06 20:38:52 --> 3905
ERROR - 2016-12-06 20:38:52 --> 3906
ERROR - 2016-12-06 20:38:52 --> 3907
ERROR - 2016-12-06 20:38:52 --> 3908
ERROR - 2016-12-06 20:38:52 --> 3909
ERROR - 2016-12-06 20:38:53 --> 3910
ERROR - 2016-12-06 20:38:53 --> 3911
ERROR - 2016-12-06 20:38:53 --> 3912
ERROR - 2016-12-06 20:38:53 --> 3913
ERROR - 2016-12-06 20:38:53 --> 3914
ERROR - 2016-12-06 20:38:53 --> 3915
ERROR - 2016-12-06 20:38:53 --> 3916
ERROR - 2016-12-06 20:38:53 --> 3917
ERROR - 2016-12-06 20:38:53 --> 3918
ERROR - 2016-12-06 20:38:53 --> 3919
ERROR - 2016-12-06 20:38:53 --> 3920
ERROR - 2016-12-06 20:38:53 --> 3921
ERROR - 2016-12-06 20:38:53 --> 3922
ERROR - 2016-12-06 20:38:53 --> 3923
ERROR - 2016-12-06 20:38:53 --> 3924
ERROR - 2016-12-06 20:38:53 --> 3925
ERROR - 2016-12-06 20:38:53 --> 3926
ERROR - 2016-12-06 20:38:53 --> 3927
ERROR - 2016-12-06 20:38:53 --> 3928
ERROR - 2016-12-06 20:38:53 --> 3929
ERROR - 2016-12-06 20:38:53 --> 3930
ERROR - 2016-12-06 20:38:53 --> 3931
ERROR - 2016-12-06 20:38:53 --> 3932
ERROR - 2016-12-06 20:38:53 --> 3933
ERROR - 2016-12-06 20:38:53 --> 3934
ERROR - 2016-12-06 20:38:53 --> 3935
ERROR - 2016-12-06 20:38:53 --> 3936
ERROR - 2016-12-06 20:38:53 --> 3937
ERROR - 2016-12-06 20:38:53 --> 3938
ERROR - 2016-12-06 20:38:53 --> 3939
ERROR - 2016-12-06 20:38:53 --> 3940
ERROR - 2016-12-06 20:38:53 --> 3941
ERROR - 2016-12-06 20:38:53 --> 3942
ERROR - 2016-12-06 20:38:54 --> 3943
ERROR - 2016-12-06 20:38:54 --> 3944
ERROR - 2016-12-06 20:38:54 --> 3945
ERROR - 2016-12-06 20:38:54 --> 3946
ERROR - 2016-12-06 20:38:54 --> 3947
ERROR - 2016-12-06 20:38:54 --> 3948
ERROR - 2016-12-06 20:38:54 --> 3949
ERROR - 2016-12-06 20:38:54 --> 3950
ERROR - 2016-12-06 20:38:54 --> 3951
ERROR - 2016-12-06 20:38:54 --> 3952
ERROR - 2016-12-06 20:38:54 --> 3953
ERROR - 2016-12-06 20:38:54 --> 3954
ERROR - 2016-12-06 20:38:54 --> 3955
ERROR - 2016-12-06 20:38:54 --> 3956
ERROR - 2016-12-06 20:38:54 --> 3957
ERROR - 2016-12-06 20:38:54 --> 3958
ERROR - 2016-12-06 20:38:54 --> 3959
ERROR - 2016-12-06 20:38:54 --> 3960
ERROR - 2016-12-06 20:38:54 --> 3961
ERROR - 2016-12-06 20:38:54 --> 3962
ERROR - 2016-12-06 20:38:54 --> 3963
ERROR - 2016-12-06 20:38:54 --> 3964
ERROR - 2016-12-06 20:38:54 --> 3965
ERROR - 2016-12-06 20:38:54 --> 3966
ERROR - 2016-12-06 20:38:54 --> 3967
ERROR - 2016-12-06 20:38:54 --> 3968
ERROR - 2016-12-06 20:38:54 --> 3969
ERROR - 2016-12-06 20:38:54 --> 3970
ERROR - 2016-12-06 20:38:54 --> 3971
ERROR - 2016-12-06 20:38:54 --> 3972
ERROR - 2016-12-06 20:38:54 --> 3973
ERROR - 2016-12-06 20:38:54 --> 3974
ERROR - 2016-12-06 20:38:54 --> 3975
ERROR - 2016-12-06 20:38:54 --> 3976
ERROR - 2016-12-06 20:38:54 --> 3977
ERROR - 2016-12-06 20:38:54 --> 3978
ERROR - 2016-12-06 20:38:54 --> 3979
ERROR - 2016-12-06 20:38:54 --> 3980
ERROR - 2016-12-06 20:38:54 --> 3981
ERROR - 2016-12-06 20:38:54 --> 3982
ERROR - 2016-12-06 20:38:54 --> 3983
ERROR - 2016-12-06 20:38:55 --> 3984
ERROR - 2016-12-06 20:38:55 --> 3985
ERROR - 2016-12-06 20:38:55 --> 3986
ERROR - 2016-12-06 20:38:55 --> 3987
ERROR - 2016-12-06 20:38:55 --> 3988
ERROR - 2016-12-06 20:38:55 --> 3989
ERROR - 2016-12-06 20:38:55 --> 3990
ERROR - 2016-12-06 20:38:55 --> 3991
ERROR - 2016-12-06 20:38:55 --> 3992
ERROR - 2016-12-06 20:38:55 --> 3993
ERROR - 2016-12-06 20:38:55 --> 3994
ERROR - 2016-12-06 20:38:55 --> 3995
ERROR - 2016-12-06 20:38:55 --> 3996
ERROR - 2016-12-06 20:38:55 --> 3997
ERROR - 2016-12-06 20:38:55 --> 3998
ERROR - 2016-12-06 20:38:55 --> 3999
ERROR - 2016-12-06 20:38:55 --> 4000
ERROR - 2016-12-06 20:38:55 --> 4001
ERROR - 2016-12-06 20:38:55 --> 4002
ERROR - 2016-12-06 20:38:55 --> 4003
ERROR - 2016-12-06 20:38:55 --> 4004
ERROR - 2016-12-06 20:38:55 --> 4005
ERROR - 2016-12-06 20:38:55 --> 4006
ERROR - 2016-12-06 20:38:55 --> 4007
ERROR - 2016-12-06 20:38:55 --> 4008
ERROR - 2016-12-06 20:38:55 --> 4009
ERROR - 2016-12-06 20:38:55 --> 4010
ERROR - 2016-12-06 20:38:55 --> 4011
ERROR - 2016-12-06 20:38:55 --> 4012
ERROR - 2016-12-06 20:38:55 --> 4013
ERROR - 2016-12-06 20:38:55 --> 4014
ERROR - 2016-12-06 20:38:55 --> 4015
ERROR - 2016-12-06 20:38:55 --> 4016
ERROR - 2016-12-06 20:38:55 --> 4017
ERROR - 2016-12-06 20:38:55 --> 4018
ERROR - 2016-12-06 20:38:55 --> 4019
ERROR - 2016-12-06 20:38:55 --> 4020
ERROR - 2016-12-06 20:38:56 --> 4021
ERROR - 2016-12-06 20:38:56 --> 4022
ERROR - 2016-12-06 20:38:56 --> 4023
ERROR - 2016-12-06 20:38:56 --> 4024
ERROR - 2016-12-06 20:38:56 --> 4025
ERROR - 2016-12-06 20:38:56 --> 4026
ERROR - 2016-12-06 20:38:56 --> 4027
ERROR - 2016-12-06 20:38:56 --> 4028
ERROR - 2016-12-06 20:38:56 --> 4029
ERROR - 2016-12-06 20:38:56 --> 4030
ERROR - 2016-12-06 20:38:56 --> 4031
ERROR - 2016-12-06 20:38:56 --> 4032
ERROR - 2016-12-06 20:38:56 --> 4033
ERROR - 2016-12-06 20:38:56 --> 4034
ERROR - 2016-12-06 20:38:56 --> 4035
ERROR - 2016-12-06 20:38:56 --> 4036
ERROR - 2016-12-06 20:38:56 --> 4037
ERROR - 2016-12-06 20:38:56 --> 4038
ERROR - 2016-12-06 20:38:56 --> 4039
ERROR - 2016-12-06 20:38:56 --> 4040
ERROR - 2016-12-06 20:38:56 --> 4041
ERROR - 2016-12-06 20:38:56 --> 4042
ERROR - 2016-12-06 20:38:56 --> 4043
ERROR - 2016-12-06 20:38:56 --> 4044
ERROR - 2016-12-06 20:38:56 --> 4045
ERROR - 2016-12-06 20:38:56 --> 4046
ERROR - 2016-12-06 20:38:56 --> 4047
ERROR - 2016-12-06 20:38:56 --> 4048
ERROR - 2016-12-06 20:38:56 --> 4049
ERROR - 2016-12-06 20:38:56 --> 4050
ERROR - 2016-12-06 20:38:56 --> 4051
ERROR - 2016-12-06 20:38:56 --> 4052
ERROR - 2016-12-06 20:38:56 --> 4053
ERROR - 2016-12-06 20:38:57 --> 4054
ERROR - 2016-12-06 20:38:57 --> 4055
ERROR - 2016-12-06 20:38:57 --> 4056
ERROR - 2016-12-06 20:38:57 --> 4057
ERROR - 2016-12-06 20:38:57 --> 4058
ERROR - 2016-12-06 20:38:57 --> 4059
ERROR - 2016-12-06 20:38:57 --> 4060
ERROR - 2016-12-06 20:38:57 --> 4061
ERROR - 2016-12-06 20:38:57 --> 4062
ERROR - 2016-12-06 20:38:57 --> 4063
ERROR - 2016-12-06 20:38:57 --> 4064
ERROR - 2016-12-06 20:38:57 --> 4065
ERROR - 2016-12-06 20:38:57 --> 4066
ERROR - 2016-12-06 20:38:57 --> 4067
ERROR - 2016-12-06 20:38:57 --> 4068
ERROR - 2016-12-06 20:38:57 --> 4069
ERROR - 2016-12-06 20:38:57 --> 4070
ERROR - 2016-12-06 20:38:57 --> 4071
ERROR - 2016-12-06 20:38:57 --> 4072
ERROR - 2016-12-06 20:38:57 --> 4073
ERROR - 2016-12-06 20:38:57 --> 4074
ERROR - 2016-12-06 20:38:57 --> 4075
ERROR - 2016-12-06 20:38:57 --> 4076
ERROR - 2016-12-06 20:38:57 --> 4077
ERROR - 2016-12-06 20:38:57 --> 4078
ERROR - 2016-12-06 20:38:57 --> 4079
ERROR - 2016-12-06 20:38:57 --> 4080
ERROR - 2016-12-06 20:38:57 --> 4081
ERROR - 2016-12-06 20:38:57 --> 4082
ERROR - 2016-12-06 20:38:57 --> 4083
ERROR - 2016-12-06 20:38:57 --> 4084
ERROR - 2016-12-06 20:38:57 --> 4085
ERROR - 2016-12-06 20:38:57 --> 4086
ERROR - 2016-12-06 20:38:57 --> 4087
ERROR - 2016-12-06 20:38:57 --> 4088
ERROR - 2016-12-06 20:38:57 --> 4089
ERROR - 2016-12-06 20:38:57 --> 4090
ERROR - 2016-12-06 20:38:57 --> 4091
ERROR - 2016-12-06 20:38:58 --> 4092
ERROR - 2016-12-06 20:38:58 --> 4093
ERROR - 2016-12-06 20:38:58 --> 4094
ERROR - 2016-12-06 20:38:58 --> 4095
ERROR - 2016-12-06 20:38:58 --> 4096
ERROR - 2016-12-06 20:38:58 --> 4097
ERROR - 2016-12-06 20:38:58 --> 4098
ERROR - 2016-12-06 20:38:58 --> 4099
ERROR - 2016-12-06 20:38:58 --> 4100
ERROR - 2016-12-06 20:38:58 --> 4101
ERROR - 2016-12-06 20:38:58 --> 4102
ERROR - 2016-12-06 20:38:58 --> 4103
ERROR - 2016-12-06 20:38:58 --> 4104
ERROR - 2016-12-06 20:38:58 --> 4105
ERROR - 2016-12-06 20:38:58 --> 4106
ERROR - 2016-12-06 20:38:58 --> 4107
ERROR - 2016-12-06 20:38:58 --> 4108
ERROR - 2016-12-06 20:38:58 --> 4109
ERROR - 2016-12-06 20:38:58 --> 4110
ERROR - 2016-12-06 20:38:58 --> 4111
ERROR - 2016-12-06 20:38:58 --> 4112
ERROR - 2016-12-06 20:38:58 --> 4113
ERROR - 2016-12-06 20:38:58 --> 4114
ERROR - 2016-12-06 20:38:58 --> 4115
ERROR - 2016-12-06 20:38:58 --> 4116
ERROR - 2016-12-06 20:38:58 --> 4117
ERROR - 2016-12-06 20:38:58 --> 4118
ERROR - 2016-12-06 20:38:58 --> 4119
ERROR - 2016-12-06 20:38:58 --> 4120
ERROR - 2016-12-06 20:38:58 --> 4121
ERROR - 2016-12-06 20:38:58 --> 4122
ERROR - 2016-12-06 20:38:58 --> 4123
ERROR - 2016-12-06 20:38:58 --> 4124
ERROR - 2016-12-06 20:38:58 --> 4125
ERROR - 2016-12-06 20:38:58 --> 4126
ERROR - 2016-12-06 20:38:58 --> 4127
ERROR - 2016-12-06 20:38:58 --> 4128
ERROR - 2016-12-06 20:38:58 --> 4129
ERROR - 2016-12-06 20:38:58 --> 4130
ERROR - 2016-12-06 20:38:59 --> 4131
ERROR - 2016-12-06 20:38:59 --> 4132
ERROR - 2016-12-06 20:38:59 --> 4133
ERROR - 2016-12-06 20:38:59 --> 4134
ERROR - 2016-12-06 20:38:59 --> 4135
ERROR - 2016-12-06 20:38:59 --> 4136
ERROR - 2016-12-06 20:38:59 --> 4137
ERROR - 2016-12-06 20:38:59 --> 4138
ERROR - 2016-12-06 20:38:59 --> 4139
ERROR - 2016-12-06 20:38:59 --> 4140
ERROR - 2016-12-06 20:38:59 --> 4141
ERROR - 2016-12-06 20:38:59 --> 4142
ERROR - 2016-12-06 20:38:59 --> 4143
ERROR - 2016-12-06 20:38:59 --> 4144
ERROR - 2016-12-06 20:38:59 --> 4145
ERROR - 2016-12-06 20:38:59 --> 4146
ERROR - 2016-12-06 20:38:59 --> 4147
ERROR - 2016-12-06 20:38:59 --> 4148
ERROR - 2016-12-06 20:38:59 --> 4149
ERROR - 2016-12-06 20:38:59 --> 4150
ERROR - 2016-12-06 20:38:59 --> 4151
ERROR - 2016-12-06 20:38:59 --> 4152
ERROR - 2016-12-06 20:38:59 --> 4153
ERROR - 2016-12-06 20:38:59 --> 4154
ERROR - 2016-12-06 20:38:59 --> 4155
ERROR - 2016-12-06 20:38:59 --> 4156
ERROR - 2016-12-06 20:38:59 --> 4157
ERROR - 2016-12-06 20:38:59 --> 4158
ERROR - 2016-12-06 20:38:59 --> 4159
ERROR - 2016-12-06 20:38:59 --> 4160
ERROR - 2016-12-06 20:38:59 --> 4161
ERROR - 2016-12-06 20:39:00 --> 4162
ERROR - 2016-12-06 20:39:00 --> 4163
ERROR - 2016-12-06 20:39:00 --> 4164
ERROR - 2016-12-06 20:39:00 --> 4165
ERROR - 2016-12-06 20:39:00 --> 4166
ERROR - 2016-12-06 20:39:00 --> 4167
ERROR - 2016-12-06 20:39:00 --> 4168
ERROR - 2016-12-06 20:39:00 --> 4169
ERROR - 2016-12-06 20:39:00 --> 4170
ERROR - 2016-12-06 20:39:00 --> 4171
ERROR - 2016-12-06 20:39:00 --> 4172
ERROR - 2016-12-06 20:39:00 --> 4173
ERROR - 2016-12-06 20:39:00 --> 4174
ERROR - 2016-12-06 20:39:00 --> 4175
ERROR - 2016-12-06 20:39:00 --> 4176
ERROR - 2016-12-06 20:39:00 --> 4177
ERROR - 2016-12-06 20:39:00 --> 4178
ERROR - 2016-12-06 20:39:00 --> 4179
ERROR - 2016-12-06 20:39:00 --> 4180
ERROR - 2016-12-06 20:39:00 --> 4181
ERROR - 2016-12-06 20:39:00 --> 4182
ERROR - 2016-12-06 20:39:00 --> 4183
ERROR - 2016-12-06 20:39:00 --> 4184
ERROR - 2016-12-06 20:39:00 --> 4185
ERROR - 2016-12-06 20:39:00 --> 4186
ERROR - 2016-12-06 20:39:00 --> 4187
ERROR - 2016-12-06 20:39:00 --> 4188
ERROR - 2016-12-06 20:39:00 --> 4189
ERROR - 2016-12-06 20:39:00 --> 4190
ERROR - 2016-12-06 20:39:00 --> 4191
ERROR - 2016-12-06 20:39:00 --> 4192
ERROR - 2016-12-06 20:39:00 --> 4193
ERROR - 2016-12-06 20:39:00 --> 4194
ERROR - 2016-12-06 20:39:00 --> 4195
ERROR - 2016-12-06 20:39:00 --> 4196
ERROR - 2016-12-06 20:39:01 --> 4197
ERROR - 2016-12-06 20:39:01 --> 4198
ERROR - 2016-12-06 20:39:01 --> 4199
ERROR - 2016-12-06 20:39:01 --> 4200
ERROR - 2016-12-06 20:39:01 --> 4201
ERROR - 2016-12-06 20:39:01 --> 4202
ERROR - 2016-12-06 20:39:01 --> 4203
ERROR - 2016-12-06 20:39:01 --> 4204
ERROR - 2016-12-06 20:39:01 --> 4205
ERROR - 2016-12-06 20:39:01 --> 4206
ERROR - 2016-12-06 20:39:01 --> 4207
ERROR - 2016-12-06 20:39:01 --> 4208
ERROR - 2016-12-06 20:39:01 --> 4209
ERROR - 2016-12-06 20:39:01 --> 4210
ERROR - 2016-12-06 20:39:01 --> 4211
ERROR - 2016-12-06 20:39:01 --> 4212
ERROR - 2016-12-06 20:39:01 --> 4213
ERROR - 2016-12-06 20:39:01 --> 4214
ERROR - 2016-12-06 20:39:01 --> 4215
ERROR - 2016-12-06 20:39:01 --> 4216
ERROR - 2016-12-06 20:39:01 --> 4217
ERROR - 2016-12-06 20:39:01 --> 4218
ERROR - 2016-12-06 20:39:01 --> 4219
ERROR - 2016-12-06 20:39:01 --> 4220
ERROR - 2016-12-06 20:39:01 --> 4221
ERROR - 2016-12-06 20:39:01 --> 4222
ERROR - 2016-12-06 20:39:01 --> 4223
ERROR - 2016-12-06 20:39:01 --> 4224
ERROR - 2016-12-06 20:39:01 --> 4225
ERROR - 2016-12-06 20:39:01 --> 4226
ERROR - 2016-12-06 20:39:01 --> 4227
ERROR - 2016-12-06 20:39:01 --> 4228
ERROR - 2016-12-06 20:39:01 --> 4229
ERROR - 2016-12-06 20:39:01 --> 4230
ERROR - 2016-12-06 20:39:01 --> 4231
ERROR - 2016-12-06 20:39:01 --> 4232
ERROR - 2016-12-06 20:39:01 --> 4233
ERROR - 2016-12-06 20:39:01 --> 4234
ERROR - 2016-12-06 20:39:02 --> 4235
ERROR - 2016-12-06 20:39:02 --> 4236
ERROR - 2016-12-06 20:39:02 --> 4237
ERROR - 2016-12-06 20:39:02 --> 4238
ERROR - 2016-12-06 20:39:02 --> 4239
ERROR - 2016-12-06 20:39:02 --> 4240
ERROR - 2016-12-06 20:39:02 --> 4241
ERROR - 2016-12-06 20:39:02 --> 4242
ERROR - 2016-12-06 20:39:02 --> 4243
ERROR - 2016-12-06 20:39:02 --> 4244
ERROR - 2016-12-06 20:39:02 --> 4245
ERROR - 2016-12-06 20:39:02 --> 4246
ERROR - 2016-12-06 20:39:02 --> 4247
ERROR - 2016-12-06 20:39:02 --> 4248
ERROR - 2016-12-06 20:39:02 --> 4249
ERROR - 2016-12-06 20:39:02 --> 4250
ERROR - 2016-12-06 20:39:02 --> 4251
ERROR - 2016-12-06 20:39:02 --> 4252
ERROR - 2016-12-06 20:39:02 --> 4253
ERROR - 2016-12-06 20:39:02 --> 4254
ERROR - 2016-12-06 20:39:02 --> 4255
ERROR - 2016-12-06 20:39:02 --> 4256
ERROR - 2016-12-06 20:39:02 --> 4257
ERROR - 2016-12-06 20:39:02 --> 4258
ERROR - 2016-12-06 20:39:02 --> 4259
ERROR - 2016-12-06 20:39:02 --> 4260
ERROR - 2016-12-06 20:39:02 --> 4261
ERROR - 2016-12-06 20:39:02 --> 4262
ERROR - 2016-12-06 20:39:02 --> 4263
ERROR - 2016-12-06 20:39:02 --> 4264
ERROR - 2016-12-06 20:39:02 --> 4265
ERROR - 2016-12-06 20:39:02 --> 4266
ERROR - 2016-12-06 20:39:02 --> 4267
ERROR - 2016-12-06 20:39:02 --> 4268
ERROR - 2016-12-06 20:39:02 --> 4269
ERROR - 2016-12-06 20:39:02 --> 4270
ERROR - 2016-12-06 20:39:03 --> 4271
ERROR - 2016-12-06 20:39:03 --> 4272
ERROR - 2016-12-06 20:39:03 --> 4273
ERROR - 2016-12-06 20:39:03 --> 4274
ERROR - 2016-12-06 20:39:03 --> 4275
ERROR - 2016-12-06 20:39:03 --> 4276
ERROR - 2016-12-06 20:39:03 --> 4277
ERROR - 2016-12-06 20:39:03 --> 4278
ERROR - 2016-12-06 20:39:03 --> 4279
ERROR - 2016-12-06 20:39:03 --> 4280
ERROR - 2016-12-06 20:39:03 --> 4281
ERROR - 2016-12-06 20:39:03 --> 4282
ERROR - 2016-12-06 20:39:03 --> 4283
ERROR - 2016-12-06 20:39:03 --> 4284
ERROR - 2016-12-06 20:39:03 --> 4285
ERROR - 2016-12-06 20:39:03 --> 4286
ERROR - 2016-12-06 20:39:03 --> 4287
ERROR - 2016-12-06 20:39:03 --> 4288
ERROR - 2016-12-06 20:39:03 --> 4289
ERROR - 2016-12-06 20:39:03 --> 4290
ERROR - 2016-12-06 20:39:03 --> 4291
ERROR - 2016-12-06 20:39:03 --> 4292
ERROR - 2016-12-06 20:39:03 --> 4293
ERROR - 2016-12-06 20:39:03 --> 4294
ERROR - 2016-12-06 20:39:03 --> 4295
ERROR - 2016-12-06 20:39:03 --> 4296
ERROR - 2016-12-06 20:39:03 --> 4297
ERROR - 2016-12-06 20:39:03 --> 4298
ERROR - 2016-12-06 20:39:03 --> 4299
ERROR - 2016-12-06 20:39:03 --> 4300
ERROR - 2016-12-06 20:39:03 --> 4301
ERROR - 2016-12-06 20:39:03 --> 4302
ERROR - 2016-12-06 20:39:03 --> 4303
ERROR - 2016-12-06 20:39:03 --> 4304
ERROR - 2016-12-06 20:39:03 --> 4305
ERROR - 2016-12-06 20:39:04 --> 4306
ERROR - 2016-12-06 20:39:04 --> 4307
ERROR - 2016-12-06 20:39:04 --> 4308
ERROR - 2016-12-06 20:39:04 --> 4309
ERROR - 2016-12-06 20:39:04 --> 4310
ERROR - 2016-12-06 20:39:04 --> 4311
ERROR - 2016-12-06 20:39:04 --> 4312
ERROR - 2016-12-06 20:39:04 --> 4313
ERROR - 2016-12-06 20:39:04 --> 4314
ERROR - 2016-12-06 20:39:04 --> 4315
ERROR - 2016-12-06 20:39:04 --> 4316
ERROR - 2016-12-06 20:39:04 --> 4317
ERROR - 2016-12-06 20:39:04 --> 4318
ERROR - 2016-12-06 20:39:04 --> 4319
ERROR - 2016-12-06 20:39:04 --> 4320
ERROR - 2016-12-06 20:39:04 --> 4321
ERROR - 2016-12-06 20:39:04 --> 4322
ERROR - 2016-12-06 20:39:04 --> 4323
ERROR - 2016-12-06 20:39:04 --> 4324
ERROR - 2016-12-06 20:39:04 --> 4325
ERROR - 2016-12-06 20:39:04 --> 4326
ERROR - 2016-12-06 20:39:04 --> 4327
ERROR - 2016-12-06 20:39:04 --> 4328
ERROR - 2016-12-06 20:39:04 --> 4329
ERROR - 2016-12-06 20:39:04 --> 4330
ERROR - 2016-12-06 20:39:04 --> 4331
ERROR - 2016-12-06 20:39:04 --> 4332
ERROR - 2016-12-06 20:39:04 --> 4333
ERROR - 2016-12-06 20:39:04 --> 4334
ERROR - 2016-12-06 20:39:04 --> 4335
ERROR - 2016-12-06 20:39:04 --> 4336
ERROR - 2016-12-06 20:39:04 --> 4337
ERROR - 2016-12-06 20:39:04 --> 4338
ERROR - 2016-12-06 20:39:05 --> 4339
ERROR - 2016-12-06 20:39:05 --> 4340
ERROR - 2016-12-06 20:39:05 --> 4341
ERROR - 2016-12-06 20:39:05 --> 4342
ERROR - 2016-12-06 20:39:05 --> 4343
ERROR - 2016-12-06 20:39:05 --> 4344
ERROR - 2016-12-06 20:39:05 --> 4345
ERROR - 2016-12-06 20:39:05 --> 4346
ERROR - 2016-12-06 20:39:05 --> 4347
ERROR - 2016-12-06 20:39:05 --> 4348
ERROR - 2016-12-06 20:39:05 --> 4349
ERROR - 2016-12-06 20:39:05 --> 4350
ERROR - 2016-12-06 20:39:05 --> 4351
ERROR - 2016-12-06 20:39:05 --> 4352
ERROR - 2016-12-06 20:39:05 --> 4353
ERROR - 2016-12-06 20:39:05 --> 4354
ERROR - 2016-12-06 20:39:05 --> 4355
ERROR - 2016-12-06 20:39:05 --> 4356
ERROR - 2016-12-06 20:39:05 --> 4357
ERROR - 2016-12-06 20:39:05 --> 4358
ERROR - 2016-12-06 20:39:05 --> 4359
ERROR - 2016-12-06 20:39:05 --> 4360
ERROR - 2016-12-06 20:39:05 --> 4361
ERROR - 2016-12-06 20:39:05 --> 4362
ERROR - 2016-12-06 20:39:05 --> 4363
ERROR - 2016-12-06 20:39:05 --> 4364
ERROR - 2016-12-06 20:39:05 --> 4365
ERROR - 2016-12-06 20:39:05 --> 4366
ERROR - 2016-12-06 20:39:05 --> 4367
ERROR - 2016-12-06 20:39:05 --> 4368
ERROR - 2016-12-06 20:39:05 --> 4369
ERROR - 2016-12-06 20:39:05 --> 4370
ERROR - 2016-12-06 20:39:05 --> 4371
ERROR - 2016-12-06 20:39:05 --> 4372
ERROR - 2016-12-06 20:39:05 --> 4373
ERROR - 2016-12-06 20:39:06 --> 4374
ERROR - 2016-12-06 20:39:06 --> 4375
ERROR - 2016-12-06 20:39:06 --> 4376
ERROR - 2016-12-06 20:39:06 --> 4377
ERROR - 2016-12-06 20:39:06 --> 4378
ERROR - 2016-12-06 20:39:06 --> 4379
ERROR - 2016-12-06 20:39:06 --> 4380
ERROR - 2016-12-06 20:39:06 --> 4381
ERROR - 2016-12-06 20:39:06 --> 4382
ERROR - 2016-12-06 20:39:06 --> 4383
ERROR - 2016-12-06 20:39:06 --> 4384
ERROR - 2016-12-06 20:39:06 --> 4385
ERROR - 2016-12-06 20:39:06 --> 4386
ERROR - 2016-12-06 20:39:06 --> 4387
ERROR - 2016-12-06 20:39:06 --> 4388
ERROR - 2016-12-06 20:39:06 --> 4389
ERROR - 2016-12-06 20:39:06 --> 4390
ERROR - 2016-12-06 20:39:06 --> 4391
ERROR - 2016-12-06 20:39:06 --> 4392
ERROR - 2016-12-06 20:39:06 --> 4393
ERROR - 2016-12-06 20:39:06 --> 4394
ERROR - 2016-12-06 20:39:06 --> 4395
ERROR - 2016-12-06 20:39:06 --> 4396
ERROR - 2016-12-06 20:39:06 --> 4397
ERROR - 2016-12-06 20:39:06 --> 4398
ERROR - 2016-12-06 20:39:06 --> 4399
ERROR - 2016-12-06 20:39:06 --> 4400
ERROR - 2016-12-06 20:39:06 --> 4401
ERROR - 2016-12-06 20:39:06 --> 4402
ERROR - 2016-12-06 20:39:06 --> 4403
ERROR - 2016-12-06 20:39:06 --> 4404
ERROR - 2016-12-06 20:39:06 --> 4405
ERROR - 2016-12-06 20:39:06 --> 4406
ERROR - 2016-12-06 20:39:06 --> 4407
ERROR - 2016-12-06 20:39:06 --> 4408
ERROR - 2016-12-06 20:39:06 --> 4409
ERROR - 2016-12-06 20:39:06 --> 4410
ERROR - 2016-12-06 20:39:06 --> 4411
ERROR - 2016-12-06 20:39:07 --> 4412
ERROR - 2016-12-06 20:39:07 --> 4413
ERROR - 2016-12-06 20:39:07 --> 4414
ERROR - 2016-12-06 20:39:07 --> 4415
ERROR - 2016-12-06 20:39:07 --> 4416
ERROR - 2016-12-06 20:39:07 --> 4417
ERROR - 2016-12-06 20:39:07 --> 4418
ERROR - 2016-12-06 20:39:07 --> 4419
ERROR - 2016-12-06 20:39:07 --> 4420
ERROR - 2016-12-06 20:39:07 --> 4421
ERROR - 2016-12-06 20:39:07 --> 4422
ERROR - 2016-12-06 20:39:07 --> 4423
ERROR - 2016-12-06 20:39:07 --> 4424
ERROR - 2016-12-06 20:39:07 --> 4425
ERROR - 2016-12-06 20:39:07 --> 4426
ERROR - 2016-12-06 20:39:07 --> 4427
ERROR - 2016-12-06 20:39:07 --> 4428
ERROR - 2016-12-06 20:39:07 --> 4429
ERROR - 2016-12-06 20:39:07 --> 4430
ERROR - 2016-12-06 20:39:07 --> 4431
ERROR - 2016-12-06 20:39:07 --> 4432
ERROR - 2016-12-06 20:39:07 --> 4433
ERROR - 2016-12-06 20:39:07 --> 4434
ERROR - 2016-12-06 20:39:07 --> 4435
ERROR - 2016-12-06 20:39:07 --> 4436
ERROR - 2016-12-06 20:39:07 --> 4437
ERROR - 2016-12-06 20:39:07 --> 4438
ERROR - 2016-12-06 20:39:07 --> 4439
ERROR - 2016-12-06 20:39:07 --> 4440
ERROR - 2016-12-06 20:39:07 --> 4441
ERROR - 2016-12-06 20:39:07 --> 4442
ERROR - 2016-12-06 20:39:07 --> 4443
ERROR - 2016-12-06 20:39:07 --> 4444
ERROR - 2016-12-06 20:39:07 --> 4445
ERROR - 2016-12-06 20:39:07 --> 4446
ERROR - 2016-12-06 20:39:08 --> 4447
ERROR - 2016-12-06 20:39:08 --> 4448
ERROR - 2016-12-06 20:39:08 --> 4449
ERROR - 2016-12-06 20:39:08 --> 4450
ERROR - 2016-12-06 20:39:08 --> 4451
ERROR - 2016-12-06 20:39:08 --> 4452
ERROR - 2016-12-06 20:39:08 --> 4453
ERROR - 2016-12-06 20:39:08 --> 4454
ERROR - 2016-12-06 20:39:08 --> 4455
ERROR - 2016-12-06 20:39:08 --> 4456
ERROR - 2016-12-06 20:39:08 --> 4457
ERROR - 2016-12-06 20:39:08 --> 4458
ERROR - 2016-12-06 20:39:08 --> 4459
ERROR - 2016-12-06 20:39:08 --> 4460
ERROR - 2016-12-06 20:39:08 --> 4461
ERROR - 2016-12-06 20:39:08 --> 4462
ERROR - 2016-12-06 20:39:08 --> 4463
ERROR - 2016-12-06 20:39:08 --> 4464
ERROR - 2016-12-06 20:39:08 --> 4465
ERROR - 2016-12-06 20:39:08 --> 4466
ERROR - 2016-12-06 20:39:08 --> 4467
ERROR - 2016-12-06 20:39:08 --> 4468
ERROR - 2016-12-06 20:39:08 --> 4469
ERROR - 2016-12-06 20:39:08 --> 4470
ERROR - 2016-12-06 20:39:08 --> 4471
ERROR - 2016-12-06 20:39:08 --> 4472
ERROR - 2016-12-06 20:39:08 --> 4473
ERROR - 2016-12-06 20:39:08 --> 4474
ERROR - 2016-12-06 20:39:08 --> 4475
ERROR - 2016-12-06 20:39:08 --> 4476
ERROR - 2016-12-06 20:39:08 --> 4477
ERROR - 2016-12-06 20:39:08 --> 4478
ERROR - 2016-12-06 20:39:08 --> 4479
ERROR - 2016-12-06 20:39:08 --> 4480
ERROR - 2016-12-06 20:39:08 --> 4481
ERROR - 2016-12-06 20:39:08 --> 4482
ERROR - 2016-12-06 20:39:08 --> 4483
ERROR - 2016-12-06 20:39:09 --> 4484
ERROR - 2016-12-06 20:39:09 --> 4485
ERROR - 2016-12-06 20:39:09 --> 4486
ERROR - 2016-12-06 20:39:09 --> 4487
ERROR - 2016-12-06 20:39:09 --> 4488
ERROR - 2016-12-06 20:39:09 --> 4489
ERROR - 2016-12-06 20:39:09 --> 4490
ERROR - 2016-12-06 20:39:09 --> 4491
ERROR - 2016-12-06 20:39:09 --> 4492
ERROR - 2016-12-06 20:39:09 --> 4493
ERROR - 2016-12-06 20:39:09 --> 4494
ERROR - 2016-12-06 20:39:09 --> 4495
ERROR - 2016-12-06 20:39:09 --> 4496
ERROR - 2016-12-06 20:39:09 --> 4497
ERROR - 2016-12-06 20:39:09 --> 4498
ERROR - 2016-12-06 20:39:09 --> 4499
ERROR - 2016-12-06 20:39:09 --> 4500
ERROR - 2016-12-06 20:39:09 --> 4501
ERROR - 2016-12-06 20:39:09 --> 4502
ERROR - 2016-12-06 20:39:09 --> 4503
ERROR - 2016-12-06 20:39:09 --> 4504
ERROR - 2016-12-06 20:39:09 --> 4505
ERROR - 2016-12-06 20:39:09 --> 4506
ERROR - 2016-12-06 20:39:09 --> 4507
ERROR - 2016-12-06 20:39:09 --> 4508
ERROR - 2016-12-06 20:39:09 --> 4509
ERROR - 2016-12-06 20:39:09 --> 4510
ERROR - 2016-12-06 20:39:09 --> 4511
ERROR - 2016-12-06 20:39:09 --> 4512
ERROR - 2016-12-06 20:39:09 --> 4513
ERROR - 2016-12-06 20:39:09 --> 4514
ERROR - 2016-12-06 20:39:09 --> 4515
ERROR - 2016-12-06 20:39:09 --> 4516
ERROR - 2016-12-06 20:39:09 --> 4517
ERROR - 2016-12-06 20:39:09 --> 4518
ERROR - 2016-12-06 20:39:09 --> 4519
ERROR - 2016-12-06 20:39:09 --> 4520
ERROR - 2016-12-06 20:39:09 --> 4521
ERROR - 2016-12-06 20:39:10 --> 4522
ERROR - 2016-12-06 20:39:10 --> 4523
ERROR - 2016-12-06 20:39:10 --> 4524
ERROR - 2016-12-06 20:39:10 --> 4525
ERROR - 2016-12-06 20:39:10 --> 4526
ERROR - 2016-12-06 20:39:10 --> 4527
ERROR - 2016-12-06 20:39:10 --> 4528
ERROR - 2016-12-06 20:39:10 --> 4529
ERROR - 2016-12-06 20:39:10 --> 4530
ERROR - 2016-12-06 20:39:10 --> 4531
ERROR - 2016-12-06 20:39:10 --> 4532
ERROR - 2016-12-06 20:39:10 --> 4533
ERROR - 2016-12-06 20:39:10 --> 4534
ERROR - 2016-12-06 20:39:10 --> 4535
ERROR - 2016-12-06 20:39:10 --> 4536
ERROR - 2016-12-06 20:39:10 --> 4537
ERROR - 2016-12-06 20:39:10 --> 4538
ERROR - 2016-12-06 20:39:10 --> 4539
ERROR - 2016-12-06 20:39:10 --> 4540
ERROR - 2016-12-06 20:39:10 --> 4541
ERROR - 2016-12-06 20:39:10 --> 4542
ERROR - 2016-12-06 20:39:10 --> 4543
ERROR - 2016-12-06 20:39:10 --> 4544
ERROR - 2016-12-06 20:39:10 --> 4545
ERROR - 2016-12-06 20:39:10 --> 4546
ERROR - 2016-12-06 20:39:10 --> 4547
ERROR - 2016-12-06 20:39:10 --> 4548
ERROR - 2016-12-06 20:39:10 --> 4549
ERROR - 2016-12-06 20:39:10 --> 4550
ERROR - 2016-12-06 20:39:10 --> 4551
ERROR - 2016-12-06 20:39:10 --> 4552
ERROR - 2016-12-06 20:39:10 --> 4553
ERROR - 2016-12-06 20:39:10 --> 4554
ERROR - 2016-12-06 20:39:10 --> 4555
ERROR - 2016-12-06 20:39:10 --> 4556
ERROR - 2016-12-06 20:39:10 --> 4557
ERROR - 2016-12-06 20:39:10 --> 4558
ERROR - 2016-12-06 20:39:10 --> 4559
ERROR - 2016-12-06 20:39:10 --> 4560
ERROR - 2016-12-06 20:39:11 --> 4561
ERROR - 2016-12-06 20:39:11 --> 4562
ERROR - 2016-12-06 20:39:11 --> 4563
ERROR - 2016-12-06 20:39:11 --> 4564
ERROR - 2016-12-06 20:39:11 --> 4565
ERROR - 2016-12-06 20:39:11 --> 4566
ERROR - 2016-12-06 20:39:11 --> 4567
ERROR - 2016-12-06 20:39:11 --> 4568
ERROR - 2016-12-06 20:39:11 --> 4569
ERROR - 2016-12-06 20:39:11 --> 4570
ERROR - 2016-12-06 20:39:11 --> 4571
ERROR - 2016-12-06 20:39:11 --> 4572
ERROR - 2016-12-06 20:39:11 --> 4573
ERROR - 2016-12-06 20:39:11 --> 4574
ERROR - 2016-12-06 20:39:11 --> 4575
ERROR - 2016-12-06 20:39:11 --> 4576
ERROR - 2016-12-06 20:39:11 --> 4577
ERROR - 2016-12-06 20:39:11 --> 4578
ERROR - 2016-12-06 20:39:11 --> 4579
ERROR - 2016-12-06 20:39:11 --> 4580
ERROR - 2016-12-06 20:39:11 --> 4581
ERROR - 2016-12-06 20:39:11 --> 4582
ERROR - 2016-12-06 20:39:11 --> 4583
ERROR - 2016-12-06 20:39:11 --> 4584
ERROR - 2016-12-06 20:39:11 --> 4585
ERROR - 2016-12-06 20:39:11 --> 4586
ERROR - 2016-12-06 20:39:11 --> 4587
ERROR - 2016-12-06 20:39:11 --> 4588
ERROR - 2016-12-06 20:39:11 --> 4589
ERROR - 2016-12-06 20:39:11 --> 4590
ERROR - 2016-12-06 20:39:11 --> 4591
ERROR - 2016-12-06 20:39:11 --> 4592
ERROR - 2016-12-06 20:39:11 --> 4593
ERROR - 2016-12-06 20:39:11 --> 4594
ERROR - 2016-12-06 20:39:12 --> 4595
ERROR - 2016-12-06 20:39:12 --> 4596
ERROR - 2016-12-06 20:39:12 --> 4597
ERROR - 2016-12-06 20:39:12 --> 4598
ERROR - 2016-12-06 20:39:12 --> 4599
ERROR - 2016-12-06 20:39:12 --> 4600
ERROR - 2016-12-06 20:39:12 --> 4601
ERROR - 2016-12-06 20:39:12 --> 4602
ERROR - 2016-12-06 20:39:12 --> 4603
ERROR - 2016-12-06 20:39:12 --> 4604
ERROR - 2016-12-06 20:39:12 --> 4605
ERROR - 2016-12-06 20:39:12 --> 4606
ERROR - 2016-12-06 20:39:12 --> 4607
ERROR - 2016-12-06 20:39:12 --> 4608
ERROR - 2016-12-06 20:39:12 --> 4609
ERROR - 2016-12-06 20:39:12 --> 4610
ERROR - 2016-12-06 20:39:12 --> 4611
ERROR - 2016-12-06 20:39:12 --> 4612
ERROR - 2016-12-06 20:39:12 --> 4613
ERROR - 2016-12-06 20:39:12 --> 4614
ERROR - 2016-12-06 20:39:12 --> 4615
ERROR - 2016-12-06 20:39:12 --> 4616
ERROR - 2016-12-06 20:39:12 --> 4617
ERROR - 2016-12-06 20:39:12 --> 4618
ERROR - 2016-12-06 20:39:12 --> 4619
ERROR - 2016-12-06 20:39:12 --> 4620
ERROR - 2016-12-06 20:39:12 --> 4621
ERROR - 2016-12-06 20:39:12 --> 4622
ERROR - 2016-12-06 20:39:12 --> 4623
ERROR - 2016-12-06 20:39:12 --> 4624
ERROR - 2016-12-06 20:39:12 --> 4625
ERROR - 2016-12-06 20:39:12 --> 4626
ERROR - 2016-12-06 20:39:12 --> 4627
ERROR - 2016-12-06 20:39:12 --> 4628
ERROR - 2016-12-06 20:39:13 --> 4629
ERROR - 2016-12-06 20:39:13 --> 4630
ERROR - 2016-12-06 20:39:13 --> 4631
ERROR - 2016-12-06 20:39:13 --> 4632
ERROR - 2016-12-06 20:39:13 --> 4633
ERROR - 2016-12-06 20:39:13 --> 4634
ERROR - 2016-12-06 20:39:13 --> 4635
ERROR - 2016-12-06 20:39:13 --> 4636
ERROR - 2016-12-06 20:39:13 --> 4637
ERROR - 2016-12-06 20:39:13 --> 4638
ERROR - 2016-12-06 20:39:13 --> 4639
ERROR - 2016-12-06 20:39:13 --> 4640
ERROR - 2016-12-06 20:39:13 --> 4641
ERROR - 2016-12-06 20:39:13 --> 4642
ERROR - 2016-12-06 20:39:13 --> 4643
ERROR - 2016-12-06 20:39:13 --> 4644
ERROR - 2016-12-06 20:39:13 --> 4645
ERROR - 2016-12-06 20:39:13 --> 4646
ERROR - 2016-12-06 20:39:13 --> 4647
ERROR - 2016-12-06 20:39:13 --> 4648
ERROR - 2016-12-06 20:39:13 --> 4649
ERROR - 2016-12-06 20:39:13 --> 4650
ERROR - 2016-12-06 20:39:13 --> 4651
ERROR - 2016-12-06 20:39:13 --> 4652
ERROR - 2016-12-06 20:39:13 --> 4653
ERROR - 2016-12-06 20:39:13 --> 4654
ERROR - 2016-12-06 20:39:13 --> 4655
ERROR - 2016-12-06 20:39:13 --> 4656
ERROR - 2016-12-06 20:39:13 --> 4657
ERROR - 2016-12-06 20:39:13 --> 4658
ERROR - 2016-12-06 20:39:13 --> 4659
ERROR - 2016-12-06 20:39:13 --> 4660
ERROR - 2016-12-06 20:39:13 --> 4661
ERROR - 2016-12-06 20:39:13 --> 4662
ERROR - 2016-12-06 20:39:14 --> 4663
ERROR - 2016-12-06 20:39:14 --> 4664
ERROR - 2016-12-06 20:39:14 --> 4665
ERROR - 2016-12-06 20:39:14 --> 4666
ERROR - 2016-12-06 20:39:14 --> 4667
ERROR - 2016-12-06 20:39:14 --> 4668
ERROR - 2016-12-06 20:39:14 --> 4669
ERROR - 2016-12-06 20:39:14 --> 4670
ERROR - 2016-12-06 20:39:14 --> 4671
ERROR - 2016-12-06 20:39:14 --> 4672
ERROR - 2016-12-06 20:39:14 --> 4673
ERROR - 2016-12-06 20:39:14 --> 4674
ERROR - 2016-12-06 20:39:14 --> 4675
ERROR - 2016-12-06 20:39:14 --> 4676
ERROR - 2016-12-06 20:39:14 --> 4677
ERROR - 2016-12-06 20:39:14 --> 4678
ERROR - 2016-12-06 20:39:14 --> 4679
ERROR - 2016-12-06 20:39:14 --> 4680
ERROR - 2016-12-06 20:39:14 --> 4681
ERROR - 2016-12-06 20:39:14 --> 4682
ERROR - 2016-12-06 20:39:14 --> 4683
ERROR - 2016-12-06 20:39:14 --> 4684
ERROR - 2016-12-06 20:39:14 --> 4685
ERROR - 2016-12-06 20:39:14 --> 4686
ERROR - 2016-12-06 20:39:14 --> 4687
ERROR - 2016-12-06 20:39:14 --> 4688
ERROR - 2016-12-06 20:39:14 --> 4689
ERROR - 2016-12-06 20:39:14 --> 4690
ERROR - 2016-12-06 20:39:14 --> 4691
ERROR - 2016-12-06 20:39:14 --> 4692
ERROR - 2016-12-06 20:39:14 --> 4693
ERROR - 2016-12-06 20:39:14 --> 4694
ERROR - 2016-12-06 20:39:14 --> 4695
ERROR - 2016-12-06 20:39:14 --> 4696
ERROR - 2016-12-06 20:39:14 --> 4697
ERROR - 2016-12-06 20:39:15 --> 4698
ERROR - 2016-12-06 20:39:15 --> 4699
ERROR - 2016-12-06 20:39:15 --> 4700
ERROR - 2016-12-06 20:39:15 --> 4701
ERROR - 2016-12-06 20:39:15 --> 4702
ERROR - 2016-12-06 20:39:15 --> 4703
ERROR - 2016-12-06 20:39:15 --> 4704
ERROR - 2016-12-06 20:39:15 --> 4705
ERROR - 2016-12-06 20:39:15 --> 4706
ERROR - 2016-12-06 20:39:15 --> 4707
ERROR - 2016-12-06 20:39:15 --> 4708
ERROR - 2016-12-06 20:39:15 --> 4709
ERROR - 2016-12-06 20:39:15 --> 4710
ERROR - 2016-12-06 20:39:15 --> 4711
ERROR - 2016-12-06 20:39:15 --> 4712
ERROR - 2016-12-06 20:39:15 --> 4713
ERROR - 2016-12-06 20:39:15 --> 4714
ERROR - 2016-12-06 20:39:15 --> 4715
ERROR - 2016-12-06 20:39:15 --> 4716
ERROR - 2016-12-06 20:39:15 --> 4717
ERROR - 2016-12-06 20:39:15 --> 4718
ERROR - 2016-12-06 20:39:15 --> 4719
ERROR - 2016-12-06 20:39:15 --> 4720
ERROR - 2016-12-06 20:39:15 --> 4721
ERROR - 2016-12-06 20:39:15 --> 4722
ERROR - 2016-12-06 20:39:15 --> 4723
ERROR - 2016-12-06 20:39:15 --> 4724
ERROR - 2016-12-06 20:39:15 --> 4725
ERROR - 2016-12-06 20:39:15 --> 4726
ERROR - 2016-12-06 20:39:15 --> 4727
ERROR - 2016-12-06 20:39:15 --> 4728
ERROR - 2016-12-06 20:39:15 --> 4729
ERROR - 2016-12-06 20:39:15 --> 4730
ERROR - 2016-12-06 20:39:15 --> 4731
ERROR - 2016-12-06 20:39:15 --> 4732
ERROR - 2016-12-06 20:39:16 --> 4733
ERROR - 2016-12-06 20:39:16 --> 4734
ERROR - 2016-12-06 20:39:16 --> 4735
ERROR - 2016-12-06 20:39:16 --> 4736
ERROR - 2016-12-06 20:39:16 --> 4737
ERROR - 2016-12-06 20:39:16 --> 4738
ERROR - 2016-12-06 20:39:16 --> 4739
ERROR - 2016-12-06 20:39:16 --> 4740
ERROR - 2016-12-06 20:39:16 --> 4741
ERROR - 2016-12-06 20:39:16 --> 4742
ERROR - 2016-12-06 20:39:16 --> 4743
ERROR - 2016-12-06 20:39:16 --> 4744
ERROR - 2016-12-06 20:39:16 --> 4745
ERROR - 2016-12-06 20:39:16 --> 4746
ERROR - 2016-12-06 20:39:16 --> 4747
ERROR - 2016-12-06 20:39:16 --> 4748
ERROR - 2016-12-06 20:39:16 --> 4749
ERROR - 2016-12-06 20:39:16 --> 4750
ERROR - 2016-12-06 20:39:16 --> 4751
ERROR - 2016-12-06 20:39:16 --> 4752
ERROR - 2016-12-06 20:39:16 --> 4753
ERROR - 2016-12-06 20:39:16 --> 4754
ERROR - 2016-12-06 20:39:16 --> 4755
ERROR - 2016-12-06 20:39:16 --> 4756
ERROR - 2016-12-06 20:39:16 --> 4757
ERROR - 2016-12-06 20:39:16 --> 4758
ERROR - 2016-12-06 20:39:16 --> 4759
ERROR - 2016-12-06 20:39:16 --> 4760
ERROR - 2016-12-06 20:39:16 --> 4761
ERROR - 2016-12-06 20:39:16 --> 4762
ERROR - 2016-12-06 20:39:16 --> 4763
ERROR - 2016-12-06 20:39:16 --> 4764
ERROR - 2016-12-06 20:39:16 --> 4765
ERROR - 2016-12-06 20:39:16 --> 4766
ERROR - 2016-12-06 20:39:16 --> 4767
ERROR - 2016-12-06 20:39:16 --> 4768
ERROR - 2016-12-06 20:39:16 --> 4769
ERROR - 2016-12-06 20:39:16 --> 4770
ERROR - 2016-12-06 20:39:16 --> 4771
ERROR - 2016-12-06 20:39:16 --> 4772
ERROR - 2016-12-06 20:39:16 --> 4773
ERROR - 2016-12-06 20:39:16 --> 4774
ERROR - 2016-12-06 20:39:16 --> 4775
ERROR - 2016-12-06 20:39:17 --> 4776
ERROR - 2016-12-06 20:39:17 --> 4777
ERROR - 2016-12-06 20:39:17 --> 4778
ERROR - 2016-12-06 20:39:17 --> 4779
ERROR - 2016-12-06 20:39:17 --> 4780
ERROR - 2016-12-06 20:39:17 --> 4781
ERROR - 2016-12-06 20:39:17 --> 4782
ERROR - 2016-12-06 20:39:17 --> 4783
ERROR - 2016-12-06 20:39:17 --> 4784
ERROR - 2016-12-06 20:39:17 --> 4785
ERROR - 2016-12-06 20:39:17 --> 4786
ERROR - 2016-12-06 20:39:17 --> 4787
ERROR - 2016-12-06 20:39:17 --> 4788
ERROR - 2016-12-06 20:39:17 --> 4789
ERROR - 2016-12-06 20:39:17 --> 4790
ERROR - 2016-12-06 20:39:17 --> 4791
ERROR - 2016-12-06 20:39:17 --> 4792
ERROR - 2016-12-06 20:39:17 --> 4793
ERROR - 2016-12-06 20:39:17 --> 4794
ERROR - 2016-12-06 20:39:17 --> 4795
ERROR - 2016-12-06 20:39:17 --> 4796
ERROR - 2016-12-06 20:39:17 --> 4797
ERROR - 2016-12-06 20:39:17 --> 4798
ERROR - 2016-12-06 20:39:17 --> 4799
ERROR - 2016-12-06 20:39:17 --> 4800
ERROR - 2016-12-06 20:39:17 --> 4801
ERROR - 2016-12-06 20:39:17 --> 4802
ERROR - 2016-12-06 20:39:17 --> 4803
ERROR - 2016-12-06 20:39:17 --> 4804
ERROR - 2016-12-06 20:39:17 --> 4805
ERROR - 2016-12-06 20:39:17 --> 4806
ERROR - 2016-12-06 20:39:17 --> 4807
ERROR - 2016-12-06 20:39:17 --> 4808
ERROR - 2016-12-06 20:39:17 --> 4809
ERROR - 2016-12-06 20:39:17 --> 4810
ERROR - 2016-12-06 20:39:17 --> 4811
ERROR - 2016-12-06 20:39:17 --> 4812
ERROR - 2016-12-06 20:39:17 --> 4813
ERROR - 2016-12-06 20:39:17 --> 4814
ERROR - 2016-12-06 20:39:17 --> 4815
ERROR - 2016-12-06 20:39:17 --> 4816
ERROR - 2016-12-06 20:39:17 --> 4817
ERROR - 2016-12-06 20:39:17 --> 4818
ERROR - 2016-12-06 20:39:17 --> 4819
ERROR - 2016-12-06 20:39:17 --> 4820
ERROR - 2016-12-06 20:39:17 --> 4821
ERROR - 2016-12-06 20:39:17 --> 4822
ERROR - 2016-12-06 20:39:17 --> 4823
ERROR - 2016-12-06 20:39:17 --> 4824
ERROR - 2016-12-06 20:39:17 --> 4825
ERROR - 2016-12-06 20:39:17 --> 4826
ERROR - 2016-12-06 20:39:17 --> 4827
ERROR - 2016-12-06 20:39:17 --> 4828
ERROR - 2016-12-06 20:39:17 --> 4829
ERROR - 2016-12-06 20:39:17 --> 4830
ERROR - 2016-12-06 20:39:18 --> 4831
ERROR - 2016-12-06 20:39:18 --> 4832
ERROR - 2016-12-06 20:39:18 --> 4833
ERROR - 2016-12-06 20:39:18 --> 4834
ERROR - 2016-12-06 20:39:18 --> 4835
ERROR - 2016-12-06 20:39:18 --> 4836
ERROR - 2016-12-06 20:39:18 --> 4837
ERROR - 2016-12-06 20:39:18 --> 4838
ERROR - 2016-12-06 20:39:18 --> 4839
ERROR - 2016-12-06 20:39:18 --> 4840
ERROR - 2016-12-06 20:39:18 --> 4841
ERROR - 2016-12-06 20:39:18 --> 4842
ERROR - 2016-12-06 20:39:18 --> 4843
ERROR - 2016-12-06 20:39:18 --> 4844
ERROR - 2016-12-06 20:39:18 --> 4845
ERROR - 2016-12-06 20:39:18 --> 4846
ERROR - 2016-12-06 20:39:18 --> 4847
ERROR - 2016-12-06 20:39:18 --> 4848
ERROR - 2016-12-06 20:39:18 --> 4849
ERROR - 2016-12-06 20:39:18 --> 4850
ERROR - 2016-12-06 20:39:18 --> 4851
ERROR - 2016-12-06 20:39:18 --> 4852
ERROR - 2016-12-06 20:39:18 --> 4853
ERROR - 2016-12-06 20:39:18 --> 4854
ERROR - 2016-12-06 20:39:18 --> 4855
ERROR - 2016-12-06 20:39:18 --> 4856
ERROR - 2016-12-06 20:39:18 --> 4857
ERROR - 2016-12-06 20:39:18 --> 4858
ERROR - 2016-12-06 20:39:18 --> 4859
ERROR - 2016-12-06 20:39:18 --> 4860
ERROR - 2016-12-06 20:39:18 --> 4861
ERROR - 2016-12-06 20:39:18 --> 4862
ERROR - 2016-12-06 20:39:18 --> 4863
ERROR - 2016-12-06 20:39:18 --> 4864
ERROR - 2016-12-06 20:39:18 --> 4865
ERROR - 2016-12-06 20:39:18 --> 4866
ERROR - 2016-12-06 20:39:18 --> 4867
ERROR - 2016-12-06 20:39:18 --> 4868
ERROR - 2016-12-06 20:39:18 --> 4869
ERROR - 2016-12-06 20:39:18 --> 4870
ERROR - 2016-12-06 20:39:18 --> 4871
ERROR - 2016-12-06 20:39:18 --> 4872
ERROR - 2016-12-06 20:39:18 --> 4873
ERROR - 2016-12-06 20:39:18 --> 4874
ERROR - 2016-12-06 20:39:18 --> 4875
ERROR - 2016-12-06 20:39:18 --> 4876
ERROR - 2016-12-06 20:39:18 --> 4877
ERROR - 2016-12-06 20:39:18 --> 4878
ERROR - 2016-12-06 20:39:18 --> 4879
ERROR - 2016-12-06 20:39:18 --> 4880
ERROR - 2016-12-06 20:39:18 --> 4881
ERROR - 2016-12-06 20:39:18 --> 4882
ERROR - 2016-12-06 20:39:18 --> 4883
ERROR - 2016-12-06 20:39:18 --> 4884
ERROR - 2016-12-06 20:39:18 --> 4885
ERROR - 2016-12-06 20:39:18 --> 4886
ERROR - 2016-12-06 20:39:18 --> 4887
ERROR - 2016-12-06 20:39:18 --> 4888
ERROR - 2016-12-06 20:39:18 --> 4889
ERROR - 2016-12-06 20:39:18 --> 4890
ERROR - 2016-12-06 20:39:18 --> 4891
ERROR - 2016-12-06 20:39:18 --> 4892
ERROR - 2016-12-06 20:39:18 --> 4893
ERROR - 2016-12-06 20:39:18 --> 4894
ERROR - 2016-12-06 20:39:18 --> 4895
ERROR - 2016-12-06 20:39:18 --> 4896
ERROR - 2016-12-06 20:39:19 --> 4897
ERROR - 2016-12-06 20:39:19 --> 4898
ERROR - 2016-12-06 20:39:19 --> 4899
ERROR - 2016-12-06 20:39:19 --> 4900
ERROR - 2016-12-06 20:39:19 --> 4901
ERROR - 2016-12-06 20:39:19 --> 4902
ERROR - 2016-12-06 20:39:19 --> 4903
ERROR - 2016-12-06 20:39:19 --> 4904
ERROR - 2016-12-06 20:39:19 --> 4905
ERROR - 2016-12-06 20:39:19 --> 4906
ERROR - 2016-12-06 20:39:19 --> 4907
ERROR - 2016-12-06 20:39:19 --> 4908
ERROR - 2016-12-06 20:39:19 --> 4909
ERROR - 2016-12-06 20:39:19 --> 4910
ERROR - 2016-12-06 20:39:19 --> 4911
ERROR - 2016-12-06 20:39:19 --> 4912
ERROR - 2016-12-06 20:39:19 --> 4913
ERROR - 2016-12-06 20:39:19 --> 4914
ERROR - 2016-12-06 20:39:19 --> 4915
ERROR - 2016-12-06 20:39:19 --> 4916
ERROR - 2016-12-06 20:39:19 --> 4917
ERROR - 2016-12-06 20:39:19 --> 4918
ERROR - 2016-12-06 20:39:19 --> 4919
ERROR - 2016-12-06 20:39:19 --> 4920
ERROR - 2016-12-06 20:39:19 --> 4921
ERROR - 2016-12-06 20:39:19 --> 4922
ERROR - 2016-12-06 20:39:19 --> 4923
ERROR - 2016-12-06 20:39:19 --> 4924
ERROR - 2016-12-06 20:39:19 --> 4925
ERROR - 2016-12-06 20:39:19 --> 4926
ERROR - 2016-12-06 20:39:19 --> 4927
ERROR - 2016-12-06 20:39:19 --> 4928
ERROR - 2016-12-06 20:39:19 --> 4929
ERROR - 2016-12-06 20:39:19 --> 4930
ERROR - 2016-12-06 20:39:19 --> 4931
ERROR - 2016-12-06 20:39:19 --> 4932
ERROR - 2016-12-06 20:39:19 --> 4933
ERROR - 2016-12-06 20:39:19 --> 4934
ERROR - 2016-12-06 20:39:19 --> 4935
ERROR - 2016-12-06 20:39:19 --> 4936
ERROR - 2016-12-06 20:39:19 --> 4937
ERROR - 2016-12-06 20:39:19 --> 4938
ERROR - 2016-12-06 20:39:19 --> 4939
ERROR - 2016-12-06 20:39:19 --> 4940
ERROR - 2016-12-06 20:39:19 --> 4941
ERROR - 2016-12-06 20:39:19 --> 4942
ERROR - 2016-12-06 20:39:19 --> 4943
ERROR - 2016-12-06 20:39:19 --> 4944
ERROR - 2016-12-06 20:39:19 --> 4945
ERROR - 2016-12-06 20:39:19 --> 4946
ERROR - 2016-12-06 20:39:19 --> 4947
ERROR - 2016-12-06 20:39:19 --> 4948
ERROR - 2016-12-06 20:39:20 --> 4949
ERROR - 2016-12-06 20:39:20 --> 4950
ERROR - 2016-12-06 20:39:20 --> 4951
ERROR - 2016-12-06 20:39:20 --> 4952
ERROR - 2016-12-06 20:39:20 --> 4953
ERROR - 2016-12-06 20:39:20 --> 4954
ERROR - 2016-12-06 20:39:20 --> 4955
ERROR - 2016-12-06 20:39:20 --> 4956
ERROR - 2016-12-06 20:39:20 --> 4957
ERROR - 2016-12-06 20:39:20 --> 4958
ERROR - 2016-12-06 20:39:20 --> 4959
ERROR - 2016-12-06 20:39:20 --> 4960
ERROR - 2016-12-06 20:39:20 --> 4961
ERROR - 2016-12-06 20:39:20 --> 4962
ERROR - 2016-12-06 20:39:20 --> 4963
ERROR - 2016-12-06 20:39:20 --> 4964
ERROR - 2016-12-06 20:39:20 --> 4965
ERROR - 2016-12-06 20:39:20 --> 4966
ERROR - 2016-12-06 20:39:20 --> 4967
ERROR - 2016-12-06 20:39:20 --> 4968
ERROR - 2016-12-06 20:39:20 --> 4969
ERROR - 2016-12-06 20:39:20 --> 4970
ERROR - 2016-12-06 20:39:20 --> 4971
ERROR - 2016-12-06 20:39:20 --> 4972
ERROR - 2016-12-06 20:39:20 --> 4973
ERROR - 2016-12-06 20:39:20 --> 4974
ERROR - 2016-12-06 20:39:20 --> 4975
ERROR - 2016-12-06 20:39:20 --> 4976
ERROR - 2016-12-06 20:39:20 --> 4977
ERROR - 2016-12-06 20:39:20 --> 4978
ERROR - 2016-12-06 20:39:20 --> 4979
ERROR - 2016-12-06 20:39:20 --> 4980
ERROR - 2016-12-06 20:39:20 --> 4981
ERROR - 2016-12-06 20:39:20 --> 4982
ERROR - 2016-12-06 20:39:20 --> 4983
ERROR - 2016-12-06 20:39:21 --> 4984
ERROR - 2016-12-06 20:39:21 --> 4985
ERROR - 2016-12-06 20:39:21 --> 4986
ERROR - 2016-12-06 20:39:21 --> 4987
ERROR - 2016-12-06 20:39:21 --> 4988
ERROR - 2016-12-06 20:39:21 --> 4989
ERROR - 2016-12-06 20:39:21 --> 4990
ERROR - 2016-12-06 20:39:21 --> 4991
ERROR - 2016-12-06 20:39:21 --> 4992
ERROR - 2016-12-06 20:39:21 --> 4993
ERROR - 2016-12-06 20:39:21 --> 4994
ERROR - 2016-12-06 20:39:21 --> 4995
ERROR - 2016-12-06 20:39:21 --> 4996
ERROR - 2016-12-06 20:39:21 --> 4997
ERROR - 2016-12-06 20:39:21 --> 4998
ERROR - 2016-12-06 20:39:21 --> 4999
ERROR - 2016-12-06 20:39:21 --> 5000
ERROR - 2016-12-06 20:39:21 --> 5001
ERROR - 2016-12-06 20:39:21 --> 5002
ERROR - 2016-12-06 20:39:21 --> 5003
ERROR - 2016-12-06 20:39:21 --> 5004
ERROR - 2016-12-06 20:39:21 --> 5005
ERROR - 2016-12-06 20:39:21 --> 5006
ERROR - 2016-12-06 20:39:21 --> 5007
ERROR - 2016-12-06 20:39:21 --> 5008
ERROR - 2016-12-06 20:39:21 --> 5009
ERROR - 2016-12-06 20:39:21 --> 5010
ERROR - 2016-12-06 20:39:21 --> 5011
ERROR - 2016-12-06 20:39:21 --> 5012
ERROR - 2016-12-06 20:39:21 --> 5013
ERROR - 2016-12-06 20:39:21 --> 5014
ERROR - 2016-12-06 20:39:21 --> 5015
ERROR - 2016-12-06 20:39:22 --> Severity: Error --> Maximum execution time of 120 seconds exceeded D:\Developpement\Serveur Web\wamp\www\projet14club\system\core\Log.php 220
ERROR - 2016-12-06 21:02:02 --> 0
ERROR - 2016-12-06 21:02:02 --> 1
ERROR - 2016-12-06 21:02:02 --> 2
ERROR - 2016-12-06 21:02:02 --> 3
ERROR - 2016-12-06 21:02:02 --> 4
ERROR - 2016-12-06 21:02:02 --> 5
ERROR - 2016-12-06 21:02:02 --> 6
ERROR - 2016-12-06 21:02:02 --> 7
ERROR - 2016-12-06 21:02:02 --> 8
ERROR - 2016-12-06 21:02:02 --> 9
ERROR - 2016-12-06 21:02:02 --> 10
ERROR - 2016-12-06 21:02:02 --> 11
ERROR - 2016-12-06 21:02:02 --> 12
ERROR - 2016-12-06 21:02:02 --> 13
ERROR - 2016-12-06 21:02:02 --> 14
ERROR - 2016-12-06 21:02:02 --> 15
ERROR - 2016-12-06 21:02:02 --> 16
ERROR - 2016-12-06 21:02:02 --> 17
ERROR - 2016-12-06 21:02:02 --> 18
ERROR - 2016-12-06 21:02:02 --> 19
ERROR - 2016-12-06 21:02:02 --> 20
ERROR - 2016-12-06 21:02:02 --> 21
ERROR - 2016-12-06 21:02:03 --> 22
ERROR - 2016-12-06 21:02:03 --> 23
ERROR - 2016-12-06 21:02:03 --> 24
ERROR - 2016-12-06 21:02:03 --> 25
ERROR - 2016-12-06 21:02:03 --> 26
ERROR - 2016-12-06 21:02:03 --> 27
ERROR - 2016-12-06 21:02:03 --> 28
ERROR - 2016-12-06 21:02:03 --> 29
ERROR - 2016-12-06 21:02:03 --> 30
ERROR - 2016-12-06 21:02:03 --> 31
ERROR - 2016-12-06 21:02:03 --> 32
ERROR - 2016-12-06 21:02:03 --> 33
ERROR - 2016-12-06 21:02:03 --> 34
ERROR - 2016-12-06 21:02:03 --> 35
ERROR - 2016-12-06 21:02:03 --> 36
ERROR - 2016-12-06 21:02:03 --> 37
ERROR - 2016-12-06 21:02:03 --> 38
ERROR - 2016-12-06 21:02:03 --> 39
ERROR - 2016-12-06 21:02:03 --> 40
ERROR - 2016-12-06 21:02:03 --> 41
ERROR - 2016-12-06 21:02:03 --> 42
ERROR - 2016-12-06 21:02:03 --> 43
ERROR - 2016-12-06 21:02:03 --> 44
ERROR - 2016-12-06 21:02:03 --> 45
ERROR - 2016-12-06 21:02:03 --> 46
ERROR - 2016-12-06 21:02:03 --> 47
ERROR - 2016-12-06 21:02:03 --> 48
ERROR - 2016-12-06 21:02:03 --> 49
ERROR - 2016-12-06 21:02:03 --> 50
ERROR - 2016-12-06 21:02:03 --> 51
ERROR - 2016-12-06 21:02:03 --> 52
ERROR - 2016-12-06 21:02:03 --> 53
ERROR - 2016-12-06 21:02:03 --> 54
ERROR - 2016-12-06 21:02:04 --> 55
ERROR - 2016-12-06 21:02:04 --> 56
ERROR - 2016-12-06 21:02:04 --> 57
ERROR - 2016-12-06 21:02:04 --> 58
ERROR - 2016-12-06 21:02:04 --> 59
ERROR - 2016-12-06 21:02:04 --> 60
ERROR - 2016-12-06 21:02:04 --> 61
ERROR - 2016-12-06 21:02:04 --> 62
ERROR - 2016-12-06 21:02:04 --> 63
ERROR - 2016-12-06 21:02:04 --> 64
ERROR - 2016-12-06 21:02:04 --> 65
ERROR - 2016-12-06 21:02:04 --> 66
ERROR - 2016-12-06 21:02:04 --> 67
ERROR - 2016-12-06 21:02:04 --> 68
ERROR - 2016-12-06 21:02:04 --> 69
ERROR - 2016-12-06 21:02:04 --> 70
ERROR - 2016-12-06 21:02:04 --> 71
ERROR - 2016-12-06 21:02:04 --> 72
ERROR - 2016-12-06 21:02:04 --> 73
ERROR - 2016-12-06 21:02:04 --> 74
ERROR - 2016-12-06 21:02:04 --> 75
ERROR - 2016-12-06 21:02:04 --> 76
ERROR - 2016-12-06 21:02:04 --> 77
ERROR - 2016-12-06 21:02:04 --> 78
ERROR - 2016-12-06 21:02:04 --> 79
ERROR - 2016-12-06 21:02:04 --> 80
ERROR - 2016-12-06 21:02:04 --> 81
ERROR - 2016-12-06 21:02:04 --> 82
ERROR - 2016-12-06 21:02:04 --> 83
ERROR - 2016-12-06 21:02:04 --> 84
ERROR - 2016-12-06 21:02:04 --> 85
ERROR - 2016-12-06 21:02:04 --> 86
ERROR - 2016-12-06 21:02:04 --> 87
ERROR - 2016-12-06 21:02:05 --> 88
ERROR - 2016-12-06 21:02:05 --> 89
ERROR - 2016-12-06 21:02:05 --> 90
ERROR - 2016-12-06 21:02:05 --> 91
ERROR - 2016-12-06 21:02:05 --> 92
ERROR - 2016-12-06 21:02:05 --> 93
ERROR - 2016-12-06 21:02:05 --> 94
ERROR - 2016-12-06 21:02:05 --> 95
ERROR - 2016-12-06 21:02:05 --> 96
ERROR - 2016-12-06 21:02:05 --> 97
ERROR - 2016-12-06 21:02:05 --> 98
ERROR - 2016-12-06 21:02:05 --> 99
ERROR - 2016-12-06 21:02:05 --> 100
ERROR - 2016-12-06 21:02:05 --> 101
ERROR - 2016-12-06 21:02:05 --> 102
ERROR - 2016-12-06 21:02:05 --> 103
ERROR - 2016-12-06 21:02:05 --> 104
ERROR - 2016-12-06 21:02:05 --> 105
ERROR - 2016-12-06 21:02:05 --> 106
ERROR - 2016-12-06 21:02:05 --> 107
ERROR - 2016-12-06 21:02:05 --> 108
ERROR - 2016-12-06 21:02:05 --> 109
ERROR - 2016-12-06 21:02:05 --> 110
ERROR - 2016-12-06 21:02:05 --> 111
ERROR - 2016-12-06 21:02:05 --> 112
ERROR - 2016-12-06 21:02:05 --> 113
ERROR - 2016-12-06 21:02:05 --> 114
ERROR - 2016-12-06 21:02:05 --> 115
ERROR - 2016-12-06 21:02:05 --> 116
ERROR - 2016-12-06 21:02:05 --> 117
ERROR - 2016-12-06 21:02:06 --> 118
ERROR - 2016-12-06 21:02:06 --> 119
ERROR - 2016-12-06 21:02:06 --> 120
ERROR - 2016-12-06 21:02:06 --> 121
ERROR - 2016-12-06 21:02:06 --> 122
ERROR - 2016-12-06 21:02:06 --> 123
ERROR - 2016-12-06 21:02:06 --> 124
ERROR - 2016-12-06 21:02:06 --> 125
ERROR - 2016-12-06 21:02:06 --> 126
ERROR - 2016-12-06 21:02:06 --> 127
ERROR - 2016-12-06 21:02:06 --> 128
ERROR - 2016-12-06 21:02:06 --> 129
ERROR - 2016-12-06 21:02:06 --> 130
ERROR - 2016-12-06 21:02:06 --> 131
ERROR - 2016-12-06 21:02:06 --> 132
ERROR - 2016-12-06 21:02:06 --> 133
ERROR - 2016-12-06 21:02:06 --> 134
ERROR - 2016-12-06 21:02:06 --> 135
ERROR - 2016-12-06 21:02:06 --> 136
ERROR - 2016-12-06 21:02:06 --> 137
ERROR - 2016-12-06 21:02:06 --> 138
ERROR - 2016-12-06 21:02:06 --> 139
ERROR - 2016-12-06 21:02:06 --> 140
ERROR - 2016-12-06 21:02:06 --> 141
ERROR - 2016-12-06 21:02:06 --> 142
ERROR - 2016-12-06 21:02:06 --> 143
ERROR - 2016-12-06 21:02:06 --> 144
ERROR - 2016-12-06 21:02:06 --> 145
ERROR - 2016-12-06 21:02:06 --> 146
ERROR - 2016-12-06 21:02:06 --> 147
ERROR - 2016-12-06 21:02:06 --> 148
ERROR - 2016-12-06 21:02:06 --> 149
ERROR - 2016-12-06 21:02:07 --> 150
ERROR - 2016-12-06 21:02:07 --> 151
ERROR - 2016-12-06 21:02:07 --> 152
ERROR - 2016-12-06 21:02:07 --> 153
ERROR - 2016-12-06 21:02:07 --> 154
ERROR - 2016-12-06 21:02:07 --> 155
ERROR - 2016-12-06 21:02:07 --> 156
ERROR - 2016-12-06 21:02:07 --> 157
ERROR - 2016-12-06 21:02:07 --> 158
ERROR - 2016-12-06 21:02:07 --> 159
ERROR - 2016-12-06 21:02:07 --> 160
ERROR - 2016-12-06 21:02:07 --> 161
ERROR - 2016-12-06 21:02:07 --> 162
ERROR - 2016-12-06 21:02:07 --> 163
ERROR - 2016-12-06 21:02:07 --> 164
ERROR - 2016-12-06 21:02:07 --> 165
ERROR - 2016-12-06 21:02:07 --> 166
ERROR - 2016-12-06 21:02:07 --> 167
ERROR - 2016-12-06 21:02:07 --> 168
ERROR - 2016-12-06 21:02:07 --> 169
ERROR - 2016-12-06 21:02:07 --> 170
ERROR - 2016-12-06 21:02:07 --> 171
ERROR - 2016-12-06 21:02:07 --> 172
ERROR - 2016-12-06 21:02:07 --> 173
ERROR - 2016-12-06 21:02:07 --> 174
ERROR - 2016-12-06 21:02:07 --> 175
ERROR - 2016-12-06 21:02:07 --> 176
ERROR - 2016-12-06 21:02:07 --> 177
ERROR - 2016-12-06 21:02:07 --> 178
ERROR - 2016-12-06 21:02:07 --> 179
ERROR - 2016-12-06 21:02:07 --> 180
ERROR - 2016-12-06 21:02:07 --> 181
ERROR - 2016-12-06 21:02:07 --> 182
ERROR - 2016-12-06 21:02:07 --> 183
ERROR - 2016-12-06 21:02:07 --> 184
ERROR - 2016-12-06 21:02:07 --> 185
ERROR - 2016-12-06 21:02:07 --> 186
ERROR - 2016-12-06 21:02:07 --> 187
ERROR - 2016-12-06 21:02:07 --> 188
ERROR - 2016-12-06 21:02:07 --> 189
ERROR - 2016-12-06 21:02:08 --> 190
ERROR - 2016-12-06 21:02:08 --> 191
ERROR - 2016-12-06 21:02:08 --> 192
ERROR - 2016-12-06 21:02:08 --> 193
ERROR - 2016-12-06 21:02:08 --> 194
ERROR - 2016-12-06 21:02:08 --> 195
ERROR - 2016-12-06 21:02:08 --> 196
ERROR - 2016-12-06 21:02:08 --> 197
ERROR - 2016-12-06 21:02:08 --> 198
ERROR - 2016-12-06 21:02:08 --> 199
ERROR - 2016-12-06 21:02:08 --> 200
ERROR - 2016-12-06 21:02:08 --> 201
ERROR - 2016-12-06 21:02:08 --> 202
ERROR - 2016-12-06 21:02:08 --> 203
ERROR - 2016-12-06 21:02:08 --> 204
ERROR - 2016-12-06 21:02:08 --> 205
ERROR - 2016-12-06 21:02:08 --> 206
ERROR - 2016-12-06 21:02:08 --> 207
ERROR - 2016-12-06 21:02:08 --> 208
ERROR - 2016-12-06 21:02:08 --> 209
ERROR - 2016-12-06 21:02:08 --> 210
ERROR - 2016-12-06 21:02:08 --> 211
ERROR - 2016-12-06 21:02:08 --> 212
ERROR - 2016-12-06 21:02:08 --> 213
ERROR - 2016-12-06 21:02:08 --> 214
ERROR - 2016-12-06 21:02:08 --> 215
ERROR - 2016-12-06 21:02:08 --> 216
ERROR - 2016-12-06 21:02:08 --> 217
ERROR - 2016-12-06 21:02:08 --> 218
ERROR - 2016-12-06 21:02:08 --> 219
ERROR - 2016-12-06 21:02:08 --> 220
ERROR - 2016-12-06 21:02:08 --> 221
ERROR - 2016-12-06 21:02:08 --> 222
ERROR - 2016-12-06 21:02:08 --> 223
ERROR - 2016-12-06 21:02:08 --> 224
ERROR - 2016-12-06 21:02:08 --> 225
ERROR - 2016-12-06 21:02:08 --> 226
ERROR - 2016-12-06 21:02:08 --> 227
ERROR - 2016-12-06 21:02:08 --> 228
ERROR - 2016-12-06 21:02:08 --> 229
ERROR - 2016-12-06 21:02:08 --> 230
ERROR - 2016-12-06 21:02:08 --> 231
ERROR - 2016-12-06 21:02:08 --> 232
ERROR - 2016-12-06 21:02:09 --> 233
ERROR - 2016-12-06 21:02:09 --> 234
ERROR - 2016-12-06 21:02:09 --> 235
ERROR - 2016-12-06 21:02:09 --> 236
ERROR - 2016-12-06 21:02:09 --> 237
ERROR - 2016-12-06 21:02:09 --> 238
ERROR - 2016-12-06 21:02:09 --> 239
ERROR - 2016-12-06 21:02:09 --> 240
ERROR - 2016-12-06 21:02:09 --> 241
ERROR - 2016-12-06 21:02:09 --> 242
ERROR - 2016-12-06 21:02:09 --> 243
ERROR - 2016-12-06 21:02:09 --> 244
ERROR - 2016-12-06 21:02:09 --> 245
ERROR - 2016-12-06 21:02:09 --> 246
ERROR - 2016-12-06 21:02:09 --> 247
ERROR - 2016-12-06 21:02:09 --> 248
ERROR - 2016-12-06 21:02:09 --> 249
ERROR - 2016-12-06 21:02:09 --> 250
ERROR - 2016-12-06 21:02:09 --> 251
ERROR - 2016-12-06 21:02:09 --> 252
ERROR - 2016-12-06 21:02:09 --> 253
ERROR - 2016-12-06 21:02:09 --> 254
ERROR - 2016-12-06 21:02:09 --> 255
ERROR - 2016-12-06 21:02:09 --> 256
ERROR - 2016-12-06 21:02:09 --> 257
ERROR - 2016-12-06 21:02:09 --> 258
ERROR - 2016-12-06 21:02:09 --> 259
ERROR - 2016-12-06 21:02:09 --> 260
ERROR - 2016-12-06 21:02:09 --> 261
ERROR - 2016-12-06 21:02:09 --> 262
ERROR - 2016-12-06 21:02:09 --> 263
ERROR - 2016-12-06 21:02:10 --> 264
ERROR - 2016-12-06 21:02:10 --> 265
ERROR - 2016-12-06 21:02:10 --> 266
ERROR - 2016-12-06 21:02:10 --> 267
ERROR - 2016-12-06 21:02:10 --> 268
ERROR - 2016-12-06 21:02:10 --> 269
ERROR - 2016-12-06 21:02:10 --> 270
ERROR - 2016-12-06 21:02:10 --> 271
ERROR - 2016-12-06 21:02:10 --> 272
ERROR - 2016-12-06 21:30:19 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  entrée manquante de la clause FROM pour la table « users »
LINE 31:           and date_part('month', users.&quot;DATE_FIN&quot;)='2'  and ...
                                          ^ D:\Developpement\Serveur Web\wamp\www\projet14club\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2016-12-06 21:30:19 --> Query error: ERREUR:  entrée manquante de la clause FROM pour la table « users »
LINE 31:           and date_part('month', users."DATE_FIN")='2'  and ...
                                          ^ - Invalid query: 
						SELECT "ID_USER", "DATE_FIN", "NOM", "PRENOM", "SEXE", "PAYS", "CP", "VILLE", "ADRESSE1", "EMAIL", "LIBELLE",
									 "USER_STATUS", to_char("DATE_NAISSANCE",'DD/MM/YYYY') as "DATE_NAISSANCE", "B_MONTH", "B_YEAR", "NUMERO_USER"
							 from
								(
								SELECT DISTINCT (users."ID_USER") as "ID_USER", users."NOM", users."PRENOM", users."SEXE", 
											users."CP", users."VILLE", users."ADRESSE1", users."EMAIL", users."PAYS",  users."NUMERO_USER",
			 								type_abonnement."LIBELLE",
			 								MAX(abonnement."DATE_FIN") as "DATE_FIN",
	 								       CASE WHEN MAX(abonnement."DATE_FIN")>now() THEN 'En cours'
									            ELSE 'Clôturé'
									       END as "USER_STATUS",
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
			 					 and date_part('month', users."DATE_FIN")='2'  and date_part('day', users."DATE_FIN")='27'  and date_part('year', users."DATE_FIN")='2017' 
  								
ERROR - 2016-12-06 21:32:24 --> 0
ERROR - 2016-12-06 21:32:24 --> 1
ERROR - 2016-12-06 21:32:24 --> 2
ERROR - 2016-12-06 21:32:25 --> 3
ERROR - 2016-12-06 21:32:25 --> 4
ERROR - 2016-12-06 21:32:25 --> 5
ERROR - 2016-12-06 21:32:25 --> 6
ERROR - 2016-12-06 21:32:25 --> 7
ERROR - 2016-12-06 21:32:25 --> 8
ERROR - 2016-12-06 21:32:25 --> 9
ERROR - 2016-12-06 21:32:25 --> 10
ERROR - 2016-12-06 21:32:25 --> 11
ERROR - 2016-12-06 21:32:25 --> 12
ERROR - 2016-12-06 21:32:25 --> 13
ERROR - 2016-12-06 21:32:25 --> 14
ERROR - 2016-12-06 21:32:25 --> 15
ERROR - 2016-12-06 21:32:25 --> 16
ERROR - 2016-12-06 21:32:25 --> 17
ERROR - 2016-12-06 21:32:25 --> 18
ERROR - 2016-12-06 21:32:25 --> 19
ERROR - 2016-12-06 21:32:25 --> 20
ERROR - 2016-12-06 21:32:25 --> 21
ERROR - 2016-12-06 21:32:25 --> 22
ERROR - 2016-12-06 21:32:25 --> 23
ERROR - 2016-12-06 21:32:25 --> 24
ERROR - 2016-12-06 21:32:25 --> 25
ERROR - 2016-12-06 21:32:25 --> 26
ERROR - 2016-12-06 21:32:25 --> 27
ERROR - 2016-12-06 21:32:25 --> 28
ERROR - 2016-12-06 21:32:25 --> 29
ERROR - 2016-12-06 21:32:25 --> 30
ERROR - 2016-12-06 21:32:25 --> 31
ERROR - 2016-12-06 21:32:26 --> 32
ERROR - 2016-12-06 21:32:26 --> 33
ERROR - 2016-12-06 21:32:26 --> 34
ERROR - 2016-12-06 21:32:26 --> 35
ERROR - 2016-12-06 21:32:26 --> 36
ERROR - 2016-12-06 21:32:26 --> 37
ERROR - 2016-12-06 21:32:26 --> 38
ERROR - 2016-12-06 21:32:26 --> 39
ERROR - 2016-12-06 21:32:26 --> 40
ERROR - 2016-12-06 21:32:26 --> 41
ERROR - 2016-12-06 21:32:26 --> 42
ERROR - 2016-12-06 21:32:26 --> 43
ERROR - 2016-12-06 21:32:26 --> 44
ERROR - 2016-12-06 21:32:26 --> 45
ERROR - 2016-12-06 21:32:26 --> 46
ERROR - 2016-12-06 21:32:26 --> 47
ERROR - 2016-12-06 21:32:26 --> 48
ERROR - 2016-12-06 21:32:26 --> 49
ERROR - 2016-12-06 21:32:26 --> 50
ERROR - 2016-12-06 21:32:26 --> 51
ERROR - 2016-12-06 21:32:26 --> 52
ERROR - 2016-12-06 21:32:26 --> 53
ERROR - 2016-12-06 21:32:26 --> 54
ERROR - 2016-12-06 21:32:26 --> 55
ERROR - 2016-12-06 21:32:26 --> 56
ERROR - 2016-12-06 21:32:26 --> 57
ERROR - 2016-12-06 21:32:26 --> 58
ERROR - 2016-12-06 21:32:26 --> 59
ERROR - 2016-12-06 21:32:26 --> 60
ERROR - 2016-12-06 21:32:26 --> 61
ERROR - 2016-12-06 21:32:26 --> 62
ERROR - 2016-12-06 21:32:26 --> 63
ERROR - 2016-12-06 21:32:26 --> 64
ERROR - 2016-12-06 21:32:26 --> 65
ERROR - 2016-12-06 21:32:26 --> 66
ERROR - 2016-12-06 21:32:27 --> 67
ERROR - 2016-12-06 21:32:27 --> 68
ERROR - 2016-12-06 21:32:27 --> 69
ERROR - 2016-12-06 21:32:27 --> 70
ERROR - 2016-12-06 21:32:27 --> 71
ERROR - 2016-12-06 21:32:27 --> 72
ERROR - 2016-12-06 21:32:27 --> 73
ERROR - 2016-12-06 21:32:27 --> 74
ERROR - 2016-12-06 21:32:27 --> 75
ERROR - 2016-12-06 21:32:27 --> 76
ERROR - 2016-12-06 21:32:27 --> 77
ERROR - 2016-12-06 21:32:27 --> 78
ERROR - 2016-12-06 21:32:27 --> 79
ERROR - 2016-12-06 21:32:27 --> 80
ERROR - 2016-12-06 21:32:27 --> 81
ERROR - 2016-12-06 21:32:27 --> 82
ERROR - 2016-12-06 21:32:27 --> 83
ERROR - 2016-12-06 21:32:27 --> 84
ERROR - 2016-12-06 21:32:27 --> 85
ERROR - 2016-12-06 21:32:27 --> 86
ERROR - 2016-12-06 21:32:27 --> 87
ERROR - 2016-12-06 21:32:27 --> 88
ERROR - 2016-12-06 21:32:27 --> 89
ERROR - 2016-12-06 21:32:27 --> 90
ERROR - 2016-12-06 21:32:27 --> 91
ERROR - 2016-12-06 21:32:27 --> 92
ERROR - 2016-12-06 21:32:27 --> 93
ERROR - 2016-12-06 21:32:27 --> 94
ERROR - 2016-12-06 21:32:27 --> 95
ERROR - 2016-12-06 21:32:27 --> 96
ERROR - 2016-12-06 21:32:27 --> 97
ERROR - 2016-12-06 21:32:27 --> 98
ERROR - 2016-12-06 21:32:27 --> 99
ERROR - 2016-12-06 21:32:27 --> 100
ERROR - 2016-12-06 21:32:27 --> 101
ERROR - 2016-12-06 21:32:28 --> 102
ERROR - 2016-12-06 21:32:28 --> 103
ERROR - 2016-12-06 21:32:28 --> 104
ERROR - 2016-12-06 21:32:28 --> 105
ERROR - 2016-12-06 21:32:28 --> 106
ERROR - 2016-12-06 21:32:28 --> 107
ERROR - 2016-12-06 21:32:28 --> 108
ERROR - 2016-12-06 21:32:28 --> 109
ERROR - 2016-12-06 21:32:28 --> 110
ERROR - 2016-12-06 21:32:28 --> 111
ERROR - 2016-12-06 21:32:28 --> 112
ERROR - 2016-12-06 21:32:28 --> 113
ERROR - 2016-12-06 21:32:28 --> 114
ERROR - 2016-12-06 21:32:28 --> 115
ERROR - 2016-12-06 21:32:28 --> 116
ERROR - 2016-12-06 21:32:28 --> 117
ERROR - 2016-12-06 21:32:28 --> 118
ERROR - 2016-12-06 21:32:28 --> 119
ERROR - 2016-12-06 21:32:28 --> 120
ERROR - 2016-12-06 21:32:28 --> 121
ERROR - 2016-12-06 21:32:28 --> 122
ERROR - 2016-12-06 21:33:24 --> 0
ERROR - 2016-12-06 21:33:24 --> 1
ERROR - 2016-12-06 21:33:24 --> 2
ERROR - 2016-12-06 21:33:24 --> 3
ERROR - 2016-12-06 21:33:24 --> 4
ERROR - 2016-12-06 21:33:24 --> 5
ERROR - 2016-12-06 21:33:24 --> 6
ERROR - 2016-12-06 21:33:24 --> 7
ERROR - 2016-12-06 21:33:24 --> 8
ERROR - 2016-12-06 21:33:24 --> 9
ERROR - 2016-12-06 21:33:24 --> 10
ERROR - 2016-12-06 21:33:24 --> 11
ERROR - 2016-12-06 21:33:24 --> 12
ERROR - 2016-12-06 21:33:24 --> 13
ERROR - 2016-12-06 21:33:24 --> 14
ERROR - 2016-12-06 21:33:25 --> 15
ERROR - 2016-12-06 21:33:25 --> 16
ERROR - 2016-12-06 21:33:25 --> 17
ERROR - 2016-12-06 21:33:25 --> 18
ERROR - 2016-12-06 21:33:25 --> 19
ERROR - 2016-12-06 21:33:25 --> 20
ERROR - 2016-12-06 21:33:25 --> 21
ERROR - 2016-12-06 21:33:25 --> 22
ERROR - 2016-12-06 21:33:25 --> 23
ERROR - 2016-12-06 21:33:25 --> 24
ERROR - 2016-12-06 21:33:25 --> 25
ERROR - 2016-12-06 21:33:25 --> 26
ERROR - 2016-12-06 21:33:25 --> 27
ERROR - 2016-12-06 21:33:25 --> 28
ERROR - 2016-12-06 21:33:25 --> 29
ERROR - 2016-12-06 21:33:25 --> 30
ERROR - 2016-12-06 21:33:25 --> 31
ERROR - 2016-12-06 21:33:25 --> 32
ERROR - 2016-12-06 21:33:25 --> 33
ERROR - 2016-12-06 21:33:25 --> 34
ERROR - 2016-12-06 21:33:25 --> 35
ERROR - 2016-12-06 21:33:25 --> 36
ERROR - 2016-12-06 21:33:25 --> 37
ERROR - 2016-12-06 21:33:25 --> 38
ERROR - 2016-12-06 21:33:25 --> 39
ERROR - 2016-12-06 21:33:25 --> 40
ERROR - 2016-12-06 21:33:25 --> 41
ERROR - 2016-12-06 21:33:25 --> 42
ERROR - 2016-12-06 21:33:25 --> 43
ERROR - 2016-12-06 21:33:25 --> 44
ERROR - 2016-12-06 21:33:25 --> 45
ERROR - 2016-12-06 21:33:25 --> 46
ERROR - 2016-12-06 21:33:25 --> 47
ERROR - 2016-12-06 21:33:25 --> 48
ERROR - 2016-12-06 21:33:25 --> 49
ERROR - 2016-12-06 21:33:25 --> 50
ERROR - 2016-12-06 21:33:25 --> 51
ERROR - 2016-12-06 21:33:25 --> 52
ERROR - 2016-12-06 21:33:25 --> 53
ERROR - 2016-12-06 21:33:25 --> 54
ERROR - 2016-12-06 21:33:25 --> 55
ERROR - 2016-12-06 21:33:25 --> 56
ERROR - 2016-12-06 21:33:26 --> 57
ERROR - 2016-12-06 21:33:26 --> 58
ERROR - 2016-12-06 21:33:26 --> 59
ERROR - 2016-12-06 21:33:26 --> 60
ERROR - 2016-12-06 21:33:26 --> 61
ERROR - 2016-12-06 21:33:26 --> 62
ERROR - 2016-12-06 21:33:26 --> 63
ERROR - 2016-12-06 21:33:26 --> 64
ERROR - 2016-12-06 21:33:26 --> 65
ERROR - 2016-12-06 21:33:26 --> 66
ERROR - 2016-12-06 21:33:26 --> 67
ERROR - 2016-12-06 21:33:26 --> 68
ERROR - 2016-12-06 21:33:26 --> 69
ERROR - 2016-12-06 21:33:26 --> 70
ERROR - 2016-12-06 21:33:26 --> 71
ERROR - 2016-12-06 21:33:26 --> 72
ERROR - 2016-12-06 21:33:26 --> 73
ERROR - 2016-12-06 21:33:26 --> 74
ERROR - 2016-12-06 21:33:26 --> 75
ERROR - 2016-12-06 21:33:26 --> 76
ERROR - 2016-12-06 21:33:26 --> 77
ERROR - 2016-12-06 21:33:26 --> 78
ERROR - 2016-12-06 21:33:26 --> 79
ERROR - 2016-12-06 21:33:26 --> 80
ERROR - 2016-12-06 21:33:26 --> 81
ERROR - 2016-12-06 21:33:26 --> 82
ERROR - 2016-12-06 21:33:26 --> 83
ERROR - 2016-12-06 21:33:26 --> 84
ERROR - 2016-12-06 21:33:26 --> 85
ERROR - 2016-12-06 21:33:26 --> 86
ERROR - 2016-12-06 21:33:26 --> 87
ERROR - 2016-12-06 21:33:26 --> 88
ERROR - 2016-12-06 21:33:26 --> 89
ERROR - 2016-12-06 21:33:26 --> 90
ERROR - 2016-12-06 21:33:26 --> 91
ERROR - 2016-12-06 21:33:26 --> 92
ERROR - 2016-12-06 21:33:26 --> 93
ERROR - 2016-12-06 21:33:26 --> 94
ERROR - 2016-12-06 21:33:26 --> 95
ERROR - 2016-12-06 21:33:26 --> 96
ERROR - 2016-12-06 21:33:26 --> 97
ERROR - 2016-12-06 21:33:26 --> 98
ERROR - 2016-12-06 21:33:26 --> 99
ERROR - 2016-12-06 21:33:26 --> 100
ERROR - 2016-12-06 21:33:26 --> 101
ERROR - 2016-12-06 21:33:27 --> 102
ERROR - 2016-12-06 21:33:27 --> 103
ERROR - 2016-12-06 21:33:27 --> 104
ERROR - 2016-12-06 21:33:27 --> 105
ERROR - 2016-12-06 21:33:27 --> 106
ERROR - 2016-12-06 21:33:27 --> 107
ERROR - 2016-12-06 21:33:27 --> 108
ERROR - 2016-12-06 21:33:27 --> 109
ERROR - 2016-12-06 21:33:27 --> 110
ERROR - 2016-12-06 21:33:27 --> 111
ERROR - 2016-12-06 21:33:27 --> 112
ERROR - 2016-12-06 21:33:27 --> 113
ERROR - 2016-12-06 21:33:27 --> 114
ERROR - 2016-12-06 21:33:27 --> 115
ERROR - 2016-12-06 21:33:27 --> 116
ERROR - 2016-12-06 21:33:27 --> 117
ERROR - 2016-12-06 21:33:27 --> 118
ERROR - 2016-12-06 21:33:27 --> 119
ERROR - 2016-12-06 21:33:27 --> 120
ERROR - 2016-12-06 21:33:27 --> 121
ERROR - 2016-12-06 21:33:27 --> 122
ERROR - 2016-12-06 21:36:39 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  entrée manquante de la clause FROM pour la table « users »
LINE 4:                date_part('month', users.&quot;DATE_FIN&quot;) as &quot;A_MO...
                                          ^ D:\Developpement\Serveur Web\wamp\www\projet14club\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2016-12-06 21:36:39 --> Query error: ERREUR:  entrée manquante de la clause FROM pour la table « users »
LINE 4:                date_part('month', users."DATE_FIN") as "A_MO...
                                          ^ - Invalid query: 
						SELECT "ID_USER", "DATE_FIN", "NOM", "PRENOM", "SEXE", "PAYS", "CP", "VILLE", "ADRESSE1", "EMAIL", "LIBELLE",
									 "USER_STATUS", to_char("DATE_NAISSANCE",'DD/MM/YYYY') as "DATE_NAISSANCE", "B_MONTH", "B_YEAR", "NUMERO_USER",
								       date_part('month', users."DATE_FIN") as "A_MONTH",
								       date_part('year', users."DATE_FIN") as "A_YEAR",
								       date_part('day', users."DATE_FIN") as "A_DAY"		
							 from
								(
								SELECT DISTINCT (users."ID_USER") as "ID_USER", users."NOM", users."PRENOM", users."SEXE", 
											users."CP", users."VILLE", users."ADRESSE1", users."EMAIL", users."PAYS",  users."NUMERO_USER",
			 								type_abonnement."LIBELLE",
			 								MAX(abonnement."DATE_FIN") as "DATE_FIN",
	 								       CASE WHEN MAX(abonnement."DATE_FIN")>now() THEN 'En cours'
									            ELSE 'Clôturé'
									       END as "USER_STATUS",
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
			 					 and date_part('month', "DATE_FIN")='2'  and date_part('day', "DATE_FIN")='27'  and date_part('year', "DATE_FIN")='2017' 
  								
ERROR - 2016-12-06 21:37:04 --> 0
ERROR - 2016-12-06 21:37:04 --> 1
ERROR - 2016-12-06 21:37:04 --> 2
ERROR - 2016-12-06 21:37:04 --> 3
ERROR - 2016-12-06 21:37:04 --> 4
ERROR - 2016-12-06 21:37:04 --> 5
ERROR - 2016-12-06 21:37:04 --> 6
ERROR - 2016-12-06 21:37:04 --> 7
ERROR - 2016-12-06 21:37:04 --> 8
ERROR - 2016-12-06 21:37:04 --> 9
ERROR - 2016-12-06 21:37:04 --> 10
ERROR - 2016-12-06 21:37:04 --> 11
ERROR - 2016-12-06 21:37:05 --> 12
ERROR - 2016-12-06 21:37:05 --> 13
ERROR - 2016-12-06 21:37:05 --> 14
ERROR - 2016-12-06 21:37:05 --> 15
ERROR - 2016-12-06 21:37:05 --> 16
ERROR - 2016-12-06 21:37:05 --> 17
ERROR - 2016-12-06 21:37:05 --> 18
ERROR - 2016-12-06 21:37:05 --> 19
ERROR - 2016-12-06 21:37:05 --> 20
ERROR - 2016-12-06 21:37:05 --> 21
ERROR - 2016-12-06 21:37:05 --> 22
ERROR - 2016-12-06 21:37:05 --> 23
ERROR - 2016-12-06 21:37:05 --> 24
ERROR - 2016-12-06 21:37:05 --> 25
ERROR - 2016-12-06 21:37:05 --> 26
ERROR - 2016-12-06 21:37:05 --> 27
ERROR - 2016-12-06 21:37:05 --> 28
ERROR - 2016-12-06 21:37:05 --> 29
ERROR - 2016-12-06 21:37:05 --> 30
ERROR - 2016-12-06 21:37:05 --> 31
ERROR - 2016-12-06 21:37:05 --> 32
ERROR - 2016-12-06 21:37:05 --> 33
ERROR - 2016-12-06 21:37:05 --> 34
ERROR - 2016-12-06 21:37:05 --> 35
ERROR - 2016-12-06 21:37:05 --> 36
ERROR - 2016-12-06 21:37:05 --> 37
ERROR - 2016-12-06 21:37:05 --> 38
ERROR - 2016-12-06 21:37:05 --> 39
ERROR - 2016-12-06 21:37:05 --> 40
ERROR - 2016-12-06 21:37:05 --> 41
ERROR - 2016-12-06 21:37:06 --> 42
ERROR - 2016-12-06 21:37:06 --> 43
ERROR - 2016-12-06 21:37:06 --> 44
ERROR - 2016-12-06 21:37:06 --> 45
ERROR - 2016-12-06 21:37:06 --> 46
ERROR - 2016-12-06 21:37:06 --> 47
ERROR - 2016-12-06 21:37:06 --> 48
ERROR - 2016-12-06 21:37:06 --> 49
ERROR - 2016-12-06 21:37:06 --> 50
ERROR - 2016-12-06 21:37:06 --> 51
ERROR - 2016-12-06 21:37:06 --> 52
ERROR - 2016-12-06 21:37:06 --> 53
ERROR - 2016-12-06 21:37:06 --> 54
ERROR - 2016-12-06 21:37:06 --> 55
ERROR - 2016-12-06 21:37:06 --> 56
ERROR - 2016-12-06 21:37:06 --> 57
ERROR - 2016-12-06 21:37:06 --> 58
ERROR - 2016-12-06 21:37:06 --> 59
ERROR - 2016-12-06 21:37:06 --> 60
ERROR - 2016-12-06 21:37:06 --> 61
ERROR - 2016-12-06 21:37:06 --> 62
ERROR - 2016-12-06 21:37:06 --> 63
ERROR - 2016-12-06 21:37:06 --> 64
ERROR - 2016-12-06 21:37:06 --> 65
ERROR - 2016-12-06 21:37:06 --> 66
ERROR - 2016-12-06 21:37:06 --> 67
ERROR - 2016-12-06 21:37:06 --> 68
ERROR - 2016-12-06 21:37:06 --> 69
ERROR - 2016-12-06 21:37:06 --> 70
ERROR - 2016-12-06 21:37:07 --> 71
ERROR - 2016-12-06 21:37:07 --> 72
ERROR - 2016-12-06 21:37:07 --> 73
ERROR - 2016-12-06 21:37:07 --> 74
ERROR - 2016-12-06 21:37:07 --> 75
ERROR - 2016-12-06 21:37:07 --> 76
ERROR - 2016-12-06 21:37:07 --> 77
ERROR - 2016-12-06 21:37:07 --> 78
ERROR - 2016-12-06 21:37:07 --> 79
ERROR - 2016-12-06 21:37:07 --> 80
ERROR - 2016-12-06 21:37:07 --> 81
ERROR - 2016-12-06 21:37:07 --> 82
ERROR - 2016-12-06 21:37:07 --> 83
ERROR - 2016-12-06 21:37:07 --> 84
ERROR - 2016-12-06 21:37:07 --> 85
ERROR - 2016-12-06 21:37:07 --> 86
ERROR - 2016-12-06 21:37:07 --> 87
ERROR - 2016-12-06 21:37:07 --> 88
ERROR - 2016-12-06 21:37:07 --> 89
ERROR - 2016-12-06 21:37:07 --> 90
ERROR - 2016-12-06 21:37:07 --> 91
ERROR - 2016-12-06 21:37:07 --> 92
ERROR - 2016-12-06 21:37:07 --> 93
ERROR - 2016-12-06 21:37:07 --> 94
ERROR - 2016-12-06 21:37:07 --> 95
ERROR - 2016-12-06 21:37:07 --> 96
ERROR - 2016-12-06 21:37:07 --> 97
ERROR - 2016-12-06 21:37:07 --> 98
ERROR - 2016-12-06 21:37:07 --> 99
ERROR - 2016-12-06 21:37:07 --> 100
ERROR - 2016-12-06 21:37:07 --> 101
ERROR - 2016-12-06 21:37:07 --> 102
ERROR - 2016-12-06 21:37:07 --> 103
ERROR - 2016-12-06 21:37:07 --> 104
ERROR - 2016-12-06 21:37:07 --> 105
ERROR - 2016-12-06 21:37:07 --> 106
ERROR - 2016-12-06 21:37:08 --> 107
ERROR - 2016-12-06 21:37:08 --> 108
ERROR - 2016-12-06 21:37:08 --> 109
ERROR - 2016-12-06 21:37:08 --> 110
ERROR - 2016-12-06 21:37:08 --> 111
ERROR - 2016-12-06 21:37:08 --> 112
ERROR - 2016-12-06 21:37:08 --> 113
ERROR - 2016-12-06 21:37:08 --> 114
ERROR - 2016-12-06 21:37:08 --> 115
ERROR - 2016-12-06 21:37:08 --> 116
ERROR - 2016-12-06 21:37:08 --> 117
ERROR - 2016-12-06 21:37:08 --> 118
ERROR - 2016-12-06 21:37:08 --> 119
ERROR - 2016-12-06 21:37:08 --> 120
ERROR - 2016-12-06 21:37:08 --> 121
ERROR - 2016-12-06 21:37:08 --> 122
ERROR - 2016-12-06 21:41:51 --> 0
ERROR - 2016-12-06 21:41:52 --> 1
ERROR - 2016-12-06 21:58:27 --> WHY : 40015
ERROR - 2016-12-06 21:58:41 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  erreur de syntaxe sur ou près de « FROM »
LINE 4:           FROM (
                  ^ D:\Developpement\Serveur Web\wamp\www\projet14club\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2016-12-06 21:58:41 --> Query error: ERREUR:  erreur de syntaxe sur ou près de « FROM »
LINE 4:           FROM (
                  ^ - Invalid query: 
								UPDATE abonnement AS a
										SET "NB_JOURNAUX" = "NB_JOURNAUX"-
										FROM (
												select abonnement."ID_ABO" from abonnement join users 
																				on (users."ID_USER"=abonnement."ID_USER") 
																				where users."ID_USER"=40015 
																				and abonnement."NB_JOURNAUX">0 
																				order by abonnement."DATE_FIN" asc limit 1
											) AS b
								WHERE a."ID_ABO" = b."ID_ABO";
			
ERROR - 2016-12-06 21:59:58 --> Severity: Warning --> pg_query(): Query failed: ERREUR:  erreur de syntaxe sur ou près de « FROM »
LINE 4:           FROM (
                  ^ D:\Developpement\Serveur Web\wamp\www\projet14club\system\database\drivers\postgre\postgre_driver.php 242
ERROR - 2016-12-06 21:59:58 --> Query error: ERREUR:  erreur de syntaxe sur ou près de « FROM »
LINE 4:           FROM (
                  ^ - Invalid query: 
								UPDATE abonnement AS a
										SET "NB_JOURNAUX" = "NB_JOURNAUX"-
										FROM (
												select abonnement."ID_ABO" from abonnement join users 
																				on (users."ID_USER"=abonnement."ID_USER") 
																				where users."ID_USER"=40015 
																				and abonnement."NB_JOURNAUX">0 
																				order by abonnement."DATE_FIN" asc limit 1
											) AS b
								WHERE a."ID_ABO" = b."ID_ABO";
			
ERROR - 2016-12-06 22:00:15 --> 0
ERROR - 2016-12-06 22:00:15 --> 1
ERROR - 2016-12-06 22:00:54 --> 0
ERROR - 2016-12-06 22:00:54 --> 1
ERROR - 2016-12-06 22:01:00 --> 0
ERROR - 2016-12-06 22:01:00 --> 1
ERROR - 2016-12-06 22:01:24 --> WHY : 40015
