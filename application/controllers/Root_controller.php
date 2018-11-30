<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Esta clase se encargara de la logica relacionada con la gestion del usuario root
   Agregar usuarios y eliminar usuarios
 */
class Root_controller extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Root_model','root');
	}


	//función para cargar la vista para agregar un usuario
	public function agregar_usuario()
	{
		$this->load->view('componentes/header/Header_view');
		$this->load->view('componentes/nav/Nav_view');
		$this->load->view('componentes/panel/Root_view');
		$this->load->view('root/Agregar_usuario_view');//vista que se quiere mostrar
		$this->load->view('componentes/footer/Footer_view');
	}
}
