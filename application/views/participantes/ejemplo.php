<div class="root">
	<form action="<?php echo site_url('guardar_cv') ?>" method="post" class="form-cv">
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
				<li class="progressbar__option">Paso 8</li>
				<li class="progressbar__option">Paso 9</li>
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
				<div class="row mt">
					<div class="col-md-12">	
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h4>Formación Técnica y Cursos (paso 3)
									<i data-toggle="tooltip" data-placement="top" title="Agregar la educación desde la mas reciente a la mas antigua">
										<img src="<?php echo base_url('assets/img/ayuda.png') ?>" alt="" width="20px">
									</i>
								</h4>
							</div>
							<div class="panel-body"> 
								<div class="row">
									<div style="margin: 10px">
										<h5>¿Posee Formación ténica o cursos?</h5>
										<div class="form-check" style="margin-left: 10px">
										  <input class="form-check-input" type="radio" name="formacion_pre" id="formacion_si" value="si">
										  <label class="form-check-label" for="formacion_si">
										    SI
										  </label>
										</div>
										<div class="form-check" style="margin-left: 10px">
										  <input class="form-check-input" type="radio" name="formacion_pre" id="formacion_no" value="no">
										  <label class="form-check-label" for="formacion_no">
										    NO
										  </label>
										</div>
										<div id="formacion">
											
										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- paso 4-->
			<div class="step" id="step-4">
				<div class="row mt">
					<div class="col-md-12">	
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h4>Experiencia laboral (paso 4)
									<i data-toggle="tooltip" data-placement="top" title="Agregar la experiencia desde la mas reciente a la mas antigua">
										<img src="<?php echo base_url('assets/img/ayuda.png') ?>" alt="" width="20px">
									</i>
								</h4>
							</div>
							<div class="panel-body"> 
								<div class="row">
									<div style="margin: 10px">
										<h5>¿Posee Experiencia laboral?</h5>
										<div class="form-check" style="margin-left: 10px">
										  <input class="form-check-input" type="radio" name="experiencia_pre" id="experiencia_si" value="si">
										  <label class="form-check-label" for="experiencia_si">
										    SI
										  </label>
										</div>
										<div class="form-check" style="margin-left: 10px">
										  <input class="form-check-input" type="radio" name="experiencia_pre" id="experiencia_no" value="no">
										  <label class="form-check-label" for="experiencia_no">
										    NO
										  </label>
										</div>
										<div id="experiencia">

										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- paso 5-->
			<div class="step" id="step-5">
				<div class="row mt">
					<div class="col-md-12">	
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h4>Práctica laboral (paso 5)
									<i data-toggle="tooltip" data-placement="top" title="Agregar la practica desde la mas reciente a la mas antigua">
										<img src="<?php echo base_url('assets/img/ayuda.png') ?>" alt="" width="20px">
									</i>
								</h4>
							</div>
							<div class="panel-body"> 
								<div class="row">
									<div style="margin: 10px">
										<h5>¿Posee Practica laboral?</h5>
										<div class="form-check" style="margin-left: 10px">
										  <input class="form-check-input" type="radio" name="practica_pre" id="practica_si" value="si">
										  <label class="form-check-label" for="practica_si">
										    SI
										  </label>
										</div>
										<div class="form-check" style="margin-left: 10px">
										  <input class="form-check-input" type="radio" name="practica_pre" id="practica_no" value="no">
										  <label class="form-check-label" for="practica_no">
										    NO
										  </label>
										</div>
										<div id="practica">

										</div>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- paso 6-->
			<div class="step" id="step-6">
				<div class="row mt">
					<div class="col-md-12">	
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h4>Conocimientos (paso 6)
									<i data-toggle="tooltip" data-placement="top" title="Agrega todos los conocimientos">
										<img src="<?php echo base_url('assets/img/ayuda.png') ?>" alt="" width="20px">
									</i>
								</h4>
							</div>
							<div class="panel-body"> 
								<div class="row">
									<div class="form-group">
										<div class="col-md-4">
											<button type="button" onclick=agregar_conocimiento() class="btn btn-info" id="btn-add-pra">Agregar Conocimiento</button>
											<button type="button" style="margin-left: 20px" onclick=eliminar_conocimiento() class="btn btn-danger" id="btn-delete-pra">Eliminar</button>
										</div>
									</div>
								</div>
								<div id="conocimientos" class="row" style="margin: 10px">

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- paso 7-->
			<div class="step" id="step-7">
				<div class="row mt">
					<div class="col-md-12">	
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h4>Habilidades (paso 7)
									<i data-toggle="tooltip" data-placement="top" title="Agrega todos las habilidades">
										<img src="<?php echo base_url('assets/img/ayuda.png') ?>" alt="" width="20px">
									</i>
								</h4>
							</div>
							<div class="panel-body"> 
								<div class="row">
									<div class="form-group">
										<div class="col-md-4">
											<button type="button" onclick=agregar_habilidades() class="btn btn-info" id="btn-add-pra">Agregar Habilidades</button>
											<button type="button" style="margin-left: 20px" onclick=eliminar_habilidades() class="btn btn-danger" id="btn-delete-pra">Eliminar</button>
										</div>
									</div>
								</div>
								<div id="habilidades" class="row" style="margin: 10px">

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- paso 8-->
			<div class="step" id="step-7">
				<div class="row mt">
					<div class="col-md-12">	
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h4>Referencias laborales (paso 8)
									<i data-toggle="tooltip" data-placement="top" title="Agrega todos las refrencias laborales que cuenta">
										<img src="<?php echo base_url('assets/img/ayuda.png') ?>" alt="" width="20px">
									</i>
								</h4>
							</div>
							<div class="panel-body"> 
								<div class="row">
									<div class="form-group">
										<div class="col-md-4">
											<button type="button" onclick=agregar_referencialab() class="btn btn-info" id="btn-add-pra">Agregar referencia</button>
											<button type="button" style="margin-left: 20px" onclick=eliminar_referencialab() class="btn btn-danger" id="btn-delete-pra">Eliminar</button>
										</div>
									</div>
								</div>
								<div id="referencialab" class="row" style="margin: 10px">
									
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- paso 9-->
			<div class="step" id="step-7">
				<div class="row mt">
					<div class="col-md-12">	
						<div class="panel panel-primary">
							<div class="panel-heading">
								<h4>Referencias Personales (paso 9)
									<i data-toggle="tooltip" data-placement="top" title="Agrega todos las refrencias personales que cuenta">
										<img src="<?php echo base_url('assets/img/ayuda.png') ?>" alt="" width="20px">
									</i>
								</h4>
							</div>
							<div class="panel-body"> 
								<div class="row">
									<div class="form-group">
										<div class="col-md-4">
											<button type="button" onclick=agregar_referenciaper() class="btn btn-info" id="btn-add-pra">Agregar referencia</button>
											<button type="button" style="margin-left: 20px" onclick=eliminar_referenciaper() class="btn btn-danger" id="btn-delete-pra">Eliminar</button>
										</div>
									</div>
								</div>
								<div id="referenciaper" class="row" style="margin: 10px">
									
								</div>
								<div>
									<button type="submit" class="btn btn-success">Guardar</button>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- inputs escondidos -->
		<input type="hidden" id="num_educacion" name="num_educacion">
		<input type="hidden" id="num_formacion" name="num_formacion">
		<input type="hidden" id="num_experiencia" name="num_experiencia">
		<input type="hidden" id="num_practica" name="num_practica">
		<input type="hidden" id="num_conocimiento" name="num_conocimiento">
		<input type="hidden" id="num_habilidades" name="num_habilidades">
		<input type="hidden" id="num_refe_lab" name="num_refe_lab">
		<input type="hidden" id="num_refe_per" name="num_refe_per">
	</form>
</div>

