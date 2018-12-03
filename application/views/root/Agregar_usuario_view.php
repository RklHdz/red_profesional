
		<center>
			<h1>Agregar usuario</h1>
		</center>

		<?php echo form_error('nombre_usuario'); ?>
		<?php echo form_error('apellido_usuario'); ?>
		<?php echo form_error('correo_usuario'); ?>
<!---------------------- DATOS GENERALES ------------------------>
<form class="style-form" action="<?php echo base_url('guardar-usuario') ?>" method="post">
		<div class="row mt">
			<div class="col-md-12">	
				<div class="panel panel-primary">
					<div class="panel-heading">Datos generales</div>
					<div class="panel-body">
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="nombre_usuario"><strong>Nombres</strong></label>
								<input type="text" class="form-control" id="nombre_usuario" required="" name="nombre_usuario" placeholder="Digite sus nombres" value="<?php echo set_value('nombre_usuario'); ?>" >
								
								
							</div>
							<div class="form-group col-md-6">
								<label for="apellido_usuario"><strong>Apellidos</strong></label>
								<input type="text" class="form-control" id="apellido_usuario" name="apellido_usuario" required="" placeholder="Digite sus apellidos" value="<?php echo set_value('apellido_usuario'); ?>">
							</div>
						</div>

						<div class="form-row">
							<div class="form-group col-md-4">
								<label for="correo_usuario"><strong>Correo Electronico</strong></label>
								<input type="text" class="form-control" id="correo_usuario" name="correo_usuario" required="" placeholder="Digite su correo" value="<?php echo set_value('correo_usuario'); ?>">
								<span class="help-block">example@gmail.com</span>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<?php echo form_error('usuario_login'); ?>
		<?php echo form_error('contrasenia_login'); ?>



<!----------------------- DATOS DE USUARIO ----------------------------->
		<div class="row mt">
			<div class="col-md-12">	
				<div class="panel panel-primary">
					<div class="panel-heading">Datos de usuario</div>
					<div class="panel-body">
						<div class="form-row">
							<div class="form-group col-md-6">
								<label for="usuario_login"><strong>Nombre de usuario</strong></label>
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user"></i></span>
									<input type="text" class="form-control" id="usuario_login" name="usuario_login" placeholder="Digite un nombre de usuario" required="" value="<?php echo set_value('usuario_login'); ?>">
								</div>
							</div>
							<div class="form-group col-md-6">
								<label for="contrasenia_login"><strong>Contraseña</strong></label>
								
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock" aria-hidden="true"></i></span>
									<input type="password" class="form-control" id="contrasenia_login" name="contrasenia_login" placeholder="Digite su contraseña" required="" value="<?php echo set_value('contrasenia_login'); ?>">	
								</div>
								
								<span class="help-block">*Digite una contraseña de 6 caracteres minimo</span>
							</div>
						</div>

						<div class="form-row">
							<div class="form-group col-md-4">
								<label for="email"><strong>Tipo de usuario</strong></label>
								<select class="form-control" name="rol_login" id="rol_login">
									<option value="administrativo">Administrativo</option>
									<option value="participante">Participante</option>
								</select>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<button class="btn btn-info">Agregar</button>
</form>
