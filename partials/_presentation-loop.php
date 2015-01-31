<?php $custom_query = new WP_Query(array(
							'post_type' => 'presentation',
							'orderby' => 'title',
							'order' => 'ASC',
							'posts_per_page' => -1,

							'meta_query' => array(
								array(
									'key' => 'presentation_track',
									'value' => $track
								),
							)
						));
?>

<table class="table table-striped">
<?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
	<?php get_template_part('partials/_presentation', 'excerpt'); ?>
<?php endwhile; ?>
</table>