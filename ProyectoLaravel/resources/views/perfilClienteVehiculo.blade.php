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
		<title>Perfil - FUNG Servicio Automotriz</title>
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
		<!-- Schedules CSS -->
		<link rel="stylesheet" href="../css/citas_style.css">
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
						  <a class="nav-link js-scroll-trigger" href="inventarioCliente.html">Inventario</a>
					</li>
					<li class="nav-item">
						  <a class="nav-link js-scroll-trigger" href="serviciosCliente.html">Servicios</a>
					</li>
					<li class="nav-item">
						  <a class="nav-link js-scroll-trigger" href="feedbackCliente.html">Feedback</a>
					</li>
					<li class="nav-item">
						  <a class="nav-link js-scroll-trigger" href="clientesCliente.html">Clientes</a>
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
				
		<div class="section-title text-center">
			<br><h3>Vehiculos</h3>
			
			<a href="perfilCliente"> <button class="sim-btn hvr-bounce-to-top">Volver al perfil</button> </a>


			
		</div>

		<table id="" class="table table-bordered" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th>ID</th>
					<th>Año</th>
					<th>Cilindrada</th>
					<th>Marca</th>
					<th>Modelo</th>
					<th>Placa</th>
					<th>Editar/Eliminar</th>
					
				</tr>
			</thead>
			<tbody>
				<tr>
				@forelse($vehiculos as $vehiculo)
					<td>{{$vehiculo->id}}</td>
					<td>{{$vehiculo->anio}}</td>
					<td>{{$vehiculo->cilindraje_motor}}</td>
					<td>{{$vehiculo->marca}}</td>
					<td>{{$vehiculo->modelo}}</td>
					<td>{{$vehiculo->placa}}</td>
					
					<td>
					

				
					<button data-toggle="modal" data-target="#modalEditarVehiculo" class="button--save datatable-button fa-edit"></button>
				
					@if (session('error'))
						<div class="alert alert-danger">{{ session('error') }}</div>
									@endif
					<form method="POST" action="{{ url('/perfilClienteVehiculo/'.$vehiculo->id) }}">
							@csrf 
							{{ @method_field('DELETE') }}
							<button onclick="return confirm('¿Esta seguro que desea eliminar este vehiculo?')" class="button--delete datatable-button fa-trash"></button>
							
						
							


						</form>
					</td>
				</tr>
			@empty
				No hay datos que mostrar.
			@endforelse
			
		</tbody>
	</table>

	

	<div id="modalEditarVehiculo" class="modal modal-top fade">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<form id="add-event" method="POST" action="{{ url('/perfilClienteVehiculo/'.$vehiculo->id) }}">
					@csrf
					{{ @method_field('PATCH') }}
					<div class="modal-body">
						
					<div class="form-group">
							<label>IDVehiculo</label>
							<select class="form-control"  id="id" name="id">
								@forelse($vehiculos as $vehiculo)
									<option value="{{$vehiculo->id}}">{{$vehiculo->id}}</option>
								@empty
									No hay carros disponibles.
								@endforelse
							</select>
						</div>

					

						<div class="form-group">
							<label>Año</label>
							<input type="text" class="form-control" name="anio" id="anio">
						</div>
						<div class="form-group">
							<label>Cilindrada</label>
							<input type="text" class="form-control" name="cilindraje_motor" id="cilindraje_motor">
						</div>
						<div class="form-group">
							<label>Marca</label>
							<input type="text" class="form-control" name="marca" id="marca">
						</div>
						<div class="form-group">
							<label>Modelo</label>
							<input type="text" class="form-control" name="modelo" id="modelo">
						</div>
						<div class="form-group">
							<label>Placa</label>
							<input type="text" class="form-control" name="placa" id="placa">
						</div>



					
					
					<div class="modal-footer">
						<button type="submit" class="btn btn-primary" >Guardar</button>
						<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>        
					</div>
				</form>
			</div>
		</div>
	</div>

		<!--Fin contenido-->

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
		<!--<script src="js/contact_me.js"></script>-->
		<!-- ALL PLUGINS -->
		<script src="../js/custom.js"></script>
		<script src="../js/jquery.vide.js"></script>
		<!-- Citas anterior -->
		<!--<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>-->
		<script src='https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js'></script>
		<script src='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js'></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.22.2/moment.js'></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.9.0/fullcalendar.min.js'></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/js/datepicker.js'></script>
		<script src='https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/js/i18n/datepicker.en.js'></script>
		<script  src="../js/citas_script.js"></script>
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