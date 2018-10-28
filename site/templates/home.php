<?php snippet('header') ?>

  <main class="main" role="main">
    
    <header>
      <h1><?= $page->title()->html() ?></h1>
      <hr />
    </header>

    <div>
      <?= $page->text()->kirbytext() ?>
    </div>

  </main>

<?php snippet('footer') ?>