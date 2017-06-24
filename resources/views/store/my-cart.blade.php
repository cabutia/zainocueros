<div class="container">

  @if (Auth::check() && Auth::user()->access == -1)
    <!-- Developer tools -->
    @include('store.developer.dev-cart-tools')
  @endif

  @if (Auth::check() && Auth::user()->access != 0)
    <!-- Admin tools -->
    @include('store.admin.admin-cart-tools')
  @endif

  <!-- Pedidos -->
  <div class="col s12">
    <ul class="collection with-header">
      <li class="collection-item"><b>Mis pedidos</b></li>
      @foreach ($requests as $req)
        @if (Auth::user()->id == $req->user_id)
          <li class="collection-item teal-text">{{ date("d M Y, \a\ \l\a\s h:i",strtotime($req->created_at)) }}
            <span class="new {{ ($req->status == 0) ? 'red' : 'green' }} badge" data-badge-caption="">{{ ($req->status == 0) ? 'Pendiente' : 'Respondido' }}</span>
            <span class="new orange badge" data-badge-caption="items">{{count(explode(',',$req->products))}}</span>
          </li>
        @endif
      @endforeach
    </ul>
  </div>
  <!-- END Pedidos -->

  <!-- Carrito -->
  <div class="col s12">
    @if(count($cart) == 0)
      <ul class="collection with-header">
        <li class="collection-item"><b>Carrito de compras</b></li>
        <li class="collection-item">No hay ningun producto en tu carrito<a href="{{ route('products') }}" class="right"><b>Ir a la tienda</b></a></li>
      </ul>
    @else
        <ul class="collection with-header">
          <li class="collection-item"><b>Productos en el carrito ({{ count($cart) }})</b></li>
          @if ($products != 0)
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
            <li class="collection-item">
              {{ Form::open(['route' => 'send_cart_request']) }}
              <div class="input-field col s12">
                <textarea class="materialize-textarea" name="desc" id="desc"></textarea>
                <label for="desc">Escriba aqui su consulta</label>
              </div>
              <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
              <button type="submit" class="btn-flat blue-text waves-effect waves-light right" style="margin-bottom: 10px">Enviar consulta</a>
              {{ Form::close() }}
            </li>
          @endif
        </ul>
    @endif
  </div>
  <!-- END Carrito -->

</div>
