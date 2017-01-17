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
<!--	<header class="entry-header col-sm-12">-->
<!--		--><?php
//		if ( is_single() ) :
//			the_title( '<h1 class="entry-title">', '</h1>' );
//		else :
//			the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
//		endif;
//
//        ?>
<!--	</header><!-- .entry-header -->

	<div class="entry-content col-sm-12">
		<?php
			the_content();
		?>


                <?php
                    $videos = get_field('videos_to_show');
//                    var_dump($videos);
                if($videos) :?>
                <?php foreach ($videos as $video) :?>
                    <div class="col-md-4 col-sm-6 col-xs-12 video-warp panel">
                        <a href="<?php echo get_the_permalink($video->ID);?>">
                            <div class="video-wrap">
                                <iframe width="400" height="225" src="https://www.youtube.com/embed/<?php the_field('video_url', $video->ID); ?>"?rel=0&amp;controls=0" frameborder="0" allowfullscreen></iframe>
                            </div>
                           <h4 class="video-title">
                               <?php the_field('video_title', $video->ID); ?>
                           </h4>
                        </a>
                            <div class="video-desc-wrap">
                                <?php the_field('video_description', $video->ID); ?>
                            </div>

                    </div>
                <?php endforeach; ?>
                <?php endif;

                ?>



	</div><!-- .entry-content -->

</article><!-- #post-## -->
