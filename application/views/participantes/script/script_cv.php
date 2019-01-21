<script>
		
		//paso 2
		var con = 0;
		var con_form = 0;
		var con_exp = 0;
		var con_pra = 0;
		var con_co = 0;
		var con_ha = 0;
		var con_la = 0;
		var con_per = 0;
		//var num = $('#num_educacion').val(con);

//************************** INFORMACION PERSONAL PASO 1 *******************************************
		$('#radioDUI').click(function(){
		
			$('#dui_label').remove();
			$('#dui_input').remove();

			$('#minor_label').remove();
			$('#minor_input').remove();

			var  html='';
			html = '<label id="dui_label" for="dui">DUI</label>'+
			  	   '<input id="dui_input" type="text" class="form-control" id="dui" name="dui" placeholder="00000000-0">';
			$('#docu_identi').append(html);
		});

		$('#radioMinoridad').click(function(){

			$('#minor_label').remove();
			$('#minor_input').remove();

			$('#dui_label').remove();
			$('#dui_input').remove();

			var html='';
			html ='<label id="minor_label" for="minoridad">Carnet Minoridad</label>'+
				  '<input id="minor_input" type="text" class="form-control" id="minoridad" name="minoridad" placeholder="0000-000000-000-0">';
			$('#docu_identi').append(html);
		});


		//para la licencia 
		$('#licencia_si').click(function(){

			$('#licencia_label').remove();
			$('#licencia_select').remove();
			var html='<label id="licencia_label" for="">Licencia de conducir</label>'+
					 '<select id="licencia_select" class="form-control" name="tipo_licencia" id="tipo_licencia">'+
						'<option value="motociclista">Motociclista</option>'+
						'<option value="particular">Particular</option>'+
						'<option value="liviana">Liviana</option>'+
						'<option value="pesada">Pesada</option>'+
						'<option value="pesada_t">Pesada T</option>'+
					 '</select>';

			$('#licencia').append(html);
		});

		$('#licencia_no').click(function(){

			$('#licencia_label').remove();
			$('#licencia_select').remove();
		});
//**************************************** EDUCACION PASO 2 ********************************************************************************************
		//para educación
		$('#estudio_si').click(function(){
			$('#msj_edu').remove();//borramos el msj que se genera si se selecciona no
			$('#educacion_registro').remove();
			var html='';

			//vamos a crear el formulario
			html = '<div id="educacion_registro"> <div  class="row">'+
						'<label class="col-md-5">Ordenar educación en orden cronológico: Iniciar con el más reciente y terminar lista con el más antiguo. Incluir bachillerato, carrera técnica o universitaria que tengas.</label>'+
					'</div>'+
					'<div class="row">'+
						'<div class="form-group">'+
							'<div class="col-md-3">'+
								'<button type="button" onclick=agregar_educacion() class="btn btn-info" id="btn-add-educ">Agregar educación</button>'+
								'<button type="button" style="margin-left: 20px" onclick=eliminar_educacion() class="btn btn-danger" id="btn-delete-educ">Eliminar</button>'+
							'</div>'+
						'</div>'+
					'</div>'+
					'<!-- aqui iran apareciendo las diversas registro de educación-->'+
					'<div id="registro_educ">'+
						'<br>'+
					'</div></div>';
			$('#educacion').append(html);

		});



		$('#estudio_no').click(function(){
			var html='<h3 id="msj_edu">Sin estudios</h3>';
			$('#msj_edu').remove();//borramos el msj que se genera si se selecciona no
			$('#educacion_registro').remove();
			con = 0;
			$('#educacion').append(html);
		});


	function agregar_educacion()
	{
		//creamos un contador! el cual nos servira para saber cuantos registros se han creado
			con++;
			
			var html ='';

			html = '<div class="row" id="educ-'+con+'"> <div class="form-row">'+
	    				'<div class="form-group col-md-6">'+
	      					'<label for="titulo_educ-'+con+'">Título</label>'+
	      					'<input type="text" class="form-control" id="titulo_educ-'+con+'" name="titulo_educ-'+con+'" placeholder="Título">'+
	    				'</div>'+
	    				'<div class="form-group col-md-6">'+
	      					'<label for="institucion_educ-'+con+'">Institución</label>'+
	      					'<input type="text" class="form-control" id="institucion_educ-'+con+'" name="institucion_educ-'+con+'" placeholder="Institución">'+
	    				'</div>'+
	  				'</div>'+
	  				'<div class="form-row">'+
	    				'<div class="form-group col-md-4">'+
	      					'<label for="anio_educ-'+con+'">Año</label>'+
	      					'<input type="text" class="form-control" id="anio_educ-'+con+'" name="anio_educ-'+con+'" placeholder="Año de estudio">'+
	    				'</div>'+
	    				'<div class="form-group col-md-4">'+
	      					'<label for="nivel_educ-'+con+'">Nivel academico</label>'+
	      					'<input type="text" class="form-control" id="nivel_educ-'+con+'" name="nivel_educ-'+con+'" placeholder="Universidad, Bachillerato, educación basica">'+
	    				'</div>'+
	    				'<div class="form-group col-md-4">'+
	      					'<label for="tiempo_estudio_educ-">Tiempo de estudio</label>'+
	      					'<input type="text" class="form-control" id="tiempo_estudio_educ-'+con+'" name="tiempo_estudio_educ-'+con+'" placeholder="Tiempo de estudio">'+
	    				'</div>'+
	  				'</div>'+
	  				'</div><hr id="raya-'+con+'">';
	  		$('#registro_educ').append(html);
	  		document.getElementsByName("num_educacion")[0].value = con;
	}

	function eliminar_educacion()
	{
		//vamos a eliminar el ultimo elemento creado
			$('#educ-'+con+'').remove();
			$('#raya-'+con+'').remove();
			if(con === 0){
				con = 0;
			}else{
				con--;	
			}
			
			document.getElementsByName("num_educacion")[0].value = con;
	}
	
