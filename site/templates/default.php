<?php snippet('header') ?>
  
  <div class="default">

    <section class="sub-header shop-layout-1">
      <img class="rellax bg-overlay" src="<?= $page->headerImage() ?>" alt="">
      <div class="overlay-call-to-action"></div>
      <h3 class="heading-style-3"><?php 
        $title = $page->subTitle()->html();
        if ( $title == '' ) {
          $title = $page->title()->html();
        }
        echo $title;
      ?></h3>
    </section>

    <section class="content-section boxed-sm">
      <div class="container">
        
        <?= $page->content()->kirbytext() ?>
          
      </div>
    </section>

  </div>

<?php snippet('footer') ?>