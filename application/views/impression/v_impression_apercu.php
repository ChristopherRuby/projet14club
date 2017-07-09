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

<script>
$(document).ready(function() {
	$('#button_modal_gen_bordereau').on('click',function(){
		$('#genModal').modal('show');
	});     	
} );
</script>
<?php
	$nb_cheque="";
	$prix="";
    $content ="";
?>    
<page>
	<div style="float:right;margin-right: 15px;margin-top: 2%;">
			<ul style="list-style-type:none;">
				<form method="post" target="_blank" action="<?php echo $base_url ?>impression/bordereaux_for_print">
				<li>
						<input style="padding: 6px 12px;
							color: #fff;
						    background-color: #45bdbd;
						    border-color: #3ea3ad;
						    width: 120px;
							margin-bottom: 10px" value="Imprimer" type="submit" />
				</li>
				<input type="hidden" name="mode_paiement" value="<?php echo $mode_paiement; ?>" />
				</form>
				<form method="post" target="_blank" action="<?php echo $base_url ?>impression/bordereaux_for_print">
				<li>
						<input id="button_modal_gen_bordereau" style="padding: 6px 12px;
							color: #fff;
						    background-color: #5cb85c;
						    border-color: #4cae4c;
						    width: 120px;
							margin-bottom: 10px" value="Valider" type="button" />
				</li>
				<input type="hidden" name="mode_paiement" value="<?php echo $mode_paiement; ?>" />
				</form>
				<form method="post" action="<?php echo $base_url ?>impression/index">
				<li>
						<input style="padding: 6px 12px;
							color: #fff;
						    background-color: #4575bd;
						    border-color: #33588e;
						    width: 120px;
							margin-bottom: 10px" value="Fermer" type="submit" />
				</li>
				</form>
			</ul>	
		
	</div>
	<div style='width:750px;margin-left:auto;margin-right:auto;'>
		<h2 style='text-align: center;'>Bordereau de banques - <?php echo $mode_paiement; ?></h2>
		<hr>

		<table style='width:100%'>
			<tr>
				<td style='width:80%'>CLIENT : 14 le Club</td>
				<td style='width:20%;text-align: right;'></td>
			</tr>
			<tr></tr>
			<tr>
				<td>DATE : <?php echo $date_today; ?></td>
			</tr>
		</table>
		<br />
		<table style='width:100%;border-collapse: collapse;'>
			<thead>
				<tr style=''>
					<th style='width:20%;text-align: center;border: 1px solid #000;padding: 10px 0;'><b>N°Abonné</b></th>
					<th style='width:20%;text-align: center;border: 1px solid #000;padding: 10px 0;'><b>Banque</b></th>
					<th style='width:20%;text-align: center;border: 1px solid #000;padding: 10px 0;'><b>Adhérent</b></th>					
					<th style='width:20%;text-align: center;border: 1px solid #000;padding: 10px 0;'><b>Nom tireur</b></th>
					<th style='width:20%;text-align: center;border: 1px solid #000;padding: 10px 0;'><b>Montant</b></th>
				</tr>
			</thead>
			<tbody>
<?php
if(isset($list_bordereau))
{
	// On itère sure tous les abonnements pour créer les lignes
	foreach($list_bordereau as $line)
	{
		$nb_cheque=count($list_bordereau);
		$prix=$line['prix']+$prix;
		echo"		<tr>
						<td style='width:20%;border: 1px solid #000;padding: 5px 0px 5px 5px;'>".$line['num_member']."</td>
						<td style='width:20%;border: 1px solid #000;padding: 5px 0px 5px 5px;'>".$line['lib_banque']."</td>
						<td style='width:20%;border: 1px solid #000;padding: 5px 0px 5px 5px;'>".$line['nom']."</td>
						<td style='width:20%;border: 1px solid #000;padding: 5px 0px 5px 5px;'>".$line['nom_tireur']."</td>
						<td style='width:20%;border: 1px solid #000;padding: 5px 0px 5px 5px;'>".$line['prix']." €</td>
						</tr>
				";
	}
}
?>								
</tbody>
		</table>
		<br>
		<table style='width:100%;'>
			<tr>
				<td style='width:80%;'>Nombre de chèques : <?php echo $nb_cheque; ?></td>
				<td style='width:20%;text-align: right;'>TOTAL : <?php echo $prix; ?> €</td>
			</tr>
		</table>
	</div>
