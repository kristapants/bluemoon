<?php 
  $showCallout = false;
  // if ( $page->isHomePage() ) {
    //   $showCallout = false;
    // } else {
      //   $template = $page->template();
  //   if ( $template == 'contact'
  //     || $template == 'about'
  //   ) {
  //     $showCallout = false;
  //   }
  // }
  $template = $page->template();
  if ( $template == 'about' 
    || $template == 'home') {
    $showCallout = true;
  }
  if( $showCallout ): 
?>
  <div class="call-to-action-style-2 social-callout">
    <?php
      $calloutImages = $site->calloutImages()->toStructure();
      if ( count( $calloutImages ) > 0 ) :
    ?>
      <div class="wrapper-carousel-background">
        <?php 
        foreach ( $calloutImages as $calloutImage ) : 
          $image = $site->image( $calloutImage->image() )->url();
          printf( '<img src="%s"/>', $image );
        endforeach;
        ?>
      </div>
    <?php endif; ?>
    <div class="overlay-call-to-action"></div>
    <?php 
      $facebook = $site->facebook();
      $instagram = $site->instagram();
    ?>
    <?php if ($facebook != '') : ?>
    <a id="fb-link" class="btn btn-brand pill icon-left" href="<?= $facebook ?>">
      <i class="fa fa-facebook"></i>LIKE US</a>
    <?php endif; ?>
    <?php if ($instagram != '') : ?>
    <a id="instagram-link" class="btn btn-brand pill icon-left" href="<?= $instagram?>">
      <i class="fa fa-instagram"></i>FOLLOW US</a>
    <?php endif; ?>
  </div>
<?php endif; ?>