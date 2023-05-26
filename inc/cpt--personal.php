<?php
function cpt__personal() {
  
  $labels = array(
      'name'                => _x( 'Personal Project', 'Post Type General Name', 'bp' ),
      'singular_name'       => _x( 'Personal', 'Post Type Singular Name', 'bp' ),
      'menu_name'           => __( 'Personal Projects', 'bp' ),
      'parent_item_colon'   => __( 'Parent Project', 'bp' ),
      'all_items'           => __( 'All Personal Projects', 'bp' ),
      'view_item'           => __( 'View Personals', 'bp' ),
      'add_new_item'        => __( 'Add New Personal', 'bp' ),
      'add_new'             => __( 'Add New', 'bp' ),
      'edit_item'           => __( 'Edit Personal', 'bp' ),
      'update_item'         => __( 'Update Personal', 'bp' ),
      'search_items'        => __( 'Search Personal Projects', 'bp' ),
      'not_found'           => __( 'Not Found', 'bp' ),
      'not_found_in_trash'  => __( 'Not found in Trash', 'bp' ),
  );
      
  $args = array(
      'label'               => __( 'personal', 'bp' ),
      'description'         => __( 'Personal Projects', 'bp' ),
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
      
  register_post_type( 'personal', $args );
  
}  
add_action( 'init', 'cpt__personal', 0 );
?>