</page>
<!-- Modal Confirm Génération du Bordereau -->
<div class="modal fade" id="genModal" tabindex="-1" role="dialog" aria-labelledby="genModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="genModalLabel">Générer le bordereau de banque</h4>
      </div>
      <div class="modal-body">
      	<div>
	      	<form action="<?php echo $base_url ?>impression/validate_bordereau" method="post" class="form-horizontal">
	      		Valider la génération du bordereau et définir un nombre de journaux à décompter si besoin.
			  <div class="form-group"  style="padding: 15px;">
			    <label for="nb_journaux">Nombre de journaux à décompter :</label>
			    <input required="required" type="number" class="form-control" name="nb_journaux" value="0">
			  </div>
			  <input value="<?php echo $mode_paiement; ?>" type="hidden" name="mode_paiement" id="mode_paiement" />		
			  <input value="<?php echo $name_bordereau; ?>" type="hidden" name="name_bordereau" id="name_bordereau" />  
			  <input class="btn btn-success" type="submit" value="Générer le bordereau banque" />
			</form>     		
      	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<?php
/*
$nb_cheque="";
$prix="";
$content = "
<page>
	<div style='width:750px;margin-left:auto;margin-right:auto;'>
		<h2 style='text-align: center;'>Bordereau de banques - ".$mode_paiement."</h2>
		<hr>

		<table style='width:100%'>
			<tr>
				<td style='width:80%'>CLIENTS : 14 le Club</td>
				<td style='width:20%;text-align: right;'>04250048701</td>
			</tr>
			<tr></tr>
			<tr>
				<td>DATE : 16/07/2015</td>
			</tr>
		</table>
		<br />
		<table style='width:100%;border-collapse: collapse;'>
			<thead>
				<tr style='border: 1px solid #000;'>
					<th style='width:20%;text-align: center;border: 1px solid #000;padding: 10px 0;'><b>N°Abonné</b></th>
					<th style='width:20%;text-align: center;border: 1px solid #000;padding: 10px 0;'><b>Banque</b></th>
					<th style='width:20%;text-align: center;border: 1px solid #000;padding: 10px 0;'><b>Adhérent</b></th>
					<th style='width:20%;text-align: center;border: 1px solid #000;padding: 10px 0;'><b>Nom tireur</b></th>
					<th style='width:20%;text-align: center;border: 1px solid #000;padding: 10px 0;'><b>Montant</b></th>
				</tr>
			</thead>
			<tbody>
				";
				
if(isset($list_bordereau))
{

	// On itère sure tous les abonnements pour créer les lignes
	foreach($list_bordereau as $line)
	{
		$nb_cheque=count($list_bordereau);
		$prix=$line['prix']+$prix;
		$content.="		<tr>
						<td style='width:20%;border: 1px solid #000;padding: 5px 0px 5px 5px;'>".$line['num_member']."</td>
						<td style='width:20%;border: 1px solid #000;padding: 5px 0px 5px 5px;'>".$line['lib_banque']."</td>
						<td style='width:20%;border: 1px solid #000;padding: 5px 0px 5px 5px;'>".$line['nom']."</td>
						<td style='width:20%;border: 1px solid #000;padding: 5px 0px 5px 5px;'>".$line['nom_tireur']."</td>
						<td style='width:20%;border: 1px solid #000;padding: 5px 0px 5px 5px;'>".$line['prix']." €</td>
						</tr>
				";
	}
}								
			$content.="</tbody>
		</table>
		<br>
		<table style='width:100%;'>
			<tr>
				<td style='width:80%;'>Nombre de chèques : ".$nb_cheque."</td>
				<td style='width:20%;text-align: right;'>TOTAL : ".$prix." €</td>
			</tr>
		</table>
	</div>
</page>
";
 
    require_once('./assets/html2pdf_v4.03/html2pdf.class.php');
    $html2pdf_visu = new HTML2PDF('P','A4','fr');
	//$html2pdf_upload = new HTML2PDF('P','A4','fr');
    $html2pdf_visu->WriteHTML($content);
    $html2pdf_upload->WriteHTML($content);
	//$html2pdf_upload->Output('./bordereaux/'.$name_bordereau.'.pdf','F');
    $html2pdf_visu->Output(''.$name_bordereau.'.pdf');
 * 
 * */
?>