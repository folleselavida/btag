<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="es" lang="es">

<head>
	<meta name="description" content="<?php include_slot('descripcion')?>"/>
	<meta name="keywords" content=""/>
	<meta property="og:title" content="<?php include_slot('titulo')?>" />
	<meta property="og:description" content="<?php echo include_slot("descripcion")?>." />
	<meta property="og:image" content="" />
	
	<link rel="image_src" href="/images/logo.jpg"/>
	<link rel="shortcut icon" href="/favicon.ico" />
	<title><?php include_slot('titulo')?></title>
	
	<script src="http://ajax.googleapis.com/ajax/libs/dojo/1.6.1/dojo/dojo.xd.js" type="text/javascript"></script>
	<script type="text/javascript" src="/js/jquery-1.8.2.min.js" type="text/javascript"></script>
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<script type="text/javascript" src="/js/jqueryCycle.js"></script>
	<script type="text/javascript" src="/js/jquery.si.js"></script>
	<?php include_http_metas() ?>
	<?php include_metas() ?>
    <?php include_stylesheets() ?>
	<?php include_javascripts() ?>
	
    
    <!--[if IE 7]>
	 	<link type="text/css" href="/css/ie7.css" rel="stylesheet" media="all" />
	<![endif]-->
	<!--[if IE 8]>
	 	<link type="text/css" href="/css/ie8.css" rel="stylesheet" media="all" />
	<![endif]-->
	<!--[if IE 9]>
	 	<link type="text/css" href="/css/ie9.css" rel="stylesheet" media="all" />
	<![endif]-->
   
    
	<script type="text/javascript">
	
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', 'UA-24754098-5']);
	  _gaq.push(['_trackPageview']);
	
	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();

	</script>
</head>