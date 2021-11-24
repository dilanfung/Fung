<!DOCTYPE html>
<html lang="en">
<head>
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
	
	<meta charset="UTF-8">
	<title>Reporte de encuesta de satisfacción</title>
	<a class="navbar-brand js-scroll-trigger" href="#page-top">
		<img class="img-fluid" src="../../public/images/LogoFung.png" alt="" />
	</a>

	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700&display=swap" rel="stylesheet">
	<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css'>
	<link rel='stylesheet' href='https://maxcdn.icons8.com/fonts/line-awesome/1.1/css/line-awesome-font-awesome.min.css'>
	<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/air-datepicker/2.2.3/css/datepicker.css'>
	<link rel="stylesheet" href="../css/inventario_style.css">

</head>

<body>
   <!-- Navigation -->
   <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
	<div class="container">
	  <a class="navbar-brand js-scroll-trigger" href="#page-top">
		  <img class="img-fluid" src="../../public/images/LogoFung.png" alt="" />
	  </a>
	  <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
		Menu
		<i class="fa fa-bars"></i>
	  </button>
	  <div class="collapse navbar-collapse" id="navbarResponsive">
		<ul class="navbar-nav text-uppercase ml-auto">
		  <li class="nav-item">
			  <a class="nav-link js-scroll-trigger active" href="indexCliente.html">Home</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link js-scroll-trigger" href="citasAdmin.html">Citas</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link js-scroll-trigger" href="inventarioAdmin.html">Inventario</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link js-scroll-trigger" href="serviciosAdmin.html">Servicios</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link js-scroll-trigger" href="feedbackAdmin.html">Feedback</a>
			</li>
			<li class="nav-item">
			  <a class="nav-link js-scroll-trigger" href="clientesAdmin.html">Clientes</a>
			</li>
			<li class="nav-item">
				<a class="nav-link js-scroll-trigger" href="perfilAdmin.html">Perfil</a>
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
		<span>Bienvenido: "Admin"</span>
	  </h3>
	</div>
  </section>


	<br>
	<br>
	<br>
	
	

	<center>
		<div id="piechart"></div>
		<div id="piechart2"></div>
		<div id="piechart3"></div>
		<div id="piechart4"></div>
		<div id="piechart5"></div>
		<div id="piechart6"></div>
	
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
	
	<script type="text/javascript">
	// Load google charts
	google.charts.load('current', {'packages':['corechart']});
	google.charts.setOnLoadCallback(drawChart);
	
	// Draw the chart and set the chart values
	function drawChart() {
	  var data = google.visualization.arrayToDataTable([
	  ['Pregunta', 'Promedio'],
	  ['1', 10],
	  ['2', 10],
	  ['3', 10],
	  ['4', 10],
	  ['5', 10]
	]);
	
	  // Optional; add a title and set the width and height of the chart
	  var options = {'title':'Reporte de la encuesta de satisfacción', 'width':1000, 'height':800};
	
	  // Display the chart inside the <div> element with id="piechart"
	  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
	  var chart2 = new google.visualization.PieChart(document.getElementById('piechart2'));
	  var chart3 = new google.visualization.PieChart(document.getElementById('piechart3'));
	  var chart4 = new google.visualization.PieChart(document.getElementById('piechart4'));
	  var chart5 = new google.visualization.PieChart(document.getElementById('piechart5'));
	  var chart6 = new google.visualization.PieChart(document.getElementById('piechart6'));
	  chart.draw(data, options);
	  chart2.draw(data, options);
	  chart3.draw(data, options);
	  chart4.draw(data, options);
	  chart5.draw(data, options);
	  chart6.draw(data, options);
	}
	</script>
	</center>


    <!-- ALL JS FILES -->
    <script src="../js/all.js"></script>
	<!-- Camera Slider -->
	<script src="../js/jquery.mobile.customized.min.js"></script>
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