<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');

	
	class Usuario_model extends CI_Model
	{
		//funcion para obtener el correo y el nombre del usuario para el envio de la recuperacion
		public function correo_usuario($usuario)
		{
			
			$this->db->select('nombre_usuario, apellido_usuario, correo_usuario');
			$this->db->from('tab_usuario');
			$this->db->where('id_usuario',$usuario);
			$datos = $this->db->get();
			return $datos->row(); 
		}

		
	}
