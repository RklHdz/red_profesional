<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');

	
	class requerimiento_model extends CI_Model
	{
		//funcion para obtener el correo y el nombre del usuario para el envio de la recuperacion
		public function crear($requerimiento, $ids,$num)
		{
			for ($i=0; $i < $num; $i++) { 
				# code...
			$this->db->set('requerimiento', $requerimiento[$i]);
            $this->db->set('id_oferta', $ids);
             
            $this->db->insert('tab_requerimiento'); 
			}
			

           // return $this->db->insert_id();
		}

		/*public function datos_oferta($oferta){
			
    	}*/

		
	}