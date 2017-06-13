<nav class="big-nav hide-on-med-and-down" id="desktop-nav">
  <ul class="left">
    <li class="waves-effect waves-red flow-text"><a href="{{ route('home') }}">Inicio
    </a></li>
    <li class="waves-effect waves-red flow-text"><a href="#">Servicios
    </a></li>
    <li class="waves-effect waves-red flow-text"><a href="{{ route('products') }}">Catalogo online
    </a></li>
    <li class="waves-effect waves-red flow-text"><a href="#">Contacto
    </a></li>
    <li class="waves-effect waves-red flow-text"><a href="#">Social
    </a></li>
  </ul>
  <ul class="right">
    @if(Auth::check())
      <li class="waves-effect waves-red flow-text"><a href="#"><b>{{ Auth::user()->name }}</b>
      </a></li>
      <li class="waves-effect waves-red flow-text"><a href="{{ route('logout') }}">Cerrar sesión
      </a></li>
    @else
      <li class="waves-effect waves-red flow-text"><a href="{{ route('register') }}">Registrate
      </a></li>
      <li class="waves-effect waves-red flow-text"><a href="{{ route('login') }}">Iniciar sesión
      </a></li>
    @endif
  </ul>
</nav>
