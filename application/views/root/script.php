<script>
	$(document).ready(function(){

		

		//creamos la función keydown
		$('#usuario_login').keyup(function(){
			var usuario = $('#usuario_login').val();
			
			if(usuario == ''){
				$('#guardar').prop('disabled',true);
				$('#usuario_login').css('border-color','');
				$('#msj').html('');				
			}else{
				$.ajax({
					type: 'post',
					url: '<?php echo base_url()?>comprobar_usuario',
					data: 'usuario='+usuario,
					async: false,
					dataType: 'json',
					success: function(data){
						switch(data){
							case 0: 
								$('#usuario_login').css('border-color','green');
								$('#msj').html('<strong style="color: green">usuario valido</strong>');
								$('#guardar').prop('disabled',false);
							break;
							case 1: 
								$('#usuario_login').css('border-color','red');
								$('#msj').html('<strong style="color: red">usuario invalido</strong>');
								$('#guardar').prop('disabled',true);
							break;
						}
					}
				});
			}
		})
		
	});

	
</script>
