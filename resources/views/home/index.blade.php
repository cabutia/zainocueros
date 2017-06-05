@extends('mainweb.layout')

@section('content')
  <header class="relative no-padding">


    <div class="abs-logo-wrapper valign-wrapper">
      <div class="row">
        <div class="col s8 offset-s2">
          <img src="{{ asset('images/zaino-header-logo.png') }}" alt="zaino logo" class="responsive-img valign">
        </div>
      </div>
    </div>

    <!-- Navbar Desktop -->
    <div class="fixed-action-btn tooltipped hide-on-small-only" data-tooltip="Carrito 0" data-position="left" id="floating-btn">
      <a class="cs-btn-floating btn-large deep-orange">
        <i class="material-icons">shopping_cart</i>
      </a>
    </div>
    <nav class="big-nav hide-on-med-and-down" id="desktop-nav">
      <ul class="left">
        <li class="flow-text"><a href="#">Inicio
        </a></li>
        <li class="flow-text"><a href="#">Quienes somos
        </a></li>
        <li class="flow-text"><a href="#">Productos
        </a></li>
        <li class="flow-text"><a href="#">Contacto
        </a></li>
        <li class="flow-text"><a href="#">Social
        </a></li>
      </ul>
      <ul class="right">
        <li class="flow-text"><a href="#">Registate
        </a></li>
        <li class="flow-text"><a href="#">Iniciar sesión
        </a></li>
      </ul>
    </nav>

    <!-- Navbar Mobile -->
    <nav class="mobile-nav hide-on-large-only" id="mobile-nav">
      <a href="#" data-activates="slide-out" class="button-collapse right"><i class="material-icons">menu</i></a>
      <a href="#" class="left"><img src="{{ asset('images/zaino-only-white-logo.png') }}" class="mobile-nav-logo"></a>
      <ul class="side-nav" id="slide-out">
        <li><a href="#"><i class="material-icons">airplay</i>Inicio
        </a></li>
        <li><a href="#"><i class="material-icons">supervisor_account</i>Quienes somos
        </a></li>
        <li><a href="#"><i class="material-icons">work</i>Productos
        </a></li>
        <li><a href="#"><i class="material-icons">contact_phone</i>Contacto
        </a></li>
        <li><a href="#"><i class="material-icons">person_pin</i>Social
        </a></li>
        <li><a href="#"><i class="material-icons">shopping_cart</i>Carrito
          <span class=" badge right shopping-badge">0</span>
        </a></li>
        <div class="col s12 center">
          <button type="button" class="center btn border-btn z-depth-0">Iniciar sesión</button>
          <button type="button" class="center btn border-btn z-depth-0">Registrate</button>
        </div>
      </ul>
    </nav>

    <div class="row no-margin header-img">
      <div class="col s12 no-padding header-img-container">
        <img src="{{ asset('images/header-background.jpg') }}" alt="zaino cueros header" class="header-img">
      </div>
    </div>
  </header>

  <!-- Presentacion -->
  @include('home.who-we-are')

  <!-- 4-box -->
  @include('home.fourBox')

@endsection
