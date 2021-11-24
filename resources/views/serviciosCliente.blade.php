<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
     <!-- Site Metas -->
    <title>Servicios - FUNG Servicio Automotriz</title>  
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
				<a class="nav-link js-scroll-trigger" href="indexCliente.html">Inicio</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link js-scroll-trigger" href="citasCliente.html">Citas</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link js-scroll-trigger" href="serviciosCliente.html">Servicios</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link js-scroll-trigger" href="feedbackCliente.html">Feedback</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link js-scroll-trigger" href="perfilCliente.html">Perfil</a>
			  </li>
			  <li class="nav-item">
				<a class="nav-link js-scroll-trigger" href="index.html">Cerrar Sesión</a>
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

	<div id="services" class="section lb">
		<div class="container">
			<div class="section-title text-center">
				<h1>Servicios</h1>
				<p>Estos son algunos de los servicios que se ofrecen en el lubricentro</p>
			</div>
			<div class="row">
				@forelse($servicios as $servicio)
					<div class="col-md-4">
						<div class="services-inner-box">
							<h2>{{ $servicio->nombre }}</h2>

							<p>Tiempo Estimado: {{ $servicio->tiempo_estimado }}</p>
							<p>Precio Estimado(En colones): ₡{{ $servicio->costo }}</p>
						</div>
					</div>
				@empty
					No hay datos que mostrar.
				@endforelse
			</div>
		</div><!-- end container -->
	</div><!-- end section -->
	
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