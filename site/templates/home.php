<?php snippet('header') ?>

  <?php
    $slideImage1 = false;
    if ($page->landingImage()->isNotEmpty()) {
      $slideImage1 = $page->image( $page->landingImage() );
      if ( $slideImage1 ) {
        $slideImage1 = $slideImage1->url();
      }
    }
    $slideImage2 = false;
    if ($page->landingImage2()->isNotEmpty()) {
      $slideImage2 = $page->image( $page->landingImage2() );
      if ( $slideImage2 ) {
        $slideImage2 = $slideImage2->url();
      }
    }
  ?>

  <?php if ($slideImage1 != '' || $slideImage2 != ''): ?>
  <div>
    <div class="banner-slider-2 rev_slider <?php if ($slideImage1 == '' || $slideImage2 == '') { echo ' is-single'; } ?>" id="slider-2">
      <ul>
        <?php if ($slideImage1 != ''): ?>
        <li data-transition="fade">
          <img src="<?= $page->image($page->landingImage())->url() ?>" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10">
          <div class="tp-caption" data-x="center" data-y="center" data-voffset="['-100','-100','-140','-140']" data-transform_in="y:-80px;opacity:0;s:800;e:easeInOutCubic;" data-transform_out="y:-80px;opacity:0;s:300;" data-start="1000">
            <h2><?= $page->landingTitle() ?></h2>
          </div>
          <div class="tp-caption" data-x="center" data-y="center" data-voffset="['20','20','40','40']" data-width="['650','550','480','320']" data-whitespace="normal" data-transform_in="y:80px;opacity:0;s:800;e:easeInOutCubic;" data-transform_out="y:80px;opacity:0;s:300;" data-start="1400">
            <p><?= $page->landingBody() ?></p>
          </div>
          <?php
            $firstButtonText = $page->landingButtonText();
            $firstButtonLink = $page->landingButtonLink();
            if ($firstButtonLink != '' && $firstButtonText != ''):
          ?>
          <div class="tp-caption" data-x="center" data-y="center" data-voffset="['120','120','200','200']" data-transform_in="y:100px;opacity:0;s:800;e:easeInOutCubic;" data-transform_out="y:200px;opacity:0;s:300;" data-start="1600">
            <a class="btn btn-brand pill" href="<?= $firstButtonLink ?>"><?= $firstButtonText ?></a>
          </div>
          <?php endif; ?>
        </li>
        <?php endif; ?>
        <?php if ($slideImage2 != ''): ?>
        <li data-transition="fade">
          <img src="<?= $slideImage2 ?>" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10">
          <div class="tp-caption" data-x="center" data-y="center" data-voffset="['-100','-100','-140','-140']" data-transform_in="y:-80px;opacity:0;s:800;e:easeInOutCubic;" data-transform_out="y:-80px;opacity:0;s:300;" data-start="1000">
            <h2><?= $page->landingTitle2() ?></h2>
          </div>
          <div class="tp-caption" data-x="center" data-y="center" data-voffset="['20','20','40','40']" data-width="['650','550','480','320']" data-whitespace="normal" data-transform_in="y:80px;opacity:0;s:800;e:easeInOutCubic;" data-transform_out="y:80px;opacity:0;s:300;" data-start="1400">
            <p><?= $page->landingBody2() ?></p>
          </div>
          <?php
            $secondButtonText = $page->landingButtonText2();
            $secondButtonLink = $page->landingButtonLink2();
            if ($secondButtonLink != '' && $secondButtonText != ''):
          ?>
          <div class="tp-caption" data-x="center" data-y="center" data-voffset="['120','120','200','200']" data-transform_in="y:100px;opacity:0;s:800;e:easeInOutCubic;" data-transform_out="y:200px;opacity:0;s:300;" data-start="1600">
            <a class="btn btn-brand pill" href="<?= $secondButtonLink ?>"><?= $secondButtonText ?></a>
          </div>
          <?php endif; ?>
        </li>
        <?php endif; ?>
      </ul>
    </div>
  </div>
  <?php endif; ?>

  <section class="boxed-sm home-features">
    <div class="container">
      <div class="row">
        <div class="creative-layout-post-style-1">
          <?php
            $contentHeading1 = $page->contentHeading1();
            $contentImage1 = $page->contentImage1()->isNotEmpty()
              ? $page->image($page->contentImage1())->url()
              : '';
            $contentText1 = $page->contentText1();
            $contentLink1 = $page->contentLink1();
            $contentLinkText1 = $page->contentLinkText1();
          ?>
          <div class="post-creative-style-1 right-thumb">
            <div class="col-sm-6">
              <div class="desc">
                <h3>
                  <?php if ($contentLink1 != ''): ?><a href="<?= $contentLink1 ?>"><?php endif; ?>
                    <?= $contentHeading1 ?>
                  <?php if ($contentLink1 != ''): ?></a><?php endif; ?>
                </h3>
                <p class="sapo hidden-sm hidden-xs"><?= $contentText1 ?></p>
                <a class="btn btn-brand pill" href="<?= $contentLink1 ?>"><?= $contentLinkText1 ?></a>
              </div>
            </div>
            <div class="col-sm-6 hide-mobile">
              <div class="img-wrapper">
              <?php if ($contentLink1 != ''): ?><a href="<?= $contentLink1 ?>"><?php endif; ?>
                <?php if ($contentImage1 != ''): ?><img class="img-responsive" src="<?= $contentImage1 ?>" alt="Image"><?php endif; ?>
              <?php if ($contentLink1 != ''): ?></a><?php endif; ?>
              </div>
            </div>
          </div>

          <?php
            $contentHeading2 = $page->contentHeading2();
            $contentImage2 = $page->contentImage2()->isNotEmpty()
              ? $page->image($page->contentImage2())->url()
              : '';
            $contentText2 = $page->contentText2();
            $contentLink2 = $page->contentLink2();
            $contentLinkText2 = $page->contentLinkText2();
          ?>
          <div class="post-creative-style-1 left-thumb">
            <div class="col-sm-6">
              <div class="img-wrapper">
                <?php if ($contentLink2 != ''): ?><a href="<?= $contentLink2 ?>"><?php endif; ?>
                  <img class="img-responsive" src="<?= $contentImage2 ?>" alt="Image">
                <?php if ($contentLink2 != ''): ?></a><?php endif; ?>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="desc">
                <h3>
                  <?php if ($contentLink2 != ''): ?><a href="<?= $contentLink2 ?>"><?php endif; ?>
                    <?= $contentHeading2 ?>
                  <?php if ($contentLink2 != ''): ?></a><?php endif; ?>
                </h3>
                <p class="sapo hidden-sm hidden-xs"><?= $contentText2 ?></p>
                <?php if ($contentLink2 != ''): ?><a class="btn btn-brand pill" href="<?= $contentLink2 ?>"><?php endif; ?>
                  <?= $contentLinkText2 ?>
                <?php if ($contentLink2 != ''): ?></a><?php endif; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <section class="section-spacing" style="clear: both">
    <div style="width: 100%; height: 100px;"></div>
  </section>

  <?php
  /*
    $videoUrl = $page->videoUrl();
    if ($videoUrl != ''):
  ?>
  <section class="boxed">
    <div class="row">
      <div class="col-md-12 promotion-video-1">
        <div class="call-to-action-style-1">
          <?php
            $img = $page->videoBackgroundImage()->isNotEmpty()
              ? $page->image($page->videoBackgroundImage())->url()
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
                  $bannerImg = $page->videoPreviewImage()->isNotEmpty()
                    ? $page->image($page->videoPreviewImage())->url()
                    : '';
                  if ($bannerImg != '') :
                ?><img class="video-banner" src="<?= $bannerImg ?>" alt="Image"><?php endif; ?>
                <div class="embed-responsive embed-responsive-16by9 js-video-youtube">
                  <iframe class="embed-responsive-item" src="<?= $videoUrl ?>" allowfullscreen="allowfullscreen"></iframe>
                </div>
              </div>
              <?php if ($page->videoHeading()): ?><p class="sapo-video"><?= $page->videoHeading()->html() ?></p><?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php endif;*/ ?>
  <?php
    $img = $page->calloutBackgroundImage()->isNotEmpty()
      ? $page->image($page->calloutBackgroundImage())->url()
      : '';
  ?>  
  <div class="call-to-action-style-3"<?php if ($img != '') { printf( ' style="background-image: url(%s);"', $img ); } ?>>
    <?php if ($img != ''): ?><img class="rellax bg-overlay" src="<?= $img ?>" alt="" /><?php endif; ?>
    <div class="overlay-call-to-action"></div>
    <div class="container">
      <div class="row">
        <div class="heading-wrapper text-center">
          <h3 class="heading"><?= $page->calloutHeading()->html() ?></h3>
        </div>
        <?= $page->calloutContent()->kirbytext() ?>
      </div>
    </div>
  </div>

  <?php snippet('blogfeed') ?>
  
  <section class="section-spacing section-spacing-home-2" style="clear: both">
    <div style="width: 100%; height: 80px;"></div>
  </section>

<?php snippet('footer') ?>