<script>
	$(document).ready(function(){
		//$('#tabla').DataTable();
	});

	function ver_ex(id)
	{
		$('#ver').modal();
		//creamos una función ajax para poder obtener los datos
		$.ajax({
			type: 'post',
			url: '<?php echo base_url()?>detalle_ex',
			data: {id: id},
			async: false,
			dataType: 'json',
			success: function(data){
				if(data)
				{
					//agregamos los datos a cada input
					$('#nombre_ex').val(data[0].nombre_usuario);
					$('#apellido_ex').val(data[0].apellido_usuario);
					$('#correo_ex').val(data[0].correo_usuario);
				}
				else
				{

				}
			}
		});
	}

	function eliminar(id)
	{
		$('#eliminar_participante').modal();
		$('#id_eliminar').val(id);
	}
	function editar(id,rol)
	{
		console.log(id);console.log(rol);
		switch(rol)
		{
			case 'participante':
				//vamos a abrir el modal para editar participante
				$('#editar_participante').modal();
				//hacemo una función ajax para obtener los datos a editar
				$.ajax({
					type: 'post',
					url: '<?php echo base_url()?>editar_usuario',
					data: {id: id, rol: rol},
					async: false,
					dataType: 'json',
					success: function(data){
						if(data)
						{
							$('#id').val(id);
							$('#edit_nombre_usuario').val(data[0].nombre_usuario);
							$('#edit_apellido_usuario').val(data[0].apellido_usuario);
							$('#edit_correo_usuario').val(data[0].correo_usuario);
							$('#edit_especialidad_usuario').val(data[0].especialidad_usuario);
							$('#edit_grupo_usuario').val(data[0].grupo_usuario);
							$('#edit_nivel_usuario').val(data[0].nivel_usuario);
						}
						else
						{
							alert('error');
						}
					}
				});
			break;
			case 'administrativo':
				//vamos a abrir el modal para editar administrativo
				$('#editar_administrativo').modal();
				//hacemo una función ajax para obtener los datos a editar
				$.ajax({
					type: 'post',
					url: '<?php echo base_url()?>editar_usuario',
					data: {id: id, rol: rol},
					async: false,
					dataType: 'json',
					success: function(data){
						if(data)
						{
							$('#id_adm').val(id);
							$('#edit_nombre_administrativo').val(data[0].nombre_usuario);
							$('#edit_apellido_administrativo').val(data[0].apellido_usuario);
							$('#edit_correo_administrativo').val(data[0].correo_usuario);
							$('#edit_cargo_administrativo').val(data[0].cargo_usuario);
						}
						else
						{
							alert('error');
						}
					}
				});
			break;
			case 'ex_participante':
			break;
		}
	}

</script>
