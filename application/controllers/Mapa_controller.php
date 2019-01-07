<?php 
	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	 * 
	 */
	class Mapa_controller extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
		}

		#función para mostrar el participante
		public function MostrarMapa()
		{
			$this->load->view('mapa/mapa');//Carga vista de mapa
			
		}
	}
