<?php get_header(); ?>

<?php $custom_query = new WP_Query(array(
									'post_type' => 'slideshow',
									'ignore_sticky_posts' => 1,
									'orderby' => 'rand'
									// 'posts_per_page' => 1
									));
?>
	<ul class="rslides">
		<?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
			<?php $image_list = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slideshow-image' );

				if (count($image_list) > 0) {
					$image_src = $image_list[0];
				}
			?>

			<li class="slide">
				<?php if ( get_field('slideshow_url') ) : ?>
					<a href="<?php the_field('slideshow_url'); ?>">
						<img src="<?php echo $image_src; ?>" />
					</a>
				<?php else: ?>
					<img src="<?php echo $image_src; ?>" />
				<?php endif; ?>

				<?php if ( get_field('slideshow_show_description') ) : ?>
				<a class="card"
					href="get_field('slideshow_url')"; >
					<span class="card-title"><?php the_title(); ?></span>
					<?php if ( get_field('slideshow_description') ) : ?>
						<span class="card-description"><?php the_field('slideshow_description'); ?></span>
					<?php endif; ?>
				<a>
				<div class="attribution">
					<?php if ( get_field('slideshow_photo_license_text') ) :?>
						<a href="<?php the_field('slideshow_photo_source_url'); ?>" ><?php the_field('slideshow_photo_license_text'); ?></a>
					<?php endif; ?>
				</div>
				<?php endif; ?>
			</li>
		<?php endwhile; ?>
	</ul>

<?php get_footer(); ?>