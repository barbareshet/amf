<?php
/**
 * Created by PhpStorm.
 * User: ido
 * Date: 1/25/2017
 * Time: 7:13 AM
 */

?>
<div class="row before-after-gallery">
     <div class="entry-content col-sm-12">
        <h3 class="b4a-title">
            <?php the_sub_field('collection_name');?>
        </h3>
        <div class="lead">
            <?php the_sub_field('collection_desc');?>
        </div>
        <div class="b4a-gal-wrap">
           <?php
            
            $images = get_field('collection_images');
                var_dump($images);
            wp_die();
if( $images ): ?>
    <ul>
        <?php foreach( $images as $image ): ?>
            <li>
<!--                <a href="<?php echo $image['url']; ?>">-->
                     <img class="fancybox" src="<?php echo $image['sizes']['thumbnail']; ?>" alt="<?php echo $image['alt']; ?>" />
<!--                </a>-->
                <p><?php echo $image['caption']; ?></p>
            </li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>
            
        </div><!--.b4a-gal-wrap-->
    </div>
</div>
