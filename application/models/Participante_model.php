<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	 * esta clase se encargara de hacer las consultas a la base de datos
	   que se ocupen en el participante
	 */
	class Participante_model extends CI_Model
	{
		#función para obtener el nombre del participante
		public function datos_personales($usuario)
		{
			$this->db->select('nombre_usuario, apellido_usuario');
		}
	}
