<?php 

	defined('BASEPATH') OR exit('No direct script access allowed');

	/**
	 * esta clase se encargara de llevar la logica sobre el login
	 validar los usuarios, cambiar y actualizar contraseñas
	 */
	class oferta_controller extends CI_Controller
	{
		function __construct()
		{
			parent::__construct();
			//$this->load->model('Login_model');
			$this->load->model('oferta_model');
			$this->load->model('requerimiento_model');
			$this->load->model('Usuario_model');
            $this->load->model('Login_model');
            $this->load->model('notificacion_model');
			//$this->load->library("email");*/	
		}

		public function index()
		{
			$this->load->view('componentes/header/Header_view');//header <br>
			$this->load->view('componentes/nav/Nav_view');//navegación <br>
			$this->load->view('componentes/panel/Participante_view');//panel para el participante <br>
			$this->load->view('oferta/oferta_view'); //vista que se quiere mostrar <br>
			$this->load->view('componentes/footer/Footer_view');//pie de pagina

		} 

		public function captura_oferta()
		{
			if($this->input->post('btnGuardar')){
				$this->form_validation->set_rules('nombre', 'Nombre del representante', 'required');
                $this->form_validation->set_rules('telefono', 'Telefono', 'required');
                $this->form_validation->set_rules('direccion', 'direccion de la empresa', 'required');
                $this->form_validation->set_rules('descripcion', 'Descripcion de la oferta', 'required');
                $this->form_validation->set_rules('tipo_oferta', 'tipo de la oferta', 'required');
               	$this->form_validation->set_rules('tipo_notificacion', 'tipo de la notificacion', 'required');
               	$this->form_validation->set_rules('empresa', 'nombre de la empresa', 'required');
               	
                if($this->form_validation->run()==TRUE)
                {
                	//captura de los datos para el envio de ellos
                	$num = $_POST['num'];
                	for ($i=0; $i < $num ; $i++) { 
                		# code...
                		$requerimiento[$i]=$_POST[$i+1];

                	}
                	echo "string";
                	//captura de la oferta
                	$oferta['descripcion']=$_POST['descripcion'];
                	$oferta['nombre']=$_POST['nombre'];
                	$oferta['tipo_notificacion']=$_POST['tipo_notificacion'];
                	$oferta['empresa']=$_POST['empresa'];
                	$oferta['telefono']=$_POST['telefono'];
                	$oferta['direccion']=$_POST['direccion'];
                    $oferta['hora']=$_POST['verificacion'];
                    $oferta['fecha']=$_POST['verificaciondate']; 
                	$ids = $this->oferta_model->crear($oferta);
                    $tipo = $_POST['tipo_notificacion'];

                  

                	//captura de los requerimientos
                	$this->requerimiento_model->crear($requerimiento,$ids,$num);
                    $tipo_usu = $this->Login_model->validar_usuario_notificacion($tipo);

                    foreach ($tipo_usu as $key ) {
                        # code...
                        $notificacion['estado'] = $_POST['notificacion'];
                        $notificacion['id_oferta'] = $ids;
                        $notificacion['id_usuario'] = $key->id_usuario;
                        $this->notificacion_model->crear($notificacion);
                    }


                	//captura de las notificaciones
                	/*$notificacion['notificacion']=$_POST['descripcion'];
                	$notificacion['hora']=$_POST['verificacion'];
                	$notificacion['fecha']=$_POST['verificaciondate']; 	
                	$notificacion['tipo']=$_POST['tipo_notificacion'];
                	$notificacion['estado']=$_POST['notificacion'];
                	$notificacion['id']=$ids;
                	$num_Participante = $this->Usuario_model->contador();*/

                }else {

                }

			}
		}

	}