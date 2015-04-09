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
			<h1>Wednesday,	22 April 2015</h1>
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
			            <th class="room-col">Research Track</th>
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
			    			Welcome: Rory McGreal
			    		</td>
			    	</tr>
			    	<tr>
			    		<td>9:15</td>
			    		<td>
			    			<span class="panel-title">Plenary Talks</span>
			    			<li class="schedule-item"><?php cf_presentations(array(804)); ?></li>
						</td>
					</tr>
					
					<tr>
						<td>10:30</td>
						<td class="text-center" colspan="5">Refreshments</td>
					</tr>

					<tr class="td-5">
						<td>11:00</td>
						<td>
							<span class="panel-title">Case Studies in Innovation & OER</span>
							<?php cf_presentations(array(519, 302, 529)); ?>
						</td>
						<td>
							<span class="panel-title">The Future of Education</span>
							<?php cf_presentations(array(379, 488, 646)); ?></td>
						<td>
							<span class="panel-title">Open Education & Entrepreneurship</span>
							<?php cf_presentations(array(300, 344, 395)); ?>
						</td>
						<td>
							<span class="panel-title">Open Access, Open Publishing</span>
							<?php cf_presentations(array(368, 710, 654)); ?>
						</td>
						<td>
							<span class="panel-title">ROER4D Presentations</span>
							<?php cf_presentations(array(621, 627, 625)); ?>
						</td>
			    	</tr>

					<tr>
						<td>12:30</td>
						<td class="text-center" colspan="5">Lunch</td>
					</tr>

					<tr>
						<td>13:30</td>
						<td class="" colspan="1">
							<strong><?php cf_presentations(array(813)); ?></strong>
						</td>
					</tr>

					<tr class="td-5">
						<td>14:30</td>
						
						<td>
							<span class="panel-title">Credentialing OER</span>
							<?php cf_presentations(array(453, 459)); ?>
						</td>

						<td>
							<span class="panel-title">National Policy for OER</span>
							<?php cf_presentations(array(466, 476)); ?>
						</td>

						<td>
							<span class="panel-title">Action Lab</span>
							<?php cf_presentations(array(662)); ?>
						</td>

						<td>
							<span class="panel-title">Panel Discussion</span>
							<?php cf_presentations(array(708)); ?>
						</td>

						<td>
							<span class="panel-title">&nbsp;</span>
							<?php cf_presentations(array(617, 619)); ?>
						</td>
					</tr>

					<tr>
						<td>15:30</td>
						<td class="text-center" colspan="5">Refreshments</td>
					</tr>

					<tr>
						<td>16:00</td>
						<td>
							<span class="panel-title">&nbsp;</span><br />
							<li class="schedule-item">
								<a href="<?php echo get_bloginfo('url') . '/schedule/posters/'; ?>">
									Poster Highlights – short talks from poster presenters
								</a>
							</li>
							<br /><br /><br /><br />
							<span class="panel-title">17:00</span>
							<?php cf_presentations(array(469, 420)); ?>
						</td>
					
						<td>
							<span class="panel-title">A Closer look at MOOCs</span>
							<?php cf_presentations(array(461, 523, 722, 511)); ?>
						</td>

						<td>
							<span class="panel-title">Community, Network and OER</span>
							<?php cf_presentations(array(532, 480, 455, 706)); ?>
						</td>

						<td>
							<span class="panel-title">Pedagogy and OER</span>
							<?php cf_presentations(array(428, 768, 430, 521)); ?>
						</td>

						<td>
							<span class="panel-title">ROER4D Presentations</span>
							<?php cf_presentations(array(605, 623, 611, 615)); ?>
						</td>
					</tr>

					<tr>
						<td>18:00</td>
						<td class="text-center" colspan="5">End of day 1</td>
					</tr>
			    </tbody>
			</table>
		</div>
	</div>
</div>

<?php get_footer(); ?>