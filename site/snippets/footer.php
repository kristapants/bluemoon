  </div>
  <footer class="footer-style-1">
    <div class="container">
      <div class="row">
        <div class="footer-style-1-inner">
          <div class="widget-footer widget-text col-first col-small">
            <a href="<?= url() ?>" rel="home">
              <img class="logo-footer" src="/assets/images/BMLogo.png" alt="Logo Orchid" />
            </a>
            <div class="widget-link">
              <ul>
                <li>
                  <span class="lnr lnr-map-marker icon"></span>
                  <span>379 5th Ave New York, NYC 10018</span>
                </li>
                <li>
                  <span class="lnr lnr-phone-handset icon"></span>
                  <a href="tel:0123456789">(+1) 96 716 6879</a>
                </li>
                <li>
                  <span class="lnr lnr-envelope icon"></span>
                  <a href="mailto: contact@site.com">contact@site.com </a>
                </li>
              </ul>
            </div>
          </div>
          <div class="widget-footer widget-link col-second col-medium">
            <div class="list-link">
              <h4 class="h4 heading">SHOP</h4>
              <ul>
                <li>
                  <a href="#">Food</a>
                </li>
                <li>
                  <a href="#">Farm</a>
                </li>
                <li>
                  <a href="#">Health</a>
                </li>
                <li>
                  <a href="#">Orchid</a>
                </li>
              </ul>
            </div>
          </div>
          <div class="widget-footer widget-newsletter-footer col-last col-small">
            <h4 class="h4 heading">NEWSLETTER</h4>
            <p>Subscribe now to get daily updates</p>
            <form class="Orchid-form form-inline btn-add-on circle border">
              <div class="form-group">
                <input class="form-control pill transparent" placeholder="Your Email..." type="email" />
                <button class="btn btn-brand circle" type="submit">
                  <i class="fa fa-envelope-o"></i>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <div class="copy-right style-1">
      <div class="container">
        <div class="row">
          <div class="copy-right-inner">
            <p class="footer-copyright"><?php
              // Parse Kirbytext to support dynamic year,
              // but remove all HTML like paragraph tags:
              echo html::decode($site->copyright()->kirbytext())
            ?></p>
            <div class="widget widget-footer widget-footer-creadit-card">
              <ul class="list-unstyle">
                <li>
                  <a href="#">
                    <img src="/assets/images/icons/creadit-card-01.png" alt="creadit card" />
                  </a>
                </li>
                <li>
                  <a href="#">
                    <img src="/assets/images/icons/creadit-card-02.png" alt="creadit card" />
                  </a>
                </li>
                <li>
                  <a href="#">
                    <img src="/assets/images/icons/creadit-card-03.png" alt="creadit card" />
                  </a>
                </li>
                <li>
                  <a href="#">
                    <img src="/assets/images/icons/creadit-card-04.png" alt="creadit card" />
                  </a>
                </li>
              </ul>
            </div>
          </div>
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