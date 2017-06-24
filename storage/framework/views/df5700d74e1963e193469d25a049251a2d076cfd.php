<?php $__env->startSection('content'); ?>
  <header class="relative no-padding">

    <!-- Shopping fixed -->
    <?php echo $__env->make('mainweb.absolute-shopping', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <!-- Navbar Desktop -->
    <?php echo $__env->make('home.navbar-desktop', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <!-- Navbar Mobile -->
    <?php echo $__env->make('home.navbar-mobile', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  </header>

  <!-- Product landing -->
  <?php echo $__env->make('store.product-landing', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <div class="container">
    <div class="row">

      <div class="card col s12" style="padding-bottom: 25px">
        <div class="col s12 center">
          <h3 class="flow-text">Edicion del producto</h3>
        </div>

        <div class="col s12 m6">
          <img src="<?php echo e(asset($product->images[0]->path)); ?>"
               alt="<?php echo e($product->tags); ?>"
               class="responsive-img materialboxed"
               style="width: 100% !important">
        </div>
        <div class="col s12 m6">
          <div class="hide-on-med-and-up" style="margin-top: 20px"></div>
          <?php echo e(Form::open(['route' => 'do.product.edit'])); ?>


          
          <input type="hidden" name="id" value="<?php echo e($product->id); ?>">
          <!-- Nombre del producto -->
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix grey-text text-lighten-1">label_outline</i>
              <input type="text" name="item_title" id="item_title" value="<?php echo e($product->item_title); ?>">
              <label for="item_title">Titulo del producto</label>
            </div>
          </div>

          <!-- Descripcion -->
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix grey-text text-lighten-1">info_outline</i>
              <input type="text" name="item_desc" id="item_desc" value="<?php echo e($product->item_desc); ?>">
              <label for="item_desc">Descripcion del producto</label>
            </div>
          </div>

          <!-- Categoria -->
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix grey-text text-lighten-1">grade</i>
              <select name="category_id">
                <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                  <optgroup label="<?php echo e($category->name); ?>">
                    <?php $__currentLoopData = $category->subcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                      <option value="<?php echo e($subcat->id); ?>" <?php echo e(($product->category_id == $subcat->id) ? 'selected' : ''); ?>><?php echo e($subcat->name); ?></option>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                  </optgroup>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
              </select>
              <label>Categoria</label>
            </div>
          </div>

          <!-- Etiquetas -->
          <div class="row">
            <div class="input-field col s12">
              <i class="material-icons prefix grey-text text-lighten-1">email</i>
              <input type="text" name="tags" id="tags" value="<?php echo e($product->tags); ?>">
              <label for="tags">Etiquetas</label>
            </div>
          </div>

          <!-- Añadir al carrito -->
          <div class="row">
            <div class="col s12">
              <button type="submit" class="btn blue waves-effect waves-light">
                Guardar los cambios<i class="material-icons right">shopping_cart</i>
              </button>
            </div>
          </div>

          <?php echo e(Form::close()); ?>


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