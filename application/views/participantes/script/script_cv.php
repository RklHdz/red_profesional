<script>
	$('#radioDUI').click(function(){
		
		$('#dui_label').remove();
		$('#dui_input').remove();

		$('#minor_label').remove();
		$('#minor_input').remove();

		var  html='';
		html ='<label id="dui_label" for="dui">DUI</label>'+
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

</script>