//********************************************************************* FORMACIÓN TECNICA Y CURSOS *********************************************************************
	$('#formacion_no').click(function(){
			var html='<h3 id="msj_form">Sin Formación o Cursos</h3>';
			$('#msj_form').remove();//borramos el msj que se genera si se selecciona no
			$('#formacion_registro').remove();
			con = 0;
			$('#formacion').append(html);
	});


	$('#formacion_si').click(function(){
		$('#msj_form').remove();
		$('#formacion_registro').remove();
		var html = '';

		html = '<div id="formacion_registro">'+
					'<div  class="row">'+
						'<label class="col-md-5">*Ordenar formación técnica en orden cronólogico: Iniciar con el más reciente y terminar lista con el más antiguo. Incluir solamente cursos de los cuales se tenga comprobante o diploma respectivo. Nombre completo del Curso Técnico y  año de graduación</label>'+
					'</div>'+
					'<div class="row">'+
						'<div class="form-group">'+
							'<div class="col-md-3">'+
								'<button type="button" onclick=agregar_formacion() class="btn btn-info" id="btn-add-form">Agregar Formación</button>'+
								'<button type="button" style="margin-left: 20px" onclick=eliminar_formacion() class="btn btn-danger" id="btn-delete-form">Eliminar</button>'+
							'</div>'+
						'</div>'+
						'</div>'+
						'<!-- aqui iran apareciendo las diversas registro de formación o curso-->'+
						'<div id="registro_form" style="margin-top: 20px">'
								
						'<br>'+
					'</div>'+
				'</div>';
		$('#formacion').append(html);
	});

	function agregar_formacion()
	{
		con_form++;
		var html='';
		html = '<div class="row" id="form-'+con_form+'"> '+
				'<div class="form-row">'+
					'<div class="form-group col-md-6">'+
						'<label for="nombre_form-'+con_form+'">Nombre de la formación o curso</label>'+
						'<input type="text" class="form-control" id="nombre_form-'+con_form+'" name="nombre_form-'+con_form+'" placeholder="Título">'+
					'</div>'+
					'<div class="form-group col-md-6">'+
						'<label for="institucion_form-'+con_form+'">Institución</label>'+
						'<input type="text" class="form-control" id="institucion_form-'+con_form+'" name="institucion_form-'+con_form+'" placeholder="Institución donde se realizó la formación o curso">'+
					'</div>'+
				'</div>'+
				'<div class="form-row">'+
					'<div class="form-group col-md-4">'+
						'<label for="anio_form-'+con_form+'">Año</label>'+
						'<input type="text" class="form-control" id="anio_form-'+con_form+'" name="anio_form-'+con_form+'" placeholder="Año que se realizo la formación o curso">'+
					'</div>'+
					'<div class="form-group col-md-4">'+
						'<label for="tiempo_estudio_educ-">Tiempo de Duración</label>'+
						'<input type="text" class="form-control" id="tiempo_estudio_educ-'+con_form+'" name="tiempo_estudio_educ-'+con_form+'" placeholder="Tiempo de duración de la formación o curso">'+
					'</div>'+
					'<div class="form-group col-md-4">'+
						'<label for="tipo_form-'+con_form+'">Tipo</label>'+
						'<select class="form-control" name="tipo_form-'+con_form+'" id="tipo_form-'+con_form+'">'+
							'<option value="formacion">Formación Técnica</option>'+
							'<option value="curso">Curso Técnico</option>'+
						'</select>'+
					'</div>'+
				'</div>'+
				'</div>'+
				'<hr id="raya_form-'+con_form+'">';
		$('#registro_form').append(html);
	}

	function eliminar_formacion()
	{
		//vamos a eliminar el ultimo elemento creado
			$('#form-'+con_form+'').remove();
			$('#raya_form-'+con_form+'').remove();
			if(con_form === 0){
				con_form = 0;
			}else{
				con_form--;	
			}
			
			document.getElementsByName("num_formacion")[0].value = con_form;
	}

