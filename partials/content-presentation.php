<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-10 col-md-offset-1'); ?>>
	<?php $tracks = get_field_object('presentation_track')['choices']; ?>
	<?php if ( get_field('presentation_track') && $tracks) :?>
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
	<?php endif; ?>

	<h1><?php the_title(); ?></h1>
	<h3><?php the_field('presentation_author'); ?> <br /></h3>
	<h4><em><?php the_field('presentation_institution'); ?></em></h4>

	<?php if ( get_field('presentation_type') || get_field('presentation_length') ) : ?>
		<h4>
			<?php if ( get_field('presentation_type') ) : ?>
				<span class="label label-success"><?php echo get_field('presentation_type')['label']; ?></span>
			<?php endif; ?>

			<?php if ( get_field('presentation_length') ) : ?>
				<span class="label label-info"><?php echo get_field('presentation_length')['label']; ?></span>
			<?php endif; ?>
		</h4>
	<?php endif; ?>

	<div class="entry-content">
		<?php the_content(); ?>
	</div>

	<?php if ( get_field( 'presentation_paper') ) : ?>
		<a class="btn btn-primary" href="<?php echo get_field('presentation_paper')['url']; ?>">Download PDF of Paper</a>
	<?php elseif ( get_field( 'presentation_pdf' ) ) : ?>
		<a class="btn btn-primary" href="<?php echo get_field('presentation_pdf')['url']; ?>">Download PDF of Extended Abstract</a>
	<?php endif; ?>

	<?php if ( get_field('presentation_slideshare') ) : ?>
		<div>
			<h2>Presentation</h2>
			<?php $html = wp_oembed_get(get_field('presentation_slideshare')); ?>
			<?php echo $html; ?>
		</div>
	<?php endif; ?>


</article>
