<?php slot('sitio','active')?>
<?php slot('descripcion','')?>
<?php slot('keywords','')?>

<?php include_partial('banner/lb_error') ?>

<?php include_partial('banner/lb_maps') ?>

<?php include_partial('lb_edit_site')?>

<?php include_partial('banner/lb_ofertas')?>

<?php include_partial('banner/lb_eventos')?>

<?php include_partial('banner/lb_desc_ofer')?>

<?php include_partial('banner/lb_desc_even')?>

<style>
	#columna_izq {
		visibility: <?php echo $colIzq ?> !important;
	}
	
	#columna_der {
		visibility: <?php echo $colDer ?> !important;
	}
</style>

<div class="sitio_izq ">
	<div class="sitio shadow">
		<div class="titulo2">
			<img src="/images/tags/3s.png" alt="lo mejor de business tag" />
			<p>
				<?php echo $sitio->nombre?>
			</p>
			<a class="editar_sec" href="javascript: lb('lb_edit_site')">
				editar informaci�n del sitio [+]
			</a>
		</div>
		<div class="wrapper">
			<div class="descriptiva1">
				<img src="/uploads/categoria/<?php echo $sitio->categoria->logo?>" alt="<?php echo $categoria ?> - business tag" class="cateImg"/>
				
				<div class="txtDesc1">
					<h1>
						<?php echo $sitio->categoria->nombre?>
					</h1>
					<p>
						<?php echo $tags ?> tags
					</p>
					<p></p>
					<a class="vivo" href="">
						�EN VIVO!
					</a>
					<h2> Horarios: </h2>
					<?php 
					
					$horarios = explode("%", $sitio->horario);
															
					foreach ($horarios as $hor){
					
						if ($hor) {
							echo "<p>".$hor."</p>";
						}
					
					}
					
					?>			

				</div>
			</div>
			<a id="imgSitio">
				<img src="/images/pruebas/sitio/preview.jpg" alt="" />
			</a>

		</div>
			<ul id="carac">
				<?php foreach($sitio->sitio_has_servicioes as $srv): ?>
					<li>
						<?php echo $srv->servicio->nombre?>
					</li>
				<?php endforeach; ?>
			</ul>
			<div id="descripcion">
				<?php echo html_entity_decode($sitio["descripcion"]) ?>
			</div>
	</div>
	<div class="sitio shadow" style="margin-top:20px;">
		<div class="space1">
			<div class="titulo2 rounded_tit" >
				<img src="/images/tags/5s.png" alt="lo mejor de business tag" />
				<p>
					Reviews
				</p>
			</div>
		</div>
		<div class="space2">
			<a href="">
				Facebook Friends
			</a>
			<a href="" class="active_com">
				BTAG Reviews
			</a>
		</div>
		<?php include_partial('banner/coment', array(
			'coment' => $reviews
		))?>
	</div>
	
</div>

<div class="sitio_der">
	<div class="sitio2">
		<div class="titulo2">
			<img src="/images/tags/aqui.png" alt="lo mejor de business tag" />
			<p>
				Aqu� Queda
			</p>
		</div>
		
		 <?php include_partial('map', array("sitio"=>$sitio))?>
	</div>
	
	<div class="sitio2" style="margin: 20px 0px;">
		<div class="titulo2">
			<img src="/images/tags/promo.png" alt="lo mejor de business tag" />
			<p>
				Ofertas
			</p>
			<a class="editar_sec" href="javascript: lb('lb_edit_ofe')">
				editar ofertas [+]
			</a>
		</div>
		
		<?php include_partial('ofer', array('ofer' => $ofertas, 'tipo' => 'ofer', 'titulo' => 'Esta oferta expira en:'))?>
		
	</div>
	
	<div class="sitio2" style="margin: 20px 0px;">
		<div class="titulo2">
			<img src="/images/tags/promo.png" alt="lo mejor de business tag" />
			<p>
				Eventos
			</p>
			<a class="editar_sec" href="javascript: lb('lb_edit_eve')">
				editar eventos [+]
			</a>
		</div>
		<?php include_partial('ofer', array('ofer' => $eventos, 'tipo' => 'even', 'titulo' => 'Fecha del evento:'))?>
	</div>
	
</div>


<script>
$("#carac li:nth-child(4n)").css('margin-right', '0px');
</script>