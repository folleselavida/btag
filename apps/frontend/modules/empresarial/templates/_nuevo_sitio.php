<div class="col_registo shadow contenedor" id="new_p2">
	<div class="titulo2">
		<img src="/images/tags/btag2.png" alt="Paso1" />
		<p>
			Paso 2
		</p>
	</div>
	
	<div class="wrap_res_busq">
		<h1>
			Crea tu Nuevo Sitio
		</h1>
		<?php include_partial('newsite', array("categorias"=>$categorias, "servicios"=>$servicios))?>
	</div>
</div>

<div class="col_registo shadow contenedor" id="new_p3">
	<div class="titulo2">
		<img src="/images/tags/btag2.png" alt="Paso1" />
		<p>
			Paso 3
		</p>
	</div>
	<form class="crear_perfil" style="padding-left:230px;">
		<p style="font-size: 16px"> Tu sitio ha sido creado, ya puedes ingresar </p>
		<label>
			Email:
		</label>
		<input	type="text" />
		<label>
			Password:
		</label>
		<input	type="password" />
		<a class="submit" >Acceder</a>
	</form>
</div>

