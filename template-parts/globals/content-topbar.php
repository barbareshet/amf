<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 1/9/2017
 * Time: 9:29 PM
 */



?>

<div class="container" id="topbar">
    <div class="row">
        <div class="col-md-3 col-sm-12 logo">
                <?php $logo = get_field('site_logo_big', 'options')?>
            <a class="topbar-brand" href="<?php echo home_url('/'); ?>"><img src="<?php echo $logo['url'];?>" alt="<?php echo $logo['alt']; ?>"></a>
        </div>
        <div class="col-md-6 col-sm-12 phone-num">
            <i class="fa fa-phone"></i><a href="tel:<?php the_field('company_phone', 'options');?>"><?php the_field('company_phone', 'options');?></a>
        </div>
    </div>
</div>
