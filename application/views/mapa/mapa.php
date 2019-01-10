<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" >
	<!--CDN LEFTLET-->
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.2/dist/leaflet.css" />
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css"
   integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
   crossorigin=""/> 
 

	<style>
  #map { 
    width: 100%;
    height: 750px;
 }
</style>
</head>
	<body>
		<!--DIV DE MAPA-->
		<div id = 'map'></div>

		<!--JS-->
<script src="https://unpkg.com/leaflet@1.0.2/dist/leaflet.js"></script>
<script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"
   integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg=="
   crossorigin=""></script>
	<script>
  var map = L.map('map').
     setView([13.698370, -89.188990],
     17);

     L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>',
		maxZoom: 25
		}).addTo(map);

     L.control.scale().addTo(map);

     //Inicio de Icono personalizado//
     var MoreIcon = L.Icon.extend({
    options: {

        iconSize:     [38, 50],
        shadowSize:   [50, 64],
        iconAnchor:   [22, 94],
        shadowAnchor: [4, 62],
        popupAnchor:  [-3, -76]
    }
});
     //Se unen los 3 iconos//
var IconOne = new MoreIcon({iconUrl: 'asset/img/ubicacion1.png'}),
    IconTwo = new MoreIcon({iconUrl: 'asset/img/ubicacion1.png'}),
    IconThree = new MoreIcon({iconUrl: 'asset/img/ubicacion1.png'});
     //Finalizacion de Icono personalizado//
	 //Inicio de Icono USAM//
     L.marker([13.702304, -89.200855], {icon: IconOne}).addTo(map).bindPopup("<b>Centro de formacion Profesional</b><br> Universidad Salvadoreña <br> Alberto Masferrer <b>USAID-USAM</b>");
     //Fin de Icono USAM//

     //Inicio de Icono UNIVO//
     L.marker([13.482044, -88.183677], {icon: IconTwo}).addTo(map).bindPopup("<b>Centro de formacion Profesional</b><br> Universidad de  Oriente <br/><b>USAID-UNIVO</b>");
     //Fin de Icono UNIVO//

     //Inicio de Icono Gloria de Kriette//
     L.marker([13.694528, -89.216815], {icon: IconThree}).addTo(map).bindPopup("<b>Centro de formacion Profesional</b><br> Fundación <br> Gloria de Kriette <br/><b>USAID-FGK</b> <br/> Dirección de Centro:<br/> 49 Avenida Sur, San Salvador.");
     //Fin de Icono Gloria Kriette//
     
</script>
</body>
</html>

