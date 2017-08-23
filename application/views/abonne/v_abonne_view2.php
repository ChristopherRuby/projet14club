<link href="<?php echo $base_url; ?>../assets/css/fileinput.min.css" media="all" rel="stylesheet" type="text/css" />
<script src="<?php echo $base_url; ?>../assets/js/fileinput.min.js"></script>

<script>
$(document).ready(function() {

    oTable=$('#datatable').DataTable(
   							{
   								"columns":
   								[
   									{data: "Id Abonnement"},//, visible: false},
   									{data: "Date de début"},
   									{data: "Date de Fin"},
   									{data: "Nombre de journaux"},
   									{data: "Prix"},
   									{data: "Payé"},
   									{data: "Status"}
   								],
						        "order": [[ 0, "desc" ]],
   								"lengthMenu": [[100, -1], [100, "All"]]
   							});    
    // Have to be added to have the proper rendered (for bootstrap)
    $('#datatable').removeClass( 'display' ).addClass('table table-striped table-bordered');

 //   $('#birthday').datepicker();
    $('#subscribe_day').datepicker();

	$('#unlock_form_button').on('click',function()
	{	
		// On dévrouille le formulaure
		ctrl_form('UNLOCK');
	});
	
	$('#lock_form_button').on('click',function()
	{
		// On vérouille le formulaire
		ctrl_form('LOCK');
	});	
	
	
	$('#img_container').on('mouseover',function(){
		//alert('test');
		$('#popup_photo').css('display','block');
		$('#popup_photo').css('cursor','hand');
	});

	$('#img_container').on('mouseout',function(){
		//alert('test');
		$('#popup_photo').css('display','none');
	});
	
	
	$('#datatable tr').on('click',function(){
		id_abo=$(this).children('td:first').text();
		$('#modal'+id_abo).modal('show');
	});

    // fonction qui redirige sur la FICHE ABONNE au click de la ligne
	$('body').on('click','#datatable tbody tr',function(){
		id_abo=$(this).children('td:first').text();
		$('#modal'+id_abo).modal('show');
	});  
	
	$('#popupList').on('click',function(){
		$('#listModal').modal('show');
	});	
	
	$('#popupEtiquette').on('click',function(){
		$('#decremEtiquetteModal').modal('show');
	});		

	$('#popupDelete').on('click',function(){
		$('#deleteModal').modal('show');
	});
	
	// Incremente la date de fin a A+1 par rapport à la date début
	$("input[tag='date_debut']").on('change',function(){
		// get la date de debut
		val=$(this).val();
		//Split dans un tableau
		tab_val=val.split('-');
		// Assignation 
		annee=parseInt(tab_val[0]);
		mois=tab_val[1];
		jours=tab_val[2];
		annee_incr=annee+1;
		newDate=annee_incr+'-'+mois+'-'+jours;
		//alert(newDate);
		
		// Set de la nouvelle dat
		// Voyage jusqu'à l'objet form, puis va chercher l'input avec le tag
		$(this).parent().parent().parent().find("input[tag='date_fin']").val(newDate)

		//$('#date_fin').val(newDate);
	});	
	
    function ctrl_form($arg)
    {
    	if($arg=='UNLOCK')
    	{
	    	// On permet la modification des champs
	    	$('#form_user_info input').removeAttr('disabled');
	    	$('#form_user_info select').removeAttr('disabled');
	    	$('#form_user_info textarea').removeAttr('disabled');
	    	
	    	// On fait apparaitre le button d'envoi du formulaire	
	    	$('#input_submit').css('visibility','visible');
	    	
	    	// On fait disparaitre le bouton qui dévérouille et apparaitre celui qui vérouille
	    	$('#unlock_form_button').css('display','none');
	    	$('#lock_form_button').fadeIn();	    	       		
    	}
    	else if($arg=='LOCK')
    	{
	    	// On permet la modification des champs
	    	$('#form_user_info input').attr('disabled','disabled');
	    	$('#form_user_info select').attr('disabled','disabled');
	    	$('#form_user_info textarea').attr('disabled','disabled');
	    	
	    	// On fait disparaitre le button d'envoi du formulaire	
	    	$('#input_submit').css('visibility','hidden');
	    	
	    	// On fait disparaitre le bouton qui dévérouille et apparaitre celui qui vérouille
	    	$('#lock_form_button').css('display','none');
	    	$('#unlock_form_button').fadeIn();	    	     		
    	}
    	
    } 
    
} );
</script>




