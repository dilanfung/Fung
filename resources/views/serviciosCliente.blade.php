@extends('layoutCliente')

@section('titulo','Servicios')

@section('contenido')
	<div id="services" class="section lb">
		<div class="container">
			<div class="section-title text-center">
				<h2>Servicios</h2>
				<p>Estos son algunos de los servicios que se ofrecen en el lubricentro</p>
			</div>
			<div class="row">
				@forelse($servicios as $servicio)
					<div class="col-md-4">
						<div class="services-inner-box">
							<h2>{{ $servicio->nombre }}</h2>
							<p>Tiempo estimado: {{ $servicio->tiempo_estimado }}</p>
							<p>Precio estimado (en colones): ₡{{ $servicio->costo }}</p>
						</div>
					</div>
				@empty
					No hay datos que mostrar.
				@endforelse
			</div>
		</div>
	</div>

	<div id="services" class="section lb">
		<div class="container">
			<div class="section-title text-center">
				<h2>Promociones</h2>
				<p>Estos son algunos de los servicios que se ofrecen en el lubricentro en promoción</p>
			</div>
			<div class="row">
				@forelse($promos as $promo)
					<div class="col-md-4">
						<div class="services-inner-box">
							<h2>{{ $promo->nombre }}</h2>
							<p>Tiempo estimado: {{ $promo->tiempo_estimado }}</p>
							<p>Precio estimado (en colones): ₡{{ $promo->costo }}</p>
						</div>
					</div>
				@empty
					No hay datos que mostrar.
				@endforelse
			</div>
		</div>
	</div>
@endsection