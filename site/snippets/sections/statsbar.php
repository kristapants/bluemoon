<?php
  $statNumberOne = $data->statNumberOne();
  $statTitleOne = $data->statTitleOne();
  $statNumberTwo = $data->statNumberTwo();
  $statTitleTwo = $data->statTitleTwo();
  $statNumberThree = $data->statNumberThree();
  $statTitleThree = $data->statTitleThree();
  $statNumberFour = $data->statNumberFour();
  $statTitleFour = $data->statTitleFour();
  if ( $statTitleOne != ''
    || $statTitleTwo != ''
    || $statTitleThree != ''
    || $statTitleFour != '' ) :
?>
<section class="stats-bar-section">
  <?php
    $img = $data->backgroundImage()->isNotEmpty()
      ? $page->image($data->backgroundImage())->url()
      : '';
  ?>
  <div class="counter-wrapper"<?php if ( $img != '' ) { printf( ' style="background-image: url(%s);"', $img ); } ?>>
    <?php if ( $img != '' ): ?><img class="rellax bg-overlay" src="<?= $img ?>" alt="" /><?php endif; ?>
    <div class="overlay-counter"></div>
    <div class="container">
      <div class="row">
        <div class="col-md-3 col-sm-6">
          <div class="couter-wrapper">
            <p class="js-countup" data-count="<?= $statNumberOne; ?>">0</p>
            <span><?= $statTitleOne; ?></span>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="couter-wrapper">
            <p class="js-countup" data-count="<?= $statNumberTwo; ?>">0</p>
            <span><?= $statTitleTwo; ?></span>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="couter-wrapper">
            <p class="js-countup" data-count="<?= $statNumberThree; ?>">0</p>
            <span><?= $statTitleThree; ?></span>
          </div>
        </div>
        <div class="col-md-3 col-sm-6">
          <div class="couter-wrapper">
            <p class="js-countup" data-count="<?= $statNumberFour; ?>">0</p>
            <span><?= $statTitleFour; ?></span>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>