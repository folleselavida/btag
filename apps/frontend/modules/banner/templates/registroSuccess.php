<?php slot('registro','active')?>
<?php slot('descripcion','')?>
<?php slot('keywords','')?>

<?php include_partial('lb_error') ?>

<?php include_partial('lb_maps') ?>
	
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
				<input type="text" onblur="fillCampo(this,'Ingresa tu busqueda')" onfocus="cleanCampo(this,'Ingresa tu busqueda')" onclick="cleanCampo(this,'Ingresa tu busqueda')" value="Ingresa tu busqueda" />
				<a class="search" href="javascript: showPaso('busc_p', '2')"></a>
				</label>
				<p>
					� crea un nuevo sitio
				</p>
				<a href="javascript:  showPaso('new_p', '2')" class="nuevositio">
					Crear nuevo sitio
				</a>
			</fieldset>
		</form>
		<form class="crear_perfil">
			<p> �Ingresa aqu� si estas regsitrado! </p>
			<label>
				Email:
			</label>
			<input	type="text" />
			<label>
				Password:
			</label>
			<input	type="password" />
			<a class="submit" href="javascript:"> Acceder </a>
		</form>
	</div>
	
	<?php include_partial('busqueda_sitio')?>
	
	<?php include_partial('nuevo_sitio')?>
	
</div>


