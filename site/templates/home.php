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
    <div class="banner-slider-2 rev_slider" id="slider-2">
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

  <section class="boxed-sm">
    <div class="container">
      <div class="row">
        <div class="creative-layout-post-style-1">
          <div class="post-creative-style-1 right-thumb">
            <div class="col-sm-6">
              <div class="desc">
                <h3>
                  <a href="blog-detail.html">Add Green In Your Space</a>
                </h3>
                <p class="sapo hidden-sm hidden-xs">Sed aliquet, risus vel tincidunt vulputate, nulla purus mollis leo, eget blandit mauris odio at elit. Cras cursus aliquam laoreet. Aenean lacinia ipsum vulputate dolor tincidunt ornare. Donec vel pretium arcu. </p>
                <a class="btn btn-brand pill"
                  href="shop.html">SHOP NOW</a>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="img-wrapper">
                <a href="blog-detail.html">
                  <img class="img-responsive" src="images/blog/creative-01.jpg" alt="Image">
                </a>
                <h3 class="cate">
                  <strong>01 </strong>PLANT OUTDOOR</h3>
              </div>
            </div>
          </div>
          <div class="post-creative-style-1 left-thumb">
            <div class="col-sm-6">
              <div class="img-wrapper">
                <h3 class="cate">
                  <strong>02 </strong>PLANT INDOOR</h3>
                <a href="blog-detail.html">
                  <img class="img-responsive" src="images/blog/creative-02.jpg" alt="Image">
                </a>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="desc">
                <h3>
                  <a href="blog-detail.html">Decorate your house</a>
                </h3>
                <p class="sapo hidden-sm hidden-xs">Sed aliquet, risus vel tincidunt vulputate, nulla purus mollis leo, eget blandit mauris odio at elit. Cras cursus aliquam laoreet. Aenean lacinia ipsum vulputate dolor tincidunt ornare. Donec vel pretium arcu. </p>
                <a class="btn btn-brand pill"
                  href="shop.html">SHOP NOW</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <?php snippet('blogfeed') ?>

<?php snippet('footer') ?>