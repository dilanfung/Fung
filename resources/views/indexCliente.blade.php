@extends('layoutIndex')

@section('titulo','Inicio')

@section('contenido')
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
						<a class="nav-link js-scroll-trigger" href="indexCliente">Inicio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="CitasCliente">Citas</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="serviciosCliente">Servicios</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="feedbackCliente">Feedback</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="perfilCliente">Perfil</a>
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
  
	<section id="home" class="main-banner parallaxie" style="background: url('../uploads/mecanica.jpg')">
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

@endsection