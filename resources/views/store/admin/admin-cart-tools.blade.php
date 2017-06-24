<div class="col s12">
  <ul class="collection with-header">
    <li class="collection-item"><b>Pedidos</b>
      {{-- <span class="new badge orange" data-badge-caption="total">{{ count($requests) }}</span> --}}
    </li>
      @if (count($requests) != 0)
        @foreach ($requests as $req)

          <li class="collection-header">
            <b>{{ $req->user->name }}</b> <i>{{ $req->user->email }}</i>
            <span class="new badge grey" data-badge-caption="items">{{ count(explode(',', $req->products)) }}</span>
            <span class="new badge {{ ($req->status == 0) ? 'red' : 'green' }}" data-badge-caption="">{{ ($req->status == 0) ? 'Pendiente' : 'Respondido' }}</span>
          </li>
          <div class="category-items">
            <li class="collection-item" style="border:none">
              <b>Productos</b><br>
              @foreach (explode(',',$req->products) as $product)
                @php
                  $p = App\Product::find($product);
                @endphp

                @if (count($p) != 0)
                  <div class="col s12">
                    <div class="card-horizontal">
                      {{-- {{ dump($p->images) }} --}}
                      @if (count($p->images) == 0)
                        <img src="{{ $p->images->path }}" width="40" alt="{{ $p->tags }}" class="materialboxed">
                      @else
                        <img src="{{ $p->images[0]->path }}" width="40" alt="{{ $p->tags }}" class="materialboxed">
                      @endif
                      {{ $p->item_title }}
                    </div>
                  </div>
                @endif
              @endforeach

                <div class="col s12" style="padding-bottom: 20px">
                  <hr style="border: none; border-bottom: 1px solid #ddd; margin-bottom: 10px">
                  <p>
                    <b>Consulta</b><br>
                    {{ $req->desc }}
                  </p>
                </div>

                <div class="col s12" style="padding-bottom: 20px">
                  <hr style="border: none; border-bottom: 1px solid #ddd; margin-bottom: 10px">
                  <p>
                    <b>Datos del usuario</b><br>
                    @php
                      $user = App\User::find($req->user_id);
                    @endphp
                    <b>Telefono:</b> {{ ($user->phone) ? $user->phone : 'No especificado' }}<br>
                    <b>Email:</b> {{ $user->email }}
                  </p>
                  <hr style="border: none; border-bottom: 1px solid #ddd; margin-top: 10px">
                </div>

                @if ($req->status == 0)
                  {{ Form::open(['route' => 'set_request_as_read']) }}
                  <input type="hidden" name="cart" value="{{ $req->id }}">
                  <button type="submit" class="btn-flat green-text waves-effect waves-dark">Marcar como respondido</button>
                  {{ Form::close() }}
                @endif
            </li>
          </div>

        @endforeach
      @endif
  </ul>
</div>
