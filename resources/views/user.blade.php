<!DOCTYPE html>
<html lang="en">

    <!-- Basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">   
   
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
 
	<!-- Site Metas -->
	<title>FUNG Servicio Automotriz</title>
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

		<a id="navbarDropdown" class="nav-link dropdown-toggle"  >{{ Auth::user()->name }}</a>
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
                <a class="nav-link js-scroll-trigger" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                              document.getElementById('logout-form').submit();">
                 {{ __('Cerrar Sesion') }}
             </a>

<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
   @csrf
		
			</li>
		</ul>
	  </div>
	</div>
  </nav>
  
  <section id="home" class="main-banner parallaxie" style="background: url('../../public/uploads/mecanica.jpg')">
	<div class="heading">
		<h1>Bienvenido a FUNG Servicio Automotriz</h1>			
		<h3 class="cd-headline clip is-full-width">
			<span>Servicios Como: </span>
			<span class="cd-words-wrapper">
				<b class="is-visible">Mantenimientos Preventivo</b>
				<b>Mecánica Rápida</b>
				<b>Diagnóstico Vehícular</b>
				<b>RTV</b>
			</span>
		</h3>
	</div>
</section>

<div id="about" class="section lb">
	<div class="container">
		<div class="section-title text-center">
			<h3>Sobre Nosotros</h3>
		</div>
		<div class="row text-center">
		<div class="col-md-4">
			<div class="services-inner-box">
				<h2>Misión</h2>
				<p>FUNG Servicio automotriz es una empresa que se encarga de brindar soluciones a los 
					problemas que presentan los vehículos automotrices se aplica tanto reparación como 
					mantenimiento preventivo y correctivo.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="services-inner-box">
				<h2>Visión</h2>
				<p>Nuestra visión es mantener un servicio de calidad a un precio competitivo, innovar en soluciones 
					para nuestros clientes y crear sistemas digitales para la mejora de los servicios que ofrecemos.</p>
			</div>
		</div>
		<div class="col-md-4">
			<div class="services-inner-box">
				<h2>Valores</h2>
				<p>-Pasión: estar comprometidos con el corazón y la mente en lo que hacemos.</p>
				<p>-Responsabilidad: cumplimiento a las obligaciones con cautela en cada decisión. </p>
				<p>-Integridad: ser transparentes.</p>
				<p>-Calidad: búsqueda de la excelencia.</p>
				<p>-Sinceridad: tener veracidad y sencillez.</p>
			</div>
		</div>
		</div>
	</div>
</div>

