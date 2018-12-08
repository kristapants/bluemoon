<?php
  $orientation = $data->contentOrientation();
  $heading = $data->contentHeading();
  $image = $page->image($data->contentImage())->url();
  $text = $page->contentText()->kirbytext();

  // get the orientation class name
  if ( $orientation == 'imageLeft' ) {
    $orientationClass = 'orientation-left';
  } else if ( $orientation == 'imageRight' ) {
    $orientationClass = 'orientation-right';
  }
  if ( $text != '') :
?> 
<section class="content-section boxed-sm">
  <div class="container">
    <div class="row blog-v">
      <div class="col-md-12">
        <div class="post <?= $orientationClass ?>">
          <?php
            $imageColumn = '<div class="img-wrapper js-set-bg-blog-thumb">'
              .'<img src="' . $image . '">'
              .'</div>';
            $textColumn = '<div class="desc">'
              . '<h3 class="title-default">' . $heading . '</h3>'
              // . '<p class="sapo">'
              . $text
              // . '</p>'
              . '</div>';

            if ( $orientation == 'imageLeft' ) {
              echo $imageColumn;
              echo $textColumn;
            } else {
              echo $textColumn;
              echo $imageColumn;
            }
          ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>