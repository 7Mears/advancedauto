<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Advanced Auto
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">

<?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

<header id="masthead" class="site-header" role="banner">
	<div class="container">
		<div id="pattern" class="pattern">
		<a href="#menu" class="menu-link">Menu</a>

		<nav id="menu" class="main-navigation nav-effect" role="navigation">
			<a href="#services">Services</a>
			<a href="#products">Products</a>
			<a href="#about">About</a>
			<a href="#contact">Contact</a>
		</nav>
		<!-- #site-navigation -->
		</div>
	</div>
</header><!-- #masthead -->
