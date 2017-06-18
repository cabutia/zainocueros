<div class="row">

  <div class="col s12 m12 l6 product-in-landing forget-overflow no-padding relative lighten-1">
    <div class="product-extension">
      <span class="title flow-text">{{ $products[0]->item_title }}</span>
      <p>
        {{ $products[0]->item_desc }}
        <a href="#" class="btn cyan go-to-product">ver detalles</a>
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
        <a href="#" class="btn cyan go-to-product">ver detalles</a>
      </p>
    </div>
    <div class="parallax-container">
      <div class="parallax"><img src="{{ asset($products[1]->images[0]->path) }}"></div>
    </div>
  </div>

  <!-- General products -->
  <div class="col s12 m6 l3 product-in-landing forget-overflow no-padding relative lighten-1 hide-on-small-only">
    <div class="important-product">
      -25%
    </div>
    <div class="product-extension">
      <span class="title flow-text">{{ $products[2]->item_title }}</span>
      <p>
        {{ $products[2]->item_desc }}
        <a href="#" class="btn cyan go-to-product">ver detalles</a>
      </p>
    </div>
    <div class="parallax-container">
      <div class="parallax"><img src="{{ asset($products[2]->images[0]->path) }}"></div>
    </div>
  </div>


</div>
