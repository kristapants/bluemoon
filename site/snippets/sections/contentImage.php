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
  if ($image != ''): ?>
    <?php if ($caption != '') : ?><div class="caption-wrapper <?php
      if ($alignment == 'imageLeft') {
        echo 'align-left';
      } else if ($alignment == 'imageRight') {
        echo 'align-right';
      }
    ?>"><?php endif; ?>
      <img src="<?= $image ?>" class="img-responsive <?php
        if ($caption == '') {
          if ($alignment == 'imageLeft') {
            echo 'pull-left';
          } else if ($alignment == 'imageRight') {
            echo 'pull-right';
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