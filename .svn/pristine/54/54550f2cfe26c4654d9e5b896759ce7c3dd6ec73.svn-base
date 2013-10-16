<?php slot('perfil','active')?>
<?php slot('descripcion','')?>
<?php slot('keywords','')?>
	
<style>
	#columna_izq {
		visibility: <?php echo $colIzq ?> !important;
	}
	
	#columna_der {
		visibility: <?php echo $colDer ?> !important;
	}
</style>

<div id="pcol1">
	<div class="info_perfil">
		<div class="titulo2">
			<img src="/images/tags/perfil.png" alt="Review del día de business tag" />
			<p>
				Perfil
			</p>
		</div>
		
		<a href="<?php echo url_for2('perfil', array('id' => 'fernando_caviedes' ) ) ?>"  class="img">
			<img src="/images/pruebas/home/perfil.jpg" alt=" Review de Fernando Caviedes"/>
		</a>
		<div class="center_perfil">
			<div class="txtDesc1">
				<h1>
					Fernando Caviedes
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
					Bogotá, Colombia
				</p>
				<h2>
					Miembro Desde:
				</h2>
				<p>
					Juloi, 2012
				</p>
				<h2>
					Email:
				</h2>
				<p>
					fernando@iridian.co
				</p>
			</div>
		</div>
	</div>
	
	<div class="info_perfil">
		<div class="titulo2">
			<img src="/images/tags/perfil.png" alt="Review del día de business tag" />
			<p>
				Perfil
			</p>
		</div>
		
		<div class="center_perfil">
			<h3>
				Promociones Reclamadas
			</h3>
			<?php include_partial('user_offer', array('user_offer' => $user_offer) )?>
			
			<h3>
				No se han hecho efectivas:
			</h3>
			<?php include_partial('user_offer', array('user_offer' => $user_offer2) )?>
		</div>
	</div>
</div>

<div id="pcol2">
	<div class="titulo2">
		<img src="/images/tags/btag2.png" alt="Review del día de business tag" />
		<p>
			Ultimos Reviews
		</p>
	</div>
	
	
	<div id="wrap_review">
		<?php include_partial('review', array('review' => $review)) ?>
	</div>
	
</div>

<div id="pcol3">
	<div id="publi_lat"> </div>
</div>

