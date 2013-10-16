<?php slot('home','active')?>
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
	
<div id="cont_lomejor">
	<div class="lomejor">
		<div class="titulo2">
			<img src="/images/tags/mejor.png" alt="lo mejor de business tag" />
			<p>
				Ultimos Sitios
			</p>
		</div>
	</div>
	<div id="cycle_home">
		
		<?php foreach ($sitiosrotador as $sitio): ?>
			<div class="int_cycle_home">	
			<img src="/uploads/sitio/<?php echo $sitio["imagen"]?>">
		</div>
		<?php endforeach;?>
		
		
		

	</div>
	<div id="cont_mejor_cat">
		<a id="left_cat" href="javascript: prev('mejor_cat_child', 'div', 'right_cat', 'left_cat', 0, 3, 120);"></a>
		<div id="mejor_cat">
			<div id="mejor_cat_child">
				<?php foreach($categorias as $i=>$cat):?>
					<div>
						<h1>
							<?php echo utf8_decode($cat->nombre) ?>
						</h1>
						<img src="/uploads/categoria/<?php echo $cat->thumbnail ?>" alt="categorias btag" />
						<ol>
							<?php
							foreach($cat->sitioes as $i=>$sitio): 
							if($i<5){?>
								<li>
									<a href="<?php echo url_for("sitio", array("nombre"=>Iridian::slugify($sitio->nombre), "id"=>$sitio->id))?>"><?php echo utf8_decode($sitio->nombre)?></a>
								</li>
								
							<?php }
							 endforeach; ?>
						</ol>
					</div>
				<?php endforeach; ?>
			</div>
		</div>
		<a id="right_cat" href="javascript: next('mejor_cat_child', 'div', 'right_cat', 'left_cat', 0, 3, 120);"></a>
	</div>
</div>

<div id="ultimos_sitios">
	<div class="titulo1">
		<p>
			Ultimos Sitios
		</p>
	</div>
	<?php include_partial('empresarial/destacados', array('sitios' => $sitiosrotador) )?>
</div>

<div id="categorias">
	<div class="titulo1">
		<p>
			Categorias
		</p>
	</div>
	<?php include_partial('empresarial/cate', array('categorias' => $categorias))?>
	<a id="ver_cate" class="ver_mas" href="<?php echo url_for('categoria') ?>"> ver m�s </a>
</div>

<div id="review_dia">
	<div class="titulo2">
		<img src="/images/tags/5s.png" alt="Review del d�a de business tag" />
		<p>
			Review del d�a
		</p>
	</div>
	<div class="perfil_ini">
		<a href="<?php echo url_for('perfil', array('nombre' =>$reviewdia["usuario"]["sfGuardUser"]["first_name"], 'id' =>$reviewdia["usuario"]["id"] ) ) ?>"  class="img">
			<img src="/uploads/usuarios/<?php echo $reviewdia["usuario"]["foto"]?>" alt=" Review de <?php echo $reviewdia["usuario"]["sfGuardUser"]["first_name"]?>"/>
		</a>
	</div>
	<div class="text_review">
		<p class="tit">
			<a href="<?php echo url_for('perfil', array('nombre' =>$reviewdia["usuario"]["sfGuardUser"]["first_name"],'id' => $reviewdia["usuario"]["sfGuardUser"]["id"] ) ) ?>">
			<?php echo $reviewdia["usuario"]["sfGuardUser"]["first_name"]; ?> 
			</a>
			comento en:
			<a href="<?php echo url_for("sitio", array("nombre"=>Iridian::slugify($reviewdia["sitio"]["nombre"]), "id"=>$reviewdia["sitio"]["id"]))?>">
				<?php echo $reviewdia["sitio"]["nombre"]; ?>
			</a>
			
		</p>
		<p>
				<?php echo html_entity_decode($reviewdia["texto"]); ?>
			<a href="<?php echo url_for("sitio", array("nombre"=>Iridian::slugify($reviewdia["sitio"]["nombre"]), "id"=>$reviewdia["sitio"]["id"]))?>"  target="_blank">
				Leer M�s...
			</a>
		</p>
	</div>
