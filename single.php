<?php
/* Single Page */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly
}

get_header( 'shop' ); ?>


<main class="single page--single-product">

	<div class="breadcrumbs">
		<ul>
			<li><a href="/shop" title="Shop">Shop</a></li>
			<li>/</li>
			<li>
				<span class="current">
					<?php the_title(); ?>
				</span>
			</li>
		</ul>
	</div>

	<!-- Product Item -->
	<?php 
	if ( is_product() ) { ?>

		<div class="product-wrapper">
			<?php while ( have_posts() ) : ?>
				<?php the_post(); ?>

				<?php get_template_part('template-parts/product-item'); ?>
				
			<?php endwhile; ?>
		</div>

	<?php
	}
	?>

</main>


<?php
get_footer( 'shop' );