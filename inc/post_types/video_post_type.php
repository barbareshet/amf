<?php
/**
 * Created by PhpStorm.
 * User: ido
 * Date: 1/10/2017
 * Time: 9:30 AM
 */


function video_post_type(){
    $labels = array(
        'name' => _x('videos', 'amf'),
        'singular_name' => _x('video', 'amf'),
        'menu_name' => __('Video Gallery', 'amf'),
        'name_admin_bar' => __('video gallery', 'amf'),
        'archives' => __('video  Archives', 'amf'),
        'parent_item_colon' => __('Parent Item:', 'amf'),
        'all_items' => __('All videos', 'amf'),
        'add_new_item' => __('Add New video', 'amf'),
        'add_new' => __('Add video', 'amf'),
        'new_item' => __('New video', 'amf'),
        'edit_item' => __('Edit video', 'amf'),
        'update_item' => __('Update video', 'amf'),
        'view_item' => __('View video', 'amf'),
        'search_items' => __('Search a video', 'amf'),
        'not_found' => __('video Not found', 'amf'),
        'not_found_in_trash' => __('video Not found in Trash', 'amf'),
        'featured_image' => __('Featured Image', 'amf'),
        'set_featured_image' => __('Set featured image', 'amf'),
        'remove_featured_image' => __('Remove featured image', 'amf'),
        'use_featured_image' => __('Use as featured image', 'amf'),
        'uploaded_to_this_item' => __('Uploaded to this item', 'amf'),
        'items_list' => __('videos list', 'amf'),
        'items_list_navigation' => __('videos list navigation', 'amf'),
        'filter_items_list' => __('Filter videos list', 'amf'),
    );
    $args = array(
        'label' => __('video Gallery', 'amf'),
        'description' => __('video Gallery Description', 'amf'),
        'labels' => $labels,
        'supports' => array('title'),
        'taxonomies' => array('category'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 24,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'menu_icon' => 'dashicons-video-alt3',
        'capability_type' => 'post',
    );
    register_post_type('videos', $args);
}
add_action('init', 'video_post_type', 0);