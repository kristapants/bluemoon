<section class="body-text">
  <?php if ($data->contentHeading() != ''): ?>
  <h3 class="">
    <?= $data->contentHeading() ?>
  </h3>
  <?php endif; ?>
  <?= $data->contentText()->kirbytext() ?>
</section>