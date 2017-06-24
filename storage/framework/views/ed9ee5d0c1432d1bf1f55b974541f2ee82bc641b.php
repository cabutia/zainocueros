<div class="col s12">
  <ul class="collection with-header">
    <li class="collection-item"><b>Pedidos</b>
      <span class="new badge orange" data-badge-caption="total"><?php echo e(count($requests)); ?></span>
    </li>
      <?php if(count($requests) != 0): ?>
        <?php $__currentLoopData = $requests; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $req): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

          <li class="collection-header">
            <b><?php echo e($req->user->name); ?></b> <i><?php echo e($req->user->email); ?></i>
            <span class="new badge grey" data-badge-caption="items"><?php echo e(count(explode(',', $req->products))); ?></span>
            <span class="new badge <?php echo e(($req->status == 0) ? 'red' : 'green'); ?>" data-badge-caption=""><?php echo e(($req->status == 0) ? 'Pendiente' : 'Respondido'); ?></span>
          </li>
          <div class="category-items">
            <li class="collection-item" style="border:none">
              <b>Productos</b><br>
              <?php $__currentLoopData = explode(',',$req->products); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <?php 
                  $p = App\Product::find($product);
                 ?>

                <div class="col s12">
                  <div class="card-horizontal">
                    <img src="<?php echo e($p->images[0]->path); ?>" width="40" alt="<?php echo e($p->tags); ?>" class="materialboxed">
                    <?php echo e($p->item_title); ?>

                  </div>
                </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <div class="col s12" style="padding-bottom: 20px">
                  <hr style="border: none; border-bottom: 1px solid #ddd; margin-bottom: 10px">
                  <p>
                    <b>Consulta</b><br>
                    <?php echo e($req->desc); ?>

                  </p>
                </div>
                <div class="col s12" style="padding-bottom: 20px">
                  <hr style="border: none; border-bottom: 1px solid #ddd; margin-bottom: 10px">
                  <p>
                    <b>Datos del usuario</b><br>
                    <?php 
                      $user = App\User::find($req->user_id);
                     ?>
                    <b>Telefono:</b> <?php echo e(($user->phone) ? $user->phone : 'No especificado'); ?><br>
                    <b>Email:</b> <?php echo e($user->email); ?>

                  </p>
                  <hr style="border: none; border-bottom: 1px solid #ddd; margin-top: 10px">
                </div>
                <?php if($req->status == 0): ?>
                  <?php echo e(Form::open(['route' => 'set_request_as_read'])); ?>

                  <input type="hidden" name="cart" value="<?php echo e($req->id); ?>">
                  <button type="submit" class="btn-flat green-text waves-effect waves-dark">Marcar como respondido</button>
                  <?php echo e(Form::close()); ?>

                <?php endif; ?>
            </li>
          </div>

        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <?php endif; ?>
  </ul>
</div>
