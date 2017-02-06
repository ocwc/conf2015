<div class="container">
	<div class="row">
		<!--
		<div class="col-sm-12 text-right">
			<a class="btn btn-small"
				href="http://conference.oeconsortium.org/2016/wp-content/uploads/2016/02/global2016.pdf">
					<i class="icon-print"></i>Print Schedule (PDF)
				</a>
		</div>
		-->

		<div class="col-sm-12">
			<ul class="nav nav-pills">
				<li role="presentation"
					<?php if ( $post->post_name === 'schedule' ) : ?>class="active"<?php endif; ?>
				>
					<a href="<?php echo get_bloginfo('url') . '/schedule/'; ?>">Wednesday, 8 March</a>
				</li>
				<li role="presentation"
					<?php if ( $post->post_name === 'thursday' ) : ?>class="active"<?php endif; ?>
				>
					<a href="<?php echo get_bloginfo('url') . '/schedule/thursday/'; ?>">Thursday, 9 March</a>
				</li>
				<li role="presentation"
					<?php if ( $post->post_name === 'friday' ) : ?>class="active"<?php endif; ?>
				>
					<a href="<?php echo get_bloginfo('url') . '/schedule/friday/'; ?>">Friday, 10 March</a>
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
