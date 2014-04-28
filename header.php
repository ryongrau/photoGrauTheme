<?php
/**
 * The Header template for our theme
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage photoGrauTheme
 * @since PhotoGrau 0.1
 */
?><!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8)  ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<title><?php wp_title( '|', true, 'right' ); ?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php // Loads HTML5 JavaScript file to add support for HTML5 elements in older IE versions. ?>
<!--[if lt IE 9]>
<script src="<?php echo get_template_directory_uri(); ?>/js/html5.js" type="text/javascript"></script>
<![endif]-->
<?php wp_head(); ?>
<script src="<?php echo get_template_directory_uri(); ?>/js/snap.svg-min.js" type="text/javascript"></script>
</head>

<body <?php body_class(); ?>>
<div id="page" class="hfeed site">
	<header id="masthead" class="site-header" role="banner">
<svg id="RDGlogo" version="1.1"  xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%" height="150px" preserveAspectRatio="xMaxYMid meet" 
			  xml:space="preserve"
			>
			<g transform="scale(7.1)">
				<path style="fill:#666;" d="M18.365,8.129l-1.047-2.527l0.673-1.217l-2.216-2.216l-1.216,0.674l-2.527-1.048l-0.384-1.336H8.513
					L8.129,1.795L5.602,2.843L4.385,2.169L2.169,4.385l0.673,1.217L1.795,8.129L0.459,8.513v3.133l1.335,0.385l1.048,2.527
					l-0.673,1.217l2.215,2.215l1.217-0.672l2.528,1.047l0.384,1.336h3.134l0.384-1.336l2.528-1.047l1.216,0.672l2.216-2.215
					l-0.673-1.217l1.047-2.527l1.336-0.385V8.513L18.365,8.129z M10.08,18.08c-4.418,0-8-3.582-8-8c0-4.418,3.582-8,8-8s8,3.582,8,8
					C18.08,14.498,14.499,18.08,10.08,18.08z"/>
				<path style="fill:#666;" d="M10.33,4.593v10.975c2.92-0.133,5.25-2.533,5.25-5.488C15.58,7.127,13.25,4.725,10.33,4.593z
					 M11.831,13.658V6.503c1.33,0.646,2.249,1.998,2.249,3.577C14.08,11.658,13.16,13.012,11.831,13.658z"/>
				<path style="fill:#666;" d="M4.58,10.081c0,0.257,0.04,0.503,0.074,0.75h1.979l-1.22,2.113c0.281,0.457,0.628,0.865,1.028,1.221
					l1.889-3.273v4.373c0.478,0.16,0.974,0.281,1.5,0.305V4.593C6.91,4.725,4.58,7.127,4.58,10.081z M6.153,9.331
					C6.392,8.08,7.216,7.043,8.33,6.503v2.827H6.153z"/>
				<path style="fill:#DD8500;" d="M17.542,9.331H11.08v0.038c0.146,0.204,0.25,0.441,0.25,0.712s-0.104,0.507-0.25,0.712v0.038h4.949
					c-0.37,2.958-2.889,5.251-5.949,5.251c-3.314,0-6-2.688-6-6.001c0-3.313,2.687-6,6-6c2.885,0,5.292,2.036,5.868,4.75h1.52
					c-0.597-3.546-3.672-6.25-7.388-6.25c-4.142,0-7.5,3.358-7.5,7.5c0,4.142,3.358,7.5,7.5,7.5s7.5-3.357,7.5-7.5
					C17.58,9.828,17.567,9.577,17.542,9.331z"/>
			</g>
		</svg>
		<hgroup>
			<h1 class="site-title"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h1>
			<h2 class="site-description"><?php bloginfo( 'description' ); ?></h2>
		</hgroup>

		<nav id="site-navigation" class="main-navigation" role="navigation">
			<h3 class="menu-toggle"><?php _e( 'Menu', 'photograutheme' ); ?></h3>
			<a class="assistive-text" href="#content" title="<?php esc_attr_e( 'Skip to content', 'photograutheme' ); ?>"><?php _e( 'Skip to content', 'photograutheme' ); ?></a>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_class' => 'nav-menu' ) ); ?>
		</nav><!-- #site-navigation -->

		<?php if ( get_header_image() ) : ?>
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php header_image(); ?>" class="header-image" width="<?php echo get_custom_header()->width; ?>" height="<?php echo get_custom_header()->height; ?>" alt="" /></a>
		<?php endif; ?>
	</header><!-- #masthead -->

	<div id="main" class="wrapper">