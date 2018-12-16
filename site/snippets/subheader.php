<?php
$title = '';
if ($page->template() == 'recipe') {
  $title = 'Recipes';
} else {
  $title = $page->subTitle()->html();
  if ( $title == '' ) {
    $title = $page->title()->html();
  }
}
?>
<div class="container print-only">
  <h2 class="heading-style-3 print-only" style="text-align: left"><?= $title; ?></h2>
</div>
<section class="sub-header shop-layout-1">
  <?php
  $imageUrl = '';
  if ($page->headerImage()->isNotEmpty()) {
    $imageUrl = $page->image( $page->headerImage() )->url();
  } else {
    
    // if ($page->template() == 'blogpost') {
    //   if ($page->featuredImage()->isNotEmpty()) {
    //     $imageUrl = $page->image($page->featuredImage())->url();
    //   }
    // }

    // if ($imageUrl == '') {
      // default to parent's header on child posts
      $parent = $page->parent();
      if ($parent) {
        $parentPage = $page->parent();
        if ( $parentPage->headerImage()->isNotEmpty() ) {
          $imageUrl = $parentPage->image($parentPage->headerImage())->url();
        }
      }
    // }
  }
  if ($imageUrl == '' && $site->headerImage()->isNotEmpty()) {
    $imageUrl = $site->image( $site->headerImage() )->url();
  }
  if ( $imageUrl != '' ) : 
  ?>
  <img class="rellax bg-overlay" src="<?= $imageUrl ?>" alt="">
  <?php endif; ?>
  <div class="overlay-call-to-action"></div>
  <h2 class="heading-style-3"><?= $title; ?></h2>
</section>