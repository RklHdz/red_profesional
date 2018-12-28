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
			$this->load->model('Login_model', 'Login', TRUE); // carga el modelo para poder acceder a sus metodos, en el primer paramentro ponemos el nombre del modelo, en el segundo se reasigna nombre al modelo y en el tercero se le pondra TRUE para que se conecte automaticamente a la base de datos 
			$this->load->model('Login_model');
			$this->load->model('Usuario_model');
			$this->load->library("email");
		}

		public function index()
		{
			$this->load->view('componentes/header/Header_view');//header <br>
			$this->load->view('componentes/nav/Nav_view');//navegación <br>
			$this->load->view('componentes/panel/Participante_view');//panel para el participante <br>
			$this->load->view('ejemplo'); //vista que se quiere mostrar <br>
			$this->load->view('componentes/footer/Footer_view');//pie de pagina

		} 

		// esta función nos muestra la vista para poder logearnos y acceder al sistema.
		public function mostrar_login()
		{
			$this->load->view('login/header/Header_login_view');
			$this->load->view('login/Login_view');
			$this->load->view('login/footer/Footer_login_view');
		}

		public function iniciar_sesion()
		{	//recuperamos datos del formulario
			#$usuario = strtolower($this->input->post('username'));
			#$password = $this->input->post('password');
			$usuario = 'rkl';
			$password = '123456789';
			if($usuario === 'root'){
				$resultado=$this->Login_model->validar_credenciales($usuario,$password);
			}else{
				#vamos a obtener la contraseña para decodificarla y compararla
				$pass = $this->Login_model->get_contrasenia($usuario); echo "pass <br>"; print_r($pass[0]->contrasenia_login);
				#comparamos
				$pass1 = $this->encryption->decrypt($pass[0]->contrasenia_login); echo "<br>pass1: "; echo $this->encryption->decrypt('a6aaa2f7d312438adbea');
				if($password === $pass1)
				{
					$resultado=$this->Login_model->validar_credenciales($usuario,$this->encryption->decrypt($pass[0]->contrasenia_login));
				}
			}
			//$resultado=$this->Login->validar_credenciales($usuario,$password); 
			//$resultado=$this->Login_model->validar_credenciales($usuario,$password);
			if ($resultado === false){
				 echo 0;
         	}else{
         		$data = array(
		            'id_login' => $resultado->id_login,
					'usuario_login' => $resultado->usuario_login,
		            'rol_login' => $resultado->rol_login,
		            'login' => TRUE,
		        );

         		$this->session->set_userdata($data);
         		
         			switch ($this->session->userdata('rol_login')) {
					    case "root":
					        echo 1;
					        break;
					    case "Participante":
					        echo 2;
					        break;
					    case "Administrativo":
					        echo 3;
					        break;
					    
					}
			}
		}

		public function vista_root()
		{
			$this->load->view('root');
			
		}

		public function vista_participante()
		{
			$this->load->view('participante');
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


