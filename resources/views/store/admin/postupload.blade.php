@extends('mainweb.layout')

@section('content')
  <header class="relative no-padding">

    <!-- Navbar Desktop -->
    @include('home.navbar-desktop')

    <!-- Navbar Mobile -->
    @include('home.navbar-mobile')

  </header>

  <div class="loading-wrapper">
    <div class="loading-text">
      <div class="loading-circle-1"></div>
      <div class="loading-circle-2"></div>
      <div class="loading-circle-3"></div>
      Procesando las imagenes...
    </div>
  </div>

  <div class="row">
    <div class="col s12">
      @foreach ($item->images as $image)
        <div class="col">
          <div id="product_image_{{ $image->id }}"></div>
        </div>
      @endforeach
      <div class="row">
        {{ Form::open(["route" => "post.itemupload.edit", "id" => "imageEditForm"]) }}
          <input type="hidden" name="item_id" value="{{ $item->id }}">
          @foreach ($item->images as $image)
            <input type="hidden" name="input_image[]" id="input_image_{{ $image->id }}">
          @endforeach
          <div class="row">
            <button type="button" class="btn blue waves-effect waves-light" id="sendForm">Continuar</button>
          </div>
        {{ Form::close() }}
      </div>
      <script>
        @foreach ($item->images as $image)
        var product_croppie_{{ $image->id }} = $('#product_image_{{ $image->id }}').croppie({
          viewport: { width: 300, height: 300 },
          boundary: { width: 300, height: 300 }
        });

        product_croppie_{{ $image->id }}.croppie('bind', {
          url: '{{ asset($image->path) }}',
          points: [10, 10, 280, 739]
        });
        @endforeach

        $('#sendForm').on('click', function(){
          $('.loading-wrapper').css({'opacity' : '1', 'display': 'block'});
          @foreach ($item->images as $image)
            product_croppie_{{ $image->id }}.croppie('result', 'base64', 'viewport', 'png').then(function(image){
              $('#input_image_{{ $image->id }}').attr('value', image.replace('data:image/png;base64,', ''));
            });
          @endforeach
          setTimeout(function(){
            $('#imageEditForm').submit();
          }, 12000);
        });
      </script>

    </div>
  </div>

@endsection

@section('pageScripts')
  @include('store.pageScripts')
@endsection
