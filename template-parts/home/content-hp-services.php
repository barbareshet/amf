<?php


    $services = get_field('hp_services');
    if( $services ):
        ;?>
    <div class="container">
        <div class="row">
            <div class="col-sm-12 section-title-wrap">
                <h3 class="section-title"><?php the_field('hp_services_title');?></h3>
            </div>
            <?php foreach( $services as $service ):
                       ?>
                <div class="service-card panel panel-default col-md-3 col-sm-6 col-xs-12">
                    <a href="<?php echo get_permalink( $service->ID ); ?>">
                        <?php $photo = get_field('service_image', $service->ID);?>
                        <img src="<?php echo $photo['url']; ?>" alt="" />

                        <h3 class="card-title">
                            <?php echo get_the_title( $service->ID ); ?>
                        </h3>
                    </a>
                </div>
            <?php endforeach; ?>
        </div>

    </div>
<?php endif; ?>