<div id="main-content">
	
	<div class="row">		
		<!--<div class="col-xs-1"></div>-->
		
		
		<div class="col-xs-12" id="content">			
	    	<!-- <img src="<?php echo $base_url; ?>../user_photo/chris_photo.jpg" alt="140x140" class="img-circle" style="width: 140px; height: 140px;"> -->	
	    	<!-- <img src="<?php echo $base_url; ?>../user_photo/chris_photo.jpg" alt="140x140" class="img-circle" style="width: 190px; height: 190px;"> -->
	    	<!-- <img src="<?php echo $base_url; ?>../user_photo/chris_photo.jpg" alt="140x140" class="img-circle" style="width: 240px; height: 240px;"> -->
	    	<div class="view_abonne_header_content">
	    		<div class="row">
	    		
	    		</div>
	    	</div>
	    	<div class="view_abonne_body_content" style="padding-left: 15px;padding-right: 15px;">
 					
				<form id="form_user_info" method="post" action="">
		    		<div class="row">
		    			<div class="col-xs-6">
		    				<button type="button" id="popupEtiquette" class="btn btn-info">Imprimer l'étiquette de l'abonné</button>
		    				<button type="button" id="popupList" class="btn btn-info">Ajouter cet abonné à la liste courante</button>
		    				
							<span id="unlock_form_button" class="btn btn-default" style="cursor: hand;" >
								<span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Modifier la fiche
							</span>	
		
							<span id="lock_form_button" class="btn btn-default" style="display: none;cursor: hand;">
								<span id="lock_form_button" class="glyphicon glyphicon-asterisk" aria-hidden="true"></span> Vérrouiller la fiche
							</span>			
							<input disabled="disabled" class="btn btn-success" type="submit" id="input_submit" value="Valider l'adhérent" style="visibility: hidden;" />	
							<div style="margin-bottom: 10px"></div>					
							<button type="button" id="popupDelete" class="btn btn-danger">Supprimer l'abonné</button>
		    				<div style="margin-bottom: 10px"></div>
		    				
		    				<br>
		    				<a href="<?php echo $base_url; ?>mailing/send_mail/<?php echo $abonne['id_user']; ?>">
			    				<button type="button" class="btn btn-primary" aria-label="Left Align">
								  <span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
								</button>
							</a>
							<div style="margin-bottom: 10px"></div>
							<div class="input-group">
							  <span class="input-group-addon">Numéro d'abonné</span>
							  <input disabled="disabled" required="required" name="num_user" type="text" class="form-control" placeholder="Numéro membre" value="<?php echo $abonne['num_user']; ?>">
							</div>
							<br>		    				
							<div class="input-group">
							  <span class="input-group-addon">Nom</span>
							  <input disabled="disabled" required="required" name="nom" type="text" class="form-control" placeholder="Nom" value="<?php echo $abonne['nom']; ?>">
							</div>
							<br>
							<div class="input-group">
							  <span class="input-group-addon">Prénom</span>
							  <input disabled="disabled" required="required" name="prenom" type="text"  class="form-control" placeholder="Prénom" value="<?php echo $abonne['prenom']; ?>">
							</div>
							<br>	
							<div class="input-group">
							  <span class="input-group-addon">Date de Naissance</span>
							  <input disabled="disabled" required="required" name="date_naissance" id="birthday" type="date"  class="form-control" placeholder="Date de Naissance" value="<?php echo $abonne['date_naissance']; ?>">
							</div>
							<br>		    													    			
							<div class="input-group">
							  <span class="input-group-addon">Sexe</span>
							  <input disabled="disabled" required="required" name="sexe" type="text"  class="form-control" placeholder="Sexe" value="<?php echo $abonne['sexe']; ?>">
							</div>
							<br>
							<div class="input-group">
							  <span class="input-group-addon">Adresse</span>
							  <input disabled="disabled" required="required" name="adresse1" type="text"  class="form-control" placeholder="Adresse" value="<?php echo $abonne['adresse1']; ?>">
							</div>
							<br>
							<div class="input-group">
							  <span class="input-group-addon">Complément d'adresse</span>
							  <input disabled="disabled" name="adresse2" type="text"  class="form-control" placeholder="Complément d'adresse" value="<?php echo $abonne['adresse2']; ?>">
							</div>
							<br>																	
							<div class="input-group">
							  <span class="input-group-addon">Code Postal</span>
							  <input disabled="disabled" required="required" name="cp" type="text"  class="form-control" placeholder="Code Postal" value="<?php echo $abonne['cp']; ?>">
							</div>
							<br>						
							<div class="input-group">
							  <span class="input-group-addon">Ville</span>
							  <input disabled="disabled" required="required" name="ville" type="text"  class="form-control" placeholder="Ville" value="<?php echo $abonne['ville']; ?>">
							</div>
							<br>
							<div class="input-group">
							  <span class="input-group-addon">Pays</span>
							  <input disabled="disabled" required="required" name="pays" type="text"  class="form-control" placeholder="Pays" value="<?php echo $abonne['pays']; ?>">
							</div>
							<br>
							<div class="input-group">
							  <span class="input-group-addon">E-mail</span>
							  <input disabled="disabled" name="email" type="text"  class="form-control" placeholder="E-mail" value="<?php echo $abonne['email']; ?>">
							</div>
							
							<br>
							<div class="input-group">
							  <span class="input-group-addon">Téléphone</span>
							  <input disabled="disabled" name="tel" type="tel"  class="form-control" placeholder="Téléphone" value="<?php echo $abonne['tel']; ?>">
							</div>
							<br>
							<div class="input-group">
							  <span class="input-group-addon">Téléphone portable</span>
							  <input disabled="disabled" name="tel_p" type="text"  class="form-control" placeholder="Téléphone portable" value="<?php echo $abonne['tel_p']; ?>">
							</div>
							<br>																																																		
						</div>
						<div class="col-xs-6">
		    				<div data-toggle="modal" data-target="#uploadPhotoModal" id="img_container" style="text-align: center;padding-bottom: 35px;width: 190px;margin: 0 auto;cursor:hand;">
		    					
		    					<a style="padding-top: 90px;cursor:hand;">Ajouter/modifier une photo</a>
		    					<!--
		    					<div data-toggle="modal" data-target="#uploadPhotoModal" id="popup_photo" style="position: absolute;height: 180px;width: 300px;margin: 0 auto;top:5;bottom:0;right:0;left:0;opacity: 0.5;display: none;">
		    						
		    					</div>		    		
		    					-->
		    					<img src="<?php echo $base_url; ?>../user_photo/<?php echo $abonne['file_name']; ?>" alt="160x160" class="img-thumbnail" style="max-width:300;height: 190px;">
		    				</div>
							<div class="input-group">
							  <span class="input-group-addon">Date d'inscription</span>
							  <input disabled="disabled" name="date_inscription" id="subscribe_day" type="date"  class="form-control" placeholder="date d'inscription" value="<?php echo $abonne['date_inscription']; ?>">
							</div>
							<br>
							<div class="input-group">
							  <span class="input-group-addon">Formule</span>
								<select disabled="disabled" required="required" class="form-control" id="formule" name="formule">
								<?php
								foreach($type_abo as $obj)
								{
								?>	
									<option <?php if($abonne['id_formule']==$obj['id']){echo "selected='selected'";} ?> value="<?php echo $obj['id'];?> "><?php echo $obj['libelle']; ?></option>
								<?php	
								}						
								?>
								</select>							  
							</div>
							<br>
							<div class="input-group">
							  <span class="input-group-addon">Statut d'abonnement</span>
							  <input disabled="disabled" type="tel"  class="form-control" placeholder="Téléphone" value="<?php echo $abonne['user_status']; ?>">
							</div>
							<br>	
							<div class="input-group">
							  <span class="input-group-addon">Remarques</span>
							  <textarea disabled="disabled" name="remarque" class="form-control" placeholder="Remarque"><?php echo $abonne['remarque']; ?></textarea>
							</div>
							<br>										    				
		    				<!--								
							<div style="margin-top: 150px;"></div>
							<div style="text-align: center;">									
								<button type="button" class="btn btn-primary btn-lg" style="vertical-align: middle" id="unlock_form_button">
								  <span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> &nbsp;&nbsp; Modifier la Fiche 
								</button>
								<button type="button" class="btn btn-primary btn-lg" style="vertical-align: middle;display: none;" id="lock_form_button">
								  <span class="glyphicon glyphicon-remove" aria-hidden="true"></span> &nbsp;&nbsp; Vérouiller la Fiche 
								</button>									
							</div>
							-->
						</div>
					</div>
					</form>
							<div class="row">
								<div class="col-xs-8">
									<div style="border-bottom: 1px solid black;">
										<h3>Abonnements 
											<?php if($abonne['email']!='')
											{
											?>
											<span class="pull-right">
												<input class="btn btn-info" type="button" id="input_trigger_abo" value="Ajout d'un abonnement"  data-toggle="modal" data-target="#myModal" />
											</span>
											<?php
											}
											else {
											?>
											<span class="pull-right">
												<span style="font-size: 14px;text-decoration:underline">Une adresse mail est requise pour ajouter un abonnement.</span>
											</span>
											<?php
											}
											?>
										</h3>
									</div>
									<br>
									<table id="datatable" width="100%" class="display" style="border: 1px solid #fff">
										<thead>
											<tr>
												<td style="display: none;">Id Abonnement</td>
												<td>Date de début</td>
												<td>Date de Fin</td>
												<td>Nombre de journaux</td>
												<td>Prix</td>
												<td>Payé</td>
												<td>Status</td>
											</tr>
										</thead>
										<tbody>
											<?php
												foreach($user_abonnements as $abo)
												{
											?>
											<tr>
												<td style="display: none;"><?php echo $abo['id_abo']; ?></td>
												<td><?php echo $abo['date_debut']; ?></td>
												<td><?php echo $abo['date_fin']; ?></td>
												<td><?php echo $abo['nb_journaux']; ?></td>
												<td style="min-width: 100px;"><?php echo $abo['prix']; ?> €</td>
												<td style="min-width: 50px;">
													<?php
													//echo $abo['payer'];
														if($abo['payer']=='t'){echo "Oui";}else{echo "Non";}
													?>
												</td>
												<td><?php echo $abo['abo_status']; ?></td>
											</tr>	
											<?php		
												}
											?>
										</tbody>
									</table>									
								</div>
					</div>			    			
	    		</div>    			    		
	    	</div>
		</div>
		<!--<div class="col-xs-1"></div>-->
	</div>

