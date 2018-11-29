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
					
					$mail = $datos->correo_usuario;

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
					$this->email->subject('Recuperacion');//asunto del correo
					$this->email->message('Hola '.$datos->nombre_usuario.' '.$datos->apellido_usuario.', <br>
					  Queriamos hacerle saber que su contraseña de la RED PROFESIONAL fue restablecida<br>
					  Su nueva contraseña es: <b>'.$contra.'</b><br>
					  Por favor, no responda a este correo electrónico con su contraseña. Nunca le pediremos su contraseña y le recomendamos que no la comparta con nadie.');
					$this->email->send();
					//hay que hacer un mensaje para que revise el correo

					$this->load->view('login/header/Header_login_view');
					$this->load->view('login/Login_view');
					$this->load->view('login/footer/Footer_login_view');


				} else {
					$this->session->set_flashdata('correcto', '¡El usuario no existe! Ingrese un usuario correcto.');
					$this->load->view('login/header/Header_login_view');
					$this->load->view('login/Recuperar_pass_view');
					$this->load->view('login/footer/Footer_login_view');				
				}
				
				
			} else {
				$this->session->set_flashdata('correcto', 'Datos Requeridos.');
				$this->load->view('login/header/Header_login_view');
				$this->load->view('login/Recuperar_pass_view');
				$this->load->view('login/footer/Footer_login_view');	 
			}
			
		}
	}


