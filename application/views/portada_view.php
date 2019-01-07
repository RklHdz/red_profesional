<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Red Profesional</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,400i,600,700|Raleway:300,400,400i,500,500i,700,800,900" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="<?php echo base_url('assets/lib/bootstrap/css/bootstrap.min.css')?>" rel="stylesheet">

  <!-- Libraries CSS Files -->
  <link href="<?php echo base_url('assets/lib/nivo-slider/css/nivo-slider.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/lib/owlcarousel/owl.carousel.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/lib/owlcarousel/owl.transitions.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/lib/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/lib/animate/animate.min.css') ?>" rel="stylesheet">
  <link href="<?php echo base_url('assets/lib/venobox/venobox.css') ?>" rel="stylesheet">

  <!-- Nivo Slider Theme -->
  <link href="<?php echo base_url('assets/css/nivo-slider-theme.css') ?>" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="<?php echo base_url('assets/css/style2.css') ?>" rel="stylesheet">

  <!-- Responsive Stylesheet File -->
  <link href="<?php echo base_url('assets/css/responsive.css') ?>" rel="stylesheet">
</head>

<body data-spy="scroll" data-target="#navbar-example">

  <div id="preloader"></div>

  <header>
    <!-- header-area start -->
    <div id="sticker" class="header-area">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12">

            <!-- Navigation -->
            <nav class="navbar navbar-default">
              <!-- Brand and toggle get grouped for better mobile display -->
              <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target=".bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                  </button>
                <!-- Brand -->
                <a class="navbar-brand page-scroll sticky-logo" href="index.html">
                  <h1>Red<span>Profesional</span></h1>
                </a>
              </div>
              <!-- Collect the nav links, forms, and other content for toggling -->
              <div class="collapse navbar-collapse main-menu bs-example-navbar-collapse-1" id="navbar-example">
                <ul class="nav navbar-nav navbar-right">
                  <li class="active">
                    <a class="page-scroll" href="#home"><i class="fa fa-home"></i> Home</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#quienes"><i class="fa fa-users"></i>¿Quienes somos?</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#mision"><i class="fa fa-trophy"></i>Misión</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="#centros"><i class="fa fa-graduation-cap" ></i>Centros de Formación</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="<?php echo base_url('mapa') ?>"><i class="fa fa-globe"></i>Mapa</a>
                  </li>
                  <li>
                    <a class="page-scroll" href="<?php echo base_url('login') ?>"><i class="fa fa-sign-in "></i>Login</a>
                  </li>
                </ul>
              </div>
              <!-- navbar-collapse -->
            </nav>
            <!-- END: Navigation -->
          </div>
        </div>
      </div>
    </div>
    <!-- header-area end -->
  </header>
  <!-- header end -->