//************************************Experiencia LAboral*************************************************
	$('#experiencia_no').click(function(){
			var html='<h3 id="msj_exp">Sin Experiencia laboral</h3>';
			$('#msj_exp').remove();//borramos el msj que se genera si se selecciona no
			$('#experiencia_registro').remove();
			con = 0;
			$('#experiencia').append(html);
	});


	$('#experiencia_si').click(function(){
		$('#msj_exp').remove();
		$('#experiencia_registro').remove();
		var html = '';

		html = '<div id="experiencia_registro">'+
					'<div  class="row">'+
						'<label class="col-md-5">*Ordenar Experiencia laboral en orden cronólogico: Iniciar con el más reciente y terminar lista con el más antiguo.</label>'+
					'</div>'+
					'<div class="row">'+
						'<div class="form-group">'+
							'<div class="col-md-4">'+
								'<button type="button" onclick=agregar_experiencia() class="btn btn-info" id="btn-add-exp">Agregar Experiencia laboral</button>'+
								'<button type="button" style="margin-left: 20px" onclick=eliminar_experiencia() class="btn btn-danger" id="btn-delete-exp">Eliminar</button>'+
							'</div>'+
						'</div>'+
						'</div>'+
						'<!-- aqui iran apareciendo las diversas registro de formación o curso-->'+
						'<div id="registro_exp" style="margin-top: 20px">'+
								
						'<br>'+
					'</div>'+
				'</div>';
		$('#experiencia').append(html);
	});

	function agregar_experiencia()
	{
		con_exp++;
		var html = '';

		html = '<div class="row" id="exp-'+con_exp+'">'+
				'<div class="form-row">'+
					'<div class="form-group">'+
						'<div class="col-md-6">'+
							'<label for="empresa-'+con_exp+'">Empresa</label>'+
							'<input type="text" class="form-control" name="empresa-'+con_exp+'" id="empresa-'+con_exp+'">'+
						'</div>'+
						'<div class="col-md-6">'+
							'<label for="cargo-'+con_exp+'">Cargo desempeñado</label>'+
							'<input type="text" class="form-control" name="cargo-'+con_exp+'" id="cargo-'+con_exp+'">'+
						'</div>'+
					'</div>'+
				'</div>'+
				'<div class="form-row">'+
					'<div class="form-group">'+
						'<div class="col-md-8">'+
							'<label for="funciones-'+con_exp+'">Principales funciones</label>'+
							'<textarea class="form-control" name="funciones-'+con_exp+'" id="funciones-'+con_exp+'" cols="30" rows="1"></textarea>'+
						'</div>'+
					'</div>'+
				'</div></div>'+
				'<hr id="raya_exp-'+con_exp+'">';
		$('#registro_exp').append(html);
	}

	function eliminar_experiencia()
	{
		//vamos a eliminar el ultimo elemento creado
			$('#exp-'+con_exp+'').remove();
			$('#raya_exp-'+con_exp+'').remove();
			if(con_exp === 0){
				con_exp = 0;
			}else{
				con_exp--;
			}
			
			document.getElementsByName("num_experiencia")[0].value = con_exp;
	}


	//************************************Practica Laboral*************************************************
	$('#practica_no').click(function(){
			var html='<h3 id="msj_pra">Sin Practica laboral</h3>';
			$('#msj_pra').remove();//borramos el msj que se genera si se selecciona no
			$('#practica_registro').remove();
			con = 0;
			$('#practica').append(html);
	});


	$('#practica_si').click(function(){
		$('#msj_pra').remove();
		$('#practica_registro').remove();
		var html = '';

		html = '<div id="practica_registro">'+
					'<div  class="row">'+
						'<label class="col-md-5">*Ordenar la Practica laboral en orden cronólogico: Iniciar con el más reciente y terminar lista con el más antiguo.</label>'+
					'</div>'+
					'<div class="row">'+
						'<div class="form-group">'+
							'<div class="col-md-4">'+
								'<button type="button" onclick=agregar_practica() class="btn btn-info" id="btn-add-pra">Agregar Experiencia laboral</button>'+
								'<button type="button" style="margin-left: 20px" onclick=eliminar_practica() class="btn btn-danger" id="btn-delete-pra">Eliminar</button>'+
							'</div>'+
						'</div>'+
						'</div>'+
						'<!-- aqui iran apareciendo las diversas registro de formación o curso-->'+
						'<div id="registro_pra" style="margin-top: 20px">'+
								
						'<br>'+
					'</div>'+
				'</div>';
		$('#practica').append(html);
	});

	function agregar_practica()
	{
		con_pra++;
		var html = '';

		html = '<div class="row" id="pra-'+con_pra+'">'+
				'<div class="form-row">'+
					'<div class="form-group">'+
						'<div class="col-md-6">'+
							'<label for="empresa_pra-'+con_pra+'">Empresa</label>'+
							'<input type="text" class="form-control" name="empresa_pra-'+con_pra+'" id="empresa_pra-'+con_pra+'">'+
						'</div>'+
						'<div class="col-md-6">'+
							'<label for="cargo_pra-'+con_pra+'">Cargo desempeñado</label>'+
							'<input type="text" class="form-control" name="cargo_pra-'+con_pra+'" id="cargo_pra-'+con_pra+'">'+
						'</div>'+
					'</div>'+
				'</div>'+
				'<div class="form-row">'+
					'<div class="form-group">'+
						'<div class="col-md-8">'+
							'<label for="funciones_pra-'+con_pra+'">Principales funciones</label>'+
							'<textarea class="form-control" name="funciones_pra-'+con_pra+'" id="funciones_pra-'+con_pra+'" cols="30" rows="1"></textarea>'+
						'</div>'+
					'</div>'+
				'</div></div>'+
				'<hr id="raya_pra-'+con_pra+'">';
		$('#registro_pra').append(html);
	}

	function eliminar_practica()
	{
		//vamos a eliminar el ultimo elemento creado
			$('#pra-'+con_pra+'').remove();
			$('#raya_pra-'+con_pra+'').remove();
			if(con_pra === 0){
				con_pra = 0;
			}else{
				con_pra--;
			}
			
			document.getElementsByName("num_practica")[0].value = con_pra;
	}


