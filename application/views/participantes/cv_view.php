<div id="informacion_general">
	<div id="opciones_cv">
		<center><h1><strong>Hoja de vida</strong></h1></center>
	</div>
</div>
<div class="container" ">
	<!-- sección que tendra las diversas partes del cv para guardar -->
	<section>
		<div class="row mt">
			<div class="col-md-12">	
				<div class="panel panel-primary">
					<div class="panel-heading"><h4>Información Personal</h4></div>
					<div class="panel-body">
						<div class="row">
							<div class="form-group col-md-6">
								<label for="nombre_usuario"><strong>Nombres</strong></label>
								<input type="text" class="form-control" id="nombre_usuario"  name="nombre_usuario" placeholder="Digite sus nombres" value="<?php echo set_value('nombre_usuario'); ?>" >
								
								
							</div>
							<div class="form-group col-md-6">
								<label for="apellido_usuario"><strong>Apellidos</strong></label>
								<input type="text" class="form-control" id="apellido_usuario" name="apellido_usuario"  placeholder="Digite sus apellidos" value="<?php echo set_value('apellido_usuario'); ?>">
							</div>
						</div>
					<!-- información de contacto -->	
						<div class="row">
							<h5 style="margin-left: 10px"><strong>Telefonos</strong></h5>
							<div class="form-group col-md-3">
								<label for="">Casa</label>
								<input class="form-control" type="text" name="tel_casa" id="tel_casa">
							</div>
							<div class="form-group col-md-3">
								<label for="">Celular</label>
								<input class="form-control" type="text" name="tel_celular" id="tel_celular">
							</div>
						</div>
						
						<div class="row">
							<div class="form-group col-md-3">
								<label for="correo_usuario"><strong>Correo Electronico</strong></label>
								<input type="text" class="form-control" id="correo_usuario" name="correo_usuario"  placeholder="ejemplo@ejemplo.com" value="<?php echo set_value('correo_usuario'); ?>">
							</div>
						</div>
					<!-- Documentos de identificación -->
						<div class="row" id="opciones_documento">
							<div style="margin-left: 10px">
								<h5><strong>tipo de documento de identificación</strong></h5>
								<div class="form-check" style="margin-left: 10px">
								  <input class="form-check-input" type="radio" name="documento_id" id="radioDUI" value="DUI">
								  <label class="form-check-label" for="radioDUI">
								    DUI
								  </label>
								</div>
								<div class="form-check" style="margin-left: 10px">
								  <input class="form-check-input" type="radio" name="documento_id" id="radioMinoridad" value="minoridad">
								  <label class="form-check-label" for="radioMinoridad">
								    Carnet Minoridad
								  </label>
								</div>
							</div>
							
							<div class="form-group col-md-3">
								<label for="">NIT</label>
								<input type="text" class="form-control" id="nit" name="nit">
							</div>
						
						<!--aqui va el DUI o el carnet de minoridad-->
							<div id="docu_identi" class="form-group col-md-3">
								
							</div>
							
						</div>

						<!-- licencia de conducir -->
						<div class="row">
							<div style="margin-left: 10px">
								<h5>Licencia de Conducir</h5>
								<div class="form-check" style="margin-left: 10px">
								  <input class="form-check-input" type="radio" name="licencia" id="licencia_si" value="si">
								  <label class="form-check-label" for="licencia_si">
								    SI
								  </label>
								</div>
								<div class="form-check" style="margin-left: 10px">
								  <input class="form-check-input" type="radio" name="licencia" id="licencia_no" value="no">
								  <label class="form-check-label" for="licencia_no">
								    NO
								  </label>
								</div>
							</div>
							<!--Licencia-->
							<div id="licencia" class="form-group col-md-3">
								
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
			
	</section>
</div>
