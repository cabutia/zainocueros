  <!-- Acomodar -->

  <!-- Acomodar -->

<div class="col s12 m3">
  <div class="row">

    <div class="col s12 prod-c">

      @if (Auth::check() && Auth::user()->access == -1)
        <!-- Developer tools -->
        @include('store.developer.dev-tools')
      @endif

      @if (Auth::check() && Auth::user()->access > 0 || Auth::check() && Auth::user()->access == -1)
        <!-- Admin tools -->
        @include('store.admin.admin-tools')
      @endif


      <ul class="collection with-header">
        <li class="collection-header"><b>Cueros</b><span class="right">-</span></li>
        <div class="category-items">
          <a href="#" class="collection-item">Cuero de vaca</a>
          <a href="#" class="collection-item">Cuero de oveja</a>
          <a href="#" class="collection-item">Cuero de lanar</a>
        </div>
        <li href="#" class="collection-header"><b>Calzado</b><span class="right">-</span></li>
        <div class="category-items">
          <a href="#" class="collection-item">Pantubotas bajas</a>
          <a href="#" class="collection-item">Pantubotas altas</a>
        </div>
        <li href="#" class="collection-header"><b>Alfombras</b><span class="right">-</span></li>
        <div class="category-items">
          <a href="#" class="collection-item">Patchwork</a>
          <a href="#" class="collection-item">Vaca</a>
          <a href="#" class="collection-item">Lanar</a>
          <a href="#" class="collection-item">Diseño</a>
        </div>
        <li href="#" class="collection-header"><b>Otros</b><span class="right">-</span></li>
        <div class="category-items">
          <a href="#" class="collection-item">Almohadones</a>
          <a href="#" class="collection-item">Decoracion de interiores</a>
          <a href="#" class="collection-item">Acolchados</a>
        </div>
        <li href="#" class="collection-header"><b>Sillas</b><span class="right">-</span></li>
        <div class="category-items">
          <a href="#" class="collection-item">Cubos</a>
          <a href="#" class="collection-item">Materos</a>
          <a href="#" class="collection-item">Banquitos</a>
          <a href="#" class="collection-item">Silla directorio</a>
          <a href="#" class="collection-item">BKF</a>
        </div>
        <li href="#" class="collection-header"><b>Linea niños</b><span class="right">-</span></li>
        <div class="category-items">
          <a href="#" class="collection-item">Personalizados</a>
        </div>
      </ul>
      <h6 class="blue-grey-text">Viendo <b>116</b> productos.<h6>
    </div>

  </div>
</div>
