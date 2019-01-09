<!DOCTYPE html>
<html>
<head>
	<script src="https://unpkg.com/leaflet@1.0.2/dist/leaflet.js"></script>
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.2/dist/leaflet.css" />
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css"
   integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
   crossorigin=""/> 
 	<script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"
   integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg=="
   crossorigin=""></script>

	<style>
  #map { 
    width: 100%;
    height: 580px;
    box-shadow: 5px 5px 5px #888;
 }
</style>
</head>
	<body>
		<div id = 'map'></div>

	</body>

	<script>
  var map = L.map('map').
     setView([13.702304199999999, -89.20085569999999],
     17);

     L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>',
		maxZoom: 18
		}).addTo(map);

     L.control.scale().addTo(map);

     var marker = L.marker([13.702304, -89.200855]).addTo(map);//Ubicación estática de puntero

     marker.bindPopup("<b>Centro de formacion Profesional</b><br> Universidad Salvadoreña <br> Alberto Masferrer <b>USAID-USAM</b>").openPopup();






     /*var lista = {
	"dato1": [
	"latitud": 13.702304,
	"longuitud": -89.200855,
	"nombre": "la info del dato 1"
	],
	"dato2": [
	"latitud": 13.705304,
	"longuitud": -89.260855,
	"nombre": "la info del dato 2"
	],
	"dato3": [
	"latitud": 13.712304,
	"longuitud": -89.300855,
	"nombre": "la info del dato 3"
	]
}

for (var i = Things.length - 1; i >= lista.length ; i--) {
	
var marker = L.marker([lista[i].latitud, lista[i].longuitud]).addTo(map)

}*/
</script>



</html>


