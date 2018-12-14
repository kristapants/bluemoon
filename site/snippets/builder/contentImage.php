<section class="image-section">
  <?php
    $alignment = $data->alignment();
    $size = $data->imageSize();
    $caption = $data->caption();
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
  <style>
    .caption-wrapper.align-left,
    .caption-wrapper.align-right,
    img.align-left,
    img.align-right {
      max-width: 50%;
      padding-bottom: 30px;
    }
    .caption-wrapper.align-left,
    img.align-left {
      float: left;
      padding-right: 15px;
    }
    .caption-wrapper.align-right,
    img.align-right {
      float: right;
      padding-left: 15px;
    }
    .caption {
      text-align: center;
      font-style: italic;
    }
  </style>
  <?php if ($image != ''): ?>
    <?php if ($caption != '') : ?><div class="caption-wrapper <?php 
      if ($alignment == 'imageLeft') {
        echo 'align-left';
      } else if ($alignment == 'imageRight' ) {
        echo 'align-right';
      }
    ?>"><?php endif; ?>
    <img src="<?= $image?>" class="<?php
      if ($caption == '') {
        if ($alignment == 'imageLeft') {
          echo 'align-left';
        } else if ($alignment == 'imageRight' ) {
          echo 'align-right';
        }
      }
    ?>"/>
    <?php 
    if ($caption != '') { 
      printf( '<p class="caption">%s</p>', $caption);
    }
    ?>
    <?php if ($caption != '') : ?></div><?php endif; ?>
  <?php endif; ?>
  <?php if ($alignment != 'fullWidth') : ?>
  <p>
  Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean augue lorem, ornare vitae dignissim non, consequat in nisi. Phasellus aliquet massa eget ipsum facilisis fringilla. Morbi posuere convallis libero, vitae varius enim vehicula vel. Donec condimentum aliquet tellus a laoreet. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Aenean vestibulum arcu euismod porta ornare. Nunc mollis nisl et est aliquam, ut cursus odio bibendum. Aenean eu euismod mi. Curabitur eget enim et ligula iaculis gravida.
  </p>
  <?php endif; ?>
  <div style="clear: both;"></div>
</section>