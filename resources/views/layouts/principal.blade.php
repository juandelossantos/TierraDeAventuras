<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html" charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='https://fonts.googleapis.com/css?family=Londrina+Solid' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
  {!!Html::style('css/normalize.css')!!}
  {!!Html::style('css/main.css')!!}
  <title>Tierra de Aventuras</title>
</head>
<body>
  <div class="wrapper"><!--wrapper-->
    <div class="page"><!--page-->
      <header>
        <nav class="main-nav">
          <div class="contiene-item">
            <a href="" class="nav-item__active">Iniciar Sesión</a>
          </div>
          <div class="login"> <!-- login no jugadores -->
            <div class="login--wrapper">
              <form class="login-no-player" action="adminnojugador.html">
                <div>
                  <label class="login-no-player--label" for="email">E-mail</label>
                </div>
                <div>
                  <input class="login-no-player--input" type="text" name="email">
                </div>
                <div>
                  <label class="login-no-player--label" for="password">Contraseña</label>
                </div>
                <div>
                  <input class="login-no-player--input" type="password" name="password">
                </div>
                <div>
                  <input class="btn--peq naranja" type="submit" value="INGRESAR">
                </div>
                <div>
                  <a class="login-no-player--resetpassword" href="">olvidé mi contraseña</a>
                </div>
              </form>
            </div>
          </div> <!-- Fin Login no jugadores -->
          <div class="contiene-item">
            <a href="" class="nav-item">Idioma</a>
          </div>
        </nav>
      </header><!-- Fin de header-->
    <section class="content"><!-- Aquí va el contebido dinámico -->

      @yield('content')

    </section> <!-- fin de Seccion content -->
    </div><!-- fin de page-->
    <footer>
      <div class="footer--text">
        &copy; 2015 Blescorp Group SAS. Todos los derechos reservados - <a class= "footer--link" href="">Términos y Condiciones</a>
      </div>
    </footer>
  </div><!-- fin de wrapper -->
</body>
</html>