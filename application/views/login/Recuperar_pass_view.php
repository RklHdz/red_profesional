   <div id="login-page">
    <div class="container">
      <form class="rest-pass" action=" <?php echo base_url()?>Login_controller/generar_password" method="POST">
        <h2 class="rest-pass-heading">Restaurar contraseña</h2>

				<div class="text-center">
        	<p>
        		Entendemos que perdiste tu contraseña de la <strong>RED PROFESIONAL</strong>
        	</p>
        	<p>
        		¡Pero no te preocupes! Puedes usar el siguiente formulario para obtener una nueva contraseña.
        	</p>
        </div>



        <div class="login-wrap" align="center">
        	<label >Introduzca su usuario asignado, para reestablecer su contraseña.</label><br>
            <?php
                $correcto = $this->session->flashdata('correcto');
                 if ($correcto) 
                      {
            ?>
                        <b><span style="color: red" id="registroCorrecto"><?= $correcto ?></span></b>
                      <?php
                        }
                        ?>
         
          <input type="text" class="form-control" placeholder="usuario" autofocus="off" autocomplete="off" name="mail">
          <br>
          <button class="btn btn-theme " href="#" type="submit"><i class="fa fa-paper-plane"></i> Recuperar contraseña</button>
          
        <br><br>
        <div align="left">
        <a style="padding: 0px; margin: 0px"  href="<?php echo base_url()?>">REGRESAR LOGIN</a></div>
      </form>
      </div>
    </div>
  </div>
