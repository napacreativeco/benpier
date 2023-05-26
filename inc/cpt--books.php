<?php
function cpt__book() {
  
  $labels = array(
      'name'                => _x( 'Book Projects', 'Post Type General Name', 'bp' ),
      'singular_name'       => _x( 'Book', 'Post Type Singular Name', 'bp' ),
      'menu_name'           => __( 'Books', 'bp' ),
      'parent_item_colon'   => __( 'Parent Project', 'bp' ),
      'all_items'           => __( 'All Book Projects', 'bp' ),
      'view_item'           => __( 'View Books', 'bp' ),
      'add_new_item'        => __( 'Add New Book', 'bp' ),
      'add_new'             => __( 'Add New', 'bp' ),
      'edit_item'           => __( 'Edit Book', 'bp' ),
      'update_item'         => __( 'Update Book', 'bp' ),
      'search_items'        => __( 'Search Book Projects', 'bp' ),
      'not_found'           => __( 'Not Found', 'bp' ),
      'not_found_in_trash'  => __( 'Not found in Trash', 'bp' ),
  );
      
  $args = array(
      'label'               => __( 'books', 'bp' ),
      'description'         => __( 'Books', 'bp' ),
      'labels'              => $labels,
      'supports'            => array( 'title', 'editor', 'excerpt', 'gallery', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'tags', 'page-attributes' ),
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
      
  register_post_type( 'books', $args );
  
}  
add_action( 'init', 'cpt__book', 0 );
?>