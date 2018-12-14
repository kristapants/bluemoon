<?php snippet('header') ?>
  
  <div class="default default-page">

    <?php snippet('subheader'); ?>

    <section class="boxed-sm">
      <div class="container">
        <div class="row main">
          <article class="blog-detail">
            <h3 class="title-blog-detail"><?= $page->title() ?></h3>
            <p class="meta">
              <span class="time"><?= $page->date('F j, Y') ?></span>
            </p>
            <div class="content">
              <?php if ($page->featuredImage()->isNotEmpty()) : ?>
                <img class="feature-image" src="<?= $page->image( $page->featuredImage() )->url()?>" alt="feature-image">
              <?php endif; ?>
              <?= $page->text()->kirbyText() ?>
            </div>
          </article>

          <div class="row">
            <div class="col-xs-12">
              <div class="widget-social-color text-center">
                <ul>
                  <li>
                    <a class="facebook" data-toggle="tooltip" target="_blank" title="Facebook" href="http://www.facebook.com/sharer.php?u=<?= rawurlencode ($page->url()); ?>" >
                      <i class="fa fa-facebook"></i>
                    </a>
                  </li>
                  <li>
                    <a class="twitter" data-toggle="tooltip" target="_blank" title="Twitter" href="https://twitter.com/intent/tweet?source=webclient&text=<?= rawurlencode($page->title()); ?>%20<?= rawurlencode($page->url()); ?>">
                      <i class="fa fa-twitter"></i>
                    </a>
                  </li>
                </ul>
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-xs-12">
              
              <div class="post-control">
                <?php if($page->hasPrevVisible()): ?>
                <a class="prev-post" href="<?= $page->prevVisible()->url() ?>">
                  <i class="fa fa-angle-left"></i>Previous Post
                  <h4 class="title-next-post"><?= $page->prevVisible()->title() ?></h4>
                </a>
                <?php endif ?>
                <?php if($page->hasNextVisible()): ?>
                <a class="next-post" href="<?= $page->nextVisible()->url() ?>">Next Post
                  <i class="fa fa-angle-right"></i>
                  <h4 class="title-next-post"><?= $page->nextVisible()->title() ?></h4>
                </a>
                <?php endif ?>
              </div>
            </div>
          </div>
          

        </div>
      </div>
    </section>

  </div>

<?php snippet('footer') ?> 