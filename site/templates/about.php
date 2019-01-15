<?php snippet('header') ?>
  
  <div class="default about-page">

    <?php snippet('subheader'); ?>

    <?php foreach($page->builderContent()->toStructure() as $section): ?>
      <?php 
      if (strtolower($section->_fieldset()) == 'team') {
        $GLOBALS['includeRevolution'] = true;
      } 
      ?>
      <?php snippet('sections/' . strtolower($section->_fieldset()), array('data' => $section)) ?>
    <?php endforeach ?>

  </div>

<?php snippet('footer') ?>