</div>

<!-- Modal Abonnement -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Fiche abonnement</h4>
      </div>
      <div class="modal-body">
      	<div>
			<form action="<?php echo $base_url; ?>abonne/ajout_abonnement" method="post" class="form-horizontal">
			  <div class="form-group">
			    <label for="date_debut" class="col-sm-2 control-label">Date début</label>
			    <div class="col-sm-10">
			      <input type="date" value="<?php echo date("Y-m-t"); ?>" class="form-control" tag="date_debut" name="date_debut" required="required">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="date_fin" class="col-sm-2 control-label">Date fin</label>
			    <div class="col-sm-10">
			      <input type="date" value="<?php echo date("Y-m-d", mktime(0,0,0, date("m"), date("t"), date("Y")+1)); ?>" class="form-control" tag="date_fin" name="date_fin" required="required">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="nb_journaux" class="col-sm-2 control-label">Nombre de journaux</label>
			    <div class="col-sm-10">
			      <input type="number" class="form-control" id="nb_journaux" name="nb_journaux" required>
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="prix" class="col-sm-2 control-label">Montant</label>
			    <div class="col-sm-10">
				    <div class="input-group">
				      <input type="number" class="form-control" id="prix" name="prix" required="required">
				      <div class="input-group-addon">€</div>
				    </div>
			    </div>
			  </div>			  			  			  
			  <div class="form-group">
			    <label for="mode_paiement" class="col-sm-2 control-label">Payé</label>
			    <div class="col-sm-10">
				    <div class="input-group">
						<select class="form-control" id="payer" name="payer" required="required">
						  <option value="false">Non</option>
						  <option value="true">Oui</option>
						</select>					      
				    </div>
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="mode_paiement" class="col-sm-2 control-label">Mode de paiement</label>
			    <div class="col-sm-10">
				    <div class="input-group">
						<select class="form-control" id="mode_paiement" name="mode_paiement"  required="required">
						  <option value="Chèque Traditionnels Français">Chèque Traditionnels Français</option>
						  <option value="Chèque Etrangers">Chèque Etrangers</option>
						  <option value="Mandat Cash (CCP)">Mandat Cash (CCP)</option>
						  <option value="Espèces">Espèces</option>
						  <option value="Virement Bancaire">Virement Bancaire</option>
						</select>				      
				    </div>
			    </div>
			  </div>			  	
			  <div class="form-group">
			    <label for="banque" class="col-sm-2 control-label">Banque</label>
			    <div class="col-sm-10">
				    <div class="input-group">
						<select class="form-control" id="banque" name="banque" required="required">
						<?php
						foreach($banque_list as $obj)
						{
						?>	
							<option value="<?php echo $obj['id'];?> "><?php echo $obj['banque']; ?></option>
						<?php	
						}						
						?>
						</select>				      
				    </div>
			    </div>
			  </div>			  
			  <div class="form-group">
			    <label for="nom_tireur" class="col-sm-2 control-label">Nom Tireur</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="nom_tireur" name="nom_tireur">
			    </div>
			  </div>   		
      	</div>
      </div>
      <div class="modal-footer">
      	<input type="submit" class="btn btn-success" value="Ajouter" />
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
      </div>
      </form>
    </div>
  </div>
