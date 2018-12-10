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

		//función para insertar los datos del usuario
		public function insertar_usuario($nombre_usuario,$apellido_usuario,$correo_usuario)
		{
			$this->db->set('nombre_usuario', $nombre_usuario);
			$this->db->set('apellido_usuario', $apellido_usuario);
			$this->db->set('correo_usuario', $correo_usuario);
			$this->db->insert('tab_usuario');
			return $this->db->insert_id();
		}

		//función para insertar los datos del logín del usuario que se acaba de insertar
		public function insert_login($id,$usuario_login,$contrasenia_login,$rol_login)
		{
			$this->db->set('usuario_login',$usuario_login);
			$this->db->set('contrasenia_login',$contrasenia_login);
			$this->db->set('rol_login',$rol_login);
			$this->db->set('id_usuario',$id);
			$this->db->insert('tab_login');
			if($this->db->affected_rows() > 0)
			{
				return true;
			}
			else
			{
				return false;
			}
		}
	}
