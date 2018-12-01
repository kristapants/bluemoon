<?php
	$form = sendform(
		'contact-form-outreach',
		$site->email(),
		$site->title()->html() . ' - message from the contact form'
	);
?>

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

      <p>
           
      <div class="container">
        <div class="row form-contact">
          <div class="row main">
            <form action="<?php echo $page->url()?>#form" method="post">
              
            <div class="col-md-12">
                
              <div class="form-group organic-form xs-radius">
                  <label for="message" class="required">Message*</label>
                  <textarea class="form-control" rows="6" name="message" id="message" required><?php $form->echo_value('message') ?></textarea>
                </div>
              </div>

              <div class="col-md-6">
                <div class="form-group organic-form xs-radius"> 
                  <label for="name" class="required">Name*</label>
                  <input class="form-control"  name="message" id="message" required value="<?php $form->echo_value('message') ?>"/>
                </div>
              </div>
              
              <div class="col-md-6">
                <div class="form-group organic-form xs-radius">
                  <label for="email" class="required">E-Mail*</label>
                  <input class="form-control" type="email" name="_from" id="email" required value="<?php $form->echo_value('_from') ?>"/>
                </div>
              </div>
              
              <div class="col-md-12">
                <div class="form-group organic-form xs-radius">
                  <label for="phonenumber">Phone Number (Optional)</label>
                  <input class="form-control" input type="text" name="phonenumber" id="phonenumber" value="<?php $form->echo_value('phonenumber') ?>"/>
                </div>
              </div>

              <label class="sendform__potty" for="potty">Please leave this field blank</label>
              <input type="text" name="_potty" id="potty" class="sendform__potty" />
              
              <a name="form"></a>
              <?php if ($form->has_message()): ?>
                <div class="message <?php e($form->successful(), 'success' , 'error')?>">
                  <?php $form->echo_message() ?>
                </div>
              <?php endif; ?>  

              <div class="col-md-12">
                <div class="form-group organic-form xs-radius">
                  <button class="btn btn-brand pill" type="submit" name="_submit" value="<?php echo $form->token() ?>"<?php e($form->successful(), " disabled")?>>SEND EMAIL</button>
                </div>
              </div>

            </form>
          </div>
        </div>
      </div>
    </section>
        
  </div>

<?php snippet('footer') ?>