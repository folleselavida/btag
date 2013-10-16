<div class="lb" id="lb_maps" style="display: block; visibility: hidden">
	<div class="int_lb_maps int_lb contenedor">
		<div class="titulo2">
			<img src="/images/tags/btag2.png" alt="Paso1" />
			<p>
				Google Maps
			</p>
			<a class="cerrar_lb" href="javascript: lb_maps('lb_maps')">cerrar</a>
		</div>
		<div id="map">
		</div>
		<a href="javascript: getPosition(); lb_maps('lb_maps')" class="submit" style="margin-right: 22px">Confirmar Posición</a>
	</div>
</div>

<script type="text/javascript">

var countryMarker;

function initialize2(latitud, longitud) {
    var myLatlng = new google.maps.LatLng(parseFloat(latitud),parseFloat(longitud));
    var myOptions = {
      zoom: 6,
      center: myLatlng,
      mapTypeId: google.maps.MapTypeId.ROADMAP,
	  styles:styles
    }
    var map = new google.maps.Map(document.getElementById("map"), myOptions);
	
	var image ='/images/tags/map.png';
	var j = 0;
    var contentString = new Array();
    var coords = new Array();
    var info = new Array();
    countryMarker = new Array();
	
		    coords[0] = new google.maps.LatLng(4.602434,-74.07692);
		    info[0] = new google.maps.InfoWindow({
				content: contentString[0]
			});
		    countryMarker[0] = new google.maps.Marker({
			      position: coords[0],
			      map: map,
			      icon: image,
				  draggable: true,
				  animation: google.maps.Animation.DROP,
			  });
			  google.maps.event.addListener(countryMarker[0], 'click', toggleBounce);
	
		function toggleBounce() {
	
	    // if (marker.getAnimation() != null) {
	    //  marker.setAnimation(null);
	   //  } else {
	    //  marker.setAnimation(google.maps.Animation.BOUNCE);
	    //}
	  }
 

  }
  
    function getPosition(){
	   console.log(countryMarker[0].position.lat());
	   console.log(countryMarker[0].position.lng());
	   document.getElementById('coord_maps1').value = countryMarker[0].position.lat();
	   document.getElementById('coord_maps2').value = countryMarker[0].position.lng();
  }
</script>

<script>
var styles = [
	
];
var options = {
	mapTypeControlOptions: {
		mapTypeIds: [ 'Styled']
	},
	//center: new google.maps.LatLng(54.32000000000001, 9.35292968750002),
	zoom: 4,
	mapTypeId: 'Styled'
};
var div = document.getElementById('map');
var map = new google.maps.Map(div, options);
var styledMapType = new google.maps.StyledMapType(styles, { name: 'Styled' });
map.mapTypes.set('Styled', styledMapType);

initialize2(4.703156,-74.043663);




</script>