<?php
/**
 * Template part for displaying blog posts content in single.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package amf
 */

$page_title = get_post_meta($post->ID,'page title', true);
?>

<article id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>
    <header class="entry-header col-sm-12">
        <?php the_title( sprintf( '<h3 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h3>' ); ?>

        <?php if ( 'post' == get_post_type() ) : ?>

            <div class="post-details">
                <i class="fa fa-folder"></i> <?php the_category(', '); ?>
                <i class="fa fa-tags"></i> <?php the_tags('', ', ', ''); ?>

            </div><!--post-details-->

        <?php endif; ?>
    </header><!-- .entry-header -->
    <div class="col-md-8 col-sm-12" id="the_content">

            <?php the_content();?>

        <!--end excerpt-->
    </div>
    <!-- /.col-md-8 co -sm-12 -->
    <div class="col-md-4 col-sm-12 sidebar">
        <?php get_sidebar();?>
    </div>
    <!-- /.col-md-4 col-sm-12 sidebar -->
</article><!-- #post-## -->
