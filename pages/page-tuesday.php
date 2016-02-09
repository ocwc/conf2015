<?php
/*
	Template name: Schedule - Tuesday
*/
?>
<?php get_header(); ?>

<?php get_template_part('partials/_event_days'); ?>

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<h1>Tuesday, 12 April</h1>
		</div>

		<div class="col-sm-12">
			<table class="table table-striped">
				<table class="table table-striped">
				    <thead>
				        <tr>
				            <th class="time-col"></th>
				            <th class="room-col">Room&nbsp;A</th>
				            <th class="room-col">Room&nbsp;B</th>
				            <th class="room-col">Room&nbsp;C</th>
				            <th class="room-col">Room&nbsp;D</th>
				        </tr>
				    </thead>

			    <tbody>
			    	<tr>
			    		<td>9.00&nbsp-&nbsp11.00</td>
			    		<td class="">
								<span class="panel-title">Plenary Session: Conference Welcome<br /> and Opening Up Poland</span>
							</td>
			    	</tr>
						<tr class="td-5">
							<td>11.30&nbsp-&nbsp12.30</td>
							<td>
								<?php cf_presentations(array(550, 560)); ?>
							</td>
							<td>
								<?php cf_presentations(array(529, 588)); ?>
							</td>
							<td>
								[Action Lab]Open Access Education in Professional Writing: The LOOC Model
 								<em>Robert Bonk</em>
							</td>
							<td>
								<?php cf_presentations(array(533, 547)); ?>
							</td>
				    </tr>
						<tr class="td-5">
							<td>13.30&nbsp-&nbsp15.00</td>
							<td>
								<?php cf_presentations(array(583, 573, 553)); ?>
							</td>
							<td>
								<?php cf_presentations(array(593, 539)); ?>
							</td>
							<td>
								<?php cf_presentations(array(576, 587, 538)); ?>
							</td>
							<td>
								 [Action Lab] The Role of Stakeholders and Parterships in Open Education
							</td>
				    </tr>
						<tr class="td-5">
							<td>15.30&nbsp-&nbsp17.30</td>
							<td>
								<?php cf_presentations(array(576, 596, 551)); ?>
							</td>
							<td>
								<?php cf_presentations(array(603, 595)); ?>
							</td>
							<td>
								<?php cf_presentations(array(571, 545, 548, 534)); ?>
							</td>
							<td>
								 <?php cf_presentations(array(567, 570, 581, 653)); ?>
							</td>
				    </tr>
						<tr>
			    		<td>18.00</td>
			    		<td colspan="5" class="">
								<span class="panel-title">Opening Reception</span>
							</td>
			    	</tr>
			    </tbody>
			</table>
		</div>
	</div>
</div>

<?php get_footer(); ?>
