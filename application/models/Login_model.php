<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	 * esta clase se encargara de hacer las consultas a la base de datos
	   referente a la tabla login
	 */
	class Login_model extends CI_Model
	{
		//
		public function validar($campo)
		{
			$this->db->select('usuario_login');
			$this->db->from('tab_login');
			$this->db->where('usuario_login',$campo);
			$usuario = $this->db->get();
			 return $usuario->result(); 
			
		}

		public function solicitud ($campo){
			$this->db->select('id_usuario');
			$this->db->from('tab_login');
			$this->db->where('usuario_login',$campo);
			$usuario = $this->db->get();
			 return $usuario->row()->id_usuario; 
		}

		//metodo para actualizar la contraseña
		public function act_contra($data)
		{
			$this->db->set('contrasenia_login', $data['contra']);
            $this->db->where('id_usuario', $data['id']);
            $this->db->update('tab_login');
		}
	}



