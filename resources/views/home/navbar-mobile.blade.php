<nav class="mobile-nav hide-on-large-only no-margin" id="mobile-nav">
  <a href="#" data-activates="slide-out" class="button-collapse right"><i class="material-icons">menu</i></a>
  <a href="#" class="left"><img src="{{ asset('images/zaino-only-white-logo.png') }}" class="mobile-nav-logo"></a>
  <ul class="side-nav" id="slide-out">
    <li><a href="{{ asset('home') }}"><i class="material-icons">airplay</i>Inicio
    </a></li>
    <li><a href="#"><i class="material-icons">supervisor_account</i>Servicios
    </a></li>
    <li><a href="{{ route('products') }}"><i class="material-icons">work</i>Catalogo online
    </a></li>
    <li><a href="#"><i class="material-icons">contact_phone</i>Contacto
    </a></li>
    <li><a href="#"><i class="material-icons">person_pin</i>Social
    </a></li>

    <li><a href="#"><i class="material-icons">shopping_cart</i>Carrito
      <span class="deep-orange badge new right" data-badge-caption="">0</span>
    </a></li>

    <div class="divider"></div>
    <div class="col s12 center">
      @if (Auth::check())
        <a href="#">Bienvenido <b>{{ Auth::user()->name }}</b></a>
        <a href="{{ route('logout') }}"><button type="button" class="center btn border-btn z-depth-0">Cerrar sesión</button></a>
      @else
        <a href="{{ route('login') }}"><button type="button" class="center btn border-btn z-depth-0">Iniciar sesión</button></a>
        <a href="{{ route('register') }}"><button type="button" class="center btn border-btn z-depth-0">Registrate</button></a>
      @endif
    </div>
  </ul>
</nav>
