<?php
/* Template name: Books */

get_header();

global $post;

$loop = new WP_Query(
    array(
        'post_type' => 'books',
        'posts_per_page' => 999,
        'orderby' => 'title',
        'order'   => 'ASC',
    )
);
?>

<link rel="stylesheet" href="https://unpkg.com/flexmasonry/dist/flexmasonry.css">
<script src="https://unpkg.com/flexmasonry/dist/flexmasonry.js"></script>

<main class="taxonomy-container page--books">

    <div class="header">
        <h1><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>
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
                    data-title="<?php the_title(); ?>"
                    data-description="<?php the_excerpt(); ?>"
                    data-content="<?php echo esc_attr( get_the_content() ) ?>"
                    data-slug="<?php get_post_field( 'post_name', get_post() ); ?>"
                    data-img="<?php echo $thumb_url ?>"
                >
                    <div class="taxonomy-image">
                        <img id="image" class="<?php the_title(); ?>-image" src="<?php echo $thumb_url ?>" alt="<?php the_title(); ?>" />
                    </div>

                
                </div>


            <?php
            endwhile;
            wp_reset_postdata();
            ?>

        </div>
    </div>


</div>

<script>

</script>

<script src="<?php echo get_template_directory_uri(); ?>/js/taxonomy.js" type="text/javascript"></script>

<?php
get_footer();
?>