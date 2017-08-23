

<div id="main-content">
	
	<div class="row" >
		<div class="col-xs-3"></div>					
		<div class="col-xs-6">
			<br>
			<h3>Récapitulatif des abonnés en cours</h3>
			
			<table class="table table-hover">
				<tbody>
					<tr>
						<td style="font-weight:bold;color:red;">Nombre total d'abonnés en cours</td>
						<td style="font-weight:bold;color:red;"><?php print $abonne_en_cours['count']; ?></td>
					</tr>
					<tr>
						<td>Nombre total d'abonnés en cours traditionnels</td>
						<td><?php print $abonne_trad_en_cours['count']; ?></td>
					</tr>
					<tr>
						<td>Nombre total d'abonnés en cours internet</td>
						<td><?php print $abonne_internet_en_cours['count']; ?></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td style="font-weight:bold;">Nombre total de nouveaux abonnés</td>
						<td><?php print $abonne_new['count']; ?></td>
					</tr>
					<tr>
						<td>Nombre total de nouveaux abonnés traditionnels</td>
						<td><?php print $abonne_new_trad['count']; ?></td>
					</tr>
					<tr>
						<td>Nombre total de nouveaux abonnés internet</td>
						<td><?php print $abonne_new_internet['count']; ?></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td style="font-weight:bold;">Nombre total de réabonnements</td>
						<td><?php print $abonne_reabo['count']; ?></td>
					</tr>
					<tr>
						<td>Nombre total de réabonnements traditionnels</td>
						<td><?php print $abonne_reabo_trad['count']; ?></td>
					</tr>
					<tr>
						<td>Nombre total de réabonnements internet</td>
						<td><?php print $abonne_reabo_internet['count']; ?></td>
					</tr>	
					<tr>
						<td></td>
						<td></td>
					</tr>					
					<tr>
						<td>Nombre total d'abonnés clôturés</td>
						<td><?php print $abonne_clo['count']; ?></td>
					</tr>					
					<tr>
						<td style="font-weight:bold;">Nombre total d'abonnés</td>
						<td><?php print $abonne_total['count']; ?></td>
					</tr>																																																								
				</tbody>
			</table>			
			
		</div>
	</div>	
</div>