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
	
	<form id="galeriaForm" action="javascript:registrar('<?php echo url_for("createimage")?><?php echo "?sitio_id=".$id?>')" method="POST" <?php $form->isMultipart() and print 'enctype="multipart/form-data" ' ?> accept-charset=utf-8 >
		<?php echo $form?>
	       <input type="submit" value="Guardar"/>
	</form>
</div>