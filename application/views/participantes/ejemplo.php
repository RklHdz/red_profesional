<div class="root">
	<form action="" class="form-cv">
		<!-- aqui ira la barra de progreso -->
		<div class="form-cv__header">
			<ul class="progressbar">
				<li class="progressbar__option">Paso 1</li>
				<li class="progressbar__option">Paso 2</li>
				<li class="progressbar__option">Paso 3</li>
				<li class="progressbar__option">Paso 4</li>
				<li class="progressbar__option">Paso 5</li>
				<li class="progressbar__option">Paso 6</li>
				<li class="progressbar__option">Paso 7</li>
			</ul>
			<h2 class="form-cv__titulo">HOJA DE VIDA</h2>
		</div>

		<!--aqui ira el formulario-->
		<div class="form-cv__body">
			<!-- paso 1 información general-->
			<div class="step active" id="step-1">	
				<div class="row mt">
					<div class="col-md-12">	
						<div class="panel panel-primary">
							<div class="panel-heading"><h4>Información Personal (paso 1)</h4></div>
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
			</div>
			<!-- paso 2 educación-->
			<div class="step" id="step-2">
				<div class="row mt">
					<div class="col-md-12">	
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h4>Educación (paso 2)
									<i data-toggle="tooltip" data-placement="top" title="Agregar la educación desde la mas reciente a la mas antigua">
										<img src="<?php echo base_url('assets/img/ayuda.png') ?>" alt="" width="20px">
									</i>
								</h4>
							</div>
							<div class="panel-body"> 
								<div class="row">
									<div style="margin-left: 10px">
										<h5>¿Posee estudios?</h5>
										<div class="form-check" style="margin-left: 10px">
										  <input class="form-check-input" type="radio" name="estudio_pre" id="estudio_si" value="si">
										  <label class="form-check-label" for="estudio_si">
										    SI
										  </label>
										</div>
										<div class="form-check" style="margin-left: 10px">
										  <input class="form-check-input" type="radio" name="estudio_pre" id="estudio_no" value="no">
										  <label class="form-check-label" for="estudio_no">
										    NO
										  </label>
										</div>
										<div id="educacion">
											<div class="row">
												<label class="col-md-5">Ordenar educación en orden cronológico: Iniciar con el más reciente y terminar lista con el más antiguo. Incluir bachillerato, carrera técnica o universitaria que tengas.</label>
											</div>
											<div class="row">
												<div class="form-group">
													<div class="col-md-3">
														<!--<button type="button" class="btn btn-primary" data-toggle="modal" data-target=".modal-registro-edu">Agregar educación</button>-->
														<button type="button" class="btn btn-info" id="btn-add-educ">Agregar educación</button>
														<button type="button" class="btn btn-danger" id="btn-delete-educ">Eliminar</button>
													</div>
												</div>	
											</div>
											<!-- aqui iran apareciendo las diversas registro de educación-->
											<div id="registro_educ">
												<br>
											</div>
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- paso 3 formacion tecnica-->
			<div class="step" id="step-3">
				
			</div>
			<!-- paso 4-->
			<div class="step" id="step-4">
				
			</div>
			<!-- paso 5-->
			<div class="step" id="step-5">
				
			</div>
			<!-- paso 6-->
			<div class="step" id="step-6">
				
			</div>
			<!-- paso 7-->
			<div class="step" id="step-7">
				
			</div>
		</div>
		<!-- inputs escondidos -->
		<input type="text" id="num_educacion" name="num_educacion">
	</form>
</div>

