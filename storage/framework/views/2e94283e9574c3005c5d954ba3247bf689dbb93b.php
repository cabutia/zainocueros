<div class="admin-options-desktop">
  <?php echo e(Form::open(['route' => 'product.delete', 'method' => 'destroy'])); ?>

    <input type="hidden" name="id" value="<?php echo e($product->id); ?>">

    <!-- Eliminar -->
    <button type="submit" class="admin-delete-item z-depth-1">Eliminar producto</button>
    <!-- Editar -->
    <a href="<?php echo e(route('product.edit', $product->id)); ?>" class="admin-edit-item z-depth-1">Editar informacion</a>

  <?php echo e(Form::close()); ?>

</div>
