<nav class="big-nav hide-on-med-and-down" id="desktop-nav">
  <ul class="left">
    <li class="waves-effect waves-red flow-text"><a href="{{ route('home') }}">Inicio
    </a></li>
    <li class="waves-effect waves-red flow-text"><a href="{{ route('products') }}">Catalogo online
    </a></li>
    <li class="waves-effect waves-red flow-text"><a href="{{ route('home') }}#contacto">Contacto
    </a></li>
    @if (Auth::check())
      <li class="waves-effect waves-red flow-text"><a href="{{ route('show.shopping_cart') }}">Carrito
      </a></li>
    @else
      <li class="waves-effect waves-red flow-text"><a href="{{ route('register') }}">Carrito
      </a></li>
    @endif
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
