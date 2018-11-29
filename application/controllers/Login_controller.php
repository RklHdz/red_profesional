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
			$usuario = $this->input->post('username');
			$password = $this->input->post('password');
			$resultado=$this->Login->validar_credenciales($usuario,$password); 
			/*if ($resultado===1)
			{
         		echo 1;
            }else
         	{
         		echo 0;
         	}*/

         	$data = array(
            'usuario_login' => $usuario,
            'id' => 1,
			'login' => TRUE,
                   
         	);

         	$this->session->set_userdata($data);

		}

		// función que muestar la vista para poder recuperar la contraseña
		public function recuperar_password()
		{
			$this->load->view('login/header/Header_login_view');
			$this->load->view('login/Recuperar_pass_view');
			$this->load->view('login/footer/Footer_login_view');
		}
	}

 ?>
