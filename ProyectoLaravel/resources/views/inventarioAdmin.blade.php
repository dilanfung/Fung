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
						  <a class="nav-link js-scroll-trigger" href="citasAdmin.blade.php">Citas</a>
					</li>
					<li class="nav-item">
						  <a class="nav-link js-scroll-trigger" href="inventarioAdmin.blade.php">Inventario</a>
					</li>
					<li class="nav-item">
						  <a class="nav-link js-scroll-trigger" href="serviciosAdmin.blade.php">Servicios</a>
					</li>
					<li class="nav-item">
						  <a class="nav-link js-scroll-trigger" href="feedbackAdmin.blade.php">Feedback</a>
					</li>
					<li class="nav-item">
						  <a class="nav-link js-scroll-trigger" href="clientesAdmin.blade.php">Clientes</a>
					</li>
					<li class="nav-item">
						<a class="nav-link js-scroll-trigger" href="perfilAdmin.blade.php">Perfil</a>
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
					<span>Bienvenido: "Admin"</span>
				</h3>
			</div>
		</section>

		<!--Contenido-->
		<div class="section-title text-center">
			<br><h3>Mantenimiento de servicios</h3>
			<button class="sim-btn hvr-bounce-to-top" data-toggle="modal" data-target="#modalArticulo">Crear artículo</button>
			<button class="sim-btn hvr-bounce-to-top" data-toggle="modal" data-target="#modalCategoriaArticulo">Crear categoría de artículo</button>
			<button class="sim-btn hvr-bounce-to-top"><a class="btn-link" href="crearProveedorAdmin.html">Crear proveedor</a></button>
			<button class="sim-btn hvr-bounce-to-top" data-toggle="modal" data-target="#modalExistencias">Consultar existencias</button>
		</div>

		<div id="modalArticulo" class="modal modal-top fade">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<form id="add-event">
						<div class="modal-body">
							<h4>Favor ingresar datos del artículo</h4>
							<div class="form-group">
								<label>Código del artículo</label>
								<input type="text" class="form-control" name="" value="001">
							</div>
							<div class="form-group">
								<label>Nombre</label>
								<input type="text" class="form-control" name="">
							</div>
							<div class="form-group">
								<label>Categoría</label>
								<select name="categoria">
									<option>Limpieza</option>
									<option>Herramienta</option>
									<option>Repuesto</option>
								</select>
							</div>
							<div class="form-group">
								<label>Ubicación</label>
								<input type='text' class="form-control" name="">
							</div>
							<div class="form-group">
								<label>Cantidad</label>
								<input type='text' class="form-control" name="">
							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-primary">Guardar</button>
							<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	
		<div id="modalCategoriaArticulo" class="modal modal-top fade">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<form id="add-event">
						<div class="modal-body">
							<h4>Favor ingresar datos de la categoría articulos a crear</h4>
							<div class="form-group">
								<label>Código de la categoría</label>
								<input type="text" class="form-control" name="" value="001">
							</div>
							<div class="form-group">
								<label>Nombre</label>
								<input type="text" class="form-control" name="">
							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-primary">Guardar</button>
							<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
		<div id="modalExistencias" class="modal modal-top fade">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<form id="add-event">
						<div class="modal-body">
							<h4>Ingrese el código de artículo a consultar</h4>
							<div class="form-group">
								<label>Código del Articulo</label>
								<input type="text" class="form-control" name="" value="">
								<br />
								<label>Existencias</label>
								<input type="text" class="form-control" name="" value="">
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	
		<!-- tabla -->
		<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th>Código de artículo</th>
					<th>Nombre</th>
					<th>Categoría</th>
					<th>Ubicación</th>
					<th>Cantidad</th>
					<th>Editar/eliminar</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>001</td>
					<td>Destornillador</td>
					<td>Herramienta</td>
					<td>Estante 1</td>
					<td>2</td>
					<td>
						<button data-toggle="modal" data-target="#modalArticulo" class="button--save datatable-button fa-edit"></button>
						<button class="button--delete datatable-button fa-trash"></button>
					</td>
				</tr>
				<tr>
					<td>002</td>
					<td>Martillo</td>
					<td>Herramienta</td>
					<td>Estante 1</td>
					<td>4</td>
					<td>
						<button data-toggle="modal" data-target="#modalArticulo" class="button--save datatable-button fa-edit"></button>
						<button class="button--delete datatable-button fa-trash"></button>
					</td>
				</tr>
				<tr>
					<td>003</td>
					<td>Escoba</td>
					<td>Limpieza</td>
					<td>Pasillo 2</td>
					<td>2</td>
					<td>
						<button data-toggle="modal" data-target="#modalArticulo" class="button--save datatable-button fa-edit"></button>
						<button class="button--delete datatable-button fa-trash"></button>
					</td>
				</tr>
				<tr>
					<td>004</td>
					<td>Llave inglesa</td>
					<td>Herramienta</td>
					<td>Estante 2</td>
					<td>3</td>
					<td>
						<button data-toggle="modal" data-target="#modalArticulo" class="button--save datatable-button fa-edit"></button>
						<button class="button--delete datatable-button fa-trash"></button>
					</td>
				</tr>
			</tbody>
		</table>
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
		<script src="../js/contact_me.js"></script>
		<!-- ALL PLUGINS -->
		<script src="../js/custom.js"></script>
		<script src="../js/jquery.vide.js"></script>

	</body>
</html>