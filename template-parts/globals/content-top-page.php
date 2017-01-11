<?php
$thumbnail_url = wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) );
$thumbnail_url = get_field('top_image_link');
if (has_post_thumbnail() ){//check for feature image?>
    <section class="top-page feature-image" style="background:url('<?php the_post_thumbnail_url("top-image-pages");?>') 50% 50% no-repeat; background-size: cover;" data-type="background" data-speed="2">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 top-page-title-wrap">
                    <h1 class="page-title"><?php the_title();?></h1>
                </div>
            </div>
        </div>
    </section>

<?php }else {//fallback / default image?>
    <section class="top-page feature-image-default" data-type="background" data-speed="2">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h1 class="page-title"><?php the_title();?></h1>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
