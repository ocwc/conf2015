<div class="container">
	<div class="row">
		<div class="col-sm-12 text-right">
			<a class="btn btn-small"
				href="http://conference.oeconsortium.org/2015/wp-content/uploads/2015/04/OE-Global-2015-Program-Schedule.pdf">
					<i class="icon-print"></i>Print Schedule (PDF)
				</a>
		</div>
		<div class="col-sm-12">
			<ul class="nav nav-pills">
				<li role="presentation"
					<?php if ( $post->post_name === 'tuesday' ) : ?>class="active"<?php endif; ?>
				>
					<a href="<?php echo get_bloginfo('url') . '/schedule/tuesday/'; ?>">Pre-day, Tuesday, 21 April</a>
				</li>
				<li role="presentation"
					<?php if ( $post->post_name === 'schedule' ) : ?>class="active"<?php endif; ?>
				>
					<a href="<?php echo get_bloginfo('url') . '/schedule/'; ?>">Day 1, Wednesday, 22 April</a>
				</li>
				<li role="presentation"
					<?php if ( $post->post_name === 'thursday' ) : ?>class="active"<?php endif; ?>
				>
					<a href="<?php echo get_bloginfo('url') . '/schedule/thursday/'; ?>">Day 2, Thursday, 23 April</a>
				</li>
				<li role="presentation"
					<?php if ( $post->post_name === 'friday' ) : ?>class="active"<?php endif; ?>
				>
					<a href="<?php echo get_bloginfo('url') . '/schedule/friday/'; ?>">Day 3, Friday, 24 April</a>
				</li>
				<li role="presentation"
					<?php if ( $post->post_name === 'posters' ) : ?>class="active"<?php endif; ?>
				>
					<a href="<?php echo get_bloginfo('url') . '/schedule/posters/'; ?>">Posters</a>
				</li>
			</ul>
		</div>
	</div>
</div>