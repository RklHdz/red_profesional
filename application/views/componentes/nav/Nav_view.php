<body>
	<section id="container">
		<!-- **********************************************************************************************************************************************************
				TOP BAR CONTENT & NOTIFICATIONS
				*********************************************************************************************************************************************************** -->
		<!--header start-->
		<header class="header black-bg">
			<div class="sidebar-toggle-box">
				<div class="fa fa-bars tooltips" data-placement="right" data-original-title="Toggle Navigation"></div>
			</div>
			<!--logo start-->
			<a href="index.html" class="logo"><b>RED<span>PRO</span></b></a>
			<!--logo end-->
			<div class="nav notify-row" id="top_menu">
				<!--  notification start -->
				<ul class="nav top-menu">
					<!-- settings start -->
					<li class="dropdown">
						<a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
							<i class="fa fa-tasks"></i>
							<span class="badge bg-theme">#</span>
							</a>
						<ul class="dropdown-menu extended tasks-bar">
							<div class="notify-arrow notify-arrow-green"></div>
							<li>
								<p class="green">Tienes # tareas pendientes</p>
							</li>
							<li>
								<a href="index.html#">
									<div class="task-info">
										<div class="desc">Titulo de la tarea</div>
										<div class="percent">80%</div>
									</div>
									<div class="progress progress-striped">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
											<span class="sr-only">80% Complete (success)</span>
										</div>
									</div>
								</a>
							</li>

							<!--
							<li>
								<a href="index.html#">
									<div class="task-info">
										<div class="desc">Database Update</div>
										<div class="percent">60%</div>
									</div>
									<div class="progress progress-striped">
										<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
											<span class="sr-only">60% Complete (warning)</span>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="index.html#">
									<div class="task-info">
										<div class="desc">Product Development</div>
										<div class="percent">80%</div>
									</div>
									<div class="progress progress-striped">
										<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
											<span class="sr-only">80% Complete</span>
										</div>
									</div>
								</a>
							</li>
							<li>
								<a href="index.html#">
									<div class="task-info">
										<div class="desc">Payments Sent</div>
										<div class="percent">70%</div>
									</div>
									<div class="progress progress-striped">
										<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
											<span class="sr-only">70% Complete (Important)</span>
										</div>
									</div>
								</a>
							</li>
						-->
							<li class="external">
								<a href="#">Ver todas las tareas</a>
							</li>
						</ul>
					</li>
					<!-- settings end -->
					<!-- inbox dropdown start-->
					<li id="header_inbox_bar" class="dropdown">
						<a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
							<i class="fa fa-envelope-o"></i>
							<span class="badge bg-theme">#</span>
							</a>
						<ul class="dropdown-menu extended inbox">
							<div class="notify-arrow notify-arrow-green"></div>
							<li>
								<p class="green">Tu tienes # mensajes</p>
							</li>
							<li>
								<a href="index.html#">
									<span class="photo"><img alt="avatar" src="<?php echo base_url('assets/img/defecto/3.png') ?>"></span>
									<span class="subject">
									<span class="from">Nombre usuario</span>
									<span class="time">tiempo</span>
									</span>
									<span class="message">
									Mensaje
									</span>
									</a>
							</li>
							
							<li>
								<a href="index.html#">Ver todos los mensajes</a>
							</li>
						</ul>
					</li>
					<!-- inbox dropdown end -->

					<!-- notificaciones dropdown start-->
					<li id="header_notification_bar" class="dropdown">
						<a data-toggle="dropdown" class="dropdown-toggle" href="index.html#">
							<i class="fa fa-bell-o"></i>
							<span class="badge bg-warning">#</span>
							</a>
						<ul class="dropdown-menu extended notification">
							<div class="notify-arrow notify-arrow-yellow"></div>
							<li>
								<p class="yellow">Tu tienes # notificaciones</p>
							</li>
							<li>
								<a href="#">
									<span class="label label-danger"><i class="fa fa-bolt"></i></span>
									<span>mensaje</span>
									</a>
							</li>
							
							<li>
								<a href="index.html#">Ver todas las notificaciones</a>
							</li>
						</ul>
					</li>
					<!-- notification dropdown end -->
				</ul>
				<!--  notification end -->
			</div>
			<div class="top-menu">
				<ul class="nav pull-right top-menu">
					<li><a class="logout" href="#">Cerrar sesión</a></li>
				</ul>
			</div>
		</header>
		<!--header end-->
