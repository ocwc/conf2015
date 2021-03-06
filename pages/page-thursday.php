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
						<td>&nbsp8.00&nbsp-&nbsp9.00</td>
						<td class="text-center" colspan="6">Registrations</td>
					</tr>
					<tr>
						<td>&nbsp9.00&nbsp-&nbsp10.00</td>
						<td class="text-center" colspan="6">
							<p class="text-left">[Venue: Auditorium 2]</p>
							<p class="text-left announcements-description">
								Announcements &amp; Keynote Panel (Open Perspectives)<br />
								Chair: Cheryl Hodgkinson-Williams<br />
								Panelists: Patricia Arinto, Mark Horner and Carina Bossu
							</p>
						</td>
					</tr>
					<tr>
						<td>10.00&nbsp-&nbsp10.30</td>
						<td class="text-center" colspan="6">Tea/Coffee Break &amp; <a href="../posters">Poster Presentations</a></td>
					</tr>
					<tr class="td-5">
						<td>10.30&nbsp-&nbsp12.30</td>
						<td>
							<span class="panel-title">Open for Participation</span>
						</td>
						<td>
							<?php cf_presentations(array(346)); ?>
						</td>
						<td>
							<?php cf_presentations(array(342)); ?>
						</td>
						<td>
							<span class="panel-title">OER and Student Experience</span>
							<?php cf_presentations(array(377, 380, 396, 426)); ?>
						</td>
						<td>
							<span class="panel-title">MOOCs</span>
							<?php cf_presentations(array(361, 448, 451)); ?>
						</td>
						<td>
							<span class="panel-title">Open Business Models</span>
							<?php cf_presentations(array(417)); ?>
							<span class="panel-title">OER and Technology</span>
							<?php cf_presentations(array(431, 432, 389, 348)); ?>
						</td>
					</tr>
					<tr>
						<td>12:30&nbsp-&nbsp13:30</td>
						<td class="text-center" colspan="6">Lunch</td>
					</tr>
					<tr class="td-5">
						<td>13.30 - 15.00</td>
						<td>
							<span class="panel-title">OER Based Degree &amp; College</span>
							<?php cf_presentations(array(359, 362)); ?>
						</td>
						<td>
							<span class="panel-title">Research in OER</span>
							<?php cf_presentations(array(452, 435, 378, 376)); ?>
						</td>
						<td>
							<!-- <span class="panel-title">Open for Participation</span> -->
							<?php cf_presentations(array(602)); ?>
						</td>
						<td>
							<span class="panel-title">OER in HE  and Beyond</span>
							<?php cf_presentations(array(379, 354, 418)); ?>
						</td>
						<td>
							<span class="panel-title">MOOCs</span>
							<?php cf_presentations(array(344)); ?>
						</td>
						<td>
							<span class="panel-title">Open for Participation</span>
						</td>
					</tr>
					<tr>
						<td>15:00&nbsp-&nbsp15:30</td>
						<td class="text-center" colspan="6">Tea/Coffee Break &amp; <a href="../posters">Poster Presentations</a></td>
					</tr>
					<tr>
						<td>15.30 - 17.30</td>
						<td>
							<span class="panel-title">Openness and Distance Education</span>
							<?php cf_presentations(array(363, 454, 433)); ?>
						</td>
						<td>
							<?php cf_presentations(array(351)); ?>
						</td>
						<td>
							<span class="panel-title">Open Information</span>
							<?php cf_presentations(array(428, 421, 383)); ?>
						</td>
						<td>
							<?php cf_presentations(array(340)); ?>
						</td>
						<td>
							<span class="panel-title">MOOCs</span>
							<?php cf_presentations(array(368, 341, 427)); ?>
						</td>
						<td>
							<span class="panel-title">OER and Technology</span>
							<?php cf_presentations(array(443)); ?>

							<span class="panel-title">OER and Science</span>
							<?php cf_presentations(array(414, 375)); ?>
						</td>
					</tr>
					<tr>
						<td>18.00</td>
						<td class="text-center" colspan="6">
							<strong>Gala Dinner (CTICC) and Open Education Awards for Excellence Ceremony</strong>

<p class="text-left gala-dinner-description">
<strong>18:00</strong> - African Drumming Performance – This will include a group of drummers in African attire with additional djembes which guests can use to participate in the drumming on arrival.<br />
<strong>18:45</strong> - Starters<br />
<strong>19:15</strong> - Open Education Awards for Excellence<br />
<strong>20:00</strong> - Dinner<br />
<strong>21:00</strong> - Entertainment - AFRO ELITE <br />
<strong>22:00</strong> - Dessert<br />
<strong>22:30</strong> - Gala Dinner Ends
</p>
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
