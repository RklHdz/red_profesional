<script>
	$(document).ready(function(){

		$('#guardar').prop('disabled',true);

		$('#p_especialidad').append('<label id="l_cargo">Cargo administrativo</label><input type="text"  class="form-control" id="cargo_usuario" name="cargo_usuario" placeholder="Digite el cargo del administrativo" value="<?php echo set_value('cargo_usuario'); ?>"> ');

		//si esta seleccionado participante
		$('#rol_login').change(function(){
			var rol = $(this).val();
			//verificamos si el valor es participante
			if(rol=='participante')
			{
				//eliminamos el campo para el administrativo
				$('#l_cargo').remove();
				$('#cargo_usuario').remove();

				$('#p_especialidad').append('<label id="t_especialidad">Especialidad</label><select class="form-control" name="especialidad_usuario" id="especialidad_usuario"><option value="JAVA">JAVA</option><option value="PHP">PHP</option></select>');
				$('#p_grupo').append('<label id="t_grupo">Grupo</label><input type="text" class="form-control" id="grupo_usuario" name="grupo_usuario"  placeholder="Digite su grupo" >');
				$('#p_nivel').append('<label id="t_nivel">Nivel</label><input type="text" class="form-control" id="nivel_usuario" name="nivel_usuario"  placeholder="Digite el nivel" >');
			}
			else
			{
				//eliminamos los campos para el participante
				$('#t_especialidad').remove();
				$('#especialidad_usuario').remove();

				$('#t_grupo').remove();
				$('#grupo_usuario').remove();

				$('#t_nivel').remove();
				$('#nivel_usuario').remove();

				//agregamos el campo cargo_usuario para el administrativo
				$('#p_especialidad').append('<label id="l_cargo">Cargo administrativo</label><input type="text"  class="form-control" id="cargo_usuario" name="cargo_usuario" placeholder="Digite el cargo del administrativo">');
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
