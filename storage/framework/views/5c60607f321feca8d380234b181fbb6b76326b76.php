<div class="row">
  <div class="swiper-container">
    <div class="swiper-wrapper" style="background: url('<?php echo e(asset('images/header-background.jpg')); ?>'); background-size: cover;">

      <!-- Imagenes -->
      <?php $__currentLoopData = $sliderproducts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $p): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="swiper-slide" style="position: relative; padding-top: 5px;" data-swiper-autoplay="1000">
          <div class="absolute-info-top">
            <?php echo e($p->item_title); ?>

          </div>
          <div class="absolute-info-bottom-left hide-on-small-only">
            <?php echo e($p->item_desc); ?>

          </div>
          <div class="absolute-info-bottom-right">
            <a href="#" class="btn blue">Detalles</a>
          </div>
          <img src="<?php echo e(asset($p->images[0]->path)); ?>" alt="<?php echo e($p->tags); ?>" class="slider-resp-img">
        </div>
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


    </div>
    <!-- Controles -->
    <div class="swiper-pagination"></div>
    <div class="swiper-button-prev hide-on-small-only"></div>
    <div class="swiper-button-next hide-on-small-only"></div>
  </div>
</div>
