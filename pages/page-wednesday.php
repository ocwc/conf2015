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
								<th class="room-col">Auditorium 2</th>
								<th class="room-col">Room&nbsp;1.41</th>
								<th class="room-col">Room&nbsp;1.61</th>
								<th class="room-col">Room&nbsp;1.63</th>
								<th class="room-col">Room&nbsp;2.61</th>
								<th class="room-col">Room&nbsp;2.64</th>
						</tr>
				</thead>
				<tbody>
					<tr>
						<td>08.00&nbsp-&nbsp9.00</td>
						<td class="text-center" colspan="6">Registrations</td>
					</tr>
					<tr>
						<td>9.00&nbsp-&nbsp10.00</td>
						<td class="text-center" colspan="6">
							<p class="text-left">[Venue: Auditorium 2]</p>
							<p class="text-left announcements-description">
								Welcome &amp; Keynote<br />
   								Opening Remarks: Open Education Consortium<br />
                                Introductions: Laura Czerniewicz<br />
                                Welcome: Dr Max Price - Vice Chancellor of the University of Cape Town<br />
                                Keynote: Narend Baijnath: The End of the OER Crusade: Towards a New Evangelism<br />
                                Program Chair: Glenda Cox<br />
                            </p>
						</td>
					</tr>
					<tr>
						<td>10.00&nbsp-&nbsp10.30</td>
						<td class="text-center" colspan="6">Tea/Coffee Break</td>
					</tr>
					<tr class="td-5">
						<td>10.30&nbsp-&nbsp12.30</td>
						<td>
							<?php //cf_presentations(array(, 385)); ?>
						</td>
						<td>
							<span class="panel-title">Research in OER</span>
							<?php cf_presentations(array(450, 420, 400, 373)); ?>
						</td>
						<td>
							<span class="panel-title">Public/Organizational Change</span>
							<?php cf_presentations(array(416, 381, 371, 456, 604, 562)); ?>
						</td>
						<td>
							<span class="panel-title">Opening Higher Education</span>
							<?php cf_presentations(array(393, 411, 386, 423, 369)); ?>
						</td>
						<td>
							<span class="panel-title">MOOCs</span>
							<?php cf_presentations(array(360, 459, 356, 401, 440)); ?>
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
							<?php cf_presentations(array(419, 439, 405, 404)); ?>
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
							<?php cf_presentations(array(446, 349)); ?>
						</td>
						<td>
							<span class="panel-title">Open Educational Practice</span>
							<?php cf_presentations(array(391, 343)); ?>
						</td>
					</tr>
					<tr>
						<td>15.00&nbsp-&nbsp15.30</td>
						<td class="text-center" colspan="6">Tea/Coffee Break</td>
					</tr>
					<tr class="td-5">
						<td>15.30&nbsp-&nbsp17.00</td>
						<td>
							<span class="panel-title">Open Policy</span>
							<?php cf_presentations(array(437, 358)); ?>
						</td>
						<td>
							<span class="panel-title">Research in OER</span>
							<?php cf_presentations(array(449, 457, 422)); ?>
						</td>
						<td>
							<span class="panel-title">Teacher Education</span>
							<?php cf_presentations(array(442, 436, 374)); ?>
						</td>
						<td>
							<span class="panel-title">OER Access and Adoption</span>
							<?php cf_presentations(array(398, 403, 412)); ?>
						</td>
						<td>
							<?php cf_presentations(array(427, 569)); ?>
						</td>
						<td>
							<?php cf_presentations(array(352)); ?>
						</td>
					</tr>
					<tr>
						<td>17.00</td>
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
