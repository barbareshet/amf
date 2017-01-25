<?php
/**
 * 	template name: Photo Gallery
 *
 *
 * The template for displaying video gallery
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package amf
 */

get_header();
get_template_part('template-parts/globals/content', 'top-page');
get_template_part('template-parts/content', 'page-optin-top');
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main container" role="main">
            <?php
            while ( have_posts() ) : the_post();

                get_template_part( 'template-parts/content', 'photos' );


            endwhile; // End of the loop.
            ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
