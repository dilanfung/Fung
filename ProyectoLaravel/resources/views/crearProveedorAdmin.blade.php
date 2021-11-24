@extends('layoutAdmin')

@section('titulo','Proveedores')

@section('contenido')

		<!--Contenido-->
		<div id="modalProveedor" class="modal modal-top fade">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<form id="add-event" method="POST" action="{{ url('/crearProveedorAdmin') }}">
						@csrf
						<div class="modal-body">
							<h4>Favor ingresar datos del proveedor</h4>
							<div class="form-group">
								<label>Nombre</label>
								<input type="text" class="form-control" name="Nombre" id="Nombre">
							</div>
							<div class="form-group">
								<label>Dirección</label>
								<input type="text" class="form-control" name="Direccion" id="Direccion">
							</div>
							<div class="form-group">
								<label>Fecha ingreso</label>
								<input type='date' class="form-control" name="Fecha" id="Fecha">
							</div>
							<div class="form-group">
								<label>Cédula</label>
								<input type='text' class="form-control" name="Cedula" id="Cedula">
							</div>
							<div class="form-group">
								<label>Usuario</label>
								<select class="form-control" id="categoria" name="Categoria" id="Categoria">
									@forelse($categorias as $categorias)
										<option value="{{$categorias->int}}">
											{{$categorias->nombre}}
										</option>
									@empty
										No hay categorias disponibles.
									@endforelse
							</select>
							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" name='form1' class="btn btn-primary">Guardar</button>
							<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
						</div>
					</form>
				</div>
			</div>
		</div>
	
		<div id="modalCategoriaProveedor" class="modal modal-top fade">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<form id="add-event2" method="POST" action="{{ url('/crearProveedorAdmin') }}">
						@csrf
						<div class="modal-body">
							<h4>Favor ingresar datos de la categoría de los artículos a crear</h4>
							<div class="form-group">
								<label>Nombre</label>
								<input type="text" class="form-control" name="NombreC" id="NombreC">
							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" name='form2' class="btn btn-primary">Guardar</button>
							<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>
						</div>
					</form>
				</div>
			</div>
		</div>

		<div class="section-title text-center">
			<br><h3>Mantenimiento de proveedores</h3>
			<button data-toggle="modal" data-target="#modalProveedor" class="sim-btn hvr-bounce-to-top">Crear proveedor</button>
            <button data-toggle="modal" data-target="#modalCategoriaProveedor" class="sim-btn hvr-bounce-to-top">Crear categoría de proveedor</button>
		</div>

<!--		<label>
			Buscar por coóigo de proveedor
			<input type="search" class="form-control input-sm" placeholder="" aria-controls="example" />
		</label>-->
		<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
			<thead>
				<tr>
					<th>Código del Proveedor</th>
					<th>Nombre</th>
					<th>Dirección</th>
					<th>Fecha Ingreso</th>
					<th>Cédula</th>
					<th>Categoría</th>
					<th>Editar/eliminar</th>
				</tr>
			</thead>
			<tbody>
				@forelse($proveedor as $proveedor)
				<tr>
					<td>{{$proveedor->id}}</td>				
					<td>{{$proveedor->nombre}}</td>
					<td>{{$proveedor->direccion}}</td>
					<td>{{date('Y-m-d', strtotime($proveedor->fecha))}}</td>
					<td>{{$proveedor->cedula}}</td>
					<td>{{$proveedor->nombreC}}</td>
					<td>
						<button data-toggle="modal" data-target="#modalEditarProveedor" 
						class="button--save datatable-button fa-edit"></button>
						<form method="POST" action="{{ url('/crearProveedorAdmin'.$proveedor->id) }}">
							@csrf 
							{{ @method_field('DELETE') }}
							<button class="button--delete datatable-button fa-trash"></button>
						</form>
					</td>
				</tr>
			@empty
				No hay datos que mostrar.
			@endforelse
			</tbody>
		</table>

		<div id="modalEditarProveedor" class="modal modal-top fade">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<form id="add-event" method="POST" action="{{ url('/crearProveedorAdmin/'.$proveedor->id) }}">
						@csrf
						{{ @method_field('PATCH') }}
						<div class="modal-body">
							<h4>Favor ingresar datos del proveedor</h4>
							<div class="form-group">
								<label>Identificador del proveedor</label>
								<input type="text" class="form-control" name="IdM" id="IdM">
							</div>
							<div class="form-group">
								<label>Nombre</label>
								<input type="text" class="form-control" name="NombreM" id="NombreM">
							</div>
							<div class="form-group">
								<label>Dirección</label>
								<input type="text" class="form-control" name="DireccionM" id="DireccionM">
							</div>
							<div class="form-group">
								<label>Fecha ingreso</label>
								<input type='date' class="form-control" name="FechaM" id="FechaM">
							</div>
							<div class="form-group">
								<label>Cédula</label>
								<input type='text' class="form-control" name="CedulaM" id="CedulaM">
							</div>
							<div class="form-group">
								<label>Usuario</label>
								<select class="form-control" id="categoria" name="CategoriaM" id="CategoriaM">
									@forelse($categorias as $categoria)
										<option value="{{$categorias->int}}">
											{{$categorias->nombre}}
										</option>
									@empty
										No hay categorias disponibles.
									@endforelse
							</select>
							</div>
						</div>
						<div class="modal-footer">
							<button type="submit" class="btn btn-primary" >Guardar</button>
							<button type="button" class="btn btn-primary" data-dismiss="modal">Cerrar</button>        
						</div>
					</form>
				</div>
			</div>

		<!--Fin contenido-->

@endsection