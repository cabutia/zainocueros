@extends('mainweb.layout')

@section('content')
  <header class="relative no-padding">

    <div class="abs-store-wrapper valign-wrapper">
      <div class="row valign">
        <div class="col s12 center">
          <img src="{{ asset('images/zaino-black-logo.png') }}" alt="" class="responsive-img center">
        </div>
        <div class="col s12">
          <h1 class="header-welcome valign">¡Bienvenido a nuestra tienda!</h1>
        </div>
      </div>
    </div>

    <!-- Shopping fixed -->
    @include('mainweb.absolute-shopping')

    <!-- Navbar Desktop -->
    @include('home.navbar-desktop')

    <!-- Navbar Mobile -->
    @include('home.navbar-mobile')

    <div class="row no-margin header-img">
      <div class="col s12 no-padding header-img-container">
        <img src="{{ asset('images/online-store/header-background.jpg') }}" alt="zaino cueros header" class="header-img">
      </div>
    </div>
  </header>

  <!-- Product landing -->
  @include('store.product-landing')

@endsection
