<center>
	<h1><?php echo $especialidad ?> Nivel <?php echo $nivel ?></h1>
	<h3>Listado de Alumnos del grupo <?php echo $grupo?></h3>
</center>

<div style="margin-left: 10px" class="row">
	<a class="btn btn-info" href="<?php echo base_url('nivel/'.$especialidad) ?>">ATRAS</a>
</div>

<?php if($lista != false) { $i=1; ?>

<table style="margin: 5px" id="tabla" class="table">
	<thead style="background-color: #337ab7; color: #fff">
		<tr>
			<th>#</th>
			<th>Nombre de usuario</th>
			<th>usuario</th>
			<th>Correo</th>
			<th>Ver</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($lista as $key) {?>
		<tr>
			<td><?php echo $i++; ?></td>
			<td> <?php echo $key->nombre_usuario .' '.$key->apellido_usuario ?> </td>
			<td> <?php echo $key->usuario_login ?> </td>
			<td> <?php echo $key->correo_usuario ?> </td>
			<td> <a class="btn btn-info" onclick="ver_grupo(<?php echo $key->id_usuario; ?>,'<?php echo $key->rol_login; ?>')" href="javascript:;"><i class="fa fa-eye"></i></a> </td>		
		</tr>
		<?php } ?>
	</tbody>
</table>

<?php }else{ ?>
<center>
	<h1>La base de datos esta vacia</h1>
</center>
<?php } ?>


<!-----------------  modal para ver ex participante ------------------->
<div id="ver_grupo" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div id="contenido" class="modal-content">

    	<form  action="" method="post">
    	<div class="modal-header">
	        <h3 class="modal-title" id="exampleModalCenterTitle">Información Alumno </h3>
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
								<input type="hidden" name="id_adm" id="id_adm">
								<div class="form-group col-md-6">
									<label for="nombre"><strong>Nombres</strong></label>
									<input type="text" class="form-control" id="nombre"  name="nombre" readonly="">
									
								</div>
								<div class="form-group col-md-6">
									<label for="apellido"><strong>Apellidos</strong></label>
									<input type="text" class="form-control" id="apellido" name="apellido" readonly="">
								</div>
							</div>

							<div class="row">
								<div class="form-group col-md-3">
									<label for="fecha_na"><strong>Fecha nacimiento</strong></label>
									<input type="text" class="form-control" id="fecha_na" name="fecha_na" readonly="">	
								</div>	
							</div>

							<div class="row">
								<div class="form-group col-md-4">
									<label for="correo"><strong>Correo Electronico</strong></label>
									<input type="text" class="form-control" id="correo" name="correo" readonly="">	
								</div>
								<div class="form-group col-md-4">
									<label for="DUI"><strong>DUI</strong></label>
									<input type="text" class="form-control" id="DUI" name="DUI" readonly="">	
								</div>
								<div class="form-group col-md-4">
									<label for="NIT"><strong>NIT</strong></label>
									<input type="text" class="form-control" id="NIT" name="NIT" readonly="">	
								</div>									
							</div>
							<div class="row">
								<div class="form-group col-md-3">
									<label for="tel1"><strong>Telefono de contacto</strong></label>
									<input type="text" class="form-control" id="tel1" name="tel1" readonly="">	
								</div>	
							</div>
							<div class="row">
								<div class="form-group col-md-3">
									<label for="direccion"><strong>Dirección</strong></label>
									<textarea name="direccion" id="direccion" cols="120" rows="5" readonly=""></textarea>
								</div>	
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal-footer">
	        <button type="button" class="btn btn-info" data-dismiss="modal"> <strong>Cerrar</strong> </button>
	    </div>
	    </form>
    </div>
  </div>
</div>
