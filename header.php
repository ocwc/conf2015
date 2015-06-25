<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>

<script type="text/javascript" src="//use.typekit.net/glk7tyn.js"></script>
<script type="text/javascript">try{Typekit.load();}catch(e){}</script>

<?php wp_head(); ?>

<!--[if (gte IE 6)&(lte IE 8)]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="http://cdnjs.cloudflare.com/ajax/libs/selectivizr/1.0.2/selectivizr-min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body <?php body_class(); ?>>
	<div class="container logos">
		<div class="row">
			<div class="col-sm-3">
				<a href="/" class="logo">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" 
						alt="<?php echo get_bloginfo( 'name' ); ?>"
						class="img-responsive" />
				</a>

			</div>
		</div>
	</div>

	<nav class="navbar navbar-default" role="navigation">
		<div class="container menu">

			<div class="navbar-header visible-xs-block">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#main-menu">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>

			<?php 
	            wp_nav_menu( array(
	                'menu'              => 'primary',
	                'theme_location'    => 'primary',
	                'depth'             => 2,
	                'container'         => 'div',
	                'container_class'   => 'collapse navbar-collapse',
	        		'container_id'      => 'main-menu',
	                'menu_class'        => 'nav navbar-nav',
	                'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
	                'walker'            => new wp_bootstrap_navwalker())
	            );
	        ?>
		</div>
	</nav>	

	<div class="container content">