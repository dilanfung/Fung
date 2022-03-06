<!DOCTYPE html>
<html lang="en">
	<head>
		<title>@yield('titulo') - FUNG Servicio Automotriz</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<meta name="keywords" content="">
		<meta name="description" content="">
		<meta name="author" content="">
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<link rel="stylesheet" href="{{URL::asset('css/bootstrap.min.css')}}">
		<link rel="stylesheet" href="{{URL::asset('css/style.css')}}">
		<link rel="stylesheet" href="{{URL::asset('css/responsive.css')}}">
		<link rel="stylesheet" href="{{URL::asset('css/custom.css')}}">
		<link rel="stylesheet" href="{{URL::asset('css/citas_style.css')}}">
		<link rel="shortcut icon" href="{{URL::asset('images/LofoFungU.ico')}}" type="image/x-icon" />
		<link rel="apple-touch-icon" href="{{URL::asset('images/apple-touch-icon.png')}}">
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
				  	<img class="img-fluid" src="../images/LogoFung.png" alt="" />
			  	</a>
			  	<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					<i class="fa fa-bars"></i>
			  	</button>
			  	<div class="collapse navbar-collapse" id="navbarResponsive">
					<a id="navbarDropdown" class="nav-link dropdown-toggle"  >{{ Auth::user()->name }}</a>
					<ul class="navbar-nav text-uppercase ml-auto">
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="home">Inicio</a>
						</li>
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="CitasAdmin">Citas</a>
						</li>
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="articulos">Inventario</a>
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
							<a class="nav-link js-scroll-trigger" href="{{ route('logout') }}"
								onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
								{{ __('Cerrar Sesión') }}
							</a>
							<form id="logout-form" action="{{ route('logout'); }}" method="POST" class="d-none">
								@csrf
							</form>
						</li>
					</ul>
			  	</div>
			</div>
		</nav>
		
		<!-- JS -->
		<script src="{{ URL::asset('js/all.js') }}"></script>
		<script src="{{ URL::asset('js/jquery.easing.1.3.js') }}"></script> 
		<script src="{{ URL::asset('js/parallaxie.js') }}"></script>
		<script src="{{ URL::asset('js/headline.js') }}"></script>
		<script src="{{ URL::asset('js/jqBootstrapValidation.js') }}"></script>
		<script src="{{ URL::asset('js/custom.js') }}"></script>
		<script src="{{ URL::asset('js/jquery.vide.js') }}"></script>
		<script src="{{ URL::asset('js/citas_script.js') }}"></script>
		<script src="{{ URL::asset('js/jquery.min.js') }}"></script>
		<script src="{{ URL::asset('js/modernizr.js') }}"></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
		<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.js'></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js'></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/js/datepicker.js'></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/js/i18n/datepicker.en.js'></script>
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
		<!-- JS -->

		<section id="home" class="main-banner small-main-banner parallaxie"  style="background: url('../uploads/mecanica.jpg')" >
			<div class="heading small-heading">
				<h1></h1>
				<h3 class="cd-headline clip is-full-width">
					<span>Bienvenido: "Admin"</span>
				</h3>
			</div>
		</section>

		<!-- ALERTS -->
		@if (session('message'))
			<div class="alert alert-{{ session('alert-type') }}">
				{{ session('message') }}
			</div>
		@endif
		<!-- ALERTS -->

		@yield('contenido')

		
	</body>
</html>