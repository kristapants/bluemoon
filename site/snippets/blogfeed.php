<?php
  $articles = page('farm-news')->children()->visible()->sortBy('date', 'desc')->limit(2);
?>
<section class="boxed-sm">
  <div class="container">
    <div class="heading-wrapper text-center">
      <?php 
        $heading = $page->blogFeedHeading()->html();
        if ($heading == '') {
          $heading = "Blog Feed";
        }
      ?>
      <h3 class="heading"><a href="/farm-news/"><?= $heading ?></a></h3>
    </div>
    <div class="row blog-v reverse">
      <?php 
        $i = 0;
        foreach($articles as $article): 
          $i++;
      ?>
      <div class="col-md-12">
        <div class="post">
          <div class="img-wrapper js-set-bg-blog-thumb">
            <a href="<?= $article->url() ?>">
              <?php
                $img = '';
                if ($article->featuredImage()->isNotEmpty()) {
                  $img = $article->image($article->featuredImage())->url();
                }
                if ($img == '') {
                  if ($i == 1) {
                    if ($page->blogDefaultImage1()->isNotEmpty()) {
                      $img = $page->image($page->blogDefaultImage1())->url();
                    }
                  } else if ($i == 2) {
                    if ($page->blogDefaultImage2()->isNotEmpty()) {
                      $img = $page->image($page->blogDefaultImage2())->url();
                    }
                  }
                }
                if ($img != '') {
                  printf( '<img src="%s"/>', $img);
                }
              ?>
            </a>
          </div>
          <div class="desc">
            <h3>
              <a href="<?= $article->url() ?>"><?= $article->title()->html()?></a>
            </h3>
            <p class="meta">
              <span class="time"><?= $article->date('F j, Y') ?></span>
            </p>
            <p class="sapo"><?php
              // echo $article->text()->excerpt(200); 
              $content = '';
              foreach($article->builderContent()->toStructure() as $section):
                $content .= snippet('sections/' . strtolower($section->_fieldset()), array('data' => $section), true);
              endforeach;
              echo excerpt( $content, 200 );
            ?></p>
            <a class="read-more" href="<?= $article->url() ?>">READ MORE
              <i class="fa fa-long-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>