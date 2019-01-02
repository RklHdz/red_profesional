<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	 * 
	 */
	class Administrativo_controller extends CI_Controller
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

		#función para mostrar el administrativo
		public function administrativo()
		{
			/*invocación para administrativo*/
			$this->load->view('componentes/header/Header_view');
			$this->load->view('componentes/nav/Nav_view');
			$this->load->view('componentes/panel/Administrativo_view');
			$this->load->view('ejemplo');//vista que se quiere mostrar
			$this->load->view('componentes/footer/Footer_view');

		}
	}
