<?php $custom_query = new WP_Query(array(
      									'post_type' => 'slideshow',
      									'ignore_sticky_posts' => 1,
      									'orderby' => 'ASC',
      									'posts_per_page' => -1
		                  ));
?>
<div class="container-fluid container-slider">
  <div class="slider">
    <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
      <div class="slider-item clearfix">
        <?php $image_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slideshow-image' )[0]; ?>
        <?php if ( have_rows('slide_type') ) : ?>
          <?php while ( have_rows('slide_type') ) : the_row(); ?>
            <?php get_template_part('partials/_slide', get_row_layout() ); ?>
          <?php endwhile; ?>

          <?php get_template_part('partials/_slide', 'attribution' ); ?>

          <div class="slider-image" style="background-image: url('<?php echo $image_src; ?>');"></div>
        <?php endif; ?>
      </div>
    <?php endwhile; ?>
  	<?php wp_reset_postdata(); ?>
  </div>
</div>
