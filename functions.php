<?php
if ( ! function_exists( 'throne_theme_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 */
function throne_theme_setup() {
	
	wp_enqueue_script("jquery");
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_style( 'styles', get_template_directory_uri() . '/compiled/app.css' );
	
    add_theme_support( 'post-thumbnails' );
	add_theme_support( 'woocommerce' );
	
    register_nav_menus(
        array(
        'main-menu' => __( 'Main Menu' ),
        'footer-menu' => __( 'Footer Menu' )
        )
    );
    
}
endif;
add_action( 'init', 'throne_theme_setup' );


/*======================================================
 * Disable WooCommerce Styles
 *======================================================*/
add_filter( 'woocommerce_enqueue_styles', '__return_empty_array' );


/*======================================================
 * Trim Zeros on Prices
 *======================================================*/
add_filter( 'woocommerce_price_trim_zeros', '__return_true' );

/*======================================================
 * Custom Taxonomies
 *======================================================*/
include get_template_directory() . '/inc/cpt--commissions.php';
include get_template_directory() . '/inc/cpt--personal.php';
include get_template_directory() . '/inc/cpt--film.php';
include get_template_directory() . '/inc/cpt--books.php';
include get_template_directory() . '/inc/cpt--travel.php';

/*======================================================
 * Customizer Settings
 *======================================================*/
 include get_template_directory() . '/inc/cust--megamenu.php';
 include get_template_directory() . '/inc/cust--bio.php';



 /*======================================================
 * Metabox
 *======================================================*/
add_filter( 'rwmb_meta_boxes', 'bp_meta_boxes' );

function bp_meta_boxes( $meta_boxes ) {
    $prefix = '';

    $meta_boxes[] = [
        'title'   => esc_html__( 'Gallery', 'bp' ),
        'id'      => 'bp_gallery',
        'post_types' => 'books, commissions, films, personal, travel',
        'fields'  => [
            [
                'type' => 'file_advanced',
                'name' => esc_html__( 'Gallery', 'bp' ),
                'id'   => $prefix . 'bp_gallery_image',
                'desc' => esc_html__( 'The images used on your projects', 'bp' ),
            ],
        ],
    ];

    return $meta_boxes;
}
