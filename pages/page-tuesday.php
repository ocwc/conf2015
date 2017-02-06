<?php
/*
	Template name: Schedule - Tuesday
*/
?>
<?php if ( isset($is_pdf) ) : ?>
	<?php get_header(); ?>
<?php else : ?>
	<?php get_header(); ?>
	<?php get_template_part('partials/_event_days'); ?>
<?php endif; ?>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h1>Tuesday, 12 April</h1>
		</div>

		<div class="col-sm-12">
				<table class="table table-striped">
					<caption>Tuesday, 12 April</caption>
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
							<td>08.00&nbsp-&nbsp16:00</td>
							<td class="text-center" colspan="5">Registrations - Hall 1</td>
						</tr>
			    	<tr>
			    		<td>9.00&nbsp-&nbsp11.00</td>
			    		<td class="" colspan="5">
								<?php cf_presentations(array(692)); ?>
							</td>
			    	</tr>
						<tr>
							<td>11.00&nbsp-&nbsp11.30</td>
							<td class="text-center" colspan="5">Tea/Coffee Break</td>
						</tr>
						<tr class="td-5">
							<td>11.30&nbsp-&nbsp12.30</td>
							<td>
								<?php cf_presentations(array(550, 560)); ?>
							</td>
							<td>
								<?php cf_presentations(array(746, 835)); ?>
							</td>
							<td>
								<?php cf_presentations(array(529, 588)); ?>
							</td>
							<td>
								<?php cf_presentations(array(530)); ?>
							</td>
							<td>
								<?php cf_presentations(array(533, 870, 547)); ?>
							</td>
				    </tr>

						<?php /* PDF */ ?>
						<?php if ( isset($is_pdf) ) : ?>
						</tbody>
					</table>
					<table class="table table-striped">
						<caption>Tuesday, 12 April (continued)</caption>
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
						<tbody
						<?php endif; ?>
						<tr>
							<td>12.30&nbsp-&nbsp13.30</td>
							<td class="text-center" colspan="5">Lunch</td>
						</tr>
						<tr class="td-5">
							<td>13.30&nbsp-&nbsp15.00</td>
							<td>
								<?php cf_presentations(array(807, 573, 553)); ?>
							</td>
							<td>
								<?php cf_presentations(array(593, 539, 655)); ?>
							</td>
							<td>
								<?php cf_presentations(array(572, 599, 574)); ?>
							</td>
							<td>
								<?php cf_presentations(array(576, 587, 682, 851)); ?>
							</td>
							<td>
								<?php cf_presentations(array(671)); ?>
							</td>
				    </tr>

						<?php /* PDF */ ?>
						<?php if ( isset($is_pdf) ) : ?>
						</tbody>
					</table>
					<table class="table table-striped">
						<caption>Tuesday, 12 April (continued)</caption>
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
						<tbody
						<?php endif; ?>
						<tr>
							<td>15.00&nbsp-&nbsp15.30</td>
							<td class="text-center" colspan="5">Tea/Coffee Break</td>
						</tr>
						<tr class="td-5">
							<td>15.30&nbsp-&nbsp17.30</td>
							<td>
								<?php cf_presentations(array(585, 596, 815, 551, 899)); ?>
							</td>
							<td>
								<?php cf_presentations(array(763)); ?>
								<p>
									<a href="posters">Poster Highlights</a> will take place in Hall 1.
								</p>
								<p>
									Poster presenters will deliver short presentations in Hall 1 from 15:30 until 16:30.
								</p>
							</td>
							<td>
								<?php cf_presentations(array(558, 577, 603)); ?>
							</td>
							<td>
								<?php cf_presentations(array(571, 545, 548, 534)); ?>
							</td>
							<td>
								 <?php cf_presentations(array(567, 570, 581, 810, 653)); ?>
							</td>
				    </tr>
						<tr>
			    		<td>18.00</td>
			    		<td colspan="5" class="text-center">
								<?php cf_presentations(array(827)); ?>
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
