<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');   
     /*
    $config['mailtype'] = 'html'; 
    $config['protocol'] = 'smtp';
	//$config['mailpath'] = '/usr/sbin/sendmail -t -i';
	$config['charset'] = 'UTF8';
	$config['wordwrap'] = TRUE;
	$config['wrapchars'] = '76';
	$config['smtp_host'] = 'secure.emailsrvr.com';
	$config['smtp_port'] = '465';
	$config['smtp_user'] = '14leclub@patrickbruel.com';
	$config['smtp_pass'] = '';  
	*/
	
	$config['protocol'] = 'smtp';
    $config['smtp_host'] = 'ssl://secure.emailsrvr.com'; //change this
    $config['smtp_port'] = '465';
    $config['smtp_user'] = '14leclub@patrickbruel.com'; //change this
    $config['smtp_pass'] = "regular45watH";
    $config['mailtype'] = 'html';
    $config['charset'] = 'utf-8';
    $config['wordwrap'] = TRUE;
    $config['newline'] = "\r\n"; //use double quotes to comply with RFC 822 standard
	 
?>