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

		$datos['detalle'] = $this->root->detalle('Participante');

		$datos['msj'] = 'participantes';

		$this->load->view('componentes/header/Header_view');
		$this->load->view('componentes/nav/Nav_view');
		$this->load->view('componentes/panel/Root_view');
		$this->load->view('root/Listado_view',$datos);//vista que se quiere mostrar
		$this->load->view('componentes/footer/Footer_view');
		$this->load->view('root/script/script_listas');
	}

	//función para ver ex participantes
	public function ver_exparticipantes()
	{
		#vamos a traer los datos de los exparticipantes

		$datos['detalle'] = $this->root->detalle('exparticipantes');

		$datos['msj'] = 'ex participantes';

		$this->load->view('componentes/header/Header_view');
		$this->load->view('componentes/nav/Nav_view');
		$this->load->view('componentes/panel/Root_view');
		$this->load->view('root/Listado_ex_view',$datos);//vista que se quiere mostrar
		$this->load->view('componentes/footer/Footer_view');
		$this->load->view('root/script/script_listas');
	}

	//función para ver el listado de los administrativos
	public function ver_administrativo()
	{
		#vamos a traer los datos de los administrativos

		$datos['detalle'] = $this->root->detalle('Administrativo');

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
			$nombre_usuario = trim($this->input->post('nombre_usuario'));
			$apellido_usuario = trim($this->input->post('apellido_usuario'));
			$correo_usuario = trim($this->input->post('correo_usuario'));

			//datos para la tabla tab_login
			$usuario_login = trim($this->input->post('usuario_login'));
			$contrasenia_login = trim($this->input->post('contrasenia_login'));
			$rol_login = trim($this->input->post('rol_login'));

			//creamos las reglas de validación con set_rules, el cual recibe tres parametros
			//el primero es el nombre del campo a validar
			//el segundo es el valor que se le mostrará al usuario cuando haya un error
			//el tercero es la regla en si
			$this->form_validation->set_rules('nombre_usuario','Nombres','trim|required|callback_alpha_dash_space');
			$this->form_validation->set_rules('apellido_usuario','Apellidos','trim|required|callback_alpha_dash_space');
			$this->form_validation->set_rules('correo_usuario','Correo Electronico','trim|required|valid_email');

			$this->form_validation->set_rules('usuario_login','Nombre de usuario','trim|required');
			$this->form_validation->set_rules('contrasenia_login','Contraseña','trim|required|min_length[6]');
			

			//mensajes personalizados
			$this->form_validation->set_message('required', 'El campo %s es obligatorio, favor llenarlo');
			$this->form_validation->set_message('valid_email', 'Digite un correo electronico valido');
			$this->form_validation->set_message('min_length', 'La contraseña no debe de ser menor a 6 caracteres');
			$this->form_validation->set_message('numeric','El campo %s debe de ser un número entero');
			$this->form_validation->set_message('alpha','El campo %s debe de contener solo letras');


			//verificamos si el select tipo de usuario es participante
			if($rol_login === 'Participante')
			{
				//capturamos los campos nivel, grupo y especialidad
				$nivel_usuario = trim($this->input->post('nivel_usuario'));
				$grupo_usuario = trim($this->input->post('grupo_usuario'));
				$especialidad_usuario = trim($this->input->post('especialidad_usuario'));

				//creamos las reglas para los campos nivel, grupo y especialidad
				$this->form_validation->set_rules('nivel_usuario','Nivel','trim|required|numeric|is_natural_no_zero');
				$this->form_validation->set_rules('grupo_usuario','Grupo','trim|required|numeric|is_natural_no_zero');
				
				//creamos el mensaje personalizado
				$this->form_validation->set_message('is_natural_no_zero','El campo %s debe contener numeros positivos mayores que cero');
			}
			else
			{
				// si es administrativo, capturamos el valor del campo cargo_usuario
				$cargo_usuario = $this->input->post('cargo_usuario');

				//creamos la regla
				$this->form_validation->set_rules('cargo_usuario','Cargo administrativo','trim|required');
			}

			//verificamos que el formulario este valido
			if($this->form_validation->run() === TRUE)
			{
				/* hacemos la inserccion en la tabla tab_usuario para agregar la información del usuario
					nombre_usuario, apellido_usuario, correo_usuario 
				   si la insercción es exitosa, nos devolvera el id del campo insertado*/

				   if($rol_login === 'Participante')
				   {
				   		$id = $this->root->insertar_usuarioP(strip_tags($nombre_usuario),strip_tags($apellido_usuario),strip_tags($correo_usuario),strip_tags($nivel_usuario),strip_tags($grupo_usuario),strip_tags($especialidad_usuario));
				   }
				   else
				   {
				   		$id = $this->root->insertar_usuario(strip_tags($nombre_usuario),strip_tags($apellido_usuario),strip_tags($correo_usuario),strip_tags($cargo_usuario));
				   }

				   /*si id trae un numero valido, hacemos la insercción en la tabla tab_login*/
				   if($id != 0)
				   {
				   	   	$result = $this->root->insert_login($id,strip_tags($usuario_login),strip_tags($contrasenia_login),strip_tags($rol_login));
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

	function alpha_dash_space($str)
	{
		$this->form_validation->set_message('alpha_dash_space','El campo %s solo debe contener letras');
	    return ( ! preg_match("/^([-a-z_ ])+$/i", $str)) ? FALSE : TRUE;
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

	//función para actualizar los datos del usuario
	public function actualizar_participante()
	{
		//datos para la tabla usuario
		$id = trim($this->input->post('id'));
		$e_nombre = trim($this->input->post('edit_nombre_usuario'));
		$e_apellido = trim($this->input->post('edit_apellido_usuario'));
		$e_correo = trim($this->input->post('edit_correo_usuario'));
		$e_especialidad = trim($this->input->post('edit_especialidad_usuario'));
		$e_grupo = trim($this->input->post('edit_grupo_usuario'));
		$e_nivel = trim($this->input->post('edit_nivel_usuario'));
		$estado = trim($this->input->post('estado'));

		//creamos las reglas de validación con set_rules
		$this->form_validation->set_rules('edit_nombre_usuario','Nombres','trim|required');
		$this->form_validation->set_rules('edit_apellido_usuario','Apellidos','trim|required');
		$this->form_validation->set_rules('edit_correo_usuario','Correo Electronico','trim|required|valid_email');
		$this->form_validation->set_rules('edit_nivel_usuario','Nivel','trim|required|numeric');
		$this->form_validation->set_rules('edit_grupo_usuario','Grupo','trim|required|numeric');
		

		//mensajes personalizados
		$this->form_validation->set_message('required', 'El campo %s es obligatorio, favor llenarlo');
		$this->form_validation->set_message('valid_email', 'Digite un correo electronico valido');
		$this->form_validation->set_message('numeric','El campo %s debe de ser un número entero');

		//verificamos que el formulario este valido
		if($this->form_validation->run() === TRUE)
		{
			$respuesta = $this->root->actualizar_participante($id,strip_tags($e_nombre),strip_tags($e_apellido),strip_tags($e_correo),strip_tags($e_especialidad),strip_tags($e_grupo),strip_tags($e_nivel),strip_tags($estado));
			if($respuesta)
			{
				//si se hizo la actualización 
				$this->session->set_flashdata('Exito1','Usuario actualizado');
				redirect(base_url('ver-participantes'));
			}
			else
			{
				//si no se hizo la actualización
				$this->session->set_flashdata('Error1','Usuario no actualizado');
				redirect(base_url('ver-participantes'));
			}
		}
		else
		{
			$this->session->set_flashdata('error1',validation_errors());
			$this->ver_participante();

		}
	}


	//función para actualizar administrativo
	public function actualizar_administrativo()
	{
		$id_adm = trim($this->input->post('id_adm'));
		$nombre_adm = trim($this->input->post('edit_nombre_administrativo'));
		$apellido_adm = trim($this->input->post('edit_apellido_administrativo'));
		$correo_adm = trim($this->input->post('edit_correo_administrativo'));
		$cargo_adm = trim($this->input->post('edit_cargo_administrativo'));

		//Creamos las reglas
		$this->form_validation->set_rules('edit_nombre_administrativo','Nombres','trim|required');
		$this->form_validation->set_rules('edit_apellido_administrativo','Apellidos','trim|required');
		$this->form_validation->set_rules('edit_correo_administrativo','Correo Electronico','trim|required|valid_email');
		$this->form_validation->set_rules('edit_cargo_administrativo','Cargo administrativo','trim|required');

		//mensajes personalizados
		$this->form_validation->set_message('required', 'El campo %s es obligatorio, favor llenarlo');
		$this->form_validation->set_message('valid_email', 'Digite un correo electronico valido');

		//verificamos que el formulario este valido
		if($this->form_validation->run() === TRUE)
		{
			$respuesta = $this->root->actualizar_administrativo($id_adm,strip_tags($nombre_adm),strip_tags($apellido_adm),strip_tags($correo_adm),strip_tags($cargo_adm));
			if($respuesta)
			{
				//si se hizo la actualización 
				$this->session->set_flashdata('Exito3','Administrativo actualizado');
				redirect(base_url('ver-administrativos'));
			}
			else
			{
				//si no se hizo la actualización
				$this->session->set_flashdata('Error3','Administrativo no actualizado');
				redirect(base_url('ver-administrativos'));
			}
		}
		else
		{
			$this->session->set_flashdata('error3',validation_errors());
			$this->ver_administrativo();

		}		
	}

	//función para eliminar participante
	public function eliminar_participante()
	{
		$id = $this->input->post('id_eliminar');
		$result = $this->root->eliminar_usuario($id);
		if($result)
		{
			$result1 = $this->root->eliminar_login();
		}
	}

	//función para obtener el detalle del ex participante
	public function detalle_ex()
	{
		$id = $this->input->post('id');
		$dato = $this->root->detalle_ex($id);
		echo json_encode($dato);
	}

	//función para obtener el maximo de grupos de una especialidad
	//recibe como parametro la especialidad
	public function niveles($especialidad)
	{
		$datos['especialidad'] = $especialidad;
		//obtener el numero de grupos
		$datos['nivel1'] = $this->root->get_grupos($especialidad,1);
		$datos['nivel2'] = $this->root->get_grupos($especialidad,2);
		$datos['nivel3'] = $this->root->get_grupos($especialidad,3);
		
		//cargamos la vista y le mandamos el dato
		$this->load->view('componentes/header/Header_view');
		$this->load->view('componentes/nav/Nav_view');
		$this->load->view('componentes/panel/Root_view');
		$this->load->view('root/Niveles_view',$datos);
		$this->load->view('componentes/footer/Footer_view');
	}

	public function grupo($especialidad,$nivel,$grupo)
	{		
		$datos['especialidad'] = $especialidad;
		$datos['nivel'] = $nivel;
		$datos['grupo'] = $grupo;

		$datos['lista'] = $this->root->lista($especialidad,$nivel,$grupo);
		//cargamos la vista y le mandamos el dato
		$this->load->view('componentes/header/Header_view');
		$this->load->view('componentes/nav/Nav_view');
		$this->load->view('componentes/panel/Root_view');
		$this->load->view('root/Grupos_view',$datos);
		$this->load->view('componentes/footer/Footer_view');
		$this->load->view('root/script/script_grupo');
	}
}
