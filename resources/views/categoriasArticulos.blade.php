@extends('layoutAdmin')

@section('titulo','Categorias Articulos')

@section('contenido')

	<div id="modalCategoriaArticulos" class="modal modal-top fade">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<form id="add-event" method="POST" action="{{ url('/categoriasArticulos') }}">
					@csrf
					<div class="modal-body">
						<h4>Favor ingresar datos del proveedor</h4>
						<div class="form-group">
							<label>Nombre</label>
							<input type="text" class="form-control" name="Nombre" id="Nombre">
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

	<div class="section-title text-center">
		<br><h3>Listado de categorias de articulos</h3>
		<button data-toggle="modal" data-target="#modalCategoriaArticulos" class="sim-btn hvr-bounce-to-top">Crear categoria</button>
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
			@forelse ($categoriasArticulos as $categoriasArticulos)
				<tr>
					<td>{{$categoriasArticulos->id}}</td>
					<td>{{$categoriasArticulos->nombre}}</td>
					<td>
						<button data-toggle="modal" data-target="#modalEditarCategoriaArticulo" 
						class="button--save datatable-button fa-edit"></button>
					</td>
				</tr>
			@empty
					No hay datos que mostrar.			
			@endforelse
		</tbody>
	</table>

	<div id="modalEditarCategoriaArticulo" class="modal modal-top fade">
		<div class="modal-dialog modal-dialog-centered">
			<div class="modal-content">
				<form id="add-event" method="POST" action="{{ url('/categoriasArticulos/'.$categoriasArticulos->id) }}">
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