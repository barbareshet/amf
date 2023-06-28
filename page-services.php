<?php
/**
 * template name: Page Services
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
$services_title = get_field('services_title');


?>

	<div id="primary" class="content-area section">
		<main id="main" class="site-main container" role="main">
			<?php if ($services_title) { ?>
            	<div class="row">
                <div class="col-md-8 col-md-offset-2 col-sm-12 text-center">
                    <h2><?php echo $services_title;?></h2>
                    <hr class="divider">
                    <!-- /.divider -->
                </div>
                <!-- /.col-md-8 col-sm-12 text-center -->
            </div>
			
			<?php } ?>
            <div class="row">
            <!-- /.row -->
                <?php
                $args = array(
                    'post_type'			=>	'services',
                    'posts_per_page'	=>	-1,
                    'orderby'			=>	'menu_order'

                );
                $sQuery = new WP_Query($args);
                if( $sQuery->have_posts() ) :
                    $i = 1;

                    while ( $sQuery->have_posts() ) : $sQuery->the_post();
                        if($i == 1 || $i == 2 || $i == 9 || $i == 10){
                            $service_card_classes = 'col-md-6 col-sm-6 col-xs-6';
                        }else{
                            $service_card_classes = 'col-md-4 col-sm-6 col-xs-6';
                        }
                        ?>
                        <div class="service-card panel panel-default <?php echo $service_card_classes;?>">
                            <div class="thumbnail">

                                    <?php if (has_post_thumbnail()):;?>
                                        <?php the_post_thumbnail();?>
                                    <?php endif;?>

                                <a href="<?php echo get_permalink( ); ?>">
                                    <h3 class="service-card-title">
                                        <?php the_field('service_name'); ?>

                                    </h3>
                                </a>
                                <?php
                                if($i == 1 || $i == 2 || $i == 9 || $i == 10){?>
                                    <div class="service-excerpt">
                                        <?php the_field('service_description');?>
                                    </div>
                               <?php } else {

                                }
                                ?>

                                    <!-- /.service-excerpt -->

                            </div>
                            <!-- /.thumbnail -->
                            <!-- /.overlay -->
                        </div>



                    <?php $i++; endwhile; // End of the loop.
                    wp_reset_query();
                endif;
                ?>
            </div><!-- /.row -->
            <div class="row">
                <div class="col-sm-12">
                    <?php the_content();?>
                </div>
            </div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
