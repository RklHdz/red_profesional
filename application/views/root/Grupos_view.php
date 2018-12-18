<center>
	<h1><?php echo $especialidad ?> Nivel <?php echo $nivel ?></h1>
	<h3>Listado de Alumnos del grupo <?php echo $grupo?></h3>
</center>

<?php if($lista == false) {?>
	<h1>Sin registros</h1>
	<?php }else{ ?>
		<table class="table">
			<thead>
				<tr>
					<th>#</th>
					<th>Nombre</th>
					<th>usuario</th>
					<th>Correo</th>
				</tr>
			</thead>
			<tbody>
				
			</tbody>
		</table>
		<?php } ?>