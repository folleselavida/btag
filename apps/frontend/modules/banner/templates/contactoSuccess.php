<?php slot('contacto','active')?>
<?php slot('descripcion','')?>
<?php slot('keywords','')?>

<script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.9/jquery.validate.js"></script>

<style type="text/css">
	.error { color: red !important; }
</style>

	
<style>
	#columna_izq {
		visibility: <?php echo $colIzq ?> !important;
	}
	
	#columna_der {
		visibility: <?php echo $colDer ?> !important;
	}
</style>

<div id="col_contacto" class="shadow">
	<div class="titulo2">
		<img src="/images/tags/btag2.png" alt="Review del día de business tag" />
		<p>
			¡Contáctanos!
		</p>
	</div>
	
	<script>
	  $(document).ready(function(){
		  // Override default error message
		    jQuery.validator.messages.required = "";

		    // Override generation of error label
		    $("#contactForm").validate({
		        errorPlacement: function(error, element) {},
		        rules: {
	        	   nombre: {
				          minlength:2,
				          maxlength:80,
			              required: true
			            },
		            email: {
				          minlength:5,
				          maxlength:40,
			              required: true,
			              email: true
			            }, 
		            tema: {
				          minlength:3,
				          maxlength:80,
			              required: true
			            },					            
		            ciudad: {
				          minlength:2,
				          maxlength:80,
			              required: true
			            },
		            mensaje: {
				          minlength:3,
				          maxlength:800,
			              required: true
			            }
		          }
		    });
		
	  });
  	</script>
  	<script type="text/javascript">
  	 function contacto(){
			  dojo.xhrGet({
			  url: "/banner/sendMail",
			  handleAs: "text",
			  content: {
			  nombre:document.getElementById("nombre").value,
			  email:document.getElementById("email").value,
			  tema:document.getElementById("tema").value,  
			  ciudad:document.getElementById("ciudad").value,
			  mensaje:document.getElementById("mensaje").value
			  },
			  load: function(data) {
			  console.log(data);
			  },
			  error: function() {
			  console.log("Se presento un error");
			  }
			  });
			  }
		  	</script>
		  	
		  	
	<div class="cont_crearperfil contenedor">
		<form class="crear_perfil" id="contactForm" action="javascript:contacto()">
			<label for="nombre">Nombre:</label>
			<input type="text" name="nombre" id="nombre"  class="required" minlength="2"/>
			
			<label for="email">Email:</label>
			<input type="text" name="email" id="email"  class="required" minlength="2"/>
				
			
			<label for="tema">Tema:</label>
			<input type="text" name="tema" id="tema"  class="required" minlength="2"/>
			
			<label for="ciudad">Ciudad:</label>
			<input type="text" name="ciudad" id="ciudad"  class="required" minlength="2"/>
			
			<label>	Mensaje	</label>
			<textarea id="mensaje" name="mensaje"></textarea>
			
			<input type="submit" value="Enviar" />
		</form>
	</div>
</div>