<?php
/**
 * Created by PhpStorm.
 * User: ido
 * Date: 1/10/2017
 * Time: 9:19 AM
 */
// Register Custom Post Type
//Custom Post Types
function services_post_type() {
    $labels = array(
        'name'                  => _x( 'Services', 'Post Type General Name', 'amf' ),
        'singular_name'         => _x( 'Service', 'Post Type Singular Name', 'amf' ),
        'menu_name'             => __( 'Services', 'amf' ),
        'name_admin_bar'        => __( 'Services', 'amf' ),
        'archives'              => __( 'Services Archives', 'amf' ),
        'parent_item_colon'     => __( 'Parent Item:', 'amf' ),
        'all_items'             => __( 'All Services', 'amf' ),
        'add_new_item'          => __( 'Add New Service', 'amf' ),
        'add_new'               => __( 'Add Service', 'amf' ),
        'new_item'              => __( 'New Service', 'amf' ),
        'edit_item'             => __( 'Edit Service', 'amf' ),
        'update_item'           => __( 'Update Service', 'amf' ),
        'view_item'             => __( 'View Service', 'amf' ),
        'search_items'          => __( 'Search Service', 'amf' ),
        'not_found'             => __( 'Service Not found', 'amf' ),
        'not_found_in_trash'    => __( 'Service Not found in Trash', 'amf' ),
        'featured_image'        => __( 'Featured Image', 'amf' ),
        'set_featured_image'    => __( 'Set featured image', 'amf' ),
        'remove_featured_image' => __( 'Remove featured image', 'amf' ),
        'use_featured_image'    => __( 'Use as featured image', 'amf' ),
        'insert_into_item'      => __( 'Insert into Service', 'amf' ),
        'uploaded_to_this_item' => __( 'Uploaded to this Service', 'amf' ),
        'items_list'            => __( 'Service list', 'amf' ),
        'items_list_navigation' => __( 'Service list navigation', 'amf' ),
        'filter_items_list'     => __( 'Filter Service list', 'amf' ),
    );
    $args = array(
        'label'                 => __( 'Services', 'amf' ),
        'description'           => __( 'Service Description', 'amf' ),
        'labels'                => $labels,
        'supports'              => array('title','thumbnail' ),
        'taxonomies'            => array(),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 20,
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => false,
        'exclude_from_search'   => true,
        'publicly_queryable'    => true,
        'menu_icon'             => 'dashicons-admin-tools',
        'capability_type'       => 'post',
    );
    register_post_type( 'Services', $args );
}
add_action( 'init', 'services_post_type', 0 );