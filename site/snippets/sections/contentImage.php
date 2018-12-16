<?php
  $alignment = $data->alignment();
  $size = $data->imageSize();
  
  $caption = $data->caption();
  $image = '';
  $link = '';
  if ($data->contentImage()->isNotEmpty()) {
    $image = $page->image($data->contentImage());
    $link = $data->linkToImage();
    if ($image && $link == 'true') {
      $link = $image->url();
    } else {
      $link = '';
    }
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
    <figure class="<?php
      if ($alignment == 'imageLeft') {
        echo 'align-left';
      } else if ($alignment == 'imageRight') {
        echo 'align-right';
      } else if ($alignment == 'imageCenter') {
        echo 'text-center';
      }
    ?>"<?php
      if ($alignment == 'imageLeft' || $alignment == 'imageRight') {
        if ($size == 'medium' || $size == 'large') {
          ?>style="max-width: <?php 
            if ($size == 'medium') {
              echo '300px';
            } else {
              echo '600px';
            }
          ?>;"<?php
        }
      }
    ?>>
      <?php if ($link != '') { printf( '<a href="%s">', $link ); } ?>
      <img src="<?= $image ?>" class="img-responsive <?php
        if ($caption == '') {
          if ($alignment == 'imageLeft') {
            echo 'pull-left';
          } else if ($alignment == 'imageRight') {
            echo 'pull-right';
          } else if ($alignment == 'imageCenter') {
            echo 'align-center';
          }
        }
        ?>"/>
      <?php if ($link != '') { echo '</a>'; } ?>
      <?php 
      if ($caption != '') { 
        ?><figcaption <?php
        if ($size == 'medium' || $size == 'large') {
          ?>style="max-width: <?php 
            if ($size == 'medium') {
              echo '300px';
            } else {
              echo '600px';
            }
          ?>;"<?php
        }
        ?>><?= $caption ?></figcaption><?php
      }
      ?>
    </figure>
  <?php endif; ?>