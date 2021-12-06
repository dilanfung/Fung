<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Fung - Encuesta</title>

  <link rel="stylesheet" href="{{URL::asset('css/encuestaStyle.css')}}">

</head>
<body>
<!-- partial:index.partial.html -->
<div class="container">
  <header class="header">
    <h1 id="title" class="text-center">Encuesta de Satisfacción Servicentro FUNG</h1>
    <p id="description" class="description text-center">
      Gracias por tomarse un tiempo y contestar nuestra ecuesta de satisfacción
    </p>
  </header>
  <form id="add-event" method="POST" action="{{ url('/encuesta') }}">
    @csrf
  <div class="form-group">
            <p> ¿Que tan probable es que recomiende el sistema?</p>
            <div class="page__group">
              <div class="rating">
                <input type="radio" value = '1' name="rating-star" class="rating__control screen-reader" id="rc1">
                <input type="radio" value = '2' name="rating-star" class="rating__control screen-reader" id="rc2">
                <input type="radio" value = '3' name="rating-star" class="rating__control screen-reader" id="rc3">
                <input type="radio" value = '4' name="rating-star" class="rating__control screen-reader" id="rc4">
                <input type="radio" value = '5' name="rating-star" class="rating__control screen-reader" id="rc5">
                <label for="rc1" class="rating__item">
                  <svg class="rating__star">
                    <use xlink:href="#star"></use>
                  </svg>
                  <span class="screen-reader">1</span>
                </label>
                <label for="rc2" class="rating__item">
                  <svg class="rating__star">
                    <use xlink:href="#star"></use>
                  </svg>
                  <span class="screen-reader">2</span>
                </label>
                <label for="rc3" class="rating__item">
                  <svg class="rating__star">
                    <use xlink:href="#star"></use>
                  </svg>
                  <span class="screen-reader">3</span>
                </label>
                <label for="rc4" class="rating__item">
                  <svg class="rating__star">
                    <use xlink:href="#star"></use>
                  </svg>
                  <span class="screen-reader">4</span>
                </label>
                <label for="rc5" class="rating__item">
                  <svg class="rating__star">
                    <use xlink:href="#star"></use>
                  </svg>
                  <span class="screen-reader">5</span>
                </label>	
              </div>
            </div>
        <div class="form-group">
          <p>¿Que tan fácil de utilizar es el sistema?</p>
        <div class="page__group">  
          <div class="rating">
            <input type="radio"  value = '1' name="rating-star2" class="rating__control screen-reader" id="rc6">
            <input type="radio"  value = '2' name="rating-star2" class="rating__control screen-reader" id="rc7">
            <input type="radio"  value = '3' name="rating-star2" class="rating__control screen-reader" id="rc8" checked>
            <input type="radio"  value = '4' name="rating-star2" class="rating__control screen-reader" id="rc9">
            <input type="radio"  value = '5' name="rating-star2" class="rating__control screen-reader" id="rc10">
            <label for="rc6" class="rating__item">
              <svg class="rating__star">
                <use xlink:href="#star"></use>
              </svg>
              <span class="screen-reader">1</span>
            </label>
            <label for="rc7" class="rating__item">
              <svg class="rating__star">
                <use xlink:href="#star"></use>
              </svg>
              <span class="screen-reader">2</span>
            </label>
            <label for="rc8" class="rating__item">
              <svg class="rating__star">
                <use xlink:href="#star"></use>
              </svg>
              <span class="screen-reader">3</span>
            </label>
            <label for="rc9" class="rating__item">
              <svg class="rating__star">
                <use xlink:href="#star"></use>
              </svg>
              <span class="screen-reader">4</span>
            </label>
            <label for="rc10" class="rating__item">
              <svg class="rating__star">
                <use xlink:href="#star"></use>
              </svg>
              <span class="screen-reader">5</span>
            </label>	
          </div>   
        </div>
          <div class="form-group">
            <p>¿Que te parece el sistemas de citas?</p> 
           <div class="page__group">  
          <div class="rating">
            <input type="radio"  value = '1' name="rating-star3" class="rating__control screen-reader" id="rc11">
            <input type="radio"  value = '2' name="rating-star3" class="rating__control screen-reader" id="rc12">
            <input type="radio"  value = '3' name="rating-star3" class="rating__control screen-reader" id="rc13" checked>
            <input type="radio"  value = '4' name="rating-star3" class="rating__control screen-reader" id="rc14">
            <input type="radio"  value = '5' name="rating-star3" class="rating__control screen-reader" id="rc15">
            <label for="rc11" class="rating__item">
              <svg class="rating__star">
                <use xlink:href="#star"></use>
              </svg>
              <span class="screen-reader">1</span>
            </label>
            <label for="rc12" class="rating__item">
              <svg class="rating__star">
                <use xlink:href="#star"></use>
              </svg>
              <span class="screen-reader">2</span>
            </label>
            <label for="rc13" class="rating__item">
              <svg class="rating__star">
                <use xlink:href="#star"></use>
              </svg>
              <span class="screen-reader">3</span>
            </label>
            <label for="rc14" class="rating__item">
              <svg class="rating__star">
                <use xlink:href="#star"></use>
              </svg>
              <span class="screen-reader">4</span>
            </label>
            <label for="rc15" class="rating__item">
              <svg class="rating__star">
                <use xlink:href="#star"></use>
              </svg>
              <span class="screen-reader">5</span>
            </label>	
          </div>    
        </div> 
        <svg xmlns="http://www.w3.org/2000/svg" style="display: none">
          <symbol id="star" viewBox="0 0 26 28">
            <path d="M26 10.109c0 .281-.203.547-.406.75l-5.672 5.531 1.344 7.812c.016.109.016.203.016.313 0 .406-.187.781-.641.781a1.27 1.27 0 0 1-.625-.187L13 21.422l-7.016 3.687c-.203.109-.406.187-.625.187-.453 0-.656-.375-.656-.781 0-.109.016-.203.031-.313l1.344-7.812L.39 10.859c-.187-.203-.391-.469-.391-.75 0-.469.484-.656.875-.719l7.844-1.141 3.516-7.109c.141-.297.406-.641.766-.641s.625.344.766.641l3.516 7.109 7.844 1.141c.375.063.875.25.875.719z"/>
          </symbol>
        </svg>
   
    <div class="form-group">
      <button type="submit" id="submit" class="submit-button">
        Enviar
      </button>
    </div>
  </form>
</div>
<script>

<!-- partial -->
  <script src="{{URL::asset('js/Encuescript.js')}}"></script>

</body>
</html>