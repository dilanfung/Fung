@extends('layoutAdmin')

@section('titulo','Retroalimentación')

@section('contenido')
	<div class="section-title text-center">
		<br><h3>Listado de las retroalimentaciones</h3>
	</div>
	
	<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Buscar por nombre">

	<table id="example" class="table table-striped table-bordered" cellspacing="0" width="100%">
		<thead>
			<tr>
				<th>Código de la Retroalimentación</th>
				<th>Mensaje</th>
				<th>Codigo de usuario</th>
				<th>Fecha</th>
				<th>Leida</th>
			</tr>
		</thead>
		<tbody>
			@forelse ($retroalimentacion as $retroalimentacion)
				<tr>
					<td>{{$retroalimentacion->id}}</td>
					<td>{{$retroalimentacion->mensaje}}</td>
					<td>{{$retroalimentacion->usuario}}</td>
					<td>{{$retroalimentacion->fecha}}</td>	
					<td>{{$retroalimentacion->leida}}</td>	

				</tr>
			@empty
					No hay datos que mostrar.			
			@endforelse
		</tbody>
	</table>

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