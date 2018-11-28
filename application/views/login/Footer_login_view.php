<!-- jquery
		============================================ -->
	<script src=" <?php echo base_url('assets/js/vendor/jquery-1.12.4.min.js') ?> "></script>
	<!-- bootstrap JS
		============================================ -->
	<script src=" <?php echo base_url('assets/js/bootstrap.min.js') ?> "></script>
	<!-- wow JS
		============================================ -->
	<script src=" <?php echo base_url('assets/js/wow.min.js') ?> "></script>
	<!-- price-slider JS
		============================================ -->
	<script src=" <?php echo base_url('assets/js/jquery-price-slider.js') ?> "></script>
	<!-- meanmenu JS
		============================================ -->
	<script src=" <?php echo base_url('assets/js/jquery.meanmenu.js') ?> "></script>
	<!-- owl.carousel JS
		============================================ -->
	<script src=" <?php echo base_url('assets/js/owl.carousel.min.js') ?> "></script>
	<!-- sticky JS
		============================================ -->
	<script src=" <?php echo base_url('assets/js/jquery.sticky.js') ?> "></script>
	<!-- scrollUp JS
		============================================ -->
	<script src=" <?php echo base_url('assets/js/jquery.scrollUp.min.js') ?> "></script>
	<!-- mCustomScrollbar JS
		============================================ -->
	<script src=" <?php echo base_url('assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js') ?> "></script>
	<script src=" <?php echo base_url('assets/js/scrollbar/mCustomScrollbar-active.js') ?> "></script>
	<!-- metisMenu JS
		============================================ -->
	<script src=" <?php echo base_url('assets/js/metisMenu/metisMenu.min.js') ?> "></script>
	<script src=" <?php echo base_url('assets/js/metisMenu/metisMenu-active.js') ?> "></script>
	<!-- tab JS
		============================================ -->
	<script src=" <?php echo base_url('assets/js/tab.js') ?> "></script>
	<!-- icheck JS
		============================================ -->
	<script src=" <?php echo base_url('assets/js/icheck/icheck.min.js') ?> "></script>
	<script src=" <?php echo base_url('assets/js/icheck/icheck-active.js') ?> "></script>
	<!-- plugins JS
		============================================ -->
	<script src=" <?php echo base_url('assets/js/plugins.js') ?> "></script>
	<!-- main JS
		============================================ -->
	<script src=" <?php echo base_url('assets/js/main.js') ?> "></script>
	<!-- tawk chat JS
		============================================ -->
	<!--<script src=" <?php echo base_url('assets/js/tawk-chat.js') ?> "></script>-->
	<!--sweetalert.-->
	<script src="<?php echo base_url('assets/js/sweetalert.min.js');?> "></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/2.1.2/sweetalert.min.js"></script>
	<script src = " https://unpkg.com/sweetalert/dist/sweetalert.min.js " > </script> 

	</body>

</html>


<script type="text/javascript">

	function verificar_credenciales()
	{
    	if($('#username').val()==''||$('#password').val()=='')
    	{
      		swal('Ni le ocre perrito, para donde va?, lleve los campos, no pueden estar vacios');
    	}else 
    	{
			$.ajax({
			type:"POST",
			url:'<?php echo site_url();?>Login_controller/iniciar_sesion', 
			data: $('#loginForm').serialize(),
			success: function(data)
			{
				if(data===1){
					swal("OHH YEAH!! Bienvenido, pase adelante",'Excelente','success'); 
				}

				else if(data===0){
					swal("Ohh :c, lo sentimos, la contraseña o usuario no son validos"); 
				}
			}
			});

    	}
  	}

</script>
