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
