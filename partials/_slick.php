<?php $custom_query = new WP_Query(array(
      									'post_type' => 'slideshow',
      									'ignore_sticky_posts' => 1,
      									'orderby' => 'rand',
      									'posts_per_page' => -1
		                  ));
?>
<div class="container-fluid container-slider">
  <div class="slider">
    <?php while ( $custom_query->have_posts() ) : $custom_query->the_post(); ?>
      <div class="slider-item clearfix">
        <?php $image_src = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'slideshow-image' )[0]; ?>

          <div class="slider-meta">
            <a href="#"><h1>Some title text</h1></a>
          </div>
          <!-- <img class="img-responsive" src="<?php echo $image_src; ?>" /> -->

          <div class="slider-image" style="background-image: url('<?php echo $image_src; ?>');"></div>
      </div>
    <?php endwhile; ?>
  	<?php wp_reset_postdata(); ?>
  </div>
</div>
