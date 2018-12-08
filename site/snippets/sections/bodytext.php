<?php
  $heading = $data->contentHeading();
  $text = $page->contentText()->kirbytext();
  if ( $text != '') :
?> 
<section class="content-section boxed-sm">
  <div class="container">
    <div class="row blog-v">
      <div class="col-md-12">
        <div class="post">
          <?php
            print( '<h3 class="title-default">' . $heading . '</h3>' );
            echo $text;
          ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>