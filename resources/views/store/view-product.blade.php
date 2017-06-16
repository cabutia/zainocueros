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

  <div class="container">
    <div class="row">

      <div class="card col s12">
        <div class="col s12 center">
          <h3 class="flow-text">Detalles del producto</h3>
        </div>

        <div class="col s12 m6">
          <img src="{{ asset($product->item_image) }}"
               alt="{{ $product->tags }}"
               class="responsive-img materialboxed"
               style="width: 100% !important">
        </div>
        <div class="col s12 m6">
          <!-- Nombre del producto -->
          <div class="row">
            <div class="col s12">
              <h4 style="margin-bottom: 0">{{ $product->item_title }}</h4>
              <a href="#">{{ $product->subcategory->name }}</a>
            </div>
          </div>

          <!-- Descripcion -->
          <div class="row">
            <div class="col s12">
              <h6><b>Descripcion del producto</b></h6>
              <i class="material-icons left grey-text text-lighten-1">info_outline</i>
              <p>{{ $product->item_desc }}</p>
            </div>
          </div>

          <!-- Medios de pago -->
          <div class="row">
            <div class="col s12">
              <h6><b>Medios de pago</b></h6>
              <i class="material-icons left grey-text text-lighten-1">payment</i>
              <p>Paypal, MercadoPago, Pago Facil, RapiPago, Mastercard, Visa, American Express</p>
            </div>
          </div>

          <!-- Envios -->
          <div class="row">
            <div class="col s12">
              <h6><b>Envios</b></h6>
              <i class="material-icons left grey-text text-lighten-1">email</i>
              <p>DHL, FedEx, OCA</p>
            </div>
          </div>



          <!-- Etiquetas -->
          @if($tags[0] !== "")
            <div class="row">
              <div class="col s12">
                <h6><b>Etiquetas</b></h6>
                @foreach ($tags as $tag)
                  <div class="chip" style="text-transform: capitalize">{{ $tag }}</div>
                @endforeach
              </div>
            </div>
          @endif

          <!-- Añadir al carrito -->
          <div class="row">
            <div class="col s12">
              <button type="button" class="btn blue waves-effect waves-light">
                Añadir al carrito!<i class="material-icons right">shopping_cart</i>
              </button>
            </div>
          </div>
          @if (Auth::check() && Auth::user()->access != 0)
            <div class="row"><div class="col s12">
              <a href="{{ route('product.edit', ['id' => $product->id]) }}">
                <button type="button" class="btn grey lighten-1 waves-effect waves-light">
                  Editar<i class="material-icons right">mode_edit</i>
                </button>
              </a>
            </div></div>
          @endif

        </div>
      </div>

      <a href="{{ route('products') }}" class="right">Volver al catalogo</a>
    </div>
  </div>

@endsection

@section('pageScripts')
  @include('store.pageScripts')
@endsection
