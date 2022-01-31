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

		

	
@endsection