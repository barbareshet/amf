<?php
/**
 * template name: Page Materials
 *
 * The template for displaying all pages
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
get_template_part('template-parts/globals/content', 'top-page');
get_template_part('template-parts/content', 'page-optin-top');
?>

	<div id="primary" class="content-area section">
		<main id="main" class="site-main container" role="main">

			<?php
			while ( have_posts() ) : the_post();?>
                <div class="table-responsive">

                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>Name</th>
                            <th>Size</th>
                            <th>Price</th>
                            <th>Additional Inaformation</th>
                        </tr>
                        </thead>
                        <tbody>

                        <?php    if( have_rows('materials') ):
                            while ( have_rows('materials') ) : the_row();?>

                                <?php get_template_part( 'template-parts/content', 'materials' );?>

                            <?php endwhile;
                        endif;?>
                        </tbody>
                    </table>
                </div>
			<?php endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
