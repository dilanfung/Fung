@extends('layoutAdmin')

@section('titulo','Citas')

@section('contenido')
	<div class="p-5">
		<div class="section-title text-center"><h3>Agenda tu cita</h3></div>
		<div class="card"><div class="card-body p-0"><div id="calendar"></div></div></div>
	</div>

	<div class="section-title text-center">
		<h3>Historial de citas</h3>
	</div>
	<table id="" class="table table-striped table-bordered" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>Id</th>
				<th>Fecha</th>
				<th>Hora</th>
				<th>Usuario</th>
				<th>Marca Automóvil</th>
				<th>Más información</th>
				<th>Editar/Eliminar</th>
			</tr>
		</thead>
		<tbody>
			@forelse($citas as $cita)
				<tr>
					<td>{{ $cita->id }}</td>
					<td>{{ date('Y-m-d', strtotime($cita->fecha)) }}</td>
					<td>{{ date('H:i:s', strtotime($cita->fecha)) }}</td>
					<td>{{ $cita->usuario }}</td>
					<td>{{ $cita->marca }}</td>
					<td>
						<button data-toggle="modal" data-target="#modalInfo{{ $cita->id }}" 
						class="button--save datatable-button fa-info"></button>
					</td>
					<td>
						<button data-toggle="modal" data-target="#modalEditarCita{{ $cita->id }}" 
						class="button--save datatable-button fa-edit"></button>
						<form method="POST" action="{{ url('/CitasAdmin/'.$cita->id) }}">
							@csrf 
							{{ @method_field('DELETE') }}
							<button class="button--delete datatable-button fa-trash"></button>
						</form>
					</td>
				</tr>
				
				<div id="modalInfo{{ $cita->id }}" class="modal modal-top fade">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<div class="modal-body">
								<div class="form-group">
									<label>Correo de contacto: {{ $cita->correo }}</label>
								</div>
								<div class="form-group">
									<label>Cilindraje de motor: {{ $cita->cilindraje }}</label>
								</div>
								<div class="form-group">
									<label>Placa: {{ $cita->placa }}</label>
								</div>
								<div class="form-group">
									<label>Modelo: {{ $cita->modelo }}</label>
								</div>
								<div class="form-group">
									<label>Año del vehículo: {{ $cita->anio }}</label>
								</div>
								<div class="modal-footer">
									<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>        
								</div>
							</div>
						</div>
					</div>
				</div>

				<div id="modalEditarCita{{ $cita->id }}" class="modal modal-top fade">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<form id="add-event" method="POST" action="{{ url('/CitasAdmin/'.$cita->id) }}">
								@csrf
								{{ @method_field('PATCH') }}
								<div class="modal-body">
									<div class="form-group">
										<label>Fecha</label>
										<input type="date" class="form-control" name="Fecha" id="Fecha">
									</div>
									<div class="form-group">
										<label>Hora</label>
										<input type="time" class="form-control" name="Hora" id="Hora">
									</div>
									<div class="form-group">
										<label>Usuario</label>
										<select class="form-control" id="Usuario" name="Usuario">
											@forelse($usuarios as $usuario)
												<option value="{{ $usuario->id }}">
													{{ $usuario->nombre }} {{ $usuario->apellidos }}
												</option>
											@empty
												No hay carros disponibles.
											@endforelse
										</select>
									</div>
									<div class="form-group">
										<label>Vehiculo</label>
										<select class="form-control" id="Vehiculo" name="Vehiculo">
											@forelse($vehiculos as $vehiculo)
												<option value="{{ $vehiculo->id }}">{{ $vehiculo->placa }}</option>
											@empty
												No hay carros disponibles.
											@endforelse
										</select>
									</div>
								</div>
								<div class="modal-footer">
									<button type="submit" class="btn btn-success" >Guardar</button>
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

	<div id="modal-view-event-add" class="modal modal-top fade calendar-modal">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<form id="add-event" method="POST" action="{{ url('/CitasAdmin') }}">
					@csrf
					<div class="modal-body">
						<div class="form-group">
							<label>Fecha</label>
							<input type="date" class="form-control" name="Fecha" id="Fecha">
						</div>
						<div class="form-group">
							<label>Hora</label>
							<input type="time" class="form-control" name="Hora" id="Hora">
						</div>
						<div class="form-group">
							<label>Usuario</label>
							<select class="form-control" id="Usuario" name="Usuario">
								@forelse($usuarios as $usuario)
									<option value="{{ $usuario->id }}">
										{{ $usuario->nombre }} {{ $usuario->apellidos }}
									</option>
								@empty
									No hay carros disponibles.
								@endforelse
							</select>
						</div>
						<div class="form-group">
							<label>Vehiculo</label>
							<select class="form-control" id="Vehiculo" name="Vehiculo">
								@forelse($vehiculos as $vehiculo)
									<option value="{{ $vehiculo->id }}">{{ $vehiculo->placa }}</option>
								@empty
									No hay carros disponibles.
								@endforelse
							</select>
						</div>
					</div>
					<div class="modal-footer">
						<button type="submit" class="btn btn-success" >Guardar</button>
						<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>        
					</div>
				</form>
			</div>
		</div>
	</div>
@endsection