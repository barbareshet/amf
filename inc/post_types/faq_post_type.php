<?php
/**
 * Created by PhpStorm.
 * User: ido
 * Date: 1/10/2017
 * Time: 9:30 AM
 */


function faq_post_type(){
    $labels = array(
        'name' => _x('faq items', 'Post Type General Name', 'amf'),
        'singular_name' => _x('faq Item', 'Post Type Singular Name', 'amf'),
        'menu_name' => __('FAQ', 'amf'),
        'name_admin_bar' => __('faq', 'amf'),
        'archives' => __('faq items Archives', 'amf'),
        'parent_item_colon' => __('Parent Item:', 'amf'),
        'all_items' => __('All faq items', 'amf'),
        'add_new_item' => __('Add New faq Item', 'amf'),
        'add_new' => __('Add faq Item', 'amf'),
        'new_item' => __('New faq Item', 'amf'),
        'edit_item' => __('Edit faq Item', 'amf'),
        'update_item' => __('Update faq Item', 'amf'),
        'view_item' => __('View faq Item', 'amf'),
        'search_items' => __('Search faq Item', 'amf'),
        'not_found' => __('faq Item Not found', 'amf'),
        'not_found_in_trash' => __('faq Item Not found in Trash', 'amf'),
        'featured_image' => __('Featured Image', 'amf'),
        'set_featured_image' => __('Set featured image', 'amf'),
        'remove_featured_image' => __('Remove featured image', 'amf'),
        'use_featured_image' => __('Use as featured image', 'amf'),
        'uploaded_to_this_item' => __('Uploaded to this item', 'amf'),
        'items_list' => __('faq items list', 'amf'),
        'items_list_navigation' => __('faq items list navigation', 'amf'),
        'filter_items_list' => __('Filter faq items list', 'amf'),
    );
    $args = array(
        'label' => __('FAQ', 'amf'),
        'description' => __('FAQ Description', 'amf'),
        'labels' => $labels,
        'supports' => array('title'),
        'taxonomies' => array(),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 25,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => false,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'menu_icon' => 'dashicons-welcome-learn-more',
        'capability_type' => 'post',
    );
    register_post_type('faq items', $args);
}
add_action('init', 'faq_post_type', 0);