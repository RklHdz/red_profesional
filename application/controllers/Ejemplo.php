<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Ejemplo extends CI_Controller {

	function __construct()
		{
			parent::__construct();
		}


	public function participante()
	{
		$this->load->view('componentes/header/Header_view');//header
		$this->load->view('componentes/nav/Nav_view');//navegación
		$this->load->view('componentes/panel/Participante_view');//panel para el participante
		$this->load->view('ejemplo'); //vista que se quiere mostrar
		$this->load->view('componentes/footer/Footer_view');//pie de pagina
	}

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
