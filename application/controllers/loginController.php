<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	 * esta clase se encargara de llevar la logica sobre el login
	 validar los usuarios, cambiar y actualizar contraseñas
	 */
	class LoginController extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		public function mostrarLogin()
		{
			$this->load->view('login/headerLogin.php');
			$this->load->view('login/loginView');
			$this->load->view('login/footerLogin.php');
		}
	}

 ?>
