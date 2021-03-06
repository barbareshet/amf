<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 1/9/2017
 * Time: 9:29 PM
 */



?>

<div class="container-fluid" id="topbar">
    <div class="row-fluid">
        <div class="col-md-3 col-sm-12 logo">
                <?php $logo = get_field('site_logo_big', 'options')?>
            <a class="topbar-brand" href="<?php echo home_url('/'); ?>">
                <img src="<?php echo $logo['url'];?>" alt="<?php echo $logo['alt']; ?>">
            </a>
        </div>
        <div class="col-md-5 col-sm-12 phone-num text-center">
            <i class="fa fa-phone"></i>
            <a href="tel:<?php the_field('company_phone', 'options');?>">
                <?php the_field('company_phone', 'options');?>
            </a>
        </div>
        <div class="col-md-4 hidden-sm hidden-xs contact-btns">
            <div class="row">
                <div class="col-md-6 comment-btn-wrap text-right">
                    <a href="<?php the_field('comment_btn_link', 'options');?>" class="btn btn-default comment-btn">
                        <?php the_field('comment_btn_text', 'options');?>
                    </a>
                    <!-- /.btn btn-default comment-btn -->
                </div>
                <!-- /.col-md-6 col-sm-12 comment-btn-wrap -->
                <div class="col-md-6 contact-btn-wrap">
                    <a href="<?php the_field('contact_btn_link', 'options');?>" class="btn btn-default contact-btn">
                        <?php the_field('contact_btn_text', 'options');?>
                    </a>
                    <!-- /.btn btn-default comment-btn -->
                </div>
                <!-- /.col-md-6 col-sm-12 comment-btn-wrap -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /.col-md-3 col-sm-12 contact-btns -->
    </div>
</div>
