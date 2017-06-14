<div class="col s12 m9">

  @if(count($products) == 0)
    <div class="col s6 m4 prod-c">
      <h4>No hay productos disponibles.</h4>
    </div>
  @else
    @foreach ($products as $product)
      <div class="col s6 m4 relative prod-c">
        @if (Auth::check() && Auth::user()->access != 0)
          @include('store.admin.product-admin')
        @endif
        <div class="card product-card">
          <a href="{{ route('product.details', ['id' => $product->id, 'slug' => $product->slug]) }}">
            <div class="details-wrapper valign-wrapper" style="background: rgba({{ $product->background }},.71);">
              <span class="valign flow-text">Ir a detalles</span>
            </div>
          </a>
          <div class="card-image">
            <img src="{{ asset($product->item_image) }}" alt="{{ $product->item_title }}">
          </div>
          <div class="card-content prod">
            <ul class="collection">
              <li class="collection-item">
                <b>{{ $product->item_title }}</b>
              </li>
              <li class="collection-item desc">
                {{ $product->item_desc }}
              </li>
            </ul>
          </div>
        </div>
      </div>
    @endforeach
  @endif

</div>
