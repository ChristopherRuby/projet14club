<link href="<?php echo $base_url; ?>../assets/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
<script src="<?php echo $base_url; ?>../assets/js/fileinput.min.js"></script>

<script>
$(document).ready(function() {
    
    $('#datatable tfoot th').each( function () {
	    var title = $('#datatable thead th').eq( $(this).index() ).text();
	   $(this).html( '<input type="text" style="width:100%;" placeholder="'+title+'" />' );    
    });
    
   oTable=$('#datatable').DataTable();
    
    // Apply the search
    oTable.columns().every( function () {
        var that = this;
 
        $( '#datatable input', this.footer() ).on( 'keyup change', function () {
            that
                .search( this.value )
                .draw();
        } );
    } );
        
    // Have to be added to have the proper rendered (for bootstrap)
    $('#datatable').removeClass( 'display' ).addClass('table table-striped table-bordered');
    
	$('#etiquette_button').on('click',function(){
		$('#decremEtiquetteModal').modal('show');
	}); 
   
} );
</script>

<div id="main-content">
	<div class="col-xs-12">
		<h3>Générer les étiquettes des abonnés dans la liste courante.</h3>
		<button id="etiquette_button" class="btn btn-info">Etiquettes de la liste courante</button>
	</div>
	<div class="col-xs-12" style="padding-bottom: 15px;">
		<h3> Générer une liste d'étiquettes via une recherche par formulaire : </h3>
	<?php
		if(isset($list_user))
		{
	?>
		<div class="alert alert-danger" role="alert">
			Trop de résultats rétournés <?php echo count($list_user); ?>
		</div>		
	<?php		
		}
	?>		
		<div class="col-xs-12">
			<form class="form-inline" method="post" action="" target="_blank">
			  <div class="form-group">
			    <label for="nom">Nom : </label>
			    <input type="text" class="form-control" id="nom" placeholder="Nom" name="nom" value="<?php if(isset($prev_data)){echo $prev_data['nom'];} ?>">
			  </div>
			  <div class="form-group">
			    <label for="prenom">Prénom : </label>
			    <input type="text" class="form-control" id="prenom" placeholder="Prénom" name="prenom" value="<?php if(isset($prev_data)){echo $prev_data['prenom'];} ?>">
			  </div>
			  <div class="form-group">
			    <label for="sexe">Sexe</label>
				<select id="sexe" class="form-control" name="sexe" value="<?php echo set_value('sexe') ?>">
				  <option value="">Sexe</option>
				  <option value="Masculin">Masculin</option>
				  <option value="Féminin">Féminin</option>
				</select>
			  </div>			    			  
		</div>
		<div class="col-xs-12 form-inline" style="width: 100%;padding-bottom: 15px;">
			  <div class="form-group">
			    <label for="ville">Ville : </label>
			    <input type="text" class="form-control" id="ville" placeholder="Ville" name="ville" value="<?php if(isset($prev_data)){echo $prev_data['ville'];} ?>">
			  </div>
			  <div class="form-group">
			    <label for="cp">Code Postal : </label>
			    <input type="text" class="form-control" id="cp" placeholder="Code Postal" name="cp" value="<?php if(isset($prev_data)){echo $prev_data['cp'];} ?>">
			  </div>
			  <div class="form-group form-inline">
			    <label for="dep">Département : </label>
			    <input type="text" class="form-control" id="dep" placeholder="Département" name="dep" value="<?php if(isset($prev_data)){echo $prev_data['dep'];} ?>">
			  </div>			  
			  <div class="form-group">
			    <label for="pays">Pays : </label>
			    <input type="text" class="form-control" id="pays" placeholder="Pays" name="pays" value="<?php if(isset($prev_data)){echo $prev_data['pays'];} ?>">
			  </div> 		
		</div>
			
		<div class="col-xs-12" style="width: 100%;">
			  <div class="form-group">
			    <label for="formule">Formule : </label>
			    <!-- Day dropdown -->
				<select name="type_abo" id="type_abo" class="form-control" style="width: 15%;display: inline;">
					<option value="">Tous</option>
					<?php
					 foreach($formule as $line)
					 {
					?>
					<option <?php if(isset($prev_data)){ if($prev_data['type_abo']==$line['id']){echo "selected='selected'";};} ?>value="<?php echo $line['id']; ?>"><?php echo $line['libelle']; ?></option>
					<?php	
					 }
					?>
				</select>
			   </div>
			  <div class="form-group">
			    <label for="formule">Statut de l'abonnement : </label>
			    <!-- Day dropdown -->
				<select name="status_abo" id="status_abo" class="form-control" style="width: 15%;display: inline;">
					<option value="">- Status d'abonnement -</option>
					<option <?php if(isset($prev_data)){ if($prev_data['status_abo']=='En cours'){echo "selected='selected'";};} ?>value="En cours">En cours</option>
					<option <?php if(isset($prev_data)){ if($prev_data['status_abo']=='Clôturé'){echo "selected='selected'";};} ?>value="Clôturé">Clôturé</option>
				</select>
			   </div>			   
		  </div>			
		<div class="col-xs-12" style="width: 100%;">
			  <div class="form-group">
			    <label for="birhtday">Date de naissance : </label>
			    <!-- Day dropdown -->
				<select name="b_day" id="day" class="form-control" style="width: 15%;display: inline;">
					<option value="">- Jour -</option>
					<?php
					 for($i=1;$i<=31;$i++)
					 {
					?>
					<option <?php if(isset($prev_data)){ if($prev_data['b_day']==$i){echo "selected='selected'";};} ?>value="<?php echo $i; ?>"><?php echo $i; ?></option>
					<?php	
					 }
					?>
				</select>
				<!-- Month dropdown -->
				<select name="b_month" id="b_month" class="form-control" style="width: 15%;display: inline;">
					<option value="">- Mois -</option>
				    <option <?php if(isset($prev_data)){ if($prev_data['b_month']=='1'){echo "selected='selected'";};} ?>value="1">January</option>
				    <option  <?php if(isset($prev_data)){ if($prev_data['b_month']=='2'){echo "selected='selected'";};} ?>value="2">February</option>
				    <option  <?php if(isset($prev_data)){ if($prev_data['b_month']=='3'){echo "selected='selected'";};} ?>value="3">March</option>
				    <option  <?php if(isset($prev_data)){ if($prev_data['b_month']=='4'){echo "selected='selected'";};} ?>value="4">April</option>
				    <option  <?php if(isset($prev_data)){ if($prev_data['b_month']=='5'){echo "selected='selected'";};} ?>value="5">May</option>
				    <option  <?php if(isset($prev_data)){ if($prev_data['b_month']=='6'){echo "selected='selected'";};} ?>value="6">June</option>
				    <option  <?php if(isset($prev_data)){ if($prev_data['b_month']=='7'){echo "selected='selected'";};} ?>value="7">July</option>
				    <option  <?php if(isset($prev_data)){ if($prev_data['b_month']=='8'){echo "selected='selected'";};} ?>value="8">August</option>
				    <option  <?php if(isset($prev_data)){ if($prev_data['b_month']=='9'){echo "selected='selected'";};} ?>value="9">September</option>
				    <option  <?php if(isset($prev_data)){ if($prev_data['b_month']=='10'){echo "selected='selected'";};} ?>value="10">October</option>
				    <option  <?php if(isset($prev_data)){ if($prev_data['b_month']=='11'){echo "selected='selected'";};} ?>value="11">November</option>
				    <option  <?php if(isset($prev_data)){ if($prev_data['b_month']=='12'){echo "selected='selected'";};} ?>value="12">December</option>
				</select>
				<!-- Year dropdown -->
				<select name="b_year" id="b_year" class="form-control"  style="width: 15%;display: inline;">
					<option value="">- Année -</option>
					<?php
					 $annee=date('Y');
					 for($i=$annee;$i>1900;$i--)
					 {
					?>
					<option <?php if(isset($prev_data)){ if($prev_data['b_year']==$i){echo "selected='selected'";};} ?>value="<?php echo $i; ?>"><?php echo $i; ?></option>
					<?php	
					 }
					?>
				</select>			
			  </div>
		  </div>		
		<div class="col-xs-12" style="width: 100%;">
			  <div class="form-group">
			    <label for="s_day">Date d'inscription : </label>
			    <!-- Day dropdown -->
				<select name="s_day" id="s_day" class="form-control" style="width: 15%;display: inline;">
					<option value="">- Jour -</option>
					<?php
					 for($i=1;$i<=31;$i++)
					 {
					?>
					<option <?php if(isset($prev_data)){ if($prev_data['s_day']==$i){echo "selected='selected'";};} ?>value="<?php echo $i; ?>"><?php echo $i; ?></option>
					<?php	
					 }
					?>
				</select>
				<!-- Month dropdown -->
				<select name="s_month" id="s_month" class="form-control" style="width: 15%;display: inline;">
					<option value="">- Mois -</option>
				    <option <?php if(isset($prev_data)){ if($prev_data['s_month']=='1'){echo "selected='selected'";};} ?>value="1">January</option>
				    <option  <?php if(isset($prev_data)){ if($prev_data['s_month']=='2'){echo "selected='selected'";};} ?>value="2">February</option>
				    <option  <?php if(isset($prev_data)){ if($prev_data['s_month']=='3'){echo "selected='selected'";};} ?>value="3">March</option>
				    <option  <?php if(isset($prev_data)){ if($prev_data['s_month']=='4'){echo "selected='selected'";};} ?>value="4">April</option>
				    <option  <?php if(isset($prev_data)){ if($prev_data['s_month']=='5'){echo "selected='selected'";};} ?>value="5">May</option>
				    <option  <?php if(isset($prev_data)){ if($prev_data['s_month']=='6'){echo "selected='selected'";};} ?>value="6">June</option>
				    <option  <?php if(isset($prev_data)){ if($prev_data['s_month']=='7'){echo "selected='selected'";};} ?>value="7">July</option>
				    <option  <?php if(isset($prev_data)){ if($prev_data['s_month']=='8'){echo "selected='selected'";};} ?>value="8">August</option>
				    <option  <?php if(isset($prev_data)){ if($prev_data['s_month']=='9'){echo "selected='selected'";};} ?>value="9">September</option>
				    <option  <?php if(isset($prev_data)){ if($prev_data['s_month']=='10'){echo "selected='selected'";};} ?>value="10">October</option>
				    <option  <?php if(isset($prev_data)){ if($prev_data['s_month']=='11'){echo "selected='selected'";};} ?>value="11">November</option>
				    <option  <?php if(isset($prev_data)){ if($prev_data['s_month']=='12'){echo "selected='selected'";};} ?>value="12">December</option>
				</select>
				<!-- Year dropdown -->
				<select name="s_year" id="s_year" class="form-control"  style="width: 15%;display: inline;">
					<option value="">- Année -</option>
					<?php
					 $annee=date('Y');
					 for($i=$annee;$i>1900;$i--)
					 {
					?>
					<option <?php if(isset($prev_data)){ if($prev_data['s_year']==$i){echo "selected='selected'";};} ?>value="<?php echo $i; ?>"><?php echo $i; ?></option>
					<?php	
					 }
					?>
				</select>			
			  </div>
			  <!--
			  <div class="form-group">
			    <label for="last_abo">Dernier Abonnement</label><small> (ressors les abonnements plus ancien que la date selectionné)</small>
			    <input name="last_abo" type="date" class="form-control" id="last_abo" placeholder="Dernier abonnement" style="max-width: 300px;">
			  </div>
			  -->				  		
		</div>	
		<div class="col-xs-12" style="width: 100%;">
			  <div class="form-group">
			    <label for="a_day">Date du dernier abonnement : </label>
			    <!-- Day dropdown -->
				<select name="a_day" id="a_day" class="form-control" style="width: 15%;display: inline;">
					<option value="">- Jour -</option>
					<?php
					 for($i=1;$i<=31;$i++)
					 {
					?>
					<option <?php if(isset($prev_data)){ if($prev_data['a_day']==$i){echo "selected='selected'";};} ?>value="<?php echo $i; ?>"><?php echo $i; ?></option>
					<?php	
					 }
					?>
				</select>
				<!-- Month dropdown -->
				<select name="a_month" id="a_month" class="form-control" style="width: 15%;display: inline;">
					<option value="">- Mois -</option>
				    <option <?php if(isset($prev_data)){ if($prev_data['a_month']=='1'){echo "selected='selected'";};} ?>value="1">January</option>
				    <option  <?php if(isset($prev_data)){ if($prev_data['a_month']=='2'){echo "selected='selected'";};} ?>value="2">February</option>
				    <option  <?php if(isset($prev_data)){ if($prev_data['a_month']=='3'){echo "selected='selected'";};} ?>value="3">March</option>
				    <option  <?php if(isset($prev_data)){ if($prev_data['a_month']=='4'){echo "selected='selected'";};} ?>value="4">April</option>
				    <option  <?php if(isset($prev_data)){ if($prev_data['a_month']=='5'){echo "selected='selected'";};} ?>value="5">May</option>
				    <option  <?php if(isset($prev_data)){ if($prev_data['a_month']=='6'){echo "selected='selected'";};} ?>value="6">June</option>
				    <option  <?php if(isset($prev_data)){ if($prev_data['a_month']=='7'){echo "selected='selected'";};} ?>value="7">July</option>
				    <option  <?php if(isset($prev_data)){ if($prev_data['a_month']=='8'){echo "selected='selected'";};} ?>value="8">August</option>
				    <option  <?php if(isset($prev_data)){ if($prev_data['a_month']=='9'){echo "selected='selected'";};} ?>value="9">September</option>
				    <option  <?php if(isset($prev_data)){ if($prev_data['a_month']=='10'){echo "selected='selected'";};} ?>value="10">October</option>
				    <option  <?php if(isset($prev_data)){ if($prev_data['a_month']=='11'){echo "selected='selected'";};} ?>value="11">November</option>
				    <option  <?php if(isset($prev_data)){ if($prev_data['a_month']=='12'){echo "selected='selected'";};} ?>value="12">December</option>
				</select>
				<!-- Year dropdown -->
				<select name="a_year" id="a_year" class="form-control"  style="width: 15%;display: inline;">
					<option value="">- Année -</option>
					<?php
					 $annee=date('Y')+2;
					 for($i=$annee;$i>1900;$i--)
					 {
					?>
					<option <?php if(isset($prev_data)){ if($prev_data['a_year']==$i){echo "selected='selected'";};} ?>value="<?php echo $i; ?>"><?php echo $i; ?></option>
					<?php	
					 }
					?>
				</select>			
			  </div>
			  <!--
			  <div class="form-group">
			    <label for="last_abo">Dernier Abonnement</label><small> (ressors les abonnements plus ancien que la date selectionné)</small>
			    <input name="last_abo" type="date" class="form-control" id="last_abo" placeholder="Dernier abonnement" style="max-width: 300px;">
			  </div>
			  -->				  		
		</div>
		<div class="col-xs-12">
			  <div class="form-group form-inline">
			    <label for="nb_journaux_exact">Nombre de journaux de l'abonné : </label>
			    <input type="number" class="form-control" id="nb_journaux_exact" placeholder="Nombre de journaux" name="nb_journaux_exact" 
			    value="<?php if(isset($prev_data)){echo $prev_data['nb_journaux_exact'];} ?>">		    
			  </div>
		</div>
		<div class="col-xs-12">
			  <div class="form-group form-inline">
			    <label for="nb_journaux_exact">Nombre de journaux minimum de l'abonné : </label>
			    <input type="number" class="form-control" id="nb_journaux_sup" style="min-width: 300px" placeholder="Nombre de journaux minimum" name="nb_journaux_sup"
			     value="<?php if(isset($prev_data)){echo $prev_data['nb_journaux_sup'];} ?>">		    
			  </div>
		</div>			
		<div class="col-xs-12" style="width: 100%;">
			  <div class="form-group form-inline">
			    <label for="nb_decrem">Nombre de journaux à décompter : </label>
			    <input name="nb_decrem" type="number" class="form-control" id="nb_decrem" value="0" required="required" >
			  </div>			  		
		</div>					
			  <input type="hidden" name="form_activation" value="1" />			  			  			  			  
			  
			  <?php
			  if(isset($prev_data))
			  {
			  	if(count($abonne)>0)
				{
			  ?>
			    <input type="hidden" name="next_step" value="1" />
			  	<button type="submit" class="btn btn-success">Ecrire la news destiné à la selection</button>
			  <?php
				}
			  }
			  else 
			  {
			  ?>	
				  <button type="submit" class="btn btn-default">Générer les étiquettes</button>
			  <?php
			  }
			  ?>
	</form>		
