<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Open+Sans" />

<div id="accueil-box" style="height: 100%">
<div id="accueil-img-container">
</div>
<!--	<h3>Accueil</h3> -->
<div class="row">
	<div class="col-xs-1"></div>
	<div class="col-xs-10">
		<!-- 
		<div id="accueil-module-container" class="row">
			<div class="col-xs-4">
				<h2>Gestion des adhérents</h2>
				<p>
					Lorem ipsum dolor sit amet, 
					consectetur adipiscing elit. Cras ut mauris turpis. Morbi hendrerit libero et nibh pretium, et egestas risus 
					semper. Nam euismod vestibulum metus, ac elementum arcu venenatis sit amet. Sed sodales, ex id tempus bibendum,
					 leo orci tempor leo, ac lacinia quam magna sed lorem. Sed blandit pulvinar dolor. Phasellus in nibh orci. 
					 Suspendisse potenti. Morbi ultrices.
				</p>
				<a style="display: none;" href="<?php echo $base_url ?>abonne/find_abonne">lien gestion des adhérents</a>
			</div>
			<div class="col-xs-4">
				<h2>Envoi de mail</h2>
				<p>
					Lorem ipsum dolor sit amet, 
					consectetur adipiscing elit. Cras ut mauris turpis. Morbi hendrerit libero et nibh pretium, et egestas risus 
					semper. Nam euismod vestibulum metus, ac elementum arcu venenatis sit amet. Sed sodales, ex id tempus bibendum,
					 leo orci tempor leo, ac lacinia quam magna sed lorem. Sed blandit pulvinar dolor. Phasellus in nibh orci. 
					 Suspendisse potenti. Morbi ultrices.				
				</p>
				<a style="display: none;" href="<?php echo $base_url ?>abonne/mailing">Envoie de mail</a>
			</div>
			<div class="col-xs-4">
				<h2>Gestion des Banques</h2> 
				<p>
					Lorem ipsum dolor sit amet, 
					consectetur adipiscing elit. Cras ut mauris turpis. Morbi hendrerit libero et nibh pretium, et egestas risus 
					semper. Nam euismod vestibulum metus, ac elementum arcu venenatis sit amet. Sed sodales, ex id tempus bibendum,
					 leo orci tempor leo, ac lacinia quam magna sed lorem. Sed blandit pulvinar dolor. Phasellus in nibh orci. 
					 Suspendisse potenti. Morbi ultrices.				
				</p>
				<a style="display: none;" href="<?php echo $base_url ?>edition/edit_type_abonnement">Gestion des banques</a>
			</div>
		</div>		
	</div>
	-->
	<div class="col-xs-1"></div>
</div>


</div>

<script>
	$('#accueil-module-container div').on('click',function()
	{
		var path_redirect=$(this).children('a').attr('href');
		//alert(path_redirect);
		window.location.href = path_redirect;
	});
</script>