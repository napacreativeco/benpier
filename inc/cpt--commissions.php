<?php
function cpt__commissions() {
  
  $labels = array(
      'name'                => _x( 'Commissions', 'Post Type General Name', 'bp' ),
      'singular_name'       => _x( 'Commission', 'Post Type Singular Name', 'bp' ),
      'menu_name'           => __( 'Commissions', 'bp' ),
      'parent_item_colon'   => __( 'Parent Commission', 'bp' ),
      'all_items'           => __( 'All Commissions', 'bp' ),
      'view_item'           => __( 'View Commission', 'bp' ),
      'add_new_item'        => __( 'Add New Commission', 'bp' ),
      'add_new'             => __( 'Add New', 'bp' ),
      'edit_item'           => __( 'Edit Commission', 'bp' ),
      'update_item'         => __( 'Update Commission', 'bp' ),
      'search_items'        => __( 'Search Commissions', 'bp' ),
      'not_found'           => __( 'Not Found', 'bp' ),
      'not_found_in_trash'  => __( 'Not found in Trash', 'bp' ),
  );
      
  $args = array(
      'label'               => __( 'commissions', 'bp' ),
      'description'         => __( 'Commissions', 'bp' ),
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
      
  register_post_type( 'commissions', $args );
  
}  
add_action( 'init', 'cpt__commissions', 0 );

 /*======================================================
 * Metabox
 *======================================================*/
// add_filter( 'rwmb_meta_boxes', 'your_prefix_register_meta_boxes' );

// function your_prefix_register_meta_boxes( $meta_boxes ) {
//     $prefix = '';

//     $meta_boxes[] = [
//         'title'   => esc_html__( 'Gallery', 'bp' ),
//         'id'      => 'bp_commissions_gallery',
//         'context' => 'side',
//         'post_types' => 'commissions',
//         'fields'  => [
//             [
//                 'type' => 'image',
//                 'name' => esc_html__( 'Gallery', 'bp' ),
//                 'id'   => $prefix . 'gallery',
//                 'desc' => esc_html__( 'The images used on your Commissions projects', 'bp' ),
//             ],
//         ],
//     ];

//     return $meta_boxes;
// }
?>