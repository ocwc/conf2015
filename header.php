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
	<div class="navbar container navbar-default">
    <div class="navbar-header">

			<div class="col-xs-8 visible-xs-block">
				<a href="/" class="logo-xs">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png"
						alt="<?php echo get_bloginfo( 'name' ); ?>"
						class="img-responsive" />
				</a>
			</div>


      <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".navbar-offcanvas" data-canvas="body">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>

    <div class="navbar-offcanvas offcanvas">
			<div class="col-sm-3 hidden-xs">
				<a href="/" class="logo-smup">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png"
						alt="<?php echo get_bloginfo( 'name' ); ?>"
						class="img-responsive" />
				</a>
			</div>

			<?php
			    wp_nav_menu( array(
			        'menu'              => 'primary',
			        'theme_location'    => 'primary',
			        'depth'             => 2,
			        'container'         => false,
			        'menu_class'        => 'col-sm-9 nav navbar-nav',
			        'fallback_cb'       => 'wp_bootstrap_navwalker::fallback',
			        'walker'            => new wp_bootstrap_navwalker())
			    );
			?>
    </div>
</div>
