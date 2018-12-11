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
			<th>editar</th>
			<th>eliminar</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($detalle as $key) {?>
		<tr>
			<td><?php echo $i++; ?></td>
			<td> <?php echo $key->nombre_usuario .' '.$key->apellido_usuario ?> </td>
			<td> <?php echo $key->usuario_login ?> </td>
			<td> <a class="btn btn-info" href="#" onclick="editar(<?php echo $key->id_usuario; ?>,'<?php echo $key->rol_login; ?>')"><i class="fa fa-pencil"></i></a> </td>
			<td> <a class="btn btn-danger" href=""><i class="fa fa-trash"></i></a> </td>
		</tr>
		<?php } ?>
	</tbody>
</table>

<?php }else{ ?>
<center>
	<h1>La base de datos esta vacia</h1>
</center>
<?php } ?>


<!-----------------  modal para editar participante ------------------->
<div id="editar_participante" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div id="contenido" class="modal-content">
      
	
		<div class="row mt">
			<div class="col-md-12">	
				<div class="panel panel-primary">
					<div class="panel-heading">Datos generales</div>
					<div class="panel-body">
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="edit_nombre_usuario"><strong>Nombres</strong></label>
								<input type="text" class="form-control" id="edit_nombre_usuario"  name="edit_nombre_usuario" placeholder="Digite sus nombres" value="<?php echo set_value('edit_nombre_usuario'); ?>" >
								
								
							</div>
							<div class="form-group col-md-6">
								<label for="edit_apellido_usuario"><strong>Apellidos</strong></label>
								<input type="text" class="form-control" id="edit_apellido_usuario" name="edit_apellido_usuario"  placeholder="Digite sus apellidos" value="<?php echo set_value('edit_apellido_usuario'); ?>">
							</div>
						</div>

						<div class="form-row">
							<div class="form-group col-md-3">
								<label for="edit_correo_usuario"><strong>Correo Electronico</strong></label>
								<input type="text" class="form-control" id="edit_correo_usuario" name="edit_correo_usuario"  placeholder="Digite su correo" value="<?php echo set_value('edit_correo_usuario'); ?>">
								<span class="help-block">example@gmail.com</span>
							</div>
							<div id="p_especialidad" class="form-group col-md-3">
								<label for="edit_especialidad_usuario">Especialidad</label>
								<input type="text" class="form-control" placeholder="Digite su especialidad" id="edit_especialidad_usuario" name="edit_especialidad_usuario">
							</div>
							<div id="p_grupo" class="form-group col-md-3">
								<label for="edit_grupo_usuario">Grupo</label>
								<input type="text" class="form-control" placeholder="Digite su Grupo" id="edit_grupo_usuario" name="edit_grupo_usuario">
							</div>
							<div id="p_nivel" class="form-group col-md-3">
								<label for="edit_nivel_usuario">Nivel</label>
								<input type="text" class="form-control" placeholder="Digite su Nivel" id="edit_nivel_usuario" name="edit_nivel_usuario">
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


    </div>
  </div>
</div>


<!-----------------  modal para editar administrativo ------------------->
<div id="editar_administrativo" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div id="contenido" class="modal-content">
      administrativo
    </div>
  </div>
</div>
