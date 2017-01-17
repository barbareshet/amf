<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package amf
 */
get_header();
get_template_part('template-parts/globals/content', 'top-page');

?>

    <div id="primary" class="content-area">
        <main id="main" class="site-main container" role="main">

            <?php
            if ( have_posts() ) :
            while ( have_posts() ) : the_post();

                get_template_part( 'template-parts/content', get_post_format() );

                // If comments are open or we have at least one comment, load up the comment template.
                if ( comments_open() || get_comments_number() ) :
                    comments_template();
                endif;

            endwhile; // End of the loop.

                the_posts_navigation();

            else :

                get_template_part( 'template-parts/content', 'none' );

            endif;
            ?>

        </main><!-- #main -->
    </div><!-- #primary -->


<?php
//get_sidebar();
get_footer();
