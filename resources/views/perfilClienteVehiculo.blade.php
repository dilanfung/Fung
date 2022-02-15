@extends('layoutCliente')

@section('titulo','Vehículo')

@section('contenido')
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
			@forelse($vehiculos as $vehiculo)
				<tr>
					<td>{{$vehiculo->id}}</td>
					<td>{{$vehiculo->anio}}</td>
					<td>{{$vehiculo->cilindraje_motor}}</td>
					<td>{{$vehiculo->marca}}</td>
					<td>{{$vehiculo->modelo}}</td>
					<td>{{$vehiculo->placa}}</td>
					<td>
						<button data-toggle="modal" data-target="#modalEditarVehiculo{{$vehiculo->id}}" class="button--save datatable-button fa-edit"></button>
						@if (session('error'))
							<div class="alert alert-danger">{{ session('error') }}</div>
						@endif
						<form method="POST" action="{{ url('/perfilClienteVehiculo/'.$vehiculo->id) }}">
							@csrf 
							{{ @method_field('DELETE') }}
							<button onclick="return confirm('¿Esta seguro que desea eliminar este vehiculo?')" class="button--delete datatable-button fa-trash"></button>
						</form>
					</td>

					<div id="modalEditarVehiculo{{$vehiculo->id}}" class="modal modal-top fade">
						<div class="modal-dialog modal-dialog-centered">
							<div class="modal-content">
								<form id="add-event" method="POST" action="{{ url('/perfilClienteVehiculo/'.$vehiculo->id) }}">
									@csrf
									{{ @method_field('PATCH') }}
									<div class="modal-body">
										<div class="form-group">
											<label>ID</label>
											<input type="text" class="form-control"  name="id" value="{{ old('id', $vehiculo->id) }}" readonly disabled />
										</div>										

										<div class="form-group">
											<label>Año</label>
											<input type="text" class="form-control" name="anio" id="anio" value="{{ old('anio', $vehiculo->anio) }}">
										</div>
										<div class="form-group">
											<label>Cilindrada</label>
											<input type="text" class="form-control" name="cilindraje_motor" id="cilindraje_motor" value="{{ old('cilindraje_motor', $vehiculo->cilindraje_motor) }}">
										</div>
										<div class="form-group">
											<label>Marca</label>
											<input type="text" class="form-control" name="marca" id="marca" value="{{ old('marca', $vehiculo->marca) }}">
										</div>
										<div class="form-group">
											<label>Modelo</label>
											<input type="text" class="form-control" name="modelo" id="modelo" value="{{ old('modelo', $vehiculo->modelo) }}">
										</div>
										<div class="form-group">
											<label>Placa</label>
											<input type="text" class="form-control" name="placa" id="placa" value="{{ old('placa', $vehiculo->placa) }}">
										</div>
										<div class="modal-footer">
											<button type="submit" class="btn btn-primary" >Guardar</button>
											<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>        
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				@empty
					No hay datos que mostrar.
				@endforelse
			</tr>
		</tbody>
	</table>
@endsection