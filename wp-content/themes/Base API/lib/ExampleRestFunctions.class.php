<?php

class BatteryRestFunctions{
  
  function __construct(){
    //use the post type as filter if you have post type product you use 'rest_prepare_product'
    add_filter( 'rest_prepare_example', array($this,'sanitize_example_json'),12,3 );
    add_action( 'rest_api_init', array($this,'register_example_meta') );
    
  }
  
  function register_example_meta() {
    //add all advanced custom fields or meta fields you want to add to the array as a string;
    $meta_fields = ['example_custom_field'];
    foreach($meta_fields as $field){
      //set the post type you want to add the custom fields to
      register_rest_field( 'example',$field,
        array(
          'get_callback'    => array($this,'_get_example_meta'), //callback to add each custom field to the GET call
          'update_callback' => array($this,'_update_example_meta'), //callback to add each custom field to the Update call
          'schema'          => null,
        )
      );
    }
  }

  function _get_example_meta( $object, $field_name, $request ) {
    return get_field($field_name, $object[ 'id' ]);
  }

  function _update_example_meta( $value, $object, $field_name ) {
    if ( ! $value || ! is_string( $value ) ) {
        return;
    }
    return update_post_meta( $object->ID, $field_name, strip_tags( $value ) );
  }
  
  //Here we customize our return json for the get api call
  function sanitize_example_json( $data, $post, $context ) {
      return [
        'id'		  => $data->data['id'],
        'revision'    => $this->_get_latest_revision_id($data->data['id']), //we add revisions as a count instead of the revision id;
        'name'		  => $data->data['title']['rendered'], //beter name instead of title rendered
        'created'     => $data->data['date'], //better name instead of just date
      ];
  }
  function _get_latest_revision_id($id){
    return count(wp_get_post_revisions( $id));
  }
  
}

$BatteryRestFunctions = new BatteryRestFunctions();