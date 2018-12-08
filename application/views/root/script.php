<script>
	$(document).ready(function(){
		//creamos la función keydown
		$('#usuario_login').keyup(function(){
			var usuario = $(this).val();
			console.log(usuario);
			$.ajax({
				url: '<?php echo base_url()?>comprobar_usuario',
				data: 'usuario =' + usuario,
				async: false,
				dataType: 'json',
				success: function(data){
					
					if(data){
						$('#usuario_login').css('border-color','#c42d15');

						console.log(data);
					}else{
						$('#usuario_login').css('border-color','#33b65a');
						console.log(data);
					}		
				}
			});
			
		});
	});
</script>
