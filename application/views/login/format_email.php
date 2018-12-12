<?php 

					$this->email->initialize($configGmail);
					$this->email->from('red.profesional08@gmail.com'); //el correo de donde lo envian
					$this->email->to($datos->correo_usuario);// el correo de destino
					$cid = $this->email->attachment_cid($filename);
					$this->email->set_mailtype('html');
					$this->email->subject('Recuperacion');//asunto del correo
					/*$this->email->message('Hola '.$datos->nombre_usuario.' '.$datos->apellido_usuario.', <br>
					  Queriamos hacerle saber que su contraseña de la RED PROFESIONAL fue restablecida<br>
					  Su nueva contraseña es: <b>'.$contra.'</b><br>
					  Por favor, no responda a este correo electrónico con su contraseña. Nunca le pediremos su contraseña y le recomendamos que no la comparta con nadie.');*/
					$cid = $this->email->attachment_cid($filename);
					/*$this->email->message($this->load->view('login/format_email', compact('cid','datos','data')));*/
					
					$this->email->message('<div  style=" background-color: rgb(47,50,59) ;height: 40px; margin-bottom: 25px; width: 693px; margin: 0px 150px; text-align: center;  ">
  	<strong style=" font-size: 2em; color: #fff; font-family: sans-serif; ">RED</strong>
  	<strong style=" font-size: 2em; color: rgb(89,200,193); font-family: sans-serif; ">PRO</strong>
	</div>
	<div  style=" height: 600px; margin-bottom: 25px; width: 693px; margin: 0px 150px;">
		<div style="text-align: center;"> <h1>RECUPERACION DE CONTRASEÑA</h1></div>
		<div style="margin-left: 40px;">Hola '. $datos->nombre_usuario .' '. $datos->apellido_usuario.' </div>
		<br>
		<div style="margin-left: 45px;">
			<li>Queriamos hacerle saber que su contraseña de la RED PROFESIONAL fue restablecida.</li>
			<li> Su nueva contraseña es:  </li>
			<b>
				<h1 style="text-align: center;">'. $contra.'</h1>
			<h2 style="color: red; text-align: justify;">**Por favor, no responda a este correo electrónico con su contraseña. Nunca le pediremos su contraseña y le recomendamos que no la comparta con nadie.**</h2>
			<h4>Este correo ha sido generado automáticamente por el sistema</h4>
		</div>
	</div>');
					$this->email->send();
					
					$this->session->set_flashdata('val',' ');
					//hay que hacer un mensaje para que revise el correo

					$this->load->view('login/header/Header_login_view');
					$this->load->view('login/Login_view');
					$this->load->view('login/footer/Footer_login_view');
					
					redirect(base_url().'Login_controller/recuperar_password');


				} else {
					$this->session->set_flashdata('correcto', '¡El usuario no existe! Ingrese un usuario correcto.');
					$this->session->set_flashdata('correcto',' ¡El usuario no existe!<br> Ingrese un usuario correcto. ');
					$this->load->view('login/header/Header_login_view');
					$this->load->view('login/Recuperar_pass_view');
					$this->load->view('login/footer/Footer_login_view');					
				
			} else {
				$this->session->set_flashdata('correcto', 'Datos Requeridos.');
				$this->session->set_flashdata('correcto', ' Datos Requeridos. ');
				$this->load->view('login/header/Header_login_view');
				$this->load->view('login/Recuperar_pass_view');
				$this->load->view('login/footer/Footer_login_view');
 ?>