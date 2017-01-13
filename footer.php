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
		<div class="site-info container">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'amf' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'amf' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'amf' ), 'amf', '<a href="https://automattic.com/" rel="designer">Ido Barnea</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
