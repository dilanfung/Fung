<!DOCTYPE html>
<html lang="en"> 
  <head> 
    <meta charset="UTF-8" /> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0" /> 
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous" ></script> 
    <link rel="stylesheet" href="../css/style_login.css" /> 
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <title>Iniciar sesión - FUNG Servicio Automotriz</title> 
  </head> 
  <body> 
    <div class="container">

      <div class="forms-container"> 
        <div class="signin-signup"> 
          <form action="#" class="sign-in-form"> 
            <h2 class="title">Ingresar</h2> 
            <div class="input-field"> 
              <i class="fas fa-user"></i> 
              <input type="text" placeholder="Nombre" /> 
            </div> 
            <div class="input-field"> 
              <i class="fas fa-lock"></i> 
              <input type="password" placeholder="Contraseña" /> 
            </div> 
            <input type="submit" value="Ingresar" class="btn solid"  />
            <a style="color: white" href="indexCliente.html">Ingresar como cliente</a>
            <a style="color: white" href="indexAdmin.html">Ingresar como administrador</a>
          </form> 
          <form action="#" class="sign-up-form"> 
            <h2 class="title">Registrarse</h2> 
            <div class="input-field"> 
              <i class="fas fa-user"></i> 
              <input type="text" placeholder="Nombre" /> 
            </div> 
            <div class="input-field"> 
              <i class="fas fa-user"></i> 
              <input type="text" placeholder="Apellidos" /> 
            </div> 
            <div class="input-field"> 
              <i class="fas fa-user"></i> 
              <input type="text" placeholder="Teléfono" /> 
            </div> 
            <div class="input-field"> 
              <i class="fas fa-envelope"></i> 
              <input type="email" placeholder="Correo" /> 
            </div> 
            <div class="input-field"> 
              <i class="fas fa-lock"></i> 
              <input type="password" placeholder="Contraseña" /> 
            </div> 
            <input type="submit" class="btn" value="Registrarse" href="indexAdmin.html" />
            <a style="color: white" href="indexCliente.html">Ingresar como cliente</a>
            <a style="color: white" href="indexAdmin.html">Ingresar como administrador</a>
          </form> 
        </div> 
      </div> 
    
      <div class="panels-container"> 
        <div class="panel left-panel"> 
          <div class="content"> 
            <h3>¿Nuevo aquí?</h3> 
            <p>¡Ingrese tus datos aquí para registrate y pertenecer a nuestra gran familia! </p> 
            <button class="btn transparent" id="sign-up-btn">Registrarse</button> 
          </div> 
          <!--<img src="img/log.svg" class="image" alt="" />-->
        </div> 
        <div class="panel right-panel"> 
          <div class="content"> 
            <h3>¿Uno de nosotros?</h3> 
            <p>Si ya perteneces a nuestra gran familia, ¡ingrese aquí para acceder a todos los servicios!</p> 
            <button class="btn transparent" id="sign-in-btn"> Ingresar
            </button> 
          </div> 
          <!--<img src="img/register.svg" class="image" alt="" /> -->
        </div> 
      </div>

    </div><!--End container-->

    <!--<script src="app.js"></script>-->
    <script  src="../js/script.js"></script>
  </body>
</html>
