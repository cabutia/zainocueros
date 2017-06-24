@extends('mainweb.layout')

@section('content')
  <header class="relative no-padding">

    <!-- Shopping fixed -->
    @include('mainweb.absolute-shopping')

    <!-- Navbar Desktop -->
    @include('home.navbar-desktop')

    <!-- Navbar Mobile -->
    @include('home.navbar-mobile')

  </header>

  <div class="row">
    <div class="col s12">

      <!-- Search filters -->
      @include('store.cart-options')

      <!-- Products in cart -->
      @include('store.my-cart')
    </div>
  </div>

@endsection

@section('pageScripts')
  @include('store.pageScripts')
@endsection
