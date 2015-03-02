<?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
	<li class="schedule-item">
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		<br /><?php the_field('presentation_author'); ?>
	</li>
<?php endwhile; ?>
<?php wp_reset_postdata(); ?>
