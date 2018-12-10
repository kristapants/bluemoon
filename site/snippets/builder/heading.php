<section class="heading-section"> 
  <?php
    $alignment = $data->alignment();
    $heading = $data->contentHeading();
    if ($heading != ''): 
  ?>
  <h3 class="clear-both <?php
    if ($alignment == 'center') {
      echo 'center';
    }
  ?>"><?= $heading ?></h3><?php endif; ?>
</section>