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
		<nav id="site-navigation" class="main-navigation" role="navigation">
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav><!-- #site-navigation -->
	</div>
</header><!-- #masthead -->
