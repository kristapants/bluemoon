<?php 

kirbytext::$tags['paypal'] = array(
  'html' => function($tag) {
    $heading = $tag->attr('paypal', '');
    $url = $tag->page()->kirby()->request()->url();

    if ( strpos( $url, '/edit' ) !== false ) {
      return '[paypal form inserted]';
    }

    if ( $heading != '' ) {
      $heading = sprintf( '<h4>%s</h4>', $heading );
    }
    
    return '<div class="paypal-wrapper">'
    .'<form target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">'
      .$heading
      .'<input type="hidden" name="cmd" value="_s-xclick">'
      .'<input type="hidden" name="hosted_button_id" value="U29RBLV9MD64N">'
      .'<table>'
      .'<tr><td><input type="hidden" name="on0" value="Please select share(s) your are purchasing:">Please select share(s) your are purchasing:</td></tr><tr><td><select name="os0">'
        .'<option value="Full CSA Share">Full CSA Share $696.00 USD</option>'
        .'<option value="Every-Other-Week (EOW) Share">Every-Other-Week (EOW) Share $412.00 USD</option>'
        .'<option value="Late Fall Share">Late Fall Share $184.00 USD</option>'
        .'<option value="Late Fall EOW Share">Late Fall EOW Share $93.00 USD</option>'
        .'<option value="Full Egg Share">Full Egg Share $93.00 USD</option>'
        .'<option value="EOW Egg Share">EOW Egg Share $47.00 USD</option>'
        .'<option value="Community Share">Community Share $103.00 USD</option>'
      .'</select> </td></tr>'
      .'</table>'
      .'<input type="hidden" name="currency_code" value="USD">'
      .'<input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" border="0" name="submit" alt="PayPal - The safer, easier way to pay online!">'
      .'<img alt="" border="0" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" width="1" height="1">'
      .'</form>'
      .'</div>';
  }
);