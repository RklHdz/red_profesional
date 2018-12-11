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

		//función para insertar los datos del usuario administrativo
		public function insertar_usuario($nombre_usuario,$apellido_usuario,$correo_usuario)
		{
			$this->db->set('nombre_usuario', $nombre_usuario);
			$this->db->set('apellido_usuario', $apellido_usuario);
			$this->db->set('correo_usuario', $correo_usuario);
			$this->db->insert('tab_usuario');
			return $this->db->insert_id();
		}

		//función para insertar los datos del usuario participante
		public function insertar_usuarioP($nombre_usuario,$apellido_usuario,$correo_usuario,$nivel_usuario,$grupo_usuario,$especialidad_usuario)
		{
			$this->db->set('nombre_usuario', $nombre_usuario);
			$this->db->set('apellido_usuario', $apellido_usuario);
			$this->db->set('correo_usuario', $correo_usuario);
			$this->db->set('especialidad_usuario', $especialidad_usuario);
			$this->db->set('grupo_usuario', $grupo_usuario);
			$this->db->set('nivel_usuario', $nivel_usuario);
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

		//función para obtener el listado de los participantes
		public function detalle($tipo)
		{
			$this->db->select('u.id_usuario,u.nombre_usuario,u.apellido_usuario,l.usuario_login,l.rol_login');
			$this->db->from('tab_usuario u');
			$this->db->join('tab_login l','u.id_usuario=l.id_usuario');
			$this->db->where('rol_login',$tipo);
			$query = $this->db->get();
			if($query->num_rows() > 0){
			//si hay registros los devolvemos
			return $query->result();
			//return false;
			}else{
				//si no hay registros devolvemos false
				return false;
			}
		}
	}//fin de la clase
