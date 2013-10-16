function loadDataInDiv(query, id,url, divName){
	console.log("Entering loadDataInDiv");
	dojo.xhrGet({
		url: url,
		handleAs: "text",
		content: {
			query: query,
			id: id
		},
		load: function(data) {
			console.log("Resultados de busqueda cargados");
			var divi = document.getElementById(divName);
			divi.style.display = "block";
			divi.innerHTML = data;
			
		},
		error: function() {
			console.log("Se presento un error");
		}
	});
}

function finalizarSitio() {
	lb = document.getElementById("siteServices");
	services = "";
	for(var i=0; i < lb.length; i++) {
	    if(lb[i].selected) {
	        services += lb[i].value+"%";
	    }
	}
	return services;
}


dojo.require("dojo.io.iframe");
function registrar(url){
	console.log("registrando");
	console.log(url);
	dojo.io.iframe.send({
		url : url,
		method : "post",
		handleAs : "text",
		form : dojo.byId('galeriaForm'),
		handle : function(data, ioArgs) {
			document.getElementById("fullContent").innerHTML = data;
			console.log(data);
			
		},
		error : function(data, ioArgs) {
			console.log(data);
		}
	});
}

//texto, calificacion, sitio_id, usuario_id<- Se puede obtener sin enviarlo.
function loadNewComment(sitioid,calificacion, texto, url, divName){
	console.log("Entering createReview");
	dojo.xhrGet({
		url: url,
		handleAs: "text",
		content: {
			sitioid: sitioid,
			calificacion: calificacion,
			texto: texto
		},
		load: function(data) {
			console.log("loaded");
			var divi = document.getElementById(divName);
			divi.innerHTML = data;
			
		},
		error: function() {
			console.log("Se presento un error");
		}
	});
}

function loadBusquedaSitio(query, url, divName){
	
	console.log("Entering busqueda de sitio por nombre para la url");
	console.log(url);
	dojo.xhrGet({
		url: url,
		handleAs: "text",
		content: {
			query: query
		},
		load: function(data) {
			console.log("Resultados de busqueda cargados");
			var divi = document.getElementById(divName);
			divi.style.display = "block";
			divi.innerHTML = data;
			
		},
		error: function() {
			console.log("Se presento un error");
		}
	});
}

function cleanCampo(campo,texto){		
	if(campo.value == texto)	
		campo.value = '';	
}

function fillCampo(campo,texto){
	if(campo.value == '')			
		campo.value = texto;
}


/*$(function(){
	$('.scroll-pane').jScrollPane(
		{
			autoReinitialise: true
		}
	);
});*/


//funcion para convertir datos en 'px' a numero entero

function ConvertCssPxToInt(cssPxValueText) {
	// Set valid characters for numeric number.
	var validChars = "0123456789.";
	// If conversion fails return 0.
	var convertedValue = 0;
	// Loop all characters of
	for ( var i = 0; i < cssPxValueText.length; i++) {
		// Stop search for valid numeric characters, when a none numeric number
		// is found.
		if (validChars.indexOf(cssPxValueText.charAt(i)) == -1) {
			// Start conversion if at least one character is valid.
			if (i > 0) {
				// Convert validnumbers to int and return result.
				convertedValue = parseInt(cssPxValueText.substring(0, i));
				return convertedValue;
			}
		}
	}
	return convertedValue;
}

// fin



var estados = [ 0, 0, 0, 0, 0, 0 ,0, 0, 0, 0 ];

function next(parent, child, next, prev, rotador, num_fot, move) {
	document.getElementById(prev).style.display = "block";
	var total2 = $('#'+parent + '  ' + child).size();
	var pos2 = ConvertCssPxToInt(document.getElementById(parent).style.left);
	if ((pos2 / -move) + num_fot >= total2) {
	} else {
		if (estados[rotador] == 0) {
			pos2 -= move;
			dojo.animateProperty(
							{
								node : parent,
								properties : {
									left : {
										end : pos2
									}
								},
								onBegin : function() {
									estados[rotador] = 1;
								},
								onEnd : function() {
									estados[rotador] = 0;
									console.log((pos2 / -move) + num_fot);
									if ((pos2 / -move) + num_fot >= total2) {
										document.getElementById(next).style.display = "none";
									}
								},
								duration : 500
							}).play();
		} else {
			console.log("Estoy animando");
		}
	}
}

function prev(parent, child, next, prev, rotador, num_fot, move) {
	document.getElementById(next).style.display = "block";
	var total2 = $('#'+parent + '  ' + child).size();
	var pos2 = ConvertCssPxToInt(document.getElementById(parent).style.left);
	console.log(pos2);
	if (estados[rotador] == 0 & pos2 < 0) {
		document.getElementById(parent).style.left = pos2 + "px";
		pos2 += move;
		dojo.animateProperty({
			node : parent,
			properties : {
				left : {
					end : pos2
				}
			},
			onBegin : function() {
				estados[rotador] = 1;
			},
			onEnd : function() {
				if ((pos2 / move) - num_fot == total2) {
					alert("funciona");
				} else {
					estados[rotador] = 0;
				}
			},
			duration : 500
		}).play();
	} else {
		console.log("estoy animando");
	}
	if (pos2 == 0) {
		document.getElementById(prev).style.display = "none";
	}
}


function showPaso(tipo, paso){
	document.getElementById(tipo+paso).style.display = "block";
}

var est_lb = 0;
function lb(id){
	if(est_lb == 0){
		document.getElementById(id).style.display = "block";
		est_lb = 1;
	}else{
		document.getElementById(id).style.display = "none";
		est_lb = 0;
	}
}


var est_lb2 = 0;
function lb2(id){
	if(est_lb2 == 0){
		document.getElementById(id).style.display = "block";
		est_lb2 = 1;
	}else{
		document.getElementById(id).style.display = "none";
		est_lb2 = 0;
	}
}

var est_lb_maps = 0;
function lb_maps(id){
	if(est_lb_maps == 0){
		document.getElementById(id).style.visibility = "visible";
		est_lb_maps = 1;
	}else{
		document.getElementById(id).style.visibility = "hidden";
		est_lb_maps = 0;
	}
}

var est_lb_error = 0;
function lb_error(){
	if(est_lb_error == 0){
		document.getElementById('lb_error').style.display = "block";
		est_lb_error = 1;
	}else{
		document.getElementById('lb_error').style.display = "none";
		est_lb_error = 0;
	}
}

function showDueno(id){
	document.getElementById('coment_dueno_'+id).style.display = "block";
}
