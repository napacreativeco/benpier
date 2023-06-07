<?php
    global $product;
    $attachment_ids = $product->get_gallery_attachment_ids();
?>

<div class="single-product">

    <!-- Gallery -->
    <div class="gallery">
        <div class="artist-swiper swiper">
            <div class="swiper-wrapper">
                <?php
                foreach( $attachment_ids as $attachment_id ) { ?>
                    <div class="swiper-slide" style="background: url('<?php echo wp_get_attachment_image_src( $attachment_id, 'full' )[0]; ?>'); background-size: cover; background-position: center center;">
                        &nbsp;
                    </div>
                <?php
                }
                ?>
            </div>

            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>

        <div class="swiper-pagination"></div>
    </div>

    <!-- ============================================================================== -->
    <!-- Info -->
    <div class="info">

        <!-- TITLE -->
        <div class="title">  
            <h1><?php the_title(); ?></h1>
        </div>

        <!-- CATEGORIES -->
        <ul class="categories">
            <?php
            $terms = get_the_terms( $product->ID, 'product_cat' );
            foreach ($terms as $term) {
                $product_cat_id = $term->name; ?>
                    <li class="category"><?php echo $product_cat_id; ?></li>
                <?php
                break;
            }
            ?>
        </ul>

        <!-- EXCERPT -->
        <div class="excerpt">  
            <span>
                <?php echo $product->get_short_description(); ?>
            </span>
        </div>

        <!-- PRICE -->
        <div class="price">
            <span class="price">
                <?php echo $product->get_price_html(); ?>
            </span>
        </div>

        <!-- Add To Cart -->
        <div class="atc">
            <?php woocommerce_simple_add_to_cart(); ?>
        </div>

        <!-- Notices -->
        <?php wc_print_notices(); ?>

    </div>

</div>


<!-- ============================================================================== -->
<!-- More info -->
<div class="more-info">

    <h3>About <?php the_title(); ?></h3>

    <div class="details-body">
        <p>
            <?php echo $product->get_description(); ?>
        </p>
    </div>

</div>


<script>
    (function($) {

        $(document).ready(function() {
            const swiper = new Swiper('.artist-swiper', {
                direction: 'horizontal',
                loop: true,
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                scrollbar: {
                    el: '.swiper-scrollbar',
                },
            });
        })

    })(jQuery)
</script>