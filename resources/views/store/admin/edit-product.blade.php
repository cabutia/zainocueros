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

      <div class="card col s12" style="padding-bottom: 25px">
        <div class="col s12 center">
          <h3 class="flow-text">Edicion del producto</h3>
        </div>

        <div class="col s12 m6">
          @if (count($product->images) == 0)
            <img src="{{ asset($product->images->path) }}"
                 alt="{{ $product->tags }}"
                 class="responsive-img materialboxed"
                 style="width: 100% !important">
          @else
            <img src="{{ asset($product->images[0]->path) }}"
                 alt="{{ $product->tags }}"
                 class="responsive-img materialboxed"
                 style="width: 100% !important">
          @endif
        </div>
        <div class="col s12 m6">
          <div class="hide-on-med-and-up" style="margin-top: 20px"></div>
          {{ Form::open(['route' => 'do.product.edit']) }}

          {{-- ID --}}
          <input type="hidden" name="id" value="{{ $product->id }}">
          <!-- Nombre del producto -->
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix grey-text text-lighten-1">label_outline</i>
              <input type="text" name="item_title" id="item_title" value="{{ $product->item_title }}">
              <label for="item_title">Titulo del producto</label>
            </div>
          </div>

          <!-- Descripcion -->
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix grey-text text-lighten-1">info_outline</i>
              <input type="text" name="item_desc" id="item_desc" value="{{ $product->item_desc }}">
              <label for="item_desc">Descripcion del producto</label>
            </div>
          </div>

          <!-- Categoria -->
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix grey-text text-lighten-1">grade</i>
              <select name="category_id">
                @foreach ($categories as $category)
                  <optgroup label="{{ $category->name }}">
                    @foreach ($category->subcategory as $subcat)
                      <option value="{{ $subcat->id }}" {{ ($product->category_id == $subcat->id) ? 'selected' : '' }}>{{ $subcat->name }}</option>
                    @endforeach
                  </optgroup>
                @endforeach
              </select>
              <label>Categoria</label>
            </div>
          </div>

          <!-- Etiquetas -->
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix grey-text text-lighten-1">email</i>
              <input type="text" name="tags" id="tags" value="{{ $product->tags }}">
              <label for="tags">Etiquetas</label>
            </div>
          </div>

          <!-- Añadir al carrito -->
          <div class="row">
            <div class="col s12">
              <button type="submit" class="btn blue waves-effect waves-light">
                Guardar los cambios<i class="material-icons right">shopping_cart</i>
              </button>
            </div>
          </div>

          {{ Form::close() }}

        </div>
      </div>

      <a href="{{ route('products') }}" class="right">Volver al catalogo</a>
    </div>
  </div>

@endsection

@section('pageScripts')
  @include('store.pageScripts')
@endsection
