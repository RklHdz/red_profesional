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
	<h1>Sin registros en la base de datos</h1>
</center>
<?php } ?>


<!-----------------  modal para ver ex participante ------------------->
<div id="ver" class="modal fade bd-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div id="contenido" class="modal-content">

    	<form id="edit_form_a" action="<?php echo base_url()?>actualizar-administrativo" method="post">
    	<div class="modal-header">
	        <h3 class="modal-title" id="exampleModalCenterTitle">Información ex participante</h3>
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
									<label for="nombre_ex"><strong>Nombres</strong></label>
									<input type="text" class="form-control" id="nombre_ex"  name="nombre_ex" readonly="">
									
								</div>
								<div class="form-group col-md-6">
									<label for="apellido_ex"><strong>Apellidos</strong></label>
									<input type="text" class="form-control" id="apellido_ex" name="apellido_ex" readonly="">
								</div>
							</div>

							<div class="form-row">
								<div class="form-group col-md-3">
									<label for="correo_ex"><strong>Correo Electronico</strong></label>
									<input type="text" class="form-control" id="correo_ex" name="correo_ex" readonly="">
									
								</div>								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="modal-footer">
	        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
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
