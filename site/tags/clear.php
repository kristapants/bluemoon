<?php

kirbytext::$tags['clear'] = array(
  'html' => function($tag) {
    $dir = $tag->attr('clear', 'both');
    return '<div class="clear-' . $dir . '"></div>';
  }
);