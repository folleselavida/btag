<div class="lb" id="lb_edit_ofe">
	<div class="int_edit_ofe int_lb contenedor">
		<div class="titulo2">
			<img src="/images/tags/btag2.png" alt="Paso1" />
			<p>
				Editar Ofertas
			</p>
			<a class="cerrar_lb" href="javascript: lb('lb_edit_ofe')">cerrar</a>
		</div>
		<div class="wrap_cont_edit_ofer">
			<?php for ($i = 0; $i < 4; $i++):?>
				<div class="new_ofer">	
					<a href="" class="delete"></a>
					<a href="" class="edit">editar</a>
					<p>
						50% de descuento en hamburguesas al carbon más 2 adiciones
					</p>
				</div>
			<?php endfor; ?>
			
			<form class="new_ofer_form">
				<fieldset>
					<h1>
						Nueva Oferta
					</h1>
					<div class="new_ofer_form_c1">
						<label for="nombre"> Nombre de la oferta: </label>
						<input type="text" onclick="lb_error()" name="nombre">
						
						<label for="inicio"> Inicio de la Oferta: </label>
						<input type="text" name="inicio">
						
						<label for="condiciones"> Condiciones de la Oferta: </label>
						<textarea></textarea>
						<a href="" class="submit"> Crear Oferta: </a>
					</div>
					<div class="new_ofer_form_c1">
						<label for="numero"> Numero de Ofertas: </label>
						<input type="text" name="numero" style="width: 40px">
						
						<p >
							/
						</p>
						
						<input id="masculino" type="radio" name="grupo1" value="ilimitadas" style="margin-top: 10px">
						<label for="numero" style="width: auto !important; margin-top: 10px"> Numero de Ofertas: </label>
						
						<label for="final"> Finalización de la Oferta: </label>
						<input type="text" name="final">
						
						<label>Imagen</label>
						<div class="wrap_file" style="background: url(/images/basics/file.jpg)">
							<input type="file" class="file" name="file" value="buscaree" />
						</div>
						<div class="img">
							<img alt="promocion 1 business tag" src="/images/pruebas/sitio/prom2.jpg">
						</div
					</div>
				</fieldset>
			</form>
		</div>
	</div>
</div>

