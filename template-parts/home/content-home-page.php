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
			echo "<h2 class=\"entry-title section-title\">{$page_title}</h2>";
		} else{
		the_title( '<h2 class="entry-title section-title">', '</h2>' );
		}?>
	</header><!-- .entry-header -->

	<div class="entry-content col-sm-12">
		<?php
		if(is_front_page() ){

			the_field('home_page_content');
		}else{

			the_content();
		}


		?>
	</div><!-- .entry-content -->


</article><!-- #post-## -->
