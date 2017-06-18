@if (Auth::guest())
  <a class="cs-absolute-shopping z-depth-4 waves-effect waves-light hoverable" href="{{ route('register') }}">
@else
  <a class="cs-absolute-shopping z-depth-4 waves-effect waves-light hoverable" href="{{ route('show.shopping_cart') }}">
@endif
  <div class="left-button">
    <i class="material-icons">shopping_cart</i>
  </div>
  <div class="right-button">
    Carrito
  </div>
  <div class="items">
    {{ (Auth::guest()) ? '0' : count(Auth::user()->cart)}}
  </div>
</a>
