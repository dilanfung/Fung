<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito';
            }
        </style>
    </head>
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
		<title>FUNG Servicio Automotriz</title>
		<meta name="keywords" content="">
		<meta name="description" content="">
		<meta name="author" content="">

		<!-- Site Icons -->
		<link rel="shortcut icon" href="../../public/images/LofoFungU.ico" type="image/x-icon" />
		<link rel="apple-touch-icon" href="../../public/images/apple-touch-icon.png">
		<link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>

		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<!-- Site CSS -->
		<link rel="stylesheet" href="../css/style.css">
		<!-- Responsive CSS -->
		<link rel="stylesheet" href="../css/responsive.css">
		<!-- Custom CSS -->
		<link rel="stylesheet" href="../css/custom.css">
		<script src="../js/modernizr.js"></script> <!-- Modernizr -->

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
				<button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" 
					data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					<i class="fa fa-bars"></i>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav text-uppercase ml-auto">
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger active" href="#home">Inicio</a>
						</li>
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="#about">Sobre nosotros</a>
						</li>
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="#services">Servicios</a>
						</li>
						<li class="nav-item">
							<a class="nav-link js-scroll-trigger" href="#contact">Contacto</a>
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
					<div class="btn-ber">
						<a class="get_btn hvr-bounce-to-top" href="{{ route('register') }}">Inicia sesión ó regístrate</a>
					</div>
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
				<a href="https://wa.me/50683852416" class="social-media fa-whatsapp"></a>
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
        
</html>
