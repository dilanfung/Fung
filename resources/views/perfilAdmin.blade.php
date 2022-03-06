@extends('layoutAdmin')

@section('titulo','Perfil')

@section('contenido')
	<div id="modalVehiculo" class="modal modal-top fade">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<form method="POST" action="{{ url('/perfilAdmin')}}" id="add-event">
					@csrf
					<div class="modal-body">
						<div class="form-group">
							<label>Año</label>
							<input required autocomplete="off" name="anio" class="form-control" type="number" max="9999" required>
						</div>
						<div class="form-group">
							<label>Cilindrada</label>
							<input type="text" required autocomplete="off" name="cilindraje" class="form-control" max="45" required>
						</div>
						<div class="form-group">
							<label>Marca</label>
							<input type="text" required autocomplete="off" name="marca" class="form-control" max="45" required>
						</div>
						<div class="form-group">
							<label>Modelo</label>
							<input type="text" required autocomplete="off" name="modelo" class="form-control" max="45" required>
						</div>
						<div class="form-group">
							<label>Placa</label>
							<input type="text" required autocomplete="off" name="placa" class="form-control" max="45" required>
						</div>
						<div class="form-group">
							<label>Usuario</label>
							<select class="form-control" id="usuario" name="usuario">
								@forelse($usuarios as $usuario)
									<option value="{{$usuario->id}}">
										{{$usuario->id}} - {{$usuario->name}}
									</option>
								@empty
									No hay carros disponibles.
								@endforelse
							</select>
						</div>
					</div>
					<div class="modal-footer">
					<button class="btn btn-success">Guardar</button>
						<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
					</div>
				</form>
			</div>
		</div>
	</div>

	<div class="section-title text-center">
		<br><h3>Vehículos</h3>
		<button data-toggle="modal" data-target="#modalVehiculo" class="sim-btn hvr-bounce-to-top">Crear vehículo</button>
		<a href="perfilAdminVehiculo"><button class="sim-btn hvr-bounce-to-top">Ver vehículos</button></a>
	</div>

	<div class="section-title text-center">
		<br><h3>Clientes</h3>
		<button data-toggle="modal" data-target="#modalCliente" class="sim-btn hvr-bounce-to-top">Modificar clave</button>
	</div>

	<div id="modalCliente" class="modal modal-top fade">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<form id="add-event" method="POST" action="{{ url('/perfilAdmin2/') }}">
					@csrf
					<div class="modal-body">
						<div class="form-group">
							<label>Correo</label>
							<input type="text" class="form-control" name="CorreoC" 
								placeholder="Correo del cliente" required>
						</div>
						<div class="form-group">
							<label>Correo</label>
							<input type="text" class="form-control" name="ClaveC" 
								placeholder="Clave Nueva" required>
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

	<table id="" class="table table-striped table-bordered" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>Código del Cliente</th>
				<th>Nombre del Cliente</th>
				<th>Correo</th>
				<th>Editar</th>
			</tr>
		</thead>
		<tbody>
			@forelse ($clientes as $cliente)
				<tr>
					<td>{{$cliente->id}}</td>
					<td>{{$cliente->name}}</td>
					<td>{{$cliente->email}}</td>
					<td>
						<button data-toggle="modal" data-target="#modalEditarCliente{{ $cliente->id }}" 
						class="button--save datatable-button fa-edit"></button>
					</td>
				</tr>

				<div id="modalEditarCliente{{ $cliente->id }}" class="modal modal-top fade">
					<div class="modal-dialog modal-dialog-centered">
						<div class="modal-content">
							<form id="add-event" method="POST" action="{{ url('/perfilAdmin/'.$cliente->id) }}">
								@csrf
								{{ @method_field('PATCH') }}
								<div class="modal-body">
									<div class="form-group">
										<label>Identificador</label>
										<input type="text" class="form-control" name="Id" value="{{$cliente->id}}" readonly>
									</div>
									<div class="form-group">
										<label>Nombre</label>
										<input type="text" class="form-control" name="Nombre" value="{{$cliente->name}}" 
											placeholder="Por favor escriba un nombre válido" required>
									</div>
									<div class="form-group">
										<label>Correo</label>
										<input type="text" class="form-control" name="Correo" value="{{$cliente->email}}" 
											placeholder="Por favor escriba un correo válido" required>
									</div>
									<div class="form-group">
										<label>Contraseña</label>
										<input type="text" class="form-control" name="Clave" 
											placeholder="Por favor escriba su contraseña" required>
									</div>
								</div>
								<div class="modal-footer">
									<button type="submit" class="btn btn-primary">Guardar</button>
									<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
								</div>
							</div>
						</form>
					</div>
				</div>
			@empty
				No hay datos que mostrar.			
			@endforelse
		</tbody>
	</table>
@endsection