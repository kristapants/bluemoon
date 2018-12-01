<?php snippet('header') ?>
  
  <div class="default">

    <?php snippet('subheader'); ?>

    <section class="content-section boxed-sm">
      <div class="container">
        
        <?= $page->content()->kirbytext() ?>
          
      </div>
    </section>

  </div>

<?php snippet('footer') ?>