<div id="services" class="section lb">
	<div class="container">
		<div class="section-title text-center">
			<h3>Servicios</h3>
			<p>Estos son algunos de los servicios que se ofrecen en el lubricentro</p>
		</div>
		<div class="row">
			<div class="col-md-4">
				<div class="services-inner-box">
					<div class="ser-icon">
						<i class="flaticon-process"></i>
					</div>
					<h2>Revisión completa</h2>
					<p>Revisión general del vehiculo, esta opción es en general para ver el 
						estado de un vehículo ya sea para la compra del mismo, para un día 
						a día o para una revisión preRTV.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="services-inner-box">
					<div class="ser-icon">
						<i class="flaticon-process"></i>
					</div>
					<h2>Cambio de Aceite</h2>
					<p>Este servicio se basa en el cambio de filtro de aceite y del aceite a 
						elección del cliente (aceite de motor).</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="services-inner-box">
					<div class="ser-icon">
						<i class="flaticon-process"></i>
					</div>
					<h2>Cambio de llantas</h2>
					<p>Este servicio va desde la rotación de los neumáticos hasta el reemplazo 
						de las 4 o más llantas del vehículo.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="services-inner-box">
					<div class="ser-icon">
						<i class="flaticon-process"></i>
					</div>
					<h2>Afinamiento</h2>
					<p>El afinamiento es un proceso que comprende el cambio de filtros, limpieza 
						de inyectores, reemplazo de bujías, cambio de líquidos como el de freno, 
						el de dirección y engrasamiento de ciertos componentes.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="services-inner-box">
					<div class="ser-icon">
						<i class="flaticon-process"></i>
					</div>
					<h2>Cambio de bujías</h2>
					<p>Este es el proceso donde se sustituyen las bujías o popularmente conocidas 
						candelas del vehículo.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="services-inner-box">
					<div class="ser-icon">
						<i class="flaticon-process"></i>
					</div>
					<h2>Limpieza de la inyección</h2>
					<p>Este proceso es la limpieza del cuerpo de inyección desde el cono hasta 
						los inyectores de gasolina.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="services-inner-box">
					<div class="ser-icon">
						<i class="flaticon-process"></i>
					</div>
					<h2>Cambio de radiador</h2>
					<p>Se basa en el reemplazo de un radiador con fugas o por que se desee 
						mejorar el enfriamiento.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="services-inner-box">
					<div class="ser-icon">
						<i class="flaticon-process"></i>
					</div>
					<h2>RTV</h2>
					<p>Se ofrece el servicio de llevar su vehículo a RTV.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="services-inner-box">
					<div class="ser-icon">
						<i class="flaticon-process"></i>
					</div>
					<h2>Overhaul</h2>
					<p>El overhaul es un proceso donde básicamente se reconstruye el motor 
						de un vehículo debido a varias circunstancias.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="services-inner-box">
					<div class="ser-icon">
						<i class="flaticon-process"></i>
					</div>
					<h2>Ajuste de frenos</h2>
					<p>Este servicio se basa en el ajuste de las 4 llantas a nivel de frenos 
						además del freno de mano.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="services-inner-box">
					<div class="ser-icon">
						<i class="flaticon-process"></i>
					</div>
					<h2>Cambio de pastillas de frenos</h2>
					<p>Se realiza el cambio de las pastillas del cuerpo de frenado.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="services-inner-box">
					<div class="ser-icon">
						<i class="flaticon-process"></i>
					</div>
					<h2>Cambio conjunto clutch</h2>
					<p>Se realiza el cambio de conjunto, lleva plato, disco y rol.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="services-inner-box">
					<div class="ser-icon">
						<i class="flaticon-process"></i>
					</div>
					<h2>Cambio de faja de distribución</h2>
					<p>Se realiza el cambio de faja de distribución debido a la compra de un 
						vehículo usado o un vehículo que alcanza cierto kilometraje.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="services-inner-box">
					<div class="ser-icon">
						<i class="flaticon-process"></i>
					</div>
					<h2>Relleno de líquidos</h2>
					<p>Este servicio es el rellenado de ciertos líquidos que puede que por el 
						tiempo les haga falta un poco.</p>
				</div>
			</div>
			<div class="col-md-4">
				<div class="services-inner-box">
					<div class="ser-icon">
						<i class="flaticon-process"></i>
					</div>
					<h2>Cambio completo de líquidos</h2>
					<p>Este servicio comprende el cambio de todos los aceites excepto el de motor 
						y el de caja de cambios.</p>
				</div>
			</div>
		</div>
	</div><!-- end container -->
</div><!-- end section -->

<div id="contact" class="section db text-align-center">
	<div class="section-title text-center">
		<h3>Contacto</h3>
	</div>
	<div class="container">
		<a href="https://www.facebook.com/FUNGHONDA" class="social-media fa-facebook"></a>
		<a href="wa.me/50683852416" class="social-media fa-whatsapp"></a>
	</div>
</div>

<div class="text-align-center">
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3929.485201598103!2d-84.04744138466826!3d9.976719376170735!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8fa0e5c25aed3e9f%3A0xc13bf92e0a73fe4a!2sFUNG%20Servicio%20Automotriz!5e0!3m2!1sen!2scr!4v1628439058270!5m2!1sen!2scr" width="1000" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
</div>

<br>
<div class="copyrights">
	<div class="container">
		<div class="footer-distributed">
			<div class="footer-center">
				<p class="footer-links">
					<!--<a href="#">Inicio</a>
					<a href="#services">Servicios</a>
					<a href="#about">Sobre Nosotros</a>
					<a href="#contact">Contacto</a>-->
				</p>
				<p class="footer-company-name">Todos los derechos reservados &copy; 2021 FUNG Servicio Automotriz</p>
			</div>
		</div>
	</div>
</div>

<a href="#" id="scroll-to-top" class="dmtop global-radius"><i class="fa fa-angle-up"></i></a>	

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