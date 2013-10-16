<html><head></head><body><textarea>
<div id="newsite">
<?php echo $exito?>
	<div class="newsite_c4">
			<?php foreach ($imagenes as $imagen): ?>
				<div class="wrap_img">
					<div class="img">
						<img src="/uploads/galeria/<?php echo $imagen->imagen?>"/>
					</div>
					<a href="">Eliminar</a>
				</div>
			<?php endforeach;?>


	<form id="galeriaForm" action="javascript:registrar('<?php echo url_for("createimage")?><?php echo "?sitio_id=".$sitio_id?>')" method="POST" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?> accept-charset=utf-8 >
		<?php echo $form['id']->render()?>
		<?php echo $form['_csrf_token']->render()?>
		<?php echo $form['imagen']->render()?>
		<?php echo $form['sitio_id']->render(array("class"=>"oculto"))?>
		<input class="submit" type="submit" value="Agregar imagen"/>
	</form>
	
	<div>
	<a  href="javascript:loadDataInDiv(finalizarSitio(),'<?php echo $sitio_id?>','<?php echo url_for(finalizar)?>','wrapperRegistro')" class="submit">Finalizar!</a></div>
	</div>	
	</div>
</textarea></body></html>