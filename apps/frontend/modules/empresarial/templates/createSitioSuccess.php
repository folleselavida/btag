
<div class="titulo2">
<img src="/images/tags/btag2.png" alt="Paso1" />
<p>
Se ha creado tu sitio, mejoralo agregando algunos detalles.
</p>
</div>
<div class="newsite_c5">
	<label for="datos">
		Datos del Sitio:
	</label>
	<select id="siteServices" name="siteServices[]" multiple="multiple">
		<?php foreach ($servicios as $servicio): ?>
			<option value="<?php echo $servicio->id?>"><?php echo utf8_decode($servicio->nombre)?></option>
		<?php endforeach;?>
	</select>
	
	
		<div id="fullContent">
		<div id="newsite">
			<div class="newsite_c4">
						
						<?php foreach ($imagenes as $imagen): ?>
							<div class="wrap_img">
								<div class="img">
									<img src="/uploads/galeria/<?php echo $imagen->imagen?>"/>
								</div>
								<a href="">Eliminar</a>
							</div>
						<?php endforeach;?>
			
						<div class="wrap_img" style="background: url(/images/basics/addImg.jpg) no-repeat;">
							<input type="file" class="file" name="file" value="" />
						</div>
			</div>
		</div>
		
	<form id="galeriaForm" action="javascript:registrar('<?php echo url_for("createimage")?><?php echo "?sitio_id=".$sitio_id?>')" method="POST" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?> accept-charset=utf-8 >
		<?php echo $form['id']->render()?>
		<?php echo $form['_csrf_token']->render()?>
		<?php echo $form['imagen']?>
		<?php echo $form['sitio_id']->render(array("class"=>"oculto"))?>
		<input class="submit" type="submit" value="Agregar imagen"/>
	</form>
	
	<div>
	<a  href="javascript:loadDataInDiv(finalizarSitio(),'<?php echo $sitio_id?>','<?php echo url_for(finalizar)?>','wrapperRegistro')" class="submit">Finalizar!</a></div>
	</div>
</div>

