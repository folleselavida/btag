
<div id="map_canvas">
				
</div>

<a href="" id="mapaComp"> View Larger Map/Directions</a>

<script>
var map; 

    var latlng = new google.maps.LatLng(<?php echo $sitio->latitud?>,<?php echo $sitio->longitud?>);
    
    var cent = new google.maps.LatLng(<?php echo $sitio->latitud?>,<?php echo $sitio->longitud?>);
    
    var myOptions = {
      zoom: 15,
      center: cent,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    
	var contentString1 = '<div class="contentjs">'+
	    '<h1><?php echo $sitio->nombre?></h1>'+
	    '<p> <?php echo $sitio->direccion?> </p>'+ 
    '</div>';
	
	
	var info1 = new google.maps.InfoWindow({
		content: contentString1
	});

	
    var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
	var image ='/images/tags/map.png';
	var countryMarker1 = new google.maps.Marker({
      position: latlng,
      map: map,
      icon: image,
	  title:"Nombre Sede Colombia"
  });
	
  // To add the marker to the map, call setMap();
  countryMarker1.setMap(map);

  google.maps.event.addListener(countryMarker1, 'click', function() {
	  info1.open(map,countryMarker1); 
	});

  
  
</script>