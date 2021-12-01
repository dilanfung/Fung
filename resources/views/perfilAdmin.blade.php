@extends('layoutAdmin')

@section('titulo','Perfil')

@section('contenido')
		<div id="modalVehiculo" class="modal modal-top fade">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<form method="POST" action="{{ route('perfilAdmin.store')}}" id="add-event">
						@csrf
						<div class="modal-body">
							<div class="form-group">
								<label>Año</label>
								<input required autocomplete="off" name="anio" class="form-control"type="number" >
							</div>
							<div class="form-group">
								<label>Cilindrada</label>
								<input type="text" required autocomplete="off" name="cilindraje_motor" class="form-control">
							</div>
							<div class="form-group">
								<label>Marca</label>
								<input type="text" required autocomplete="off" name="marca" class="form-control">
							</div>
							<div class="form-group">
								<label>Modelo</label>
								<input type="text" required autocomplete="off" name="modelo" class="form-control">
							</div>
							<div class="form-group">
								<label>Placa</label>
								<input type="text" required autocomplete="off" name="placa" class="form-control">
							</div>
							<div class="form-group">
								<label>Usuario</label>
								<input type="int" required autocomplete="off" name="usuario" class="form-control">
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
			<br><h3>Perfil</h3>
			<button data-toggle="modal" data-target="#modalVehiculo" class="sim-btn hvr-bounce-to-top">Crear vehículo</button>
			<a href="perfilAdminVehiculo"><button class="sim-btn hvr-bounce-to-top">Ver vehículos</button></a>
		</div>

		<table id="" class="table table-striped table-bordered" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th>Código del Cliente</th>
					<th>Nombre del Cliente</th>
					<th>Correo</th>
					<th>Teléfono</th>
					<th>Editar/Eliminar</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<!--????-->
					<td>001</td>
					<td>Alejandro</td>
					<td>gregrg@gmail.com</td>
					<td>2484154</td>
					<td>
						<button data-toggle="modal" data-target="#modalUsuario" class="button--save datatable-button fa-edit"></button>
						<button class="button--delete datatable-button fa-trash"></button>
					</td>
				</tr>
			</tbody>
		</table>

		<div id="modalUsuario" class="modal modal-top fade">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<form id="add-event">
						<div class="modal-body">
							<div class="form-group">
								<label>Nombre</label>
								<input type="text" class="form-control" name="">
							</div>
							<div class="form-group">
								<label>Apellidos</label>
								<input type="text" class="form-control" name="">
							</div>
							<div class="form-group">
								<label>Correo</label>
								<input type="text" class="form-control" name="">
							</div>
							<div class="form-group">
								<label>Contraseña</label>
								<input type="text" class="form-control" name="">
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
		</div>
@endsection