 <div id="login-page">
    <div class="container">
      <form class="form-login" action="" id="loginForm" method=POST>
        <h2 class="form-login-heading">Iniciar sesión</h2>
        <div class="login-wrap">
          <input type="text" class="form-control" placeholder="Usuario" autofocus name="username" id="username">
          <br>
          <input type="password" class="form-control" placeholder="contraseña" name="password" id="password">
          <label class="checkbox">
            <span class="pull-right">
            <a data-toggle="modal" href="<?php echo base_url('recuperar-password') ?>"> ¿Olvidaste tu contraseña?</a>
            </span>
            </label>
          <button class="btn btn-theme btn-block" type="button" onclick="verificar_credenciales()"><i class="fa fa-lock"></i> Iniciar sesión</button>
          <a href="<?php echo base_url() ?>" style="color:#1cc7b0;"><h4>página publica</h4></a>
        </div>
        
      </form>
    </div>
  </div>
