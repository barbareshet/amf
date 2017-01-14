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

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer section" role="contentinfo">
		<?php get_template_part('template-parts/globals/content','bottom-nav-page');?>
        <div class="container">
            <div class="row">
                <div class="col-md-3" id="footer-widget-1">
                    <?php if(is_active_sidebar('footer-1')){
                        dynamic_sidebar('footer-1');
                    }
                    ?>
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
        </div><!--/.container-->
		<div class="site-info container" style="text-align: center;">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'amf' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'amf' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'amf' ), 'amf', '<a href="https://automattic.com/" rel="designer">Ido Barnea</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
