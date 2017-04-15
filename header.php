<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

$container = get_theme_mod( 'understrap_container_type' );
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-title" content="<?php bloginfo( 'name' ); ?> - <?php bloginfo( 'description' ); ?>">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

<div class="hfeed site" id="page">

    <!-- ******************* The Navbar Area ******************* -->
    <div class="wrapper-fluid wrapper-navbar" id="wrapper-navbar">

      <a class="skip-link screen-reader-text sr-only" href="#content"><?php _e( 'Skip to content', 'understrap' ); ?></a>

	  <nav>
	  	
		  <!-- The WordPress Menu goes here -->
		  <?php wp_nav_menu(
		    array(
		      'theme_location' => 'primary',
		      'container_class' => '',
		      'menu_class' => '',
		      'fallback_cb' => '',
		      'menu_id' => 'main-menu',
		      'walker' => new wp_bootstrap_navwalker()
		    )
		   ); ?>
	  </nav>

	  <div class="navbar navbar-inverse navbar-fixed-top">      
		 
		    <!--Include your brand here-->
		    <div class="navbar-header pull-right">
		      <a id="nav-expander" class="nav-expander fixed">
		        MENU &nbsp;<i class="fa fa-bars fa-lg white"></i>
		      </a>
		    </div>
		</div>
    </div><!-- .wrapper-navbar end -->
