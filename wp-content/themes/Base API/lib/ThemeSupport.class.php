<?php

class Theme_support {

  function __construct() {
    add_theme_support( 'post-thumbnails' );
    add_theme_support( 'menus' );
    add_post_type_support( 'page', 'excerpt' );
  }

}

$theme_support = new Theme_support();

?>