</div>

<!-- Modal upload photo -->
<div class="modal fade" id="uploadPhotoModal" tabindex="-1" role="dialog" aria-labelledby="uploadPhotoModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="uploadPhotoModalLabel">Fiche abonnement</h4>
      </div>
      <div class="modal-body">
      	<div>
	      	<form action="<?php echo $base_url; ?>abonne/upload_photo" method="post" class="form-horizontal" enctype="multipart/form-data">
			  <div class="form-group"  style="padding: 15px;">
			    <label for="file">Photo</label>
			    <input required="required" type="file" class="file" id="file" name="userfile" multiple data-show-upload="false" >
			  </div>
			  <input class="btn btn-success" type="submit" value="Upload Photo" />
			</form>     		
      	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal delete user -->
<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="deleteModalLabel">Message de confirmation</h4>
      </div>
      <div class="modal-body">
      	<div>
	      	<form action="<?php echo $base_url; ?>abonne/delete_user/<?php echo $abonne['id_user']; ?>" method="post" class="form-horizontal" enctype="multipart/form-data">
			  <p>Voulez vous vraiment supprimer cet utilisateur ?</p> 		
      	</div>
      </div>
      <div class="modal-footer">
		<input class="btn btn-danger" type="submit" value="Supprimer" />
		</form>         	
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>

