<?php
/*
	Template name: Schedule - Thursday
*/
?>
<?php get_header(); ?>

<?php get_template_part('partials/_event_days'); ?>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h1>Thursday,	14 April</h1>
		</div>

		<div class="col-sm-12 row">
			<table class="table table-striped">
				<thead>
						<tr>
								<th class="time-col"></th>
								<th class="room-col">Room&nbsp;A1</th>
								<th class="room-col">Room&nbsp;A2</th>
								<th class="room-col">Room&nbsp;C</th>
								<th class="room-col">Room&nbsp;D</th>
						</tr>
				</thead>
				<tbody>
					<tr>
						<td>9.00&nbsp-&nbsp10.30</td>
						<td class="">
							<span class="panel-title">Keynote: Jaroslaw Lipszyc</span>
						</td>
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
							<?php cf_presentations(array()); ?>
							[Action Lab]<br/>
							The Open Research Agenda <br />
							<em>Robert Farrow, Beatriz de Los Arcos, Rebecca Pitt and Martin Weller</em>
						</td>
						<td>
							<?php cf_presentations(array()); ?>
							[Action Lab] <br/>
							Less commonly used languages and OER<br/>
							<em>Gard Titlestad</em>
						</td>
					</tr>
					<tr class="td-5">
						<td>13:45-17:00<br/>
								coffee break at 15:30</td>
						<td>
							[Action Lab]<br />
							Accessibility and OER<br />
							<em>Jutta Treviranus</em>
						</td>
						<td>
							[Action Lab] Continued<br />
							Open Badges in Education 2016<br />
							<em>Vladan Devedzic</em>
						</td>
						<td>
							[Action Lab]<br />
							Open Course Design Workshop<br />
							<em>Martijn Ouwehand and Nelson Jorge</em>
						</td>
						<td>
							[Action Lab]  <br />
							OER World Map Workshop <br />
							<em>Jan Neumann</em>
						</td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
</div>

<?php get_footer(); ?>
