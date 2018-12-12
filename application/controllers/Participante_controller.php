<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');

	class Participante_controller extends CI_Controller
	{
		
		function __construct()
		{
			parent::__construct();
			$this->load->model('Participante_model');
		}

		public function index()
		{
			$this->load->view('componentes/header/Header_view');
			$this->load->view('componentes/nav/Nav_view');
			$this->load->view('componentes/panel/Participante_view');
			//$this->load->view('participante/nada'); 
			$this->load->view('componentes/footer/Footer_view');

		} 

	}