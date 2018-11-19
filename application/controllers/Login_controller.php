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
		}

		
		// esta función nos muestra la vista para poder logearnos y acceder al sistema.
		public function mostrar_login()
		{
			$this->load->view('login/Header_login_view');
			$this->load->view('login/Login_view');
			$this->load->view('login/Footer_login_view');
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
