<?php
get_header( 'shop' );

?>

<main class="page">

    <!-- HEADER -->
    <div class="header">
        <div class="breadcrumbs">
            <ul>
                <li><a href="/" title="Home">Home</a></li>
                <li>/</li>
                <li><?php the_title(); ?></li>
            </ul>
        </div>
        <h1><?php the_title(); ?></h1>
    </div>

    <!-- CONTENT -->
    <div class="content">
        <?php 
        if ( is_shop() ) : ?>

            <!-- MERCH LOOP -->
            <?php get_template_part('template-parts/merch-loop'); ?>

        <?php else : ?>

            <?php the_content(); ?>

        <?php 
        endif;
        ?>
    </div>


</main>

<?php
get_footer( 'shop');