<?php foreach($sitios as $sit): ?>
	<div class="info_sitios">
		<img src="/images/tags/<?php echo $sit["calificacion"]."s.png"?>" alt="tag business tag" class ="tag1"/>
		<a href="<?php echo url_for("sitio", array("nombre"=>Iridian::slugify($sit["nombre"]), "id"=>$sit["id"]))?>">
			<img src="/uploads/sitio/<?php echo $sit["thumbnail"]?>" alt="tag business tag" class="img" />
		</a>
		<a class="tit" href="<?php echo url_for("sitio", array("nombre"=>Iridian::slugify($sit["nombre"]), "id"=>$sit["id"]))?>">
			<?php echo $sit["nombre"]?>
		</a>
		<p>
			<?php echo $sit["direccion"]?> <br/>
		</p>
	</div>
<?php endforeach; ?>