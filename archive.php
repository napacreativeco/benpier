<?php
get_header();

global $post;

$term = get_queried_object();

$loop = new WP_Query(
    array(
        'post_type' => $term->name,
        'posts_per_page' => 999,
        'orderby' => 'title',
        'order'   => 'ASC',
    )
);
?>

<link rel="stylesheet" href="https://unpkg.com/flexmasonry/dist/flexmasonry.css">
<script src="https://unpkg.com/flexmasonry/dist/flexmasonry.js"></script>

<main class="taxonomy-container page--books" data-barba="container" data-barba-namespace="books">

    <div class="header">
        <div class="breadcrumbs">
            <ul>
                <li><a href="/" title="Home">Home</a></li>
                <li>/</li>
                <li><?php echo $term->description; ?></li>
            </ul>
        </div>
        <h1><?php echo $term->description; ?></h1>
    </div>

    <div class="image-grid">

        <div class="grid-wrapper grid">

            <?php
            while ( $loop->have_posts() ) : $loop->the_post();

                $thumb_id = get_post_thumbnail_id();
                $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
                $thumb_url = $thumb_url_array[0];

                $post_slug = $post->post_name;
                $post_blocks = parse_blocks(get_the_content());
                ?>

                <!-- IMAGE -->
                <div 
                    class="grid-item taxonomy-item"
                    style="background-color: <?php /* Customizer */ ?>; color: <?php /* Customizer */ ?>;"
                    data-aos="fade-up"
                >
                    <div class="taxonomy-image">
                        <img id="image" class="<?php the_title(); ?>-image" src="<?php echo $thumb_url ?>" alt="<?php the_title(); ?>" />
                        <div class="info-overlay"
                            data-title="<?php esc_attr(the_title()); ?>"
                            data-description="<?php esc_attr(the_excerpt()); ?>"
                            data-content="<?php echo esc_attr( get_the_content() ) ?>"
                            data-slug="<?php get_post_field( 'post_name', get_post() ); ?>"
                            data-bg-color="<?php the_field('bg_color'); ?>"
                            data-img="<?php echo $thumb_url ?>">
                            <?php the_title(); ?>
                        </div>
                    </div>

                
                </div>


            <?php
            endwhile;
            wp_reset_postdata();
            ?>

        </div>
    </div>


</div>



<script src="<?php echo get_template_directory_uri(); ?>/js/taxonomy.js" type="text/javascript"></script>

<?php
get_footer();
?>