<script>
$(document).ready(function() {
    
    $('#datatable_archived tfoot th').each( function () {
	    var title = $('#datatable_archived thead th').eq( $(this).index() ).text();
	   $(this).html( '<input type="text" style="width:100%;" placeholder="'+title+'" />' );    
    });
    
   oTable=$('#datatable_archived').DataTable( {
    											"order": []
											} );
    	
    // Apply the search
    oTable.columns().every( function () {
        var that = this;
 
        $( 'input', this.footer() ).on( 'keyup change', function () {
            that
                .search( this.value )
                .draw();
        } );
    } );

    $('#datatable_users tfoot th').each( function () {
	    var title = $('#datatable_users thead th').eq( $(this).index() ).text();
	   $(this).html( '<input type="text" style="width:100%;" placeholder="'+title+'" />' );    
    });
    
   uTable=$('#datatable_users').DataTable();
    
    // Apply the search
    uTable.columns().every( function () {
        var that = this;
 
        $( 'input', this.footer() ).on( 'keyup change', function () {
            that
                .search( this.value )
                .draw();
        } );
    } );
        
    // Have to be added to have the proper rendered (for bootstrap)
    $('#datatable_archived').removeClass( 'display' ).addClass('table table-striped table-bordered');
    $('#datatable_users').removeClass( 'display' ).addClass('table table-striped table-bordered');
    
    
	$('#clore_button').on('click',function(){
		$('#cloreModal').modal('show');
	});    
	
	$('#button_modal_apercu_bordereau').on('click',function(){
		$('#aperçuModal').modal('show');
	});    	

	$('.popupEtiquette').on('click',function(){
		
		var id_list = $(this).siblings('span').text();
		$('#id_list').val(id_list);
		$('#decremEtiquetteModal').modal('show');
	});	
    
} );
</script>

<div id="main-content">
	<div class="row">
		<div class="col-xs-4">			
			<h3>Listes archivés</h3>
				<table id="datatable_archived" class="display" style="border: 1px solid #fff">
					<thead>
						<tr>
							<th>Numéro la liste</th>
							<th>Email</th>	
							<th>Etiquette</th>			
						</tr>
					</thead>
					<tbody>
						<?php 
						foreach ($list_archive as $line) 
						{
						?>
						<tr>
							<td><a href="<?php echo $base_url; ?>administration/archived_list/<?php echo $line['id_list']; ?>"><?php echo $line['id_list']; ?></a></td>											
							<td><a href="<?php echo $base_url; ?>administration/write_mail_from_list/<?php echo $line['id_list']; ?>">Email</a></td>
							<td><a class="popupEtiquette" target="_blank" >Etiquettes</a>
								<span style="display: none;"><?php echo $line['id_list']; ?></span>
							</td>					
						</tr>
						<?php
							
						}
						?>
					</tbody>
					<tfoot>
						<tr>
							<th></th>
							<th></th>
							<th></th>
						</tr>					
					</tfoot>
				</table>
		</div>
		<div class="col-xs-8">
			<h3>Utilisateurs de la liste : <?php echo $current_list; ?></h3>
				<table id="datatable_users" class="display" style="border: 1px solid #fff">
					<thead>
						<tr>
							<th>Numéro d'abonné</th>
							<th>Nom</th>
							<th>Prénom</th>	
							<th>Date de naissance</th>
							<th>Ville</th>
						</tr>
					</thead>
					<tbody>
						<?php 
						if ($list_users!="")
						{
						foreach ($list_users as $line) 
						{
						?>
						<tr>
							<td><?php echo $line['num_user']; ?></td>											
							<td><?php echo $line['nom']; ?></td>
							<td><?php echo $line['prenom']; ?></td>
							<td><?php echo $line['date_naissance']; ?></td>
							<td><?php echo $line['ville']; ?></td>						
						</tr>
						<?php
							
						}
						}
						?>
					</tbody>
					<tfoot>
						<tr>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
							<th></th>
						</tr>					
					</tfoot>
				</table>			
		</div>
	</div>	
</div>

<!-- Modal decompter journaux -->
<div class="modal fade" id="decremEtiquetteModal" tabindex="-1" role="dialog" aria-labelledby="decremEtiquetteLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="listModalLabel">Journaux à décompter</h4>
      </div>
      <div class="modal-body">
      	<div>
	      	<form action="<?php echo $base_url.'administration/etiquettes_archived'; ?>" method="post" class="form-horizontal">
			  <div class="form-group"  style="padding: 15px;">
				<p>Combien de journaux décompter ?</p>
			  </div>
			  <input name="nb_decrem" class="form-control" type="number" value="0" />
			  <input id="id_list" name="id_list" class="form-control" type="hidden" value="" />
			  <br>
			  <input class="btn btn-success" type="submit" value="Continuer" />
			</form>     		
      	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
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