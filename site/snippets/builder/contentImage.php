<section class="image-section">
  <?php
    $alignment = $data->alignment();
    $size = $data->imageSize();
    $image = '';
    if ($data->contentImage()->isNotEmpty()) {
      $image = $page->image($data->contentImage());
      switch ($size) {
        case 'medium':
          $image = thumb($image, array( 'width' => 300, 'quality' => 80 ))->url();
          break;
        case 'large':
          $image = thumb($image, array( 'width' => 600, 'quality' => 80 ))->url();
          break;
        case 'full':
        default:
          $image = $image->url();
          break;
      }
    }
    ?>
  <?php if ($image != ''): ?>
    <img src="<?= $image?>" style="<?php
      if ($alignment == 'full') {
        echo '';
      } else if ($alignment == 'imageLeft') {
        echo 'float: left; max-width: 50%; padding-right: 15px; padding-bottom: 30px;';
      } else if ($alignment == 'imageRight') {
        echo 'float: right; max-width: 50%; padding-left: 15px; padding-bottom: 30px;';
      }
    ?>"/>
  <?php endif; ?>
  <?php if ($alignment != 'fullWidth') : ?>
  <p>
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean augue lorem, ornare vitae dignissim non, consequat in nisi. Phasellus aliquet massa eget ipsum facilisis fringilla. Morbi posuere convallis libero, vitae varius enim vehicula vel. Donec condimentum aliquet tellus a laoreet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean vestibulum arcu euismod porta ornare. Nunc mollis nisl et est aliquam, ut cursus odio bibendum. Aenean eu euismod mi. Curabitur eget enim et ligula iaculis gravida.
  </p>
  <?php endif; ?>
  <div style="clear: both;"></div>
</section>