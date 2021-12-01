@extends('layoutCliente')

@section('titulo','Servicios')

@section('contenido')
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
		</div>
	</div>
@endsection