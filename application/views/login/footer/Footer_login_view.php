  <!-- js placed at the end of the document so the pages load faster -->
  <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.backstretch.min.js') ?>"></script>
  <script>
    $.backstretch("<?php echo base_url('assets/img/fondo/login-bg.jpg') ?>", {
      speed: 500
    });
  </script>
</body>

</html>

<script type="text/javascript">

  function verificar_credenciales()
  {
      if($('#username').val()==''||$('#password').val()=='')
      {
          swal('Llene los campos, no pueden estar vacios');
      }else 
      {
      $.ajax({
      type:"POST",
      url:'<?php echo site_url();?>Login_controller/iniciar_sesion', 
      data: $('#loginForm').serialize(),
      success: function(data)
      {
        if(data==0){
          swal("Ohh :c, lo sentimos, la contraseña o usuario no son validos"); 
        }

        if(data==1){

          window.location.replace("<?php echo site_url();?>agregar-usuario"); 
        }

        if(data==2){

          window.location.replace("<?php echo site_url();?>Login_controller/vista_participante"); 
        }

      }
      });

      }
    }

</script>
