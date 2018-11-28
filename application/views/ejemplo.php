<?php 

echo "<h1> ESTRUCTURA PARA CARGAR LA VISTA PARA EL PARTICIPANTE </h1>";

echo "

	$ this->load->view('componentes/header/Header_view');//header <br>
	$ this->load->view('componentes/nav/Nav_view');//navegación <br>
	$ this->load->view('componentes/panel/Participante_view');//panel para el participante <br>
	$ this->load->view('ejemplo'); //vista que se quiere mostrar <br>
	$ this->load->view('componentes/footer/Footer_view');//pie de pagina

";

echo "<h1> ESTRUCTURA PARA CARGAR LA VISTA PARA EL ADMINISTRATIVO </h1>";

echo "

	$ this->load->view('componentes/header/Header_view');//header <br>
	$ this->load->view('componentes/nav/Nav_view');//navegación <br>
	$ this->load->view('componentes/panel/Participante_view');//panel para el administrativo <br>
	$ this->load->view('ejemplo'); //vista que se quiere mostrar <br>
	$ this->load->view('componentes/footer/Footer_view');//pie de pagina

";
