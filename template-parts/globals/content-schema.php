<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 2/3/2017
 * Time: 12:00 AM
 */

?>
<div id="footer-disclaimer">

    <div itemscope itemtype="http://schema.org/<?php echo get_theme_mod(__('schema_type'));?>">
        <ul class="footer-list">
            <li>
                <div class="footer-logo">
                    <a itemprop="url" href="<?php echo get_home_url(); ?>" alt="<?php echo get_bloginfo('name'); ?>"  title="<?php echo get_bloginfo('name'); ?>">
                        <span itemprop="logo" itemtype="https://schema.org/ImageObject">
                            <img src="<?php echo get_theme_mod('schema_logo', get_template_directory_uri() . '/assets/img/logo_small.png') ;?>" alt="<?php echo get_bloginfo('name'); ?>" itemprop="image">
                        </span>
                    </a>
                </div>
            </li>

            <li>
                <div class="footer-company-info">
                    <span itemprop="name"><?php echo get_theme_mod(__('schema_brand_name')); ?></span><br>
                    <span itemprop="description"><?php echo get_theme_mod(__('schema_brand_description')); ?></span>
                </div>
            </li>
            <li class="inline-block">
                <div class="footer-address">
                    <div class="description" itemprop="address" itemscope itemtype="http://schema.org/PostalAddress">
                        <i class="fa fa-home">&nbsp</i>
                        <span itemprop="streetAddress"><?php echo get_theme_mod(__('schema_street_address')); ?></span>,<br>
                        <span itemprop="addressLocality"><?php echo get_theme_mod(__('schema_city')); ?>, </span>
                        <span itemprop="addressRegion"><?php echo get_theme_mod(__('schema_region')); ?>, </span>
                        <span itemprop="postalCode"><?php echo get_theme_mod(__('schema_zip')); ?></span>
                    </div>
                </div>
            </li>
            <li class="inline-block">
                <div class="footer-phone"><i class="fa fa-phone">&nbsp</i>
                    <span itemprop="telephone"><?php echo get_theme_mod('schema_phone_number');?></span>

                </div>
            </li>

        </ul>
        <div class="footer-social-icons">
            <a href="<?php echo get_theme_mod('facebook_url_field');?>" class="icon socialfb" target="_blank"><i class="fa fa-facebook"></i></a>
            <a href="<?php echo get_theme_mod('twitter_url_field');?>" class="icon socialtw" target="_blank"><i class="fa fa-twitter"></i></a>
            <a href="<?php echo get_theme_mod('google_plus_url_field');?>" class="icon socialgo" target="_blank"><i class="fa fa-google-plus"></i></a>
            <a href="<?php echo get_theme_mod('yelp_url_field');?>" class="icon socialgo" target="_blank"><i class="fa fa-yelp"></i></a>
        </div>

        <div class="clear"></div>
    </div>



</div><!-- #footer-disclaimer -->


