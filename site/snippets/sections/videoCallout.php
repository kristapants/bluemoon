<?php
  $videoUrl = $data->videoUrl();
  if ($videoUrl != ''):
?> 
<section class="boxed">
  <div class="row">
    <div class="col-md-12 promotion-video-1">
      <div class="call-to-action-style-1">
        <?php
          $img = $data->videoBackgroundImage()->isNotEmpty()
            ? $page->image($data->videoBackgroundImage())->url()
            : '';
          if ($img != '') :
        ?>
        <img class="rellax bg-overlay" src="<?= $img ?>">
        <?php 
          endif;
        ?>
        <div class="overlay-call-to-action"></div>
        <div class="container">
          <div class="row">
            <div class="video-wrapper js-set-bg-blog-thumb">
              <div class="overlay-play-video js-play-yoututbe">
                <i class="fa-play-custom"></i>
              </div>
              <?php
                $bannerImg = $data->videoPreviewImage()->isNotEmpty()
                  ? $page->image($data->videoPreviewImage())->url()
                  : '';
                if ($bannerImg != '') :
              ?><img class="video-banner" src="<?= $bannerImg ?>" alt="Image"><?php endif; ?>
              <div class="embed-responsive embed-responsive-16by9 js-video-youtube">
                <iframe class="embed-responsive-item" src="<?= $videoUrl ?>" allowfullscreen="allowfullscreen"></iframe>
              </div>
            </div>
            <?php if ($data->videoHeading()): ?><p class="sapo-video">
              <?= $data->videoHeading()->html() ?>
            </p><?php endif; ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>