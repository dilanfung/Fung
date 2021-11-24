@extends('layoutAdmin')

@section('titulo','Categorias Proveedor')

@section('contenido')
	<div class="section-title text-center">
		<br><h3>Listado de categorias de proveedores</h3>
	</div>
	
	<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Buscar por nombre">

	<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>Código de la categoria</th>
				<th>Nombre de la categoria</th>
				<th>Editar</th>
			</tr>
		</thead>
		<tbody>
			@forelse ($categoriasProveedor as $categoriasProveedorItem)
				<tr>
					<td>{{$categoriasProveedorItem->id}}</td>
					<td>{{$categoriasProveedorItem->nombre}}</td>
					<td>
						<button data-toggle="modal" data-target="#modalEditarCategoriaProveedor" 
						class="button--save datatable-button fa-edit"></button>
					</td>
				</tr>
			@empty
					No hay datos que mostrar.			
			@endforelse
		</tbody>
	</table>

	<div id="modalEditarCategoriaProveedor" class="modal modal-top fade">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<form id="add-event" method="POST" action="{{ url('/categoriasProveedor/'.$categoriasProveedorItem->id) }}">
					@csrf
					{{ @method_field('PATCH') }}
					<div class="modal-body">
						<div class="form-group">
							<label>Identificador</label>
							<input type="text" class="form-control" name="Id">
						</div>
						<div class="form-group">
							<label>Nombre</label>
							<input type="text" class="form-control" name="Nombre">
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