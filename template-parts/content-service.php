<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package amf
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>
	<header class="entry-header col-md-8 col-md-push-2 col-sm-12">
		<?php
		if ( is_single() ) :
			the_title( '<h2 class="entry-title">', '</h2>' );
		else :
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		endif;

        ?>
	</header><!-- .entry-header -->

	<div class="entry-content col-md-8 col-md-push-2 col-sm-12">
		<?php
			the_field('service_content');
		?>
	</div><!-- .entry-content -->

</article><!-- #post-## -->
