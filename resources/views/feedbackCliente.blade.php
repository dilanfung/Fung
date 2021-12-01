@extends('layoutCliente')

@section('titulo', 'Feedback')

@section('contenido')
    <div id="contact" class="section db">
      <div class="container">
        <div class="section-title text-center">
          <h3>Envío de retroalimentación</h3>
          <p>En este apartado el cliente podra enviar una recomendación o retroalimentación tanto como para el lubricentro como para el sistema.</p>
        </div>
        <div class="row">
          <div class="col-md-12">
            <div class="contact_form">
              <div id="message"></div>
              <form id="contactForm" name="sentMessage" novalidate="novalidate">
                <div class="row">
                  <div class="container">
                    <div class="form-group">
                      <label for="comment">Tipo de retroalimentación</label><br>
                      <select name="select" id="select" class="form-select">
                        <option value="app">Retroalimentación de la aplicación</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="comment">Mensaje</label>
                      <textarea class="form-control" rows="5" id="comment"></textarea>
                    </div>
                  </div>
                  <div class="clearfix"></div>
								  <div class="col-lg-12 text-center">
									  <div id="success"></div>
									  <button id="Enviarretroalimentaciónbtn" class="sim-btn hvr-bounce-to-top" type="submit">Enviar retroalimentación</button>
								  </div>
							  </div>
						  </form>
            </div>
          </div><!-- end col -->
        </div><!-- end row -->
      </div><!-- end container -->
    </div><!-- end section -->

  <div id="contact" class="section db">
    <div class="container">
      <div class="section-title text-center">
        <h3>Encuesta de satisfacción</h3>
        <p>¿Está disfrutando de nuestros servicios? Lo invitamos a llenar nuestra encuesta de satisfacción</p>
        <br>
        <a href="encuestaSatisfaccionCliente.blade.php" class="sim-btn hvr-bounce-to-top">Hacer encuesta</a>
      </div><!-- end title -->
    </div>
  </div>
@endsection