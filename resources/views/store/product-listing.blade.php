

<!-- Productos -->
<div class="col s12 m9">

  @if(count($products) == 0)
    <div class="col s6 m4 prod-c">
      <h4>No hay productos disponibles.</h4>
    </div>
  @else
    <div class="row">
      @foreach ($products as $product)
        <div class="col s6 m4 l4 relative prod-c">
          @if (Auth::check() && Auth::user()->access != 0)
            @include('store.admin.product-admin')
          @endif
          <div class="card pssd product-card">
            <a href="{{ route('product.details', ['id' => $product->id, 'slug' => $product->slug]) }}">
              <div class="details-wrapper valign-wrapper" style="background: rgba({{ $product->background }},.71);">
                <span class="valign flow-text">Ir a detalles</span>
              </div>
            </a>
            <div class="card-image">
              <img src="{{ asset($product->images[0]->path) }}-th.png" alt="{{ $product->item_title }}">
              <span class="card-title" style="text-shadow: 0px 2px 3px rgba(0,0,0,.5)">{{ $product->item_title }}</span>
            </div>
            <div class="card-content prod">
            </div>
          </div>
        </div>
      @endforeach
    </div>
  @endif

</div>
