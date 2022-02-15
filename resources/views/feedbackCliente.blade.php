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
            <div class="row">
              <div class="container">
                <form method="POST" action="{{ url('/feedbackCliente') }}" id="add-event">
                  @csrf

                  <div class="form-group">
                    <label for="categoria_rtr">Tipo de retroalimentación</label><br>
                    <select class="form-control" id="categoria_rtr" name="categoria_rtr">
                      @forelse($categorias as $categoria)
                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                      @empty
                        No hay carros disponibles.
                      @endforelse
                    </select>
                  </div>
                  
                  <div class="form-group">
                    <label for="mensaje">Mensaje</label>
                    <textarea class="form-control" rows="5" id="mensaje" name="mensaje" maxlength="45" required></textarea>
                  </div>

                  <div class="col-lg-12 text-center">
                    <button id="enviar" class="sim-btn hvr-bounce-to-top" type="submit">Enviar retroalimentación</button>
                  </div>
                  
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div id="contact" class="section db">
    <div class="container">
      <div class="section-title text-center">
        <h3>Encuesta de satisfacción</h3>
        <p>¿Está disfrutando de nuestros servicios? Lo invitamos a llenar nuestra encuesta de satisfacción</p>
        <br>
        <a href="{{ route('encuestaSatisfaccionCliente') }}" class="sim-btn hvr-bounce-to-top">Hacer encuesta</a>
      </div>
    </div>
  </div>
@endsection