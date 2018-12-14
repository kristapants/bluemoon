<section class="sub-header shop-layout-1">
  <?php
  $imageUrl = '';
  if ($page->headerImage()->isNotEmpty()) {
    $imageUrl = $page->image( $page->headerImage() )->url();
  } else {
    // show parent's header on child posts
    $parent = $page->parent();
    if ($parent) {
      $parentPage = $page->parent();
      if ( $parentPage->headerImage()->isNotEmpty() ) {
        $imageUrl = $parentPage->image($parentPage->headerImage())->url();
      }
    }
  }
  if ($imageUrl != '') {
    $imageUrl = $site->image( $site->headerImage() )->url();
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