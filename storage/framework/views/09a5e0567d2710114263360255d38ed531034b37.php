

<script type="text/javascript">
  $(document).ready(function(){
    <?php if(count($errors->all()) > 0): ?>
      <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $err): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        Materialize.toast('<?php echo e($err); ?>', 3000, 'brown darken-2')
      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
  });
</script>
