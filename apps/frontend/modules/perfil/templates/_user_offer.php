<?php foreach($user_offer as $user): ?>

	<div class="user_offer">
		<p>
			<?php echo $user[0]?>
		</p>
		<a href="<?php// echo url_for("sitio", array("nombre"=>Iridian::slugify($sitio->nombre), "id"=>$sitio->id))?>">
			<?php echo $user[2]?>
		</a>
			<h1>
				<?php if($user[3] != null){?>
					<?php echo $user[3] ?> 
				<?php }?>
			</h1>
		
	</div>

<?php endforeach; ?>