<script>
$(document).ready(function() {
 
/*   
    $('#datatable tfoot th').each( function () {
	    var title = $('#datatable thead th').eq( $(this).index() ).text();
	   $(this).html( '<input type="text" style="width:100%;" placeholder="'+title+'" />' );    
    });
*/    
    $('#datatable thead th').each( function () {
	    var title = $('#datatable thead th').eq( $(this).index() ).text();
	   $(this).html( title+' <input type="text" style="width:100%;" placeholder="'+title+'" />' );    
    });    
    
   oTable=$('#datatable').DataTable(
							{
   								"dom": '<"top"fli>rt<"bottom"p><"clear">'
   							}   	
   );
    
    // Apply the search
    oTable.columns().every( function () {
        var that = this;
 
        $( 'input', this.header() ).on( 'keyup change', function () {
            that
                .search( this.value )
                .draw();
        } );
    } );
        
    // Have to be added to have the proper rendered (for bootstrap)
    $('#datatable').removeClass( 'display' ).addClass('table table-striped table-bordered');
    
    
	$('#clore_button').on('click',function(){
		$('#cloreModal').modal('show');
	});    

	$('#etiquette_button').on('click',function(){
		$('#decremEtiquetteModal').modal('show');
	}); 

	$('#email_button').on('click',function(){
		$('#form_mail').click();
	}); 
	
	$('#button_modal_apercu_bordereau').on('click',function(){
		$('#aperçuModal').modal('show');
	});    	

	$('.dismiss_modal').on('click',function(){
		$('#decremEtiquetteModal').modal('hide');
	});  

	$('.checkboxId').on('change',function(){
		//alert('he');
		var id_user = $(this).attr('value');
		if($(this).prop('checked'))
		{
			$('#checkboxIdPopupEtiquette_'+id_user).prop('checked',true);
			$('#checkboxIdMail_'+id_user).prop('checked',true);
		}
		else
		{
			$('#checkboxIdPopupEtiquette_'+id_user).prop('checked',false);
			$('#checkboxIdMail_'+id_user).prop('checked',true);
		}
	});    	

	$('.delete_action').on('click',function(){
		
		id_user=$(this).parents('tr').find('.checkboxId').val();
		//alert(id_user);
		$('#delModal').modal('show');
		$("#modalTargetValue").text(id_user);
		$("#userValue").val(id_user);
		
	});
    
} );
</script>

<div id="main-content">
	<div class="row">
		<div class="col-xs-offset-1 col-xs-10">			
			<div>
				<button id="email_button" class="btn btn-lg btn-primary">Email</button>
				<button id="etiquette_button" class="btn btn-lg btn-info">Etiquettes</button>
				<button id="clore_button" class="btn btn-lg btn-warning pull-right">Vider la liste</button>
			</div>
			<h3>Liste des abonnés dans la liste</h3>
				<table id="datatable" class="display" style="border: 1px solid #fff">
					<thead>
						<tr>
							<th>Numéro d'abonné</th>
							<th>Nom</th>
							<th>Prénom</th>	
							<th>Date de naissance</th>	
							<th>Ville</th>
							<th>Formule</th>
							<th>Sélectionner</th>
							<th>Supprimer</th>					
						</tr>
					</thead>
					<tbody>
						<?php 
						foreach ($list as $line) 
						{
						?>
						<tr>
							<td><?php echo $line['num_user']; ?></td>											
							<td><?php echo $line['nom']; ?></td>
							<td><?php echo $line['prenom']; ?></td>
							<td><?php echo $line['date_naissance']; ?></td>
							<td><?php echo $line['ville']; ?></td>
							<td><?php echo $line['formule']; ?></td>
							<td>
								<input name="checkbox_<?php echo $line['id_user']; ?>" class="checkboxId" id="checkboxId_<?php echo $line['id_user']; ?>" style="width:20px; height:20px;" type="checkbox" value="<?php echo $line['id_user']; ?>" />
							</td>
							<td>
								<button type="button" class="btn btn-danger delete_action" aria-label="Left Align">
								  <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
								</button>	
							</td>						
						</tr>
						<?php
							
						}
						?>
					</tbody>

				</table>
		</div>
	</div>	
</div>

<!-- Modal Confirmation clore la liste -->

