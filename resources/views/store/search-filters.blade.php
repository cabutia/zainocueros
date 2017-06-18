  <!-- Acomodar -->

  <!-- Acomodar -->

<div class="col s12 m3">
  <div class="row">

    <div class="col s12 prod-c">

      @if (Auth::check() && Auth::user()->access == -1)
        <!-- Developer tools -->
        @include('store.developer.dev-tools')
      @endif

      @if (Auth::check() && Auth::user()->access != 0)
        <!-- Admin tools -->
        @include('store.admin.admin-tools')
      @endif
      <ul class="collection with-header">
        <a href="{{ route('products') }}" style="color: #444"><li class="collection-header"><b>Todos los productos</b></li></a>
        @foreach ($categories as $category)
          <li class="collection-header"><b>{{ $category->name }}</b><span class="right">-</span></li>
          <div class="category-items">
            @foreach ($category->subcategory as $subcat)
              <a href="{{ route('product.list.categories', ['catgory' => $category->slug, 'subcat' => $subcat->slug]) }}" class="collection-item">{{ $subcat->name }}</a>
            @endforeach
          </div>
        @endforeach

      </ul>
    </div>

  </div>
</div>
