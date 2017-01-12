<?php
/*
	Template name: Schedule - Thursday
*/
?>
<?php if ( isset($is_pdf) ) : ?>
<?php else : ?>
	<?php get_header(); ?>
	<?php get_template_part('partials/_event_days'); ?>
<?php endif; ?>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h1>Thursday, 9 March</h1>
		</div>

		<div class="col-sm-12 row">
			<table class="table table-striped">
				<caption>Thursday, 9 March</caption>
				<thead>
						<tr>
								<th class="time-col"></th>
								<th class="room-col">Room&nbsp;A1</th>
								<th class="room-col">Room&nbsp;A2</th>
								<th class="room-col">Room&nbsp;B</th>
								<th class="room-col">Room&nbsp;C</th>
								<th class="room-col">Room&nbsp;D</th>
						</tr>
				</thead>
				<tbody>
					<tr>
						<td>08.00&nbsp-&nbsp13.30</td>
						<td class="text-center" colspan="5">Registrations - Hall 1</td>
					</tr>
					<tr>
						<td>9.00&nbsp-&nbsp10.30</td>
						<td class="">
							<?php cf_presentations(array(694)); ?>
						</td>
					</tr>
					<tr>
						<td>10.30&nbsp-&nbsp11.00</td>
						<td class="text-center" colspan="5">Tea/Coffee Break</td>
					</tr>
					<tr class="td-5">
						<td>11.00&nbsp-&nbsp12.45</td>
						<td>
							<?php cf_presentations(array(580)); ?>
						</td>
						<td>
							<?php cf_presentations(array(528)); ?>
						</td>
						<td>
							<?php cf_presentations(array(723)); ?>
						</td>
						<td>
							<?php cf_presentations(array(562)); ?>
						</td>
						<td>
							<?php cf_presentations(array(859)); ?>
						</td>
					</tr>
					<tr>
						<td>12:30&nbsp-&nbsp13:30</td>
						<td class="text-center" colspan="5">Lunch</td>
					</tr>
					<tr class="td-5">
						<td>13.45-17.00<br/>
								coffee break at 15.30</td>
						<td>
							<?php cf_presentations(array(686)); ?>
						</td>
						<td>
							<?php cf_presentations(array(873)); ?>
						</td>
						<td>
							<?php cf_presentations(array(723)); ?>
						</td>
						<td>
							<?php cf_presentations(array(578)); ?>
						</td>
						<td>
							<?php cf_presentations(array(600)); ?>
						</td>
					</tr>
					<tr>
						<td>17.00</td>
						<td class="text-center" colspan="5">
							CLOSING RECEPTION
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

<?php if ( isset($is_pdf) ) : ?>
<?php else: ?>
	<?php get_footer(); ?>
<?php endif; ?>
