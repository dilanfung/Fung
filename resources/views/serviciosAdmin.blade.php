@extends('layoutAdmin')

@section('titulo','Servicios')

@section('contenido')
	<div class="section-title text-center">
		<br><h3>Mantenimiento de servicios</h3>
		<button data-toggle="modal" data-target="#modalCrear" class="sim-btn hvr-bounce-to-top">Crear servicio</button>
	</div>
		
	<div class="section-title text-center">
		<br><h3>Mantenimiento de promociones de servicios</h3>
		<a href="promocionesAdmin"><button class="sim-btn hvr-bounce-to-top">Crear/Ver promociones</button> </a>
	</div>

	<table id="" class="table table-striped table-bordered" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>ID</th>
				<th>Nombre</th>
				<th>Descripción</th>
				<th>Precio Estimado</th>
				<th>Tiempo Estimado</th>					
				<th>Editar / Eliminar</th>
			</tr>
		</thead>
		<tbody>
			@forelse($servicios as $servicio)
				<tr>
					<td>{{ $servicio->id }}</td>
					<td>{{ $servicio->nombre }}</td>
					<td>{{ $servicio->descripcion }}</td>
					<td>₡{{ $servicio->costo }}</td>
					<td>{{ $servicio->tiempo_estimado }}</td>
					<td>
						<button data-toggle="modal" data-target="#modalEditar{{ $servicio->id }}" class="button--save datatable-button fa-edit"></button>
						@if (session('error'))
							<div class="alert alert-danger">{{ session('error') }}</div>
						@endif
						<form method="POST" action="{{ url('/serviciosAdmin/'.$servicio->id) }}">
							@csrf 
							{{ @method_field('DELETE') }}
							<button onclick="return confirm('¿Esta seguro que desea eliminar este servicio?')" class="button--delete datatable-button fa-trash"></button>
						</form>
					</td>
				</tr>

				<div id="modalEditar{{ $servicio->id }}" class="modal modal-top fade">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<form method="POST" action="{{ url('/serviciosAdmin/'.$servicio->id) }}" id="add-event">
								@csrf
								{{ @method_field('PATCH') }}
								<div class="modal-body">
									<div class="form-group">
										<label for="NombreServ">Nombre del servicio</label>
										<input type="text" class="form-control" id="nombre" name="nombre" 
											placeholder="" value="{{ $servicio->nombre }}" required>
									</div>
									<div class="form-group">
										<label for="DescServ">Descripción</label>
										<input type="text" class="form-control" id="descripcion" name="descripcion" 
											placeholder="" value="{{ $servicio->descripcion }}" required>
									</div>
									<div class="form-group">
										<label for="precioEsti">Precio estimado</label>
										<input type="text" class="form-control" id="costo" name="costo" 
											placeholder="" value="{{ $servicio->costo }}" required>
									</div>
									<div class="form-group">
										<label for="TiempoEsti">Tiempo estimado</label>
										<input type="text" class="form-control" id="tiempo_estimado" name="tiempo_estimado" 
											placeholder="" value="{{ $servicio->tiempo_estimado }}" required>
									</div>
								</div>
								<div class="modal-footer">
									<button type="submit" class="btn btn-success">Guardar</button>
									<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
								</div>
							</form>
						</div>
					</div>
				</div>
			@empty
				No hay datos que mostrar.
			@endforelse
		</tbody>
	</table>

	<div id="modalCrear" class="modal modal-top fade">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<form method="POST" action="{{ url('/serviciosAdmin') }}" id="add-event">
					@csrf
					<div class="modal-body">
						<div class="form-group">
							<label for="NombreServ">Nombre del servicio</label>
							<input type="text" class="form-control" id="nombre" 
								placeholder="Mecánica general" name="nombre" required>
						</div>
						<div class="form-group">
							<label for="DescServ">Descripción</label>
							<input type="text" class="form-control" id="descripcion" 
								placeholder="Este servicio consiste..." name="descripcion" required>
						</div>
						<div class="form-group">
							<label for="precioEsti">Precio estimado</label>
							<input type="text" class="form-control" id="costo" 
								placeholder="200,000 a 500,000" name="costo" required>
						</div>
						<div class="form-group">
							<label for="TiempoEsti">Tiempo estimado</label>
							<input type="text" class="form-control" id="tiempo_estimado" 
								placeholder="2 horas" name="tiempo_estimado" required>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-success">Guardar</button>
						<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection