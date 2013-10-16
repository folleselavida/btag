<div class="menu_genericas">

<?php $lastCat = "none"?>
<?php foreach ($genericas as $generica): ?>
	<?php if($generica["nombre"] != $lastCat)
		{
			$lastCat == $generica["nombre"];
			echo '<div class="cols">';
			echo "<h1>";
			echo $generica["nombre"];
			echo "</h1>";
			echo "<ul>";
		}
	?>
	
	<?php foreach ($generica["genericas"] as $gen): ?>
		<?php 
			?>
			<li><a href="<?php echo url_for("generica", array("nombre_slug"=>Iridian::slugify($gen["titulo"]), "id"=>$gen["id"]))?>">
			<?php 
				echo $gen["titulo"];
				?>
			</a></li>
			<?php 
		?>
		<?php endforeach;?>		
	<?php echo "</li>"?>
	<?php echo "</ul>"?>
	
	</div>
<?php endforeach;?>

</div>



<div class="publi_app">
	<img src="/images/pruebas/home/publiapp.jpg" alt="publicidad app btag" /> 
</div>

<div id="publi_lat"> </div>

<div id="footer">
	<p>
		Copyright © 2004-2012 Business Tag.  <br/>
		Business Tag and related marks are registered trademarks of  Business Tag. <br/> 
		All rights reserved. <br/>
	</p>
	<a id="iridian" href="http://www.iridian.co" target="_blank"></a>
</div>