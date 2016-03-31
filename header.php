<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package Bop Null
 * @since 0.1.0
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
	<head>
		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<link rel="profile" href="http://gmpg.org/xfn/11">
		<?php wp_head(); ?>
	</head>
	<body <?php body_class(); ?>>
		<header>
			<!-- Add logo -->
			<?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
				<div class='site-logo'>
					<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' alt='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' class="img-fluid img-logo" width="225" height="52"></a>
				</div>
			<?php else : ?>
				<hgroup>
					<h1 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
					<h2 class='site-description'><?php bloginfo( 'description' ); ?></h2>
				</hgroup>
			<?php endif; ?>
			<!--Navbar-->
			<button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsing-navbar">
				&#9776;
			</button>
			<div class="collapse navbar-toggleable-md" id="collapsing-navbar">
				<?php has_nav_menu( 'primary' ) && wp_nav_menu( array(
					'walker'=>new Bop_Nav_Walker,
					'theme_location'=>'primary',
					'container'=>'nav',
					'container_class'=>'navbar',
					'menu_class'=>'nav nav-tabs'
				) ) ?>
			</div>
		</header>
		<div id="content" class="container-fluid">
