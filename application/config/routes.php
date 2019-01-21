<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
#$route['default_controller'] = 'Login_controller/mostrar_login';
$route['default_controller'] = 'Login_controller/mostrar_portada';
$route['login'] = 'Login_controller/mostrar_login';
$route['404_override'] = '';


//Rutas para el Modulo de Login
$route['recuperar-password'] = 'Login_controller/recuperar_password';
$route['login'] = 'Login_controller/mostrar_login';

#agregar usuario
$route['agregar-usuario'] = 'Root_controller/agregar_usuario';
$route['guardar-usuario'] = 'Root_controller/guardar_usuario';
$route['comprobar_usuario'] = 'Root_controller/comprobar_usuario';

#ver usuarios
$route['ver-participantes'] = 'Root_controller/ver_participante';
$route['ver-exparticipantes'] = 'Root_controller/ver_exparticipantes';
$route['ver-administrativos'] = 'Root_controller/ver_administrativo';

#ver detalle ex participante
$route['detalle_ex'] = 'Root_controller/detalle_ex';

#actualizar usuarios
$route['editar_usuario'] = 'Root_controller/editar_usuario';
$route['actualizar-participante'] = 'Root_controller/actualizar_participante';
$route['actualizar-administrativo'] = 'Root_controller/actualizar_administrativo';

#eliminar usuarios
$route['eliminar-participante'] = 'Root_controller/eliminar_usuario';

#salir
$route['logout'] = 'Login_controller/logout';

#Especialidades
$route['especialidad/(:any)'] = 'Root_controller/grupos/$1';

$route['nivel/(:any)'] = 'Root_controller/niveles/$1';

$route['grupo/(:any)/(:any)/(:any)'] = 'Root_controller/grupo/$1/$2/$3';

#rutas para administrativo
$route['administrativo'] = 'Administrativo_controller/administrativo';//ruta para ver el administrativo

#rutas para participante
$route['participante'] = 'Participante_controller/participante';//ruta para ver el participante

$route['crear-HV'] = 'Participante_controller/mostrar_cv';

$route['guardar-hv'] = 'Participante_controller/guardar_cv';

$route['ejemplo'] = 'Ejemplo/participante';

$route['translate_uri_dashes'] = FALSE;


