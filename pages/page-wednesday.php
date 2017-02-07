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
			<h1>Wednesday,	8 March</h1>
		</div>

		<div class="col-sm-12 row">
			<table class="table table-striped">
				<caption>Wednesday,	8 March</caption>
				<thead>
						<tr>
								<th class="time-col"></th>
								<th class="room-col">Auditorium (no Labs)</th>
								<th class="room-col">Room&nbsp;2</th>
								<th class="room-col">Room&nbsp;3</th>
								<th class="room-col">Room&nbsp;4</th>
								<th class="room-col">Room&nbsp;5</th>
								<th class="room-col">Room&nbsp;6</th>
						</tr>
				</thead>
				<tbody>
					<tr>
						<td>08.00&nbsp-&nbsp9.00</td>
						<td class="text-center" colspan="6">Registrations</td>
					</tr>
					<tr>
						<td>9.00&nbsp-&nbsp10.00</td>
						<td class="text-center" colspan="6">Welcome &amp; Keynote</td>
					</tr>
					<tr>
						<td>10.00&nbsp-&nbsp10.30</td>
						<td class="text-center" colspan="6">Tea/Coffee Break</td>
					</tr>
					<tr class="td-5">
						<td>11.00&nbsp-&nbsp12.30</td>
						<td>
							<?php cf_presentations(array(456, 393, 385)); ?>
						</td>
						<td>
							<span class="panel-title">Research in OER</span>
							<?php cf_presentations(array(450, 420, 400, 373)); ?>
						</td>
						<td>
							<span class="panel-title">Public/Organizational Change</span>
							<?php cf_presentations(array(416, 381, 371, 417)); ?>
						</td>
						<td>
							<span class="panel-title">Opening Higher Education</span>
							<?php cf_presentations(array(411, 386, 423, 369)); ?>
						</td>
						<td>
							<span class="panel-title">MOOCs</span>
							<?php cf_presentations(array(360, 459,356)); ?>
						</td>
						<td>
							<span class="panel-title">Open Educational Practice</span>
							<?php cf_presentations(array(388, 453, 366, 429)); ?>
						</td>
					</tr>
					<tr>
						<td>12.30&nbsp-&nbsp13.30</td>
						<td class="text-center" colspan="6">Lunch</td>
					</tr>
					<tr class="td-5">
						<td>13.30&nbsp-&nbsp15.00</td>
						<td>
							<span class="panel-title">Open Policy</span>
							<?php cf_presentations(array(364, 347)); ?>
						</td>
						<td>
							<span class="panel-title">Research in OER</span>
							<?php cf_presentations(array(419, 439, 405)); ?>
						</td>
						<td>
							<span class="panel-title">Schools/ K12</span>
							<?php cf_presentations(array(370, 413, 441)); ?>
						</td>
						<td>
							<span class="panel-title">Faculty and Students</span>
							<?php cf_presentations(array(390, 397, 407)); ?>
						</td>
						<td>
							<span class="panel-title">MOOCs</span>
							<?php cf_presentations(array(401, 440, 446)); ?>
						</td>
						<td>
							<span class="panel-title">Open Educational Practice</span>
							<?php cf_presentations(array(343)); ?>
						</td>
					</tr>
					<tr>
						<td>15.00&nbsp-&nbsp15.30</td>
						<td class="text-center" colspan="6">Tea/Coffee Break</td>
					</tr>
					<tr class="td-5">
						<td>15.30&nbsp-&nbsp17.30</td>
						<td>
							<span class="panel-title">Open Educational Practice</span>
							<?php cf_presentations(array(358, 437, 444)); ?>
						</td>
						<td>
							<span class="panel-title">Research in OER</span>
							<?php cf_presentations(array(449, 404, 457, 422)); ?>
						</td>
						<td>
							<span class="panel-title">Teacher Education</span>
							<?php cf_presentations(array(442, 436, 374, 391)); ?>
						</td>
						<td>
							<span class="panel-title">OER Access and Adoption</span>
							<?php cf_presentations(array(383, 398, 403, 412)); ?>
						</td>
						<td>
							<?php cf_presentations(array(427, 368, 349)); ?>
						</td>
						<td>
							<?php cf_presentations(array(352, 458)); ?>
						</td>
					</tr>
					<tr>
						<td>19.00</td>
						<td class="text-center" colspan="6">Free time</td>
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
