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
<div class="row main-row">

    <div id="primary" class="content-area">
        <main id="main" class="site-main container" role="main">

            <?php
            if ( have_posts() ) :
                while ( have_posts() ) : the_post();

                    get_template_part( 'template-parts/content', get_post_format() );

                endwhile; // End of the loop.
            ?>
            <div class="col-sm-12 text-center loadmore-btn-wrap">
                <a href="#" class="btn btn-success btn-loadmore">Load More</a>
            </div><!-- /.col-sm-12 text-center loadmore-btn-wrap -->
            <?php else :

                get_template_part( 'template-parts/content', 'none' );

            endif;
            ?>

        </main><!-- #main -->
    </div><!-- #primary -->
</div>


<?php
//get_sidebar();
get_footer();
