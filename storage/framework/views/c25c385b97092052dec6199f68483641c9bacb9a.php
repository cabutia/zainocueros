<?php $__env->startSection('content'); ?>
  <div class="row">
    <?php echo e(Form::open(['route' => 'do.register' , 'class' => 'col s12 m4 offset-m4 center-align', 'style' => 'margin-top: 25px'])); ?>

      <div class="col s8 offset-s2">
        <img src="<?php echo e(asset('images/zaino-logo.png')); ?>" class="responsive-img">
      </div>
      <div class="col s12">
        <div class="card z-depth-4 left-align">
          <div class="row">
            <div class="col s12 center" style="margin-top: 20px">
              <h6 class="blue-grey-text">Registrandote, podes suscribirte a todas las novedades, y hacer tus pedidos online!</h6>
            </div>
          </div>
          <div class="row">
            <div class="col s12">
              <div class="input-field">
                <i class="material-icons prefix">account_circle</i>
                <input type="text" name="name" id="name">
                <label for="name">Nombre y apellido</label>
              </div>
              <div class="input-field">
                <i class="material-icons prefix">phone</i>
                <input type="text" name="phone" id="phone">
                <label for="phone">Telefono de contacto</label>
              </div>
              <div class="input-field">
                <i class="material-icons prefix">email</i>
                <input type="email" name="email" id="email">
                <label for="email">Email</label>
              </div>
              <div class="input-field">
                <i class="material-icons prefix">lock</i>
                <input type="password" name="password" id="password">
                <label for="password">Contraseña</label>
              </div>
              <div class="input-field">
                <i class="material-icons prefix"></i>
                <input type="password" name="password_confirm" id="password_confirm">
                <label for="password_confirm">Confirmar contraseña</label>
              </div>
            </div>
            <div class="row">
              <div class="col s12 right-align">
                <button type="button" onclick="window.history.back()" class="btn waves-effect waves-light red">
                  <i class="material-icons">fast_rewind</i>
                </button>
                <button type="submit" class="btn waves-effect waves-light cyan">
                  <i class="material-icons">done</i>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    <?php echo e(Form::close()); ?>

  </div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('pageScripts'); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('mainweb.layout', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>