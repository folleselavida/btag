<?php 
	$destino = "uploads/tempo/";
	if(isset($_FILES['image']['type'])){}
	$filetype =  $_FILES['image']['type'];
	$type = substr($filetype, (strpos($filetype,"/"))+1);
	$types=array("jpeg","gif","png");
	
	if(in_array($type, $types)){
		
		if(isset($_FILES['image'])){
			
			$nombre = $_FILES['image']['name'];
			$temp   = $_FILES['image']['tmp_name'];
			
			// subir imagen al servidor
			if(move_uploaded_file($temp, $destino.$nombre))
			{
				
			}
			$ID = 1;
			
			echo  '<li style="list-style: none;">
				<div class="wrap_img">
					<div class="img">
						<img src="/uploads/tempo/'.$nombre.'" alt="imagen sitio btag" />
					</div>
					<a href="javascript:$(this).remove()">Eliminar</a>
				</div>
				</li>';
		}
	}else{
		echo "Solo imagenes jpg,png,gif";
	}

?>