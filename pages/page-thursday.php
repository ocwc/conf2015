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
			<h1>Thursday,	23 April 2015</h1>
		</div>

		<div class="col-sm-12 row">
			<table class="table table-striped">
			    <thead>
			        <tr>
			            <th class="time-col"></th>
			            <th class="room-col">Main Hall</th>
			            <th class="room-col">
			            	Breakout Room&nbsp;1<br />
			            	<em>Lynx</em>
			            </th>
			            <th class="room-col">
			            	Breakout Room&nbsp;2<br />
			            	<em>(Black Bear)</em>
			            </th>
			            <th class="room-col">
			            	Breakout Room&nbsp;3<br />
			            	<em>(Den)</em>
			            </th>
			            <th class="room-col">
			            	Research Track<br />
			            	<em>(Aspen)</em>
			            </th>

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
			    			Keynote: Dirk van Damme
			    		</td>
			    	</tr>
					<tr>
						<td>10:00</td>
						<td class="text-center" colspan="5">Refreshments</td>
					</tr>
					<tr class="td-5">
						<td>10:30</td>
						<td>
							<span class="panel-title">The Quality of OER</span>
							<?php cf_presentations(array(290, 527, 446, 448)); ?>
						</td>
						<td>
							<span class="panel-title">Open Educational Practices</span>
							<?php cf_presentations(array(514, 397, 391, 381)); ?>
						</td>
						<td>
							<span class="panel-title">Identifying Impact of OER</span>
							<?php cf_presentations(array(317, 342, 389, 525)); ?>
						</td>
						<td>
							<span class="panel-title">Issues in Open Textbooks</span>
							<?php cf_presentations(array(294, 443, 338)); ?>
						</td>
						<td>
							<span class="panel-title">ROER4D Presentations</span>
							<?php cf_presentations(array(607, 613)); ?>
							<span class="panel-title">GO-GN Presentations</span>
							<?php cf_presentations(array(780, 782)); ?>
						</td>
					</tr>
					<tr>
						<td>12:30</td>
						<td class="text-center" colspan="5">Lunch</td>
					</tr>
					<tr class="td-5">
						<td>13:30</td>
						<td>
							<span class="panel-title">Panel Discussion</span>
							<?php cf_presentations(array(504)); ?>
						</td>
						<td>
							<!-- <span class="panel-title">Considerations for MOOCs</span> -->
							<?php //cf_presentations(array()); ?>
						</td>
						<td>
							<span class="panel-title">Panel Discussion</span>
							<?php cf_presentations(array(697)); ?>
						</td>
						<td>
							<span class="panel-title">Action Lab</span>
							<?php cf_presentations(array(453)); ?>
						</td>
						<td>
							<span class="panel-title">GO-GN Presentations</span>
							<?php cf_presentations(array(784, 786)); ?>
						</td>
					</tr>
					<tr class="td-5">
						<td>14:30</td>
						<td>
							<span class="panel-title">Survey of  OER users</span>
							<?php cf_presentations(array(288, 313)); ?>
						</td>
						<td>
							<span class="panel-title">Panel Discussion</span>
							<?php cf_presentations(array(502)); ?>
						</td>
						<td>
							<span class="panel-title">New Technologies in OER</span>
							<?php cf_presentations(array(336, 377)); ?>
						</td>
						<td>
							<span class="panel-title">Panel Discussion</span>
							<?php cf_presentations(array(703)); ?>
						</td>
						<td>
							<span class="panel-title">GO-GN Presentations</span>
							<?php cf_presentations(array(788, 790)); ?>
							<br />
							<em>End of ROER4D/GO-GN Research Presentations</em>
						</td>
					</tr>
					<tr>
						<td>15:30</td>
						<td class="text-center" colspan="5">Refreshments</td>
					</tr>
					<tr class="td-5">
						<td>16:00</td>
						<td>
							<span class="panel-title">Case Studies from Different Regions</span>
							<?php cf_presentations(array(371, 672, 472)); ?>
						</td>
						<td>
							<span class="panel-title">Embedding OER in Educational Practice</span>
							<?php cf_presentations(array(296, 469, 478)); ?>
						</td>
						<td>
							<span class="panel-title">MOOCs and Data</span>
							<?php cf_presentations(array(332, 324, 464)); ?>
						</td>
						<td>
							<span class="panel-title">Moving Towards “Open”</span>
							<?php cf_presentations(array(485, 644, 674)); ?>
						</td>
						<td></td>
					</tr>
					<tr>
						<td>17:30</td>
						<td class="text-center" colspan="5">End of day 2</td>
					</tr>
					<tr>
						<td>19:00</td>
						<td class="text-center" colspan="5">Banquet and Open Education Awards Ceremony, Speaker and Performance: Kai Kight</td>
					</tr>
			    </tbody>
			</table>
		</div>
	</div>
</div>

<?php get_footer(); ?>