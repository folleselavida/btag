var map; 

function initialize() {
    var latlng = new google.maps.LatLng(4.677102,-74.047804);
    
    var cent = new google.maps.LatLng(4.677102,-74.047804);
    
    var myOptions = {
      zoom: 15,
      center: cent,
      mapTypeId: google.maps.MapTypeId.ROADMAP
    };
    
	var contentString1 = '<div class="contentjs">'+
	    '<h1>La Hamburgueseria</h1>'+
	    '<p> Calle 93B # 11A-2 a 11A-100 </p>'+ 
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

  }
  
  
