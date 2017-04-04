<?php

class Example {

  function __construct() {
    add_action( 'init', array($this,'example_post_type'), 0 );
  }
  // Register Custom Post Type
  function example_post_type() {

      $labels = array(
          'name'                  => _x( 'Examples', 'Post Type General Name', 'text_domain' ),
          'singular_name'         => _x( 'Example', 'Post Type Singular Name', 'text_domain' ),
          'menu_name'             => __( 'Examples', 'text_domain' ),
          'name_admin_bar'        => __( 'Example', 'text_domain' ),
          'archives'              => __( 'Item Archives', 'text_domain' ),
          'attributes'            => __( 'Item Attributes', 'text_domain' ),
          'parent_item_colon'     => __( 'Parent Example:', 'text_domain' ),
          'all_items'             => __( 'All Examples', 'text_domain' ),
          'add_new_item'          => __( 'Add New Example', 'text_domain' ),
          'add_new'               => __( 'New Example', 'text_domain' ),
          'new_item'              => __( 'New Item', 'text_domain' ),
          'edit_item'             => __( 'Edit Example', 'text_domain' ),
          'update_item'           => __( 'Update Example', 'text_domain' ),
          'view_item'             => __( 'View Example', 'text_domain' ),
          'view_items'            => __( 'View Items', 'text_domain' ),
          'search_items'          => __( 'Search Examples', 'text_domain' ),
          'not_found'             => __( 'No Examples found', 'text_domain' ),
          'not_found_in_trash'    => __( 'No Examples found in Trash', 'text_domain' ),
          'featured_image'        => __( 'Featured Image', 'text_domain' ),
          'set_featured_image'    => __( 'Set featured image', 'text_domain' ),
          'remove_featured_image' => __( 'Remove featured image', 'text_domain' ),
          'use_featured_image'    => __( 'Use as featured image', 'text_domain' ),
          'insert_into_item'      => __( 'Insert into item', 'text_domain' ),
          'uploaded_to_this_item' => __( 'Uploaded to this item', 'text_domain' ),
          'items_list'            => __( 'Items list', 'text_domain' ),
          'items_list_navigation' => __( 'Items list navigation', 'text_domain' ),
          'filter_items_list'     => __( 'Filter items list', 'text_domain' ),
      );
      $args = array(
          'label'                 => __( 'Example', 'text_domain' ),
          'description'           => __( 'Example information pages.', 'text_domain' ),
          'labels'                => $labels,
          'supports'              => array( 'title', 'thumbnail', 'revisions', ),
          'taxonomies'            => array( 'appliance' ),
          'hierarchical'          => false,
          'public'                => true,
          'show_ui'               => true,
          'show_in_menu'          => true,
          'menu_position'         => 5,
          'menu_icon'             => 'dashicons-lightbulb',
          'show_in_admin_bar'     => true,
          'show_in_nav_menus'     => true,
          'can_export'            => true,
          'has_archive'           => true,		
          'exclude_from_search'   => false,
          'publicly_queryable'    => true,
          //OPTIONAL: can be used to set specific permissions for this post type
          //'capability_type'       => array('example','examples'),
          'map_meta_cap'          => true,
          //Important to let wordpress know that this needs to be added to the rest calls
          'show_in_rest'          => true,
          //Base url for your API rest calls
          'rest_base'             => 'examples',
          'rest_controller_class' => 'WP_REST_Posts_Controller',
      );
      register_post_type( 'example', $args );

  }
  
}

$example = new Example();

?>
