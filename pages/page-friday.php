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
			            <th class="room-col">
			            	Breakout Room&nbsp;1<br />
			            	<em>(Lynx)</em>
			            </th>
			            <th class="room-col">
			            	Breakout Room&nbsp;2<br />
			            	<em>(Black Bear)</em>
			            </th>
			            <th class="room-col">
			            	Breakout Room&nbsp;3<br />
			            	<em>(Den)</em>
			            </th>
			            <!--
			            <th class="room-col">
			            	Research Track<br />
			            	<em>(Aspen)</em>
			            </th>
			            -->
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
							<!-- <span class="panel-title">Panel Discussion</span> -->
							<?php //cf_presentations(array(699)); ?>
						</td>
						<td>
							<span class="panel-title">Action Lab</span>
							<?php cf_presentations(array(500)); ?>
						</td>
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
					<tr>
						<td>12:30</td>
						<td class="text-center" colspan="5">Lunch</td>
					</tr>
					<tr class="td-5">
						<td>13:30</td>
						<td>OE Consortium Update</td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr class="td-5">
						<td>14:00</td>
						<td>
							<span class="panel-title">Action Lab</span>
							<?php cf_presentations(array(743)); ?>
						</td>
						<td>
							<span class="panel-title">Action Lab</span>
							<?php cf_presentations(array(495)); ?>
						</td>
						<td>
							<span class="panel-title">Action Lab</span>
							<?php cf_presentations(array(490)); ?>
						</td>
						<td>
							<span class="panel-title">Action Lab</span>
							<?php cf_presentations(array(492)); ?>
						</td>
					</tr>
<!-- 					<tr>
						<td>16:30</td>
						<td class="text-center" colspan="5">Closing Ceremony</td>
					</tr> -->
					<tr>
						<td>16:30</td>
						<td class="text-center" colspan="5">End of day 3</td>
					</tr>
			    </tbody>
			</table>
		</div>
	</div>
</div>

<?php get_footer(); ?>