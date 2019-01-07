<!DOCTYPE html>
<html>
<head>
     <link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css"
   integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
   crossorigin=""/> 
	<script src="https://unpkg.com/leaflet@1.0.2/dist/leaflet.js"></script>
	<link rel="stylesheet" href="https://unpkg.com/leaflet@1.0.2/dist/leaflet.css" />
	<style>
  #map { 
    width: 100%;
    height: 580px;
    box-shadow: 5px 5px 5px #888;
 }
</style>
</head>
	<body>
		<div id = 'map'>
		</div>
	</body>
	<script>
  var map = L.map('map').
     setView([13.702304199999999, -89.20085569999999],
     15);

     L.tileLayer('http://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
attribution: 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, <a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="http://cloudmade.com">CloudMade</a>',
maxZoom: 18
}).addTo(map);

     L.control.scale().addTo(map);

     L.marker([13.702304199999999, -89.20085569999999],{draggable: true}).addTo(map);
</script>
</html>