<!-- Modal confirm add to the list -->
<div class="modal fade" id="listModal" tabindex="-1" role="dialog" aria-labelledby="listModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="listModalLabel">Message de confirmation</h4>
      </div>
      <div class="modal-body">
      	<div>
	      	<form action="<?php echo $base_url; ?>administration/add_to_the_list" method="post" class="form-horizontal">
			  <div class="form-group"  style="padding: 15px;">
				<p>Êtes-vous sûr de vouloir ajouter cet abonné à la liste courante ?</p>
			  </div>
			  <input name="id_user" type="hidden" value="<?php echo $abonne['id_user']; ?>" />
			  <input name="num_user" type="hidden" value="<?php echo $abonne['num_user']; ?>" />		
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

<!-- Modal to ask decrem journaux for etiquettes -->
<div class="modal fade" id="decremEtiquetteModal" tabindex="-1" role="dialog" aria-labelledby="decremEtiquetteLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="listModalLabel">Journaux à décompter</h4>
      </div>
      <div class="modal-body">
      	<div>
	      	<form target="_blank" action="<?php echo $base_url.'impression/etiquette_abonne'; ?>" method="post" class="form-horizontal">
			  <div class="form-group"  style="padding: 15px;">
				<p>Combien de journaux à décompter ?</p>
			  </div>
			  <input name="nb_decrem" class="form-control" type="number" value="0" />
			  <input name="id_user" class="form-control" type="hidden" value="<?php echo $abonne['id_user']; ?>" />
			  <br>
			  <input class="btn btn-success" type="submit" value="Continuer" />
			</form>     		
      	</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button>
      </div>
    </div>
  </div>
</div>


