<?php snippet('header') ?>
  
  <div class="page-404" id="page">

    <section class="boxed-sm section-404-wrapper">
      <div class="container">
        <div class="page-404-wrapper">
          <h3>404</h3>
          <hr class="style-one">
          <p><?= $page->text()->kirbytext() ?></p>
          <a class="btn btn-brand pill" href="/">BACK TO HOMEPAGE</a>
        </div>
      </div>
    </section>

  </div>

<?php snippet('footer') ?> 