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
	<div class="col-md-8 col-md-push-2 col sm-12 contact-form-wrap">
		<header class="entry-header entry-title">

			<?php
//			if($page_title){
//				echo "<h2>{$page_title}</h2>";
//			} else{
//				the_title( '<h2 class="entry-title">', '</h2>' );
//			}?>
		</header><!-- .entry-header -->
		<?php the_content();?>
    </div><!-- /.sm-12 contact-form -->




</article><!-- #post-## -->
