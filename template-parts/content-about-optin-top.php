<?php
/**
 * Created by PhpStorm.
 * User: ido
 * Date: 1/15/2017
 * Time: 8:07 AM
 */

?>
<div class="section" id="about-optin">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center about-optin-content">
                <h2 class="about-optin-title"><?php the_field('about_optin_title');?></h2>
                <p class="about-optin-text"></p>
            </div>
        </div>
        <div class="row about-optin-btn-wrap">
            <div class="col-sm-6 quote-btn text-right">
                <a href="<?php the_field('about_optin_btn_left_link');?>" class="btn btn-lg btn-info"><?php the_field('about_optin_btn_left_text');?></a>
            </div>
            <div class="col-sm-6 book-btn text-left">
                <a href="<?php the_field('about_optin_btn_right_link');?>" class="btn btn-lg btn-info"><?php the_field('about_optin_btn_right_text');?></a>
            </div>
        </div>
    </div>
</div>
