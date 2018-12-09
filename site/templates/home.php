<?php snippet('header') ?>

  <main class="main" role="main">
    
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
          <img src="<?= $slideImage ?>" alt="" data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat" data-bgparallax="10">
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

    <?php endif; ?>










  </main>

<?php snippet('footer') ?>