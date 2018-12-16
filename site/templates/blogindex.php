<?php snippet('header') ?>
  
  <div class="default default-page">

    <?php snippet('subheader'); ?>

    <?php 
      $articles = $page->children()->visible()->sortBy('date', 'desc')->paginate(5);
      if (count($articles)):
    ?>
      <div class="container blog-container">
        <div class="row blog-h-full-width">
        <?php foreach($articles as $article): ?>

          <div class="col-md-12">
            <article class="post">
              <div class="img-wrapper">
                <a href="<?= $article->url() ?>">
                  <?php
                    $img = '';
                    if ($article->featuredImage()->isNotEmpty()) {
                      $img = $article->image($article->featuredImage())->url();
                    }
                    if ($img != '') {
                      printf( '<img src="%s"/>', $img);
                    }
                  ?>
                </a>
              </div>
              <div class="desc">
                <h3>
                  <a href="<?= $article->url() ?>"><?= $article->title()->html() ?></a>
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
                  echo excerpt( $content, 160 );
                ?></p>
                <a class="read-more" href="<?= $article->url() ?>">READ MORE
                  <i class="fa fa-long-arrow-right"></i>
                </a>
              </div>
            </article>
          </div>
          <?php endforeach ?>
        </div>
      </div>

      <?php
        $pagination = $articles->pagination()
      ?>
      <?php if($pagination->hasPages()): ?>
      <div class="container pagination-container">
        <div class="row">
          <div class="col-sm-12 text-right">
            <nav>
              <ul class="pagination pagination-style-2">

                <?php if($pagination->hasPrevPage()): ?>
                <li>
                  <a href="<?= $pagination->prevPageURL()?>" class="prev page-numbers" href="#">
                    <i class="fa fa-long-arrow-left"></i>
                  </a>
                </li>
                <?php else: ?>
                <li><i class="fa fa-long-arrow-left"></i></li>
                <?php endif ?>

                <?php foreach($pagination->range(10) as $r): ?>
                <li>
                  <?php if($pagination->page() == $r) : ?>
                    <a href="<?= $pagination->pageURL($r) ?>">
                      <span class="page-numbers current"><?= $r ?></span>
                    </a>
                  <?php else: ?>
                    <a class="page-numbers" href="<?= $pagination->pageURL($r) ?>">
                      <?= $r ?>
                    </a>
                  <?php endif; ?>
                </li>
                <?php endforeach ?>

                <?php if($pagination->hasNextPage()): ?>
                <li class="last">
                  <a href="<?= $pagination->nextPageURL() ?>" class="next page-numbers" href="#">
                    <i class="fa fa-long-arrow-right"></i>
                  </a>
                </li>
                <?php else: ?>
                <li class="last">
                  <i class="fa fa-long-arrow-right"></i>
                </li>
                <?php endif ?>

              </ul>
            </nav>
          </div>
        </div>
      </div>
      <?php endif ?>

    <?php endif; ?>

  </div>

<?php snippet('footer') ?> 