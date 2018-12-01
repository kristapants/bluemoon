<?php snippet('header') ?>
  
  <div class="default">

    <section class="sub-header shop-layout-1">
      <img class="rellax bg-overlay" src="<?= $page->headerImage() ?>" alt="">
      <div class="overlay-call-to-action"></div>
      <h3 class="heading-style-3"><?php 
        $title = $page->subTitle()->html();
        if ( $title == '' ) {
          $title = $page->title()->html();
        }
        echo $title;
      ?></h3>
    </section>

    <section class="content-section boxed-sm">
      <div class="container">
        <div class="row blog-v">
          <?php
            $orientation = $page->contentOrientation();
            $heading = $page->contentHeading();
            $image = $page->image($page->contentImage())->url();
            $text = $page->contentText()->kirbytext();

            // get the orientation class name
            $orientationClass = 'orientation-full';
            if ( $image == '' ) {
              $orientationClass = 'orientation-full';
            } else {
              if ( $orientation == 'imageLeft' ) {
                $orientationClass = 'orientation-left';
              } else if ( $orientation == 'imageRight' ) {
                $orientationClass = 'orientation-right';
              }
            }
            if ( $text != '') :
          ?> 
          <div class="col-md-12">
            <div class="post <?= $orientationClass ?>">
              <?php
                $imageColumn = '<div class="img-wrapper js-set-bg-blog-thumb">'
                  .'<img src="' . $image . '">'
                  .'</div>';
                $textColumn = '<div class="desc">'
                  . '<h3 class="title-default">' . $heading . '</h3>'
                  . '<p class="sapo">'
                  . $text
                  . '</p>'
                  . '</div>';

                if ( $orientation == 'imageLeft' ) {
                  echo $imageColumn;
                  echo $textColumn;
                } else {
                  echo $textColumn;
                  echo $imageColumn;
                }
              ?>
            </div>
          </div>
          <?php endif; ?>
          
          <?php
            $orientation = $page->contentOrientation2();
            $heading = $page->contentHeading2();
            $image = $page->image($page->contentImage2())->url();
            $text = $page->contentText2()->kirbytext();

            // get the orientation class name
            $orientationClass = 'orientation-full';
            if ( $image == '' ) {
              $orientationClass = 'orientation-full';
            } else {
              if ( $orientation == 'imageLeft' ) {
                $orientationClass = 'orientation-left';
              } else if ( $orientation == 'imageRight' ) {
                $orientationClass = 'orientation-right';
              }
            }
            if ( $text != '' ) :
          ?>
          <div class="col-md-12">
            <div class="post <?= $orientationClass?>">
              <?php
               $imageColumn = '<div class="img-wrapper js-set-bg-blog-thumb">'
                  .'<img src="' . $image . '">'
                  .'</div>';
                $textColumn = '<div class="desc">'
                  . '<h3 class="title-default">' . $heading . '</h3>'
                  . '<p class="sapo">'
                  . $text
                  . '</p>'
                  . '</div>';

                if ( $orientation == 'imageLeft' ) {
                  echo $imageColumn;
                  echo $textColumn;
                } else {
                  echo $textColumn;
                  echo $imageColumn;
                }
              ?>
            </div>
          </div>
          <?php endif; ?>
        
        </div>
      </div>
    </section>
    
    <?php
      $teamMembers = $page->team()->toStructure();
      $hasTeams = count( $teamMembers ) > 0;

      $statNumberOne = $page->statNumberOne();
      $statTitleOne = $page->statTitleOne();
      $statNumberTwo = $page->statNumberTwo();
      $statTitleTwo = $page->statTitleTwo();
      $statNumberThree = $page->statNumberThree();
      $statTitleThree = $page->statTitleThree();
      $statNumberFour = $page->statNumberFour();
      $statTitleFour = $page->statTitleFour();
      if ( $statTitleOne != ''
        || $statTitleTwo != ''
        || $statTitleThree != ''
        || $statTitleFour != '' ) :
    ?>
    <section class="stats-bar-section">
      <div class="counter-wrapper<?php 
        if ( $hasTeams ) {
          echo ' pad-bottom';
        }
      ?>">
        <img class="rellax bg-overlay" src="<?= $page->image($page->statBarBackgroundImage())->url() ?>" alt="" />
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

    <?php if ( $hasTeams ) : ?>
    <section class="boxed-sm">
      <div class="container">
        <?php
          $teamHeading = $page->teamHeading();
          if ( $teamHeading != '' ) :
        ?><div class="heading-wrapper text-center">
          <h3 class="heading"><?= $teamHeading ?></h3>
        </div><?php endif; ?>
        <div class="team-wrapper">
          <div class="row">
            <div class="about-carousel">
              
              <?php 
                foreach ( $teamMembers as $teamMember ) : 
                  $memberName = $teamMember->title();
                  $thumb = $page->image($teamMember->image())->crop(300, 300)->url();
              ?>
              <div class="item">
                <figure class="item-team">
                  <div class="img-wrapper">
                    <img class="img-responsive" src="<?= $thumb ?>" alt="<?= $memberName ?>">
                  </div>
                  <figcaption class="desc text-center">
                    <h4 class="name"><?= $memberName ?></h4>
                    <span class="position"><?= $teamMember->memberTitle() ?></span>
                  </figcaption>
                </figure>
              </div>
              <?php endforeach; ?>
              
            </div>
          </div>
        </div>
      </div>
    </section>
    <?php endif; ?>

  </div>

<?php snippet('footer') ?>