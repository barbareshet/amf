<?php
/**
 * template name: About page
 * The template for displaying about page
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
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'about' );


			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
        <div class="container">
            <div class="row benefits-section-title-wrap">
                <div class="col-sm-12 text-center">
                    <h2 class="section-title">
                        <?php the_field('about_benefits_section_title')?>
                    </h2>
                </div>
            </div>
            <div class="row" id="benefits">
                <div class="col-md-8 col-md-offset-2 col-sm-12 inner-container">


                <?php

                // check if the repeater field has rows of data
                if( have_rows('about_benefits') ):

                    // loop through the rows of data
                    while ( have_rows('about_benefits') ) : the_row();
                $about_benefits_icon = get_sub_field('about_benefits_icon');

                ?>
                        <div class="row inner-row">

                            <div class="col-sm-4 benefit-img">
                                <img src="<?php echo $about_benefits_icon['url'];?>" alt="<?php echo $about_benefits_icon['alt'];?>">
                            </div>
                            <div class="col-sm-8 benefit-text-wrap">
                                <div class="row">
                                    <div class="col-sm-12 benefit-title-wrap">
                                        <h3 class="benefit-title">
                                            <?php the_sub_field('about_benefits_title');?>
                                        </h3>
                                    </div>
                                    <div class="col-sm-12 benefit-content">
                                        <p class="lead benefit-text">
                                            <?php the_sub_field('about_benefits_description');?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endwhile;

                else :

                    // no rows found

                endif;

                ?>
            </div>
            </div>
        </div>
	</div><!-- #primary -->

<?php

get_footer();
