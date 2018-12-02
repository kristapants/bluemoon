  </div>

  <?php snippet('social-callout') ?>

  <footer class="footer-style-1">
    <div class="container">
      <div class="row">
        <div class="footer-style-1-inner">
          <?php 
            // get footer logo but fall back to default
            $footerLogo = '/assets/images/BMLogo.png'; 
            $footerLogoSetting = $site->footerLogo();
            if ( $footerLogoSetting != '' ) {
              $footerLogo = $site->image( $footerLogoSetting )->url();
            }
          ?>
          <div class="widget-footer widget-text col-first col-medium">
            <a href="<?= url() ?>" rel="home">
              <img class="logo-footer" src="<?= $footerLogo ?>" alt="Logo Orchid" />
            </a>
            <div class="widget-link">
              <ul>
                <li>
                  <span class="lnr lnr-map-marker icon"></span>
                  <span><?php
                    echo html::decode( $site->address()->kirbytext() )
                  ?></span>
                </li>
                <li>
                  <span class="lnr lnr-phone-handset icon"></span>
                  <?= html::a( "tel:" . $site->phone(), $site->phone() ) ?>
                </li>
                <li id="mailLink">
                  <span class="lnr lnr-envelope icon"></span>
                  <?= html::email( $site->email() ) ?>
                </li>
              </ul>
            </div>
          </div>
          <div class="widget-footer widget-link col-second col-small">
            <div class="list-link">
              <h4 class="h4 heading">SITEMAP</h4>
              <ul>
                <?php foreach($pages->visible() as $item): ?>
                <li>
                  <a href="<?= $item->url() ?>"><?= $item->title()->html() ?></a>
                </li>
                <?php endforeach ?>
              </ul>
            </div>
          </div>
          <div class="widget-footer widget-newsletter-footer col-last col-small">
            <h4 class="h4 heading">NEWSLETTER</h4>
            <p>Sign up for our mailing list below.</p>
            
            <!-- Begin MailChimp Signup Form -->
            <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
            <div id="mc_embed_signup">
              <form action="https://bluemooncommunityfarm.us4.list-manage.com/subscribe/post?u=daf5c49ef133df9d71ae4da81&amp;id=68526203f4" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate Orchid-form form-inline btn-add-on circle border" target="_blank" novalidate>
                <div id="mc_embed_signup_scroll">
                  <div class="mc-field-group form-group">
                    <input type="email" placeholder="Your Email..." value="" name="EMAIL" class="form-control pill transparent required email" id="mce-EMAIL">
                    <button type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button btn btn-brand circle">
                      <i class="fa fa-envelope-o"></i>
                    </button>
                  </div>
                  <div id="mce-responses" class="clear">
                    <div class="response" id="mce-error-response" style="display:none"></div>
                    <div class="response" id="mce-success-response" style="display:none"></div>
                  </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                  <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_daf5c49ef133df9d71ae4da81_68526203f4" tabindex="-1" value=""></div>
                </div>
              </form>
            </div>
            <!--End mc_embed_signup-->

          </div>
        </div>
      </div>
    </div>
    <div class="copy-right style-1">
      <div class="container">
        <div class="row">
          <div class="copy-right-inner">
            
            <div class="widget widget-footer widget-footer-creadit-card award-images">
              <?php
                $awardImages = $site->awardAssociationImages()->toStructure();
                if ( count( $awardImages ) > 0 ) :
              ?>
                <ul class="list-unstyle">
                  <?php 
                  foreach ( $awardImages as $awardImage ) : 
                    $image = $site->image( $awardImage->image() )->url();
                    $url = $awardImage->url();
                    $title = $awardImage->title();
                    $hideInMobile = $awardImage->hideInMobile();
                    $hideInMobile = $hideInMobile == 'true'
                      ? ' class="hidden-xs-inline"'
                      : '';
                    $inner = sprintf( '<img src="%s" alt="%s"/>', $image, $title );
                    if ( $url != '' ) {
                      $inner = sprintf( '<a href="%s" title="%s" target="_blank">%s</a>', $url, $title, $inner );
                    }
                    printf( '<li%s>%s</li>', $hideInMobile, $inner );
                  endforeach;
                  ?>
                </ul>
              <?php endif; ?>
            </div>

          </div>
          <p class="footer-copyright"><?php
            // Parse Kirbytext to support dynamic year,
            // but remove all HTML like paragraph tags:
            echo html::decode($site->copyright()->kirbytext())
          ?></p>
            
        </div>
      </div>
    </div>
  </footer>
  <?= js(array(
    'assets/js/library/jquery.min.js',
    'assets/js/library/bootstrap.min.js',
    'assets/js/function-check-viewport.js',
    'assets/js/library/slick.min.js',
    'assets/js/library/select2.full.min.js',
    'assets/js/library/imagesloaded.pkgd.min.js',
    'assets/js/library/jquery.mmenu.all.min.js',
    'assets/js/library/rellax.min.js',
    'assets/js/library/isotope.pkgd.min.js',
    'assets/js/library/bootstrap-notify.min.js',
    'assets/js/library/bootstrap-slider.js',
    'assets/js/library/in-view.min.js',
    'assets/js/library/countUp.js',
    'assets/js/library/animsition.min.js',
    'assets/js/global.js',
    'assets/js/config-mm-menu.js',
    'assets/js/config-set-bg-blog-thumb.js',
    'assets/js/config-inview-counter-up.js',
    'assets/js/config-carousel.js',
  )) ?>
</body>
</html>