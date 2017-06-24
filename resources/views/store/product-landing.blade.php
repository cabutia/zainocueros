<div class="row">

  @if (count($products) > 5)
    <div class="col s12 m12 l6 product-in-landing forget-overflow no-padding relative lighten-1">
      <div class="product-extension">
        <span class="title flow-text">{{ $products[0]->item_title }}</span>
        <p>
          {{ $products[0]->item_desc }}
          <a href="{{ route('product.details', ['id' => $products[0]->id, 'slug' => $products[0]->slug]) }}" class="btn cyan go-to-product">ver detalles</a>
        </p>
      </div>
      <div class="parallax-container">
        <div class="parallax"><img src="{{ asset($products[0]->images[0]->path) }}"></div>
      </div>
    </div>

    <div class="col s12 m6 l3 product-in-landing forget-overflow no-padding relative lighten-1 hide-on-small-only">
      <div class="product-extension">
        <span class="title flow-text">{{ $products[1]->item_title }}</span>
        <p>
          {{ $products[1]->item_desc }}
          <a href="{{ route('product.details', ['id' => $products[1]->id, 'slug' => $products[1]->slug]) }}" class="btn cyan go-to-product">ver detalles</a>
        </p>
      </div>
      <div class="parallax-container">
        <div class="parallax"><img src="{{ asset($products[1]->images[0]->path) }}"></div>
      </div>
    </div>

    <!-- General products -->
    <div class="col s12 m6 l3 product-in-landing forget-overflow no-padding relative lighten-1 hide-on-small-only">
      {{-- <div class="important-product">
        -25%
      </div> --}}
      <div class="product-extension">
        <span class="title flow-text">{{ $products[2]->item_title }}</span>
        <p>
          {{ $products[2]->item_desc }}
          <a href="{{ route('product.details', ['id' => $products[2]->id, 'slug' => $products[2]->slug]) }}" class="btn cyan go-to-product">ver detalles</a>
        </p>
      </div>
      <div class="parallax-container">
        <div class="parallax"><img src="{{ asset($products[2]->images[0]->path) }}"></div>
      </div>
    </div>
  @else
    <div class="col s12">
      {{-- <h2>Aun no hay productos disponibles para esta categoria</h2> --}}
    </div>
  @endif

</div>
