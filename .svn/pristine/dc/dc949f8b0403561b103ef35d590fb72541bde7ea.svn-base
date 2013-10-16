 <?php $user=Iridian::getUser()?>
 
	<?php if (!$user->isAuthenticated())
	{
		include_component('sfGuardAuth', 'signin_form_top');
	?>
	<?php 
	}else{?>
	<div id="registered">
	<div class="img">
		<img src="/uploads/usuarios/<?php echo $user->getGuardUser()->getProfile()->getFoto();?>" alt="BTAG" />
	</div>
	<p>
	<?php echo $user?>
	</p>
	<a href="<?php echo url_for("sf_guard_signout")?>">
		logout
	</a>
	</div>

	<?php }?>
    		
    		



	
	