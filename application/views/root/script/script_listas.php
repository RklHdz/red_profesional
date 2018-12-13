<script>
	$(document).ready(function(){
		//$('#tabla').DataTable();
	});

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
			break;
			case 'ex_participante':
			break;
		}
	}

</script>
