<section class="sub-header shop-layout-1">
  <?php
  $imageUrl = '';
  $headerImage = $page->image( $page->headerImage() );
  if ( $headerImage !== null ) {
    $imageUrl = $headerImage->url();
  }
  if ( $imageUrl != '' ) : 
  ?>
  <img class="rellax bg-overlay" src="<?= $imageUrl ?>" alt="">
  <?php endif; ?>
  <div class="overlay-call-to-action"></div>
  <h2 class="heading-style-3"><?php 
  $title = $page->subTitle()->html();
  if ( $title == '' ) {
    $title = $page->title()->html();
  }
  echo $title;
  ?></h2>
</section>