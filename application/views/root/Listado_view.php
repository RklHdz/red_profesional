<!-- si no se cumple las reglas del form_validation del participante -->
<?php
    if ($this->session->flashdata('error1'))
    {
        echo '<div id="error" class="alert alert-danger">';
        echo $this->session->flashdata('error1');
        echo "</div>";
    }
?>

<!-- si no se cumple las reglas del form_validation del administrativo -->
<?php
    if ($this->session->flashdata('error3'))
    {
        echo '<div id="error" class="alert alert-danger">';
        echo $this->session->flashdata('error3');
        echo "</div>";
    }
?>

<!--Si hubo un error al actualizar el participante-->
<?php 
	if($this->session->flashdata('Error1')){?>
		<script>
			Swal(
			  'Atención!',
			  'El usuario no pudo ser actualizado! <br>ó son los mismos datos',
			  'warning'
			)
		</script>
<?php } ?>

<!--Si hubo un error al actualizar el administrativo-->
<?php 
	if($this->session->flashdata('Error3')){?>
		<script>
			Swal(
			  'Atención!',
			  'El usuario no pudo ser actualizado! <br>ó son los mismos datos',
			  'warning'
			)
		</script>
<?php } ?>

<!--Éxito al actualizar el participante-->
<?php 
	if($this->session->flashdata('Exito1')){?>
		<script>
			Swal(
			  'Éxito!',
			  'El usuario fue actualizado!',
			  'success'
			);		    			
		</script>
<?php } ?>

<!--Éxito al actualizar el padministrativo-->
<?php 
	if($this->session->flashdata('Exito3')){?>
		<script>
			Swal(
			  'Éxito!',
			  'El usuario fue actualizado!',
			  'success'
			);		    			
		</script>
<?php } ?>

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
			<td> <a class="btn btn-info" href="javascript:;" onclick="editar(<?php echo $key->id_usuario; ?>,'<?php echo $key->rol_login; ?>')"><i class="fa fa-pencil"></i></a> </td>
			<td> <a class="btn btn-danger" href="javascript:;" onclick="eliminar(<?php echo $key->id_usuario; ?>)"><i class="fa fa-trash"></i></a> </td>
		</tr>
		<?php } ?>
	</tbody>
</table>

<?php }else{ ?>
<center>
	<h1>Sin registros en la base de datos</h1>
</center>
<?php } ?>


<!-----------------  modal para editar participante ------------------->
<div id="editar_participante" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div id="contenido" class="modal-content">

    	<form id="edit_form_p" action="<?php echo base_url()?>actualizar-participante" method="post">
    	<div class="modal-header">
	        <h3 class="modal-title" id="exampleModalCenterTitle">Editar participante</h3>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	     </div>
		<div class="modal-body">
      
	
			<div class="row mt">
				<div class="col-md-12">	
					<div class="panel panel-primary">
						<div class="panel-heading">Datos generales</div>
						<div class="panel-body">
							<div class="row">
								<input type="hidden" name="id" id="id">
								<div class="form-group col-md-6">
									<label for="edit_nombre_usuario"><strong>Nombres</strong></label>
									<input type="text" class="form-control" id="edit_nombre_usuario"  name="edit_nombre_usuario" placeholder="Digite sus nombres" value="<?php echo set_value('edit_nombre_usuario'); ?>"  >
									
								</div>
								<div class="form-group col-md-6">
									<label for="edit_apellido_usuario"><strong>Apellidos</strong></label>
									<input type="text" class="form-control" id="edit_apellido_usuario" name="edit_apellido_usuario"  placeholder="Digite sus apellidos" value="<?php echo set_value('edit_apellido_usuario'); ?>">
								</div>
							</div>

							<div class="row">
								<div class="form-group col-md-3">
									<label for=""><strong>Estado</strong></label>
									<select class="form-control" name="estado" id="estado">
										<option value="activo">Participante</option>
										<option value="inactivo">Ex-participante</option>
									</select>
								</div>
								<div id="p_especialidad" class="form-group col-md-3">
									<label for="edit_especialidad_usuario"><strong>Especialidad</strong></label>
									<select class="form-control" name="edit_especialidad_usuario" id="edit_especialidad_usuario"><option value="JAVA">JAVA</option><option value="PHP">PHP</option></select>
								</div>
								<div id="p_grupo" class="form-group col-md-2">
									<label for="edit_grupo_usuario"><strong>Grupo</strong></label>
									<input type="text" class="form-control" placeholder="Digite su Grupo" id="edit_grupo_usuario" name="edit_grupo_usuario" value="<?php echo set_value('edit_grupo_usuario'); ?>">
								</div>
								<div id="p_nivel" class="form-group col-md-2">
									<label for="edit_nivel_usuario"><strong>Nivel</strong></label>
									<input type="text" class="form-control" placeholder="Digite su Nivel" id="edit_nivel_usuario" name="edit_nivel_usuario" value="<?php echo set_value('edit_nivel_usuario'); ?>">
								</div>
							</div>
							<div class="row">
								<div class="form-group col-md-7">
									<label for="edit_correo_usuario"><strong>Correo Electronico</strong></label>
									<input type="text" class="form-control" id="edit_correo_usuario" name="edit_correo_usuario"  placeholder="Digite su correo" value="<?php echo set_value('edit_correo_usuario'); ?>">
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	        <button type="submit" class="btn btn-primary">Actualizar</button>
	    </div>
	    </form>
    </div>
  </div>
