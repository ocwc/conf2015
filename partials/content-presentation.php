<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-10 col-md-offset-1'); ?>>
	<?php $tracks = get_field_object('presentation_track')['choices']; ?>
	<h4>
		<a href="<?php echo get_bloginfo('url'); ?>/presentations/">
			<span class="label label-primary">
				<?php if ( array_key_exists(get_field('presentation_track'), $tracks) ) : ?>
					<?php echo $tracks[get_field('presentation_track')]; ?>
				<?php else : ?>
					<?php the_field('presentation_track'); ?>
				<?php endif; ?>
			</span>
		</a>
	</h4>

	<h1><?php the_title(); ?></h1>
	<h3><?php the_field('presentation_author'); ?> <br /></h3>
	<h4><em><?php the_field('presentation_institution'); ?></em></h4>

	<div class="entry-content">
		<?php the_content(); ?>
	</div>

	<?php if ( get_field( 'presentation_paper') ) : ?>
		<a class="btn btn-primary" href="<?php echo get_field('presentation_paper')['url']; ?>">Download PDF of Paper</a>
	<?php elseif ( get_field( 'presentation_pdf' ) ) : ?>
		<a class="btn btn-primary" href="<?php echo get_field('presentation_pdf')['url']; ?>">Download PDF of Extended Abstract</a>
	<?php endif; ?>

</article>
