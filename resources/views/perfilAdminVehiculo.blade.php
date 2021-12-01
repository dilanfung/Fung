@extends('layoutAdmin')

@section('titulo','Perfil Admin Vehículo')

@section('contenido')
		<section id="home" class="main-banner small-main-banner parallaxie" style="background: url('../../public/uploads/mecanica.jpg')">
			<div class="heading small-heading">
				<h1></h1>
				<h3 class="cd-headline clip is-full-width">
					<span>Bienvenido: "Admin"</span>
				</h3>
			</div>
		</section>
				
		<div class="section-title text-center">
			<br><h3>Vehiculos</h3>	
			<a href="perfilAdmin"> <button class="sim-btn hvr-bounce-to-top">Volver al perfil</button> </a>
		</div>
	
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
				<tr>
				@forelse($vehiculos as $vehiculo)
					<td>{{$vehiculo->id}}</td>
					<td>{{$vehiculo->anio}}</td>
					<td>{{$vehiculo->cilindraje_motor}}</td>
					<td>{{$vehiculo->marca}}</td>
					<td>{{$vehiculo->modelo}}</td>
					<td>{{$vehiculo->placa}}</td>
					<td>
						<button data-toggle="modal" data-target="#modalEditarVehiculo" class="button--save datatable-button fa-edit"></button>
						@if (session('error'))
							<div class="alert alert-danger">{{ session('error') }}</div>
						@endif
						<form method="POST" action="{{ url('/perfilAdminVehiculo/'.$vehiculo->id) }}">
							@csrf 
							{{ @method_field('DELETE') }}
							<button onclick="return confirm('¿Esta seguro que desea eliminar este vehiculo?')" class="button--delete datatable-button fa-trash"></button>
						</form>
					</td>
				</tr>
			@empty
				No hay datos que mostrar.
			@endforelse
		</tbody>
	</table>

	<div id="modalEditarVehiculo" class="modal modal-top fade">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<form id="add-event" method="POST" action="{{ url('/perfilAdminVehiculo/'.$vehiculo->id) }}">
					@csrf
					{{ @method_field('PATCH') }}
					<div class="modal-body">
						
						<div class="form-group">
							<label>IDVehiculo</label>
							<select class="form-control"  id="id" name="id">
								@forelse($vehiculos as $vehiculo)
									@if (old('id') == $vehiculo->id)
										<option value="{{$vehiculo->id}}" selected>{{$vehiculo->id}}</option>
									@else
										<option value="{{$vehiculo->id}}">{{$vehiculo->id}}</option>
									@endif
								@empty
									No hay carros disponibles.
								@endforelse
							</select>
						</div>
				
						<div class="form-group">
							<label>Año</label>
							<input type="text" class="form-control"  name="anio" value="{{ old('anio', $vehiculo->anio) }}" />
						</div>

						<div class="form-group">
							<label>Cilindrada</label>
							<input type="text" class="form-control"  name="cilindraje_motor" value="{{ old('cilindraje_motor', $vehiculo->cilindraje_motor) }}" />
						</div>

						<div class="form-group">
							<label>Marca</label>
							<input type="text" class="form-control"  name="marca" value="{{ old('marca', $vehiculo->marca) }}" />
						</div>
						
						<div class="form-group">
							<label>Modelo</label>
							<input type="text" name="modelo"class="form-control"   value="{{ old('modelo', $vehiculo->modelo) }}" />
						</div>

						<div class="form-group">
							<label>Placa</label>
							<input type="text" class="form-control"  name="placa" value="{{ old('placa', $vehiculo->placa) }}" />
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





		<!--Fin contenido-->

@endsection