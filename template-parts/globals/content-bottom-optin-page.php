<section id="bottom-optin">
    <div class="container">
        <div class="row" id="botoom-optin-top">
            <div class="col-sm-12 bottom-optin-text">
            <h3 class="section-title bottom-optin-title"><?php the_field('bottom_optin_title','options');?></h3>
            <div class="bottom-optin-content"><?php the_field('bottom_optin_text','options');?></div>
            </div>

        </div>
    </div>
</section>
<section id="botom-certificates">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-12 certificates-images">
                <div class="row">

                    <?php

                    // check if the repeater field has rows of data
                    if( have_rows('botom_optin_images','options') ):

                        // loop through the rows of data
                        while ( have_rows('botom_optin_images','options') ) : the_row();
                            $cert_img = get_sub_field('certificate_img','options');
                            ?>

                            <div class="col-md-3 col-sm-3 col-xs-6 certificate-img">
                                <a href="<?php the_sub_field('certificate_link');?>">
                                    <img src="<?php echo $cert_img['url'];?>" alt="<?php echo $cert_img['alt'];?>">
                                </a>
                            </div>

                        <?php    endwhile;

                    else :

                        // no rows found

                    endif;

                    ?>
                </div>
            </div>
            <div class="col-md-3 col-sm-hidden" id="truck-bg">

            </div>
        </div>
    </div>
</section>