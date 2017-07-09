<?php
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
				<td style='width:20%;text-align: right;'></td>
			</tr>
			<tr></tr>
			<tr>
				<td>DATE : ".$date."</td>
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
	$html2pdf_upload = new HTML2PDF('P','A4','fr');
    $html2pdf_visu->WriteHTML($content);
    $html2pdf_upload->WriteHTML($content);
	//$html2pdf_upload->Output('./bordereaux/'.$name_bordereau.'.pdf','F');
    $html2pdf_visu->Output(''.$name_bordereau.'.pdf');
?>