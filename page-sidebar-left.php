<?php
/**
 * Template Name: Left Sidebar Template
 *
 * @package Bop Null
 * @since 0.1.0
 */

get_header(); ?>
<div class="row">
	<div class="col-md-8 pull-md-right">
		<main id="main" class="site-main" role="main">
			<?php if ( have_posts() ) : ?>
				<?php while( have_posts() ): the_post() ?>
					<article>
						<header>
							<?php the_post_thumbnail('full', array('class' => 'img-fluid')); ?>
							<h1><?php the_title() ?></h1>
						</header>
						<section>
							<?php the_content() ?>
						</section>
						<footer>
							<span><?php printf( __( 'by %s at %s' ), get_the_author(), get_the_time( 'c' ) ) ?></span>
						</footer>
					</article>
				<?php endwhile ?>
			<?php endif ?>
		</main>
	</div><!--end .col-md-8-->
	<div class="col-md-4">
		<?php get_sidebar(); ?>
	</div>
</div><!--end .row-->
<?php get_footer() ?>
