<?php get_header(); ?>


<?php get_template_part('partials/_slick'); ?>

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

	<?php //get_template_part('partials/_storyfeed'); ?>
</div>

<?php get_footer(); ?>
