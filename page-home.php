<?php
/**
 *
 * template name: Home page
 * The template for displaying home page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package amf
 */

get_header();


    get_template_part('template-parts/home/content', 'hp-hero');
	get_template_part('template-parts/home/content', 'hp-topbar');
	get_template_part('template-parts/home/content', 'hp-optin-top');

?>

	<div id="primary" class="content-area section">
		<main id="main" class="site-main container" role="main">

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );



			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->
<div class="section" id="hp-services">
	<?php  get_template_part('template-parts/home/content', 'hp-services'); ?>
</div>

<?php
get_template_part('template-parts/globals/content', 'bottom-optin-page');
get_template_part('template-parts/content', 'testimonials');
get_footer();
