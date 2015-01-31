<?php get_header(); ?>

<?php if ( have_posts() ) : ?>
	<div class="container">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'partials/content', get_post_type() ); ?>
		<?php endwhile; ?>
	</div>
<?php endif; ?>

<?php get_footer(); ?>