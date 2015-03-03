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
			<h1>Friday,	24 April 2015</h1>
		</div>

		<div class="col-sm-12 row">
			<table class="table table-striped">
			    <thead>
			        <tr>
			            <th class="time-col"></th>
			            <th class="room-col">Main Hall</th>
			            <th class="room-col">Breakout Room&nbsp;1</th>
			            <th class="room-col">Breakout Room&nbsp;2</th>
			            <th class="room-col">Breakout Room&nbsp;3</th>
			            <th class="room-col">Research Track*</th>
			        </tr>
			    </thead>
			    <tbody>
			    	<tr>
			    		<td>8:00</td>
			    		<td class="text-center" colspan="5">Registration & Refreshments</td>
			    	</tr>
			    	<tr>
			    		<td>9:00</td>
			    		<td>
			    			Keynote: Mark Surman
			    		</td>
			    	</tr>
					<tr>
						<td>10:00</td>
						<td class="text-center" colspan="5">Refreshments</td>
					</tr>
					<tr class="td-5">
						<td>10:30</td>
						<td>
							<span class="panel-title">Panel Discussion</span>
							<?php cf_presentations(array(334)); ?>
						</td>
						<td>
							<span class="panel-title">Action Lab</span>
							<?php cf_presentations(array(393)); ?>
						</td>
						<td>
							<span class="panel-title">Panel Discussion</span>
							<?php cf_presentations(array(699)); ?>
						</td>
						<td>
							<span class="panel-title">Action Lab</span>
							<?php cf_presentations(array(500)); ?>
						</td>
						<td></td>
					</tr>
					<tr class="td-5">
						<td>11:30</td>
						<td>
							<span class="panel-title">Panel Discussion</span>
							<?php cf_presentations(array(383)); ?>
						</td>
						<td>
							<span class="panel-title">Panel Discussion</span>
							<?php cf_presentations(array(701)); ?>
						</td>
						<td>
							<span class="panel-title">Panel Discussion</span>
							<?php cf_presentations(array(664)); ?>
						</td>
						<td>
							<span class="panel-title">Panel Discussion</span>
							<?php cf_presentations(array(498)); ?>
						</td>
					</tr>
			    </tbody>
			</table>
		</div>
	</div>
</div>

<?php get_footer(); ?>