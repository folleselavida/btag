<div class="wrap_ofer">

<?php if(count($ofer)<1){
	
	if ($tipo == "even") {
		echo utf8_decode("Actualmente no existen eventos vigentes.");
	}
	else{
		echo html_entity_decode("Actualmente no existen ofertas vigentes");
	}
	
} ?>

	<?php foreach($ofer as $prom): ?>
		<div class="ofer">
			<a href="javascript: lb('lb_desc_<?php echo $tipo ?>')" >
				<img src="/uploads/oferta/<?php echo $prom["imagen"]?>" alt="oferta <?php echo $prom["id"] ?> business tag" />
			</a>
			<h1>
				<?php echo $prom["nombre"]?>
			</h1>
			<p>
				<?php echo $titulo?>
			</p>
			
				<?php if ($tipo == "ofer") {
					
					$t =  (strtotime($prom["fechatermino"]) - time());
					if($t<84600){
						//horas
						$time = floor($t/3600). " Horas";
					}
					else{
						//dias
						$time = floor($t/84600). " Dias";
					}
					
				}
				else{
					$t = explode(" ", $prom["fechainicio"]);
					$time = $t[0];
				}
				?>
				
				
			<h2>
				<?php echo $time?>
			</h2>
		</div>
			
	<?php endforeach; ?>
</div>