<?php foreach($user_abonnements as $abo)
{
 ?>

<!-- Modal Abonnement for Updates-->
<div class="modal fade" id="modal<?php echo $abo['id_abo']; ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Fiche abonnement</h4>
      </div>
      <div class="modal-body">
      	<div>
			<form action="<?php echo $base_url.'abonne/update_abonnement/'.$abo['id_abo']; ?>" method="post" class="form-horizontal">
			  <div class="form-group">
			    <label for="date_debut" class="col-sm-2 control-label">Date début</label>
			    <div class="col-sm-10">
			      <input type="date" class="form-control" tag="date_debut" name="date_debut" value="<?php echo $abo['date_debut_for_input']; ?>" required>
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="date_fin" class="col-sm-2 control-label">Date fin</label>
			    <div class="col-sm-10">
			      <input type="date" class="form-control" tag="date_fin" name="date_fin" value="<?php echo $abo['date_fin_for_input']; ?>" required>
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="nb_journaux" class="col-sm-2 control-label">Nombre de journaux</label>
			    <div class="col-sm-10">
			      <input type="number" class="form-control" tag="nb_journaux" name="nb_journaux" value="<?php echo $abo['nb_journaux']; ?>" required>
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="prix" class="col-sm-2 control-label">Montant</label>
			    <div class="col-sm-10">
				    <div class="input-group">
				      <input type="number" class="form-control" tag="prix" name="prix" value="<?php echo $abo['prix']; ?>" required>
				      <div class="input-group-addon">€</div>
				    </div>
			    </div>
			  </div>			  			  			  
			  <div class="form-group">
			    <label for="mode_paiement" class="col-sm-2 control-label">Payé</label>
			    <div class="col-sm-10">
				    <div class="input-group">
						<select class="form-control" tag="payer" name="payer">
						  <option <?php if($abo['payer']=='f'){echo "selected='selected'";} ?> value="false">Non</option>
						  <option <?php if($abo['payer']=='t'){echo "selected='selected'";} ?> value="true">Oui</option>
						</select>					      
				    </div>
			    </div>
			  </div>	
			  <div class="form-group">
			    <label for="banque" class="col-sm-2 control-label">Banque</label>
			    <div class="col-sm-10">
				    <div class="input-group">
						<select class="form-control" id="banque" name="banque">
							<option value=""></option>
						<?php
						foreach($banque_list as $obj)
						{
						?>	
							<option <?php if($abo['id_banque']==$obj['id']){echo "selected='selected'";} ?> value="<?php echo $obj['id'];?> "><?php echo $obj['banque']; ?></option>
						<?php	
						}						
						?>
						</select>				      
				    </div>
			    </div>
			  </div>			  
			  <div class="form-group">
			    <label for="mode_paiement" class="col-sm-2 control-label">Mode de paiement</label>
			    <div class="col-sm-10">
				    <div class="input-group">
						<select class="form-control" id="mode_paiement" name="mode_paiement">
						  <option <?php if($abo['mode_paiement']=='Chèque Traditionnels Français'){echo "selected='selected'";} ?> value="Chèque Traditionnels Français">Chèque Traditionnels Français</option>
						  <option <?php if($abo['mode_paiement']=='Chèque Etrangers'){echo "selected='selected'";} ?> value="Chèque Etrangers">Chèque Etrangers</option>
						  <option <?php if($abo['mode_paiement']=='Mandat Cash (CCP)'){echo "selected='selected'";} ?> value="Mandat Cash (CCP)">Mandat Cash (CCP)</option>
						  <option <?php if($abo['mode_paiement']=='Espèces'){echo "selected='selected'";} ?> value="Espèces">Espèces</option>
						  <option <?php if($abo['mode_paiement']=='Virement Bancaire'){echo "selected='selected'";} ?> value="Virement Bancaire">Virement Bancaire</option>
						</select>				      
				    </div>
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="nom_tireur" class="col-sm-2 control-label">Nom Tireur</label>
			    <div class="col-sm-10">
			      <input type="text" class="form-control" id="nom_tireur" name="nom_tireur" value="<?php echo $abo['nom_payeur']; ?>">
			    </div>
			  </div>      		
      	</div>
      </div>
      <div class="modal-footer">
      	<button type="submit" class="btn btn-success">Mettre à jour</button>
      	</form>
        <button type="button" class="btn btn-default" data-dismiss="modal">Fermer</button> 
        <div style="border-bottom: solid black 1px;padding-top: 5px;padding-bottom: 5px;"></div>
        <div>
	       <form action="<?php echo $base_url.'abonne/delete_abonnement/'.$abo['id_abo']; ?>" method="post" class="form-horizontal">
	        	<span style="float: left;"><input type="submit" class="btn btn-danger" value="Supprimer cette abonnement"></span>
	       </form>
       </div>       
      </div>
    </div>
  </div>
</div>

<?php } ?>