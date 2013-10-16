

		<a href="<?php echo url_for('perfil', array('nombre' =>$perfil["sfGuardUser"]["first_name"], 'id' =>$reviewdia["usuario"]["id"]))?>" class="img">
			<img src="/uploads/usuarios/<?php echo $perfil["foto"]?>" alt="<?php echo $perfil["sfGuardUser"]["first_name"]?>"/>
		</a>
<div class="center_perfil">
	<div class="txtDesc1">
		<h1>
			<?php echo $perfil["sfGuardUser"]["first_name"]?>
		</h1>
		<a class="btags" >
				100 Business Tags
		</a>
		<a class="ptags" >
				2 Check-ins
		</a>
		<h2>
			Location:
		</h2>
		<p>
			<?php echo utf8_decode($perfil["ciudad"])?>, <?php echo utf8_decode($perfil["pais"])?>
		</p>
		<h2>
			Miembro Desde:
		</h2>
		<p>
			<?php echo Iridian::stampToDateString((string)$perfil["sfGuardUser"]["created_at"])?>
		</p>
		<h2>
			Email:
		</h2>
		<p>
			<?php echo $perfil["sfGuardUser"]["email_address"]?>
		</p>
	</div>
</div>