<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package amf
 */
get_template_part('template-parts/globals/content', 'bottom-optin-page');
get_template_part('template-parts/content', 'testimonials');
$footer_socials = get_field('socials','option');
$socials_section_title = get_field('socials_section_title', 'option');
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer container-fluid" role="contentinfo">
		<?php get_template_part('template-parts/globals/content','bottom-nav-page');?>
        <div class="container">
            <div class="row-fluid">
                <div class="col-md-3" id="footer-widget-1">
<!--                    --><?php //if(is_front_page()):?>
<!--                    <div id="schema">-->
<!--                        --><?php //get_template_part( 'template-parts/globals/content', 'schema' );?>
<!--                    </div>-->
<!--                    --><?php //else:?>
<!--                    --><?php //if(is_active_sidebar('footer-1')){
//                        dynamic_sidebar('footer-1');
//                    }
//                    ?>
<!--                    --><?php //endif;?>
                </div>
                <div class="col-md-3" id="footer-widget-2">
                    <?php if(is_active_sidebar('footer-2')){
                        dynamic_sidebar('footer-2');
                    }
                    ?>
                </div>
                <div class="col-md-3" id="footer-widget-3">
                    <?php if(is_active_sidebar('footer-3')){
                        dynamic_sidebar('footer-3');
                    }
                    ?>
                </div>
                <div class="col-md-3" id="footer-widget-4">
                    <?php if(is_active_sidebar('footer-4')){
                        dynamic_sidebar('footer-4');
                    }
                    ?>
                </div>
            </div><!--/.row-->
            <?php
            if ( is_user_logged_in() && current_user_can('administrator')){
                if ( have_rows('socials','option') ){ ?>
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12 text-center">
                                <?php if ( !empty( $socials_section_title ) ) { ?>
                                    <h4 class="socials-title">
                                        <?php echo $socials_section_title;?>
                                    </h4>
                                <?php } ?>
                                <ul class="footer-socials list-inline">
                                    <?php while ( have_rows('socials','option')){
                                        the_row();
                                        $social = [
                                            'name' => get_sub_field('name', 'option'),
                                            'icon' => get_sub_field('icon', 'option'),
                                            'link' => get_sub_field('link', 'option'),
                                        ];?>
                                        <li class="footer-social-item">
                                            <a href="<?php echo $social['link'];?>" class="footer-social-item-link text-black" target="_blank" title="<?php echo $social['name'];?>">
                                                <i class="fa fa-<?php echo strtolower($social['icon']);?>"></i>
                                            </a>
                                        </li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php }
            }
            ?>
            <div class="site-info row" style="text-align: center;">
                <?php printf( esc_html__( 'All Right Reserved %1$s', 'amf' ), '&copy;' ); ?>
                <span class="sep"> | </span>
                <?php printf( esc_html__( '%s | %2$s.', 'amf' ), date('Y'), get_bloginfo('name') ); ?>
            </div><!-- .site-info -->
        </div><!--/.container-->
	</footer><!-- #colophon -->
</div><!-- #page -->
<a href="#header" class="scrollup" style="display: block;"><i class="fa fa-chevron-up"></i></a>
<?php wp_footer(); ?>
<script>
    new AnimOnScroll( document.getElementById( 'grid' ), {
        minDuration : 0.4,
        maxDuration : 0.7,
        viewportFactor : 0.3
    } );
</script>

</body>
</html>
