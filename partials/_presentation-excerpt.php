<tr>
	<td><?php the_ID(); ?></td>
	<td class="col-sm-6">
		<?php the_field('presentation_author'); ?> <br />
		<em><?php the_field('presentation_institution'); ?></em>
	</td>
	<td class="col-sm-6">
		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
		<br />
		<?php if ( get_field( 'presentation_pdf' ) ) : ?>
			<i class="icon-doc-text"></i>
		<?php endif; ?>

		<?php if ( get_field( 'presentation_slideshare' ) ) : ?>
			<i class="icon-slideshare"></i>
		<?php endif; ?>
	</td>
</tr>
