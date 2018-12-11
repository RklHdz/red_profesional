<script>
	$(document).ready(function(){
		$('#tabla').DataTable();
	});


	function editar(id,rol)
	{
		switch(rol)
		{
			case 'participante':
				//vamos a abrir el modal para editar participante
				$('#editar_participante').modal();
			break;
			case 'administrativo':
				//vamos a abrir el modal para editar administrativo
				$('#editar_administrativo').modal();
			break;
		}
	}

</script>
