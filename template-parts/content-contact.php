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
		<header class="entry-header entry-title">

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
	<!-- /.col-md-6 col sm-12 contact-form -->

	<div class="entry-content col-md-6 col-sm-12 map-info">

			<?php the_field('company_location','options');?>

	</div><!-- .entry-content -->


</article><!-- #post-## -->
