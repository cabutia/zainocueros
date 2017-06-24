<!DOCTYPE html>
<html>
  <?php echo $__env->make('mainweb.head', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
  <?php if(!isset($bodyColor)): ?>
    <body>
  <?php else: ?>
    <body class="<?php echo e($bodyColor); ?>">
  <?php endif; ?>
    <?php echo $__env->make('mainweb.socialmedia', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>
    <?php if(!isset($noFooter)): ?>
      <?php echo $__env->make('mainweb.footer', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php endif; ?>
    <?php echo $__env->make('mainweb.generalPageScripts', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>
    <?php echo $__env->yieldContent('pageScripts'); ?>
  </body>
</html>
