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
		<h2>Call for Proposals</h2>
		<p>The Open Education Consortium and Athabasca University, organizers of the Open Education Global Conference 2015, invite proposals for conference sessions and papers to be included in the conference proceedings.</p>
		<p><strong>Submissions Due:</strong> December 10, 2014</p>
		<a href="/2015/call-for-papers/" class="btn btn-primary">Learn more</a>
	</div>
	<div class="col-sm-6">
		<h2>Conference at a Glance</h2>

		<p><strong>When:</strong> 22-24 April, 2015</p>
		<p><strong>Where: </strong> Banff, Alberta, Canada </p>
		<p><strong>The theme </strong>for Open Education Global 2015 is Entrepreneurship and Innovation, emphasizing the exciting directions and developments in open education around the world.</p>

		<a href="/2015/about-conference/" class="btn btn-primary">About The Conference</a>
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