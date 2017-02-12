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
	<div class="col-md-8 col-md-offset-2 col sm-12 comment-form-wrap">
		<header class="entry-header text-center">

			<?php
			if($page_title){
				echo "<h2>{$page_title}</h2>";
			} else{
				the_title( '<h2 class="entry-title">', '</h2>' );
			}?>
		</header><!-- .entry-header -->
		<div class="contact-form">

			<?php the_content();?>
            
            <!-- /.row -->
		</div>
		<!-- /.contact-form -->
	</div>
	<!-- /.comment-form-wrap -->




</article><!-- #post-## -->
