<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Retroalimentación - FUNG Servicio Automotriz</title>  
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- Site Icons -->
    <link rel="shortcut icon" href="../../public/images/LofoFungU.ico" type="image/x-icon" />
    <link rel="apple-touch-icon" href="../../public/images/apple-touch-icon.png">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <!-- Site CSS -->
    <link rel="stylesheet" href="../css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" href="../css/responsive.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="../css/custom.css">
	  <script src="../js/modernizr.js"></script> <!-- Modernizr -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>
<body id="page-top" class="politics_version">

    <!-- LOADER -->
    <div id="preloader">
        <div id="main-ld">
			<div id="loader"></div>  
		</div>
    </div><!-- end loader -->
    <!-- END LOADER -->
	
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="#page-top">
          <img class="img-fluid" src="../../public/images/LogoFung.png" alt="" />
        </a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="indexCliente.blade.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="citasCliente.blade.php">Citas</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="serviciosCliente.blade.php">Servicios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="feedbackCliente.blade.php">Feedback</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="perfilCliente.blade.php">Perfil</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="index.blade.php">Cerrar Sesión</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <section id="home" class="main-banner small-main-banner parallaxie" style="background: url('../../public/uploads/mecanica.jpg')">
      <div class="heading small-heading">
        <h1></h1>
        <h3 class="cd-headline clip is-full-width">
          <span>Bienvenido: "Cliente"</span>
        </h3>
      </div>
    </section>
   
    <div id="contact" class="section db">
      <div class="container">
        <div class="section-title text-center">
          <h3>Envío de retroalimentación</h3>
          <p>En este apartado el cliente podra enviar una recomendación o retroalimentación tanto como para el lubricentro como para el sistema.</p>
        </div><!-- end title -->

        <div class="row">
          <div class="col-md-12">
            <div class="contact_form">
              <div id="message"></div>
              <form id="contactForm" name="sentMessage" novalidate="novalidate">
                <div class="row">
                  <div class="container">
                    <div class="form-group">
                      <label for="comment">Tipo de retroalimentación</label><br>
                      <select name="select" id="select" class="form-select">
                        <option value="app">Retroalimentación de la aplicación</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="comment">Mensaje</label>
                      <textarea class="form-control" rows="5" id="comment"></textarea>
                    </div>
                  </div>
                  <div class="clearfix"></div>
								  <div class="col-lg-12 text-center">
									  <div id="success"></div>
									  <button id="Enviarretroalimentaciónbtn" class="sim-btn hvr-bounce-to-top" type="submit">Enviar retroalimentación</button>
								  </div>
							  </div>
						  </form>
            </div>
          </div><!-- end col -->
        </div><!-- end row -->
      </div><!-- end container -->
    </div><!-- end section -->

    <div id="contact" class="section db">
      <div class="container">
        <div class="section-title text-center">
          <h3>Encuesta de satisfacción</h3>
          <p>¿Está disfrutando de nuestros servicios? Lo invitamos a llenar nuestra encuesta de satisfacción</p>
          <br>
          <a href="encuestaSatisfaccionCliente.blade.php" class="sim-btn hvr-bounce-to-top">Hacer encuesta</a>
        </div><!-- end title -->
      </div>
    </div>

    <!-- ALL JS FILES -->
    <script src="../js/all.js"></script>
    <!-- Camera Slider -->
    <!--<script src="js/jquery.mobile.customized.min.js"></script>-->
    <script src="../js/jquery.easing.1.3.js"></script> 
    <script src="../js/parallaxie.js"></script>
    <script src="../js/headline.js"></script>
    <!-- Contact form JavaScript -->
    <script src="../js/jqBootstrapValidation.js"></script>
    <script src="../js/contact_me.js"></script>
    <!-- ALL PLUGINS -->
    <script src="../js/custom.js"></script>
    <script src="../js/jquery.vide.js"></script>
  </body>
</html>