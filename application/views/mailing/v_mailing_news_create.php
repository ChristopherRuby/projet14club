<link href="<?php echo $base_url; ?>../assets/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
<script src="<?php echo $base_url; ?>../assets/js/fileinput.min.js"></script>
<!-- bootstrap.js below is only needed if you wish to the feature of viewing details
     of text file preview via modal dialog -->

<!-- optionally if you need translation for your language then include 
    locale file as mentioned below -->
<!-- <script src="path/to/js/fileinput_locale_<lang>.js"></script> -->

<script>
$(document).ready(function() {
    
	$('#test_button').on('click',function()
	{	
		$('#test_input').val("1");
		alert($('#test_input').val());
		$('#test_submit').click();
	});
    
} );
</script>

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
			    <label for="objet">Objet</label>
			    <input name="objet" type="text" class="form-control" id="objet" placeholder="Objet">
			  </div>
			  <div class="form-group">
			    <label for="file">Pièces jointes</label>
			    <input type="file" class="file" id="file" name="userfile">
			  </div>		
			  <br />
			  <div class="form-group">
			    <label for="nb_journaux">Nombre de journaux à décompter</label>
			    <input name="nb_journaux" type="number" class="form-control" id="nb_journaux" value="0">
			  </div>
			  <br>			  	  
			  <textarea name="text" placeholder=". . ." class="form-control" rows="10"></textarea>	
			  <input name="test" type="hidden" class="form-control" id="test_input" value="0">
			  <br>		  
			  <button type="submit" class="btn btn-default">Envoyer</button>
			  <button id="test_button" class="btn btn-info pull-right" type="button">Tester</button>
			  <input id="test_submit" type="submit" style="display: none;" />	  			
		</form>
	</div>		
	</div>
</div>

</div>