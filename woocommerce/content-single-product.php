<div class="single-product">
    <div class="title">
        <!-- TITLE -->
        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
            <h1><?php the_title(); ?></h1>
        </a>
    </div>
    
    <?php
    global $product;
    $attachment_ids = $product->get_gallery_attachment_ids();

    foreach( $attachment_ids as $attachment_id ) { ?>
        <img src="<?php wp_get_attachment_image_src( $attachment_id, 'full' )[0]; ?>" alt="" />
<?php
    }
    ?>
</div>