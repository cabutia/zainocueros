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

    <!-- Shopping fixed -->
    <a class="cs-absolute-shopping z-depth-4 waves-effect waves-light hoverable" href="#">
      <div class="left-button">
        <i class="material-icons">shopping_cart</i>
      </div>
      <div class="right-button">
        Carrito
      </div>
      <div class="items">
        0
      </div>
    </a>

    <!-- Navbar Desktop -->
    @include('home.navbar-desktop')

    <!-- Navbar Mobile -->
    @include('home.navbar-mobile')

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
