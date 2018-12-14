<!-- **********************************************************************************************************************************************************
				MAIN SIDEBAR MENU
				*********************************************************************************************************************************************************** -->
		<!--sidebar start-->
		<aside>
			<div id="sidebar" class="nav-collapse ">
				<!-- sidebar menu start-->
				<ul class="sidebar-menu" id="nav-accordion">
					<p class="centered"><a href="#"><img src="<?php echo base_url('assets/img/defecto/1.png') ?>" class="img-circle" width="80"></a></p>
					<!--Cambiar por el nombre de usuario en la sesión-->
					<h5 class="centered">USUARIO</h5>
					
					<li class="mt">
						<a href="javascript:;">
							<i class="fa fa-dashboard"></i>
							<span>Inicio</span>
						</a>
					</li>

					<li class="sub-menu">
						<a href="javascript:;">
							<i class="fa fa-users"></i>
							<span>Gestionar usuarios</span>
						</a>
						<ul class="sub">
							<li class="active"><a href="<?php echo base_url('agregar-usuario') ?>">Agregar usuarios</a></li>
							<li><a href="<?php echo base_url('ver-participantes') ?>">Ver participantes</a></li>
							<li><a href="<?php echo base_url('ver-exparticipantes') ?>">Ver ex participantes</a></li>
							<li><a href="<?php echo base_url('ver-administrativos') ?>">Ver administrativos</a></li>
						</ul>
					</li>

					<li class="sub-menu">
						<a href="javascript:;">
							<i class="fa fa-graduation-cap"></i>
							<span>Especialidades</span>
						</a>
						<ul class="sub">
							<li><a href="<?php echo base_url('agregar-usuario') ?>">Java</a></li>
							<li><a href="<?php echo base_url('ver-participantes') ?>">PHP</a></li>
						</ul>
					</li>

					
				</ul>
				<!-- sidebar menu end-->
			</div>
		</aside>
		<!--sidebar end-->
		<!-- **********************************************************************************************************************************************************
				MAIN CONTENT
				*********************************************************************************************************************************************************** -->
		<!--main content start-->
		<section id="main-content">
			<section class="wrapper site-min-height">
				<!-- comienza el contenido de la pagina-->
