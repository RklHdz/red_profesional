<script>
	$(document).ready(function(){

		$('#guardar').prop('disabled',true);

		//si esta seleccionado participante
		$('#rol_login').change(function(){
			var rol = $(this).val();
			//verificamos si el valor es participante
			if(rol=='participante')
			{
				$('#p_especialidad').append('<label id="t_especialidad">Especialidad</label><input type="text" class="form-control" id="especialidad_usuario" name="especialidad_usuario"  placeholder="Digite su especialidad" value="<?php echo set_value('especialidad_usuario'); ?>">');
				$('#p_grupo').append('<label id="t_grupo">Grupo</label><input type="text" class="form-control" id="grupo_usuario" name="grupo_usuario"  placeholder="Digite su grupo" value="<?php echo set_value('grupo_usuario'); ?>">');
				$('#p_nivel').append('<label id="t_nivel">Nivel</label><input type="text" class="form-control" id="nivel_usuario" name="nivel_usuario"  placeholder="Digite su nivel" value="<?php echo set_value('nivel_usuario'); ?>">');
			}
			else
			{
				$('#t_especialidad').remove();
				$('#especialidad_usuario').remove();

				$('#t_grupo').remove();
				$('#grupo_usuario').remove();

				$('#t_nivel').remove();
				$('#nivel_usuario').remove();
			}
		});

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
