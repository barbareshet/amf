<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package amf
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">

<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'amf' ); ?></a>
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
	</div>


	<div id="content" class="site-content">
