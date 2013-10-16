<?php slot('categoria','active')?>
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

<div id="catecol1">
	<div class="titulo2">
		<img src="/images/tags/5s.png" alt="Review del día de business tag" />
		<p>
			Categorias
		</p>
	</div>
	<div id="categorias2">
		<?php include_partial('cate', array('categorias' => $categorias))?>
	</div>
</div>

<div id="wrap_col_busq">

	<div id="col_busq" class="shadow">
		<div class="titulo2">
			<img src="/images/tags/5s.png" alt="Review del día de business tag" />
			<p>
				Busca por Nombre ó Palabras Clave
			</p>
		</div>
		<div id="cont_busq">
			<form id="buscador" action="javascript:getSearchResults()">
				<input id="query" type="text" />
				<input type="submit" value="Buscar" />
			</form>
		</div>
	</div>
	
	<div id="col_res" class="shadow">

	</div>

</div>

<div id="col_starred" >
	<div class="titulo2">
		<img src="/images/tags/5s.png" alt="Review del día de business tag" />
		<p id="titulo_resultados">
			Sitios Destacados
		</p>
	</div>
	<div id="center_sit">
		<?php include_partial('destacados', array('sitios' => $sitios) )?>
	</div>
</div>

<script type="text/javascript">
function getSearchResults() {
	
	q = document.getElementById("query").value;
	loadBusquedaSitio(q, "<?php echo url_for("busqueda")?>", "col_res");
}

function getSearchCatResults(q) {
	loadBusquedaSitio(q,"<?php echo url_for("busquedacat")?>", "col_res");
}
</script>
