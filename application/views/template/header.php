<html>
        <head>
                <title>CodeIgniter Tutorial</title>
        </head>
        <body>

<!-- Global CSS -->
<link rel="stylesheet" href="<?php echo $base_url; ?>../assets/css/global.css">

<!-- CSS jQuery -->        	
<link rel="stylesheet" href="<?php echo $base_url; ?>../assets/css/jQuery/jquery-ui.min.css">        	
<!-- jQUery 2.1.3 -->        	
<script src="<?php echo $base_url; ?>../assets/js/jQuery/jquery-2.1.3.min.js"></script>
<!-- jQUery  UI -->        	
<script src="<?php echo $base_url; ?>../assets/js/jQuery/jquery-ui.min.js"></script>

<!-- Bootstrap CSS -->
<link href="<?php echo $base_url; ?>../assets/css/bootstrap/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap JS -->
<script type="text/javascript" charset="utf8" src="<?php echo $base_url; ?>../assets/js/bootstrap/bootstrap.min.js" rel="stylesheet"></script>

<!-- DataTables CSS (origin) !! NOT USE -->
<!-- <link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>../assets/DataTables-1.10.7/media/css/jquery.dataTables.css">
<link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>../assets/DataTables-1.10.7/media/css/jquery.dataTables.min.css">
-->
<!-- DataTables JS (origin) -->
<script type="text/javascript" charset="utf8" src="<?php echo $base_url; ?>../assets/DataTables-1.10.7/media/js/jquery.dataTables.js"></script>

<!-- DataTables Bootstrapping -->
<link rel="stylesheet" type="text/css" href="<?php echo $base_url; ?>../assets/DataTables-1.10.7/datatables_bootstrap.css">
<script type="text/javascript" charset="utf8" src="<?php echo $base_url; ?>../assets/DataTables-1.10.7/datatables_bootstrap.js"></script>

<div id="ctl-app">

<nav class="navbar navbar-inverse navbar-static-top">
      <!-- We use the fluid option here to avoid overriding the fixed width of a normal container within the narrow content columns. -->
	<div class="container-fluid">
		<div class="navbar-header">
		  <a class="navbar-brand" href="<?php echo $base_url ?>"><?php echo $title ?></a>
		</div>
		
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse">
		  <ul class="nav navbar-nav">
			<li class="<?php 
				if(isset($nav_flag) && $nav_flag=="abonne")
				{
					 echo "active";
				} 
						?>">
				<a href="<?php echo $base_url ?>abonne/">Abonnés</a>
				<ul class="sous_menu_navbar">
					<a href="<?php echo $base_url ?>abonne"><li>Vue d'ensemble</li></a>
					<a href="<?php echo $base_url ?>abonne/create"><li>Création d'un abonné</li></a>
					<a href="<?php echo $base_url ?>abonne/find_abonne"><li>Recherche des abonnés</li></a>
				</ul>
			</li>
			<!-- 
			<li class="<?php 
				if(isset($nav_flag) && $nav_flag=="edition")
				{
					 echo "active";
				} 
						?>">
				<a href="<?php echo $base_url ?>edition/">Edition</a>
				<ul class="sous_menu_navbar">
					<a href="<?php echo $base_url ?>edition"><li>Vue d'ensemble</li></a>
					<a href="<?php echo $base_url ?>edition/edit_type_abonnement"><li>Edition des types d'abonnement</li></a>
					<a href="<?php echo $base_url ?>edition/edit_banque"><li>Edition des Banques</li></a>
				</ul>				
			</li>
		-->
			<li class="<?php 
				if(isset($nav_flag) && $nav_flag=="mailing")
				{
					 echo "active";
				} 
						?>">
				<a href="<?php echo $base_url ?>mailing/send_mail_no_member">Mailing</a>
				<ul class="sous_menu_navbar">
					<a href="<?php echo $base_url ?>mailing/send_mail_no_member"><li>Envoyer un e-mail nominatif</li></a>
					<a href="<?php echo $base_url ?>mailing/send_news"><li>Envoyer une news</li></a>
				</ul>				
			</li>
			<li class="<?php 
				if(isset($nav_flag) && $nav_flag=="impression")
				{
					 echo "active";
				} 
						?>">
				<a href="<?php echo $base_url ?>impression/">Banque</a>
				<ul class="sous_menu_navbar">
					<a href="<?php echo $base_url ?>impression"><li>Bordereaux de banque</li></a>
					<a href="<?php echo $base_url ?>administration/edit_banque"><li>Gestion des banques</li></a>
				</ul>				
			</li>
			<li class="<?php 
				if(isset($nav_flag) && $nav_flag=="impression")
				{
					// echo "active";
				} 
						?>">
				<a href="<?php echo $base_url ?>impression/etiquettes_by_form">Etiquette</a>			
			</li>
			<!-- 						
			<li class="<?php 
				if(isset($nav_flag) && $nav_flag=="impression")
				{
					 echo "active";
				} 
						?>">
				<a href="<?php echo $base_url ?>impression/">Impression</a>
				<ul class="sous_menu_navbar">
					<a href="<?php echo $base_url ?>impression"><li>Bordereaux de banque</li></a>
					<a href="<?php echo $base_url ?>impression/etiquettes_by_form"><li>Etiquettes</li></a>
				</ul>				
			</li> -->
			<li class="<?php 
				if(isset($nav_flag) && $nav_flag=="administration")
				{
					 echo "active";
				} 
						?>">
				<a href="<?php echo $base_url ?>administration/current_list">Administration</a>
				<ul class="sous_menu_navbar">
					<!-- <a href="<?php echo $base_url ?>administration/edit_banque"><li>Gestion des banques</li></a> -->
					<a href="<?php echo $base_url ?>administration/current_list"><li>Gestion de la liste</li></a>
					<!-- <a href="<?php echo $base_url ?>administration/archived_list"><li>Gestion des listes archivés</li></a> -->
				</ul>				
			</li>			
		  </ul>
		</div><!-- /.navbar-collapse -->
	</div>
</nav>

<div id="global-content"">
	<?php if(isset($head_title)){ ?>
	<div id="header-content">
		<div class="col-xs-12">
			<h1 style="font-family: Georgia;border-bottom: 1px solid #fff;"> &nbsp;&nbsp;<?php if(isset($head_title)){echo $head_title;} ?>
				<small> / <?php if(isset($head_sub_title)){echo $head_sub_title;} ?></small>
			</h1>
		</div>
	</div>
	<?php } ?>
	
	<div style="clear: both;"></div>
	

