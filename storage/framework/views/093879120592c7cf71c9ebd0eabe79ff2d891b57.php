

<?php $__env->startSection('content'); ?>
  <header class="relative no-padding">

    <!-- Shopping fixed -->
    <?php echo $__env->make('mainweb.absolute-shopping', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <!-- Navbar Desktop -->
    <?php echo $__env->make('home.navbar-desktop', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <!-- Navbar Mobile -->
    <?php echo $__env->make('home.navbar-mobile', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  </header>



  <div class="container">
    <div class="row">

      <div class="card col s12" style="padding-bottom: 20px">
        <div class="col s12 center">
          <h3 class="flow-text">Detalles del producto</h3>
        </div>

        <div class="col s12 m6 swiper-container" style="max-height: 500px">
          <!-- Imagenes -->
          <div class="swiper-wrapper">
            <?php $__currentLoopData = $product->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <div class="swiper-slide"><img src="<?php echo e(asset($image->path)); ?>" alt="<?php echo e(asset($product->slug)); ?>" style="width: 100%"></div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>

          <div class="swiper-pagination"></div>

          <div class="swiper-button-prev hide-on-small-only"></div>
          <div class="swiper-button-next hide-on-small-only"></div>
        </div>
        <div class="col s12 m6">
          <!-- Nombre del producto -->
          <div class="row">
            <div class="col s12">
              <h4 style="margin-bottom: 0"><?php echo e($product->item_title); ?></h4>
              <a href="<?php echo e(route('product.list.categories', ['catgory' => $product->subcategory->category->slug, 'subcat' => $product->subcategory->slug])); ?>"><?php echo e($product->subcategory->name); ?></a>
            </div>
          </div>

          <!-- Descripcion -->
          <div class="row">
            <div class="col s12">
              <h6><b>Descripcion del producto</b></h6>
              <i class="material-icons left grey-text text-lighten-1">info_outline</i>
              <p><?php echo e($product->item_desc); ?></p>
            </div>
          </div>

          <!-- Medios de pago -->
          <div class="row">
            <div class="col s12">
              <h6><b>Medios de pago</b></h6>
              <i class="material-icons left grey-text text-lighten-1">payment</i>
              <p>Paypal, MercadoPago, Pago Facil, RapiPago, Mastercard, Visa, American Express</p>
            </div>
          </div>

          <!-- Envios -->
          <div class="row">
            <div class="col s12">
              <h6><b>Envios</b></h6>
              <i class="material-icons left grey-text text-lighten-1">email</i>
              <p>DHL, FedEx, OCA</p>
            </div>
          </div>



          <!-- Etiquetas -->
          <?php if($tags[0] !== ""): ?>
            <div class="row">
              <div class="col s12">
                <h6><b>Etiquetas</b></h6>
                <?php $__currentLoopData = $tags; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $tag): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <div class="chip" style="text-transform: capitalize"><?php echo e($tag); ?></div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </div>
            </div>
          <?php endif; ?>

          <!-- Añadir al carrito -->
          <div class="row">
            <div class="col s12">
              <?php if(Auth::guest()): ?>
                <a href="<?php echo e(route('register')); ?>" class="btn blue waves-effect waves-light">Añadir al carrito!<i class="material-icons right">shopping_cart</i></a>
              <?php else: ?>
                <?php echo e(Form::open(['route' => 'add_to_cart'])); ?>

                <input type="hidden" name="product_id" value="<?php echo e($product->id); ?>">
                <input type="hidden" name="user_id" value="<?php echo e(Auth::user()->id); ?>">
                <button type="submit" class="btn blue waves-effect waves-light">
                  Añadir al carrito!<i class="material-icons right">shopping_cart</i>
                </button>
                <?php echo e(Form::close()); ?>

              <?php endif; ?>
            </div>
          </div>
          <?php if(Auth::check() && Auth::user()->access != 0): ?>
            <div class="row"><div class="col s12">
              <a href="<?php echo e(route('product.edit', ['id' => $product->id])); ?>">
                <button type="button" class="btn grey lighten-1 waves-effect waves-light">
                  Editar<i class="material-icons right">mode_edit</i>
                </button>
              </a>
            </div></div>
          <?php endif; ?>

        </div>
      </div>

      <a href="<?php echo e(route('products')); ?>" class="right">Volver al catalogo</a>
    </div>
  </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageScripts'); ?>
  <?php echo $__env->make('store.pageScripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('mainweb.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>