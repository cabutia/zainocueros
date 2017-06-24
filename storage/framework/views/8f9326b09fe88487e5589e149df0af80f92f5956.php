

<!-- Productos -->
<div class="col s12 m9">

  <?php if(count($products) == 0): ?>
    <div class="col s6 m4 prod-c">
      <h4>No hay productos disponibles.</h4>
    </div>
  <?php else: ?>
    <div class="row">
      <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col s6 m4 l4 relative prod-c">
          <?php if(Auth::check() && Auth::user()->access != 0): ?>
            <?php echo $__env->make('store.admin.product-admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
          <?php endif; ?>
          <div class="card pssd product-card">
            <a href="<?php echo e(route('product.details', ['id' => $product->id, 'slug' => $product->slug])); ?>">
              <div class="details-wrapper valign-wrapper" style="background: rgba(<?php echo e($product->background); ?>,.71);">
                <span class="valign flow-text">Ir a detalles</span>
              </div>
            </a>
            <div class="card-image">
              <img src="<?php echo e(asset($product->images[0]->path)); ?>" alt="<?php echo e($product->item_title); ?>">
              <span class="card-title" style="text-shadow: 0px 2px 3px rgba(0,0,0,.5)"><?php echo e($product->item_title); ?></span>
            </div>
            <div class="card-content prod">
            </div>
          </div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
  <?php endif; ?>

</div>
