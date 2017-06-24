<div class="row">
  <div class="swiper-container" style="background: url('{{ asset('images/header-background.jpg') }}'); background-size: cover;">
    <div class="swiper-wrapper">

      <!-- Imagenes -->
      @foreach ($sliderproducts as $p)
        <div class="swiper-slide" style="position: relative; padding-top: 5px;" data-swiper-autoplay="1000">
          <div class="absolute-info-top">
            {{ $p->item_title }}
          </div>
          <div class="absolute-info-bottom-left hide-on-small-only">
            {{ $p->item_desc }}
          </div>
          <div class="absolute-info-bottom-right">
            <a href="#" class="btn blue">Detalles</a>
          </div>
          <img src="{{ asset($p->images[0]->path) }}" alt="{{ $p->tags }}" class="slider-resp-img">
        </div>
      @endforeach


    </div>
    <!-- Controles -->
    <div class="swiper-pagination"></div>
    <div class="swiper-button-prev hide-on-small-only"></div>
    <div class="swiper-button-next hide-on-small-only"></div>
  </div>
</div>
