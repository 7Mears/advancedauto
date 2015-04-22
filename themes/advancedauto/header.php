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
	<div class="nav-wrap" id="nav-wrap">

		<header id="masthead" class="site-header" role="banner">
			<div class="container">
				<a href="#" class="menu-link"><i class="fa fa-bars"></i></a>

				<nav id="menu" class="main-navigation nav-effect" role="navigation">
					<ul>
						<li><a href="#services">Services</a></li>
						<li><a href="#products">Products</a></li>
						<li><a href="#about">About</a></li>
						<li><a href="#contact">Contact</a></li>
					</ul>

				</nav>

			</div><!-- #container -->
		</header><!-- #masthead -->
