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
	<div class="col-md-6 col sm-12 contact-form-wrap">
		<header class="entry-header">

			<?php
			if($page_title){
				echo "<h1>{$page_title}</h1>";
			} else{
				the_title( '<h1 class="entry-title">', '</h1>' );
			}?>
		</header><!-- .entry-header -->
		<div class="contact-form">

		</div>
		<!-- /.contact-form -->
	</div>
	<!-- /.col-md-6 col sm-12 contact-form -->

	<div class="entry-content col-md-6 col-sm-12 map-info">
	



	</div><!-- .entry-content -->


</article><!-- #post-## -->