</div>

<?php
if(isset($prev_data))
{
?>	

	<div class="col-xs-12">		
		<h3 style="font-family:Georgia;
			<?php if(count($abonne)==0)
				  {
				  	echo "color: red";
				  }
				  else
				  {
				  	echo "color:green";
				  }
		 ?>">
			<?php echo count($abonne); ?> utilisateur(s) selectioné(s)
		</h3>
		<div class="col-xs-12">
			<div style="padding: 0 15px;">
				<table id="datatable" class="display" style="border: 1px solid #fff">
					<thead>
						<tr>
							<th>Numéro d'abonnée</th>
							<th>Nom</th>
							<th>Prénom</th>
							<th>Date de Naissance</th>
							<!-- <th style="max-width: 100px">E-mail</th> -->
							<th>Sexe</th>
							<th>CP</th>
							<th>Ville</th>
							<th>Formule</th>
							<th>Status</th>
							<th>Voir la fiche</th>						
						</tr>
					</thead>
					<tbody>
						<?php 
						foreach ($abonne as $line) 
						{
						?>
						<tr>
							<td><?php echo $line['id']; ?></td>
							<td><?php echo $line['nom']; ?></td>
							<td><?php echo $line['prenom']; ?></td>
							<td><?php echo $line['birthday']; ?></td>
							<!-- <td style="max-width: 100px;word-wrap:break-word"><?php echo $line['email']; ?></td> -->
							<td><?php echo $line['sexe']; ?></td>
							<td><?php echo $line['cp']; ?></td>
							<td><?php echo $line['ville']; ?></td>
							<td><?php echo $line['formule']; ?></td>
							<td><?php echo $line['user_status']; ?></td>												
							<td>
								<a href="<?php echo $base_url ?>abonne/view_abonne/<?php echo $line['id']; ?>" class="btn btn-primary" aria-label="Left Align">
								  <span class="glyphicon glyphicon-zoom-in" aria-hidden="true"></span>
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
							<!-- <th style="max-width: 100px"></th> -->
							<th></th>
							<th></th>
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

<?php
}
?>

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
	      	<form target="_blank" action="<?php echo $base_url.'impression/print_etiquette_of_list'; ?>" method="post" class="form-horizontal">
			  <div class="form-group"  style="padding: 15px;">
				<p>Combien de journaux à décompter ?</p>
			  </div>
			  <input name="nb_decrem" class="form-control" type="number" value="0" />		  
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
