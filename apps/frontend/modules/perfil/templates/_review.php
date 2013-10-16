<?php 
if(count($reviews)<1){
	?>
	Aún no se han realizado reviews
	<?php 
}
else{
?>


<?php foreach($reviews[0]["reviews"] as $rev):?>
	<div class="reviews">
		<img class="tag2" alt="tag business tag" src="/images/tags/<?php echo $rev["calificacion"]."s.png"?>">
		<h1>
			<?php echo $rev["created_at"] ?>
		</h1>
		<p class="tit">
			<a href="<?php echo url_for('perfil', array('nombre' =>$rev["sfGuardUser"]["first_name"], 'id' =>$rev["usuario"]["id"])) ?>">
				<?php echo $nombre?> 
			</a>
			comento en:
			<a href="<?php echo url_for("sitio", array("nombre"=>Iridian::slugify($rev["sitio"]["nombre"]), "id"=>$rev["sitio"]["id"]))?>" >
				<?php echo $rev["sitio"]["nombre"]?>
			</a>
		</p>
		<?php echo html_entity_decode($rev["texto"]) ?>
		<div class="adds">
			<div>
				2 check-ins aquí
			</div>
			<a href=""> editar comentario </a>
		</div>
	</div>
<?php endforeach;
?>
<a id="ver_rev" class="ver_mas" href="">ver mas</a>
<?php  
}?>



