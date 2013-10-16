	<div class="titulo2">
		<img src="/images/tags/btag2.png" alt="Paso1" />
		
		<p>
			Paso 2
		</p>
		
	</div>
	<div class="wrap_res_busq">
		<h1>
			Resultados de la Busqueda: <?php echo $query?>
		</h1>
		
		<?php if(count($resultados)<1){
			
			echo "No se han encontrado resultados.";
			
		}
		else{
			?>
			<?php foreach ($resultados as $resultado): ?>
						<div class="resultados">
						<h2>
							<?php echo $resultado["nombre"]?>
						</h2>
						<p>
							<?php echo $resultado["direccion"]?>
						</p>
						<p>
							Teléfono: <?php echo $resultado["telefono"]?>
						</p>
						<a href="javascript: showPaso('busc_p', '3')">
							Reclamar Sitio
						</a>
					</div>
					<?php endforeach;?>
			
			<?php 
		}
		?>
		
		
		
		
		
	</div>
	