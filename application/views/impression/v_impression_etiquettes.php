<script>
$(document).ready(function() {
    

} );
</script>

<div id="main-content">
	
	<div class="col-xs-12" style="padding-bottom: 15px;">
		<h3> Filtres de recherches pour sortir les étiquettes des abonnés : </h3>
		<div class="col-xs-12">
			<form class="form-inline" method="post" action="" target="_blank">
				<!--
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
			    <label for="cp">Code Postale : </label>
			    <input type="text" class="form-control" id="cp" placeholder="Code Postal" name="cp" value="<?php if(isset($prev_data)){echo $prev_data['cp'];} ?>">
			  </div>
			  <div class="form-group">
			    <label for="pays">Pays : </label>
			    <input type="text" class="form-control" id="pays" placeholder="Pays" name="pays" value="<?php if(isset($prev_data)){echo $prev_data['pays'];} ?>">
			  </div>
			  -->   			  
		</div>
		<div class="col-xs-12" style="width: 100%;">
			  <div class="form-group">
			    <label for="last_time_modified">La dernière date de modification de l'utilisateur a eu lieu il y a : </label>
				<input style="width: 150px;display: inline;" type="number" class="form-control" id="last_time_modified" placeholder="Nombre de jours" name="last_time_modified" 
																					value="0"> Jours
			  </div>			
			  <div class="form-group">
			    <label for="formule">Formule : </label>
			    <!-- Day dropdown -->
				<select name="type_abo" id="type_abo" class="form-control" style="width: 15%;display: inline;">
					<option value="all">Tous</option>
					<?php
					 foreach($formule as $line)
					 {
					?>
					<option <?php if(isset($prev_data)){ if($prev_data['type_abo']==$line['id']){echo "selected='selected'";};} ?>value="<?php echo $line['id']; ?>"><?php echo $line['libelle']; ?></option>
					<?php	
					 }
					?>
				</select>
				<div style="color:red;"><?php echo form_error('type_abo'); ?></div>
			   </div>
			   <!--
			  <div class="form-group">
			    <label for="formule">Statut de l'abonnement : </label>

				<select name="status_abo" id="status_abo" class="form-control" style="width: 15%;display: inline;">
					<option value="">- Status d'abonnement -</option>
					<option <?php if(isset($prev_data)){ if($prev_data['status_abo']=='En cours'){echo "selected='selected'";};} ?>value="En cours">En cours</option>
					<option <?php if(isset($prev_data)){ if($prev_data['status_abo']=='Clôturé'){echo "selected='selected'";};} ?>value="Clôturé">Clôturé</option>
				</select>
			   </div>
			   -->			   
		  </div>
		  <!--			
		<div class="col-xs-12" style="width: 100%;">
			  <div class="form-group">
			    <label for="birhtday">Date de Naissance : </label>

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
			  -->			
			  <input type="hidden" name="form_activation" value="1" />			  			  			  			  
			  <button type="submit" class="btn btn-default">Générer les étiquettes</button>
	</form>
	</div>			
</div>