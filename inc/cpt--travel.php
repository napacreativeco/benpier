<?php
function cpt__travel() {
  
  $labels = array(
      'name'                => _x( 'Travel Project', 'Post Type General Name', 'bp' ),
      'singular_name'       => _x( 'Travel', 'Post Type Singular Name', 'bp' ),
      'menu_name'           => __( 'Travel Projects', 'bp' ),
      'parent_item_colon'   => __( 'Parent Project', 'bp' ),
      'all_items'           => __( 'All Travel Projects', 'bp' ),
      'view_item'           => __( 'View Travel Projects', 'bp' ),
      'add_new_item'        => __( 'Add New Travel', 'bp' ),
      'add_new'             => __( 'Add New', 'bp' ),
      'edit_item'           => __( 'Edit Travel', 'bp' ),
      'update_item'         => __( 'Update Travel', 'bp' ),
      'search_items'        => __( 'Search Travel Projects', 'bp' ),
      'not_found'           => __( 'Not Found', 'bp' ),
      'not_found_in_trash'  => __( 'Not found in Trash', 'bp' ),
  );
      
  $args = array(
      'label'               => __( 'travel', 'bp' ),
      'description'         => __( 'Travel', 'bp' ),
      'labels'              => $labels,
      'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'tags' ),
      'hierarchical'        => false,
      'public'              => true,
      'show_ui'             => true,
      'show_in_menu'        => true,
      'show_in_nav_menus'   => true,
      'show_in_admin_bar'   => true,
      'menu_position'       => 5,
      'can_export'          => true,
      'has_archive'         => true,
      'exclude_from_search' => false,
      'publicly_queryable'  => true,
      'capability_type'     => 'post',
      'show_in_rest' => true,
  
  );
      
  register_post_type( 'travel', $args );
  
}  
add_action( 'init', 'cpt__travel', 0 );
?>