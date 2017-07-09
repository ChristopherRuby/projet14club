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
<div>
	<?php 
	$padding=0;
	for($i=0;$i<count($list_user);$i++)
	{
		log_message('error',$i);
		if($padding==0)
		{

		echo "<div class='row'>";
	
		}
	?>
	<div class="col-xs-4">
		N°<?php echo $list_user[$i]['num_user']; ?>
		<br>		
		<?php echo $list_user[$i]['nom'].' '.$list_user[$i]['prenom']?>
		<br>
		<?php echo $list_user[$i]['adresse']; ?>
		<br>
		<?php echo $list_user[$i]['cp'].' '.$list_user[$i]['ville']?>
		<br>
		<?php echo $list_user[$i]['pays']; ?>
	</div>
	<?php
		if($padding==2 || $i==count($list_user))
		{
			echo "</div><br/><br/>";
		}
		if($padding==2)
		{
			$padding=0;
		}
		else{$padding++;}
	
	}
	?>
</div>