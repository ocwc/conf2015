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
		<h2>Conference at a Glance</h2>

		<p><strong>When:</strong> 22-24 April, 2015</p>
		<p><strong>Where: </strong> Banff, Alberta, Canada </p>
		<p><strong>The theme </strong>for Open Education Global 2015 is Entrepreneurship and Innovation, emphasizing the exciting directions and developments in open education around the world.</p>

		<a class="btn btn-primary" href="/2015/about-conference/">About The Conference</a>

		<h2>Keynote Speakers</h2>
		<p>An exciting lineup of keynote speakers at OE Global 2015 will present visionary ideas and inspirational messages to challenge us to keep innovating.</p>
		<a href="/2015/keynotes/" class="btn btn-primary">Learn More about our Keynote Speakers</a>

		<h2 class="h2-home-margin">ROER4D/GO-GN research track</h2>
		<p>We are pleased to announce combined ROER4D/GO-GN research track during Open Education Global Conference 2015</p>
		<a class="btn btn-primary" href="/2015/roer4d-go-gn/">Learn more about ROER4D & GO-GN Track</a>
	</div>
	<!--
	<div class="col-sm-6">
	</div>
	-->
	<div class="col-sm-6">
		<h2>Conference updates and announcements</h2>

		<p>
			1. <strong>Registration opens on Tuesday</strong>, from  8AM-9AM and from 4PM-7PM. 
			On Wednesday, registration table opens at 7:30AM. Registration table will be in Alpine Meadows on Thursday and Friday from 8AM. For onsite registration, credit card payment is available, but cash is not accepted.
		</p>

		<p>
			2. <strong>Newcomers' breakfast is on the 22nd at 8:00AM</strong>. The venue is in Glacier Chinook in the Banff Park Lodge. You will see a sign once you walk in. All who are new to the conference are welcome. If you are a "regular" at the Global Conference and would like to share your insight, you are also welcome to join.
		</p>

		<p>
			3. <strong>If you are presenting</strong>, please tweet/FB your talk using hashtag <strong>#oeglobal</strong>. We will retweet and/or respond to it.
		</p>

		<p>
			4. <strong>Please do pay special attention to the Friday program</strong>. Whereas the first two days offer presentations to inspire and inform you on what's going on in open education, the last day of the conference is all about "participation". Panel discussions will focus on how to encourage more participation from the community. The Action Labs are actual hands-on building of something for the community. It would be great to see how your participation in these sessions lead to innovation in education.
		</p>
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
	<div class="col-sm-12">
		<h2>Supported by</h2>
		<div class="row">
			<div class="col-sm-2">
				<p><a href="http://www.unesco.ca/"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/unesco.png"></a></p>
			</div>
			<div class="col-sm-4">
				<p style="margin-top: 10px;"><a href="http://en.unesco.org/70years"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/unesco70.png"></a></p>
			</div>
			<div class="col-sm-3">
				<p style="margin-top: 10px;">
					<a href="http://ducere.co/"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/ducere-logo.png"></a>
				</p>
			</div>
			<div class="col-sm-3">
				<p style="margin-top: 65px;">
					<a href="http://www.qwogo.com/"><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/img/qwogo-logo.png"></a>
				</p>
		</div>
		</div>
	</div>
</div>

<div class="container">
	<div class="col-sm-6">
		<h2>Media sponsor</h2>

		<div class="row">
			<div class="col-sm-6">
				<p><a href="http://www.openeducationeuropa.eu/"><img src="<?php echo get_template_directory_uri(); ?>/img/oeuropa.jpg"></a></p>
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