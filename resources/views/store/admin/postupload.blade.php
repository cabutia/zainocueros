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
      <div class="demo" id="imagedit"></div>
      {{ Form::open(["route" => "post.itemupload.edit", "id" => "imageEditForm"]) }}
        <input type="hidden" name="item_id" value="{{ $item->id }}">
        <input type="hidden" name="base64image" id="base64image">
        <button type="button" id="result">Resultado</button>
      {{ Form::close() }}
      <script>
        var basic = $('#imagedit').croppie({
          viewport: { width: 450, height: 450 },
          boundary: { width: 700, height: 500 }
        });

        basic.croppie('bind', {
          url: '{{ asset($item->item_image) }}',
          points: [10, 10, 280, 739]
        })

        $('#result').on('click', function(){
          basic.croppie('result', 'base64', 'viewport', 'png').then(function(image){
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
