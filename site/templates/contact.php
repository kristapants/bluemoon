<?php snippet('header') ?>

  <div class="contact">
        
    <section class="boxed-sm">
      
      <div class="container">
        <div class="row">
          <div class="row icon-box-contact-wrapper">
            <div class="row main">
              <div class="col-md-4">
                <div class="icon-box">
                  <i class="fa fa-map-marker"></i>
                  <p><?php echo html::decode($site->address()->kirbytext()) ?></p>
                </div>
              </div>
              <div class="col-md-4">
                <a class="icon-box" href="tel:<?= str::encode($site->phone()) ?>">
                  <i class="fa fa-mobile"></i><?= str::encode($site->phone()) ?>
                </a>
              </div>
              <div class="col-md-4">
                <a class="icon-box" href="mailto:<?= str::encode($site->email()) ?>">
                  <i class="fa fa-envelope-o"></i><?= str::encode($site->email()) ?>
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
      
      <div class="container">
        <div class="row">
          <div class="map-canvas" id="js-map-canvas"></div>
        </div>
      </div>
           
      <div class="container">
        <div class="row form-contact">
          <div class="row main">
            <form>
              <div class="col-md-12">
                <div class="form-group organic-form xs-radius">
                  <textarea class="form-control" placeholder="Your Message" rows="6"></textarea>
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group organic-form xs-radius">
                  <input class="form-control" placeholder="Your Name">
                </div>
              </div>
              <div class="col-md-6">
                <div class="form-group organic-form xs-radius">
                  <input class="form-control" placeholder="Your Email" type="email">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group organic-form xs-radius">
                  <input class="form-control" placeholder="Phone Number">
                </div>
              </div>
              <div class="col-md-12">
                <div class="form-group organic-form xs-radius">
                  <button class="btn btn-brand pill">SEND EMAIL</button>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
        
  </div>

<?php snippet('footer') ?>