<center>
	<h1>Listado de <?php echo $msj ?></h1>
</center>

<?php if($detalle != false) { $i=1; ?>

<table id="tabla" class="table">
	<thead style="background-color: #337ab7; color: #fff">
		<tr>
			<th>#</th>
			<th>Nombre de usuario</th>
			<th>usuario</th>
			<th>ver</th>
			<th>eliminar</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($detalle as $key) {?>
		<tr>
			<td><?php echo $i++; ?></td>
			<td> <?php echo $key->nombre_usuario .' '.$key->apellido_usuario ?> </td>
			<td> <?php echo $key->usuario_login ?> </td>
			<td> <a class="btn btn-info" href="javascript:;" onclick="ver_ex(<?php echo $key->id_usuario; ?>);"><i class="fa fa-eye"></i></a> </td>
			<td> <a class="btn btn-danger" href="javascript:;" onclick="eliminar(<?php echo $key->id_usuario; ?>)"><i class="fa fa-trash"></i></a> </td>
		</tr>
		<?php } ?>
	</tbody>
</table>

<?php }else{ ?>
<center>
	<h1>La base de datos esta vacia</h1>
</center>
<?php } ?>
