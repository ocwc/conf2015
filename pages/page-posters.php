<?php
/*
	Template name: Schedule - Posters
*/
?>
<?php get_header(); ?>

<?php get_template_part('partials/_event_days'); ?>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h1>OE Global 2017 Posters</h1>
			<?php /* <h2>Poster highlight on Wednesday 22 April 2015, Displayed in Foyer until 23 April</h2> */ ?>
		</div>

		<div class="col-sm-12 row">
			<table class="table table-striped">
			    <thead>
			        <tr>
			            <th class="room-col text-center" colspan="3">Hall 1</th>
			        </tr>
			    </thead>

			    <tbody>
			    	<tr class="td-3">
						<td>
							<?php cf_presentations(array(518, 519, 520)); ?>
							<?php cf_presentations(array(521, 522, 523)); ?>
							<?php cf_presentations(array(524, 525, 526)); ?>
						</td>
			    	</tr>
			    </tbody>
			</table>
		</div>
	</div>
</div>
<?php get_footer(); ?>