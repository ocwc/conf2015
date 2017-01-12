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
					<th class="room-col">Room&nbsp;1</th>
					<th class="room-col">Room&nbsp;2</th>
					<th class="room-col">Room&nbsp;3</th>
					<th class="room-col">Room&nbsp;4</th>
					<th class="room-col">Room&nbsp;5</th>
					<th class="room-col">Room&nbsp;6</th>
				</thead>
				<tbody>
					<tr>
						<td>&nbsp8.00&nbsp-&nbsp13.30</td>
						<td class="text-center" colspan="6">Registrations</td>
					</tr>
					<tr>
						<td>&nbsp9.00&nbsp-&nbsp10.00</td>
						<td class="text-center" colspan="6">Announcements &amp; Keynote Panel</td>
						<!--
						<td class="">
							<?php //cf_presentations(array(694)); ?>
						</td>
						-->
					</tr>
					<tr>
						<td>10.00&nbsp-&nbsp10.30</td>
						<td class="text-center" colspan="6">Tea/Coffee Break</td>
					</tr>
					<tr class="td-5">
						<td>11.00&nbsp-&nbsp12.45</td>
						<td>
							<?php cf_presentations(array(359, 392)); ?>
						</td>
						<td>
							<?php cf_presentations(array(346)); ?>
						</td>
						<td>
							<?php cf_presentations(array(342)); ?>
						</td>
						<td>
							<?php cf_presentations(array(377, 380, 396, 426)); ?>
						</td>
						<td>
							<?php cf_presentations(array(361, 448, 451)); ?>
						</td>
						<td>
							<?php cf_presentations(array(431, 432, 389)); ?>
						</td>
					</tr>
					<tr>
						<td>12:30&nbsp-&nbsp13:30</td>
						<td class="text-center" colspan="6">Lunch</td>
					</tr>
					<tr class="td-5">
						<td>13.30 - 15.00</td>
						<td>
							<?php cf_presentations(array(362)); ?>
						</td>
						<td>
							<?php cf_presentations(array(452, 435, 378, 376)); ?>
						</td>
						<td>
							<?php cf_presentations(array(394, 438)); ?>
						</td>
						<td>
							<?php cf_presentations(array(379, 354, 418)); ?>
						</td>
						<td>
							<?php cf_presentations(array(344)); ?>
						</td>
						<td>
							<?php cf_presentations(array(357, 348)); ?>
						</td>
					</tr>
					<tr>
						<td>15:00&nbsp-&nbsp15:30</td>
						<td class="text-center" colspan="6">Tea/Coffee Break</td>
					</tr>
					<tr>
						<td>15.30 - 17.30</td>
						<td>
							<?php cf_presentations(array(363, 454, 433)); ?>
						</td>
						<td>
							<?php cf_presentations(array(430, 455, 460)); ?>
						</td>
						<td>
							<?php cf_presentations(array(428, 399, 421)); ?>
						</td>
						<td>
							<?php cf_presentations(array(340)); ?>
						</td>
						<td>
							<?php cf_presentations(array(341, 427)); ?>
						</td>
						<td>
							<?php cf_presentations(array(443, 414, 375)); ?>
						</td>
					</tr>
					<tr>
						<td>19.00</td>
						<td class="text-center" colspan="5">
							DINNER (CTICC) and award ceremony
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
