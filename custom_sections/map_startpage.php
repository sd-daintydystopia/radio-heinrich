<script
	  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDUfSQMWHgsf6THt12hL2BMqxYNcH_Rzc4&callback=initMap&libraries=&v=weekly"
	  defer
></script>
<style type="text/css">
	  /* Set the size of the div element that contains the map */
	  #map {
		height: 400px;
		/* The height is 400 pixels */
		width: 100%;
		/* The width is the width of the web page */
	  }
</style>
<script>
	  // Initialize and add the map
	  function initMap() {
		// The location of Uluru
		const uluru = { lat: 50.776, lng: 6.095 };
		// The map, centered at Uluru
		const map = new google.maps.Map(document.getElementById("map"), {
		  zoom: 12,
		  center: uluru,
		  styles:
				[
					{
						"featureType": "administrative",
						"elementType": "all",
						"stylers": [
							{
								"saturation": "-100"
							}
						]
					},
					{
						"featureType": "administrative.province",
						"elementType": "all",
						"stylers": [
							{
								"visibility": "off"
							}
						]
					},
					{
						"featureType": "landscape",
						"elementType": "all",
						"stylers": [
							{
								"saturation": -100
							},
							{
								"lightness": 65
							},
							{
								"visibility": "on"
							}
						]
					},
					{
						"featureType": "poi",
						"elementType": "all",
						"stylers": [
							{
								"saturation": -100
							},
							{
								"lightness": "50"
							},
							{
								"visibility": "simplified"
							}
						]
					},
					{
						"featureType": "road",
						"elementType": "all",
						"stylers": [
							{
								"saturation": "-100"
							}
						]
					},
					{
						"featureType": "road.highway",
						"elementType": "all",
						"stylers": [
							{
								"visibility": "simplified"
							}
						]
					},
					{
						"featureType": "road.arterial",
						"elementType": "all",
						"stylers": [
							{
								"lightness": "30"
							}
						]
					},
					{
						"featureType": "road.arterial",
						"elementType": "labels.text.fill",
						"stylers": [
							{
								"lightness": "0"
							}
						]
					},
					{
						"featureType": "road.local",
						"elementType": "all",
						"stylers": [
							{
								"lightness": "40"
							}
						]
					},
					{
						"featureType": "road.local",
						"elementType": "geometry.fill",
						"stylers": [
							{
								"lightness": "-15"
							}
						]
					},
					{
						"featureType": "transit",
						"elementType": "all",
						"stylers": [
							{
								"saturation": -100
							},
							{
								"visibility": "simplified"
							}
						]
					},
					{
						"featureType": "water",
						"elementType": "geometry",
						"stylers": [
							{
								"hue": "#ffff00"
							},
							{
								"lightness": -25
							},
							{
								"saturation": -97
							}
						]
					},
					{
						"featureType": "water",
						"elementType": "labels",
						"stylers": [
							{
								"lightness": -25
							},
							{
								"saturation": -100
							}
						]
					}
				],
		  
		});
		// The marker, positioned at Uluru
		const marker = new google.maps.Marker({
			position: uluru,
			map: map,
			
		});
	  }
</script>

<section class="row map_startpage">
	<div class="col-12 container">
		<div class="row row-cols-1">
			<div id="map" class="col"></div>
		</div>
	</div>
</section>