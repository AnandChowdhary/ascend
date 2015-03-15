<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package Ascend
 */
?>
<!doctype html>
<html lang="en">
<head>


<meta charset="utf-8">

<meta name="author" content="Anand Chowdhary">

<meta name="viewport" content="width=device-width, initial-scale=1">


<link rel="author" href="http://plus.google.com/+AnandChowdhary0?rel=author">

<link rel="icon" type="image/png" href="http://classrebels.co/anandchowdhary/wp-content/uploads/2015/03/square-icon.png">

<link rel="apple-touch-icon-precomposed" href="http://classrebels.co/anandchowdhary/wp-content/uploads/2015/03/square-icon.png">


<script src="//use.typekit.net/glz5glz.js"></script>

<script>try{Typekit.load();}catch(e){}</script>


<?php wp_head(); ?>



</head>



<body <?php body_class(); ?>>



<div id="page" class="hfeed site">


	<header id="masthead" class="site-header" role="banner">

		<div class="container">


		<div id="logo"><a href="http://classrebels.co/anandchowdhary" title="Anand Chowdhary"><img alt="Anand Chowdhary" src="http://classrebels.co/anandchowdhary/wp-content/uploads/2015/03/logo-thin1.png"></a></div>


		<nav id="site-navigation" class="main-navigation" role="navigation">
			<button class="menu-toggle" aria-controls="primary-menu" aria-expanded="false"><?php _e( 'Menu', 'ascend' ); ?></button>
			<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>
		</nav>


		</div>

	</header><!-- #masthead -->



	<div id="content" class="site-content container">