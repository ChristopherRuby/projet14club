
<!-- Global CSS -->
<link rel="stylesheet" href="<?php echo $base_url; ?>../assets/css/global.css">

<!-- CSS jQuery -->        	
<link rel="stylesheet" href="<?php echo $base_url; ?>../assets/css/jQuery/jquery-ui.min.css">        	
<!-- jQUery 2.1.3 -->        	
<script src="<?php echo $base_url; ?>../assets/js/jQuery/jquery-2.1.3.min.js"></script>
<!-- jQUery  UI -->        	
<script src="<?php echo $base_url; ?>../assets/js/jQuery/jquery-ui.min.js"></script>

<script src="<?php echo $base_url; ?>../assets/js/jquery.printpage.js"></script>

<!-- Bootstrap CSS -->
<link href="<?php echo $base_url; ?>../assets/css/bootstrap/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap JS -->
<script type="text/javascript" charset="utf8" src="<?php echo $base_url; ?>../assets/js/bootstrap/bootstrap.min.js" rel="stylesheet"></script>

<script>
$(document).ready(function() {
    
/*   
    $('#print_action').on('click',function()
    {
*/
            jQuery('#content_to_print').click(function() {
                window.print(); 
                //return false;    
            });    	
    	/* $('#content_to_print').printPage(); */
    	/*
    });
 */
/*
    $('#print_action').click(function(){
     $("#content_to_print").print();
	});
*/   
} );
</script>
<!--
<div style="border-bottom:solid;padding: 10px;">
	<button id="print_action" type="submit" class="btn btn-default">impression</button>
	<br>
</div>
-->
<div style="width: 100%" id="content_to_print">
	<div style="height: 22px"></div>
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
	<div class="col-xs-4" style="height: 107px;
		<?php if($padding==2)echo 'padding-left:18px;padding-right:12px'?>">
		N°<?php echo $list_user[$i]['num_user']; ?>
		<br>		
		<?php echo $list_user[$i]['nom'].' '.$list_user[$i]['prenom']?>
		<br>
		<?php echo $list_user[$i]['adresse']; ?>
		<br>
		<?php echo $list_user[$i]['cp'].' '.$list_user[$i]['ville']?>
		<br>
		<?php echo $list_user[$i]['pays']; ?>
		<br>
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
<script>/*
function printDiv() 
{

  var divToPrint=document.getElementById('content_to_print');

  var newWin=window.open('','Print-Window');

  newWin.document.open();

  newWin.document.write('<body onload="window.print()">'+divToPrint.innerHTML+'</body>');

  newWin.document.close();

  setTimeout(function(){newWin.close();},100);

}	
*/
</script>