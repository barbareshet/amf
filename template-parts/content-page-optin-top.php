<?php
/**
 * Created by PhpStorm.
 * User: ido
 * Date: 1/15/2017
 * Time: 8:07 AM
 */

?>
<section class="top-page-optin" id="top-optin">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center about-optin-content">
                <h2 class="about-optin-title">
                    <?php the_field('optin_title');?>
                </h2>
                <p class="about-optin-text">
                    <?php the_field('optin_desc');?>
                </p>
            </div>
        </div>
        <div class="row top-optin-btn-wrap">
            <div class="col-sm-6 col-xs-12 quote-btn-wrap">
                <a href="<?php the_field('optin_btn_left_link');?>" class="btn quote-btn btn-info">
                    <?php the_field('optin_btn_left_text');?>
                </a>
            </div>
            <div class="col-sm-6 col-xs-12 book-btn-wrap text-left">
                <a href="<?php the_field('optin_btn_right_link');?>" class="btn book-btn btn-info">
                    <?php the_field('optin_btn_right_text');?>
                </a>
            </div>
        </div>
    </div>
</section>
