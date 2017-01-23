<?php
/**
 * Created by PhpStorm.
 * User: USER
 * Date: 1/14/2017
 * Time: 10:56 PM
 */
?>
<div class="navmenu navmenu-default navmenu-fixed-left offcanvas" role="navigation">
    <?php $logo = get_field('site_logo_small', 'options')?>
    <a class="navmenu-brand" href="<?php echo home_url('/'); ?>"><img src="<?php echo $logo['url'];?>" alt="<?php echo $logo['alt']; ?>"></a>
    <?php wp_nav_menu( array(
            'theme_location' => 'primary',
            'menu_id' => 'primary-menu',
            'menu_class' => 'nav navmenu-nav')
    ); ?>


</div>

<div class="navbar navbar-default navbar-fixed-top" id="nav-btn">
    <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".navmenu" data-canvas="body">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
    </button>
    <button type="button" class="navbar-toggle menu-text" data-toggle="offcanvas" data-target=".navmenu" data-canvas="body">Menu</button>
</div>
