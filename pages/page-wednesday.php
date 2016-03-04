<?php
/*
	Template name: Schedule - Wednesday
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
			<h1>Wednesday,	13 April</h1>
		</div>

		<div class="col-sm-12 row">
			<table class="table table-striped">
				<caption>Wednesday,	13 April</caption>
				<thead>
						<tr>
								<th class="time-col"></th>
								<th class="room-col">Room&nbsp;A</th>
								<th class="room-col">Room&nbsp;B</th>
								<th class="room-col">Room&nbsp;C</th>
								<th class="room-col">Room&nbsp;D</th>
						</tr>
				</thead>
				<tbody>
					<tr>
						<td>9.00&nbsp-&nbsp10.30</td>
						<td class="">
							<?php cf_presentations(array(696)); ?>
						</td>
					</tr>
					<tr class="td-4">
						<td>11.00&nbsp-&nbsp12.30</td>
						<td>
							<?php cf_presentations(array(554, 556, 800)); ?>
						</td>
						<td>
							<?php cf_presentations(array(537, 602, 569)); ?>
						</td>
						<td>
							<?php cf_presentations(array(564, 649, 595)); ?>
						</td>
						<td>
							<?php cf_presentations(array(563, 682, 565, 542, 832)); ?>
						</td>
					</tr>

					<?php /* PDF */ ?>
					<?php if ( isset($is_pdf) ) : ?>
					</tbody>
				</table>
				<table class="table table-striped">
					<caption>Wednesday,	13 April (continued)</caption>
					<thead>
							<tr>
									<th class="time-col"></th>
									<th class="room-col">Room&nbsp;A</th>
									<th class="room-col">Room&nbsp;B</th>
									<th class="room-col">Room&nbsp;C</th>
									<th class="room-col">Room&nbsp;D</th>
							</tr>
					</thead>
					<tbody
					<?php endif; ?>

					<tr class="td-4">
						<td>13.30&nbsp-&nbsp15.00</td>
						<td>
							<?php cf_presentations(array(531, 566, 535)); ?>
						</td>
						<td>
							<?php cf_presentations(array(591, 598, 544)); ?>
						</td>
						<td>
							<?php cf_presentations(array(604, 601, 532)); ?>
						</td>
						<td>
							<?php cf_presentations(array(543, 586, 605)); ?>
						</td>
					</tr>

					<?php /* PDF */ ?>
					<?php if ( isset($is_pdf) ) : ?>
					</tbody>
				</table>
				<table class="table table-striped">
					<caption>Wednesday,	13 April (continued)</caption>
					<thead>
							<tr>
									<th class="time-col"></th>
									<th class="room-col">Room&nbsp;A</th>
									<th class="room-col">Room&nbsp;B</th>
									<th class="room-col">Room&nbsp;C</th>
									<th class="room-col">Room&nbsp;D</th>
							</tr>
					</thead>
					<tbody
					<?php endif; ?>

					<tr class="td-4">
						<td>15.30&nbsp-&nbsp17.30</td>
						<td>
							<?php cf_presentations(array(592, 585, 651, 561)); ?>
						</td>
						<td>
							<?php cf_presentations(array(589, 590, 575, 568)); ?>
						</td>
						<td>
							<?php cf_presentations(array(690, 597)); ?>
						</td>
						<td>
							<?php cf_presentations(array(541, 540, 555, 559)); ?>
						</td>
					</tr>
					<tr>
						<td>19.00</td>
						<td>
						<?php cf_presentations(array(823)); ?>
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
