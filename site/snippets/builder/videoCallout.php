<?php
  $videoUrl = $data->videoUrl();
  if ($videoUrl != ''):
?> 
<section class="video-callout">
  <style>
    .video-callout img {
      margin: auto;
      max-width: 600px;
    }
  </style>
  <?php
    $img = $data->videoBackgroundImage()->isNotEmpty()
      ? $page->image($data->videoBackgroundImage())->url()
      : '';
  ?>
  <div style="text-align: center;">
    <?php if ($img != '') : ?>
    <img class="rellax bg-overlay" src="<?= $img ?>">
    <?php endif; ?>
    <?php if ($data->videoHeading()): ?>
    <p>
      <?= $data->videoHeading()->html() ?>
    </p>
    <?php endif; ?>
  </div>
</section>
<?php endif; ?>