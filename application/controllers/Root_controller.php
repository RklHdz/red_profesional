<?php 

defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Esta clase se encargara de la logica relacionada con la gestion del usuario root
   Agregar usuarios y eliminar usuarios
 */
class Root_controller extends CI_Controller
{
	
	function __construct()
	{
		parent::__construct();
		$this->load->model('Root_model','root');
	}


	//función para cargar la vista para agregar un usuario
	public function agregar_usuario()
	{
		$this->load->view('componentes/header/Header_view');
		$this->load->view('componentes/nav/Nav_view');
		$this->load->view('componentes/panel/Root_view');
		$this->load->view('root/Agregar_usuario_view');//vista que se quiere mostrar
		$this->load->view('componentes/footer/Footer_view');
		$this->load->view('root/script/script_root');
	}


	//función para ver el listado de los usuarios
	public function ver_participante()
	{
		#vamos a traer los datos de los participantes

		$datos['detalle'] = $this->root->detalle('participante');

		$datos['msj'] = 'participantes';

		$this->load->view('componentes/header/Header_view');
		$this->load->view('componentes/nav/Nav_view');
		$this->load->view('componentes/panel/Root_view');
		$this->load->view('root/Listado_view',$datos);//vista que se quiere mostrar
		$this->load->view('componentes/footer/Footer_view');
		$this->load->view('root/script/script_listas');
	}

	//función para ver el listado de los administrativos
	public function ver_administrativo()
	{
		#vamos a traer los datos de los participantes

		$datos['detalle'] = $this->root->detalle('administrativo');

		$datos['msj'] = 'administrativos';

		$this->load->view('componentes/header/Header_view');
		$this->load->view('componentes/nav/Nav_view');
		$this->load->view('componentes/panel/Root_view');
		$this->load->view('root/Listado_view',$datos);//vista que se quiere mostrar
		$this->load->view('componentes/footer/Footer_view');
		$this->load->view('root/script/script_listas');
	}

	//función que guardara los datos del usuario
	public function guardar_usuario()
	{
		if($this->input->post())
		{
			//datos para la tabla tab_usuario
			$nombre_usuario = $this->input->post('nombre_usuario');
			$apellido_usuario = $this->input->post('apellido_usuario');
			$correo_usuario = $this->input->post('correo_usuario');

			//datos para la tabla tab_login
			$usuario_login = $this->input->post('usuario_login');
			$contrasenia_login = $this->input->post('contrasenia_login');
			$rol_login = $this->input->post('rol_login');

			//creamos las reglas de validación con set_rules, el cual recibe tres parametros
			//el primero es el nombre del campo a validar
			//el segundo es el valor que se le mostrará al usuario cuando haya un error
			//el tercero es la regla en si
			$this->form_validation->set_rules('nombre_usuario','Nombres','trim|required');
			$this->form_validation->set_rules('apellido_usuario','Apellidos','trim|required');
			$this->form_validation->set_rules('correo_usuario','Correo Electronico','trim|required|valid_email');

			$this->form_validation->set_rules('usuario_login','Nombre de usuario','trim|required');
			$this->form_validation->set_rules('contrasenia_login','Contraseña','trim|required|min_length[6]');
			

			//mensajes personalizados
			$this->form_validation->set_message('required', 'El campo %s es obligatorio, favor llenarlo');
			$this->form_validation->set_message('valid_email', 'Digite un correo electronico valido');
			$this->form_validation->set_message('min_length', 'La contraseña no debe de ser menor a 6 caracteres');


			//verificamos si el select tipo de usuario es participante
			if($rol_login === 'participante')
			{
				//capturamos los campos nivel, grupo y especialidad
				$nivel_usuario = $this->input->post('nivel_usuario');
				$grupo_usuario = $this->input->post('grupo_usuario');
				$especialidad_usuario = $this->input->post('especialidad_usuario');

				//creamos las reglas para los campos nivel, grupo y especialidad
				$this->form_validation->set_rules('nivel_usuario','Nivel','trim|required');
				$this->form_validation->set_rules('grupo_usuario','Grupo','trim|required');
				$this->form_validation->set_rules('especialidad_usuario','Especialidad','trim|required');


			}

			//verificamos que el formulario este valido
			if($this->form_validation->run() === TRUE)
			{
				/* hacemos la inserccion en la tabla tab_usuario para agregar la información del usuario
					nombre_usuario, apellido_usuario, correo_usuario 
				   si la insercción es exitosa, nos devolvera el id del campo insertado*/

				   if($rol_login === 'participante')
				   {
				   		$id = $this->root->insertar_usuarioP($nombre_usuario,$apellido_usuario,$correo_usuario,$nivel_usuario,$grupo_usuario,$especialidad_usuario);
				   }
				   else
				   {
				   		$id = $this->root->insertar_usuario($nombre_usuario,$apellido_usuario,$correo_usuario);
				   }

				   /*si id trae un numero valido, hacemos la insercción en la tabla tab_login*/
				   if($id != 0)
				   {
				   	   	$result = $this->root->insert_login($id,$usuario_login,$contrasenia_login,$rol_login);
				   	   	if($result)
				   	   	{
				   	   		$this->session->set_flashdata('Exito','Usuario agregado');
				   			//$this->agregar_usuario();
				   			redirect(base_url('agregar-usuario'));
				   	   	}
				   }
				   else
				   {
				   		$this->session->set_flashdata('error2','Error al ingresar los datos');
				   		//$this->agregar_usuario();
				   		redirect(base_url('agregar-usuario'));
				   }



			}
			else
			{
				$this->session->set_flashdata('error',validation_errors());
				$this->agregar_usuario();

			}
		}
	}

	//función para comprobar si el usuario existe o no
	public function comprobar_usuario()
	{
		$usuario = $this->input->post('usuario');
		$result = $this->root->comprobar($usuario);
		
		if($result){
			$valor = 1;//si el usuario ya existe
		}else{
			$valor = 0;//si el usuario no existe
		}
		echo json_encode($valor);
	}

	//función para editar los datos del usuario
	public function editar_usuario()
	{
		$id = $this->input->post('id');
		$rol = $this->input->post('rol');

		$data = $this->root->editar_usuario($id,$rol);

		echo json_encode($data);
	}
}
