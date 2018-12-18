<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');

	
	class oferta_model extends CI_Model
	{
		//funcion para obtener el correo y el nombre del usuario para el envio de la recuperacion
		public function crear($oferta)
		{
			$this->db->set('descripcion_oferta', $oferta['descripcion']);
            $this->db->set('empresa_oferta', $oferta['empresa']);
            $this->db->set('tipo_oferta', $oferta['tipo_notificacion']);
            $this->db->set('representante_participante', $oferta['nombre']);  
         	$this->db->set('telefono_representante_participante', $oferta['telefono']);
            $this->db->set('direccion_oferta', $oferta['direccion']);  
            $this->db->insert('tab_oferta'); 

            return $this->db->insert_id();
		}

		public function datos_oferta($oferta){
			
    	}

		
	}