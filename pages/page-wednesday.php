<?php
/*
	Template name: Schedule - Wednesday
*/
?>
<?php get_header(); ?>

<?php get_template_part('partials/_event_days'); ?>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h1>Wednesday,	13 April</h1>
		</div>

		<div class="col-sm-12 row">
			<table class="table table-striped">
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
							<span class="panel-title">"Keynote Panel: Opening Up Europe featuring Anka Mulder and Jan Gondal"	</span>
						</td>
					</tr>
					<tr class="td-5">
						<td>11.00&nbsp-&nbsp12.30</td>
						<td>
							<?php cf_presentations(array(554, 556, 546)); ?>
						</td>
						<td>
							<?php cf_presentations(array(537, 602, 569)); ?>
						</td>
						<td>
							<?php cf_presentations(array(564, 649, 595)); ?>
						</td>
						<td>
							<?php cf_presentations(array(682, 565, 542)); ?>
						</td>
					</tr>
					<tr class="td-5">
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
					<tr class="td-5">
						<td>15.30&nbsp-&nbsp17.30</td>
						<td>
							<?php cf_presentations(array(592, 585, 651, 561)); ?>
						</td>
						<td>
							<?php cf_presentations(array(589, 590, 575, 568)); ?>
						</td>
						<td>
							[Action Lab] The Mind of the Universe - an entry into the World of Open? <br />
							<em>Fred Mulder</em>
							<br /><br />
							[Action Lab] Open Education Through Open Govt<br />
							<em>Jan Gondol and Nicloe Allen</em>
						</td>
						<td>
							<?php cf_presentations(array(541, 540, 555, 559)); ?>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

<?php get_footer(); ?>
