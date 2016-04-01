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
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-12">
						<!-- Add logo -->
						<?php if ( get_theme_mod( 'themeslug_logo' ) ) : ?>
								<a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><img src='<?php echo esc_url( get_theme_mod( 'themeslug_logo' ) ); ?>' class="img-fluid img-logo navbar-brand" alt="logo"></a>
						<?php else : ?>
							<hgroup class="navbar-brand">
								<h1 class='site-title'><a href='<?php echo esc_url( home_url( '/' ) ); ?>' title='<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>' rel='home'><?php bloginfo( 'name' ); ?></a></h1>
								<h2 class='site-description'><?php bloginfo( 'description' ); ?></h2>
							</hgroup>
						<?php endif; ?>
					</div><!-- end .col-xs-12 -->
					<!--Navbar-->
					<nav class="navbar">
						<button class="navbar-toggler hidden-lg-up" type="button" data-toggle="collapse" data-target="#collapsing-navbar">
							<i class="fa fa-bars"></i>
						</button>
						<?php has_nav_menu( 'primary' ) && wp_nav_menu( array(
							'walker'=>new Bop_Nav_Walker,
							'theme_location'=>'primary',
							'container'=>'div',
							'container_id'=>'collapsing-navbar',
							'container_class'=>'collapse navbar-toggleable-md',
							'menu_class'=>'nav navbar-nav'
						) ) ?>
					</nav>
				</div><!-- end .row -->
			</div><!--end .container-fluid-->
		</header>
		<div id="content" class="container-fluid">
