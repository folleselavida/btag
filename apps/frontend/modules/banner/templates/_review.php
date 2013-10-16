<?php foreach($review as $rev):?>
	<div class="reviews">
		<img class="tag2" alt="tag business tag" src="/images/tags/<?php echo $rev[0] ?>s.png">
		<h1>
			<?php echo $rev[1] ?>
		</h1>
		<p class="tit">
		
			<a href="<?php echo url_for('perfil', array('nombre' =>$rev["sfGuardUser"]["first_name"], 'id' =>$rev["usuario"]["id"])) ?>">
				Fernando Caviedes 
			</a>
			comento en:
			<a href="<?php echo url_for("sitio", array("nombre"=>Iridian::slugify($sitio->nombre), "id"=>$sitio->id))?>" >
				La Hamburguesería
			</a>
		</p>
		<?php echo html_entity_decode($rev[4]) ?>
		<div class="adds">
			<div>
				2 check-ins aquí
			</div>
			<a href=""> editar comentario </a>
		</div>
	</div>
<?php endforeach; ?>

<a id="ver_rev" class="ver_mas" href="">ver mas</a>