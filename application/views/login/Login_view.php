 <div id="login-page">
    <div class="container">
      <form class="form-login" action="<?php echo base_url('ejemplo') ?>">
        <h2 class="form-login-heading">Iniciar sesión</h2>
        <div class="login-wrap">
          <input type="text" class="form-control" placeholder="Usuario" autofocus>
          <br>
          <input type="password" class="form-control" placeholder="contraseña">
          <label class="checkbox">
            <span class="pull-right">
            <a data-toggle="modal" href="<?php echo base_url('recuperar-password') ?>"> ¿Olvidaste tu contraseña?</a>
            </span>
            </label>
          <button class="btn btn-theme btn-block" href="#" type="submit"><i class="fa fa-lock"></i> Iniciar sesión</button>
          
        </div>
        
      </form>
    </div>
  </div>
