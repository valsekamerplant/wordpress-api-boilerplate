<?php

class Widgets {

  function __construct() {
    //action to further whitewash the wordpress admin page
    add_action( 'admin_bar_menu', array($this,'remove_wp_logo'), 999 );
  }
  
  function remove_wp_logo( $wp_admin_bar ) {
      $wp_admin_bar->remove_node( 'wp-logo' );
      $wp_admin_bar->remove_node('site-name');
      $wp_admin_bar->remove_node('updates');
      $wp_admin_bar->remove_node('comments');
      $wp_admin_bar->remove_node('new-content');
      $wp_admin_bar->remove_node('view');
  }

}

$widgets = new Widgets();

?>
