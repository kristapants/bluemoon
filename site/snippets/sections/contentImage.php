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
  if ($image != ''): ?><img src="<?= $image ?>" class="img-responsive <?php
  if ($alignment == 'fullWidth') {
    echo '';
  } else if ($alignment == 'imageLeft') {
    echo 'pull-left';
  } else if ($alignment == 'imageRight') {
    echo 'pull-right';
  }
?>"/><?php endif; ?>