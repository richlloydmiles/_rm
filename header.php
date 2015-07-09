<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package _tk
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title><?php wp_title( '|', true, 'right' ); ?></title>

	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300,300italic,700' rel='stylesheet' type='text/css'>
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php do_action( 'before' ); ?>
	<nav class="navbar navbar-default navbar-fixed-top header">
		<?php 
  // Fix menu overlap bug..
		if ( is_admin_bar_showing() ) echo '<div class="champ-top-bar"></div>'; 
		?>
		<div class="container-fluid">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling -->
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<?php wp_nav_menu( array( 
					'theme_location' => 'left_menu',
					'items_wrap'      => '	<ul class="nav navbar-nav nav-left">%3$s</ul>',
					'container_class' => 'nav-bar-left'
					) ); ?>
					<div class="col-sm-2 hidden-xs">
						<a class="navbar-brand" href="<?php get_site_url(); ?>">
							<?php $header_image = get_header_image();
							if ( ! empty( $header_image ) ) { ?>
							<img src="<?php header_image(); ?>" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="">				
							<?php } // end if ( ! empty( $header_image ) ) ?>

						</a>
					</div>
					<?php wp_nav_menu( array( 
						'theme_location' => 'right_menu',
						'items_wrap'      => '	<ul class="nav navbar-nav navbar-right nav-right">%3$s</ul>',
						'container_class' => 'nav-bar-right'
						) ); ?>
					</div><!-- /.navbar-collapse -->
				</div><!-- /.container-fluid -->
			</nav>
			<header id="masthead" class="site-header" role="banner">
				<?php // substitute the class "container-fluid" below if you want a wider content area ?>
				<div class="container">
					<div class="row">
						<div class="site-header-inner col-sm-12">



							<div class="site-branding">
								<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
								<p class="lead"><?php bloginfo( 'description' ); ?></p>
							</div>

						</div>
					</div>
				</div><!-- .container -->
			</header><!-- #masthead -->



			<div class="main-content">
				<?php // substitute the class "container-fluid" below if you want a wider content area ?>
				<div class="container">
					<div class="row">
						<div id="content" class="main-content-inner col-sm-12 col-md-8">

