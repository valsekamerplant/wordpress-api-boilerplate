<?php

class Filters {

  function __construct() {
    //Toggle Maintenance Mode
    //add_action('get_header', array($this, 'wp_maintenance_mode'));
    //add XML as mimetype to upload widget
    //add_filter('upload_mimes', array($this,'custom_upload_xml'));
  }
  
  function custom_upload_xml($mimes) {
      $mimes = array_merge($mimes, array('xml' => 'application/xml'));
      return $mimes;
  }

  function wp_maintenance_mode(){
    if(!current_user_can('edit_themes') || !is_user_logged_in()){
      wp_die('<h1 style="color:red">Website under Maintenance</h1><br />We are performing scheduled maintenance. We                 will be back on-line shortly!');
    }
  }
  
}

$filters = new Filters();

?>
