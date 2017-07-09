<script>
$(document).ready(function() {
    
    $('#datatable tfoot th').each( function () {
	    var title = $('#datatable thead th').eq( $(this).index() ).text();
	   $(this).html( '<input type="text" style="width:100%;" placeholder="'+title+'" />' );    
    });
    
   oTable=$('#datatable').DataTable(
	{
		"dom": '<"top"fli>rt<"bottom"p><"clear">'
	}      	
   );
    
    // Apply the search
    oTable.columns().every( function () {
        var that = this;
 
        $( 'input', this.footer() ).on( 'keyup change', function () {
            that
                .search( this.value )
                .draw();
        } );
    } );
        
    // Have to be added to have the proper rendered (for bootstrap)
    $('#datatable').removeClass( 'display' ).addClass('table table-striped table-bordered');
    
    
	$('#button_modal_gen_bordereau').on('click',function(){
		$('#genModal').modal('show');
	});    
	
	$('#button_modal_apercu_bordereau').on('click',function(){
		$('#aperçuModal').modal('show');
	});    	

    
} );
</script>

<div id="main-content">
	<div class="row">
		<div class="col-xs-offset-1 col-xs-10">	
		<?php
			if(isset($error))
			{
		?>
			<div class="alert alert-danger" role="alert">
				<?php
				print_r($error); 
				?>
			</div>		
		<?php		
			};		
		?>			
			<p>
				Veuillez cliquer sur le lien suivant pour générer le bordereau de banque souhaité : <a class="btn btn-info" id="button_modal_apercu_bordereau">Aperçu vue</a>
			</p>
			
			<br>
			<h3>Liste des bordereaux</h3>
				<table id="datatable" class="display" style="border: 1px solid #fff">
					<thead>
						<tr>
							<th>Bordereau</th>
							<th>Télécharger</th>						
						</tr>
					</thead>
					<tbody>
						<?php 
						foreach ($list_bordereau_generated as $line) 
						{
						?>
						<tr>
							<td><?php echo $line['bordereau_name']; ?></td>											
							<td>
								<a href="<?php echo $base_url ?>impression/download_file/<?php echo $line['bordereau_name']; ?>" class="btn btn-primary" aria-label="Left Align">
								  <span class="glyphicon glyphicon-file" aria-hidden="true"></span>
								</a>							
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
						</tr>					
					</tfoot>
				</table>
		</div>
	</div>	
</div>

<!-- Modal aperçu du Bordereau -->
<div class="modal fade" id="aperçuModal" tabindex="-1" role="dialog" aria-labelledby="aperçuModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="aperçuModalLabel">Aperçu du Bordereau de Banque</h4>
      </div>
      <div class="modal-body">
      	<div>
	      	<form action="<?php echo $base_url ?>impression/apercu" method="post" class="form-horizontal">
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
			  <input class="btn btn-success" type="submit" value="Aperçu du bordereau de banque" />
			</form>     		
      	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal Confirm Génération du Bordereau -->
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
	      		Valider la génération du bordereau et définir un nombre de journaux à décompter si il faut.
			  <div class="form-group"  style="padding: 15px;">
			    <label for="nb_journaux">Nombre de journaux à décompter :</label>
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
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>