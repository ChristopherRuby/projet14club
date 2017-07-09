<script>
$(document).ready(function() {

    $('#birthday').datepicker();
    $('#subscribe_day').datepicker();
    
} );
</script>




<div id="main-content">
	
	<div class="row">		
		<div class="col-xs-2" id="left-menu">
			<ul class="list-group" style="margin-left: 5%">
				<a class="list-group-item <?php if($menu_flag_link=='index'){echo "active";} ?>" href="<?php echo $base_url ?>abonne">Vue d'ensemble</a>
			  <a class="list-group-item <?php if($menu_flag_link=='create'){echo "active";} ?>" href="<?php echo $base_url ?>abonne/create">Création d'une fiche</a>
			  <a class="list-group-item <?php if($menu_flag_link=='find_abonne'){echo "active";} ?>" href="<?php echo $base_url ?>abonne/find_abonne">Recherche d'une fiche</a>
			  <li class="list-group-item">Autre actions</li>
			</ul>		
		</div>
		
		
		<div class="col-xs-8" id="content">			
	    	<!-- <img src="<?php echo $base_url; ?>../user_photo/chris_photo.jpg" alt="140x140" class="img-circle" style="width: 140px; height: 140px;"> -->	
	    	<!-- <img src="<?php echo $base_url; ?>../user_photo/chris_photo.jpg" alt="140x140" class="img-circle" style="width: 190px; height: 190px;"> -->
	    	<!-- <img src="<?php echo $base_url; ?>../user_photo/chris_photo.jpg" alt="140x140" class="img-circle" style="width: 240px; height: 240px;"> -->
	    	<div class="view_abonne_header_content">
	    		<div class="row">
	    			<div class="col-xs-4">	    				
	    				<img src="<?php echo $base_url; ?>../user_photo/chris_photo.jpg" alt="140x140" class="img-circle" style="width: 190px; height: 190px;">
	    			</div>
	    			<div class="col-xs-8">
	    				<div style="margin-bottom: 50px"></div>
			    		<div class="view_abonne_field" style="border-bottom: 1px #ddd solid;padding-left: 10px;border-left: 1px #ddd solid;margin-bottom: 20px">
			    			<span><b>Nom : </b></span>
			    			<span><?php echo $abonne['nom']; ?></span>
			    		</div>
			    		<div class="view_abonne_field" style="border-bottom: 1px #ddd solid;padding-left: 10px;border-left: 1px #ddd solid;margin-bottom: 20px">
			    			<span><b>Prénom : </b></span>
			    			<span><?php echo $abonne['prenom']; ?></span>
			    		</div>	
			    		<div class="view_abonne_field" style="border-bottom: 1px #ddd solid;padding-left: 10px;border-left: 1px #ddd solid;margin-bottom: 20px">
			    			<span><b>Date de naissance : </b></span>
			    			<span><?php echo $abonne['date_naissance']; ?></span>
			    		</div>				    					    			    				
	    			</div>
	    		</div>
	    	</div>
	    	<div class="view_abonne_body_content">
	    		<div style="margin-bottom: 50px"></div>
	    		<div class="row">
	    			<div class="col-xs-6">
			    		<div class="view_abonne_field" style="border-bottom: 1px #ddd solid;padding-left: 10px;border-left: 1px #ddd solid;margin-bottom: 20px">
			    			<span><b>Sexe : </b></span>
			    			<span><?php echo $abonne['sexe']; ?></span>
			    		</div>
			    		<div class="view_abonne_field" style="border-bottom: 1px #ddd solid;padding-left: 10px;border-left: 1px #ddd solid;margin-bottom: 20px">
			    			<span><b>Adresse 1 : </b></span>
			    			<span><?php echo $abonne['adresse1']; ?></span>
			    		</div>
			    		<div class="view_abonne_field" style="border-bottom: 1px #ddd solid;padding-left: 10px;border-left: 1px #ddd solid;margin-bottom: 20px">
			    			<span><b>Adresse 2 : </b></span>
			    			<span><?php echo $abonne['adresse2']; ?></span>	    	
			    		</div>	    			    			    		
			    		<div class="view_abonne_field" style="border-bottom: 1px #ddd solid;padding-left: 10px;border-left: 1px #ddd solid;margin-bottom: 20px">
			    			<span><b>Ville : </b></span>
			    			<span><?php echo $abonne['ville']; ?></span>
			    		</div>
			    		<div class="view_abonne_field" style="border-bottom: 1px #ddd solid;padding-left: 10px;border-left: 1px #ddd solid;margin-bottom: 20px">
			    			<span><b>Code postal : </b></span>
			    			<span><?php echo $abonne['cp']; ?></span>
			    		</div>		    				
	    			</div>
	    			<div class="col-xs-6">
			    		<div class="view_abonne_field" style="border-bottom: 1px #ddd solid;padding-left: 10px;border-left: 1px #ddd solid;margin-bottom: 20px">
			    			<span><b>Email : </b></span>
			    			<span><?php echo $abonne['email']; ?></span>
			    		</div>
			    		<div class="view_abonne_field" style="border-bottom: 1px #ddd solid;padding-left: 10px;border-left: 1px #ddd solid;margin-bottom: 20px">
			    			<span><b>Date d'inscription : </b></span>
			    			<span><?php echo $abonne['date_inscription']; ?></span>
			    		</div>
			    		<div class="view_abonne_field" style="border-bottom: 1px #ddd solid;padding-left: 10px;border-left: 1px #ddd solid;margin-bottom: 20px">
			    			<span><b>Formule : </b></span>
			    			<span><?php echo $abonne['formule']; ?></span>	    	
			    		</div>	    			    			    		
			    		<div class="view_abonne_field" style="border-bottom: 1px #ddd solid;padding-left: 10px;border-left: 1px #ddd solid;margin-bottom: 20px">
			    			<span><b>Status Abonné : </b></span>
			    			<span><?php echo $abonne['status']; ?></span>
			    		</div>		    				
	    			</div>	    			
	    		</div>    			    		
	    	</div>
		</div>
		<div class="col-xs-1"></div>
	</div>

</div>