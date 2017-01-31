<?php
/**
 * Created by PhpStorm.
 * User: ido
 * Date: 1/15/2017
 * Time: 8:01 AM
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>
    <header class="entry-header col-sm-12">

<!--        --><?php
//        if($page_title){
//            echo "<h1>{$page_title}</h1>";
//        } else{
//            the_title( '<h1 class="entry-title">', '</h1>' );
//        }?>
    </header><!-- .entry-header -->

    <div class="entry-content col-md-8 col-md-push-2 col-sm-12">
        <?php
        the_content();

        ?>
    </div><!-- .entry-content -->

    <?php if ( get_edit_post_link() ) : ?>

    <?php endif; ?>
</article><!-- #post-## -->