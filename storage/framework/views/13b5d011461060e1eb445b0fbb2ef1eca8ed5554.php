<?php $__env->startSection('content'); ?>
  <header class="relative no-padding">

    <!-- Navbar Desktop -->
    <?php echo $__env->make('home.navbar-desktop', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

    <!-- Navbar Mobile -->
    <?php echo $__env->make('home.navbar-mobile', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

  </header>
  <button type="button" class="btn blue" id="sendForm">Continuar</button>

  <div class="loading-wrapper">
    <div class="loading-text">
      <div class="loading-circle-1"></div>
      <div class="loading-circle-2"></div>
      <div class="loading-circle-3"></div>
      Procesando las imagenes...
    </div>
  </div>

  <script type="text/javascript">
    $('.loading-wrapper').css({'opacity' : '1', 'display': 'block'});
  </script>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageScripts'); ?>
  <?php echo $__env->make('store.pageScripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('mainweb.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>