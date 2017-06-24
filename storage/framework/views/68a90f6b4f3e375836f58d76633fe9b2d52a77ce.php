<div class="container">

  <?php if(Auth::check() && Auth::user()->access == -1): ?>
    <!-- Developer tools -->
    <?php echo $__env->make('store.developer.dev-cart-tools', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php endif; ?>

  <?php if(Auth::check() && Auth::user()->access != 0): ?>
    <!-- Admin tools -->
    <?php echo $__env->make('store.admin.admin-cart-tools', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php endif; ?>

  <!-- Pedidos -->
  <div class="col s12">
    <ul class="collection with-header">
      <li class="collection-item"><b>Mis pedidos</b></li>
      <?php $__currentLoopData = $requests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $req): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <?php if(Auth::user()->id == $req->user_id): ?>
          <li class="collection-item teal-text"><?php echo e(date("d M Y, \a\ \l\a\s h:i",strtotime($req->created_at))); ?>

            <span class="new <?php echo e(($req->status == 0) ? 'red' : 'green'); ?> badge" data-badge-caption=""><?php echo e(($req->status == 0) ? 'Pendiente' : 'Respondido'); ?></span>
            <span class="new orange badge" data-badge-caption="items"><?php echo e(count(explode(',',$req->products))); ?></span>
          </li>
        <?php endif; ?>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
  </div>
  <!-- END Pedidos -->

  <!-- Carrito -->
  <div class="col s12">
    <?php if(count($cart) == 0): ?>
      <ul class="collection with-header">
        <li class="collection-item"><b>Carrito de compras</b></li>
        <li class="collection-item">No hay ningun producto en tu carrito<a href="<?php echo e(route('products')); ?>" class="right"><b>Ir a la tienda</b></a></li>
      </ul>
    <?php else: ?>
        <ul class="collection with-header">
          <li class="collection-item"><b>Productos en el carrito (<?php echo e(count($cart)); ?>)</b></li>
          <?php if($products != 0): ?>
            <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li class="collection-item valign-wrapper relative">
                <!-- Imagen del producto -->
                <img src="<?php echo e(asset($product->images[0]->path)); ?>" alt="<?php echo e($product->tags); ?>" width="40" class="valign">

                <!-- Nombre del producto -->
                <span class="valign" style="margin-left: 20px">
                  <a style="color: #555" href="<?php echo e(route('product.details', ['id' => $product->id, 'slug' => $product->slug])); ?>"><?php echo e($product->item_title); ?></a>
                </span>
                <!-- Eliminar -->
                <?php echo e(Form::open(['route' => 'delete_item_from_cart', 'method' => 'destroy'])); ?>

                <input type="hidden" name="item_id" value="<?php echo e($product->id); ?>">
                <button type="submit" class="btn-flat valign"><i class="material-icons red-text">delete</i></span>
                <?php echo e(Form::close()); ?>


              </li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <li class="collection-item">
              <?php echo e(Form::open(['route' => 'send_cart_request'])); ?>

              <div class="input-field col s12">
                <textarea class="materialize-textarea" name="desc" id="desc"></textarea>
                <label for="desc">Escriba aqui su consulta</label>
              </div>
              <input type="hidden" name="user_id" value="<?php echo e(Auth::user()->id); ?>">
              <button type="submit" class="btn-flat blue-text waves-effect waves-light right" style="margin-bottom: 10px">Enviar consulta</a>
              <?php echo e(Form::close()); ?>

            </li>
          <?php endif; ?>
        </ul>
    <?php endif; ?>
  </div>
  <!-- END Carrito -->

</div>