</div>

<div class="destacados shadow">
	<div class="titulo2">
		<img src="/images/tags/5s.png" alt="Review del d�a de business tag" />
		<p>
			Ofertas Destacadas:
		</p>
	</div>
	
	<?php foreach($ofertas as $i => $ofer):?>
	
		<div class="destacado">
			<div class="img1">
				<img src="/uploads/oferta/<?php echo $ofer["imagen"] ?>" alt="Oferta Destacada <?php echo $i?>" /> 
			</div>
			<h1><?php echo $ofer["nombre"] ?></h1>
			<div class="div1">
				<p>
					Esta Oferta Expira en: 
				</p>
				<h2>
				<?php $t =  (strtotime($ofer["fechatermino"]) - time());
				
				if($t<84600){
					//horas
					$time = floor($t/3600). " Horas";
				}
				else{
					//dias
					$time = floor($t/84600). " Dias";
				}
				?>
			 		<?php echo $time?>
				</h2>
			</div>
			
			<div class="div2">
				<a class="img2" href="<?php echo url_for("sitio", array("nombre"=>Iridian::slugify($ofer->sitio->nombre), "id"=>$ofer->sitio->id))?>">
					<img src="/uploads/sitio/<?php echo $ofer->sitio->imagen ?>" alt="<?php echo $ofer->sitio->id ?> business tag" /> 
				</a>
				<h2>
					<?php echo $ofer->sitio->nombre ?>
				</h2>
				<p>
					<?php echo utf8_decode($ofer->sitio->categoria->nombre) ?> <br/>
					<?php echo utf8_decode($ofer->sitio->direccion) ?>
				</p>
			</div>

		</div>
	<?php endforeach; ?>

		
</div>

<div class="destacados shadow">
	<div class="titulo2">
		<img src="/images/tags/5s.png" alt="Review del d�a de business tag" />
		<p>
			Eventos Destacados
		</p>
	</div>
	
	<?php foreach($eventos as $i =>$even):?>
	
		<div class="destacado">
			<div class="img1">
				<img src="/uploads/oferta/<?php echo $even["imagen"] ?>" alt="Oferta Destacada <?php echo $i?>" /> 
			</div>
			<h1><?php echo $even["nombre"] ?> </h1>
			<div class="div1">
				<p>
					Fecha del evento:
				</p>
				<h2>
					<?php echo $even["fechainicio"] ?>
				</h2>
			</div>
			<div class="div2">
				<a class="img2" href="<?php echo url_for("sitio", array("nombre"=>Iridian::slugify($even->sitio->nombre), "id"=>$even->sitio->id))?>">
					<img src="/uploads/sitio/<?php echo $even->sitio->imagen ?>" alt="<?php echo $ofer->sitio->id ?> business tag" /> 
				</a>
				<h2>
					<?php echo $even->sitio->nombre ?>
				</h2>
				<p>
					<?php echo utf8_decode($even->sitio->categoria->nombre) ?> <br/>
					<?php echo utf8_decode($even->sitio->direccion) ?>
				</p>
			</div>
		</div>
	
	<?php endforeach; ?>

		
</div>

<script type="text/javascript">
	$('#cycle_home').before('<ul id="nav">').cycle({ 
	    fx:      'fade', 
	    speed: 2000,
	    timeout:10000, 
	    pager:  '#nav',

	 // callback fn that creates a thumbnail to use as pager anchor 
	    pagerAnchorBuilder: function(idx, slide) { 
	        return '<li><a href="#"></a></li>'; 
	    } 
	});

	$("#ultimos_sitios .info_sitios:nth-child(2)").css('margin-top', '7px');
	$("#ultimos_sitios .info_sitios:nth-child(4)").css('border-bottom', 'none');
</script>