<?php snippet('header') ?>
  
  <div class="default default-page">

    <?php snippet('subheader'); ?>

    <section class="content-section hentry boxed-sm">
      <div class="container">
        <div class="row blog-v">
          <div class="col-md-12">
            <div class="post">
              <?php foreach($page->builderContent()->toStructure() as $section): ?>
                <?php snippet('sections/' . strtolower($section->_fieldset()), array('data' => $section)) ?>
              <?php endforeach ?>
            </div>
          </div>
        </div>
      </div>
    </section>

  </div>

<?php snippet('footer') ?> 