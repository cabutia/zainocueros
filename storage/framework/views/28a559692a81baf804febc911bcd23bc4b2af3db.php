<nav class="mobile-nav hide-on-large-only no-margin" id="mobile-nav">
  <a href="#" data-activates="slide-out" class="button-collapse right"><i class="material-icons">menu</i></a>
  <a href="#" class="left"><img src="<?php echo e(asset('images/zaino-only-white-logo.png')); ?>" class="mobile-nav-logo"></a>
  <ul class="side-nav" id="slide-out">
    <li><a href="<?php echo e(asset('home')); ?>"><i class="material-icons">airplay</i>Inicio
    </a></li>
    <li><a href="<?php echo e(route('products')); ?>"><i class="material-icons">work</i>Catalogo online
    </a></li>
    <li><a href="<?php echo e(route('home')); ?>#contacto"><i class="material-icons">contact_phone</i>Contacto
    </a></li>

    <li><a href="#"><i class="material-icons">shopping_cart</i>Carrito
      <span class="deep-orange badge new right" data-badge-caption="">0</span>
    </a></li>

    <div class="divider"></div>
    <div class="col s12 center">
      <?php if(Auth::check()): ?>
        <a href="#">Bienvenido <b><?php echo e(Auth::user()->name); ?></b></a>
        <a href="<?php echo e(route('logout')); ?>"><button type="button" class="center btn border-btn z-depth-0">Cerrar sesión</button></a>
      <?php else: ?>
        <a href="<?php echo e(route('login')); ?>"><button type="button" class="center btn border-btn z-depth-0">Iniciar sesión</button></a>
        <a href="<?php echo e(route('register')); ?>"><button type="button" class="center btn border-btn z-depth-0">Registrate</button></a>
      <?php endif; ?>
    </div>
  </ul>
</nav>
