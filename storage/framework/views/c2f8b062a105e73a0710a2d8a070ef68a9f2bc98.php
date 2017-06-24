<?php $__env->startSection('content'); ?>
  <header class="relative no-padding">

    <!-- Navbar Desktop -->
    <?php echo $__env->make('home.navbar-desktop', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <!-- Navbar Mobile -->
    <?php echo $__env->make('home.navbar-mobile', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  </header>

  <div class="loading-wrapper">
    <div class="loading-text">
      <div class="loading-circle-1"></div>
      <div class="loading-circle-2"></div>
      <div class="loading-circle-3"></div>
      Procesando las imagenes...
    </div>
  </div>

  <div class="row">
    <div class="col s12">
      <?php $__currentLoopData = $item->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col">
          <div id="product_image_<?php echo e($image->id); ?>"></div>
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
      <div class="row">
        <?php echo e(Form::open(["route" => "post.itemupload.edit", "id" => "imageEditForm"])); ?>

          <input type="hidden" name="item_id" value="<?php echo e($item->id); ?>">
          <?php $__currentLoopData = $item->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <input type="hidden" name="input_image[]" id="input_image_<?php echo e($image->id); ?>">
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          <div class="row">
            <button type="button" class="btn blue waves-effect waves-light" id="sendForm">Continuar</button>
          </div>
        <?php echo e(Form::close()); ?>

      </div>
      <script>
        <?php $__currentLoopData = $item->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        var product_croppie_<?php echo e($image->id); ?> = $('#product_image_<?php echo e($image->id); ?>').croppie({
          viewport: { width: 300, height: 300 },
          boundary: { width: 300, height: 300 }
        });

        product_croppie_<?php echo e($image->id); ?>.croppie('bind', {
          url: '<?php echo e(asset($image->path)); ?>',
          points: [10, 10, 280, 739]
        });
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        $('#sendForm').on('click', function(){
          $('.loading-wrapper').css({'opacity' : '1', 'display': 'block'});
          <?php $__currentLoopData = $item->images; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $image): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            product_croppie_<?php echo e($image->id); ?>.croppie('result', 'base64', 'viewport', 'png').then(function(image){
              $('#input_image_<?php echo e($image->id); ?>').attr('value', image.replace('data:image/png;base64,', ''));
            });
          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
          setTimeout(function(){
            $('#imageEditForm').submit();
          }, 12000);
        });
      </script>

    </div>
  </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageScripts'); ?>
  <?php echo $__env->make('store.pageScripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('mainweb.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>