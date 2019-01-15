<?php 
  
  
  echo js( array(
      'assets/js/library/jquery.min.js',
      'assets/js/library/bootstrap.min.js',
      'assets/js/function-check-viewport.js',
      'assets/revolution/js/jquery.themepunch.tools.min.js',
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
      'assets/js/config-youtube-post.js',
    ) ); 

    if ($page->isHomePage()
      || isset($GLOBALS['includeRevolution'])) {
      echo js( array(
        'assets/revolution/js/jquery.themepunch.revolution.min.js',
        'assets/revolution/js/extensions/revolution.extension.carousel.min.js',
        'assets/revolution/js/extensions/revolution.extension.kenburn.min.js',
        'assets/revolution/js/extensions/revolution.extension.layeranimation.min.js',
        'assets/revolution/js/extensions/revolution.extension.migration.min.js',
        'assets/revolution/js/extensions/revolution.extension.navigation.min.js',
        'assets/revolution/js/extensions/revolution.extension.parallax.min.js',
        'assets/revolution/js/extensions/revolution.extension.actions.min.js',
        'assets/revolution/js/extensions/revolution.extension.slideanims.min.js',
        'assets/revolution/js/extensions/revolution.extension.video.min.js',
        'assets/js/config-banner-slider-2.js',
        'assets/js/config-carousel.js'
      ) );
    }
?>