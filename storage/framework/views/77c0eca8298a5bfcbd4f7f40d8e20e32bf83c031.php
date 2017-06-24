<nav class="big-nav hide-on-med-and-down" id="desktop-nav">
  <ul class="left">
    <li class="waves-effect waves-red flow-text"><a href="<?php echo e(route('home')); ?>">Inicio
    </a></li>
    <li class="waves-effect waves-red flow-text"><a href="<?php echo e(route('products')); ?>">Catalogo online
    </a></li>
    <li class="waves-effect waves-red flow-text"><a href="<?php echo e(route('home')); ?>#contacto">Contacto
    </a></li>
    <?php if(Auth::check()): ?>
      <li class="waves-effect waves-red flow-text"><a href="<?php echo e(route('show.shopping_cart')); ?>">Carrito
      </a></li>
    <?php else: ?>
      <li class="waves-effect waves-red flow-text"><a href="<?php echo e(route('register')); ?>">Carrito
      </a></li>
    <?php endif; ?>
  </ul>
  <ul class="right">
    <?php if(Auth::check()): ?>
      <li class="waves-effect waves-red flow-text"><a href="#"><b><?php echo e(Auth::user()->name); ?></b>
      </a></li>
      <li class="waves-effect waves-red flow-text"><a href="<?php echo e(route('logout')); ?>">Cerrar sesión
      </a></li>
    <?php else: ?>
      <li class="waves-effect waves-red flow-text"><a href="<?php echo e(route('register')); ?>">Registrate
      </a></li>
      <li class="waves-effect waves-red flow-text"><a href="<?php echo e(route('login')); ?>">Iniciar sesión
      </a></li>
    <?php endif; ?>
  </ul>
</nav>
