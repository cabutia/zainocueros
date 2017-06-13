@extends('mainweb.layout')

@section('content')
  <header class="relative no-padding">

    <!-- Navbar Desktop -->
    @include('home.navbar-desktop')

    <!-- Navbar Mobile -->
    @include('home.navbar-mobile')

  </header>

  <div class="row">
    <div class="col s6 offset-s3">
      {{-- {{ Form::open(["route" => "do.itemupload", "enctype" => "multipart/form-data"]) }}
      <div class="file-field input-field">
        <div class="btn">
          <span>File</span>
          <input type="file" name="item_image">
        </div>
        <div class="file-path-wrapper">
          <input type="text" class="file-path validate">
        </div>
      </div>
      <div class="input-field">
        <input type="text" name="item_title" id="item_title">
        <label for="item_title">Nombre del producto</label>
      </div>
      <div class="input-field">
        <textarea name="item_desc" id="item_desc" class="materialize-textarea"></textarea>
        <label for="item_desc">Breve descripcion del producto</label>
      </div>
      <button type="submit" class="btn right">Cargar</button>
      {{ Form::close() }} --}}
      <div class="demo" id="imagedit"></div>
      {{ Form::open(["route" => "post.itemupload.edit", "id" => "imageEditForm"]) }}
        <input type="hidden" name="base64image" id="base64image">
        <button type="button" id="result">Resultado</button>
      {{ Form::close() }}
      <script>
        var basic = $('#imagedit').croppie({
          viewport: { width: 400, height: 400 },
          boundary: { width: 500, height: 500 }
        });

        basic.croppie('bind', {
          url: '{{ asset($item->item_image) }}',
          points: [77, 469, 280, 739]
        })

        $('#result').on('click', function(){
          basic.croppie('result', 'base64', 'jpeg').then(function(image){
            var base = image.replace('data:image/png;base64,', '');
            $('#base64image').attr('value', base);
            $('#imageEditForm').submit();
          })
        });
      </script>

    </div>
  </div>

@endsection

@section('pageScripts')
  @include('store.pageScripts')
@endsection
