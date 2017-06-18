<div class="col s12 m9">
  <div class="col s12 prod-c">
    @if(count($cart) == 0)
      <div class="col s12 prod-c">
        <h4>No hay ningun producto en tu carrito</h4>
        <a href="{{ route('products') }}" class="btn blue left">Ir a la tienda</a>
      </div>
    @else
        <ul class="collection with-header">
          <li class="collection-item"><b>Productos en el carrito ({{ count($cart) }})</b></li>
          @foreach ($products as $product)
            <li class="collection-item valign-wrapper relative">
              <!-- Imagen del producto -->
              <img src="{{ asset($product->images[0]->path) }}" alt="{{ $product->tags }}" width="40" class="valign">

              <!-- Nombre del producto -->
              <span class="valign" style="margin-left: 20px">
                <a style="color: #555" href="{{ route('product.details', ['id' => $product->id, 'slug' => $product->slug]) }}">{{ $product->item_title }}</a>
              </span>
              <!-- Eliminar -->
              {{ Form::open(['route' => 'delete_item_from_cart', 'method' => 'destroy']) }}
              <input type="hidden" name="item_id" value="{{ $product->id }}">
              <button type="submit" class="btn-flat valign"><i class="material-icons red-text">delete</i></span>
              {{ Form::close() }}
            </li>
          @endforeach
        </ul>

        <div class="row">
          <button type="button" class="btn blue right">Enviar consulta</button>
        </div>
    @endif
  </div>
</div>
