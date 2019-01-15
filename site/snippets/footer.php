  </div>

  <?php snippet('social-callout') ?>

  <footer class="footer-style-1">
    <div class="container">
      <div class="row">
        <div class="footer-style-1-inner">
          <?php 
            // get footer logo but fall back to default
            $footerLogo = '/assets/images/BMLogo.png'; 
            $logoImg = $site->footerLogo()->isNotEmpty()
              ? $site->image( $site->footerLogo() )
              : false;
            if ( $logoImg ) {
              $footerLogo = $logoImg->url();
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
              <h4 class="h4 heading">Sitemap</h4>
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
            <h4 class="h4 heading"><?= $site->newsletterFormHeading()?></h4>
            <?php /* <p>Sign up for our mailing list below.</p> */ ?>
            <?php
              $formAction = $site->mailchimpFormAction();
              if ( $formAction != '' ) :
            ?>
            <!-- Begin MailChimp Signup Form -->
            <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
            <div id="mc_embed_signup">
              <form action="<?= $formAction ?>" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate Orchid-form form-inline btn-add-on circle border" target="_blank" novalidate>
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
            <?php endif; ?>

            <?php 
              $facebook = $site->facebook();
              $instagram = $site->instagram();
              if ( $facebook !== '' || $instagram !== '' ) : 
            ?>
              <h4 class="h4 heading">Follow us</h4>
              <div class="social-links">
                <?php if ($facebook != '') : ?>
                <a id="fb-link" href="<?= $facebook ?>">
                  <i class="fa fa-facebook"></i>
                </a>
                <?php endif; ?>
                <?php if ($instagram != '') : ?>
                <a id="instagram-link" href="<?= $instagram?>">
                  <i class="fa fa-instagram"></i>
                </a>
                <?php endif; ?>
              </div>
            <?php endif; ?>

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
  <?php snippet('footer-scripts'); ?>
</body>
</html>