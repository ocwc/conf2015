<?php
/*
	Template name: Schedule - Friday
*/
?>
<?php get_header(); ?>

<?php get_template_part('partials/_event_days'); ?>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h1>Friday, 10 March</h1>
		</div>

		<div class="col-sm-12 row">
			<table class="table table-striped">
			    <thead>
					<tr>
							<th class="time-col"></th>
							<th class="room-col">Auditorium</th>
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
					<tr class="td-5">
						<td>09.00 - 10.30</td>
						<td>
							<span class="panel-title">Open for Participation</span>
						</td>
						<td>
							<?php cf_presentations(array(345)); ?>
						</td>
						<td>
							<span class="panel-title">OER across the globe</span>
							<?php cf_presentations(array(382, 445, 387)); ?>
						</td>
						<td>
							<span class="panel-title">OER Case Studies in Europe</span>
							<?php cf_presentations(array(355, 384, 434)); ?>
						</td>
						<td>
							<span class="panel-title">Open Educational Practice</span>
							<?php cf_presentations(array(409, 395, 408)); ?>
						</td>
						<td>
							<span class="panel-title">OER and Innovation</span>
							<?php cf_presentations(array(503, 353, 367, 372)); ?>
						</td>
					</tr>
					<tr>
						<td>10:30-11.00</td>
						<td class="text-center" colspan="6">Tea/Coffee Break</td>
					</tr>
					<tr class="td-5">
						<td>11:00-12:30</td>
						<td>
							<span class="panel-title">Open for Participation</span>
						</td>
						<td>
							<span class="panel-title">Open for Participation</span>
						</td>
						<td>
							<span class="panel-title">Open Education Policy, Social Justice and Ethics</span>
							<?php cf_presentations(array(444, 410, 447, 406)); ?>
						</td>
						<td>
							<span class="panel-title">Research in OER</span>
							<?php cf_presentations(array(399, 430, 455, 460)); ?>
						</td>
						<td>
							<span class="panel-title">Open Educational Practice</span>
							<?php cf_presentations(array(425, 424, 415)); ?>
						</td>
						<td>
							<?php cf_presentations(array(458, 350)); ?>
						</td>
					</tr>
					<tr>
						<td>12:30-13:30</td>
						<td class="text-center" colspan="6">Lunch</td>
					</tr>
					<tr class="td-5">
						<td>13:45-15.30</td>
						<td class="text-center declaration" colspan="6">
							The Cape Town Open Education Declaration +10 Panel and Celebration<br />
							Chair: Phillip Schmidt<br />
							Panelists: Delia Browne, Sanjaya Mishra, Richard Baraniuk and Alek Tarkowski<br />
						</td>
					</tr>
					<tr class="td-5">
						<td>15.30</td>
						<td class="text-center declaration" colspan="6">
							Conference Ends - <a href="http://conference.oeconsortium.org/2017/optional-tours/">Optional Tours</a>
						</td>
					</tr>
			    </tbody>
			</table>
		</div>
	</div>
</div>

<?php get_footer(); ?>