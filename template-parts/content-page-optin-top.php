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
                <h2 class="about-optin-title"><?php the_field('optin_title');?></h2>
                <p class="about-optin-text"><?php the_field('optin_desc');?></p>
            </div>
        </div>
        <div class="row about-optin-btn-wrap">
            <div class="col-sm-6 col-xs-6 quote-btn text-right">
                <a href="<?php the_field('optin_btn_left_link');?>" class="btn btn-lg btn-info"><?php the_field('optin_btn_left_text');?></a>
            </div>
            <div class="col-sm-6 col-xs-6 book-btn text-left">
                <a href="<?php the_field('optin_btn_right_link');?>" class="btn btn-lg btn-info"><?php the_field('optin_btn_right_text');?></a>
            </div>
        </div>
    </div>
</section>
