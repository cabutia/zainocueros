

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

  <div class="row">
    <div class="col s12">
      
      <!-- Search filters -->
      <?php echo $__env->make('store.search-filters', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>

      <!-- Product listing -->
      <?php echo $__env->make('store.product-listing', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    </div>
  </div>

<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageScripts'); ?>
  <?php echo $__env->make('store.pageScripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('mainweb.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>