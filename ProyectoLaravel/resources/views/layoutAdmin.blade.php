<!DOCTYPE html>
<html lang="en">
	<head>
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

		<!-- Basic -->
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
		<!-- Mobile Metas -->
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
	
		<!-- Site Metas -->
		<title>@yield('titulo') - FUNG Servicio Automotriz</title>
		<meta name="keywords" content="">
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Site Icons -->
		<link rel="shortcut icon" href="{{ URL::asset('images/LofoFungU.ico') }}" type="image/x-icon" />
		<link rel="apple-touch-icon" href="{{ URL::asset('images/apple-touch-icon.png') }}">
		<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{ URL::asset('css/bootstrap.min.css') }}">
		<!-- Site CSS -->
		<link rel="stylesheet" href="{{ URL::asset('css/style.css') }}">
		<!-- Responsive CSS -->
		<link rel="stylesheet" href="{{ URL::asset('css/responsive.css') }}">
		<!-- Custom CSS -->
		<link rel="stylesheet" href="{{ URL::asset('css/custom.css') }}">
		<script src="{{ URL::asset('js/modernizr.js') }}"></script>
		<!-- Schedules CSS -->
		<link rel="stylesheet" href="{{ URL::asset('css/citas_style.css') }}">
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
					<img class="img-fluid" src="{{URL::asset('images/LogoFung.png')}}" alt="" />
				</a>
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					<i class="fa fa-bars"></i>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav text-uppercase ml-auto">
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="indexAdmin">Inicio</a>
						</li>
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="CitasAdmin">Citas</a>
						</li>
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="inventarioAdmin">Inventario</a>
						</li>
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="serviciosAdmin">Servicios</a>
						</li>
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="feedbackAdmin">Feedback</a>
						</li>
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="clientesAdmin">Clientes</a>
						</li>
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="perfilAdmin">Perfil</a>
						</li>
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="index">Cerrar Sesión</a>
						</li>
					</ul>
			  	</div>
			</div>
		</nav>
		
		<section id="home" class="main-banner small-main-banner parallaxie" >
			<div class="heading small-heading">
				<h1></h1>
				<h3 class="cd-headline clip is-full-width">
					<span>Bienvenido: "Admin"</span>
				</h3>
			</div>
		</section>

		@yield('contenido')

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
		<script src="{{ URL::asset('js/all.js') }}"></script>
		<!-- Camera Slider -->
		<!--<script src="js/jquery.mobile.customized.min.js"></script>-->
		<script src="{{ URL::asset('js/jquery.easing.1.3.js') }}"></script> 
		<script src="{{ URL::asset('js/parallaxie.js') }}"></script>
		<script src="{{ URL::asset('js/headline.js') }}"></script>
		<!-- Contact form JavaScript -->
		<script src="{{ URL::asset('js/jqBootstrapValidation.js') }}"></script>
		<!--<script src="js/contact_me.js"></script>-->
		<!-- ALL PLUGINS -->
		<script src="{{ URL::asset('js/custom.js') }}"></script>
		<script src="{{ URL::asset('js/jquery.vide.js') }}"></script>
		<!-- Citas anterior -->
		<!--<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>-->
		<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
		<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.js'></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js'></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/js/datepicker.js'></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/js/i18n/datepicker.en.js'></script>
		<script src="{{ URL::asset('js/citas_script.js') }}"></script>
		<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
		<script src='https://cdn.datatables.net/1.10.12/js/jquery.dataTables.min.js'></script>
		<script src='https://cdn.datatables.net/buttons/1.2.2/js/dataTables.buttons.min.js'></script>
		<script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.colVis.min.js'></script>
		<script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.html5.min.js'></script>
		<script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.print.min.js'></script>
		<script src='https://cdn.datatables.net/1.10.12/js/dataTables.bootstrap.min.js'></script>
		<script src='https://cdn.datatables.net/buttons/1.2.2/js/buttons.bootstrap.min.js'></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/jszip/2.5.0/jszip.min.js'></script>
		<script src='https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/vfs_fonts.js'></script>
		<script src='https://cdn.rawgit.com/bpampuch/pdfmake/0.1.18/build/pdfmake.min.js'></script>
	</body>
</html>