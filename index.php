<section class="content--page" id="content-page">
	<?php get_template_part( 'templates/page', 'header' ); ?>

	<?php get_template_part( 'templates/no', 'results' ); ?>

	<?php
	while ( have_posts() ) :
		the_post();
		?>
		<?php get_template_part( 'templates/content-archive' ); ?>
	<?php endwhile; ?>

</section>
<?php if ( $wp_query->max_num_pages > 1 ) : ?>
	<?php get_template_part( 'templates/pagination' ); ?>
<?php endif; ?>
