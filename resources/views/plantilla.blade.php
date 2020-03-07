<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/f303578ce8.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- ESTILOS CUSTOM -->
    <link href="{{ asset('css/plantilla.css') }}" rel="stylesheet">
    

    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="{{ asset('js/plantilla.js')}}"></script>
    <title>Portafolio</title>

  </head>
  <body>
    <div class="header">

    </div>
    <nav class="navbar navbar-expand-lg navbar-light bg-light sticky-top justify-content-between">
      
      <a class="navbar-brand" href="{{route('inicio')}}"><img class="logo" src="{{asset('img/logo.png')}}" alt=""></a>
      
      <button class="navbar-toggler first-button" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <div class="animated-icon1"><span></span><span></span><span></span></div>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="{{ request()->is('/') ? 'nav-item active' : '' }}">
            <a id="navlink" class="nav-link" href="{{route('inicio')}}">Inicio <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Features</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Pricing</a>
          </li>
        </ul>
      </div>
    </nav>
    <div class="wrapper">
        <div class="contenido">
            @yield('seccion')
        </div>
    </div>
      <!--FOOTER--->
      <footer class="footer">
      <div class="page-footer font-small teal pt-4">
          <div class="container-fluid text-center text-md-left">
            <div class="row">
              <div class="col-md-6 mt-md-0 mt-3">
                <h5 class="text-uppercase font-weight-bold"> Información</h5>
                <p>Mi nombre es Luis Martínez, actualmente poseo 20 años y estoy cursando la carrera
                de Ingeniería Informática en el instituto profesional Santo Tomás</p>
              </div>
              <hr class="clearfix w-100 d-md-none pb-3">
              <div class="col-md-6 mb-md-0 mb-3">
                <h5 class="text-uppercase font-weight-bold">Contacto y Redes</h5>
                <a id="divisor" class="footerlink text-justify text-decoration-none text-white" href="https://www.facebook.com/inos12volts/">
                    <i class="fab fa-facebook-square"></i>
                    <p class="contacto">Página de facebook</p>
                </a>
                <a id="divisor" class="text-justify text-decoration-none text-white" href="https://wa.me/56965041434">
                    <i class="fas fa-phone-square-alt"></i>
                    <p class="contacto">Número de contacto</p>
                </a>
                <a id="divisor" class="text-justify text-decoration-none text-white" href="https://github.com/LAMVCL">
                  <i class="fab fa-github-square"></i>
                  <p class="contacto">Página de github</p>
                </a>
              </div>
            </div>
          </div>
          <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a class="text-justify text-decoration-none text-white" href="{{route('inicio')}}"> Luis Martínez</a>
          </div>
        </div>
      </footer>
    </div>
  </body>
</html>