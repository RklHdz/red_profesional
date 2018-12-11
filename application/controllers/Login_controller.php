<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	 * esta clase se encargara de llevar la logica sobre el login
	 validar los usuarios, cambiar y actualizar contraseñas
	 */
	class Login_controller extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Login_model');
			$this->load->model('Usuario_model');
			$this->load->library("email");

		}

		
		// esta función nos muestra la vista para poder logearnos y acceder al sistema.
		public function mostrar_login()
		{
			$this->load->view('login/header/Header_login_view');
			$this->load->view('login/Login_view');
			$this->load->view('login/footer/Footer_login_view');
		}

		// función que muestar la vista para poder recuperar la contraseña
		public function recuperar_password()
		{
			$this->load->view('login/header/Header_login_view');
			$this->load->view('login/Recuperar_pass_view');
			$this->load->view('login/footer/Footer_login_view');
		}

		//funcion para generar una nueva contraseña
		//al mismo tiempo envia la contraseña al correo valido ó correo que esta dentro de la base 
		public function generar_password()
		{	//validacion de correo
			$this->form_validation->set_rules('mail', 'usuario', 'required');
			$this->form_validation->set_message('required','El campo %s es obligatorio'); 
			if ($this->form_validation->run()) {
				
				$usuario = $_POST['mail'];
				//genera un rando de con la palabara 'nuev' + un numero, con el cual hacen 8 digitos minimo
				$contra = 'nuEV'.rand(1000,9999);
				//verificamos si los datos existen dentro de la base

				if ($this->Login_model->validar($usuario)) {
					$solicitud=$this->Login_model->solicitud($usuario);
					$datos = $this->Usuario_model->correo_usuario($solicitud);
					$data['id']=$solicitud;
					$data['contra']=md5($contra);
					$this->Login_model->act_contra($data);
					//$filename= 'C:/xampp/htdocs/red_profesional/assets/img/red.jpg';
					$filename= base_url().'assets/img/red.jpg';
					$mail = $datos->correo_usuario;
					//$this->email->attach($filename);

					//configuracion para el envio del correo
					 $configGmail = array(
										 'protocol' => 'smtp',
										 'smtp_host' => 'ssl://smtp.gmail.com',
										 'smtp_port' => 465,
										 'smtp_user' => 'red.profesional08@gmail.com',//aqui ponemos el correo creado
										 'smtp_pass' => '12345678Red',//contraseña del correo
										 'mailtype' => 'html',
										 'charset' => 'utf-8',
										 'newline' => "\r\n"
										 ); 
					//envio del correo 
					 $this->email->initialize($configGmail);
					$this->email->from('red.profesional08@gmail.com'); //el correo de donde lo envian
					$this->email->to($datos->correo_usuario);// el correo de destino
					$cid = $this->email->attachment_cid($filename);
					$this->email->set_mailtype('html');
					$this->email->subject('Recuperacion');//asunto del correo
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
					
					redirect(base_url().'Login_controller/recuperar_password');


				} else {
					$this->session->set_flashdata('correcto',' ¡El usuario no existe!<br> Ingrese un usuario correcto. ');
					$this->load->view('login/header/Header_login_view');
					$this->load->view('login/Recuperar_pass_view');
					$this->load->view('login/footer/Footer_login_view');				
				}
				
				
			} else {
				$this->session->set_flashdata('correcto', ' Datos Requeridos. ');
				$this->load->view('login/header/Header_login_view');
				$this->load->view('login/Recuperar_pass_view');
				$this->load->view('login/footer/Footer_login_view');	 
			}
			
		}
	}


