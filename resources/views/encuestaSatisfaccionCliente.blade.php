@extends('layoutCliente')

@section('titulo', 'Encuesta de satisfacción')

@section('contenido')
	<br><br>	
   	<!-- Card -->
	<div class="mx-0 mx-sm-auto">
		<div class="text-center">
	  		<p><strong>¿Cuál es su nivel de satisfacción con la plataforma?</strong></p>
		</div>
  
		<div class="text-center mb-3">
	  		<div class="d-inline mx-3">Pésimo</div>
  
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" />
				<label class="form-check-label" for="inlineRadio1">1</label>
			</div>
		
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2" />
				<label class="form-check-label" for="inlineRadio2">2</label>
			</div>
		
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio3" value="option3" />
				<label class="form-check-label" for="inlineRadio3">3</label>
			</div>
		
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio4" value="option4" />
				<label class="form-check-label" for="inlineRadio4">4</label>
			</div>
		
			<div class="form-check form-check-inline">
				<input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio5" value="option5" />
				<label class="form-check-label" for="inlineRadio5">5</label>
			</div>
	
			<div class="d-inline me-4">Excelente</div>
		</div>
		<br>
	</div>
	<br><br><br>
@endsection