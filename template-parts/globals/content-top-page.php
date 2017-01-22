<?php
$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
$thumbnail_url = get_field('top_image_link');
$page_title = get_post_meta($post->ID,'page title', true);
if (has_post_thumbnail() ){//check for feature image?>
    <section class="top-page feature-image" style="background:url('<?php the_post_thumbnail_url('top-image-pages');?>') 50% 50% no-repeat; background-size: cover;">
        <?php get_template_part('template-parts/globals/content', 'topbar');?>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 top-page-title-wrap">
                    <?php
                    if($page_title){
                        echo "<h1>{$page_title}</h1>";
                    } elseif(is_singular('services') && $page_title = get_field('service_name')){

                        echo "<h1 class='entry-title'>{$page_title}</h1>";
                    }else{
                        the_title( '<h1 class="entry-title">', '</h1>' );
                    }?>
                    <?php $secondary_title = get_field('secondary_title');
                        if($secondary_title) :?>
                            <div class="secondary-title lead">
                                <?php echo $secondary_title;?>
                            </div>
                     <?php else: ?>
                            <div class="secondary-title lead">
                                <?php the_field('service_description');?>
                            </div>
                     <?php endif;?>
                </div>
            </div>
        </div>
    </section>

<?php }else {//fallback / default image?>
    <section class="top-page feature-image-default" style="background:url('<?php the_post_thumbnail_url("top-image-pages");?>') 50% 50% no-repeat; background-size: cover;">
        <?php get_template_part('template-parts/globals/content', 'topbar');?>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 top-page-title-wrap">
                    <?php
                    if($page_title){
                        echo "<h1>{$page_title}</h1>";
                    } elseif(is_singular('services') && $page_title = get_field('service_name')){

                        echo "<h1 class='entry-title'>{$page_title}</h1>";
                    }else{
                        the_title( '<h1 class="entry-title">', '</h1>' );
                    }?>
                    <?php $secondary_title = get_field('secondary_title');
                    if($secondary_title) :?>
                        <div class="secondary-title lead">
                            <?php echo $secondary_title;?>
                        </div>
                    <?php else: ?>
                        <div class="secondary-title lead">
                            <?php the_field('service_description');?>
                        </div>
                    <?php endif;?>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
