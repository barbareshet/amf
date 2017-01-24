<?php
/**
 * 	template name: Photo Gallery
 *
 *
 * The template for displaying video gallery
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package amf
 */

get_header();
get_template_part('template-parts/globals/content', 'top-page');
get_template_part('template-parts/content', 'page-optin-top');
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main container" role="main">

            <?php
			$images = get_field('moving_gallery');
			if( $images ):
                $count = 1;
                ?>
				<div class="grid" id="moving-gallery">
					<?php foreach( $images as $image ): ?>
						<div class="grid-item">
							<a href="<?php echo $image['url']; ?>">
								<img src="<?php echo $image['sizes']['service-image']; ?>" alt="<?php echo $image['alt']; ?>" />
							</a>
							<p><?php echo $image['caption']; ?></p>
						</div>
					<?php endforeach; ?>
				</div>
			<?php endif; ?>
		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