</div>


<!-----------------  modal para editar administrativo ------------------->
<div id="editar_administrativo" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div id="contenido" class="modal-content">

    	<form id="edit_form_a" action="<?php echo base_url()?>actualizar-administrativo" method="post">
    	<div class="modal-header">
	        <h3 class="modal-title" id="exampleModalCenterTitle">Editar Administrativo</h3>
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	          <span aria-hidden="true">&times;</span>
	        </button>
	     </div>
		<div class="modal-body">
      
	
			<div class="row mt">
				<div class="col-md-12">	
					<div class="panel panel-primary">
						<div class="panel-heading">Datos generales</div>
						<div class="panel-body">
							<div class="form-row">
								<input type="hidden" name="id_adm" id="id_adm">
								<div class="form-group col-md-6">
									<label for="edit_nombre_administrativo"><strong>Nombres</strong></label>
									<input type="text" class="form-control" id="edit_nombre_administrativo"  name="edit_nombre_administrativo" placeholder="Digite sus nombres" value="<?php echo set_value('edit_nombre_administrativo'); ?>" required >
									
								</div>
								<div class="form-group col-md-6">
									<label for="edit_apellido_administrativo"><strong>Apellidos</strong></label>
									<input type="text" class="form-control" id="edit_apellido_administrativo" name="edit_apellido_administrativo"  placeholder="Digite sus apellidos" value="<?php echo set_value('edit_apellido_administrativo'); ?>" required>
								</div>
							</div>

							<div class="form-row">
								<div class="form-group col-md-4">
									<label for="edit_correo_administrativo"><strong>Correo Electronico</strong></label>
									<input type="text" class="form-control" id="edit_correo_administrativo" name="edit_correo_administrativo"  placeholder="Digite su correo" value="<?php echo set_value('edit_correo_administrativo'); ?>" required>
									
								</div>
								<div class="form-group col-md-4">
									<label for="edit_cargo_administrativo"><strong>Cargo administrativo</strong></label>
									<input type="text" class="form-control" id="edit_cargo_administrativo" name="edit_cargo_administrativo"  placeholder="Digite el cargo del administrativo" value="<?php echo set_value('edit_cargo_administrativo'); ?>" required>
								</div>
								
							</div>
							
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
	        <button type="submit" class="btn btn-primary">Actualizar</button>
	    </div>
	    </form>
    </div>
  </div>
</div>

<!----------------Modal para eliminar------------------------------>
<div id="eliminar_participante" class="modal" tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
    	<form action="eliminar-participante" method="post">
      <div class="modal-header">
        <h5 class="modal-title">Eliminar Participante</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      	<input type="hidden" name="id_eliminar" id="id_eliminar">
        <h1><p>¿Realmente desea Eliminar este Registro?</p></h1>
        <h4><p>Esta acción no podra revertirse</p></h4>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        <button type="button" class="btn btn-danger">Eliminar</button>
      </div>
      </form>
    </div>
  </div>
</div>
