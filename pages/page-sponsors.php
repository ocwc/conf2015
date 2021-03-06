<?php
/*
	Template name: Sponsors
*/
?>
<?php get_header(); ?>

<div class="divider-top"></div>

<?php if ( have_posts() ) : ?>
	<div class="container">
		<?php while ( have_posts() ) : the_post(); ?>
			<article id="post-<?php the_ID(); ?>">
				<header class="entry-header">
					<?php //the_title( sprintf( '<h1 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h1>' ); ?>
				</header><!-- .entry-header -->

				<div class="entry-content">
					<?php the_content(); ?>

					
				</div>
				<?php get_template_part('partials/home', 'sponsors'); ?>
			</article>
		<?php endwhile; ?>
	</div>
<?php endif; ?>

<?php get_footer(); ?>

