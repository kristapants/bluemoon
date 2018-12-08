<section class="content-section">
  <?php if ($data->contentImage()->isNotEmpty()): ?>
    <img src="<?= $page->image($data->contentImage())->url() ?>" style="width: 50%; <?php
      $orientation = $data->contentOrientation();
      if ( $orientation == 'imageLeft' ) {
        ?>float: left; margin-right: 15px;<?php
      } else if ( $orientation == 'imageRight' ) {
        ?>float: right; margin-left: 15px;<?php
      }
    ?>" />
  <?php endif ?>
  <h3 class="">
    <?= $data->contentHeading() ?>
  </h3>
  <?= $data->contentText()->kirbytext() ?>
</section>