<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package amf
 */

$page_title = get_post_meta($post->ID,'page title', true);
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>
	<header class="entry-header col-sm-12">

		<?php
		if($page_title){
			echo "<h1>{$page_title}</h1>";
		} else{
		the_title( '<h1 class="entry-title">', '</h1>' );
		}?>
	</header><!-- .entry-header -->

	<div class="entry-content col-sm-12">
		<?php
			the_content();


		?>
	</div><!-- .entry-content -->

	<?php if ( get_edit_post_link() ) : ?>
		<footer class="entry-footer">
			<?php
				edit_post_link(
					sprintf(
						/* translators: %s: Name of current post */
						esc_html__( 'Edit %s', 'amf' ),
						the_title( '<span class="screen-reader-text">"', '"</span>', false )
					),
					'<span class="edit-link">',
					'</span>'
				);
			?>
		</footer><!-- .entry-footer -->
	<?php endif; ?>
</article><!-- #post-## -->
