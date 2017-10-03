<link href="<?php echo $base_url; ?>../assets/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
<script src="<?php echo $base_url; ?>../assets/js/fileinput.min.js"></script>
<!-- bootstrap.js below is only needed if you wish to the feature of viewing details
     of text file preview via modal dialog -->

<!-- optionally if you need translation for your language then include 
    locale file as mentioned below -->
<!-- <script src="path/to/js/fileinput_locale_<lang>.js"></script> -->



<div id="main-content">


<div class="container">
	<h3>Rédaction du message</h3>
	<br />
	<?php
		if($confirmation_mail=='ok')
		{
	?>
		<div class="alert alert-success" role="alert">
			L'envoi de mail s'est bien déroulé.
		</div>		
	<?php		
		}
		elseif($confirmation_mail=='nok')
		{
	?>
		<div class="alert alert-danger" role="alert">
			L'envoi de mail s'est mal bien déroulé.
		</div>		
	<?php				
		};		
	?>
	<div class="row">
	<div class="col-xs-10">
		<form method="post" action="" enctype="multipart/form-data">
			  <div class="form-group">
			    <label for="receiver">Destinataire</label>
			    <input name="receiver" type="email" class="form-control" id="receiver" placeholder="Destinataire" value="<?php if(isset($info_user) && $info_user!=""){echo $info_user['email'];} ?>">
			  </div>
			  <div class="form-group">
			    <label for="objet">Objet</label>
			    <input name="objet" type="text" class="form-control" id="objet" placeholder="Objet">
			  </div>
			  <div class="form-group">
			    <label for="file">Pièces jointes</label>
			    <input type="file" class="file" id="file" name="userfile">
			  </div>
			  <br>			  		  
			  <textarea name="text" placeholder=". . ." class="form-control" rows="10"></textarea>
			  <br />
			  <input type="hidden" name="id_user" value="<?php if(isset($info_user) && $info_user!=""){echo $info_user['id_user'];} ?>" />
			  <button type="submit" class="btn btn-default">Envoyer</button>			  			
		</form>
	</div>		
	</div>
</div>

</div>