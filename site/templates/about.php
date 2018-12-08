<?php snippet('header') ?>
  
  <div class="default">

    <?php snippet('subheader'); ?>

    <?php foreach($page->builderContent()->toStructure() as $section): ?>
      <?php snippet('sections/' . $section->_fieldset(), array('data' => $section)) ?>
    <?php endforeach ?>

  </div>

<?php snippet('footer') ?>