<div class="modal fade" id="cloreModal" tabindex="-1" role="dialog" aria-labelledby="cloreModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="cloreModalLabel">Message de confirmation</h4>
      </div>
      <div class="modal-body">
      	<p>Voulez-vous vider la liste ?</p>
      	<div>
	      	<form action="" method="post" class="form-horizontal">
				<input name="confirmed" type="hidden" value="1" />			     		
      	</div>
      </div>
      <div class="modal-footer">
	  <input class="btn btn-success" type="submit" value="Oui" />
	</form>        	
        <button type="button" class="btn btn-default" data-dismiss="modal">Non</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Delete -->
<div class="modal fade" id="delModal" tabindex="-1" role="dialog" aria-labelledby="delModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="delModalLabel">Message de confirmation</h4>
      </div>
      <div class="modal-body">
      	<p>Voulez vous vraiment supprimer l'abonné <span style="font-weight: bold;" id="modalTargetValue"></span> de la liste ?</p>
      	<div>
	      	<form action="<?php echo $base_url.'administration/delete_user_from_list'; ?>" method="post" class="form-horizontal">
				<input id="userValue" name="id_user" type="hidden" value="<?php echo $line['id_user']; ?>" />			     		
      	</div>
      </div>
      <div class="modal-footer">
		  <input class="btn btn-success" type="submit" value="Oui" />
		</form>        	
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>


<!-- Modal etiquette decompter journaux -->
<div class="modal fade" id="decremEtiquetteModal" tabindex="-1" role="dialog" aria-labelledby="decremEtiquetteLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button id="buttonCloseEtiquette" type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="listModalLabel">Imprimer les étiquettes</h4>
      </div>
      <div class="modal-body">
      	<div>
	      	<form target="_blank" action="<?php echo $base_url.'administration/print_etiquette_selected'; ?>" method="post" class="form-horizontal">
			  <div class="form-group"  style="padding: 15px;">
				<p>Combien de journaux décompter ?</p>
			  </div>
			  <input name="nb_decrem" class="form-control" type="number" value="0" />
				<?php 
				foreach ($list as $line) 
				{
				?>
					<input style="display: none;" name="checkboxIdPopupEtiquette_<?php echo $line['id_user']; ?>" id="checkboxIdPopupEtiquette_<?php echo $line['id_user']; ?>" style="width:20px; height:20px;" type="checkbox" value="<?php echo $line['id_user']; ?>" />
					
				<?php
					
				}
				?>			  
			  <br> 		
      	</div>
      </div>
      <div class="modal-footer">
		  <input class="btn btn-success dismiss_modal" type="submit" value="Continuer" />
		</form>          	
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal mail -->
<div style="display: none;">
	 <form target="_blank" action="<?php echo $base_url.'administration/send_mail_to_users_selected'; ?>" method="post" class="form-horizontal">
			<?php 
			foreach ($list as $line) 
			{
			?>
				<input name="checkboxIdMail_<?php echo $line['id_user']; ?>" id="checkboxIdMail_<?php echo $line['id_user']; ?>" style="width:20px; height:20px;" type="checkbox" value="<?php echo $line['id_user']; ?>" />
				
			<?php
				
			}
			?>			  
		  <br> 		
	
	  <input id="form_mail" style="display: none;" class="btn btn-success dismiss_modal" type="submit" value="Continuer" />
	</form>          	
</div>

<!-- Modal Confirm Génération du Bordereau -->
<!--
<div class="modal fade" id="genModal" tabindex="-1" role="dialog" aria-labelledby="genModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="genModalLabel">Générer le bordereau de Banque</h4>
      </div>
      <div class="modal-body">
      	<div>
	      	<form action="<?php echo $base_url ?>impression/bordereaux" target="_blank" method="post" class="form-horizontal">
	      		Valider la génération du bordereau et définir un nombre de journaux à décrémenter si il faut.
			  <div class="form-group"  style="padding: 15px;">
			    <label for="nb_journaux">Nombre de journaux à décrémenter :</label>
			    <input required="required" type="number" class="form-control" name="nb_journaux" value="0">
			  </div>
			  <div class="form-group"  style="padding: 15px;">
			    <label for="mode_paiement">Mode de paiement : </label>
				<select class="form-control" id="mode_paiement" name="mode_paiement">
				  <option value="Chèque Traditionnels Français">Chèque Traditionnels Français</option>
				  <option value="Chèque Etrangers">Chèque Etrangers</option>
				  <option value="Mandat Cash (CCP)">Mandat Cash (CCP)</option>
				  <option value="Espèces">Espèces</option>
				  <option value="Virement Bancaire">Virement Bancaire</option>
				</select>				      
			  </div>			  
			  <input class="btn btn-success" type="submit" value="Générer le bordereau banque" />
			</form>     		
      	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
-->