//**************************************************** conocimientos **********************************************
	function agregar_conocimiento()
	{
		con_co++;
		var html='';

		html = '<div id="cono-'+con_co+'"><div class="row">'+
			'<div class="form-group">'+
				'<div class="col-md-5">'+
					'<label for="cono-'+con_co+'">conocimiento:</label>'+
					'<input class="form-control" id="cono-'+con_co+'" name="cono-'+con_co+'" type="text">'+
				'</div>'+
				'<div class="col-md-5">'+
					'<label>Nivel</label>'+
					'<select class="form-control" name="nivel_co-'+con_co+'" id="nivel_co-'+con_co+'">'+
						'<option value="basico">Basico</option>'+
						'<option value="intermedio">Intermedio</option>'+
						'<option value="avanzado">Avanzado</option>'+
					'</select>'+
				'</div>'+
			'</div>'+
		'</div></div>'+
		'<hr id="raya_co-'+con_co+'">';

		$('#conocimientos').append(html);
	}

	function eliminar_conocimiento()
	{
		//vamos a eliminar el ultimo elemento creado
		$('#cono-'+con_co+'').remove();
		$('#raya_co-'+con_co+'').remove();
		if(con_co === 0){
			con_co = 0;
		}else{
			con_co--;
		}
		
		document.getElementsByName("num_conocimiento")[0].value = con_co;
	}


	//**************************************************** habilidades **********************************************
	function agregar_habilidades()
	{
		con_ha++;
		var html='';

		html = '<div id="cono-'+con_ha+'"><div class="row">'+
			'<div class="form-group">'+
				'<div class="col-md-5">'+
					'<label for="cono-'+con_ha+'">Habilidad:</label>'+
					'<input class="form-control" id="hab-'+con_ha+'" name="cono-'+con_ha+'" type="text">'+
				'</div>'+
			'</div>'+
		'</div></div>'+
		'<hr id="raya_ha-'+con_ha+'">';

		$('#habilidades').append(html);
	}

	function eliminar_habilidades()
	{
		//vamos a eliminar el ultimo elemento creado
		$('#cono-'+con_ha+'').remove();
		$('#raya_ha-'+con_ha+'').remove();
		if(con_ha === 0){
			con_ha = 0;
		}else{
			con_ha--;
		}
		
		document.getElementsByName("num_habilidades")[0].value = con_ha;
	}

		//**************************************************** Referencia laboral **********************************************
	function agregar_referencialab()
	{
		con_la++;
		var html='';

		html = '<div id="ref_la-'+con_la+'">'+
				'<div class="row">'+
					'<div class="form-group">'+
						'<div class="col-md-5">'+
							'<label for="nombre_la-'+con_la+'">Nombre:</label>'+
							'<input class="form-control" id="nombre_la-'+con_la+'" name="nombre_la-'+con_la+'" type="text">'+
						'</div>'+
						'<div class="col-md-5">'+
							'<label for="apellido_la-'+con_la+'">Apellido:</label>'+
							'<input class="form-control" id="apellido_la-'+con_la+'" name="apellido_la-'+con_la+'" type="text">'+
						'</div>'+
					'</div>'+
				'</div>'+
				'<div class="row">'+
					'<div class="form-group">'+
						'<div class="col-md-3">'+
							'<label for="cargo_la-'+con_la+'">Cargo</label>'+
							'<input type="text" class="form-control" name="cargo_la-'+con_la+'" id="cargo_la-'+con_la+'">'+
						'</div>'+
						'<div class="col-md-3">'+
							'<label for="empresa_la-'+con_la+'">Empresa</label>'+
							'<input type="text" class="form-control" id="empresa_la-'+con_la+'"  name="empresa_la-'+con_la+'">'+
						'</div>'+
						'<div class="col-md-3">'+
							'<label for="correo_la-'+con_la+'">Correo</label>'+
							'<input type="text" class="form-control" id="correo_la-'+con_la+'"  name="correo_la-'+con_la+'">'+
						'</div>'+
						'<div class="col-md-3">'+
							'<label for="telefono_la-'+con_la+'">Telefono</label>'+
							'<input type="text" class="form-control" id="telefono_la-'+con_la+'"  name="telefono_la-'+con_la+'">'+
						'</div>'+
					'</div>'+
				'</div>'+
			'</div>'+
			'<hr id="raya_la-'+con_la+'">';

		$('#referencialab').append(html);
	}

	function eliminar_referencialab()
	{
		//vamos a eliminar el ultimo elemento creado
		$('#ref_la-'+con_la+'').remove();
		$('#raya_la-'+con_la+'').remove();
		if(con_la === 0){
			con_la = 0;
		}else{
			con_la--;
		}
		
		document.getElementsByName("num_refe_lab")[0].value = con_la;
	}

			//**************************************************** Referencia personal **********************************************
	function agregar_referenciaper()
	{
		con_per++;
		var html='';

		html = '<div id="ref_la-'+con_per+'">'+
				'<div class="row">'+
					'<div class="form-group">'+
						'<div class="col-md-5">'+
							'<label for="nombre_per-'+con_per+'">Nombre:</label>'+
							'<input class="form-control" id="nombre_per-'+con_per+'" name="nombre_per-'+con_per+'" type="text">'+
						'</div>'+
						'<div class="col-md-5">'+
							'<label for="apellido_per-'+con_per+'">Apellido:</label>'+
							'<input class="form-control" id="apellido_per-'+con_per+'" name="apellido_per-'+con_per+'" type="text">'+
						'</div>'+
					'</div>'+
				'</div>'+
				'<div class="row">'+
					'<div class="form-group">'+
						'<div class="col-md-3">'+
							'<label for="correo_per-'+con_per+'">Correo</label>'+
							'<input type="text" class="form-control" id="correo_per-'+con_per+'"  name="correo_per-'+con_per+'">'+
						'</div>'+
						'<div class="col-md-3">'+
							'<label for="telefono_per-'+con_per+'">Telefono</label>'+
							'<input type="text" class="form-control" id="telefono_per-'+con_per+'"  name="telefono_per-'+con_per+'">'+
						'</div>'+
					'</div>'+
				'</div>'+
			'</div>'+
			'<hr id="raya_per-'+con_per+'">';

		$('#referenciaper').append(html);
	}

	function eliminar_referenciaper()
	{
		//vamos a eliminar el ultimo elemento creado
		$('#ref_la-'+con_per+'').remove();
		$('#raya_per-'+con_per+'').remove();
		if(con_per === 0){
			con_per = 0;
		}else{
			con_per--;
		}
		
		document.getElementsByName("num_refe_per")[0].value = con_per;
	}
</script>
