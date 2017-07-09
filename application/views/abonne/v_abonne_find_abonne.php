

<script>
$(document).ready(function() {
    
    $('#datatable thead th').each( function () {
	    var title = $('#datatable thead th').eq( $(this).index() ).text();
	   $(this).html( title+' <input type="text" style="width:100%;" placeholder="'+title+'" />' );    
    });
    
   oTable=$('#datatable').DataTable(
   							{
   								"dom": '<"top"fli>rt<"bottom"p><"clear">',
   								"columns":
   								[
   									{data: "id", visible: false},
   									{data: "num_user"},
   									{data: "nom"},
   									{data: "prenom"},
   									{data: "email"},
   									{data: "sexe"},
   									{data: "cp"},
   									{data: "dep"},
   									{data: "ville"},
   									{data: "formule"},
   									{data: "user_status"}
   								],
   								"lengthMenu": [[100, -1], [100, "All"]]
   							}
   );
 
   oTable.rows.add( <?php echo $abonne; ?> ).draw(); 
    
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
    
    // fonction qui redirige sur la FICHE ABONNE au click de la ligne
	$('body').on('click','#datatable tbody tr',function(){
		//alert('bou');
		var id = $(this).children('td:first').text();
		var url = "<?php echo $base_url; ?>abonne/view_abonne/"+id;
		//alert(url);
		document.location.href=url;
	});  
    
} );
</script>

<div id="main-content">
	<div class="col-xs-12" style="padding-bottom: 15px;">
		<h3> Filtres de recherches : </h3>
		<div class="col-xs-12">
			<form class="form-inline form-group" method="post" action="">			
			  <div class="form-group form-inline">
			    <label for="num_user">Numéro d'abonné : </label>
			    <input type="number" class="form-control" id="num_user" placeholder="Numéro d'abonné" name="num_user" value="<?php if(isset($prev_data)){echo $prev_data['num_user'];} ?>">						    
			  </div>
		</div>			
		<div class="col-xs-12">
			<div class="form-group form-inline">
				  <div class="form-group">
				    <label for="nom">Nom : </label>
				    <input type="text" class="form-control" id="nom" placeholder="Nom" name="nom" value="<?php if(isset($prev_data)){echo $prev_data['nom'];} ?>">
				  </div>
				  <div class="form-group">
				    <label for="prenom">Prénom : </label>
				    <input type="text" class="form-control" id="prenom" placeholder="Prénom" name="prenom" value="<?php if(isset($prev_data)){echo $prev_data['prenom'];} ?>">
				  </div>
				  <div class="form-group">
				    <label for="ville">Ville : </label>
				    <input type="text" class="form-control" id="ville" placeholder="Ville" name="ville" value="<?php if(isset($prev_data)){echo $prev_data['ville'];} ?>">
				  </div>
				  <div class="form-group">
				    <label for="cp">Code postal : </label>
				    <input type="text" class="form-control" id="cp" placeholder="Code Postal" name="cp" value="<?php if(isset($prev_data)){echo $prev_data['cp'];} ?>">
				  </div>
				  <div class="form-group">
				    <label for="pays">Pays : </label>
				    <input type="text" class="form-control" id="pays" placeholder="Pays" name="pays" value="<?php if(isset($prev_data)){echo $prev_data['pays'];} ?>">
				  </div>  
			  </div> 			  
		</div>
		<div class="col-xs-12">
			  <div class="form-group form-inline">
			    <label for="sexe">Sexe : </label>
				<select name="sexe" id="sexe" class="form-control" style="width: 15%;display: inline;">
					<option value="">Sexe</option>
					  <option value="Masculin">Masculin</option>
					  <option value="Féminin">Féminin</option>
				</select>			    
			  </div>
		</div>				
		<div class="col-xs-12">
			  <div class="form-group form-inline">
			    <label for="dep">Département : </label>
			    <input type="text" class="form-control" id="dep" placeholder="Département" name="dep" value="<?php if(isset($prev_data)){echo $prev_data['dep'];} ?>">
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
			    <label for="birhtday">Date de Naissance : </label>
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
			  <input type="hidden" name="form_activation" value="1" />			  			  			  			  
			  <button type="submit" class="btn btn-default">Filtrer</button>
	</form>		
</div>
	
	<div class="row">		
	
		<div class="col-xs-12">
			<div style="padding: 0 15px;">
				<table id="datatable" class="display" style="border: 1px solid #fff">					
					<thead>
						<tr>
							<th>Id</th>
							<th>Numéro d'abonné</th>
							<th>Nom</th>
							<th>Prénom</th>
							<th>Email</th>
							<!-- <th style="max-width: 100px">E-mail</th> -->
							<th>Sexe</th>
							<th>CP</th>
							<th>Département</th>
							<th>Ville</th>
							<th>Formule</th>
							<th>Status</th>					
						</tr>				
					</thead>
					<tbody>


					</tbody>
					<tfoot>
						<tr>
							<th>Id</th>
							<th>Numéro d'abonnée</th>
							<th>Nom</th>
							<th>Prénom</th>
							<th>Email</th>
							<!-- <th style="max-width: 100px">E-mail</th> -->
							<th>Sexe</th>
							<th>CP</th>
							<th>Département</th>
							<th>Ville</th>
							<th>Formule</th>
							<th>Status</th>	
						</tr>					
					</tfoot>
				</table>
			</div>			
		</div>
</div>		
		