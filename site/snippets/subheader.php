<section class="sub-header shop-layout-1">
    <img class="rellax bg-overlay" src="<?= $page->image($page->headerImage())->url() ?>" alt="">
    <div class="overlay-call-to-action"></div>
    <h3 class="heading-style-3"><?php 
    $title = $page->subTitle()->html();
    if ( $title == '' ) {
        $title = $page->title()->html();
    }
    echo $title;
    ?></h3>
</section>