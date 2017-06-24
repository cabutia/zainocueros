<!-- Filtros de busqueda -->
<div class="col s12 m3">
  <div class="row">

    <div class="col s12 prod-c">

      <?php if(Auth::check() && Auth::user()->access == -1): ?>
        <!-- Developer tools -->
        <?php echo $__env->make('store.developer.dev-tools', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php endif; ?>

      <?php if(Auth::check() && Auth::user()->access != 0): ?>
        <!-- Admin tools -->
        <?php echo $__env->make('store.admin.admin-tools', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
      <?php endif; ?>
      <ul class="collection with-header">
        <a href="<?php echo e(route('products')); ?>" style="color: #444"><li class="collection-header"><b>Todos los productos</b></li></a>
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
          <li class="collection-header"><b><?php echo e($category->name); ?></b><span class="right">-</span></li>
          <div class="category-items">
            <?php $__currentLoopData = $category->subcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <a href="<?php echo e(route('product.list.categories', ['catgory' => $category->slug, 'subcat' => $subcat->slug])); ?>" class="collection-item"><?php echo e($subcat->name); ?></a>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

      </ul>
    </div>

  </div>
</div>
