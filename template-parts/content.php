<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package amf
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('col-md-4 col-sm-6 col-xs-12'); ?>>
	<div class="blog-post">
        <?php if (has_post_thumbnail() ) ://check for feature image?>
        <div class="post-image">
            <?php the_post_thumbnail();?>
        </div><!--end post-image-->
        <?php endif;?>
		<header class="entry-header">
			<?php
			if ( is_singular() ) :
				the_title( '<h3 class="entry-title">', '</h3>' );
			else :
				the_title( '<h4 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
			endif;

			if ( 'post' === get_post_type() ) : ?>
				<div class="entry-meta">
					<?php amf_posted_on(); ?>
				</div><!-- .entry-meta -->
				<?php
			endif; ?>
		</header><!-- .entry-header -->
		<div class="entry-content">
			<?php
			the_excerpt();
			?>
		</div><!-- .entry-content -->


	</div>
	<!-- /.col-md-3 col-sm-6 col-xs-12 blog-post -->

</article><!-- #post-## -->
