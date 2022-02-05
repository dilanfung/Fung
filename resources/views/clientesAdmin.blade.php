@extends('layoutAdmin')

@section('titulo','Clientes')

@section('contenido')
	<div class="section-title text-center">
		<br><h3>Listado de clientes</h3>
	</div>
	
	<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Buscar por nombre">

	<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>Código del Cliente</th>
				<th>Nombre del Cliente</th>
				<th>Correo</th>
				<th>Modificar</th>
			</tr>
		</thead>
		<tbody>
			@forelse ($clientesAdmin as $clienteAdminItem)
				<tr>
					<td>{{$clienteAdminItem->id}}</td>
					<td>{{$clienteAdminItem->name}}</td>
					<td>{{$clienteAdminItem->email}}</td>	
					<td>
						<button data-toggle="modal" data-target="#modalEditarCliente{{$clienteAdminItem->id}}" 
						class="button--save datatable-button fa-edit" value="{{$clienteAdminItem->id}}"></button>
					</td>
				</tr>
			@empty
					No hay datos que mostrar.			
			@endforelse
		</tbody>
	</table>

	@forelse ($clientesAdmin2 as $clientesAdminItem2)

		<div id="modalEditarCliente{{$clientesAdminItem2->id}}" class="modal modal-top fade">
			<div class="modal-dialog modal-dialog-centered">
				<div class="modal-content">
					<form id="add-event" method="POST" action="{{ url('/clientesAdmin/'.$clientesAdminItem2->id) }}">
						@csrf
						{{ @method_field('PATCH') }}
						<div class="modal-body">
							<div class="form-group">
								<label>Identificador</label>
								<input type="text" class="form-control" name="Id" value="{{$clientesAdminItem2->id}}" readonly>
							</div>
							<div class="form-group">
								<label>Nombre</label>
								<input type="text" class="form-control" name="Nombre" value="{{$clientesAdminItem2->name}}">
							</div>
							<div class="form-group">
								<label>Correo</label>
								<input type="text" class="form-control" name="Correo" value="{{$clientesAdminItem2->email}}">
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

	@empty
		No hay datos que mostrar.			
	@endforelse

	<script>
		function myFunction() {
		  // Declare variables
		  var input, filter, table, tr, td, i, txtValue;
		  input = document.getElementById("myInput");
		  filter = input.value.toUpperCase();
		  table = document.getElementById("example");
		  tr = table.getElementsByTagName("tr");
		
		  // Loop through all table rows, and hide those who don't match the search query
		  for (i = 0; i < tr.length; i++) {
			td = tr[i].getElementsByTagName("td")[1];
			if (td) {
			  txtValue = td.textContent || td.innerText;
			  if (txtValue.toUpperCase().indexOf(filter) > -1) {
				tr[i].style.display = "";
			  } else {
				tr[i].style.display = "none";
			  }
			}
		  }
		}
	</script>
@endsection