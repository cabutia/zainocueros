<?php $__env->startSection('content'); ?>
  <header class="relative no-padding">

    <!-- Navbar Desktop -->
    <?php echo $__env->make('home.navbar-desktop', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <!-- Navbar Mobile -->
    <?php echo $__env->make('home.navbar-mobile', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  </header>


  <div class="row">
    <div class="col m4 offset-m4">
      <h4 style="margin-top: 70px; margin-bottom: 20px">Carga de productos</h4>
      <?php echo e(Form::open(["route" => "do.itemupload", "enctype" => "multipart/form-data"])); ?>

      <div class="file-field input-field">
        <div class="btn blue waves-effect waves-light">
          <span>Seleccionar</span>
          <input type="file" name="images[]" multiple required>
        </div>
        <div class="file-path-wrapper">
          <input type="text" class="file-path validate">
        </div>
      </div>
      <div class="input-field">
        <input type="text" name="item_title" id="item_title" placeholder="Pantubotas de cuero">
        <label for="item_title">Nombre del producto</label>
      </div>
      <div class="input-field">
        <select name="category_id">
          <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <optgroup label="<?php echo e($category->name); ?>">
              <?php $__currentLoopData = $category->subcategory; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $subcat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <option value="<?php echo e($subcat->id); ?>"><?php echo e($subcat->name); ?></option>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </optgroup>
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </select>
        <label>Categoria</label>
      </div>
      <div class="input-field">
        <textarea name="item_desc" id="item_desc" class="materialize-textarea" placeholder="Hermoso producto de cuero argentino" required></textarea>
        <label for="item_desc">Breve descripcion del producto</label>
      </div>
      <div class="input-field">
        <input type="text" name="tags" id="tags" placeholder="Alfombra, roja, peluche, cuero, vaca" required>
        <label for="tags">Etiquetas separadas por coma</label>
      </div>
      <button type="submit" class="btn blue right waves-effect waves-light">Cargar</button>
      <?php echo e(Form::close()); ?>

    </div>
  </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageScripts'); ?>
  <?php echo $__env->make('store.pageScripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('mainweb.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>