<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	 * 
	 */
	class Participante_controller extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			if (!$this->session->userdata('login')) 
			{
				redirect(base_url('login'));
			}

			#cargar el modelo a ocupar
			$this->load->model('Participante_model','participante');
		}

		#función para mostrar el participante
		public function participante()
		{
			$this->load->view('componentes/header/Header_view');//header
			$this->load->view('componentes/nav/Nav_view');//navegación
			$this->load->view('componentes/panel/Participante_view');//panel para el participante
			$this->load->view('ejemplo'); //vista que se quiere mostrar
			$this->load->view('componentes/footer/Footer_view');//pie de pagina
		}

		#función para mostrar cv de participante
		public function mostrar_cv()
		{
			
			//obtenemos el nombre del usuario
			$usuario = $_SESSION['usuario_login'];
			
			$datos['info'] = $this->participante->datos_personales($usuario);
			
			$this->load->view('componentes/header/Header_view');//header
			$this->load->view('componentes/nav/Nav_view');//navegación
			$this->load->view('componentes/panel/Participante_view');//panel para el participante
			$this->load->view('participantes/ejemplo'); //vista que se quiere mostrar
			$this->load->view('componentes/footer/Footer_view');//pie de pagina
			$this->load->view('participantes/script/script_cv');
		}

		#función para agregar la hoja de vida
		public function guardar_cv()
		{
			#primero vamos a obtener los datos de la información personal
			#segundo a verificar cada uno de los select de cada paso, para ver si contiene o no el paso indicado
		}
	}
