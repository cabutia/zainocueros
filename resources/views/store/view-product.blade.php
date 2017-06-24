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



  <div class="container">
    <div class="row">

      <div class="card col s12" style="padding-bottom: 20px">
        <div class="col s12 center">
          <h3 class="flow-text">Detalles del producto</h3>
        </div>

        <div class="col s12 m6 swiper-container" style="max-height: 500px">
          <!-- Imagenes -->
          <div class="swiper-wrapper">
            @foreach ($product->images as $image)
              <div class="swiper-slide"><img src="{{ asset($image->path) }}" alt="{{ asset($product->slug) }}" style="width: 100%"></div>
            @endforeach
          </div>

          <div class="swiper-pagination"></div>

          <div class="swiper-button-prev hide-on-small-only"></div>
          <div class="swiper-button-next hide-on-small-only"></div>
        </div>
        <div class="col s12 m6">
          <!-- Nombre del producto -->
          <div class="row">
            <div class="col s12">
              <h4 style="margin-bottom: 0">{{ $product->item_title }}</h4>
              <a href="{{ route('product.list.categories', ['catgory' => $product->subcategory->category->slug, 'subcat' => $product->subcategory->slug]) }}">{{ $product->subcategory->name }}</a>
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
              @if (Auth::guest())
                <a href="{{ route('register') }}" class="btn blue waves-effect waves-light">Añadir al carrito!<i class="material-icons right">shopping_cart</i></a>
              @else
                {{ Form::open(['route' => 'add_to_cart']) }}
                <input type="hidden" name="product_id" value="{{ $product->id }}">
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                <button type="submit" class="btn blue waves-effect waves-light">
                  Añadir al carrito!<i class="material-icons right">shopping_cart</i>
                </button>
                {{ Form::close() }}
              @endif
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
