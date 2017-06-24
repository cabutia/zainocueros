@extends('mainweb.layout')

@section('content')
  <header class="relative no-padding">

    <!-- Navbar Desktop -->
    @include('home.navbar-desktop')

    <!-- Navbar Mobile -->
    @include('home.navbar-mobile')

  </header>


  <div class="row">
    <div class="col m4 offset-m4">
      <h4 style="margin-top: 70px; margin-bottom: 20px">Carga de productos</h4>
      {{ Form::open(["route" => "do.itemupload", "enctype" => "multipart/form-data", "files" => true]) }}
      <div class="file-field input-field">
        <div class="btn blue waves-effect waves-light">
          <span>Seleccionar</span>
          <input type="file" name="images[]" multiple required>
        </div>
        <div class="file-path-wrapper">
          <input type="text" class="file-path validate">
        </div>
      </div>
      <div class="input-field">
        <input type="text" name="item_title" id="item_title" placeholder="Pantubotas de cuero" required>
        <label for="item_title">Nombre del producto</label>
      </div>
      <div class="input-field">
        <select name="category_id" required>
          @foreach ($categories as $category)
            <optgroup label="{{ $category->name }}">
              @foreach ($category->subcategory as $subcat)
                <option value="{{ $subcat->id }}">{{ $subcat->name }}</option>
              @endforeach
            </optgroup>
          @endforeach
        </select>
        <label>Categoria</label>
      </div>
      <div class="input-field">
        <textarea name="item_desc" id="item_desc" class="materialize-textarea" placeholder="Hermoso producto de cuero argentino"></textarea>
        <label for="item_desc">Breve descripcion del producto</label>
      </div>
      <div class="input-field">
        <input type="text" name="tags" id="tags" placeholder="Alfombra, roja, peluche, cuero, vaca">
        <label for="tags">Etiquetas separadas por coma</label>
      </div>
      <button type="submit" class="btn blue right waves-effect waves-light">Cargar</button>
      {{ Form::close() }}
    </div>
  </div>

@endsection

@section('pageScripts')
  @include('store.pageScripts')
@endsection
