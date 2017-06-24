<?php $__env->startSection('content'); ?>
  <header class="relative no-padding">

    <div class="abs-logo-wrapper valign-wrapper">
      <div class="row">
        <div class="col s8 offset-s2">
          <img src="<?php echo e(asset('images/zaino-header-logo.png')); ?>" alt="zaino logo" class="responsive-img valign">
        </div>
      </div>
    </div>

    <!-- Shopping fixed -->
    <?php echo $__env->make('mainweb.absolute-shopping', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <!-- Navbar Desktop -->
    <?php echo $__env->make('home.navbar-desktop', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <!-- Navbar Mobile -->
    <?php echo $__env->make('home.navbar-mobile', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <div class="row no-margin header-img">
      <div class="col s12 no-padding header-img-container">
        <img src="<?php echo e(asset('images/header-background.jpg')); ?>" alt="zaino cueros header" class="header-img">
      </div>
    </div>
  </header>

  <!-- Presentacion -->
  <?php echo $__env->make('home.who-we-are', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <!-- Slider 5 prod -->
  <?php echo $__env->make('home.slider-5-prod', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <!-- Contacto -->
  <?php echo $__env->make('home.contacto', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  <!-- 4-box -->
  <?php echo $__env->make('home.fourBox', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageScripts'); ?>
  <?php echo $__env->make('home.pageScripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('mainweb.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>