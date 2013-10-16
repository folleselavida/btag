<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
  <head>
    <?php include_http_metas() ?>
    <?php include_metas() ?>
    <?php include_title() ?>
    <link rel="shortcut icon" href="/favicon.ico" />
    <?php include_stylesheets() ?>
    <?php include_javascripts() ?>
    
  </head>
  <body>
  <img id="delantal" src="/images/fondo/delantal.jpg"/>
  	<?php if( $sf_user->hasCredential('admin') ){?>
  	<div class="fl nav">
	  	<div class="menu_be">
	  		<ul>
	  			<li><a href="<?php echo url_for('review')?>" >review</a></li>
	  			<li><a href="<?php echo url_for('oferta')?>" >Ofertas y eventos</a></li>
				<li><a href="<?php echo url_for('comentario')?>" >comentario</a></li>
				<li><a href="<?php echo url_for('ciudad')?>" >ciudad</a></li>
				<li><a href="<?php echo url_for('propietario')?>" >propietario</a></li>
				<li><a href="<?php echo url_for('categoria')?>" >categoria</a></li>
				<li><a href="<?php echo url_for('sitio')?>" >sitio</a></li>
				<li><a href="<?php echo url_for('galeria')?>" >galeria</a></li>
				<li><a href="<?php echo url_for('servicio')?>" >servicio</a></li>
				<li><a href="<?php echo url_for('dia')?>" >dia</a></li>
				<li><a href="<?php echo url_for('horario')?>" >horario</a></li>
				<li><a href="<?php echo url_for('generica')?>" >generica</a></li>
				<li><a href="<?php echo url_for('catgenerica')?>" >catgenerica</a></li>
				<li><a href="<?php echo url_for('usuario')?>" >usuario</a></li>
	  		</div>
	  	
		<div class="menu_be menu_dos">
			<ul>
			<?php if ( Iridian::getUser()->isSuperAdmin()){?>
				<li><a href="">Admin. Usuarios</a>
			  		<ul class="sal">
				  		<li><a href="<?php echo url_for('sf_guard_user')?>">Usuarios</a></li>
				  	</ul>
			  	</li>
			  <?php }?>
		  		<li>
		  			<a href="<?php echo url_for('sf_guard_signout')?>" >Salir</a>
		  		</li>
			</ul>
		</div>
		
	</div>
  	<?php }else $sf_user->signOut(); ?>
  	<div class="fl content_iridian">
    <?php echo $sf_content ?>
    </div>
  </body>
</html>
