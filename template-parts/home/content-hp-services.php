<?php

$photo = get_field('photo', $service->ID);



    $services = get_posts(array(
    'post_type' => 'services',
    'meta query' => array(
    array(
    'key' => 'service_name',
    'value' => '"' . get_the_ID() . '"',
    )
    )
    ));
    if( $services ): ?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 section-title-wrap">
                <h3 class="section-title"><?php the_field('hp_services_title');?></h3>
            </div>
            <?php foreach( $services as $service ):?>
                <div class="service-card panel col-md-3 col-sm-6 col-xs-12">
                    <a href="<?php echo get_permalink( $service->ID ); ?>">
                        <img src="<?php echo $photo['url']; ?>" alt="<?php echo $photo['alt']; ?>" width="30" />
                        <?php echo get_the_title( $service->ID ); ?>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
<?php endif; ?>