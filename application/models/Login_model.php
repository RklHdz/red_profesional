<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	 * esta clase se encargara de hacer las consultas a la base de datos
	   referente a la tabla login
	 */
	class Login_model extends CI_Model
	{
		public function validar_credenciales($usuario, $password)
		{	
			$this->db->where('usuario_login="'.$usuario.'" and contrasenia_login="'.$password.'"');
			$resultado=$this->db->get('tab_login'); 
    			if ($resultado->num_rows()>0) {
					return $resultado->row();
				}else{
					return false;
				}

		}

		 
		
	}



