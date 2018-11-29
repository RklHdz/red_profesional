<body>
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	<div class="error-pagewrap">
		<div class="error-page-int">
			<div class="text-center m-b-md custom-login">
				<h3>Iniciar sesión</h3>
				<p>Introduzca su usuario y contraseña!</p>
			</div>
			<div class="content-error">
				<div class="hpanel">
					<div class="panel-body">
						<form action="" id="loginForm" method=POST>
							<div class="form-group">
								<label class="control-label" for="username">Usuario</label>
								<input type="text" placeholder="example@gmail.com" title="Please enter you username" required="" value="" name="username" id="username" class="form-control">
								<!--<span class="help-block small">usuario</span>-->
							</div>
							<div class="form-group">
								<label class="control-label" for="password">Contraseña</label>
								<input type="password" title="Please enter your password" placeholder="******" required="" value="" name="password" id="password" class="form-control">
								<!--<span class="help-block small">Yur strong password</span>-->
							</div>
							<!--<div class="checkbox login-checkbox">
								<label>
								<input type="checkbox" class="i-checks"> Remember me </label>
								<p class="help-block small">(if this is a private computer)</p>
							</div>-->
							<button type="button" onclick="verificar_credenciales()" class="btn btn-success btn-block loginbtn">Iniciar sesión</button>
							<a href="<?php echo base_url() ?>Welcome/index">prueba</a>
							<a class="btn btn-default btn-block" href="<?php echo base_url()?>recuperar-password">Recuperar contraseña</a>
						</form>
					</div>
				</div>
			</div>
			<footer>
				<div class="text-center login-footer">
					<p>©2018 Todos los derechos reservados | HolaMundo Corp.® | Desarrollo Web</p>
				</div>
			</footer>
		</div>   
	</div>
	
	
