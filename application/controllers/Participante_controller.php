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
			$this->load->view('componentes/header/Header_view');//header
			$this->load->view('componentes/nav/Nav_view');//navegación
			$this->load->view('componentes/panel/Participante_view');//panel para el participante
			$this->load->view('participantes/cv_view'); //vista que se quiere mostrar
			$this->load->view('componentes/footer/Footer_view');//pie de pagina
		}
	}
