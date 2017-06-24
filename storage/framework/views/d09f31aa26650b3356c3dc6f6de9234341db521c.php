<div class="row">

  <?php if(count($products) != 0): ?>
    <div class="col s12 m12 l6 product-in-landing forget-overflow no-padding relative lighten-1">
      <div class="product-extension">
        <span class="title flow-text"><?php echo e($products[0]->item_title); ?></span>
        <p>
          <?php echo e($products[0]->item_desc); ?>

          <a href="#" class="btn cyan go-to-product">ver detalles</a>
        </p>
      </div>
      <div class="parallax-container">
        <div class="parallax"><img src="<?php echo e(asset($products[0]->images[0]->path)); ?>"></div>
      </div>
    </div>

    <div class="col s12 m6 l3 product-in-landing forget-overflow no-padding relative lighten-1 hide-on-small-only">
      <div class="product-extension">
        <span class="title flow-text"><?php echo e($products[1]->item_title); ?></span>
        <p>
          <?php echo e($products[1]->item_desc); ?>

          <a href="#" class="btn cyan go-to-product">ver detalles</a>
        </p>
      </div>
      <div class="parallax-container">
        <div class="parallax"><img src="<?php echo e(asset($products[1]->images[0]->path)); ?>"></div>
      </div>
    </div>

    <!-- General products -->
    <div class="col s12 m6 l3 product-in-landing forget-overflow no-padding relative lighten-1 hide-on-small-only">
      <div class="important-product">
        -25%
      </div>
      <div class="product-extension">
        <span class="title flow-text"><?php echo e($products[2]->item_title); ?></span>
        <p>
          <?php echo e($products[2]->item_desc); ?>

          <a href="#" class="btn cyan go-to-product">ver detalles</a>
        </p>
      </div>
      <div class="parallax-container">
        <div class="parallax"><img src="<?php echo e(asset($products[2]->images[0]->path)); ?>"></div>
      </div>
    </div>
  <?php else: ?>
    <div class="col s12">
      <h2>Aun no hay productos disponibles para esta categoria</h2>
    </div>
  <?php endif; ?>

</div>
