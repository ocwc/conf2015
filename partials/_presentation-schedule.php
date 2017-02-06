<?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
	<li class="schedule-item">
		<?php if ( get_field('presentation_type') ) : ?>
			<span class="badge"><?php echo get_field('presentation_type')['label']; ?></span><br />
		<?php endif; ?>

		<a href="<?php the_permalink(); ?>">
			<?php the_title(); ?>
		</a>
		<br /><?php the_field('presentation_author'); ?>
	</li>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
