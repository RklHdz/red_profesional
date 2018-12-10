<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	 * esta clase se encargara de hacer las consultas a la base de datos
	   referente a la tabla login
	 */
	class Root_model extends CI_Model
	{
		
		//función para comprobar si hay usuario existente
		public function comprobar($usuario)
		{
			$this->db->select('usuario_login');
			$this->db->from('tab_login');
			$this->db->where('usuario_login',$usuario);
			$query = $this->db->get();

			return $query->result();
		}
	}
