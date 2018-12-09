<?php
  $alignment = $data->alignment();
  $heading = $data->contentHeading();
  if ($heading != ''): 
?>
<div class="heading-wrapper clear-both <?php
  if ($alignment == 'center') {
    echo 'text-center';
  }
?>">
  <h3 class="heading"><?= $heading ?></h3>
</div>
<?php endif; ?>