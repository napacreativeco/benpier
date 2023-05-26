<?php
function cpt__film() {
  
  $labels = array(
      'name'                => _x( 'Film Project', 'Post Type General Name', 'bp' ),
      'singular_name'       => _x( 'Film', 'Post Type Singular Name', 'bp' ),
      'menu_name'           => __( 'Films', 'bp' ),
      'parent_item_colon'   => __( 'Parent Project', 'bp' ),
      'all_items'           => __( 'All Film Projects', 'bp' ),
      'view_item'           => __( 'View Films', 'bp' ),
      'add_new_item'        => __( 'Add New Film', 'bp' ),
      'add_new'             => __( 'Add New', 'bp' ),
      'edit_item'           => __( 'Edit Film', 'bp' ),
      'update_item'         => __( 'Update Film', 'bp' ),
      'search_items'        => __( 'Search Film Projects', 'bp' ),
      'not_found'           => __( 'Not Found', 'bp' ),
      'not_found_in_trash'  => __( 'Not found in Trash', 'bp' ),
  );
      
  $args = array(
      'label'               => __( 'film', 'bp' ),
      'description'         => __( 'Films', 'bp' ),
      'labels'              => $labels,
      'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'tags' ),
      'hierarchical'        => true,
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
      
  register_post_type( 'films', $args );
  
}  
add_action( 'init', 'cpt__film', 0 );

?>