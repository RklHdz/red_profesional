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
		}

		
		// esta función nos muestra la vista para poder logearnos y acceder al sistema.
		public function index()
		{
			$this->load->view('login/Header_login_view');
			$this->load->view('login/Login_view');
			$this->load->view('login/Footer_login_view');
		}

		public function iniciar_sesion()
		{	//recuperamos datos del formulario
			$usuario = $this->input->post('username');
			$password = $this->input->post('password');
			$resultado=$this->Login->validar_credenciales($usuario,$password); 
			if ($resultado===1)
			{
         		$this->load->view('participante/Header_help_view');
				$this->load->view('participante/Menu_help_view');
				$this->load->view('participante/cabecera_body_help_view');
				$this->load->view('participante/help');
				$this->load->view('participante/Footer_help_view');
            }else
         	{
         		$this->load->view('login/Header_login_view');
				$this->load->view('login/Login_view');
				$this->load->view('login/Footer_login_view');
         	}

		}

		// función que muestar la vista para poder recuperar la contraseña
		public function recuperar_password()
		{
			$this->load->view('login/Header_login_view');
			$this->load->view('login/Recuperar_pass_view');
			$this->load->view('login/Footer_login_view');
		}
	}

 ?>
