<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>prueba</title>
</head>
<body>
	<div  style="height: 150px; margin-bottom: 25px; width: 693px; margin: 0px 250px;">
  	<img  src="cid:'. <?php echo $cid; ?> .'"/>
	</div>
	<div  style='background: #fff; height: 300px; margin-bottom: 25px; width: 693px; margin: 0px 250px;'>
		<div style='text-align: center;'> <h1>RECUPERACION DE CONTRASEÑA</h1></div>
		<div style="margin-left: 40px;">
		 Hola '.<?php echo $datos->nombre_usuario?>.' '.<?php echo $datos->apellido_usuario?>.' 
		</div>
		<br>
		<div style='margin-left: 45px;'>
			<li>Queriamos hacerle saber que su contraseña de la RED PROFESIONAL fue restablecida.</li>
			<li> Su nueva contraseña es:  </li>
			<br>
				<h1><?php echo $contra?></h1>
			<h2 style='color: red;'>**Por favor, no responda a este correo electrónico con su contraseña. Nunca le pediremos su contraseña y le recomendamos que no la comparta con nadie.**</h2>
			<h4>Este correo ha sido generado automáticamente por el sistema</h4>
		</div>
	</div>

	<div>
		
	</div>
</body>
</html>