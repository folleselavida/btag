<?php slot('perfil','active')?>
<?php slot('descripcion','')?>
<?php slot('keywords','')?>
	
<style>
	#columna_izq {
		visibility: <?php echo $colIzq ?> !important;
	}
	
	#columna_der {
		visibility: <?php echo $colDer ?> !important;
	}
</style>

<link type="text/css" href="/css/jquery.si.css" rel="stylesheet" media="all" />
<script type="text/javascript">
	$(document).ready(function() {
		$("input.file").si();
	});
</script>

<div id="crearcol1">
	<div class="titulo2">
		<img src="/images/tags/btag2.png" alt="Review del día de business tag" />
		<p>
			Crear Perfil en Business Tag
		</p>
	</div>
	<div class="cont_crearperfil contenedor">
		<div id="fbcrear">
			<p>
				Hi, do you want to use information from your Facebook profile to make sign up faster?
			</p>
			<img src="/images/basics/btag-fb.png" alt="btag connect with facebook" id="btag-fb" />
			<a id="fbconnect2"></a>
		</div>
		
		<?php echo get_partial('sfGuardRegister/form', array('form' => $form)) ?>
		
	</div>
</div>

<div id="crearcol2">
	<div class="titulo2">
		<img src="/images/tags/btag2.png" alt="Review del día de business tag" />
		<p>
			¿Ya eres usuario?
		</p>
	</div>
	<div class="cont_crearperfil contenedor">
	<?php include_component('sfGuardAuth', 'signin_form');?>
		
	</div>
	
	<div id="publi_lat2"> </div>
</div>