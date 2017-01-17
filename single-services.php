<?php
/**
 * The template for displaying all single services posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package amf
 */


get_template_part('template-parts/globals/content', 'top-page');
get_template_part('template-parts/content', 'page-optin-top');
get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main container" role="main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'service' );



		endwhile; // End of the loop.
		?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_template_part('template-parts/globals/content','bottom-service-benefits');
get_footer();
