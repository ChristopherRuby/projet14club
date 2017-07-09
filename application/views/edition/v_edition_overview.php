<div id="main-content">
	
	<div class="row">
		<div class="col-xs-2" id="left-menu">
			<ul class="list-group" style="margin-left: 5%">
				<a class="list-group-item <?php if($menu_flag_link=='index'){echo "active";} ?>" href="<?php echo $base_url ?>edition">Vue d'ensemble</a>			
			  <a class="list-group-item <?php if($menu_flag_link=='type_abo'){echo "active";} ?>" href="<?php echo $base_url ?>edition/edit_type_abonnement">Edition des types d'abonnement</a>
			  <a class="list-group-item <?php if($menu_flag_link=='type_abo'){echo "active";} ?>" href="<?php echo $base_url ?>edition/edit_type_abonnement">Edition des status d'abonnement</a>
			  <a class="list-group-item <?php if($menu_flag_link=='banque'){echo "active";} ?>" href="<?php echo $base_url ?>edition/edit_banque">Edition des Banques</a>
			  <li class="list-group-item">Autre actions</li>
			</ul>		
		</div>
		
	</div>
	
</div>