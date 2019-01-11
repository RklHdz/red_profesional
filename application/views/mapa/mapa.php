<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!--CDN LEFTLET-->
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.2/dist/leaflet.css" />
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css"
   integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
   crossorigin=""/>
   <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
 

</head>
	<body>
        <!--Boton de regresar-->
        <a href="<?php echo base_url() ?>" class="btn btn-danger btn-default active" role="button" style="margin-left: 32px;">Regresar</a>
		<!--DIV DE MAPA-->
		<div id = 'map' style="width: 95%; height: 650px; display: block; margin: auto;"></div>


		<!--JS-->
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.bundle.min.js" integrity="sha384-zDnhMsjVZfS3hiP7oCBRmfjkQC4fzxVxFhBx8Hkz2aZX8gEvA/jsP3eXRCvzTofP" crossorigin="anonymous"></script>
<script src="https://unpkg.com/leaflet@1.0.2/dist/leaflet.js"></script>
<script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"
   integrity="sha512-QVftwZFqvtRNi0ZyCtsznlKSWOStnDORoefr1enyq5mVL4tmKB3S/EnC3rRJcxCPavG10IcrVGSmPh6Qw5lwrg=="
   crossorigin=""></script>

	<script>
  var map = L.map('map').
     setView([13.702304, -89.200855],
     17);

     L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
		attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>',
		maxZoom: 25
		}).addTo(map);

     L.control.scale().addTo(map);

     //Inicio de Icono personalizado//
     var MoreIcon = L.Icon.extend({
    options: {

        iconSize:     [38, 40],
        shadowSize:   [50, 54],
        iconAnchor:   [22, 84],
        shadowAnchor: [4, 62],
        popupAnchor:  [-3, -76]
    }
});
     //Se unen los 3 iconos//
var IconOne = new MoreIcon({iconUrl: 'assets/img/ubicacion1.png'}),
    IconTwo = new MoreIcon({iconUrl: 'assets/img/ubicacion1.png'}),
    IconThree = new MoreIcon({iconUrl: 'assets/img/ubicacion1.png'});
     //Finalizacion de Icono personalizado//
	 //Inicio de Icono USAM//
     L.marker([13.702304, -89.200855], {icon: IconOne}).addTo(map).bindPopup("<b>Centro de formacion Profesional</b><br> Universidad Salvadoreña Alberto Masferrer <br/><b>USAID-USAM</b>");
     //Fin de Icono USAM//

     //Inicio de Icono UNIVO//
     L.marker([13.482044, -88.183677], {icon: IconTwo}).addTo(map).bindPopup("<b>Centro de formacion Profesional</br>Universidad de  Oriente <br/><b>USAID-UNIVO</b>");
     //Fin de Icono UNIVO//

     //Inicio de Icono Gloria de Kriette//
     L.marker([13.694528, -89.216815], {icon: IconThree}).addTo(map).bindPopup("<b>Centro de formacion Profesional</b><br> Fundación Gloria de Kriette <b>USAID-FGK</b> <br/> <b>Dirección de Centro:</b><br/> 49 Avenida Sur, San Salvador.");
     //Fin de Icono Gloria Kriette//
     

</script>

</body>
</html>

