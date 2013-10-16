<?php slot('registro','active')?>
<?php slot('descripcion','')?>
<?php slot('keywords','')?>
<?php include_partial('banner/lb_error') ?>
<?php include_partial('banner/lb_maps') ?>
<style>
	#columna_izq {
		visibility: <?php echo $colIzq ?> !important;
	}
	#columna_der {
		visibility: <?php echo $colDer ?> !important;
	}
	#searchbar {
		visibility: hidden; !important
	}
</style>
<div id="wrapperRegistro">


<div class="wrap_col_registo">
	<div class="col_registo shadow contenedor" style="display: block !important;">
		<div class="titulo2">
			<img src="/images/tags/btag2.png" alt="Paso1" />
			<p>
				Paso 1
			</p>
		</div>
		<form class="int_paso1">
			<fieldset>
				<label>
				<p>
					Busca tu sitio
				</p>
				<input id="query" type="text" onblur="fillCampo(this,'Ingresa tu busqueda')" onfocus="cleanCampo(this,'Ingresa tu busqueda')" onclick="cleanCampo(this,'Ingresa tu busqueda')" value="Ingresa tu busqueda"  maxlength="25"/>
				<a class="search" href="javascript: getResults()"></a>
				</label>
				<p>
					ó crea un nuevo sitio
				</p>
				<a href="javascript:  showPaso('new_p', '2')" class="nuevositio">
					Crear nuevo sitio
				</a>
			</fieldset>
		</form>
 <?php $user=Iridian::getUser()?>
 
	<?php if (!$user->isAuthenticated())
	{
		include_component('sfGuardAuth', 'signin_form_top');
	?>
	<?php 
	}else{?>
	<div id="registered">
	<div class="img">
		<img src="/images/usuarios/<?php echo $user->getGuardUser()->getProfile()->getFoto();?>" alt="BTAG" />
	</div>
	<p>
	<?php echo $user?>
	</p>
	<a href="<?php echo url_for("sf_guard_signout")?>">
		logout
	</a>
	</div>

	<?php }?>
	</div>
	<?php include_partial('busqueda_sitio')?>
	<?php include_partial('nuevo_sitio', array("categorias"=>$categorias, "servicios"=>$servicios))?>

<!-- Resultados por ajax	 -->
<div id="imagesCreated">

</div>
<script type="text/javascript">

function getResults() {
	q = document.getElementById("query").value;
	loadBusquedaSitio(q, "/empresarial/busquedaSitio", "busc_p2")
}
</script>
</div>
</div>

