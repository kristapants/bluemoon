<?php snippet('header') ?>
  
  <div class="default recipes-page">

    <?php snippet('subheader'); ?>

    <?php 
      $tag = param('tag');
      if ($tag != '') :
    ?>
      <section class="content-section hentry boxed-sm">
        <div class="container">
          <div class="row blog-v">
            <div class="col-md-12">
              <div class="post">
                <h3>Browse '<?= $tag ?>' Recipes</h3>

                <?php 
                  // fetch the basic set of pages
                  $articles = $page->children()->visible()->sortBy('Title', 'asc');
                  $articles = $articles->filterBy('tags', $tag, ',');
                  if (count($articles) > 0): 
                ?>
                <ul>
                  <?php
                    foreach ($articles as $article): 
                      printf('<li><a href="%s">%s</a></li>', $article->url(), $article->title() );
                    endforeach;
                  ?>
                </ul>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </section>
      <section class="boxed-sm">
        <div class="container">
          <div class="row main">
            <nav>
              <div class="recipe-nav">
                <div class="post-control clearfix">
                  <p>
                    <a class="prev-post" href="/recipes/">
                      <i class="fa fa-angle-left"></i>Browse all Recipes
                      <!-- <h4 class="title-next-post">Recipes</h4> -->
                    </a>
                  </p>
                </div>
              </div>
            </nav>
          </div>
        </div>
      </section>
    <?php else: ?>
      <section class="content-section hentry boxed-sm recipe-index">
        <div class="container">
          <div class="row blog-v">
            <div class="col-md-12">
              <div class="post">
                <?= $page->text()->kirbytext(); ?>
                <?php
                // fetch all tags
                $tags = $page->children()->visible()->pluck('tags', ',', true);
                sort($tags);
                ?>  
                <ul class="tags">
                  <?php foreach($tags as $tag): ?>
                  <li>
                    <a href="<?= url('recipes/' . url::paramsToString(['tag' => $tag])) ?>">
                      <?= html($tag) ?>
                    </a>
                  </li>
                  <?php endforeach ?>
                </ul>
              </div>
            </div>
          </div>
        </div>
      </section>
    <?php endif; ?>    

  </div>

<?php snippet('footer') ?> 