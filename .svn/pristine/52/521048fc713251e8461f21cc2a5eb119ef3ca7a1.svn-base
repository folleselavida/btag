<form id="searchbar">
	<fieldset>
		<select>
			<option>
				Ciudad
			</option>
			
			<?php foreach ($ciudades as $ciudad): ?>
			<option>
				<?php echo utf8_decode($ciudad->nombre)?>
			</option>
			<?php endforeach;?>

		</select>
		<input type="text" onblur="fillCampo(this,'Ingresa tu busqueda')" onfocus="cleanCampo(this,'Ingresa tu busqueda')" onclick="cleanCampo(this,'Ingresa tu busqueda')" value="Ingresa tu busqueda" />
		<input type="submit" value=""/>
	</fieldset>
</form>s