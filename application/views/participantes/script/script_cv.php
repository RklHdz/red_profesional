<script>
		
		//paso 2
		var con=0;
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
	$('#formacion_si').click(function(){
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
		/*<div class="row" id="form-"> <div class="form-row">
									<div class="form-group col-md-6">
										<label for="nombre_form-'+con_form+'">Nombre de la formación o curso</label>
										<input type="text" class="form-control" id="nombre_form-'+con_form+'" name="nombre_form-'+con_form+'" placeholder="Título">
									</div>
									<div class="form-group col-md-6">
										<label for="institucion_form-'+con_form+'">Institución</label>
										<input type="text" class="form-control" id="institucion_form-'+con_form+'" name="institucion_form-'+con_form+'" placeholder="Institución donde se realizó la formación o curso">
									</div>
								</div>
								<div class="form-row">
									<div class="form-group col-md-4">
										<label for="anio_form-'+con_form+'">Año</label>
										<input type="text" class="form-control" id="anio_form-'+con_form+'" name="anio_form-'+con_form+'" placeholder="Año que se realizo la formación o curso">
									</div>
									<div class="form-group col-md-4">
										<label for="tiempo_estudio_educ-">Tiempo de Duración</label>
										<input type="text" class="form-control" id="tiempo_estudio_educ-'+con_form+'" name="tiempo_estudio_educ-'+con_form+'" placeholder="Tiempo de duración de la formación o curso">
									</div>
									<div class="form-group col-md-4">
										<label for="tipo_form-'+con_form+'">Tipo</label>
										<select class="form-control" name="tipo_form-'+con_form+'" id="tipo_form-'+con_form+'">
											<option value="formacion">Formación Técnica</option>
											<option value="curso">Curso Técnico</option>
										</select>
									</div>
								</div>
							</div>
						<hr id="raya_form-'+con_form+'">*/
	}
</script>
