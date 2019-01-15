<?php

kirbytext::$tags['cropped'] = array(
  'attr' => array(
    'alt',
    'width',
    'height',
    'class',
    'caption'
  ),
  'html' => function($tag) {
    $url = $tag->attr('cropped');
    if ($url == '' && $tag->page()->image($url)) {
      return '';
    }
    $width = $tag->attr('width', 300);
    $height = $tag->attr('height', $width);
    $url = thumb($tag->page()->image($url), array('width' => $width, 'height' => $height, 'crop' => true))->url();
    $alt = $tag->attr('alt');
    $class = $tag->attr('class');
    $caption = $tag->attr('caption');
    if ($caption != '') {
      $caption = sprintf('<figcaption>%s</figcaption>', $caption);
    }
    return sprintf('<figure class="%s"><img src="%s" alt="%s"/>%s</figure>', $class, $url, $alt, $caption);
  }
);