<?php if(Auth::guest()): ?>
  <a class="cs-absolute-shopping z-depth-4 waves-effect waves-light hoverable" href="<?php echo e(route('register')); ?>">
<?php else: ?>
  <a class="cs-absolute-shopping z-depth-4 waves-effect waves-light hoverable" href="<?php echo e(route('show.shopping_cart')); ?>">
<?php endif; ?>
  <div class="left-button">
    <i class="material-icons">shopping_cart</i>
  </div>
  <div class="right-button">
    Carrito
  </div>
  <div class="items">
    <?php echo e((Auth::guest()) ? '0' : count(Auth::user()->cart)); ?>

  </div>
</a>
