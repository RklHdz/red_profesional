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
            if (!$this->session->userdata('login')) 
             {
                redirect(base_url('login'));
             }
            
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
			$this->load->view('componentes/panel/Administrativo_view');//panel para el participante <br>
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
               //	$ids = $this->oferta_model->crear($oferta);
                if($this->form_validation->run()==TRUE)
                {
                	//captura de los datos para el envio de ellos
                	$num = count($_POST["name"]);
                
                	//echo "string";
                	//captura de la oferta
                	$oferta['descripcion']=$_POST['descripcion'];
                    $e1=$_POST['descripcion'];
                	$oferta['nombre']=$_POST['nombre'];
                    $oferta['tipo_oferta']=$_POST['tipo_oferta'];
                    $o0=$_POST['tipo_oferta'];
                	$oferta['tipo_notificacion']=$_POST['tipo_notificacion'];
                    $o1=$_POST['tipo_notificacion'];
                	$oferta['empresa']=$_POST['empresa'];
                    $o2=$_POST['empresa'];
                	$oferta['telefono']=$_POST['telefono'];
                	$oferta['direccion']=$_POST['direccion'];
                    $oferta['hora']=$_POST['verificacion'];
                    $oferta['fecha']=$_POST['verificaciondate']; 
                	$ids = $this->oferta_model->crear($oferta);
                    $tipo = $_POST['tipo_notificacion'];

                    for ($i=0; $i < $num ; $i++) 
                    { 
                        # code...
                        $requerimiento=$_POST["name"][$i];

                        $this->requerimiento_model->crear($requerimiento,$ids);
                        print_r($requerimiento); echo "$ids";
                        echo "<br>";

                    }

                	//captura de los requerimientos
                	//$this->requerimiento_model->crear($requerimiento,$ids,$num);
                    $tipo_usu = $this->Login_model->validar_usuario_notificacion($tipo);

                    foreach ($tipo_usu as $key ) {
                        # code...
                        $notificacion['estado'] = $_POST['notificacion'];
                        $notificacion['id_oferta'] = $ids;
                        $notificacion['id_usuario'] = $key->id_usuario;
                        $this->notificacion_model->crear($notificacion);

                         $datos = $this->Usuario_model->correo_usuario($key->id_usuario);

                          $configGmail = array(
                                         'protocol' => 'smtp',
                                         'smtp_host' => 'ssl://smtp.gmail.com',
                                         'smtp_port' => 465,
                                         'smtp_user' => 'red.profesional08@gmail.com',//aqui ponemos el correo creado
                                         'smtp_pass' => '12345678Red',//contraseña del correo
                                         'mailtype' => 'html',
                                         'charset' => 'utf-8',
                                         'newline' => "\r\n"
                                         ); 
                    //envio del correo 
                     $this->email->initialize($configGmail);
                    $this->email->from('red.profesional08@gmail.com'); //el correo de donde lo envian
                    $this->email->to($datos->correo_usuario);// el correo de destino
                   // $cid = $this->email->attachment_cid($filename);
                    $this->email->set_mailtype('html');
                    $this->email->subject('Recuperacion');//asunto del correo
                   // $cid = $this->email->attachment_cid($filename);
                    /*$this->email->message($this->load->view('login/format_email', compact('cid','datos','data')));*/
                     for ($i=0; $i < $num ; $i++) 
                    { 
                        # code...
                        $requerimiento=$_POST["name"][$i];
                    $this->email->message('<div  style=" background-color: rgb(47,50,59) ;height: 40px; margin-bottom: 25px; width: 693px; margin: 0px 150px; text-align: center;  ">
    <strong style=" font-size: 2em; color: #fff; font-family: sans-serif; ">RED</strong>
    <strong style=" font-size: 2em; color: rgb(89,200,193); font-family: sans-serif; ">PRO</strong>
    </div>
    <div  style=" height: 600px; margin-bottom: 25px; width: 693px; margin: 0px 150px;">
        <div style="text-align: center;"> <h1>Informacion de '.$o0.'</h1></div>
        <div style="margin-left: 40px;">Hola '. $datos->nombre_usuario .' '. $datos->apellido_usuario.' </div>
        <br>
        <div style="margin-left: 45px;">
            <li>Queriamos hacerle saber que se encuentra una oferta de '.$o0.'.</li>
            <li> En la empresa: '.$o2.' </li>
            <li> Con la siguiente descripcion: '.$e1.' </li>
            <li> Y los requerimiento son: </li>
             <li>'.$requerimiento .'</li>
            
        </div>
    </div>');
                }
                    $this->email->send();
                    $this->index();
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
