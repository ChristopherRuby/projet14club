<script>
$(document).ready(function() {
    oTable=$('#datatable').DataTable();
    // Have to be added to have the proper rendered
    $('#datatable').removeClass( 'display' ).addClass('table table-striped table-bordered');
        
    $(".triggerModalDeleteAction").on('click',function(){
    	$('#myModal').modal('show');
    	var current_line=$(this).parent().parent();
    	launch_modal_delete(current_line);
    });
    
    function launch_modal_delete(obj)
    {
    	// Récupération des valeurs de la ligne cliqué
    	var id = obj.children('.cell_id').text();
    	var banque = obj.children('.cell_banque').text();

		$("#popupValue").text(banque);
		$("#idBanque").val(id);

    }
    
} );
</script>

<div id="main-content">
	
	<div class="row">
		<div class="col-xs-1" id="left-menu">	
		</div>
		
		
		<div class="col-xs-9">
			<div>		
				<form class="form-horizontal" method="post" action="">
				  <h3>Ajout d'une nouvelle Banque :</h3>	
				  <div class="form-group">
					   <button type="submit" class="btn btn-success" aria-label="Left Align">
						  <span class="glyphicon glyphicon glyphicon-plus" aria-hidden="true"> Ajout</span>
						</button>		
				    <div class="col-sm-10">
				      <input name="banque" type="text" class="form-control" id="banque" placeholder="Veuillez saisir le nom de la banque">
				    </div>
				  </div>									
					<div style="color:red;"><?php echo form_error('banque'); ?></div>
				</form>
			</div>
			<table id="datatable" class="display">
				<thead>
					<tr>
						<th>ID</th><th>Banque</th><th>Supression</th>
					</tr>
				</thead>
				<tbody>
					<?php 
					foreach ($banque as $line) 
					{
					?>
					<tr>
						<td class="cell_id"><?php echo $line['id']; ?></td>
						<td class="cell_banque"><?php echo $line['banque']; ?></td>
						<td>
							<button type="button" class="btn btn-danger triggerModalDeleteAction" aria-label="Left Align">
							  <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
							</button>							
						</td>
					</tr>
					<?php
						
					}
					?>
				</tbody>
				<tfoot>
					<tr>
						<th>ID</th><th>Banque</th><th>Supression</th>
					</tr>					
				</tfoot>
			</table>
			
		</div>
		
	</div>
	
</div>



<!-- Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Message de confirmation</h4>
      </div>
      <div class="modal-body">
      	<h4>Êtes vous sur de vouloir supprimer ceci : </h4>
      	<form method="POST" action="delete_banque">
      		<input id="idBanque" type="hidden" name="id_banque" value="" />
      		<p id="popupValue"></p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Non, je ne veux pas</button>
        <button type="submit" class="btn btn-danger">Oui</button>
      </div>
     </form>
    </div>
  </div>
</div>

