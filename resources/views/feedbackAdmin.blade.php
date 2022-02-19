@extends('layoutAdmin')

@section('titulo', 'Feedback')

@section('contenido')
	<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

	<div class="section-title text-center">
		<br><H2>Retroalimentaciones dadas por los usuarios</H2>
	</div>

    <table class="table table-striped">
		<thead>
			<tr>
				<th scope="col">ID</th>
				<th scope="col">Fecha</th>
				<th scope="col">Tipo</th>
				<th scope="col">Usuario</th>
				<th scope="col">Detalles</th>
			</tr>
		</thead>

		<tbody>
			@forelse($retroalimentaciones as $retroalimentacion)
				<tr>
					<td scope="row">{{ $retroalimentacion->id }}</td>
					<td>{{ $retroalimentacion->fecha }}</td>
					<td>{{ $retroalimentacion->categoria_rtr_nombre }}</td>
					<td>{{ $retroalimentacion->usuario_nombre }}</td>
					<td style="text-align: left;">
						<button data-toggle="modal" data-target="#modalInfo{{ $retroalimentacion->id }}" 
							class="button--save datatable-button fa-info">
						</button>
					</td>
				</tr>

				<div id="modalInfo{{ $retroalimentacion->id }}" class="modal modal-top fade">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<form id="add-event">
								<div class="modal-body">
									Correo de contacto: {{ $retroalimentacion->usuario_correo }} <br>
									<br>
									Mensaje:<br>
									{{ $retroalimentacion->mensaje }}
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			@empty
				No hay encuestas que mostrar.
			@endforelse
		</tbody>
	</table>

	<br>

	<div class="section-title text-center">
		<br><H3>Gráficos circulares sobre las encuestas de satisfacción</H3>
	</div>

	<br>

	@forelse($preguntas as $pregunta)
		<div class="section-title text-center">
			<br><H5>{{ $pregunta->pregunta }}</H5>
			<div id="piechart{{ $pregunta->id }}" style="width: 900px; height: 500px; margin: auto;"></div>
		</div>
		<div class="section-title text-center">
			<script type="text/javascript">
				google.charts.load('current', {'packages':['corechart']});
				google.charts.setOnLoadCallback(drawChart);
				function drawChart() {
					var data = google.visualization.arrayToDataTable([
						['Pregunta', '{{ $pregunta->pregunta }}'],
						['Puntuación: 1', {{ $pregunta->resultado1 }}],
						['Puntuación: 2', {{ $pregunta->resultado2 }}],
						['Puntuación: 3', {{ $pregunta->resultado3 }}],
						['Puntuación: 4', {{ $pregunta->resultado4 }}],
						['Puntuación: 5', {{ $pregunta->resultado5 }}]
					]);
					
					var options = {'title':'Promedio de respuestas de los clientes'};
					
					// Display the chart inside the <div> element with id="piechart"
					var chart = new google.visualization.PieChart(
						document.getElementById('piechart' + "{{ $pregunta->id }}"));
					chart.draw(data, options);
				}
			</script>
		</div>
	@empty
		No hay encuestas que mostrar.
	@endforelse
@endsection