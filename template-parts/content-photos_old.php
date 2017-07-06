<?php
/**
 * Created by PhpStorm.
 * User: ido
 * Date: 1/25/2017
 * Time: 7:13 AM
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class('row'); ?>>

<div class="entry-content col-sm-12">

    <?php
    $images = get_field('moving_gallery');
    if( $images ):

        ?>
        <ul class="grid effect-2" id="grid">
             <?php foreach( $images as $key => $image ):
                 $key++;
                 ?>
                <li class="image-<?php echo $key ;?>">
                    <a href="<?php echo $image['url']; ?>">
                        <img src="<?php echo $image['sizes']['medium_large']; ?>" alt="<?php echo $image['alt']; ?>" />
                    </a>
                    <p><?php echo $image['caption']; ?></p>
                </li>
                <?php
                 ;?>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</div>
</article><!-- #post-## -->