<!--INICIA CAROUSEL-->
  <!-- Start Slider Area -->
  <div id="home" class="slider-area">
    <div class="bend niceties preview-2">
      <div id="ensign-nivoslider" class="slides">
        <img src="<?php echo base_url('assets/img/slider/slider1.jpg') ?>" alt="" title="#slider-direction-1" />
        <img src="<?php echo base_url('assets/img/slider/slider2.jpg') ?>" alt="" title="#slider-direction-2" />
        <img src="<?php echo base_url('assets/img/slider/slider3.jpg') ?>" alt="" title="#slider-direction-3" />
      </div>

      <!-- direction 1 -->
      <div id="slider-direction-1" class="slider-direction slider-one">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 2 -->
      <div id="slider-direction-2" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content text-center"> 
              </div>
            </div>
          </div>
        </div>
      </div>

      <!-- direction 3 -->
      <div id="slider-direction-3" class="slider-direction slider-two">
        <div class="container">
          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="slider-content">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Slider Area -->
  <!--FINALIZA CAROUSEL-->

  <!-- INICIO DE QUIENES SOMOS -->
  <div id="quienes" class="about-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>¿Quienes somos?</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- single-well start-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-left">
            <div class="single-well">
              <a href="#">
                  <img src="<?php echo base_url('assets/img/contenido/1.jpg') ?>" alt="">
                </a>
            </div>
          </div>
        </div>
        <!-- single-well end-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-middle">
            <div class="single-well">
              <a href="#">
                <h2 class="sec-head">Nosotros somos</h3>
              </a>
              <p> Somos los encargados de poder generar la conexion entre los participantes y</p>
                <p>los administrativos con el fin de tener un acercamiento profesional, educacional y</p>
                  <p>mucho mas personal.</p>

              <p>Una de nuestras principales finalidades es poder presentar una solución que </p>
                <p>pueda crear una promocion</p>
                  <p>laboral por medio de pasantias, las cuales ofrecen las empresas que generan</p>
                    <p>dicha oportunidad para todos los participantes</p>

              <p><h4><b>Ofrecemos</b></h4></p>

                  Crear un protocolo de conexión educativo, profesional o laboral con todas las partes involucradas en el sistema de <b>Red Profesional</b>
                  
                <ul>
                <li>
                  <i class="fa fa-check"></i> Acercamiento profesional con empresas
                </li>
                <li>
                  <i class="fa fa-check"></i> Realización de usuario unico
                <li>
                  <i class="fa fa-check"></i> Renovacion de cv
                </li>
                <li>
                  <i class="fa fa-check"></i> Renovacion de cv
                </li>
                <li>
                  <i ></i> 
                </li>
                <li>
                  <i ></i> 
                </li>
                <li>
                  <i ></i> 
                </li>
                <li>
                  <i ></i> 
                </li>
                <li>
                  <i ></i> 
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- End col-->
      </div>
    </div>
  </div>
  <!-- FIN DE QUIENES SOMOS-->

 <!-- INICIO DE MISION -->
  <div id="mision" class="about-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Nuestra Misión</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- single-well start-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-left">
            <div class="single-well">
              <a href="#">
                  <img src="<?php echo base_url('assets/img/contenido/2.jpg') ?>" alt="" >
                </a>
            </div>
          </div>
        </div>
        <!-- single-well end-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-middle">
            <div class="single-well">
              <a href="#">
                <h2 class="sec-head">Nuestra Misión</h3>
              </a>

              <p>Crear un protocolo de conexión educativo, profesional o laboral con todas las partes</p>
                <p>involucradas en el sistema de <b>Red Profesional</b></p>
              <p>Crear un protocolo de conexión educativo, profesional o laboral con todas las partes</p>
                <p>involucradas en el sistema de <b>Red Profesional</b></p>
              <p>Crear un protocolo de conexión educativo, profesional o laboral con todas las partes</p>
                <p>involucradas en el sistema de <b>Red Profesional</b></p><br><br><br><br>

                 <ul>
                <li>
                  <i ></i> 
                </li>
                <li>
                  <i ></i> 
                <li>
                  <i ></i> 
                </li>
                <li>
                  <i ></i> 
                </li>
                <li>
                  <i ></i> 
                </li>
                <li>
                  <i ></i> 
                </li>
                <li>
                  <i ></i> 
                </li>
                <li>
                  <i ></i> 
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- End col-->
      </div>
    </div>
  </div>
  <!-- FIN DE MISION-->


  <!-- INICIO DE QUIENES SOMOS -->
  <div id="centros" class="about-area area-padding">
    <div class="container">
      <div class="row">
        <div class="col-md-12 col-sm-12 col-xs-12">
          <div class="section-headline text-center">
            <h2>Centros de Formacion</h2>
          </div>
        </div>
      </div>
      <div class="row">
        <!-- single-well start-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-left">
            <div class="single-well">
              <a href="#">
                  <img src="<?php echo base_url('assets/img/contenido/3.jpg') ?>" alt="">
                </a>
            </div>
          </div>
        </div>
        <!-- single-well end-->
        <div class="col-md-6 col-sm-6 col-xs-12">
          <div class="well-middle">
            <div class="single-well">
              <a href="#">
                <h2 class="sec-head">Nosotros somos</h3>
              </a>
              <p>Los centros de formacion en los que participantes se reunen durante las semanas </p>
                <p>laborales del año, están altamente capacitados y adecuados para todas las</p>
                  <p>necesidades que lleguen a surgir durante todo el tiempo en que se desarrolle </p><p>
                    dicho curso.</p><br><br>

                <ul>
                <li>
                  <i ></i> 
                </li>
                <li>
                  <i ></i> 
                <li>
                  <i ></i> 
                </li>
                <li>
                  <i></i>
                </li>
                <li>
                  <i ></i> 
                </li>
                <li>
                  <i ></i> 
                </li>
                <li>
                  <i ></i> 
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!-- End col-->
      </div>
    </div>
  </div>
  <!-- FIN DE QUIENES SOMOS-->
  
  <!-- Start Footer bottom Area -->
  <footer>
    <div class="footer-area-bottom">
      <div class="container">
        <div class="row">
          <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="copyright text-center">
              <p>
                &copy; Copyright <strong>RedProfesional</strong>. Todos Los Derechos Reservados
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </footer>

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- JavaScript Libraries -->
  <script src="<?php echo base_url('assets/lib/jquery/jquery.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/lib/bootstrap/js/bootstrap.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/lib/owlcarousel/owl.carousel.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/lib/venobox/venobox.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/lib/knob/jquery.knob.js') ?>"></script>
  <script src="<?php echo base_url('assets/lib/wow/wow.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/lib/parallax/parallax.js') ?>"></script>
  <script src="<?php echo base_url('assets/lib/easing/easing.min.js') ?>"></script>
  <script src="<?php echo base_url('assets/lib/nivo-slider/js/jquery.nivo.slider.js') ?>" type="text/javascript"></script>
  <script src="<?php echo base_url('assets/lib/appear/jquery.appear.js') ?>"></script>
  <script src="<?php echo base_url('assets/lib/isotope/isotope.pkgd.min.js') ?>"></script>

  <!-- Contact Form JavaScript File -->
  <script src="contactform/contactform.js"></script>

  <script src="<?php echo base_url('assets/js/main.js') ?>"></script>

</body>

</html>
