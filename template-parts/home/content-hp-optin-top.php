<section id="hp-optin-top">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12 form-wrap" id="hp-form">
                <?php if(is_active_sidebar('hp-optin-top')){
                    dynamic_sidebar('hp-optin-top');
                }
                ?>
            </div>
            <div class="col-md-8 col-sm-12 cta-wrap" id="hp-cta">
                <h3 class="cta-title"><?php the_field('hp_optin_title');?></h3>
                <div cta-desc> <?php the_field('hp_optin_text');?></div>
                <div class="cta-btn">
                    <a href="<?php the_field('hp_optin_link');?>" class="btn btn-success hp-optin-btn">
                        <?php the_field('hp_optin_btn_text');?>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>