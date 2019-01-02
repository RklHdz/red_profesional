  <!-- js placed at the end of the document so the pages load faster -->
  <script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
  <!--BACKSTRETCH-->
  <!-- You can use an image of whatever size. This script will stretch to fit in any screen size.-->
  <script type="text/javascript" src="<?php echo base_url('assets/js/jquery.backstretch.min.js') ?>"></script>
  <script>
    $.backstretch("<?php echo base_url('assets/img/fondo/1.jpg') ?>", {
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
          swal("Lo sentimos, la contraseña o usuario no son validos"); 
        }

        if(data==1){
        	//redireccionar para el root
          window.location.replace("<?php echo site_url();?>agregar-usuario"); 
        }

        if(data==2){
        	//redireccionar para el participante
          window.location.replace("<?php echo site_url();?>participante"); 
        }

        if(data==3){
        	//redireccionar para el administrativo
          window.location.replace("<?php echo site_url();?>administrativo"); 
        }

      }
      });

      }
    }

</script>
