<script>
	function ver_grupo(id,rol)
	{
		$('#ver_grupo').modal();
		//petición ajax
		$.ajax({
			type: 'post',
			url: '<?php echo base_url()?>editar_usuario',
			data: {id: id, rol: rol},
			async: false,
			dataType: 'json',
			success: function(data){
				console.log(data);
				if(data)
				{
					$('#id').val(id);
					$('#nombre').val(data[0].nombre_usuario);
					$('#apellido').val(data[0].apellido_usuario);
					$('#correo').val(data[0].correo_usuario);
					$('#DUI').val(data[0].dui_usuario);
					$('#NIT').val(data[0].nit_usuario);
					$('#tel1').val(data[0].telefono1_usuario);
					$('#direccion').val(data[0].direccion_usuario);
					$('#fecha_na').val(data[0].fecha_nacimiento_usuario);
				}
				else
				{
					alert('error');
				}
			}
		});
	}
</script>
