<?php snippet('header') ?>
  
  <div class="default default-page">

    <?php snippet('subheader'); ?>

    <?php 
      $articles = $page->children()->visible()->paginate(10);
    ?>
    <?php foreach($articles as $article): ?>

    <article>
      <h1><?= $article->title()->html() ?></h1>
      <p><?= $article->text()->excerpt(300) ?></p>
      <a href="<?= $article->url() ?>">Read more…</a>
    </article>

    <?php endforeach ?>
    
    <?php
      $pagination = $articles->pagination()
    ?>
    <?php if($pagination->hasPages()): ?>
    <nav>
      <ul>

        <?php if($pagination->hasPrevPage()): ?>
        <li><a href="<?= $pagination->prevPageURL() ?>">&larr;</a></li>
        <?php else: ?>
        <li><span>&larr;</span></li>
        <?php endif ?>

        <?php foreach($pagination->range(10) as $r): ?>
        <li><a<?php if($pagination->page() == $r) echo ' class="active"' ?> href="<?= $pagination->pageURL($r) ?>"><?= $r ?></a></li>
        <?php endforeach ?>

        <?php if($pagination->hasNextPage()): ?>
        <li class="last"><a href="<?= $pagination->nextPageURL() ?>">&rarr;</a></li>
        <?php else: ?>
        <li class="last"><span>&rarr;</span></li>
        <?php endif ?>

      </ul>
    </nav>
    <?php endif ?>

  </div>

<?php snippet('footer') ?> 