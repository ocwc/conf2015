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
					href="<?php the_field('slideshow_url') ?>" >
					<span class="card-title"><?php the_title(); ?></span>
					<?php if ( get_field('slideshow_description') ) : ?>
						<span class="card-description"><?php the_field('slideshow_description'); ?></span>
					<?php endif; ?>
				</a>
				<div class="attribution">
					<?php if ( get_field('slideshow_photo_license_text') ) :?>
						<a href="<?php the_field('slideshow_photo_source_url'); ?>" ><?php the_field('slideshow_photo_license_text'); ?></a>
					<?php endif; ?>
				</div>
				<?php endif; ?>
			</li>
		<?php endwhile; ?>
		<?php wp_reset_postdata(); ?>
	</ul>

<div class="container">
	<div class="col-sm-6">
		<h2>Keynote Speakers</h2>
		<p>An exciting lineup of keynote speakers at OE Global 2015 will present visionary ideas and inspirational messages to challenge us to keep innovating.</p>
		<a href="/2015/keynotes/" class="btn btn-primary">Learn More about our Keynote Speakers</a>

		<h2 class="h2-home-margin">ROER4D/GO-GN research track</h2>
		<p>We are pleased to announce combined ROER4D/GO-GN research track during Open Education Global Conference 2015</p>
		<a class="btn btn-primary" href="/2015/roer4d-go-gn/">Learn more about ROER4D & GO-GN Track</a>
	</div>
	<div class="col-sm-6">
		<h2>Conference at a Glance</h2>

		<p><strong>When:</strong> 22-24 April, 2015</p>
		<p><strong>Where: </strong> Banff, Alberta, Canada </p>
		<p><strong>The theme </strong>for Open Education Global 2015 is Entrepreneurship and Innovation, emphasizing the exciting directions and developments in open education around the world.</p>

		<a class="btn btn-primary" href="/2015/about-conference/">About The Conference</a>
	</div>
</div>

<div class="container home-vertical-spacing">
	<div class="col-sm-6">
		<h2>Organized by</h2>

		<div class="row">
			<div class="col-sm-6">
				<p><a href="http://www.athabascau.ca/"><img src="<?php echo get_template_directory_uri(); ?>/img/au-logo.png"></a></p>
			</div>
			<div class="col-sm-6">
				<p><a href="http://www.oeconsortium.org/"><img src="<?php echo get_template_directory_uri(); ?>/img/oec-logo.png"></a></p>
			</div>
		</div>
	</div>
	<div class="col-sm-6">
		<h2>In collaboration with</h2>
		<div class="row">
			<div class="col-sm-6">
				<p><a href="http://openpraxis.org/"><img src="<?php echo get_template_directory_uri(); ?>/img/openpraxis-logo.jpg"></a></p>
			</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="col-sm-6">
		<h2>Supported by</h2>
		<div class="row">
			<div class="col-sm-6">
				<p><a href="http://www.unesco.ca/"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/unesco.png"></a></p>
			</div>
		</div>
	</div>
</div>

<div class="container home-vertical-spacing">
	<div class="col-sm-10">
		<h2>Join the Conversation by using <span class="hashtag">#oeglobal</span> hashtag</h2>
	</div>
	<div class="col-sm-2">
		<ul class="share-buttons pull-right">
			<li><a href="https://twitter.com/intent/tweet?source=http%3A%2F%2Fconference.oeconsortium.org%2F2015%2F&text=OEC%20Global%202015%20%23oecglobal:%20http%3A%2F%2Fconference.oeconsortium.org%2F2015%2F&via=oeconsortium" target="_blank" title="Tweet"><img src="<?php echo get_template_directory_uri(); ?>/img/flat_web_icon_set/black/Twitter.png"></a></li>
			<li><a href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fconference.oeconsortium.org%2F2015%2F&t=OEC%20Global%202015%20%23oecglobal" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/flat_web_icon_set/black/Facebook.png"></a></li>
		</ul>
	</div>

	<div class="col-sm-12">
		<iframe id="storyfeed" src="http://oeglobal.storyfeed.me/?embed&maxposts=9" style="border: 0px; height: 300px; width: 100%;" scrolling="no" allowfullscreen></iframe>
	</div>
</div>

<?php get_footer(); ?>