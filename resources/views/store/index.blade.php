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

  <!-- Product landing -->
  @include('store.product-landing')

  <div class="row">
    <div class="col s12">

      <!-- Search filters -->
      @include('store.search-filters')

      <!-- Product listing -->
      @include('store.product-listing')
    </div>
  </div>

@endsection

@section('pageScripts')
  @include('store.pageScripts')
@endsection
