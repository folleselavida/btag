<link href="/css/multi-select.css" media="screen" rel="stylesheet" type="text/css">
<script src="/js/jquery.multi-select.js" type="text/javascript"></script>

<form id="newsite">
	<fieldset>
		<div class="newsite_c1">
			<label for="sitio">
				Nombre del Sitio:
			</label>
			<input type="text" name="sitio" id="sitio">
			<label for="url">
				URL Website:
			</label>
			<input type="text" name="url" id="url">
			
			<label for="categoria">
				Categoria a la que pertenece:
			</label>
			<select id = "categoriaSelect">
			
				<?php foreach ($categorias as $categoria): ?>
					<option value="<?php echo $categoria->id?>">
						<?php echo utf8_decode($categoria->nombre)?>
					</option>
				<?php endforeach;?>
			</select>
			
			<label for="hora">
				Horario:
			</label>
			<input type="text" name="hora" id="hora">
			
			<a class="mashorario" href="javascript: addHorario()">agregar otro horario [+]</a>
			
			<div id="horarioList">
			</div>
			
		</div>
		<div class="newsite_c2">
			<label for="dir">
				Dirección:
			</label>
			<input type="text" name="dir" id="dir">
			
			<label for="maps1">
				LAT Google Maps:
			</label>
			<input type="text" name="maps1" onclick="lb_maps('lb_maps'); " id="coord_maps1" value="">
		</div>
		<div class="newsite_c3">
			<label for="tel">
				Teléfono(s): 
			</label>
			<input type="text" name="tel" id="tel">
			
			<label for="maps2">
				LONG Google Maps:
			</label>
			<input type="text" name="maps2" onclick="lb_maps('lb_maps'); " id="coord_maps2" value="">
		</div>
		<div class="newsite_c4">
			<label for="desc">
				Descripción:
			</label>
			<textarea id="descripcion">  </textarea>
		
	
<!-- Fin multiselect -->

		</div>
		<a onclick="createSitio()" class="submit"> Crear </a>
	</fieldset>
</form>


<div id="siteData"></div>

<link type="text/css" href="/css/jquery.si.css" rel="stylesheet" media="all" />
<script type="text/javascript">

	var idCont = 0;

		 
	$(".newsite_c4 .wrap_img:nth-child(7n)").css('margin-right', '0px');


	function addHorario() {
		$("#horarioList").append('<div class="horario" id="hrio_'+idCont+'"><a href="javascript:removeHorario('+idCont+')"></a><p>'+document.getElementById("hora").value+'</p></div>');
		document.getElementById("hora").value = "";
		idCont+=1;
	}

	function removeHorario(id) {
		console.log("Borrando elemento Horario");
		$('#hrio_'+id).remove();
	}


	function alertit() {
		alert(1);
	}

	
	function createSitio(){

	horario = "";
	
	$('.horario').each(function()
	   {
		horario += $(this).text()+"%";
	   }
	);
		dojo.xhrGet({
			url: "<?php echo url_for("createsitio")?>",
			handleAs: "text",
			//Procesar horarios y agregar a una cadena que se pueda explotar para agregarlos
			content: {
				nombre: document.getElementById("sitio").value,
				direccion: document.getElementById("dir").value,
				telefono: document.getElementById("tel").value,
				website: document.getElementById("url").value,
				latitud: document.getElementById("coord_maps1").value,
				longitud: document.getElementById("coord_maps2").value,
				categoria: document.getElementById("categoriaSelect").value,
				descripcion: document.getElementById("descripcion").value,
				horario: horario
			},
			load: function(data) {
				document.getElementById("siteData").innerHTML = data;
					  // Handler for .ready() called.
				  $('#siteServices').multiSelect();
					$("#gallery li a").live("click",function(){
						var a = $(this);
						$.get("procesa.php?action=eliminar",{id:a.attr("id")},function(){
							a.parent().fadeOut("slow");
						});
					});


				
				//showPaso('new_p', '3');
				
			},
			error: function() {
				console.log("Se presento un error");
			}
		});
	}
	
</script>