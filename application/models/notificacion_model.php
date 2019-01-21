<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');

	
	class notificacion_model extends CI_Model
	{
		//funcion para obtener el correo y el nombre del usuario para el envio de la recuperacion
		public function crear($notificacion)
		{
			# code...
			$this->db->set('estado_notificacion', $notificacion['estado']);
            $this->db->set('id_oferta', $notificacion['id_oferta']);
            $this->db->set('id_usuario', $notificacion['id_usuario']);
            $this->db->insert('tab_notificacion'); 
			

           // return $this->db->insert_id();
		}

		
		
		/*public function datos_oferta($oferta){
			
    	}*/

		
	}
