<?php
global $product;


$loop = new WP_Query(
    array(
        'post_type' => 'product',
        'posts_per_page' => 999,
        'orderby' => 'title',
        'order'   => 'ASC',
    )
);
?>

<ul class="products-wrapper merch-loop">
    <?php
    while( $loop->have_posts() ) :
        $loop->the_post();

        $thumb_id = get_post_thumbnail_id();
        $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
        $thumb_url = $thumb_url_array[0];

        $post_slug = $post->post_name;
        $post_blocks = parse_blocks(get_the_content());
        $price = get_post_meta( get_the_ID(), '_price', true );
    ?>

        <li class="product">
            <!-- Image -->
            <div class="image" 
                style="background: url('<?php echo $thumb_url ?>'); background-size: cover; background-position: center center;"
                onclick="window.location='<?php echo the_permalink(); ?>';">
                &nbsp;
            </div>

            <div class="info">
                <div class="l">
                    <!-- Title -->
                    <h2 class="title">
                        <a href="<?php echo the_permalink(); ?>" title="<?php the_title() ?>">
                            <?php the_title(); ?>
                        </a>
                    </h2>
                </div>
                <div class="r">
                    <span class="price">
                        <a href="<?php echo the_permalink(); ?>" title="<?php the_title() ?>">
                            <?php echo wc_price( $price ); ?>
                        </a>
                    </span>
                </div>
            </div>

        </li>


    <?php
    endwhile;
    ?>
</ul>


