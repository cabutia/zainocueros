@extends('mainweb.layout')

@section('content')
  <header class="relative no-padding">

    <!-- Navbar Desktop -->
    @include('home.navbar-desktop')

    <!-- Navbar Mobile -->
    @include('home.navbar-mobile')

  </header>
  <button type="button" class="btn blue" id="sendForm">Continuar</button>

  <div class="loading-wrapper">
    <div class="loading-text">
      <div class="loading-circle-1"></div>
      <div class="loading-circle-2"></div>
      <div class="loading-circle-3"></div>
      Procesando las imagenes...
    </div>
  </div>

  <script type="text/javascript">
    $('.loading-wrapper').css({'opacity' : '1', 'display': 'block'});
  </script>
@endsection

@section('pageScripts')
  @include('store.pageScripts')
@endsection
