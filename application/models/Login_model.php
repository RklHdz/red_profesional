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
    			if ($resultado->result_array()) 
    			{
    				return 1;
    			}else
    			{
        			return 0;
    			}
		}

		 public function get_login($id)
		 {
		 	$query = $this->db->get('tab_login'); 
      		return $query;
   		}
		
	}



