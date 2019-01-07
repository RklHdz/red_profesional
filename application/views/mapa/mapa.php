<!DOCTYPE html>
<html>
<head>
	<script src="https://unpkg.com/leaflet@1.0.2/dist/leaflet.js"></script>
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.2/dist/leaflet.css" />
	<link rel="stylesheet" type="text/css" href="assets/css/map.css">
	<title></title>
</head>
<body>
<div id="map"></div>

<script>
	var map = L.map('map')// Se declara la variable para la utilizacion del mapa
		setView([41.66, -4.72], 15);//Se establece la posicion inicial del mapa
       //Se añade las capas del mapa
		L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', 
		{ attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>',
		maxZoom: 18}).addTo(map);

		L.control.scale().addTo(map);//Se añade un control de escala

		L.marker([41.66, -4.71], {draggable: true}).addTo(map);
</script>
</body>
</html>