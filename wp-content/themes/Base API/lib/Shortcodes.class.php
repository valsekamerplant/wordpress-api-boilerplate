<?php

class Shortcodes {

  function __construct() {
    add_shortcode('shortcode-wp-trigger-name', array($this, 'shortcode_function_name'));
  }

  function shortcode_function_name($atts) {
    extract(shortcode_atts(array(
      'shortcode_attr' => "",
    ), $atts));

    return '<a class="'. $class .' item" href="'. $imgurl .'"><img src="'. $imgurl .'" alt="'. $imgtitle .'"/></a>';
  }

}

$shortcodes = new Shortcodes();

?>
