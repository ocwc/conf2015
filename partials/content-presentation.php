<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-10 col-md-offset-1'); ?>>

	<h4><a href="<?php echo get_bloginfo('url'); ?>/presentations/"><span class="label label-primary">Strategy</span></a></h4>

	<h1><?php the_title(); ?></h1>
	<h3><?php the_field('presentation_author'); ?> <br /></h3>
	<h4><em><?php the_field('presentation_institution'); ?></em></h4>

	<div class="entry-content">
		<?php the_content(); ?>
	</div>

</article>
