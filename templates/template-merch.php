<?php
/* Template name: Merch */ 

get_header('shop'); ?>

<main class="taxonomy-container page--merch">


    <div class="header">        
        <h1><?php the_title(); ?></h1>
        <p><?php the_content(); ?></p>
    </div>

    <ul class="products">
        <?php
        $args = array(
            'post_type' => 'product',
            'posts_per_page' => 12
            );
        $loop = new WP_Query( $args );

        if ( $loop->have_posts() ) {
            while ( $loop->have_posts() ) : $loop->the_post(); ?>

            <li class="product">

                <div class="image" onclick="window.location='<?php the_permalink(); ?>';">
                    <?php
                    $images = $product->get_gallery_image_ids();
                    $args = array('order'=>'ASC', 'post_type'=>'attachment', 'post_parent'=>$post->ID, 'post_mime_type'=>'image', 'post_status'=>null, 'numberposts'=>9); 
                    $items = get_posts($args);

                    foreach ($items as $item) { 
                        $atts = wp_get_attachment_image_src($item->ID, 'full'); ?>
                        <img class="product-image" src="<?php echo $atts[0]; ?>" alt="<?php the_title(); ?>" />
                    <?php } ?>
                </div>

                <div class="info">
                    <div class="l">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                            <h2><?php the_title(); ?></h2>
                        </a>
                        <span>
                            <?php
                            $terms = get_the_terms( $product->ID, 'product_cat' );
                            foreach ($terms as $term) {
                                $product_cat_id = $term->name; ?>
                                    <span><?php echo $product_cat_id; ?></span>
                                <?php
                                break;
                            }
                            ?>
                        </span>
                    </div>
                    <div class="r">
                        <span class="price">
                            <?php echo $product->get_price_html(); ?>
                        </span>
                    </div>
                </div>

            </li>

        <?php
            endwhile;
        } else {
            echo __( 'No products found' );
        }

        wp_reset_postdata();
        ?>
    </ul>
</div>



<script>
    (function($) {

        $(document).ready(function() {
            var api = "http://ben-pier.local/wp-json/wp/v2/";
            $.get(api, function(data, status){
                console.log(JSON.stringify(data));
            });
        })

    })(jQuery);

</script>

<?php 
get_footer(); 