<?php
/*
	Template name: Presentations
*/
?>

<?php get_header(); ?>

<div class="container">

	<div class="col-sm-12">
		<h1>Presentations</h1>
	</div>

	<div class="col-sm-12">
		<h2>Integration of Open Practices</h2>
		<?php $track = 'integration'; ?>
		<?php include(locate_template( 'partials/_presentation-loop.php' ) ); ?>
	</div>

	<div class="col-sm-12">
		<h2>Collaboration</h2>
		<?php $track = 'collaboration'; ?>
		<?php include(locate_template( 'partials/_presentation-loop.php' ) ); ?>
	</div>

	<div class="col-sm-12">
		<h2>Open Education as Strategy</h2>
		<?php $track = 'strategy'; ?>
		<?php include(locate_template( 'partials/_presentation-loop.php' ) ); ?>
	</div>


	<div class="col-sm-12">
		<h2>Research to Advance Open Education</h2>
		<?php $track = 'research'; ?>
		<?php include(locate_template( 'partials/_presentation-loop.php' ) ); ?>
	</div>

	<div class="col-sm-12">
		<h2>Open Education Initiatives in Europe</h2>
		<?php $track = 'initiatives'; ?>
		<?php include(locate_template( 'partials/_presentation-loop.php' ) ); ?>
	</div>

	<?php /*
	<div class="col-sm-12">
		<h2>Panel</h2>
		<?php $track = 'panel'; ?>
		<?php include(locate_template( 'partials/_presentation-loop.php' ) ); ?>
	</div>
	*/ ?>

	<?php /*
	<div class="col-sm-12">
		<h2>Action Lab</h2>
		<?php $track = 'actionlab'; ?>
		<?php include(locate_template( 'partials/_presentation-loop.php' ) ); ?>
	</div>
	*/ ?>

	<?php /*
	<div class="col-sm-12">
		<h2>ROER4D & GO-GN Research</h2>
		<?php $track = 'research'; ?>
		<?php include(locate_template( 'partials/_presentation-loop.php' ) ); ?>
	</div>
	*/ ?>
</div>

<?php get_footer(); ?>
