<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- FONT AWESOME -->
    <script src="https://kit.fontawesome.com/f303578ce8.js" crossorigin="anonymous"></script>
    <!-- Bootstrap CSS -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <!-- ESTILOS CUSTOM -->
    <link href="{{ asset('css/plantilla.css') }}" rel="stylesheet">
    <title>GPS CHILE</title>
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom fixed-top">
        <a class="navbar-brand font-weight-bold" href="{{route('inicio')}}">Inos12GPS</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
            <li class="{{ request()->is('inicio') ? 'nav-item active' : '' }}">
              <a class="nav-link" href="{{route('inicio')}}">Inicio <span class="sr-only">(current)</span></a>
            </li>
          </ul>
        </div>
    </nav>
    <div class="wrapper">
        <div class="container">
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
                <p>Somos una empresa dedicada al rubro de los gps para uso vehicular</p>
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
                
              </div>
            </div>
          </div>
          <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a class="" href="{{route('inicio')}}"> Luis Martínez</a>
          </div>
        </div>
      </footer>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="{{ asset('js/app.js') }}"></script> 
  </body>
</html>