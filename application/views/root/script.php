<script>
	$(document).ready(function(){
		//creamos la función keydown
		
	});

	function verificar(){
		var usuario = $('#usuario_login').val();
		console.log(usuario);
		$.ajax({
			url: '<?php echo base_url()?>comprobar_usuario',
			data: {usuario: usuario},
			async: false,
			dataType: 'json',
			success: function(data){
				switch(data){
					case 0: 
						alert('0');
					break;
					case 1: 
						alert('1');
					break;
				}
			}
		});
	}
</script>
